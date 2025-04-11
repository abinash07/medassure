<style> @media  only screen and (max-width: 767px) {
    .bottom-menu.show {
        display: none;
    }
}
      @font-face{font-family:'Pacifico';font-style:normal;font-weight:400;src:local('Pacifico Regular'),local(MyriadPro-Regular),url(https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/fonts/MyriadPro-Regular.woff2) format("woff2");font-display:swap}
@font-face{font-family:'Pacifico';font-style:normal;font-weight:600;src:local('Pacifico Regular'),local(MyriadPro-Semibold),url(https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/fonts/MyriadPro-Semibold.woff2) format("woff2");font-display:swap}
body{color:#464646}
img{max-width:100%}
a{color:#005897}
.hospital-pic{width:100%;height:292px;object-fit: cover;object-position: 50% 50%;}
.right-form,.main-box{display:inline-block}
.hospital-location small{font-size:14px}
.btn-whatsapp{background-color:#25cb68!important}
.list-w-circle li{margin-bottom:12px;padding-left:25px;list-style:none;background-image:url(https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/circle-green.webp);background-repeat:no-repeat;background-position:left top 3px;background-size:15px}
.about-hospital ul,.specialities ul,.infrastructure ul{padding-left:0}
.department-icons{margin-right:6px;width:28px;height:28px}
.department-list a{width:calc(100% / 2);font-size:.9em}
.doctor-search select:focus{outline:none!important;box-shadow:none!important}
.form-select{color:#5f5f5f!important;font-size:1.1em;line-height:20px}
.top-dr-img{width:90px;height:100px}
.dr-info .info{width:calc(100% - 100px);padding-left:12px}
.facilities .accordion{display:flex;gap:1em;flex-wrap:wrap}
.facilities .accordion-button:not(.collapsed){background-color:#005897;color:#fff}
.accordion-button:focus{box-shadow:none!important}
.location-ico{width:36px}
.location-column{width:calc(100% - 36px)}
.location-ico img{margin-top:6px}
.chkd-stars-list{list-style-type:none;padding:0;line-height: 0;}
.chkd-stars-list li{display:inline}
.casestudies-box{background-color:#005897;color:#fff}
.casestudies-box.collapsed{background-color:#c1e4f9;color:#5f5f5f}
.yt-play-icon{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)}
.similar-hospital img,.verified-hotel img{width:102px}
.similar-hospital p,.verified-hotel p{width:calc(100% - 102px);padding-left:12px}
.similar-hospital p img{width:22px}
.slick-slide{margin-right:10px;margin-left:10px}
.relatedimg .slick-slide img{width:100%;height:260px;object-fit:cover;object-position:50% 50%;}
.related-link-box ul{padding-left:0}
.related-link-box ul li{display:inline-block;position:relative;padding-left:12px;margin-right:15px;margin-bottom:10px}
.related-link-box ul li:after{content:'';height:6px;width:6px;background:#464646;position:absolute;left:0;top:8px;border-radius:20px}
.related-link-box ul li a{color:#666}
@media    screen and (min-width: 991px) {
.case-studies .accordion-item{height:190px;overflow:hidden}
.casestudies-box{width:310px;margin-right:15px}
.case-studies .accordion-collapse.collapse.show{width:calc(100% - 325px);position:absolute;top:0;right:0}
.case-studies .accordion-item{border:none}
}
@media    screen and (max-width: 991px) {
.case-studies .accordion-item{border:none}
}
@media    screen and (min-width: 768px) {
.main-box{width:75%;margin-right:1.5em}
.right-form{width:calc(25% - 1.5em)}
.nuber-box{width:calc(100% / 4)}
.patients-like{max-width:248px;float:right}
.buttons-box{box-shadow:none!important}
.department-list a{width:calc(100% / 2)}
.doctor-search select{width:35%;margin-right:15px}
.doctor-search .btn{width:calc(30% - 30px)}
.facilities .accordion-button{border-radius:10px}
.facilities .accordion-collapse.collapse.show{width:calc(100% - 235px);position:absolute;top:0;right:0}
.facilities .accordion-item{width:calc(100% / 1);border:none;height:50px;overflow:hidden}
.facilities .accordion-header{width:220px;margin-right:15px}
.facilities .accordion-body{padding:0}
.facilities .accordion-body br{display:none}
.facilities .accordion-body ul{padding-left:0}
.facilities .accordion-body ul li{width:46%;float:left;margin-left:4%}
.facilities .accordion-button::after{transform:rotate(-90deg)!important}
.facilities .accordion-button:not(.collapsed)::after{transform:rotate(90deg)!important}
/* .infrastructure ul li{width:calc(100% / 2 - 1em)} */
.location-column p.fw-semibold{height:64px}
/* .infrastructure ul{display:flex;flex-wrap:wrap;gap:20px;padding-left:0} */
.dr-card{width:calc(100% / 2 - 1em)}
.dr-card-btns a{width:49%}
}
@media    screen and (max-width: 767px) {
    h2#find_doc {
    text-align: center;
}
footer { padding-bottom: 48px;}
.right-form,.main-box{width:100%}
.nuber-box{width:calc(100% / 2);flex-direction:column;align-items:center!important}
.buttons-box.py-3{position:fixed;bottom:0;background:#fff;width:100%;padding:0px 0!important;z-index:3}
.num-box-item{display:flex;justify-content:center!important;flex-direction:column;align-items:center!important}
.doctor-search select{width:100%;margin-bottom:15px}
.doctor-search .btn{width:calc(100%)}
.facilities .accordion-item,.department-list a{width:calc(100% / 1)}
.dr-card{width:calc(100% / 1)}
.mob-delay{display:none}
.mob-delay-block{display:block}
.patients-like {
    position: absolute;
    right: 15px;
    bottom: 15px;
    zoom: 65%;
}
.form-heading {
    text-align: center;
}
}
@media    screen and (min-width: 1200px) {
.custom-form-container{position:absolute!important;top:50px!important;max-width:296px;width:100%}
.sticy-form{position:sticky!important;top:20px!important;right:0!important;max-width:460px;width:100%}
}
#custom-form .ms_v_cta_hide,#custom-form form .form-group .control-label,#custom-form .form-group label,.form-group br{display:none!important}
#custom-form .container.block-container{padding:0!important}
#custom-form .form-group{margin-bottom:12px}
#custom-form textarea{height:80px!important;border:var(--bs-border-width) solid var(--bs-border-color);border-radius:var(--bs-border-radius)}
input#country_phone_code{width:25%!important;border-radius:10px 0 0 10px}
input#phone_number{width:75%!important;border-radius:0 10px 10px 0}
.view-mor-review-box,.view-mor-dr-box{display:none}
.readmorebox.collapse:not(.show){display:block!important}
.medical-department .readmorebox.collapse:not(.show){display:flex!important}
.list-w-circle li ul li{background-image:unset;list-style:disc;padding-left:0;margin-left:16px}
[type=submit]{background-color:#dc3545;color:#fff;width:100%;max-width:400px}
.custom-form-container,.doctor-search{border:1px solid #ccc;-webkit-box-shadow:0 0 6px 0 rgba(0,0,0,.17);-moz-box-shadow:0 0 6px 0 rgba(0,0,0,.17);box-shadow:0 0 6px 0 rgba(0,0,0,.17)}
.doctor-search .btn{line-height: 30px;font-size: 1.25em;color:#fff}
.doctor-search select{line-height: 30px}
a.btn.bg-theam:hover{background:#014b81}
.nuber-box a{color:#444}
@media    screen and (max-width: 530px) {
.readmorebox.collapse:not(.show){height:285px!important;line-height: 1.6;overflow:hidden;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}
a.readmore-btn{display:block;text-align:right;display:block;text-align:right}
.readmorebox.collapsing{min-height:52px!important}
a.readmore-btn.collapsed:after{content:'+ See More'}
a.readmore-btn:not(.collapsed):after{content:'- See Less'}
.department-list a{width:100%;display:block}
.dr-card-btns a {width: 100%}
.doctor-search p {text-align: center}
.btns-top{padding:0 !important;gap:0 !important}
.btns-top a.btn{width:50%;border-radius:0;border:0;line-height:30px}
.accrediation span{min-width:30px}
.accrediation div{justify-content:center}
.accrediation{text-align:center}
.location-column{margin:15px 0}
.relatedimg .slick-slide img{height: 160px;}
.hospital-pic {height: 230px;}
}

[type=submit]:hover {
    background-color: #bb2d3b;
    color: #fff;
} 
</style>

<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle hospital-details" data-gtm-vis-recent-on-screen2242002_282="387" data-gtm-vis-first-on-screen2242002_282="387" data-gtm-vis-total-visible-time2242002_282="100" data-gtm-vis-has-fired2242002_282="1"> <div class="container"> <div class="row"> <div class="col-12"> <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb"> <ol class="breadcrumb mt-3"> <li class="breadcrumb-item"><a class="text-secondary" href="https://www.vaidam.com" title="Home">Home</a></li> <li class="breadcrumb-item"><a class="text-secondary" href="https://www.vaidam.com/hospitals" title="Hospitals">Hospitals</a></li> <!-- sagar --> <li class="breadcrumb-item"><a class="text-secondary" href="https://www.vaidam.com/hospitals/india" title="Country">India</a></li> <li class="breadcrumb-item"><a class="text-secondary" href="https://www.vaidam.com/hospitals/india/new-delhi" title="City">New Delhi</a></li> <li class="breadcrumb-item"><span class="text-secondary">Indraprastha Apollo Hospital New Delhi</span></li> </ol> </nav> </div> </div> </div>
</section>

<section class="main py-4 py-md-5 position-relative">
    <div class="container d-flex flex-wrap">
        <div class="main-box">
            <div class="row m-heading position-relative">
                <div class="col-md-9">
                    <p class="star-view d-flex column-gap-2 align-items-center lh-1 d-none d-md-block">
                        <span><img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Star.webp" alt="Reviewing" title="Reviewing" width="18" height="18"></span>
                        <span class="text-danger">You are viewing our top rated Hospital</span>
                    </p>
                    <div class="page-heding d-flex flex-wrap gap-3 mb-2 align-items-center">
                        <h1 class="fs-3 fw-bolder mb-0"><?= $hospital->name; ?></h1>
                        <!-- Hospital rating  --> 
                        <div class="rating d-flex flex-row gap-2 align-items-center">
                        <ul class="chkd-stars-list mb-0 lh-0">
                            <li><img alt="star-rating" title="Rating" height="14" width="14" src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/golden-star.webp"></li>
                            <li><img alt="star-rating" title="Rating" height="14" width="14" src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/golden-star.webp"></li>
                            <li><img alt="star-rating" title="Rating" height="14" width="14" src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/golden-star.webp"></li>
                            <li><img alt="star-rating" title="Rating" height="14" width="14" src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/golden-star.webp"></li>
                            <li><img alt="star-rating" title="Rating" height="14" width="14" src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/half-golden-star.webp"></li>
                        </ul>
                        <!-- End SHow Stars --> <span class="fw-semibold align-items-center"> 4.3 (86 Ratings) </span> 
                        </div>
                        <!-- Hospital rating end --> 
                    </div>
                    <p class="hospital-location text-secondary d-flex column-gap-2 align-items-center lh-base">
                        <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Location-small.webp" title="location" alt="location" width="24" height="24">
                        <small><?= $hospital->city; ?></small>
                    </p>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="patients-like p-2 bg-success-subtle border border-2 border-success rounded-4 d-flex column-gap-2 align-items-center">
                        <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/thumb-green.webp" title="Patients recommended" alt="Patients recommended" width="30" height="26"> 
                        <span class="d-flex lh-1 flex-column">
                        <p class="fs-4 fw-bolder mb-0"><small>95% Patients</small></p>
                        <p class="mb-0"><small>recommended this hospital</small></p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row hos-img-statics">
                <div class="col-md-6">
                    <img class="hospital-pic rounded-4" alt="<?= $hospital->name; ?>" title="<?= $hospital->name; ?>" src="<?= base_url(''); ?><?= $hospital->primary_image; ?>" width="505" height="310">
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img class="hospital-pic rounded-4" alt="<?= $hospital->name; ?>" title="<?= $hospital->name; ?>" src="<?= base_url(''); ?><?= $hospital->secondary_img; ?>" width="505" height="310">
                </div>
                <div class="col-12 hos-number-box">
                    <div class="hos-statics mt-4 px-0 rounded-4 overflow-hidden border bg-light d-flex align-content-start flex-wrap">
                        <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Doctors.webp" width="27" height="20" title="International" alt="International"> 
                            <div class="num-box-item lh-1">
                                <p class=" mb-1">Doctors List</p>
                                <a class="fw-bolder" title="Find Doctor" href="#find_doc"> <span class="fw-bolder">Click Here</span> </a> 
                            </div>
                        </div>
                        <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Location-blue-solid.webp" width="20" title="Location" height="20" alt="Location"> 
                            <div class="num-box-item lh-1">
                                <p class="mb-1">Location</p>
                                <span class="fw-bolder"><?= $hospital->city; ?></span> 
                            </div>
                        </div>
                        <!-- Established --> 
                        <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Established.webp" width="20" title="Established" height="20" alt="Established"> 
                            <div class="num-box-item lh-1">
                                <p class="mb-1">Established in</p>
                                <span class="fw-bolder"><?= $hospital->established; ?></span> 
                            </div>
                        </div>
                        <div class="nuber-box p-3 border">
                            <div class="accrediation lh-1">
                                <p class="mb-1">Accreditations</p>
                                <div class="d-flex column-gap-2 mt-2">
                                    <?php
                                        $accreditation = explode(",", $hospital->accreditation);
                                        foreach($accreditation as $k => $v){
                                    ?>
                                        <span class="d-flex flex-column row-gap-1">
                                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/accreditations_83.jpg" width="30" title="NABH" height="30" alt="NABH"> 
                                            <strong><?= $v; ?></strong>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Specialities --> 
                        <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Specialty.webp" width="21" title="Specialty" height="20" alt="Specialty"> 
                            <div class="num-box-item lh-1">
                                <p class="mb-1">Specialty</p>
                                <span class="fw-bolder"><?= $hospital->specialty; ?></span> 
                            </div>
                        </div>
                        <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/International-dr.webp" width="20" title="International" height="20" alt="International"> 
                            <div class="num-box-item lh-1">
                                <p class="mb-1">Images</p>
                                <a class="fw-bolder" title="Images" href="#images"> <span class="fw-bolder">Click Here</span> </a> 
                            </div>
                        </div>
                        <!-- No of Beds --> 
                        <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                        <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Number-of-beds.webp" width="22" height="20" title="Number of beds" alt="Number of beds"> 
                        <div class="num-box-item lh-1">
                            <p class="mb-1">Number of beds</p>
                            <span class="fw-bolder"><?= $hospital->number_of_bed; ?></span> 
                        </div>
                        </div>
                        <!-- Facilites --> 
                        <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Facilities.webp" width="16" height="20" title="Facilities" alt="Facilities"> 
                            <div class="num-box-item lh-1">
                                <p class="mb-1">Facilities</p>
                                <a title="Facilities" href="#facilities"> <span class="fw-bolder">Click Here</span></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row buttons-box py-3 shadow">
                <div class="col-md-12 btns-top d-flex justify-content-center column-gap-3">
                    <a onclick="setformtype('Indraprastha Apollo Hospital, New Delhi','https:\/\/www.vaidam.com/lp/consult-online?hospital=2522','Book Appointment Sticky Button','https:\/\/www.vaidam.com/lp/consult-online?hospital=2522','Hospital Detail Page','','','Indraprastha Apollo Hospital, New Delhi');" class="btn px-xm-1 px-sm-4 btn-danger book-apt-btn doctor-apt-btn" href="https:\/\/www.vaidam.com/lp/consult-online?hospital=2522" title="Book Appointment" style="display: inline-block;">Book Appointment</a>
                    <a style="display: none;" onclick="setformtype('Indraprastha Apollo Hospital, New Delhi','https:\/\/www.vaidam.com/lp/consult-online?hospital=2522','Send Enquiry Sticky Button','','Hospital Detail Page','','','Indraprastha Apollo Hospital, New Delhi');" class="btn px-xm-1 px-sm-4 btn-danger book-apt-btn send-enq-btn" href="https://www.vaidam.com/lp/consult-online" title="Contact Hospital">Contact Hospital</a>
                    <a title="Whatsapp Us" class="btn px-xm-1 px-sm-4 btn-success btn-whatsapp wa_button_clicked" href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi?source=wpchat_HDSB,%20Thank%20you!"><img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/whatsapp-icon-white.png" alt="Whatsapp Us" title="Whatsapp Us" style="margin-right: 6px;" width="22" height="22"><span>Whatsapp Us</span></a> 
                </div>
            </div>
        </div>

        <div class="right-form"> 
            <div class="custom-form-container mt-5 mt-md-0 bg-theam-2 rounded-4 p-3 position-sticky"> 
                <p class="fs-4 form-heading fw-semibold mb-0">Contact Hospital</p> 
                <p class="form-heading">Treatment plan and quote within 2 days</p> <!-- Start Form --> 
                <div id="custom-form"> 
                    <div class="dynamic_content"> <div class="main_container"> <style type="text/css"> .primary-form{background-color: #f7f7f7;}
            .primary-form-field{width: 75%;
            margin: 0 auto;} </style> <section class="selected-doctor ms_v_cta_hide"> <div class="container block-container"> <div class="panel panel-default"> <div class="panel-body panel-doctor-pif"> <div class="modeofconsultation h2 bold" style="text-align:center;">Send Your Enquiry</div> </div> </div> </div> </section> <div class="container block-container"> <div class="panel panel-default"> <div class="panel-body"> <form class="form-horizontal form-customize" id="genericForm" autocomplete="off"> <input type="hidden" name="_token" id="_token" value="lL213S6ypzXlyAzlDecEWfVLS4moFQ1BuEopBxUt"> <input type="hidden" name="pagetype" value=""> <input type="hidden" name="page_source" id="page_source" value="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi#find_doc"> <input type="hidden" name="lang1" id="lang1" value="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi#find_doc"> <input type="hidden" name="preferredLocation" id="preferredLocation" value="India"> <input type="hidden" name="Page_Type" id="Page_Type" value="Hospital Detail Page"> <input type="hidden" name="Form_Location" id="Form_Location" value="Main Form"> <input type="hidden" name="hospitalName" id="hospitalName" value="Indraprastha Apollo Hospital, New Delhi"> <input type="hidden" name="c_url" id="c_url" value=""> <div class="form-group label-controls"> <label class="control-label col-sm-12" for="name">Name<span class="red">*</span></label> <div class="col-sm-12"> <input type="text" class="form-control new-form-control" id="name" placeholder="Patient Name" name="name" required=""> </div> </div> <div class="form-group label-controls"> <label class="control-label col-sm-12" for="email">Email<span class="red">*</span></label> <div class="col-sm-12"> <input type="email" class="form-control new-form-control" id="email" placeholder="Enter email" name="email" required=""> </div> </div> <div class="form-group label-controls"> <label class="control-label col-sm-12" for="country">Country<span class="red">*</span></label> <div class="col-sm-12"> <select class="form-control new-form-control form-select" id="country" placeholder="Select Country" name="country" required="true"> <option value="" selected="selected">Country</option><option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="BQ">Caribbean Netherlands</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong S.A.R., China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="XK">Kosovo</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao S.A.R., China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="KP">North Korea</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="VI">U.S. Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option> </select> </div> </div> <div class="form-group label-controls stategroup" style=""> <label class="control-label col-sm-12" for="state">City<span class="red">*</span></label> <div class="col-sm-12"> <div class="autocomplete"> <input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City"> <input type="hidden" id="state" name="state"> </div> </div> </div> <div class="form-group label-controls phn-block"> <label class="control-label col-sm-12" for="phone">Phone Number<span class="red">*</span></label> <div class="col-sm-12"> <input type="text" id="country_phone_code" name="country_phone_code" class="form-control new-form-control col-md-2" value="" readonly="" style="width: 15%; float: left;"> <input type="tel" class="form-control new-form-control col-md-10" id="phone_number" placeholder="Your Phone number" name="phone_number" required="" style="width: 84%"> </div> </div> <div class="col-md-12"> <div class="form-group"> <label for="medicalissue">Medical Issue <span class="red">*</span></label><br> <textarea cols="5" rows="5" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem .." style="height:100%; width:100%; resize: vertical;" required=""></textarea> </div> </div> <div class="form-group label-controls" id="ageblock" style=""> <label class="control-label col-sm-12" for="email">Patient's Age or Date Of Birth<span class="red">*</span></label> <div class="col-sm-12"> <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div> </div> <div class="form-group label-controls" id="emirates-id-block" style="display: none;"> <label for="inputCity" class="form-label"> Emirates ID </label> <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)"> </div> <div class="form-group label-controls"> <div class="col-sm-12 text-center"> <button type="submit" id="search-main-form-btn" class="btn online-consult-button in_page_form">SUBMIT DETAILS</button> <!-- <button type="submit" id="search-main-form-btn" class="btn online-consult-button">SUBMIT DETAILS</button>--> </div> </div> </form> <div style="width: 100%;" class="form-group label-controls"> <div class="col-sm-12 text-center"> <span class="formtns-triger text-muted">By submitting the form I agree to the <a title="Terms of Use" href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use</a> and <a title="Privacy Policy" href="/privacy-policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of Vaidam Health.</span> </div> </div> <!-- Model open  --> <!-- Model open  --> <!-- Start Modal Privacy Policy --> <div class="modal fade" id="formTerms" tabindex="-1" role="dialog" aria-labelledby="termsModalCenterTitle" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" role="document"> <div class="modal-content"> <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Terms of Use</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div> <div class="modal-body" id="terms_of_use"> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button> <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div> </div> </div> </div> <!-- End Modal Terms --> <!-- Start Modal Privacy Policy --> <div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="PrivacyPolicyCenterTitle" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" role="document"> <div class="modal-content"> <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Privacy Policy</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div> <div class="modal-body" id="privacy_policy"> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button> <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div> </div> </div> </div> <!-- End Modal Privacy Policy --> <style type="text/css"> #formTerms,#formPrivacyPolicy{font-size:14px;color:#666;top:30px}
            #formTerms .modal-dialog,#formPrivacyPolicy .modal-dialog{margin: 0px auto;}
            #formTerms .modal-title,#formPrivacyPolicy .modal-title{color:#666;font-size:16px;margin:10px}
            .formtns-triger{opacity:.6;font-size:14px;cursor:pointer;}
            #formTerms .modal-header,#formPrivacyPolicy .modal-header{background:unset;padding:0 5px;border:0}
            #formTerms .close,#formPrivacyPolicy .close{font-size:30px;color:#e43939;position:absolute;opacity:1;top:1px;right:5px;z-index:999}
            #formTerms .modal-body,#formPrivacyPolicy .modal-body{padding:5px 15px;max-height:420px;overflow:auto;border-top:1px solid #ddd;border-bottom:1px solid #ddd}
            #formTerms .modal-footer,#formPrivacyPolicy .modal-footer{padding:5px;border-top:0}
            #formTerms .modal-footer .btn,#formPrivacyPolicy .modal-footer .btn{background:#e43939;color:#fff;font-size:14px;line-height:1;border-radius:5px;padding:5px 8px}
            .modal-open .modal{overflow-x:hidden;overflow-y:hidden;}
            #formTerms h2,#formPrivacyPolicy h2{font-size:16px;color:#666}
            #formTerms ul,#formPrivacyPolicy ul,#formTerms ol,#formPrivacyPolicy ol{padding-left:15px}
            #formTerms .modal-content, #formPrivacyPolicy .modal-content{background: #ffffff}
            .modal-backdrop.fade.in{opacity:0.5}
            .modal-backdrop {
            --bs-backdrop-zindex: 0;  
            }
            @media    only screen and (max-width: 520px){
            div#formPrivacyPolicy{top:36px}
            #formTerms .modal-body, #formPrivacyPolicy .modal-body{max-height:480px}
            }
            .formtns-triger a {color: #164399;} </style> </div> </div> </div> </div> </div> <script type="text/javascript"> $(document).ready(function () {
                // When page is ready, check if there is a pre-selected country
                // var urlCountry = getCookie("SetPageCountry");


            function autocomplete(inp, arr) {
                /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                if (inp) {
                inp.addEventListener("input", function (e) {
                    var a,
                        b,
                        i,
                        val = this.value;
                    /*close any already open lists of autocompleted values*/
                    closeAllLists();
                    if (!val) {
                        return false;
                    }
                    currentFocus = -1;
                    /*create a DIV element that will contain the items (values):*/
                    a = document.createElement("DIV");
                    a.setAttribute("id", this.id + "autocomplete-list");
                    a.setAttribute("class", "autocomplete-items");
                    /*append the DIV element as a child of the autocomplete container:*/
                    this.parentNode.appendChild(a);
                    /*for each item in the array...*/
                    for (i = 0; i < arr.length; i++) {
                        /*check if the item starts with the same letters as the text field value:*/
                        if (arr[i]["city"].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                            /*create a DIV element for each matching element:*/
                            b = document.createElement("DIV");
                            /*make the matching letters bold:*/
                            b.innerHTML = "<strong>" + arr[i]["city"].substr(0, val.length) + "</strong>";
                            b.innerHTML += arr[i]["city"].substr(val.length);
                            /*insert a input field that will hold the current array item's value:*/
                            b.innerHTML += "<input type='hidden' value='" + arr[i]["city"] + "'>";
                            if (arr[i]["city"] != undefined) {
                                //document.getElementById("state").value = arr[i]["state"];
                                var stateElement = document.getElementById("state");
                                if (stateElement) {
                                    stateElement.value = arr[i]["state"];
                                }
                            }
                            /*execute a function when someone clicks on the item value (DIV element):*/
                            b.addEventListener("click", function (e) {
                                /*insert the value for the autocomplete text field:*/
                                inp.value = this.getElementsByTagName("input")[0].value;
            
                                /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                                closeAllLists();
                            });
                            a.appendChild(b);
                        }
                    }
                });
                }
                /*execute a function presses a key on the keyboard:*/
                if (inp) {
                inp.addEventListener("keydown", function (e) {
                    var x = document.getElementById(this.id + "autocomplete-list");
                    if (x) x = x.getElementsByTagName("div");
                    if (e.keyCode == 40) {
                        /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                        currentFocus++;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 38) {
                        //up
                        /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                        currentFocus--;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 13) {
                        /*If the ENTER key is pressed, prevent the form from being submitted,*/
                        e.preventDefault();
                        if (currentFocus > -1) {
                            /*and simulate a click on the "active" item:*/
                            if (x) x[currentFocus].click();
                        }
                    }
                });
                }
                function addActive(x) {
                    /*a function to classify an item as "active":*/
                    if (!x) return false;
                    /*start by removing the "active" class on all items:*/
                    removeActive(x);
                    if (currentFocus >= x.length) currentFocus = 0;
                    if (currentFocus < 0) currentFocus = x.length - 1;
                    /*add class "autocomplete-active":*/
                    x[currentFocus].classList.add("autocomplete-active");
                }
                function removeActive(x) {
                    /*a function to remove the "active" class from all autocomplete items:*/
                    for (var i = 0; i < x.length; i++) {
                        x[i].classList.remove("autocomplete-active");
                    }
                }
                function closeAllLists(elmnt) {
                    /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                    var x = document.getElementsByClassName("autocomplete-items");
                    for (var i = 0; i < x.length; i++) {
                        if (elmnt != x[i] && elmnt != inp) {
                            x[i].parentNode.removeChild(x[i]);
                        }
                    }
                }
                /*execute a function when someone clicks in the document:*/
                document.addEventListener("click", function (e) {
                    closeAllLists(e.target);
                });
            }
                
                function getCookie(cname){
                var name=cname+"=";
                var decodedCookie=decodeURIComponent(document.cookie);
                var ca=decodedCookie.split(';');
                for(var i=0;i<ca.length;i++){
                    var c=ca[i];while(c.charAt(0)==' '){c=c.substring(1);}
                    if(c.indexOf(name)==0){return c.substring(name.length,c.length);}
                }
                return "";
                }
                var preferredLocation = getCookie("preferredLocation").replace(/\+/g, ' ');
                var countryCode = getCookie("countryCode");

                // Check for UAE and show emirates ID and city dropdown
                if (preferredLocation == 'United Arab Emirates' && countryCode == 'AE') {
                    $('#emirates-id-block').show();  
                    $('.stategroup').show();        
                    $('#city').attr('placeholder', 'Enter Emirates');  
                    $('#city').replaceWith('<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
                } else if (countryCode == 'IN') {
                    $('#emirates-id-block').hide();
                    $('.stategroup').show();       
                // $('#city').attr('placeholder', 'Enter city');
                
                    //$('#city').replaceWith('<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
                //autocomplete(document.getElementById("city"), cities);
                    
                } else {  
                    $('#emirates-id-block').hide();
                    $('.stategroup').hide();  
                }

                // Handle country selection change event
                $('#country').on('change', function() {
                    var selectedCountry = $(this).val();
                    console.log(selectedCountry);    
                    if (selectedCountry == 'AE') {
                        $('#emirates-id-block').show();  
                    $('.stategroup').show();  
                    $('.stategroup').removeAttr('style').show(); 
                        $('#city').attr('placeholder', 'Enter Emirates');  
                        $('#city').replaceWith('<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
                    } else if (selectedCountry == "IN") {
                        $('#emirates-id-block').hide();  
                        $('.stategroup').show();     
                        $('#city').attr('placeholder', 'Enter city');
                        $('#city').replaceWith('<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
                        autocomplete(document.getElementById("city"), cities); 
                    }   
                    else {
                        $('#emirates-id-block').hide();  
                        $('.stategroup').hide(); 
                    }
                });
            }); </script> </div> <!-- End Form --> </div> 
        </div>
    </div>

    <div class="container d-flex flex-wrap flex-column-reverse flex-md-row">
        <div class="main-box">
            <div class="row">
                <div class="col-12 about-hospital list-w-circle readmorebox collapse" id="aboutHospital">
                    <h2 class="fs-3 mb-4 mt-5 mt-md-4">About Hospital</h2>
                    <?= $hospital->about; ?>
                </div>

                <div class="col-12 pt-5 specialities-box" id="Specialities"> 
                    <div class="specialities p-3 rounded-4 border bg-theam-2"> 
                        <h2 class="fs-3 mb-4 fw-semibold"> Team and Specialities </h2> 
                        <div id="specilities_1" class="readmorebox collapse d-flex mb-3 list-w-circle">   
                            <?= $hospital->team_and_specialities; ?>
                        </div>
                    </div> 
                </div>


                <div class="col-12 facilities pt-5" id="facilities">
                    <h2 class="fs-3 mb-4 fw-semibold">Facilities</h2>
                    <div class="accordion position-relative" id="accordionFacilities">
                        <div class="accordion-item rounded-2">
                            <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Comfort During Stay </button> </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFacilities">
                                <div class="accordion-body list-w-circle">
                                    <ul>
                                        <br>
                                        <?php
                                            $comfort_during_stay = explode(",", $hospital->comfort_during_stay);
                                            foreach($comfort_during_stay as $k2 => $v2){
                                        ?>
                                        <li><?= $v2; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-2">
                            <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Money Matters </button> </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                                <div class="accordion-body list-w-circle">
                                    <ul>
                                        <?php
                                            $money_matters = explode(",", $hospital->money_matters);
                                            foreach($money_matters as $k3 => $v3){
                                        ?>
                                        <li><?= $v3; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-2">
                            <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> Food </button> </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                                <div class="accordion-body list-w-circle">
                                    <ul>
                                        <?php
                                            $food = explode(",", $hospital->food);
                                            foreach($food as $k4 => $v4){
                                        ?>
                                        <li><?= $v4; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-2">
                            <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive"> Treatment Related </button> </h3>
                            <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                                <div class="accordion-body list-w-circle">
                                    <ul>
                                        <?php
                                            $treatment_related = explode(",", $hospital->treatment_related);
                                            foreach($treatment_related as $k5 => $v5){
                                        ?>
                                        <li><?= $v5; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-2">
                            <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"> Language </button> </h3>
                            <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                                <div class="accordion-body list-w-circle">
                                    <ul>
                                        <?php
                                            $language = explode(",", $hospital->language);
                                            foreach($language as $k6 => $v6){
                                        ?>
                                        <li><?= $v6; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-2">
                            <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven"> Transportation </button> </h3>
                            <div id="collapseseven" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                                <div class="accordion-body list-w-circle">
                                    <ul>
                                        <?php
                                            $transportation = explode(",", $hospital->transportation);
                                            foreach($transportation as $k7 => $v7){
                                        ?>
                                        <li><?= $v7; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="infra_1" class="readmorebox collapse col-12 infrastructure mt-5 list-w-circle">
                    <h2 class="fs-3 mb-4">Infrastructure</h2>
                    <?= $hospital->infrastructure; ?>
                </div>


                <div class="col-12 location-box pt-4">
                    <div class="hos-statics p-3 rounded-4 border bg-light">
                        <!-- <h2 class="fs-3">Location</h2> --> 
                        <div class="row">
                            <div class="col-md-6 d-flex flex-row">
                                <div class="location-column">
                                    <h2 class="fs-3 mb-4 theam-color">Address</h2>
                                    <p><?= $hospital->address; ?></p>
                                    <a class="btn px-xm-1 px-sm-4 btn-danger mb-2" target="_blank" href="<?= $hospital->map; ?>">
                                        <span>Direction <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Location-white.webp" alt="direction" title="direction" width="16" height="17"></span>
                                    </a> 
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-row">
                                <div class="location-column">
                                    <h2 class="fs-3 mb-4 theam-color">Location</h2>
                                    <?= $hospital->location; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

            </div>
        </div>


        <div class="right-form"> 
            <div class="custom-form-container mt-5 mt-md-0 bg-theam-2 rounded-4 p-3 position-sticky"> 
                <p class="fs-4 form-heading fw-semibold mb-0">Contact Hospital</p> 
                <p class="form-heading">Treatment plan and quote within 2 days</p> <!-- Start Form --> 
                <div id="custom-form"> 
                    <div class="dynamic_content"> <div class="main_container"> <style type="text/css"> .primary-form{background-color: #f7f7f7;}
            .primary-form-field{width: 75%;
            margin: 0 auto;} </style> <section class="selected-doctor ms_v_cta_hide"> <div class="container block-container"> <div class="panel panel-default"> <div class="panel-body panel-doctor-pif"> <div class="modeofconsultation h2 bold" style="text-align:center;">Send Your Enquiry</div> </div> </div> </div> </section> <div class="container block-container"> <div class="panel panel-default"> <div class="panel-body"> <form class="form-horizontal form-customize" id="genericForm" autocomplete="off"> <input type="hidden" name="_token" id="_token" value="lL213S6ypzXlyAzlDecEWfVLS4moFQ1BuEopBxUt"> <input type="hidden" name="pagetype" value=""> <input type="hidden" name="page_source" id="page_source" value="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi#find_doc"> <input type="hidden" name="lang1" id="lang1" value="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi#find_doc"> <input type="hidden" name="preferredLocation" id="preferredLocation" value="India"> <input type="hidden" name="Page_Type" id="Page_Type" value="Hospital Detail Page"> <input type="hidden" name="Form_Location" id="Form_Location" value="Main Form"> <input type="hidden" name="hospitalName" id="hospitalName" value="Indraprastha Apollo Hospital, New Delhi"> <input type="hidden" name="c_url" id="c_url" value=""> <div class="form-group label-controls"> <label class="control-label col-sm-12" for="name">Name<span class="red">*</span></label> <div class="col-sm-12"> <input type="text" class="form-control new-form-control" id="name" placeholder="Patient Name" name="name" required=""> </div> </div> <div class="form-group label-controls"> <label class="control-label col-sm-12" for="email">Email<span class="red">*</span></label> <div class="col-sm-12"> <input type="email" class="form-control new-form-control" id="email" placeholder="Enter email" name="email" required=""> </div> </div> <div class="form-group label-controls"> <label class="control-label col-sm-12" for="country">Country<span class="red">*</span></label> <div class="col-sm-12"> <select class="form-control new-form-control form-select" id="country" placeholder="Select Country" name="country" required="true"> <option value="" selected="selected">Country</option><option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="BQ">Caribbean Netherlands</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong S.A.R., China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="XK">Kosovo</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao S.A.R., China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="KP">North Korea</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="VI">U.S. Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option> </select> </div> </div> <div class="form-group label-controls stategroup" style=""> <label class="control-label col-sm-12" for="state">City<span class="red">*</span></label> <div class="col-sm-12"> <div class="autocomplete"> <input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City"> <input type="hidden" id="state" name="state"> </div> </div> </div> <div class="form-group label-controls phn-block"> <label class="control-label col-sm-12" for="phone">Phone Number<span class="red">*</span></label> <div class="col-sm-12"> <input type="text" id="country_phone_code" name="country_phone_code" class="form-control new-form-control col-md-2" value="" readonly="" style="width: 15%; float: left;"> <input type="tel" class="form-control new-form-control col-md-10" id="phone_number" placeholder="Your Phone number" name="phone_number" required="" style="width: 84%"> </div> </div> <div class="col-md-12"> <div class="form-group"> <label for="medicalissue">Medical Issue <span class="red">*</span></label><br> <textarea cols="5" rows="5" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem .." style="height:100%; width:100%; resize: vertical;" required=""></textarea> </div> </div> <div class="form-group label-controls" id="ageblock" style=""> <label class="control-label col-sm-12" for="email">Patient's Age or Date Of Birth<span class="red">*</span></label> <div class="col-sm-12"> <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div> </div> <div class="form-group label-controls" id="emirates-id-block" style="display: none;"> <label for="inputCity" class="form-label"> Emirates ID </label> <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)"> </div> <div class="form-group label-controls"> <div class="col-sm-12 text-center"> <button type="submit" id="search-main-form-btn" class="btn online-consult-button in_page_form">SUBMIT DETAILS</button> <!-- <button type="submit" id="search-main-form-btn" class="btn online-consult-button">SUBMIT DETAILS</button>--> </div> </div> </form> <div style="width: 100%;" class="form-group label-controls"> <div class="col-sm-12 text-center"> <span class="formtns-triger text-muted">By submitting the form I agree to the <a title="Terms of Use" href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use</a> and <a title="Privacy Policy" href="/privacy-policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of Vaidam Health.</span> </div> </div> <!-- Model open  --> <!-- Model open  --> <!-- Start Modal Privacy Policy --> <div class="modal fade" id="formTerms" tabindex="-1" role="dialog" aria-labelledby="termsModalCenterTitle" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" role="document"> <div class="modal-content"> <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Terms of Use</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div> <div class="modal-body" id="terms_of_use"> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button> <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div> </div> </div> </div> <!-- End Modal Terms --> <!-- Start Modal Privacy Policy --> <div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="PrivacyPolicyCenterTitle" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" role="document"> <div class="modal-content"> <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Privacy Policy</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div> <div class="modal-body" id="privacy_policy"> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button> <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div> </div> </div> </div> <!-- End Modal Privacy Policy --> <style type="text/css"> #formTerms,#formPrivacyPolicy{font-size:14px;color:#666;top:30px}
            #formTerms .modal-dialog,#formPrivacyPolicy .modal-dialog{margin: 0px auto;}
            #formTerms .modal-title,#formPrivacyPolicy .modal-title{color:#666;font-size:16px;margin:10px}
            .formtns-triger{opacity:.6;font-size:14px;cursor:pointer;}
            #formTerms .modal-header,#formPrivacyPolicy .modal-header{background:unset;padding:0 5px;border:0}
            #formTerms .close,#formPrivacyPolicy .close{font-size:30px;color:#e43939;position:absolute;opacity:1;top:1px;right:5px;z-index:999}
            #formTerms .modal-body,#formPrivacyPolicy .modal-body{padding:5px 15px;max-height:420px;overflow:auto;border-top:1px solid #ddd;border-bottom:1px solid #ddd}
            #formTerms .modal-footer,#formPrivacyPolicy .modal-footer{padding:5px;border-top:0}
            #formTerms .modal-footer .btn,#formPrivacyPolicy .modal-footer .btn{background:#e43939;color:#fff;font-size:14px;line-height:1;border-radius:5px;padding:5px 8px}
            .modal-open .modal{overflow-x:hidden;overflow-y:hidden;}
            #formTerms h2,#formPrivacyPolicy h2{font-size:16px;color:#666}
            #formTerms ul,#formPrivacyPolicy ul,#formTerms ol,#formPrivacyPolicy ol{padding-left:15px}
            #formTerms .modal-content, #formPrivacyPolicy .modal-content{background: #ffffff}
            .modal-backdrop.fade.in{opacity:0.5}
            .modal-backdrop {
            --bs-backdrop-zindex: 0;  
            }
            @media    only screen and (max-width: 520px){
            div#formPrivacyPolicy{top:36px}
            #formTerms .modal-body, #formPrivacyPolicy .modal-body{max-height:480px}
            }
            .formtns-triger a {color: #164399;} </style> </div> </div> </div> </div> </div> <script type="text/javascript"> $(document).ready(function () {
                // When page is ready, check if there is a pre-selected country
                // var urlCountry = getCookie("SetPageCountry");


            function autocomplete(inp, arr) {
                /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                if (inp) {
                inp.addEventListener("input", function (e) {
                    var a,
                        b,
                        i,
                        val = this.value;
                    /*close any already open lists of autocompleted values*/
                    closeAllLists();
                    if (!val) {
                        return false;
                    }
                    currentFocus = -1;
                    /*create a DIV element that will contain the items (values):*/
                    a = document.createElement("DIV");
                    a.setAttribute("id", this.id + "autocomplete-list");
                    a.setAttribute("class", "autocomplete-items");
                    /*append the DIV element as a child of the autocomplete container:*/
                    this.parentNode.appendChild(a);
                    /*for each item in the array...*/
                    for (i = 0; i < arr.length; i++) {
                        /*check if the item starts with the same letters as the text field value:*/
                        if (arr[i]["city"].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                            /*create a DIV element for each matching element:*/
                            b = document.createElement("DIV");
                            /*make the matching letters bold:*/
                            b.innerHTML = "<strong>" + arr[i]["city"].substr(0, val.length) + "</strong>";
                            b.innerHTML += arr[i]["city"].substr(val.length);
                            /*insert a input field that will hold the current array item's value:*/
                            b.innerHTML += "<input type='hidden' value='" + arr[i]["city"] + "'>";
                            if (arr[i]["city"] != undefined) {
                                //document.getElementById("state").value = arr[i]["state"];
                                var stateElement = document.getElementById("state");
                                if (stateElement) {
                                    stateElement.value = arr[i]["state"];
                                }
                            }
                            /*execute a function when someone clicks on the item value (DIV element):*/
                            b.addEventListener("click", function (e) {
                                /*insert the value for the autocomplete text field:*/
                                inp.value = this.getElementsByTagName("input")[0].value;
            
                                /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                                closeAllLists();
                            });
                            a.appendChild(b);
                        }
                    }
                });
                }
                /*execute a function presses a key on the keyboard:*/
                if (inp) {
                inp.addEventListener("keydown", function (e) {
                    var x = document.getElementById(this.id + "autocomplete-list");
                    if (x) x = x.getElementsByTagName("div");
                    if (e.keyCode == 40) {
                        /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                        currentFocus++;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 38) {
                        //up
                        /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                        currentFocus--;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 13) {
                        /*If the ENTER key is pressed, prevent the form from being submitted,*/
                        e.preventDefault();
                        if (currentFocus > -1) {
                            /*and simulate a click on the "active" item:*/
                            if (x) x[currentFocus].click();
                        }
                    }
                });
                }
                function addActive(x) {
                    /*a function to classify an item as "active":*/
                    if (!x) return false;
                    /*start by removing the "active" class on all items:*/
                    removeActive(x);
                    if (currentFocus >= x.length) currentFocus = 0;
                    if (currentFocus < 0) currentFocus = x.length - 1;
                    /*add class "autocomplete-active":*/
                    x[currentFocus].classList.add("autocomplete-active");
                }
                function removeActive(x) {
                    /*a function to remove the "active" class from all autocomplete items:*/
                    for (var i = 0; i < x.length; i++) {
                        x[i].classList.remove("autocomplete-active");
                    }
                }
                function closeAllLists(elmnt) {
                    /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                    var x = document.getElementsByClassName("autocomplete-items");
                    for (var i = 0; i < x.length; i++) {
                        if (elmnt != x[i] && elmnt != inp) {
                            x[i].parentNode.removeChild(x[i]);
                        }
                    }
                }
                /*execute a function when someone clicks in the document:*/
                document.addEventListener("click", function (e) {
                    closeAllLists(e.target);
                });
            }
                
                function getCookie(cname){
                var name=cname+"=";
                var decodedCookie=decodeURIComponent(document.cookie);
                var ca=decodedCookie.split(';');
                for(var i=0;i<ca.length;i++){
                    var c=ca[i];while(c.charAt(0)==' '){c=c.substring(1);}
                    if(c.indexOf(name)==0){return c.substring(name.length,c.length);}
                }
                return "";
                }
                var preferredLocation = getCookie("preferredLocation").replace(/\+/g, ' ');
                var countryCode = getCookie("countryCode");

                // Check for UAE and show emirates ID and city dropdown
                if (preferredLocation == 'United Arab Emirates' && countryCode == 'AE') {
                    $('#emirates-id-block').show();  
                    $('.stategroup').show();        
                    $('#city').attr('placeholder', 'Enter Emirates');  
                    $('#city').replaceWith('<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
                } else if (countryCode == 'IN') {
                    $('#emirates-id-block').hide();
                    $('.stategroup').show();       
                // $('#city').attr('placeholder', 'Enter city');
                
                    //$('#city').replaceWith('<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
                //autocomplete(document.getElementById("city"), cities);
                    
                } else {  
                    $('#emirates-id-block').hide();
                    $('.stategroup').hide();  
                }

                // Handle country selection change event
                $('#country').on('change', function() {
                    var selectedCountry = $(this).val();
                    console.log(selectedCountry);    
                    if (selectedCountry == 'AE') {
                        $('#emirates-id-block').show();  
                    $('.stategroup').show();  
                    $('.stategroup').removeAttr('style').show(); 
                        $('#city').attr('placeholder', 'Enter Emirates');  
                        $('#city').replaceWith('<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
                    } else if (selectedCountry == "IN") {
                        $('#emirates-id-block').hide();  
                        $('.stategroup').show();     
                        $('#city').attr('placeholder', 'Enter city');
                        $('#city').replaceWith('<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
                        autocomplete(document.getElementById("city"), cities); 
                    }   
                    else {
                        $('#emirates-id-block').hide();  
                        $('.stategroup').hide(); 
                    }
                });
            }); </script> </div> <!-- End Form --> </div> 
        </div>

        
    </div>
</section>