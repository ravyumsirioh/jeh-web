;
(function ($, window, document, undefined) {

	'use strict';

	/**
	 * Creates a calendar.
	 * @class The RD Calendar.
	 * @public
	 * @param {HTMLElement|jQuery} element - The element to create the calendar for.
	 * @param {Object} [options] - The options
	 */
	function RDCalendar(element, options) {

		/**
		 * Current options set by the caller including defaults.
		 * @public
		 */
		this.options = $.extend({}, RDCalendar.Defaults, options);

		/**
		 * Plugin element.
		 * @public
		 */

		this.$element = $(element);

		var currentDate = this.$element.find('.'+this.options.classes.table).data('date');

		this.$element.data('currentDate', currentDate? new Date(currentDate):  new Date());
		this.$element.data('todayDate', new Date());

		this.evt = {};

		/**
		 * All event handlers of Calendar
		 * @protected
		 * @type {Object}
		 */
		this._handlers = {
			'rdc.next': this.next,
			'rdc.prev': this.prev,
			'rdc.refresh': $.proxy(this.refresh, this)
		};

		this.initialize();
	};

	/**
	 * Default options for the calendar.
	 * @public
	 */
	RDCalendar.Defaults = {
		days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		classes: {
			base: 'rd-calendar',
			next: 'rdc-next',
			prev: 'rdc-prev',
			year: 'rdc-fullyear',
			date: 'rdc-date',
			day: 'rdc-day',
			month: 'rdc-month',
			time: 'rdc-time',
			event: 'rdc-event',
			events: 'rdc-events',
			events_close: 'rdc-events_close',
			table: 'rdc-table',
			table_today: 'rdc-table_today',
			table_event: 'rdc-table_event',
			table_events: 'rdc-table_events',
			table_has_events: 'rdc-table_has-events',
			table_events_count: 'rdc-table_events-count',
			table_day: 'rdc-table_day',
			table_date: 'rdc-table_date',
			table_next: 'rdc-table_next',
			table_prev: 'rdc-table_prev',
			today_date: 'rdc-today_date',
			today_month: 'rdc-today_month',
			today_year: 'rdc-today_fullyear',
			today_day: 'rdc-today_day'
		}
	};

	/**
	 * Initializes the Calendar.
	 * @protected
	 */
	RDCalendar.prototype.initialize = function () {
		this.$element.trigger('rdc.initialize');

		this.read();
		this.create();
		this.watch();

		this.$element.trigger('rdc.initialized');
	};

	/**
	 * Creates additional DOM of Calendar
	 * @protected
	 */
	RDCalendar.prototype.create = function () {
		var self = this;

		self.$element
			.find('.'+self.options.classes.today_date)
			.each(function () {
				$(this).text(self.getTodayDate())
			})
			.end()
			.find('.'+self.options.classes.today_month)
			.each(function () {
				$(this).text(self.getTodayMonth())
			})
			.end()
			.find('.'+self.options.classes.today_year)
			.each(function () {
				$(this).text(self.getTodayYear())
			})
			.end()
			.find('.'+self.options.classes.today_day)
			.each(function () {
				$(this).text(self.getTodayDay());
			});
		self.refresh();


	};

	/**
	 * Creates the events watchers of Calendar
	 * @protected
	 */
	RDCalendar.prototype.watch = function () {
		var self = this;

		self.$element
			.on(self._handlers)
			.find('.' + self.options.classes.next)
			.on('click', function () {
				self.$element.trigger('rdc.next');
				self.$element.trigger('rdc.refresh');
			})
			.end()
			.find('.' + self.options.classes.prev)
			.on('click', function () {
				self.$element.trigger('rdc.prev');
				self.$element.trigger('rdc.refresh');
			})
			.end()
			.find('.' + self.options.classes.events_close)
			.on('click', function () {
				self.$element.removeClass('show-events');
				self.$element
					.find('.' + self.options.classes.event + ', .' + self.options.classes.table_event)
					.removeClass('active');
			})
			.end()
			.delegate('.' + self.options.classes.table_has_events, 'click', function () {
				self.$element
					.find('.' + self.options.classes.table_has_eventsm + ', .' + self.options.classes.event)
					.removeClass('active');

				var date = $(this).find('.' + self.options.classes.table_date).data('date');
				for (var i in self.evt[date]) {
					self.evt[date][i].addClass('active');
				}

				$(this).addClass('active');
				self.$element.addClass('show-events');
			})
	};

	/**
	 * Absorbs all events attached to event calendar
	 * @protected
	 */
	RDCalendar.prototype.read = function () {
		var opt = this.options,
			self = this;

		this.$element.find('.' + opt.classes.event)
			.each(function () {
				var $this = $(this),
					date = (new Date($this.data('date'))).valueOf();

				if (!(date in self.evt)) {
					self.evt[date] = [];
				}

				self.evt[date].push($this);
			});
	};

	/**
	 * Goto next month
	 * @protected
	 */
	RDCalendar.prototype.next = function (e) {
		var $this = $(this),
			date = $this.data('currentDate');

		if (date.getMonth() == 11) {
			date = new Date(date.getFullYear() + 1, 0, 1);
		} else {
			date = new Date(date.getFullYear(), date.getMonth() + 1, 1);
		}

		$this.data('currentDate', date);
	};

	/**
	 * Goto previous month of picker
	 * @protected
	 */
	RDCalendar.prototype.prev = function (e) {
		var $this = $(this),
			date = $this.data('currentDate');

		if (date.getMonth() == 0) {
			date = new Date(date.getFullYear() - 1, 11, 1);
		} else {
			date = new Date(date.getFullYear(), date.getMonth() - 1, 1);
		}

		$this.data('currentDate', date);
	};

	/**
	 * Returns the today year
	 * @protected
	 */
	RDCalendar.prototype.getTodayYear = function () {
		return this.$element.data('todayDate').getFullYear();
	};

	/**
	 * Returns the today day
	 * @protected
	 */
	RDCalendar.prototype.getTodayDay = function () {
		return this.options.days[this.$element.data('todayDate').getDay()];
	};

	/**
	 * Returns the today date
	 * @protected
	 */
	RDCalendar.prototype.getTodayDate = function () {
		return this.$element.data('todayDate').getDate();
	};

	/**
	 * Returns the today month
	 * @protected
	 */
	RDCalendar.prototype.getTodayMonth = function () {
		return this.options.months[this.$element.data('todayDate').getMonth()];
	};

	/**
	 * Returns the current month of calendar
	 * @protected
	 */
	RDCalendar.prototype.getMonth = function () {
		return this.options.months[this.$element.data('currentDate').getMonth()]
	};

	/**
	 * Returns the current year of calendar
	 * @protected
	 */
	RDCalendar.prototype.getYear = function () {
		return this.$element.data('currentDate').getFullYear();
	};

	/**
	 * Refreshes the DOM of calendar according to current date.
	 * @protected
	 */
	RDCalendar.prototype.refresh = function () {
		var self = this,
			opt = this.options,
			$table = this.$element.find('.' + opt.classes.table),
			$calendar = $('<table/>');

		self.$element
			.find('.' + self.options.classes.month)
			.each(function () {
				var $this = $(this);
				$this.text(self.getMonth());
			})
			.end()
			.find('.' + self.options.classes.year)
			.each(function () {
				var $this = $(this);
				$this.text(self.getYear());
			});

		var $week = $('<tr/>');
		for (var i = 0; i < opt.days.length; i++) {
			$week.append($('<th/>', {
				'class': opt.classes.table_day,
				'html': '<span class="rdc-table_week">' + opt.days[i] + '</span>'
			}));
		}
		$calendar.append($week);

		var date = this.$element.data("currentDate"),
			monthLength = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate(),
			prevMonthLength = new Date(date.getFullYear(), date.getMonth(), 0).getDate(),
			firstDay = new Date(date.getFullYear(), date.getMonth(), 1).getDay(),
			counter = 1;

		for (var i = 0; i < 7; i++) {
			$week = $('<tr/>');
			for (var j = 0; j < 7; j++) {
				var day = 7 * i + j + 1,
					currentDate,
					cell = $('<td/>'),
					count = undefined,
					events = undefined,
					currentDay = $('<div/>', {'class': opt.classes.table_date}),
					today = new Date();

				today.setHours(0);
				today.setMinutes(0);
				today.setSeconds(0);
				today.setMilliseconds(0);

				// If Month had ended and new week started
				if (j == 0 && day > monthLength + firstDay) {
					break;
				}

				// If the day belongs to previous month
				if (day - firstDay < 1) {
					currentDay.text(prevMonthLength + (day - firstDay)).addClass(opt.classes.table_prev);
					currentDate = new Date(date.getFullYear(), date.getMonth() - 1, prevMonthLength + (day - firstDay));
				}

				// If the day belongs to current month
				else if (day <= monthLength + firstDay) {
					currentDay.text(day - firstDay);
					currentDate = new Date(date.getFullYear(), date.getMonth(), day - firstDay);
				}

				// If the day belongs to next month
				else {
					currentDay.text(counter).addClass(opt.classes.table_next);
					currentDate = new Date(date.getFullYear(), date.getMonth() + 1, counter++);
				}

				// If current day is today
				if (currentDate.valueOf() == today.valueOf()) {
					currentDay.addClass(opt.classes.table_today);
				}

				// If current day has events
				if (currentDate.valueOf() in this.evt) {
					cell.addClass(opt.classes.table_has_events);
					count = $('<div/>', {'class': opt.classes.table_events_count}).text(this.evt[currentDate.valueOf()].length);

					events = $('<ul/>', {'class': opt.classes.table_events});

					$(this.evt[currentDate.valueOf()]).each(function () {
						events.append($('<li/>', {'class' : opt.classes.table_event}).html($(this).html()));
					});
				}

				cell.append(currentDay.data('date', currentDate.valueOf()));

				if(count){
					cell.append(count);
				}

				if(events){
					cell.append(events);
				}

				$week.append(cell);
			}

			if ($week.html() != '') {
				$calendar.append($week);
			}
		}

		var $target = $table.find('table');
		if ($target.length) {
			$target.replaceWith($calendar);
		} else {
			$calendar.appendTo($table);
		}
	};

	/**
	 * The jQuery Plugin for the RD Calendar
	 * @public
	 */
	$.fn.rdCalendar = function (options) {
		return this.each(function () {
			if (!$(this).data('rdCalendar')) {
				$(this).data('rdCalendar', new RDCalendar(this, options));
			}
		});
	};

	/**
	 * The constructor for the jQuery Plugin
	 * @public
	 */
	$.fn.rdCalendar.Constructor = RDCalendar;
})(window.jQuery, window, document);
