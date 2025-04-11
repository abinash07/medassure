<link href="<?= base_url(); ?>assets/css/drstyle.css" rel="stylesheet"/>


<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle doctor-details">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url(); ?>" title="Home">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= base_url(); ?>doctors" title="Doctors">Doctors</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span><?= $doctor->name; ?></span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="serach-main">
    <div class="container">
        <div class="doctor-main">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                    <div class="doc_img">
                        <img src="<?= base_url(); ?><?= $doctor->image; ?>" alt="<?= $doctor->name; ?>" width="164" height="183" title="<?= $doctor->name; ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="doc_info">
                        <h1 class="h2"><?= $doctor->name; ?> <img src="<?= base_url(); ?>assets/img/tick.svg" width="15" height="15" alt="Doctor Tick" title="Doctor Tick"></h1>
                        <p>
                            <b><?= $doctor->designation; ?></b>
                            <br>
                            <span class="span-edu"><?= $doctor->qualification; ?></span>
                        </p>
                        <p><?= $doctor->experience; ?></p>
                        <p class="p-hospitalname">Works at <strong><?= $doctor->hospital_name; ?>, <?= $doctor->city; ?></strong></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="btn1-group">
                        <a onclick="setformtype('Dr. Naresh Trehan','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Book Appointment Button Next to Main Content Name','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon','Medanta - The Medicity  Gurgaon');" class="btn btn-danger book-apt-btn doctor-apt-btn" href="https:\/\/www.medassure.co.in/consult-online?doctor=2571" title="Book Appointment">Book Appointment</a>
                        <a onclick="setformtype('Dr. Naresh Trehan','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Enquiry Button Next to Main Content Name','','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon','Medanta - The Medicity  Gurgaon');" class="btn btn-danger book-apt-btn send-enq-btn" style="display:none;" href="https://www.medassure.co.in/consult-online" title="Contact Doctor">Contact Doctor</a>
                        <a href="https://api.whatsapp.com/send?phone=+919958278202&text=Hello, please contact me regarding https://www.medassure.co.in/doctor/<?= $doctor->name; ?>, Thank you!" class="btn btn-success" title="Thank you">
                            <img style="width: 20px;margin-top:-8px;margin-right:5px;" src="<?= base_url(); ?>assets/img/WhatsApp-Icon.svg" alt="WhatsApp Us" title="WhatsApp Us">WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- About Doctor Start From Here-->
        <section class="doctor-allD">
            <div class="container">
                <div class="row content-row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="left-content">
                            <div class="content-part" id="about-doctor">
                                <h2>About <?= $doctor->name; ?></h2>
                                <div class="content">
                                    <div class="readmorebox collapse" id="doctor-detail-body">
                                        <?= $doctor->about; ?>
                                    </div>
                                    <p class="mb-0 text-end w-100">
                                        <a class="readmore-btn collapsed" data-bs-toggle="collapse" href="#doctor-detail-body" aria-expanded="false" aria-controls=""></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Appointment -->

                        <div class="row py-3">
                            <div class="col-12">
                                <div class="schedulebox pt-3">
                                    <div class="row mb-3 mb-lg-0">
                                        <div class="col-lg-9 d-flex mb-4 align-items-center gap-3 flex-wrap">
                                            <h3 class="ffs-4 mb-0">OPD Schedule Of <?= $doctor->name; ?></h3>
                                            <h4 class="text-white mb-0 px-2 py-1 bg-theam rounded-2">Consultation Fees Rs. 1000 /-</h4>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <a onclick="setformtype('Dr. Naresh Trehan','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Book Appointment OPD Time Popup','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon','Medanta - The Medicity  Gurgaon');" class="btn btn-danger book-apt-btn doctor-apt-btn w-100" href="https:\/\/www.vaidam.com/lp/consult-online?doctor=2571" title="Book Appointment">Book Appointment</a>
                                            <a onclick="setformtype('Dr. Naresh Trehan','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Enquiry Button OPD Time Popup','','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon','Medanta - The Medicity  Gurgaon');" class="btn btn-danger book-apt-btn send-enq-btn w-100" style="display:none;" href="https://www.vaidam.com/lp/consult-online" title="Contact Doctor">Contact Doctor</a>
                                        </div>
                                    </div>
                                    <div class="p-3 pt-0">
                                        <div class="row time-bg bg-vh-secondary rounded-4 py-3 px-1 px-md-3">
                                            <div class="col-lg-6">
                                                <ul class="time-sidual text-dark">
                                                    <li class="opd-li day d-flex flex-wrap align-items-center row-gap-1 mb-3 column-gap-4">
                                                        <span class="weekday fw-bolder w-100">Monday</span>
                                                        <span class="sched-time"><?= $doctor->monday; ?></span>
                                                    </li>
                                                    <li class="opd-li day d-flex flex-wrap align-items-center row-gap-1 mb-3 column-gap-4">
                                                        <span class="weekday fw-bolder w-100">Tuesday</span>
                                                        <span class="sched-time"><?= $doctor->tuesday; ?></span>
                                                    </li>
                                                    <li class="opd-li day d-flex flex-wrap align-items-center row-gap-1 mb-3 column-gap-4">
                                                        <span class="weekday fw-bolder w-100">Wednesday</span>
                                                        <span class="sched-time"><?= $doctor->wednesday; ?></span>
                                                    </li>
                                                    <li class="opd-li day d-flex flex-wrap align-items-center row-gap-1 mb-3 column-gap-4">
                                                        <span class="weekday fw-bolder w-100">Thursday</span>
                                                        <span class="sched-time"><?= $doctor->thursday; ?></span>
                                                    </li>
                                                    <li class="opd-li day d-flex flex-wrap align-items-center row-gap-1 mb-3 column-gap-4">
                                                        <span class="weekday fw-bolder w-100">Friday</span>
                                                        <span class="sched-time"><?= $doctor->friday; ?></span>
                                                    </li>
                                                    <li class="opd-li day d-flex flex-wrap align-items-center row-gap-1 mb-3 column-gap-4">
                                                        <span class="weekday fw-bolder w-100">Saturday</span>
                                                        <span class="sched-time"><?= $doctor->saturday; ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Appointment End -->
                        <!-- doctor_medical_problems_treated Start -->
                        <div class="content-part" id="doctor_medical_problems_treated">
                            <div class="row">
                                <div class="col-12">
                                    <h2>Medical Problems</h2>
                                    <p>For which <?= $doctor->name; ?> can be consulted</p>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h3 class="accordion-header mb-0">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne0" aria-expanded="true" aria-controls="collapseOne0">Cardiac Conditions</button>
                                            </h3>
                                            <div id="collapseOne0" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                                <div class="accordion-body row">
                                                    <div class="col-md-6">
                                                        <?= $doctor->medical_problems; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- doctor_medical_problems_treated End -->
                        <!-- doctor_medical_procedures_performed Start -->
                        <div class="content-part" id="doctor_medical_procedures_performed">
                            <div class="row">
                                <div class="col-12">
                                    <h2>Medical Procedures</h2>
                                    <p>Performed by <?= $doctor->name; ?></p>
                                    <div class="accordion" id="accordionProcedures">
                                        <div class="accordion-item">
                                            <h3 class="accordion-header mb-0">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProcedure0" aria-expanded="true" aria-controls="collapseProcedure0">Cardiac Procedures </button>
                                            </h3>
                                            <div id="collapseProcedure0" class="accordion-collapse collapse" data-bs-parent="#accordionProcedures">
                                                <div class="accordion-body row">
                                                    <div class="col-md-6">
                                                        <!-- <?= $doctor->medical_procedures; ?> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="content-part" id="location">
                            <h3>Location</h3>
                            <!-- Location Content Start -->
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="hp-img">
                                        <img title="<?= $doctor->hospital_name; ?>" src="<?= base_url(); ?><?= $doctor->primary_image; ?>" loading="lazy" width="288" height="177" alt="Hospital Images" class="img-fluid" title="Hospital Images">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="hospital-info flex-column gap-3">
                                        <div class="w-100 d-flex gap-2">
                                            <a class="locatio-icon" href="#" target="_blank" title="Location">
                                                <img src="<?= base_url(); ?>assets/img/location.svg" loading="lazy" width="21" height="30" alt="Location Image" title="Location Image">
                                            </a>
                                            <p>
                                                <a class="locatio-icon" href="/hospitals/<?= $doctor->hospital_slug; ?>" title="<?= $doctor->hospital_name; ?>"><?= $doctor->hospital_name; ?></a>
                                                <!-- <span>Gurgaon, India</span> -->
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-part" id="education">
                            <div class="layout--tabs">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" id="tabEduTrain" role="tablist">
                                        <li class="nav-item ">
                                            <h3>
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#block-simple-text-1" aria-selected="false" aria-controls="block-simple-text-1" id="block-simple-text-1-tab" title="Education & Training">Education & Training</a>
                                            </h3>
                                        </li>
                                        <li class="nav-item">
                                            <h3>
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#block-simple-text-2" aria-selected="false" aria-controls="block-simple-text-2" id="block-simple-text-2-tab" title="Honours & Awards">Honours & Awards</a>
                                            </h3>
                                        </li>
                                        <li class="nav-item">
                                            <h3>
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#block-simple-text-3" aria-selected="false" aria-controls="block-simple-text-3" id="block-simple-text-3-tab" title="Work Experience">Work Experience</a>
                                            </h3>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="tabEduTrainContent">
                                    <!-- Education Block -->
                                    <div id="block-simple-text-1" class="tab-pane  block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-1-tab">
                                        <?= $doctor->education_training; ?>
                                    </div>
                                    <!-- Awards Start -->
                                    <div id="block-simple-text-2" class="tab-pane  block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-2-tab">
                                        <?= $doctor->honours_awards; ?>
                                    </div>
                                    <!-- Awards end -->
                                    <!-- Education Start -->
                                    <div id="block-simple-text-3" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-3-tab">
                                        <?= $doctor->work_experience; ?>
                                    </div>
                                    <!-- Education End  -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- Banner Middle  -->
                        <div class="banner-part banner-theam-1">
                            <div class="content">
                                <h2 class="text-white">Want to consult the doctor?</h2>
                                <span>Don't Ignore Your Health!</span>
                                <a class="btn btn-danger" onclick="setformtype('Dr. Naresh Trehan','','Send Enquiry form on Banner Image','','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon','Medanta - The Medicity  Gurgaon');" href="https://www.vaidam.com/lp/consult-online" title="Send Enquiry">Send Enquiry</a>
                            </div>
                            <div class="image">
                                <img src="https://test.drdineshkumarmittal.com/dr.png" loading="lazy" alt="Want to consult the doctor?" width="356" height="180" title="Want to consult the doctor?">
                            </div>
                        </div>
                        <!-- Banner End -->
