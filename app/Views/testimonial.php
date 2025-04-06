

<style> article img{max-width:100%!important}
.v-in-num-box p{font-size:1.5em}
.v-in-num-box .number{font-size:72px;font-weight:700;color:#000;line-height:1;margin-bottom:0}
.v-in-num-box .number span{color:#005897;margin-left:10px}
.blog-info{font-size:14px;color:#6f6f6f}
@media  screen and (min-width: 768px) {
.article-heading{position:absolute;bottom:0}
.article-heading h1{padding:10px 20px 0;margin-bottom:0;color:#fff}
.article-heading .blog-info{padding:5px 20px 10px;border-radius:0 0 15px 15px;color:#d7d7d7}
.article-heading h1,.article-heading .blog-info{background-color:#005897}
span.text-uppercase a {color: white;}
}
.blog-bg-light{padding:1.6em;background:#c1e4f9;border-radius:.75em;margin-bottom:26px;}
article ul li{font-size:16px;color:#494949;margin-bottom:5px;padding-left:25px;list-style:none;background-image:url(https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/circle-green.webp);background-repeat:no-repeat;background-position:left top 3px;background-size:15px}
blockquote{position:relative;padding:60px 30px 20px;background:#005897;border-radius:.75em;color:#fff;font-size:18px;text-align:center}
blockquote:after{content:"";width:35px;height:30px;position:absolute;top:15px;left:50%;margin-left:-17px;background:url(https://www.vaidam.com/assets/knowledge_center/dubbole-comma.webp) no-repeat;background-size:contain}
aside.position-sticky{top:30px;margin-bottom:30px}
.form-label{display:none}
.author-box figure{width: 148px;text-align:center}
.author-box .author-details{width:calc(100% - 158px)}
.reviwer-details{width:calc(100% - 100px)}
.reviwer-box{background:#d5ffe5}
.reviwer-box figure{width:80px;text-align: center;}
.related-tag .btn{line-height:28px!important;border:1px solid #005897!important;margin:8px}
.table-of-content{background-color:var(--bg-secondary)}
.responsive-table{overflow-x:auto;margin:26px 0;border-radius:10px;border:1px solid #eee}
.responsive-table table tr:nth-child(even) td{background:#fff9e8}
.responsive-table table tr td,.cnt_bx table tr th{border-bottom:1px solid #ccc}
.responsive-table table{border-radius:20px;border:1px solid #ddd;width:100%}
.responsive-table table tr th{background:#eff3f4;text-transform:capitalize;font-weight:600}
.responsive-table table tr td,.cnt_bx table tr th{padding:15px;vertical-align:middle}
.responsive-table table tr:last-child td{border-bottom:none}
.responsive-table table .nowrap{white-space:nowrap}
.responsive-table table p{margin-bottom:0}
.slick-track{left:-10px}
.slick-slider{margin:0;padding-bottom:48px}
.slick-slide{padding:10px;margin-right:10px;margin-left:10px}
.slick-dots {
	display: flex;
	justify-content: center;
	bottom: -10px;
	margin: 0 auto;
  max-width: 96%;
	padding: 1rem 0;
	list-style-type: none;
		li {
			margin: 0 0.25rem;border: 1px solid #ec4124;border-radius: 100%;overflow: hidden;
		}
		button {
			display: block;
			width: 1em;
			height: 1em;
			padding: 0;	
			background-color: #fff;
			text-indent: -9999px;
		}
		li.slick-active button {
			background-color: #ec4124;
		}
}
.card-title,.card-text{color:#333}
#btn-back-to-top{position:fixed;bottom:80px;right:32px;display:none}
@media  screen and (max-width: 768px) {
.v-in-num-box .number{font-size:42px}
.v-in-num-box p{font-size:1.25em}
.author-box,.reviwer-box{flex-direction: column}
.author-box figure,.reviwer-box figure{width:100%}
.author-box .author-details,.reviwer-box .reviwer-details{width:100%}
h1 {
  margin-top: 15px;
}
}
article figure{
  margin-bottom: 0;
}
.article-image img,.article-img img {
    width: 100%;
    border-radius: 12px;
}

.blog-info img {
    filter: grayscale(100%);
}

.author-details p:last-child {
    margin-bottom: 0;
}

.slick-prev, .slick-next {
    background: #c1e4f9;
    border-radius: 50%;
    opacity: .98;
}
.slick-next {
    right: 5px;
}
.slick-prev {
    left: 5px;
}
iframe {
    border: 0;
    max-width: 100%;
    margin: 0 auto;
    display: block;
} </style>


<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle doctor-details pt-3" data-gtm-vis-recent-on-screen2242002_280="1009" data-gtm-vis-first-on-screen2242002_280="1009" data-gtm-vis-total-visible-time2242002_280="100" data-gtm-vis-has-fired2242002_280="1">
   <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(''); ?>patient-testimonials">Patient Testimonials</a></li>
            <li class="breadcrumb-item"><span title="<?php echo $testimonial[0]->title; ?>"><?php echo $testimonial[0]->title; ?></span></li>
         </ol>
      </nav>
   </div>
</section>


<sction class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="pt-4 pt-md-5 pb-4">
                    <h1><?php echo $testimonial[0]->title; ?></h1>
                </article>
                <div class="blog-content">
                    <?php echo $testimonial[0]->content; ?>
                
                
                    <div class="row body-form-row mb-5">
                        <div class="col-12">
                            <div class="form-col-box py-4 px-4 bg-vh-secondary rounded-3">
                                <div class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4"> <img class="mr-2" loading="lazy" src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg" width="50" height="50" alt="Know more" title="Know more"> <span class="d-flex justify-content-center flex-column lh-base"> <strong class="fs-4" style="text-align:center;">Get in Touch with Medical Experts</strong> <small>Treatment plan and quote within 2 days</small> </span> </div>
                                <div id="custom-form col-12">
                                    <form class="row" id="genericForm" autocomplete="off">
                                    <input type="hidden" name="_token" id="_token" value="yNPx7fRXp6fxrHjQZLY2DilFprlUcSTytkufRMgL"> <input type="hidden" name="pagetype" value=""> <input type="hidden" name="page_source" id="page_source" value="https://www.vaidam.com/knowledge-center/liberian-patient-receives-expert-medical-care-india-vaidams-assistance"> <input type="hidden" name="lang1" id="lang1" value="https://www.vaidam.com/knowledge-center/liberian-patient-receives-expert-medical-care-india-vaidams-assistance"> <input type="hidden" name="second_form" value="yes"> <input type="hidden" name="preferredLocation" id="preferredLocation" value="India"> <!-- <input type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page"> -->   <input type="hidden" name="Page_Type" id="Page_Type" value="knowledge center"> <input type="hidden" name="c_url" id="c_url" value=""> 
                                    <div class="col-12 mb-3"> <label for="inputName" class="form-label">Name</label> <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required=""> </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputEmail" class="form-label">Email</label> 
                                        <div class="input-group"> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required=""> </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputState" class="form-label">Country</label> 
                                        <select class="form-select" id="country" placeholder="Select Country" name="country" required="true">
                                            <option selected="">Select Country</option>
                                            <option value="AF">Afghanistan</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3 autocomplete stategroup" style="display: block;"> <label for="inputCity" class="form-label">City</label> <input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City"> <input type="hidden" id="state" name="state"> </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputPhone" class="form-label">Phone Number</label> 
                                        <div class="input-group"> <input class="input-group-text" id="country_phone_code" name="country_phone_code" placeholder="Code" style="width: 80px;"> <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no."> </div>
                                    </div>
                                    <div class="col-12 mb-3" id="ageblock" style="display: block;"> <label for="inputAddress2" class="form-label">Patient's Age or Date Of Birth</label> <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div>
                                    <div class="col-12 mb-3"> <label for="medicalIssue" class="form-label">Medical Issue</label> <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea> </div>
                                    <div class="col-12 mb-3" id="emirates-id-block3" style="display: none;"> <label for="inputCity" class="form-label"> Emirates ID </label> <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)"> </div>
                                    <div class="col-12 mt-2">
                                        <div class="d-grid"> <button type="submit" id="search-main-form-btn" class="btn btn-danger online-consult-button in_page_form ">Contact Us Now</button> </div>
                                    </div>
                                    </form>
                                    <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4">By submitting the form I agree to the <a title="Terms of Use" href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use</a> and <a title="Privacy Policy" href="/privacy-policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of Vaidam Health. </span> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reviewer row"> 
                    <div class="col-12 mb-4"> 
                        <div class="author-box p-3 rounded-3 row-gap-3 border d-flex align-items-center bg-light"> 
                            <figure class="me-3 mb-0"> 
                                <img class="rounded-3" alt="shraddha" src="<?= base_url(''); ?><?php echo $testimonial[0]->author_image; ?>" width="80" height="80"> 
                                <figcaption> Author Name <br><strong><?php echo $testimonial[0]->author_name; ?></strong> </figcaption> 
                            </figure> 
                            <div class="author-details bg-white p-3 rounded-3"> 
                                <p class="mb-0"></p>
                                <p class="rtejustify"><?php echo $testimonial[0]->author_description; ?></p> 
                                <p></p> 
                            </div> 
                        </div> 
                    </div> 
                </div>


            </div>

            <div class="col-lg-4 position-relative d-none d-md-block">
                <aside class="position-sticky my-5">
                    <div class="row body-form-row pt-0 pb-4">
                        <div class="col-12">
                            <div class="form-col-box bg-theam-2 p-4 rounded-3">
                            <div class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4"> <img class="mr-2" loading="lazy" src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg" width="50" height="50" alt="Know more" title="Know more"> <span class="d-flex justify-content-center flex-column lh-base"> <strong class="fs-4" style="text-align:center;">Get in Touch with Medical Experts</strong> <small> Treatment plan and quote within 2 days </small> </span> </div>
                            <div id="custom-form-doctor-card col-12">
                                <form class="row" id="secondFormInList" autocomplete="off">
                                    <input type="hidden" name="_token" id="_token" value="yNPx7fRXp6fxrHjQZLY2DilFprlUcSTytkufRMgL"> <input type="hidden" name="pagetype" value=""> <input type="hidden" name="page_source" id="page_source-sfil" value="https://www.vaidam.com/knowledge-center/liberian-patient-receives-expert-medical-care-india-vaidams-assistance"> <input type="hidden" name="lang1" id="lang-sfil" value="https://www.vaidam.com/knowledge-center/liberian-patient-receives-expert-medical-care-india-vaidams-assistance"> <input type="hidden" name="second_form" value="yes"> <input type="hidden" name="preferredLocation" id="preferredLocation" value="India">  <input type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page"> <input type="hidden" name="c_url" id="c_url" value=""> 
                                    <div class="col-12 mb-3"> <label for="inputName" class="form-label"> Name </label> <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required=""> </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputEmail" class="form-label"> Email </label> 
                                        <div class="input-group"> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required=""> </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputState" class="form-label"> Country </label> 
                                        <select class="form-select country" id="country-sfil" placeholder="Select Country" name="country" required="true">
                                        <option selected="">Select Country</option>
                                        <option value="AF">Afghanistan</option>
                                        
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3 autocomplete stategroup-sfil" style="display: block;"> <label for="inputCity" class="form-label"> City </label> <input type="text" class="form-control" name="city" id="city-sfil" placeholder="Enter city"> <input type="hidden" id="state-sfil" name="state"> </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputPhone" class="form-label"> Phone Number </label> 
                                        <div class="input-group"> <input class="input-group-text country_phone_code" id="country_phone_code-sfil" name="country_phone_code" placeholder="Code" style="width: 60px;"> <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no."> </div>
                                    </div>
                                    <div class="col-12 mb-3" id="ageblock-sfil" style="display: block;"> <label for="inputAddress2" class="form-label"> Patient's Age or Date Of Birth </label> <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div>
                                    <div class="col-12 mb-3"> <label for="medicalIssue" class="form-label"> Medical Issue </label> <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea> </div>
                                    <div class="col-12 mb-3" id="emirates-id-block2" style="display: none;"> <label for="inputCity" class="form-label"> Emirates ID </label> <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)"> </div>
                                    <div class="col-12 mt-2">
                                        <div class="d-grid"> <button type="submit" id="search-main-form-btn" class="btn btn-danger online-consult-button-sfil submit-form-btn in_page_form "> Contact Us Now </button> </div>
                                    </div>
                                </form>
                                <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4"> By submitting the form I agree to the <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Terms of Use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms"> Terms of Use </a> and <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Privacy Policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy"> Privacy Policy </a> of Vaidam Health. </span> 
                            </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>


<section class="in-numbers-section bg-theam py-4">
   <div class="container">
      <div class="row">
         <div class="col-lg-7">
            <p class="fs-5 text-white">Have questions about billing, travels, or something else? Call</p>
         </div>
         <div class="col-lg-5 d-flex gap-4 flex-wrap">
            <a class="readmore whatsapp-color px-5" href="https://api.whatsapp.com/send?phone=919958278202&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.medassure.co.in/patient-testimonials/<?= $slug; ?>?source=wpchat_KDSB%20,%20Thank%20you!" title="Whatsapp About">Whatsapp Us</a> 
            <a class="readmore px-5" title="Send Enquiry" href="<?= base_url(''); ?>consult-online">info@medassure.co.in</a> 
         </div>
      </div>
   </div>
</section>

<section class="in-numbers-section bg-vh-secondary py-5">
   <div class="container">
      <div class="row">
         <div class="col-12 mb-4">
            <h2>Medassure in Numbers</h2>
         </div>
         <div class="col-12">
            <div class="v-in-number d-flex flex-wrap gap-3 justify-content-between">
               <div class="v-in-num-box">
                  <p class="number">500<span>+</span></p>
                  <p>Top Class Hospitals</p>
               </div>
               <div class="v-in-num-box">
                  <p class="number">100,000<span>+</span></p>
                  <p>International Patients Assisted</p>
               </div>
               <div class="v-in-num-box">
                  <p class="number">10,000<span>+</span></p>
                  <p>Experienced Doctors</p>
               </div>
               <div class="v-in-num-box">
                  <p class="number">10<span>+</span></p>
                  <p>Countries</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>