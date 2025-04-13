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

<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle hospital-details" data-gtm-vis-recent-on-screen2242002_282="387" data-gtm-vis-first-on-screen2242002_282="387" data-gtm-vis-total-visible-time2242002_282="100" data-gtm-vis-has-fired2242002_282="1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb"> 
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url(); ?>" title="Home">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url(); ?>hospitals" title="Hospitals">Hospitals</a></li>
                        <li class="breadcrumb-item"><span class="text-secondary"><?= $slug; ?></span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
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
                    <p class="hospital-location text-secondary d-flex column-gap-2 align-items-center lh-base mb-3">
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
                        <!-- <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Doctors.webp" width="27" height="20" title="International" alt="International"> 
                            <div class="num-box-item lh-1">
                                <p class=" mb-1">Doctors List</p>
                                <a class="fw-bolder" title="Find Doctor" href="#find_doc"> <span class="fw-bolder">Click Here</span> </a> 
                            </div>
                        </div> -->
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
                        <!-- <div class="nuber-box p-3 border d-flex flex-wrap column-gap-2 align-items-center">
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/International-dr.webp" width="20" title="International" height="20" alt="International"> 
                            <div class="num-box-item lh-1">
                                <p class="mb-1">Images</p>
                                <a class="fw-bolder" title="Images" href="#images"> <span class="fw-bolder">Click Here</span> </a> 
                            </div>
                        </div> -->
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
                                        <span>Direction <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/Location-white.webp" alt="direction" title="direction" width="16" height="17" style="margin-top: -5px;"></span>
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
                <p class="form-heading">Treatment plan and quote within 2 days</p> 
                <div id="custom-form"> 
                    <div class="dynamic_content">
                        <div class="main_container">
                            <style type="text/css"> 
                                .primary-form{background-color: #f7f7f7;}
                                .primary-form-field{width: 75%; margin: 0 auto;} 
                            </style>
                            <section class="selected-doctor ms_v_cta_hide">
                                <div class="container block-container">
                                    <div class="panel panel-default">
                                        <div class="panel-body panel-doctor-pif">
                                            <div class="modeofconsultation h2 bold" style="text-align:center;">Send Your Enquiry</div>
                                        </div>
                                    </div> 
                                </div> 
                            </section>

                            <div class="container block-container">
                                <div class="panel panel-default">
                                    <div class="panel-body"> 
                                        <form class="form-horizontal form-customize" id="genericForm_hospital" autocomplete="off">
                                            <div class="form-group label-controls"> 
                                                <label class="control-label col-sm-12" for="name">Name<span class="red">*</span></label> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" class="form-control new-form-control" id="name" placeholder="Patient Name" name="name" required="">
                                                </div>
                                            </div>
                                            <div class="form-group label-controls">
                                                <label class="control-label col-sm-12" for="email">Email<span class="red">*</span></label>
                                                <div class="col-sm-12"> 
                                                    <input type="email" class="form-control new-form-control" id="email" placeholder="Enter email" name="email" required="">
                                                </div>
                                            </div> 
                                            <div class="form-group label-controls">
                                                <label class="control-label col-sm-12" for="country">Country<span class="red">*</span></label>
                                                <div class="col-sm-12">
                                                    <select class="form-control new-form-control form-select" id="country" placeholder="Select Country" name="country" required="true"> 
                                                        <option value="IN" selected="selected">India</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group label-controls stategroup" style="">
                                                <label class="control-label col-sm-12" for="state">City<span class="red">*</span></label>
                                                <input class="form-control new-form-control" type="text" name="other" id="other" placeholder="Select City"> 
                                            </div>
                                            <div class="form-group label-controls phn-block">
                                                <label class="control-label col-sm-12" for="phone">Phone Number<span class="red">*</span></label>
                                                <div class="col-sm-12">
                                                    <input type="text" id="country_phone_code" name="country_phone_code" class="form-control new-form-control col-md-2" value="+91" readonly="" style="width: 15%; float: left;">
                                                    <input type="tel" class="form-control new-form-control col-md-10" id="phone_number" placeholder="Your Phone number" name="phone_number" required="" style="width: 84%">
                                                </div> 
                                            </div>
                                            <div class="col-md-12"> 
                                                <div class="form-group"> 
                                                    <label for="medicalissue">Medical Issue <span class="red">*</span></label><br>
                                                    <textarea cols="5" rows="5" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem .." style="height:100%; width:100%; resize: vertical;" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group label-controls" id="ageblock" style="">
                                                <label class="control-label col-sm-12" for="email">Patient's Age or Date Of Birth<span class="red">*</span></label>
                                                <div class="col-sm-12"> 
                                                    <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                                </div>
                                            </div>
                                            <div class="form-group label-controls">
                                                <div class="col-sm-12 text-center">
                                                <p id="category_master_msg"></p>
                                                    <button type="submit" id="categoryBtn" name="submit" class="btn online-consult-button in_page_form">SUBMIT DETAILS</button>
                                                </div>
                                            </div>
                                        </form> 
                                        <div style="width: 100%;" class="form-group label-controls">
                                            <div class="col-sm-12 text-center"> 
                                                <span class="formtns-triger text-muted">By submitting the form I agree to the 
                                                    <a title="Terms of Use" href="<?= base_url(); ?>terms-use" target="_blank" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use</a> and 
                                                    <a title="Privacy Policy" href="<?= base_url(); ?>privacy-policy" target="_blank" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of Vaidam Health.
                                                </span> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('#genericForm_hospital').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "<?= base_url(); ?>genericform",
            method: "POST",
            enctype: "multipart/form-data",
            data: formData,
            dataType: 'JSON',
            processData: false,
            contentType: false,     
            beforeSend: function () {
                $('#categoryBtn').html('<span class="btn-spinner"><i class="fa fa-refresh fa-spin"></i></span> Loading...');
                $('#categoryBtn').attr('disabled', true);
            },
            success: function(data){
                if(data.status == true){
                    $('#genericForm_hospital').trigger('reset');
                    $('#category_master_msg').delay(1000).fadeOut('slow', function() {
                        $('#category_master_msg').html('');
                        $('#category_master_msg').show();
                    });
                    $('#category_master_msg').html('<span class="text-success">Successfully Saved!!</span>');
                }
                if(data.status == false){
                    $('#category_master_msg').html('<span class="text-danger">Something error, Try after sometime!!</span>');
                }
            },
            complete: function () {
                $('#categoryBtn').html('Save');
                $('#categoryBtn').attr('disabled', false);
            }
        });
    });
</script>