<!-- Form Start -->
<div class="blue-bx need-help-form" id="submitFrom">
    <div class="dynamic_content">
        <div class="main_container">
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
                        <form class="form-horizontal form-customize" id="genericForm" autocomplete="off">
                            
                            <div class="form-group label-controls">
                                <label class="control-label col-sm-12" for="name">
                                    Name<span class="red">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control new-form-control" id="name" placeholder="Patient Name" name="name" required>
                                </div>
                            </div>
                            <div class="form-group label-controls">
                                <label class="control-label col-sm-12" for="email">
                                    Email<span class="red">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control new-form-control" id="email" placeholder="Enter email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group label-controls">
                                <label class="control-label col-sm-12" for="country">
                                    Country<span class="red">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <select class="form-control new-form-control form-select" id="country" placeholder="Select Country" name="country" required="true">
                                        <option value="" selected="selected">Country</option>
                                        <option value="IN">India</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group label-controls stategroup" style="display: none;">
                                <label class="control-label col-sm-12" for="state">
                                    City<span class="red">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <div class="autocomplete">
                                        <input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City">
                                        <input type="hidden" id="state" name="state">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group label-controls phn-block">
                                <label class="control-label col-sm-12" for="phone">
                                    Phone Number<span class="red">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" id="country_phone_code" name="country_phone_code" class="form-control new-form-control col-md-2" value="" readonly style="width: 15%; float: left;">
                                    <input type="tel" class="form-control new-form-control col-md-10" id="phone_number" placeholder="Your Phone number" name="phone_number" required style="width: 84%">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="medicalissue">
                                        Medical Issue <span class="red">*</span>
                                    </label>
                                    <br>
                                    <textarea cols="5" rows="5" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem .." style="height:100%; width:100%; resize: vertical;" required></textarea>
                                </div>
                            </div>
                            <div class="form-group label-controls" id="ageblock" style="display: none;">
                                <label class="control-label col-sm-12" for="email">
                                    Patient's Age or Date Of Birth<span class="red">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                </div>
                            </div>
                            <div class="form-group label-controls" id="emirates-id-block" style="display: none;">
                                <label for="inputCity" class="form-label">Emirates ID </label>
                                <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)">
                            </div>
                            <div class="form-group label-controls">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" id="search-main-form-btn" class="btn online-consult-button in_page_form">SUBMIT DETAILS</button>
                                    <!-- <button type="submit" id="search-main-form-btn" class="btn online-consult-button">SUBMIT DETAILS</button>-->
                                </div>
                            </div>
                        </form>
                        <div style="width: 100%;" class="form-group label-controls">
                            <div class="col-sm-12 text-center">
                                <span class="formtns-triger text-muted">
                                    By submitting the form I agree to the <a title="Terms of Use" href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use</a>
                                    and <a title="Privacy Policy" href="/privacy-policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy</a>
                                    of Vaidam Health.
                                </span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

