@extends('layout.master')
@section('title')
Faqs | Japan Eye Hospital
@stop
@section('content')

<section class="section breadcrumb-section">
    <div class="breadcrumb-section-inner">
      	<div class="container">
            <!-- Breadcrumb-->
            <div class="breadcrumb">
              	<div class="breadcrumb-inner">
                	<div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('/')}}">Home</a></div>
                	<div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">FAQs</span></div>
              	</div>
            </div>
      	</div>
    </div>
</section>
<!-- Page title-->
<section class="section section-md bg-primary-lightest">
    <div class="container">
      	<div class="row row-30 justify-content-center text-center">
			<div class="col-md-10 col-lg-9 col-xl-8">
              	<h1>Frequently asked questions at Japan Eye Hospital </h1>
              	<p>Contributing to Cambodia through providing Japanese standard medical service</p>
            </div>
      	</div>
    </div>
</section>
<!-- Accordion line-->
<section class="section section-md bg-transparent">
    <div class="container">
      	<div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="accordion accordion-line">
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-4 col-md-4 col-lg-4">
                            <div class="h5" id="buttonLogin1" style="cursor: pointer;border: 1px solid #ccc;border-radius: 50px;padding: 10px;background-color: #8067BD;color: #fff;text-align:center;font-size:1.15rem">SURGICAL PROCEDURES</div>
                        </div>
                        <div class="col-xs-4 col-md-4 col-lg-4">
                            <div class="h5" id="buttonLogin2" style="cursor: pointer;border: 1px solid #ccc;border-radius: 50px;padding: 10px;text-align:center;font-size:1.15rem">EXAMINATION AND CONSULTATION</div>
                        </div>
                        <div class="col-xs-4 col-md-4 col-lg-4">
                            <div class="h5" id="buttonLogin3" style="cursor: pointer;border: 1px solid #ccc;border-radius: 50px;padding: 10px;text-align:center;font-size:1.15rem">OTHER QUESTIONS</div>
                        </div>
                    </div>
                    <div id="login_Box_Div1">
                  	    <div class="accordion-item">
                		    <div class="accordion-head h5">What are conditions for a surgery?</div>
                            <div class="accordion-body">
                                To be eligible for a surgery, you should meet the following required and sufficient conditions:<br>You are at least 18 years old<br>Your parameters for refractive errors, corneal thickness, and corneal map must be within the permissible limits.<br><br>
                                <b>How often should I get my eye examinations?</b><br>
                                You should get eye checked 01 day, 01 week, 1-3-6-12 months after your surgery.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">How long does the cataract surgery take?</div>
                            <div class="accordion-body">
                                It takes around 20 – 30 minutes depending on its complexity.<br><br>
                                <b>Does Phaco surgery cause pain, is its incision stitched and are my eyes patched or not?</b><br>
                                The Phaco surgery usually causes no pain or bleeding, with a very small incision of about 2.8mm only on your corneal edge which requires no stitching and eye bandage after surgery. Postoperative recovery time is very fast.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">How is my vision after the surgery? When can I see after my surgery?</div>
                            <div class="accordion-body">
                                Your post-operative vision depends on your fundus (retina) conditions which have been examined and diagnosed by the doctor before your surgery. Patients who have surgery in the first stage of cataract often achieve higher vision than the one that have surgery when his/her lens becomes hardened.<br>

                                In most cases, you can see normally in the very first days after your surgery. However, in cases of taking surgery when your lens is too hard, your vision at first can still be blurred, but it will become gradually clear after 1 or 2 days of applying eye drops as instructed by your doctor.

                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">What should I do before my cataract surgery?</div>
                            <div class="accordion-body">
                            Before making your decision, you will be examined and diagnosed thorough:<br>

                            - Vision, refraction, eye pressure measurement for post-operative vision diagnosis<br>
                            - Retinal imaging for assessing stability of your fundus (retina)<br>
                            - Retinal B-scan ultrasonography to assess the vitreous body<br>
                            - A-scan ultrasonography and IOL Master measurement to calculate the most exact lens power.<br>

                            Based on the obtained parameters, your doctor shall consult and analyze the artificial lenses’ suitability with your eyes, which serves as a basis for selecting the best lenses for you.

                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">What should I note before, during and after my surgery?</div>
                            <div class="accordion-body">
                                You are required to follow your doctor’s instructions concerning the examination steps, and cooperate with him/her during your surgery as well as take medication after your surgery. You also should carry out your follow-up examination timely and keep your eye clean.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">How long does it take me to get back to my normal living after the surgery?</div>
                            <div class="accordion-body">
                                Around 1 – 3 days.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">How long does the surgery take?</div>
                            <div class="accordion-body">
                                It may take 40 minutes to 2 hours depending on its difficulty.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">Does the surgery cause any pain during and after its implementation?</div>
                            <div class="accordion-body">
                                Your eye will be injected with topical anesthetic to make you feel no pain during the surgery. After that, you may feel some aches, as such you may get a sedative to get more comfortable.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">What should I note before, during and after my surgery?</div>
                            <div class="accordion-body">
                                You are required to follow your doctor’s instructions on the examination steps, and cooperate with them during your surgery as well as take medications after your surgery. In some cases, you should pay attention to the lying position after your surgery (lying on your back, lying on your stomach, etc.). It is very important that you follow our post-operative follow up schedule and keep your eye clean
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">What are the required conditions for a vitrectomy?</div>
                            <div class="accordion-body">
                                On your part: your condition is defected exactly and suited for a vitrectomy.<br>
                                On our part: we must be fully equipped with required equipment, materials and have surgeons are well-trained and experienced in vitrectomy.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">How long does it take me to get back to my normal living after the surgery?</div>
                            <div class="accordion-body">
                                After 3 – 7 days.
                            </div>
                      	</div>
                    </div>
                    <div id="login_Box_Div2" style="display:none;">
                  	    <div class="accordion-item">
                    	   <div class="accordion-head h5">How to make an appointment?</div>
                    	   <div class="accordion-body">
                                You are highly recommended to make an appointment with us at least 01 day in advance.<br>
                                Please call us at: 087 465 283/ 096 842 2064 (8:00 -17:00 daily) or make it online here: https://jeh-kh.com/appointments
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">If I have other questions, how can I get them answered?</div>
                           <div class="accordion-body">
                                Please contact us at: 087 465 283/ 096 842 2064 (8:00 -17:00 daily) or make it online here: https://jeh-kh.com/appointments<br>
                                You can also connect with us via our Facebook page at: https://www.facebook.com/japaneyehospital.cambodia
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">What is cataract?</div>
                           <div class="accordion-body">
                                There is a structure in your eye which looks like a transparent focusing lens, called the lens. It carries the function of refraction and accommodation to help your eye to see near and far objects. If it is no longer transparent, it is called cataract.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">What are the causes of cataracts?</div>
                           <div class="accordion-body">
                                The most common cause is aging. Also there are some other causes including congenital condition, trauma, working under strong light for long time, side effects of certain medications or systemic diseases
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">How to detect cataracts?</div>
                           <div class="accordion-body"> 
                                You are recommended to have your eye checked annually or upon defecting any abnormalities in vision (blurred vision), light perception (glare) or color (color is not bright, sharp). By looking into the lens, the ophthalmologist will know its condition, so you are recommended to take regular examinations.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">Does cataract happen in the elderly only?</div>
                           <div class="accordion-body">  
                                It mainly occurs in the elderly, but can also occur in young people, children or even infants.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">How to treat the cataract?</div>
                           <div class="accordion-body"> 
                                There are 02 ways to treat the cataract:<br>
                                Phaco (or Phacoemulsification). This procedure involves fragmentizing and separating the cloudy lens into small pieces by high frequency ultrasonic waves and aspirating them through a small incision. After the lens particles are removed, an intraocular lens implant, commonly referred to as an IOL, is implanted and positioned into the lenses natural capsule.<br>
                                Laser Cataract surgery shares the same mechanism of fragmentizing the cloudy lens and aspirating it out and implanting an appropriate artificial lens. However, in this procedure, a number of manual operations by the surgeon such as creating an incision, creating a tearing path for the lens membrane and fragmentizing the cloudy lens shall be performed by Femtosecond Laser, bringing many outstanding advantages in terms of accuracy, safety, and quick recovery.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">When should I take Phaco surgery?</div>
                           <div class="accordion-body"> 
                                The ideal time to get a cataract surgery is when your vision is about 3/10 – 4/10. In some special cases, for example, you are driving regularly or doing works requiring high accuracy, you can get it when your vision is 5/10 – 6/10. It is not recommended to wait until your vision is completely lost. Because in that case your cataract is too mature which can cause complications and reduce the success rate of the operation.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">Are there any complications for cataract surgery?</div>
                            <div class="accordion-body"> 
                                A successful cataract surgery is the one that leaves no complications. You may have some discomfort for a short time after your surgery which is caused by your dry eyes. If you take follow-up examinations and get medication guidance on time, this discomfort will gradually disappear.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">Why does vision sometimes get impaired after a certain period of Phaco surgery?</div>
                           <div class="accordion-body"> 
                                The condition in which the vision becomes blurred after a certain period of Phaco surgery is caused by various reasons. The most popular one is secondary Posterior Capsule Opacification. Posterior capsule is a transparent membrane remained after the surgery to put the artificial lens on. It’s not difficult to deal with this condition. Your vision will be restored by a laser posterior capsulotomy.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">What is vitrectomy?</div>
                           <div class="accordion-body">
                                Vitrectomy is a surgical intervention on the vitreous humor – the retina (fundus) which it the backmost part of the eyeball.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">Which diseases can the vitrectomy deal with?</div>
                           <div class="accordion-body">
                                Retinal detachment, proliferative diabetic retinopathy, macular pucker, severely cloudy vitreous humor, etc.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">In case of myopia, does wearing prescription glasses regularly result in its quick progression?</div>
                           <div class="accordion-body">
                                No. People with myopia have poor distant vision. Therefore, they need to wear glasses to improve their visual function and quality of life. Failure to wear glasses regularly will cause the children’s visual function to be less developed, refractive error disorder, resulting in faster progression of myopia compared to those who wear glasses regularly
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">Can I take medicine or acupressure to treat myopia?</div>
                           <div class="accordion-body">
                                In fact, leading experts in ophthalmology claim that there are not any reliable medical studies or proofs showing that people with myopia can regain good vision by those ways. The cases of vision improved after the above “exercises” are due to pseudo myopia – a condition in which the refractive index experiences a temporary increase caused by eyes over accommodation or accommodation disorder.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">How to slow myopia progression?</div>
                           <div class="accordion-body">
                                At school age, children’s eyes have to engage in many close-up activities. During their puberty, their eyeball structure will change a lot, so their myopia will still increase. However, it is possible to control their myopia by encouraging them to wear glasses regularly, join reasonable activities, limit use of electronic devices, spend more time playing outdoors so that their eyes can be trained to see far away. Some other solutions recommended by ophthalmologists to control myopia progression are to use Ortho K overnight lenses, use 0.01% Astropine, and wear framed glasses or multifocal contact lenses. As parent(s), you should consult an ophthalmologist for advice and guidance on suitable solutions for your children’s eyes.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">Does myopia cause any complications?</div>
                           <div class="accordion-body">
                                Pure myopia has without retinal damage usually lead to no serious complication. However, a severe myopia can cause peripheral retinal degeneration, resulting in a retinal tear or detachment. This is a very serious complication that can lead to blindness. People with retinal degeneration caused by myopia need regular monitoring and treatment when necessary.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">When can I have myopia surgery?</div>
                           <div class="accordion-body">
                                The suitable age for surgery of this kind is at least 18 years old, with stable refractive index, eligible corneal parameters. Therefore, it is necessary to have a comprehensive examination before the surgery to get evaluation and consultation about the best surgical method by the doctor.
                            </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-head h5">How often should I take my eye examination?</div>
                           <div class="accordion-body">
                                Children under 18 years old should wear glasses of the right lens power, take eye examination every 3 or 6 months to control changes in their lens power. During their puberty, the myopia still experiences changes, as such their glasses should be corrected for the best vision.

                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-head h5">If I have other questions, how can I get them answered?</div>
                            <div class="accordion-body">
                                Please contact us at: 087 465 283/ 096 842 2064 (8:00 -17:00 daily) or make it online here: https://jeh-kh.com/appointments<br>
                                You can also connect with us via our Facebook page at: https://www.facebook.com/japaneyehospital.cambodia
                            </div>
                  	    </div>
                    </div>
                    <div id="login_Box_Div3" style="display:none;">
                      	<div class="accordion-item">
                            <div class="accordion-head h5">Is there any offer provided by the Hospital?</div>
                            <div class="accordion-body">
                                You are highly recommended to make an appointment with us at least 01 day in advance.<br>

                                Please call us at: 087 465 283/ 096 842 2064 (8:00 -17:00 daily) or make it online here: https://jeh-kh.com/appointments
                            </div>
                      	</div>
                    </div>
                  	<!-- <div class="accordion-item">
                        <div class="accordion-head h5">Sit amet commodo nulla facilisi nullam vehicula ipsum?</div>
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                  	</div>
                  	<div class="accordion-item">
                        <div class="accordion-head h5">Aliquet porttitor lacus luctus?</div>
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                  	</div> -->
                </div>
            </div>
      	</div>
    </div>