<!-- Banner-2 Start -->
<!-- <div class="banner-part banner-theam-2"> <div class="content"> <h2>Don't Ignore Your Health!</h2> <span>Want to consult the doctor?</span> <a class="btn btn-danger book-apt-btn send-enq-btn" onclick="setformtype('Dr. Naresh Trehan','','Banner 2 Doctor Details','','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon','Medanta - The Medicity  Gurgaon');" href="https://www.vaidam.com/lp/consult-online">Send Enquiry</a> </div> <div class="image"> <img src="https://test.drdineshkumarmittal.com/dr2.png" alt="Don't Ignore Your Health!" width="128" height="180"> </div> </div> -->
<!-- Banner-2 End -->
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-5 right-side-link">
    <ul>
        <li>
            <a href="#about-doctor" title="About Doctor">About Doctor</a>
        </li>
        <li>
            <a href="#specializations" title="Skilled At">Skilled At</a>
        </li>
        <li>
            <a href="#work" title="Work Experience">Work Experience</a>
        </li>
        <li>
            <a href="#education" title="Education & Training">Education & Training</a>
        </li>
        <li>
            <a href="#location" title="Location">Location</a>
        </li>
        <li>
            <a href="#submitFrom" title="Submit Form">Submit Form</a>
        </li>
    </ul>
</div>
</div></div></section>
<!-- About Doctor End -->
<!-- Our Network Section Start-->
<section class="vaidam-number mt-5 mb-4">
    <div class="container text-center">
        <div class="blue-bx">
            <p style="font-size: 2em;">
                <strong>Our Network</strong>
            </p>
            <div class="row row-col-4">
                <div class="col-md-3">
                    <p>
                        500<span>+</span>
                    </p>
                    <span>Top Hospitals</span>
                </div>
                <div class="col-md-3">
                    <p>
                        10,000<span>+</span>
                    </p>
                    <span>Doctors</span>
                </div>
                <div class="col-md-3">
                    <p>
                        50<span>+</span>
                    </p>
                    <span>Cities</span>
                </div>
                <div class="col-md-3">
                    <p>
                        10<span>+</span>
                    </p>
                    <span>Countries</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Network Section End -->

<!-- Search Related to Doctor List End -->
<!-- Sticky Btn Mobile -->
<div class="sticky_enquiry_btn-mob">
    <a style="display:none;" onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Naresh Trehan','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Book Appointment Sticky Button','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon','Medanta - The Medicity, Gurgaon');" class="send-enquiry sticky-doctor-apt-btn" href="https://www.vaidam.com/lp/consult-online?doctor=2571" title="Book Appointment" data-cf-modified-a73be5ea5dadb6e560a35ba9-="">Book Appointment</a>
    <a title="Contact Doctor" onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Naresh Trehan','https:\/\/www.vaidam.com/lp/consult-online?doctor=2571','Send Enquiry Sticky Button','','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon','Medanta - The Medicity, Gurgaon');" style="display:none;" class="send-enquiry sticky-send-enq-btn" href="https://www.vaidam.com/lp/consult-online" data-cf-modified-a73be5ea5dadb6e560a35ba9-="">Contact Doctor</a>