</section>
 <!-- Contact us 4-->
<section class="section section-md bg-transparent section-offset-3">
    <div class="container section-offset-item">
      	<div class="row row-15 justify-content-center">
            <div class="col-sm-10 col-lg-8">
              	<div class="box box-form-1">
	                <div class="box-header">
	                  	<h3 class="box-title">Contact Us</h3>
	                </div>
                	<div class="box-body">
	                  	<form class="rd-form" action="{{route('sendEmail')}}" method="POST" data-form-output="home-contact-1" data-form-type="contact">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row row-20 align-items-center">
                      <div class="col-12">
                        <div class="form-group">
                          <label class="form-label" for="home-contact-1-name">* Full name</label>
                          <div class="form-control-wrap">
                            <input class="form-control" id="home-contact-1-name" type="text" name="name" required="" placeholder="e.g. Adam Smith" data-constraints="@Required">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label" for="home-contact-1-email">* Email</label>
                          <div class="form-control-wrap">
                            <input class="form-control" id="home-contact-1-email" type="email" name="email" required="" placeholder="e.g. adamsmith@company.com" data-constraints="@Email @Required">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label" for="home-contact-1-phone">* Phone number</label>
                          <div class="form-control-wrap">
                            <input class="form-control" id="home-contact-1-phone" type="text" name="phone" required="" placeholder="e.g. 123-456-7890" data-constraints="@Numeric @Required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label class="form-label" for="home-contact-1-message">Message</label>
                          <div class="form-control-wrap">
                            <textarea class="form-control" id="home-contact-1-message" name="textarea" required="" placeholder="Your message" data-constraints="@Required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="rd-form-btn text-start">
                          <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                          @if(Session::get('success'))
                              <div class="alert alert-success" style="margin-top:15px;background-color:gray;padding:5px;">
                                  {{session::get('success')}}
                              </div>
                            @endif
                        </div>
                      </div>
                      <div class="col-md-7 col-xl-8">
                        <div class="rd-form-meta small"><span>By clicking the button you agree to the </span><a class="link link-underline" href="{{route('privacy_policy')}}">Privacy Policy</a><span> .</span></div>
                      </div>
                    </div>
                  </form>
                	</div>
              	</div>
            </div>
      	</div>
    </div>
</section>
@stop