</div>
<div id="rk_chat_plugin">
    <div class="icon-for-whatsapp wa_button_clicked" style="position: fixed;bottom: 3%;right: 2%;z-index: 99999;">
        <a href="https://api.whatsapp.com/send?phone=+919971616131&text=Hello, please contact me regarding https://www.vaidam.com/doctors/dr-naresh-trehan-cardiology?source=wpchat_DDSB, Thank you!" title="whatsapp">
            <img loading="lazy" src="https://www.vaidam.com/sites/default/files/chat-icon-whatsapp.png" width="50" height="50" alt="Whatsapp" style="width: 50px;height: 50px;margin-top: -22px;" title="Whatsapp">
        </a>
    </div>
</div>
<script src="https://d3lclm53tbcdw6.cloudfront.net/js/bootstrap.min.js" type="a73be5ea5dadb6e560a35ba9-text/javascript"></script>
<script src="https://www.youtube.com/player_api" type="a73be5ea5dadb6e560a35ba9-text/javascript"></script>
<script src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/js/search.js" type="a73be5ea5dadb6e560a35ba9-text/javascript"></script>
<script src="https://d3lclm53tbcdw6.cloudfront.net/js/searchpage.js" type="a73be5ea5dadb6e560a35ba9-text/javascript"></script>
<script type="text/javascript">
     // Doctor Logic
        $(document).ready(function() {
            $(".view-mor-dr-box").slice(0, 4).show();
            // Initially show the first 4 boxes
            if ($(".view-mor-dr-box:hidden").length != 0) {

                $("#loadmoredoc").show(); // Show the "load more" button if there are hidden boxes
            }

            $("#loadmoredoc").on("click", function(e) {
                e.preventDefault();
                $(".view-mor-dr-box:hidden").slice(0, 4).slideDown(); // Show the next 4 hidden boxes
                if ($(".view-mor-dr-box:hidden").length == 0) {
                    $("#loadmoredoc").text("No More to view")
                        .fadeOut("slow"); // Fade out the "load more" button if there are no more hidden boxes
                }
            });

        });

        $(document).ready(function() {
            var contentSection = $('.content-part');
            var navigation = $('.right-side-link');

            //when a nav link is clicked, smooth scroll to the section
            navigation.on('click', 'a', function(event) {
                event.preventDefault(); //prevents previous event
                smoothScroll($(this.hash));
            });

            //update navigation on scroll...
            $(window).on('scroll', function() {
                updateNavigation();
            })
            //...and when the page starts
            updateNavigation();

            /////FUNCTIONS
            function updateNavigation() {

                contentSection.each(function() {
                    var sectionName = $(this).attr('id');
                    // console.log(sectionName);
                    var navigationMatch = $('.right-side-link a[href="#' + sectionName + '"]');
                    if (($(this).offset().top - $(window).height() / 2 < $(window).scrollTop()) &&
                        ($(this).offset().top + $(this).height() - $(window).height() / 2 > $(window).scrollTop())) {
                        navigationMatch.addClass('active-section');
                    } else {
                        navigationMatch.removeClass('active-section');
                    }
                });
            }

            function smoothScroll(target) {
                $('body,html').animate({
                    scrollTop: target.offset().top
                }, 800);
            }
        }); 
</script>
<script type="text/javascript">
     $(document).ready(function() {
            var SetPageCountry = getCookie("SetPageCountry");
            if (($.cookie("countryCode") == "IN") || (countryCode == "AE" & $.cookie("SetPageCountry") == "AE")) {
                // alert('AE');
                $('.send-enq-btn').hide();
                $('.sticky-send-enq-btn').hide();
                $('.sticky-doctor-apt-btn').show();
                $('.doctor-apt-btn').css('display', 'inline-block');
                // $('.hide-country-wise').show();
                $('.hide-country-wise').css('display', 'inline-block');
                // $('.scheduletblVal').css('display','inline-block');
            } else {
                // alert('else');
                $('.doctor-apt-btn').css('display', 'none');
                $('hide-country-wise').hide();
                $('.sticky-doctor-apt-btn').hide();
                $('.sticky-send-enq-btn').show();
                $('.send-enq-btn').css('display', 'inline-block');
                // $('.scheduletblVal').hide();
            }
            if (countryCode == 'AE') {
                $('.ae-country').css('display', 'inline-block');
                $('hide-country-wise').hide();
            } else {
                $('.ae-country').hide();
            }

        });

        if (typeof countryNameList !== 'undefined') {
            $.each(countryNameList, function(key, val) {
                var url = "india";
                var pattern = val.toLowerCase().replace(/\s/g, "-");
                if (url.match(pattern)) {
                    var x = getCookie1('preferredLocation');
                    if (x == '') {
                        document.cookie = "preferredLocation=" + val + ";path=/";
                        document.getElementById("preferredLocation").value = val;
                    }
                }
            });
        }

        function getCookie1(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        } 
</script>
<!-- Content End -->
<script type="text/javascript">
     if($(".view-more-bx:hidden").length <= 4){
        $("#loadmorefaq").hide();
    }
    $(".view-more-bx").slice(0, 4).show();
    if ($(".view-more-bx:hidden").length != 0) {
        $("#loadmorefaq").show();
    }
    $("#loadmorefaq").on("click", function(e) {
        e.preventDefault();
        if($(".view-more-bx:hidden").length > 0){
            $(".view-more-bx:hidden").slice(0, 2).slideDown();
            if ($(".view-more-bx:hidden").length === 0) {
                $("#loadmorefaq").text("No More to view")
            }
        }
    });

    // loadmorecsop
    // case study
    if($(".view-more-csop-bx:hidden").length <= 4){
        $("#loadmorecsop").hide();
    }
    $(".view-more-csop-bx").slice(0, 4).show();
    if ($(".view-more-csop-bx:hidden").length != 0) {
        $("#loadmorecsop").show();
    }
    $("#loadmorecsop").on("click", function(e) {
        e.preventDefault();
        if($(".view-more-csop-bx:hidden").length > 0){
            $(".view-more-csop-bx:hidden").slice(0, 2).slideDown();
            if ($(".view-more-csop-bx:hidden").length === 0) {
                $("#loadmorecsop").text("No More to view")
            }
        }
    });

    // new related blog
    if($(".view-more-nrb-bx:hidden").length <= 4){
        $("#loadmorenrb").hide();
    }
    $(".view-more-nrb-bx").slice(0, 4).show();
    if ($(".view-more-nrb-bx:hidden").length != 0) {
        $("#loadmorenrb").show();
    }
    $("#loadmorenrb").on("click", function(e) {
        e.preventDefault();
        if($(".view-more-nrb-bx:hidden").length > 0){
            $(".view-more-nrb-bx:hidden").slice(0, 2).slideDown();
            if ($(".view-more-nrb-bx:hidden").length === 0) {
                $("#loadmorenrb").text("No More to view")
            }
        }
    }); 
</script>


<div id="menu-bottom" class="bottom-menu">
    <a onclick="setformtype('','','enquiry sticky button','','Footer','','');" href="https://www.vaidam.com/lp/consult-online" class="readmore-outline me-2" title="Need Help" data-cf-modified-a73be5ea5dadb6e560a35ba9-="">Need Help?</a>
    <a href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/doctors/dr-naresh-trehan-cardiology?source=,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color">
        <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us" title="Chat with Us" width="30" height="29" class="img-fluid me-1">Chat
    </a>
</div>
<div class="sticky_enquiry_btn">
    <a onclick="setformtype('','','Send Enquiry Sticky Button','','Dr Detail Page','CARDIOLOGY AND CARDIAC SURGERY','Cardiac Surgeon');" href="https://www.vaidam.com/lp/consult-online" data-cf-modified-a73be5ea5dadb6e560a35ba9-="">Contact Us Now</a>
</div>


<script language="JavaScript" type="text/javascript">
     $(document).ready(function () {
        if (window.innerWidth <= 768) {
          $(".ms-main-nav").navigation({
            sideBarWidth: 300,
            slideSpeed: 800,
            subMenuSlideDirection: "right",
            theme: "overlay", //overlay, bodycollapse, bodyfit
            triggerButton: "topmenu-btn",
            backButtonText: '',
            environment: "development",
          });
        }
      });

$(document).ready(function() {
    if (window.innerWidth <= 768) {
        $(".searchbar").click(function(){
            $(".vh-search").addClass("search-100-on-mob");
        });
        $(".close-serach-100").click(function(){
            $(".vh-search").removeClass("search-100-on-mob");
        });
    }
});

$(document).ready(function() {
    if (window.innerWidth <= 768) {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('#menu-bottom').addClass('show');
            } else {
                $('#menu-bottom').removeClass('show');
            }
        });
    }
}); 
</script>
