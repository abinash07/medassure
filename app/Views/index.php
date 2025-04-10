
    <style type="text/css">
        img {
            max-width: 100%;
            height: auto
        }

        .modeofconsultation.h2 {
            color: #212529 !important;
        }

        .video-bx img.img-responsive.video-icon-block.video-block-imgages {
            width: 60px;
            height: 52px;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 9;
            transform: translate(-50%, -50%)
        }

        .slick-slide img {
            width: 100%;
            height: 100%;
        }



        .slider-form label,
        .slider-form br {
            display: none;
        }

        .slider-form input,
        .slider-form select {
            height: 35px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .slider-form textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px
        }

        .slider-form button#search-main-form-btn,
        [type=submit] {
            background: #dc3545;
            color: #fff;
            display: block;
            width: 100%;
            margin-bottom: 10px;
            font-weight: bold;
            margin-top: 15px;
        }

        .video-bx {
            position: relative;
        }

        .video-bx p {
            position: absolute;
            bottom: 50%;
            margin-bottom: -70px;
            font-weight: 600;
            font-size: 1.25em;
        }

        .treatmentsModal .modal-dialog {
            max-width: 380px;
        }

        /* viewmore */
        .view-more-bx {
            display: none
        }

        .qna {
            max-height: unset
        }
        .primary-form {
            background-color: #f7f7f7;
        }

        .primary-form-field {
            width: 75%;
            margin: 0 auto;
        }

        #formTerms,
        #formPrivacyPolicy {
            font-size: 14px;
            color: #666;
            top: 30px
        }

        #formTerms .modal-dialog,
        #formPrivacyPolicy .modal-dialog {
            margin: 0px auto;
        }

        #formTerms .modal-title,
        #formPrivacyPolicy .modal-title {
            color: #666;
            font-size: 16px;
            margin: 10px
        }

        .formtns-triger {
            opacity: .6;
            font-size: 14px;
            cursor: pointer;
        }

        #formTerms .modal-header,
        #formPrivacyPolicy .modal-header {
            background: unset;
            padding: 0 5px;
            border: 0
        }

        #formTerms .close,
        #formPrivacyPolicy .close {
            font-size: 30px;
            color: #e43939;
            position: absolute;
            opacity: 1;
            top: 1px;
            right: 5px;
            z-index: 999
        }

        #formTerms .modal-body,
        #formPrivacyPolicy .modal-body {
            padding: 5px 15px;
            max-height: 420px;
            overflow: auto;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd
        }

        #formTerms .modal-footer,
        #formPrivacyPolicy .modal-footer {
            padding: 5px;
            border-top: 0
        }

        #formTerms .modal-footer .btn,
        #formPrivacyPolicy .modal-footer .btn {
            background: #e43939;
            color: #fff;
            font-size: 14px;
            line-height: 1;
            border-radius: 5px;
            padding: 5px 8px
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: hidden;
        }

        #formTerms h2,
        #formPrivacyPolicy h2 {
            font-size: 16px;
            color: #666
        }

        #formTerms ul,
        #formPrivacyPolicy ul,
        #formTerms ol,
        #formPrivacyPolicy ol {
            padding-left: 15px
        }

        #formTerms .modal-content,
        #formPrivacyPolicy .modal-content {
            background: #ffffff
        }

        .modal-backdrop.fade.in {
            opacity: 0.5
        }

        .modal-backdrop {
            --bs-backdrop-zindex: 0;
        }

        @media only screen and (max-width: 520px) {
            div#formPrivacyPolicy {
                top: 36px
            }

            #formTerms .modal-body,
            #formPrivacyPolicy .modal-body {
                max-height: 480px
            }
        }

        .formtns-triger a {
            color: #164399;
        }
    </style>
    <div class="main-cont">
        <section class="slider position-relative">
            <figure>
                <img class="d-none d-md-block" preload="load" src="<?= base_url(''); ?>assets/img/banner.webp" alt="Treatment With Unmatched Personal Care" class="img-fluid d-none d-md-block" title="Treatment With Unmatched Personal Care"> 
                <img width="375" height="566" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/slider-mob.webp" alt="Treatment With Unmatched Personal Care" class="img-fluid d-md-none" title="Treatment With Unmatched Personal Care"> 
            </figure>
            <div class="container upr">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-7 slider-info mb-4 mb-sm-5 mb-lg-0 text-center text-sm-start text-white">
                        <h1 class="text-white">Medical Treatment With Unmatched Personal Care</h1>
                        <p>World's Most Trusted Medical Travel Assistance Platform</p>
                        <p>Bringing Smiles to 10,000+ International Patients Since 2020 Since its inception in 2020, Medassure Healthcare has assisted 10,000+ overseas patients with top-tier medical care in India. From diagnostics to advanced treatments, we at Medassure ensure seamless care and support, including hospital coordination, travel, and accommodation, offering a hassle-free healthcare journey.</p>
                    </div>
                    <div class="col-lg-5 ps-xl-5">
                        <div class="slider-form">
                            <div class="dynamic_content">
                                <div class="main_container">
                                    <section class="selected-doctor ms_v_cta_hide">
                                        <div class="container block-container">
                                            <div class="panel panel-default">
                                                <div class="panel-body panel-doctor-pif">
                                                    <div class="modeofconsultation h2 bold" style="text-align:center;">Let Us Help You</div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="container block-container">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form class="form-horizontal form-customize" id="genericForm" autocomplete="off"> 
                                                    <div class="form-group label-controls"> 
                                                        <label class="control-label col-sm-12" for="name">Name<span class="red">*</span></label>
                                                        <div class="col-sm-12"> 
                                                            <input type="text" class="form-control new-form-control" id="name" placeholder="Patient Name" name="name" required> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group label-controls">
                                                        <label class="control-label col-sm-12" for="email">Email<span class="red">*</span></label>
                                                        <div class="col-sm-12"> 
                                                            <input type="email" class="form-control new-form-control" id="email" placeholder="Enter email" name="email" required> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group label-controls"> 
                                                        <label class="control-label col-sm-12" for="country">Country<span class="red">*</span></label>
                                                        <div class="col-sm-12"> 
                                                            <select class="form-control new-form-control form-select" id="country" placeholder="Select Country" name="country" required="true">
                                                                <option value="" selected="selected">Country</option>
                                                                <?php foreach($countryList as $k => $v) { ?>
                                                                    <option value="<?= $v->short_name; ?>"><?= $v->name; ?></option>
                                                                <?php } ?>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group label-controls stategroup" style="display: none;"> 
                                                        <label class="control-label col-sm-12" for="state">City<span class="red">*</span></label>
                                                        <div class="col-sm-12">
                                                            <div class="autocomplete"> 
                                                                <input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City"> 
                                                                <input type="hidden" id="state" name="state"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group label-controls phn-block"> 
                                                        <label class="control-label col-sm-12" for="phone">Phone Number<span class="red">*</span></label>
                                                        <div class="col-sm-12"> 
                                                            <input type="text" id="country_phone_code" name="country_phone_code" class="form-control new-form-control col-md-2" value="" readonly style="width: 15%; float: left;"> 
                                                            <input type="tel" class="form-control new-form-control col-md-10" id="phone_number" placeholder="Your Phone number"name="phone_number" required style="width: 84%"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group"> 
                                                            <label for="medicalissue">Medical Issue<span class="red">*</span></label><br> 
                                                            <textarea cols="5" rows="5" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem .." style="height:100%; width:100%; resize: vertical;" required></textarea> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group label-controls" id="ageblock" style="display: none;"> 
                                                        <label class="control-label col-sm-12" for="email">Patient's Age or Date Of Birth<span class="red">*</span></label>
                                                        <div class="col-sm-12"> 
                                                            <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                                        </div>
                                                    </div>
                                                    <div class="form-group label-controls" id="emirates-id-block" style="display: none;"> 
                                                        <label for="inputCity" class="form-label"> Emirates ID </label> 
                                                        <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)">
                                                    </div>
                                                    <div class="form-group label-controls">
                                                        <div class="col-sm-12 text-center"> 
                                                            <button type="submit" id="search-main-form-btn" class="btn online-consult-button in_page_form">Get FREE Quote</button>
                                                        </div>
                                                    </div>
                                                </form>


                                                <div style="width: 100%;" class="form-group label-controls">
                                                    <div class="col-sm-12 text-center"> 
                                                        <span class="formtns-triger text-muted">By submitting the form I agree to the 
                                                            <a title="Terms of Use" href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use</a> and 
                                                            <a title="Privacy Policy" href="/privacy-policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of Vaidam Health.
                                                        </span> 
                                                    </div>
                                                </div>

                                                <!-- Model open  -->
                                                <!-- Model open  -->
                                                <!-- Start Modal Privacy Policy -->
                                                <div class="modal fade" id="formTerms" tabindex="-1" role="dialog" aria-labelledby="termsModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header"> 
                                                                <span class="modal-title" style="font-weight: bold" id="">Terms of Use</span>
                                                                <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                            </div>
                                                            <div class="modal-body" id="terms_of_use"> </div>
                                                            <div class="modal-footer"> 
                                                                <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button>
                                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal Terms -->
                                                <!-- Start Modal Privacy Policy -->
                                                <div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="PrivacyPolicyCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header"> 
                                                                <span class="modal-title" style="font-weight: bold" id="">Privacy Policy</span> 
                                                                <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal"aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                            </div>
                                                            <div class="modal-body" id="privacy_policy"> </div>
                                                            <div class="modal-footer"> 
                                                                <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button>
                                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal Privacy Policy -->
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

        <section>
            <div class="container">
                <div class="section-title mb-2 mb-sm-4 text-center">
                    <h2>Top Medical Destinations</h2>
                    <p class="mt-3">Our network spans the top medical tourism hubs worldwide - giving you the choice of cities, doctors and price.</p>
                </div>
                <div class="row row-cols-lg-6 row-cols-md-4 row-cols-sm-3 row-cols-2 justify-content-center g-3 mt-0 cntry-bxes">
                    <div class="col"> 
                        <a href="<?= base_url(''); ?>india" class="country-bx d-flex align-items-center w-100 h-100" title="Vaidam">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/india-flag.webp"  width="24" height="24" alt="India Flag" class="img-fluid" title="Indian Flag image">
                            </figure>
                            <p>India</p>
                        </a> 
                    </div>
                    <div class="col"> 
                        <button data-bs-toggle="modal" data-bs-target="#get_quote" class="country-bx d-flex align-items-center w-100 h-100">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/uae-flag.webp" alt="UAE Flag" width="24" height="19" class="img-fluid" title="UAE Flag image">
                            </figure>
                            <p>UAE</p>
                        </button> 
                    </div>
                    <div class="col"> 
                        <button data-bs-toggle="modal" data-bs-target="#get_quote" class="country-bx d-flex align-items-center w-100 h-100">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/egypt-flag.webp" alt="Egypt Flag" width="24" height="14" class="img-fluid" title="Eqypt Flag image">
                            </figure>
                            <p>Egypt</p>
                        </button> 
                    </div>
                    <div class="col"> 
                        <button data-bs-toggle="modal" data-bs-target="#get_quote" class="country-bx d-flex align-items-center w-100 h-100">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/germany-flag.webp" alt="Germany Flag" width="24" height="15" class="img-fluid" title="Germany Flag image">
                            </figure>
                            <p>Germany</p>
                        </button> 
                    </div>
                </div>
            </div>
        </section>

        <section class="gray-bg">
            <div class="container">
                <div class="section-title mb-2 mb-sm-3 text-center">
                    <h2>Multi-Specialty Focus</h2>
                    <p class="mt-3">We cover all medical needs, from hair transplants to heart transplants.</p>
                </div>
                <div class="row row-cols-lg-3 row-cols-2 g-3 mt-0 g-xl-4 treatment-cnt">
                    <?php foreach($specialty as $k8 => $v8){ ?>
                        <div class="col">
                            <div data-india="https://www.vaidam.com/doctors/oncology-and-oncosurgery/india || https://www.vaidam.com/hospitals/oncology-and-oncosurgery/india || https://www.vaidam.com/search/cancer/india"
                                data-turkey="https://www.vaidam.com/doctors/oncology-and-oncosurgery/turkey || https://www.vaidam.com/hospitals/oncology-and-oncosurgery/turkey || https://www.vaidam.com/search/cancer/turkey"
                                data-uae="https://www.vaidam.com/doctors/oncology-and-oncosurgery/united-arab-emirates || https://www.vaidam.com/hospitals/oncology-and-oncosurgery/united-arab-emirates"
                                data-thailand="https://www.vaidam.com/doctors/oncology-and-oncosurgery/thailand || https://www.vaidam.com/hospitals/oncology-and-oncosurgery/thailand || https://www.vaidam.com/search/cancer/thailand"
                                data-germany="https://www.vaidam.com/doctors/oncology-and-oncosurgery/germany || https://www.vaidam.com/hospitals/oncology-and-oncosurgery/germany"
                                data-department="Oncology" doctor-info="Best Cancer Doctors"
                                hospital_info="Best Cancer Hospitals" cost-info="Cancer Treatment Cost"
                                class="treatment_bx d-block d-sm-flex position-relative" data-bs-toggle="modal"
                                data-bs-target="#treatmentModalOncology">
                                <figure class="m-0">
                                    <img loading="lazy" src="<?= base_url(''); ?><?= $v8['image'] ?>" alt="Oncology Service" class="img-fluid" title="<?= $v8['title'] ?>">
                                </figure>
                                <div class="info">
                                    <h3><?= $v8['title'] ?></h3>
                                    <p><?= $v8['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="mt-4 pt-3 text-center"> 
                    <a href="<?= base_url(''); ?>consult-online" class="readmore-outline me-2" title="Consult-Online">Need Assistance?</a> 
                    <a href="https://api.whatsapp.com/send?phone=919958278202&text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com?source=wpchat_HPTL,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color wa_button_clicked">
                    <img loading="lazy" src="<?= base_url(''); ?>assets/img/whatsaap-icon01.webp" alt="Chat with Us" width="30" height="29" class="img-fluid me-1" title="Chat with US image">Chat</a> 
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-title mb-4 pb-2 text-center">
                    <h2>Network of Top Hospitals</h2>
                    <p class="mt-3">We rigorously vet hospitals before adding to our panel, ensuring you receive the best care. We have in-depth knowledge of hospitals in every country we operate in.</p>
                </div>
                <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 g-3 g-xl-4">
                    <div class="col">
                        <div class="col-country"> 
                            <a href="https://www.vaidam.com/hospitals/india" title="Top Hospital in India">
                                <h4>India 
                                    <figure><img src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp" alt="India Flag" width="24" height="24" class="img-fluid" title="India Flag image"></figure>
                                </h4>
                            </a>
                            <div class="row row-cols-2 g-2 g-lg-3">
                                <div class="col"> 
                                    <a href="https://www.vaidam.com/hospitals/medanta-medicity-gurgaon" title="Medanta - The Medicity Hospital, Gurgaon"> 
                                        <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Medanta.webp" alt="Medanta - The Medicity Hospital, Gurgaon" class="img-fluid" title="Medanta - The Medicity Hospital, Gurgaon">
                                        <p>Medanta, Gurgaon</p>
                                    </a> 
                                </div>
                                <div class="col"> 
                                    <a href="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi" title="Indraprastha Apollo Hospital New Delhi"> 
                                        <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/indraprastha apollo hospital new delhi.webp" alt="Indraprastha Apollo Hospital New Delhi" class="img-fluid" title="Indraprastha Apollo Hospital New Delhi">
                                        <p>Indraprastha Apollo, New Delhi</p>
                                    </a> 
                                </div>
                                <div class="col"> 
                                    <a href="https://www.vaidam.com/hospitals/kokilaben-dhirubhai-ambani-hospital-mumbai" title="Kokilaben Dhirubhai Ambani Hospital Mumbai"> 
                                        <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/kokilaben hospital mumbai.webp" alt="Kokilaben Dhirubhai Ambani Hospital Mumbai" class="img-fluid" title="Kokilaben Dhirubhai Ambani Hospital Mumbai">
                                        <p>Kokilaben, Mumbai</p>
                                    </a> 
                                </div>
                                <div class="col"> 
                                    <a href="https://www.vaidam.com/hospitals/apollo-hospitals-greams-road-chennai" title="Apollo Hospitals, Greams Road, Chennai"> 
                                        <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/apollo hospital  chennai.webp" alt="Apollo Hospitals, Greams Road, Chennai" class="img-fluid" title="Apollo Hospitals, Greams Road, Chennai">
                                        <p>Apollo, Chennai</p>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row row-cols-1 g-3 g-xl-4">
                            <div class="col">
                                <div class="col-country"> <a href="https://www.vaidam.com/hospitals/turkey"
                                        title="Top Hospital in Turkey">
                                        <h4>Turkey <figure><img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                    alt="Thailand Flag" width="24" height="18" class="img-fluid"
                                                    title="Thailand Flag image"></figure>
                                        </h4>
                                    </a>
                                    <div class="row g-3">
                                        <div class="col"> <a
                                                href="https://www.vaidam.com/hospitals/medical-park-group-istanbul"
                                                title="Medical Park Group, Istanbul"> <img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Medical Park, Istanbul.webp"
                                                    alt="Medical Park Group, Istanbul" class="img-fluid"
                                                    title="Medical Park Group, Istanbul">
                                                <p>Medical Park, Istanbul</p>
                                            </a> </div>
                                        <div class="col"> <a
                                                href="https://www.vaidam.com/hospitals/memorial-hospitals-group-istanbul"
                                                title="Memorial Hospitals Group, İstanbul"> <img loading="lazy"
                                                    src=" https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Memorial Hospital istanbul.webp"
                                                    alt="Memorial Hospitals Group, İstanbul" class="img-fluid"
                                                    title="Memorial Hospitals Group, İstanbul">
                                                <p>Memorial Hospitals, İstanbul</p>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-country"> <a href="https://www.vaidam.com/hospitals/thailand"
                                        title="Top Hospital in Thailand">
                                        <h4>Thailand <figure><img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                    alt="Thailand Flag" width="24" height="18" class="img-fluid"
                                                    title="Thailand Flag"></figure>
                                        </h4>
                                    </a>
                                    <div class="row g-3">
                                        <div class="col"> <a
                                                href="https://www.vaidam.com/hospitals/bumrungrad-international-hospital-bangkok"
                                                title="Bumrungrad International Hospital, Bangkok"> <img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Bumrungrad, Bangkok.webp"
                                                    alt="Bumrungrad International Hospital, Bangkok" class="img-fluid"
                                                    title="Bumrungrad International Hospital, Bangkok">
                                                <p>Bumrungrad, Bangkok</p>
                                            </a> </div>
                                        <div class="col"> <a href="https://www.vaidam.com/hospitals/bangkok-hospital"
                                                title="Bangkok Hospital"> <img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Bangkok Hospital, Bangkok, Bangkok.webp  "
                                                    alt="Bangkok Hospital" class="img-fluid" title="Bangkok Hospital">
                                                <p>Bangkok Hospital, Bangkok</p>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row row-cols-1 g-3 g-xl-4">
                            <div class="col">
                                <div class="col-country"> <a
                                        href="https://www.vaidam.com/hospitals/united-arab-emirates"
                                        title="Top Hospital in UAE">
                                        <h4>UAE <figure><img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                    width="24" height="24" alt="UAE Flag" class="img-fluid"
                                                    title="UAE Flag"></figure>
                                        </h4>
                                    </a>
                                    <div class="row g-3">
                                        <div class="col"> <a
                                                href="https://www.vaidam.com/hospitals/burjeel-hospital-abu-dhabi"
                                                title="Burjeel Hospital, Abu Dhabi"> <img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Burjeel, Abu Dhabi.webp "
                                                    alt="Burjeel Hospital, Abu Dhabi" class="img-fluid"
                                                    title="Burjeel Hospital, Abu Dhabi">
                                                <p>Burjeel, Abu Dhabi</p>
                                            </a> </div>
                                        <div class="col"> <a
                                                href="https://www.vaidam.com/hospitals/saudi-german-hospital-dubai"
                                                title="Saudi German Hospital, Dubai"> <img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Saudi German, Dubai.webp"
                                                    alt="Saudi German Hospital, Dubai" class="img-fluid"
                                                    title="Saudi German Hospital, Dubai">
                                                <p>Saudi German, Dubai</p>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-country"> <a href="https://www.vaidam.com/hospitals/germany"
                                        title="Top Hospital in Germany">
                                        <h4>Germany <figure><img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/germany-flag.webp"
                                                    alt="Thailand Flag" width="24" height="18" class="img-fluid"
                                                    title="Top Hospital in Germany"></figure>
                                        </h4>
                                    </a>
                                    <div class="row g-3">
                                        <div class="col"> <a
                                                href="https://www.vaidam.com/hospitals/charite-university-hospital"
                                                title="Charite University Hospital"> <img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Charite, Berlin.webp "
                                                    alt="Charite University Hospital" class="img-fluid"
                                                    title="Charite University Hospital">
                                                <p>Charite, Berlin</p>
                                            </a> </div>
                                        <div class="col"> <a
                                                href="https://www.vaidam.com/hospitals/university-hospital-heidelberg"
                                                title="University Hospital Heidelberg"> <img loading="lazy"
                                                    src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Heidelberg University, Heidelberg.webp"
                                                    alt="University Hospital Heidelberg" class="img-fluid"
                                                    title="University Hospital Heidelberg">
                                                <p>Heidelberg University, Heidelberg</p>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-3 hospital-dec text-center"><img loading="lazy"
                        src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/hospital-ac.webp"
                        alt="Hospitals with highest accreditation" width="244" height="25" class="img-fluid me-2"
                        title="Hospitals with highest accreditation"> Hospitals with highest accreditation</p>
                <div class="mt-4 pt-3 text-center"> <a
                        onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','home page enquiry button on hospital block','','home page','','');"
                        href="https://www.vaidam.com/lp/consult-online" class="readmore-outline me-2"
                        title="Contact-Hospital" data-cf-modified-7c4b08c82de89e199cc1ef36-="">Contact Hospital</a> <a
                        href="https://api.whatsapp.com/send?phone=919971616131&text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com?source=wpchat_HPHL,%20Thank%20you!"
                        title="Whatsapp Chat" class="readmore whatsapp-color wa_button_clicked"><img loading="lazy"
                            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp"
                            alt="Chat with Us" width="30" height="29" class="img-fluid me-1" title="Chat with Us">
                        Chat</a> </div>
            </div>
        </section>

        <section class="pt-0">
            <div class="container">
                <div class="section-title mb-4 pb-2 text-center">
                    <h2>Lowest Quotes Assured</h2>
                    <p class="mt-3">We constantly negotiate better prices and alternatives without compromising treatment quality. Our prices are consistently lower.</p>
                </div>
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-ms-2 g-3 g-xl-4 price-b-cnt">
                    <?php foreach($qoute as $k7 => $v7){ ?>
                        <div class="col">
                            <div data-bs-toggle="modal" data-bs-target="#get_quote">
                                <div class="nag_price_bx d-flex align-items-center">
                                    <figure>
                                        <img loading="lazy" src="<?= base_url(''); ?><?= $v7['image'] ?>" alt="<?= $v7['title'] ?>" width="48" height="48" class="img-fluid" title="<?= $v7['title'] ?>">
                                    </figure>
                                    <div class="info">
                                        <h3 class="title"><?= $v7['title'] ?></h3>
                                        <!-- <p>Starting <strong>₹<?= $v7['price'] ?></strong></p> -->
                                        <p class="text-danger">Get Quote</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="mt-4 pt-3 text-center d-none d-sm-block">
                    <p class="mt-3">Discover what we offer!</p> 
                    <a href="<?= base_url(''); ?>consult-online" class="readmore-outline me-2" title="Get-Quote">Get Quote</a> 
                    <a href="https://api.whatsapp.com/send?phone=919958278202&text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com?source=wpchat_HPCL,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color wa_button_clicked">
                        <img loading="lazy" src="<?= base_url(''); ?>assets/img/whatsaap-icon01.webp" alt="Chat with Us" width="30" height="29" class="img-fluid me-1" title="Chat with Us">Chat
                    </a>
                </div>
                <div class="text-center d-sm-none"> 
                    <button type="button" class="readmore loadmore-price mt-4">Load More</button> 
                </div>
            </div>
        </section>

        <section class="how-work position-relative">
            <div class="container upr">
                <div class="section-title mb-4 pb-2 text-center">
                    <h2>How do we work?</h2>
                </div>
                <div class="row">
                    <div class="col-md-8 work_cnt">
                        <div class="row">
                            <div class="col position-relative">
                                <div class="work_bx">
                                    <figure><img loading="lazy"
                                            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/noun-contact-us.svg"
                                            alt="Share your case details" width="56" height="56" class="img-fluid"
                                            title="Share your case details"><span class="d-lg-none">01</span></figure>
                                    <h3>Contact us, share your case details and our team will get in touch with you.
                                    </h3>
                                </div>
                            </div>
                            <div class="col position-relative">
                                <div class="work_bx">
                                    <figure><img loading="lazy"
                                            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/Cost.svg"
                                            alt="Receive cost estimate in 48 Hours" width="56" height="56"
                                            class="img-fluid" title="Receive cost estimate in 48 Hours"><span
                                            class="d-lg-none">02</span></figure>
                                    <h3>Receive medical opinion and cost estimate within 48 Hours</h3>
                                </div>
                            </div>
                            <div class="col position-relative">
                                <div class="work_bx">
                                    <figure><img loading="lazy"
                                            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/noun-booking-online.svg"
                                            alt="Get received by our team" width="56" height="56" class="img-fluid"
                                            title="Get received by our team"><span class="d-lg-none">03</span></figure>
                                    <h3>Book flights and get received by our team at the airport</h3>
                                </div>
                            </div>
                            <div class="col position-relative">
                                <div class="work_bx">
                                    <figure><img loading="lazy"
                                            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/noun-follow-up.svg"
                                            alt="Get treated and fly back" width="56" height="56" class="img-fluid"
                                            title="Get treated and fly back"><span class="d-lg-none">04</span></figure>
                                    <h3>Get treated and fly back. We stay in touch with you for follow ups</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-bx">
                            <div class="vaidam_yt_video_block home-page-video-block click-to-play-video know-work" id="player-H8uaWT6E5Oc"> 
                                <img loading="lazy" class="img-responsive video-icon-block video-block-imgages" src="<?= base_url(''); ?>assets/img/video-icon.webp" width="70" height="55" loading="lazy" alt="Play Video" title="Play Video"> 
                                <img loading="lazy" class="img-responsive video-image home-page-footer-video-image footer-home-images lazy_img" id="H8uaWT6E5Oc" src="https://img.youtube.com/vi/H8uaWT6E5Oc/mqdefault.jpg" width="263" height="148" loading="lazy" alt="YouTube" title="YouTube Video">
                                <p class="text-center play-video-tag">Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-3 text-center">
                    <a href="<?= base_url(''); ?>consult-online" class="readmore-outline" title="Get-Started">Get Started</a>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-title mb-4 pb-2 text-center">
                    <h2>Our Services Cover Every Need</h2>
                    <p class="mt-3">You will be assisted by a dedicated case manager from our team. List of services you can expect from us, for FREE!</p>
                </div>
                <div class="row row-cols-lg-3 row-cols-1 row-cols-sm-2 g-3 g-xl-4 justify-content-center service-cnt">
                    <div class="col">
                        <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon07.webp" width="26" height="26" alt="Medical Opinion and Cost Estimations" class="iimg-fluid" title="Medical Opinion and Cost Estimations">
                            </figure>
                            <div class="info">
                                <h3>Medical Opinion and Cost Estimations</h3>
                                <p>Expert opinions and cost estimates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon01.webp" width="26" height="26" alt="Pre-Travel Consultations" class="iimg-fluid" title="Pre-Travel Consultations">
                            </figure>
                            <div class="info">
                                <h3>Pre-Travel Consultations</h3>
                                <p>Understand your procedure before traveling.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon02.webp" width="26" height="26" alt="Visa" class="iimg-fluid" title="Visa">
                            </figure>
                            <div class="info">
                                <h3>Visa Assistance</h3>
                                <p>Complete medical visa assistance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon03.webp" width="26" height="26" alt="Money Exchange" class="iimg-fluid" title="Money Exchange">
                            </figure>
                            <div class="info">
                                <h3>Money Exchange</h3>
                                <p>Convenient currency exchange services in your city.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon04.webp" width="26" height="26" alt="Interpreters and Translators" class="iimg-fluid" title="Interpreters and Translators">
                            </figure>
                            <div class="info">
                                <h3>Interpreters and Translators</h3>
                                <p>Fluent professionals to break language barriers at every step.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon05.webp" width="26" height="26" alt="Arrival, Departure and Transportation Assistance" class="iimg-fluid" title="Arrival, Departure and Transportation Assistance">
                            </figure>
                            <div class="info">
                                <h3>Transportation Assistance</h3>
                                <p>Complimentary airport transfers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/noun-hotel-star.svg" width="26" height="26" alt="Others" class="iimg-fluid" title="Others">
                            </figure>
                            <div class="info">
                                <h3>Accommodation Options</h3>
                                <p>Near the hospital and matching your budget and needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon06.webp" width="26" height="26" alt="Admission, Appointment, Pharma Care" class="iimg-fluid" title="Admission, Appointment, Pharma Care">
                            </figure>
                            <div class="info">
                                <h3>Admission, Appointment, Pharma Care</h3>
                                <p>Full coordination of medical logistics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon08.webp" width="28" height="26" alt="Private Duty Nursing" class="iimg-fluid" title="Private Duty Nursing">
                            </figure>
                            <div class="info">
                                <h3>Private Duty Nursing</h3>
                                <p>Arrangements of private nursing care as needed.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 pt-3 text-center"> 
                    <a href="https://api.whatsapp.com/send?phone=919958278202&text=Hello,%20please%20contact%20me%20regarding%20https://www.medassure.com?source=wpchat_HPSS,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color wa_button_clicked">
                        <img src="<?= base_url(''); ?>assets/img/whatsaap-icon01.webp" alt="Chat with Us" width="30" height="29" class="img-fluid me-1" title="Chat with Us">Chat
                    </a>
                    <p class="mt-3">Our services are <strong>FREE</strong> and by using our services your hospital bill does not increase!</p>
                </div>
            </div>
        </section>

        <section class="gray-bg">
            <div class="container">
                <div class="testimonial-title d-md-flex align-items-center">
                    
                    <div class="section-title text-center">
                        <h2>Satisfied Patients, Proud Service</h2>
                        <p class="my-3">Bringing Smiles to 10,000+ International Patients Since 2020.</p>
                    </div>
                </div>
                <div class="owl-carousel testimonial-slider">
                    <?php foreach($googlerating as $k4 => $v4){ ?>
                        <div class="item">
                            <div class="testimonial-bx">
                                <p><?= $v4->review; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="owl-carousel testimonial-thumb mt-4 mt-sm-5">
                    <?php foreach($googlerating as $k4 => $v4){ ?>
                        <div class="item">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?><?= $v4->image; ?>" alt="Cristina" width="156" height="156" class="img-fluid" title="<?= $v4->name; ?>">
                            </figure> 
                            <span><?= $v4->name; ?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="d-lg-none text-center mt-4 mt-sm-5"> 
                    <a href="https://bit.ly/4c6iqqQ" target="_blank" class="readmore-outline" title="View-All-Reviews">View All Reviews</a> 
                </div>
            </div>
        </section>

        

        
        <section>
            <div class="container">
                <div class="section-title text-start mb-4">
                    <h2>Frequently Asked Questions (FAQ’s)</h2>
                </div>
                <div class="row accordion custom-accordion gy-3 gy-lg-0" id="faqaccord">
                    <?php foreach($faq as $k2 => $v2){ ?>
                        <div class="col-lg-6">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $v2->id; ?>" aria-expanded="false">
                                    <h3 class="fs-6 my-0"><?= $v2->title; ?></h3>
                                </button>
                                <div id="faq<?= $v2->id; ?>" class="accordion-collapse collapse" data-bs-parent="#faqaccord">
                                    <div class="accordion-body px-1 py-3">
                                        <?= $v2->content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade custom-modal form-modal" id="get_quote" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button> <!-- <h2>Need Help at Enhance Clinics, New Delhi?</h2> -->
                    <!-- <p>Get assistance for your treatent from our experienced care team!</p> -->
                    <div class="dynamic_content">
                        <div class="main_container">
                            <style type="text/css">
                            .primary-form {
                                background-color: #f7f7f7;
                            }

                            .primary-form-field {
                                width: 75%;
                                margin: 0 auto;
                            }
                            </style>
                            <section class="selected-doctor ms_v_cta_hide">
                                <div class="container block-container">
                                    <div class="panel panel-default">
                                        <div class="panel-body panel-doctor-pif">
                                            <h2 class="modeofconsultation" style="text-align:center;">Help Us With
                                                Patient Details</h2>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="container block-container">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form class="form-horizontal form-customize" id="genericForm_2"
                                            autocomplete="off"> <input type="hidden" name="_token" id="_token"
                                                value="TaQz8s2ZDJKMUlwH4JjOnnt7pAenAAW5oOgSYeeU"> <input type="hidden"
                                                name="pagetype" value="home page"> <input type="hidden"
                                                name="page_source" id="page_source_2" value=""> <input type="hidden"
                                                name="preferredLocation" id="preferredLocation" value=""> <input
                                                type="hidden" name="Page_Type" id="Page_Type" value="Home Page">
                                            <div class="form-group label-controls"> <label
                                                    class="control-label col-sm-12" for="name">Name<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <input type="text"
                                                        class="form-control new-form-control" id="name_2"
                                                        placeholder="Patient Name" name="name" required> </div>
                                            </div>
                                            <div class="form-group label-controls"> <label
                                                    class="control-label col-sm-12" for="email">Email<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <input type="email"
                                                        class="form-control new-form-control" id="email_2"
                                                        placeholder="Enter email" name="email" required> </div>
                                            </div>
                                            <div class="form-group label-controls"> <label
                                                    class="control-label col-sm-12" for="country">Country<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <select class="form-control new-form-control"
                                                        id="country_2" placeholder="Select Country" name="country"
                                                        required="true">
                                                        <option value="" selected="selected">Country</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Aland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="VG">British Virgin Islands</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="BQ">Caribbean Netherlands</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo (Brazzaville)</option>
                                                        <option value="CD">Congo (Kinshasa)</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong S.A.R., China</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="CI">Ivory Coast</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="XK">Kosovo</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao S.A.R., China</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="AN">Netherlands Antilles</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SX">Sint Maarten</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich Islands
                                                        </option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syria</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="VI">U.S. Virgin Islands</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VA">Vatican</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Vietnam</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select> </div>
                                            </div>
                                            <div class="form-group label-controls stategroup" style="display: none;">
                                                <label class="control-label col-sm-12" for="state">City<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12">
                                                    <div class="autocomplete"> <input id="city_2"
                                                            class="form-control new-form-control" type="text"
                                                            name="city" placeholder="Select City"> <input type="hidden"
                                                            id="state_2" name="state"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group label-controls"> <label
                                                    class="control-label col-sm-12" for="phone">Phone Number<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <input type="text" id="country_phone_code_2"
                                                        name="country_phone_code"
                                                        class="form-control new-form-control col-md-2" value="" readonly
                                                        style="width: 15%; float: left;"> <input type="tel"
                                                        class="form-control new-form-control col-md-10"
                                                        id="phone_number_2" placeholder="Your Phone number"
                                                        name="phone_number" required style="width: 84%"> </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"> <label for="medicalissue">Medical Issue <span
                                                            class="red">*</span></label><br> <textarea cols="5" rows="5"
                                                        id="medical_problem_2" name="medical_problem"
                                                        placeholder="Describe The Current Medical Problem .."
                                                        style="height:100%; width:100%; resize: vertical;"
                                                        required></textarea> </div>
                                            </div>
                                            <div class="form-group label-controls" id="ageblock_2"
                                                style="display: none;"> <label class="control-label col-sm-12"
                                                    for="email">Patient's Age or Date Of Birth<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <input type="text"
                                                        class="form-control new-form-control" id="age_2"
                                                        placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div>
                                            </div>
                                            <div class="form-group label-controls">
                                                <div class="col-sm-12 text-center"> <input type="hidden"
                                                        name="Form_Location" id="Form_Location"
                                                        value="Form in Between List Elements Second Form"> <input
                                                        type="hidden" name="second_form" value="yes"> <button
                                                        type="submit"
                                                        class="btn online-consult-button in_page_form">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div style="width: 100%;" class="form-group label-controls">
                                            <div class="col-sm-12 text-center"> <span
                                                    class="formtns-triger text-muted">By submitting the form I agree to
                                                    the <a title="Terms of Use" href="/terms-of-use"
                                                        class="terms_of_use" data-bs-toggle="modal"
                                                        data-bs-target="#formTerms">Terms of Use</a> and <a
                                                        title="Privacy Policy" href="/privacy-policy"
                                                        class="terms_of_use" data-bs-toggle="modal"
                                                        data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of Vaidam
                                                    Health.</span> </div>
                                        </div> <!-- Model open  -->
                                        <!-- Model open  -->
                                        <!-- Start Modal Privacy Policy -->
                                        <div class="modal fade" id="formTerms" tabindex="-1" role="dialog"
                                            aria-labelledby="termsModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header"> <span class="modal-title"
                                                            style="font-weight: bold" id="">Terms of Use</span> <button
                                                            type="button" class="close px-2 py-1 lh-1"
                                                            data-bs-dismiss="modal" aria-label="Close"> <span
                                                                aria-hidden="true">&times;</span> </button> </div>
                                                    <div class="modal-body" id="terms_of_use"> </div>
                                                    <div class="modal-footer"> <button type="button"
                                                            class="btn btn-secondary px-4 py-1"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- End Modal Terms -->
                                        <!-- Start Modal Privacy Policy -->
                                        <div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog"
                                            aria-labelledby="PrivacyPolicyCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header"> <span class="modal-title"
                                                            style="font-weight: bold" id="">Privacy Policy</span>
                                                        <button type="button" class="close px-2 py-1 lh-1"
                                                            data-bs-dismiss="modal" aria-label="Close"> <span
                                                                aria-hidden="true">&times;</span> </button> </div>
                                                    <div class="modal-body" id="privacy_policy"> </div>
                                                    <div class="modal-footer"> <button type="button"
                                                            class="btn btn-secondary px-4 py-1"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- End Modal Privacy Policy -->
                                        <style type="text/css">
                                        #formTerms,
                                        #formPrivacyPolicy {
                                            font-size: 14px;
                                            color: #666;
                                            top: 30px
                                        }

                                        #formTerms .modal-dialog,
                                        #formPrivacyPolicy .modal-dialog {
                                            margin: 0px auto;
                                        }

                                        #formTerms .modal-title,
                                        #formPrivacyPolicy .modal-title {
                                            color: #666;
                                            font-size: 16px;
                                            margin: 10px
                                        }

                                        .formtns-triger {
                                            opacity: .6;
                                            font-size: 14px;
                                            cursor: pointer;
                                        }

                                        #formTerms .modal-header,
                                        #formPrivacyPolicy .modal-header {
                                            background: unset;
                                            padding: 0 5px;
                                            border: 0
                                        }

                                        #formTerms .close,
                                        #formPrivacyPolicy .close {
                                            font-size: 30px;
                                            color: #e43939;
                                            position: absolute;
                                            opacity: 1;
                                            top: 1px;
                                            right: 5px;
                                            z-index: 999
                                        }

                                        #formTerms .modal-body,
                                        #formPrivacyPolicy .modal-body {
                                            padding: 5px 15px;
                                            max-height: 420px;
                                            overflow: auto;
                                            border-top: 1px solid #ddd;
                                            border-bottom: 1px solid #ddd
                                        }

                                        #formTerms .modal-footer,
                                        #formPrivacyPolicy .modal-footer {
                                            padding: 5px;
                                            border-top: 0
                                        }

                                        #formTerms .modal-footer .btn,
                                        #formPrivacyPolicy .modal-footer .btn {
                                            background: #e43939;
                                            color: #fff;
                                            font-size: 14px;
                                            line-height: 1;
                                            border-radius: 5px;
                                            padding: 5px 8px
                                        }

                                        .modal-open .modal {
                                            overflow-x: hidden;
                                            overflow-y: hidden;
                                        }

                                        #formTerms h2,
                                        #formPrivacyPolicy h2 {
                                            font-size: 16px;
                                            color: #666
                                        }

                                        #formTerms ul,
                                        #formPrivacyPolicy ul,
                                        #formTerms ol,
                                        #formPrivacyPolicy ol {
                                            padding-left: 15px
                                        }

                                        #formTerms .modal-content,
                                        #formPrivacyPolicy .modal-content {
                                            background: #ffffff
                                        }

                                        .modal-backdrop.fade.in {
                                            opacity: 0.5
                                        }

                                        .modal-backdrop {
                                            --bs-backdrop-zindex: 0;
                                        }

                                        @media only screen and (max-width: 520px) {
                                            div#formPrivacyPolicy {
                                                top: 36px
                                            }

                                            #formTerms .modal-body,
                                            #formPrivacyPolicy .modal-body {
                                                max-height: 480px
                                            }
                                        }

                                        .formtns-triger a {
                                            color: #164399;
                                        }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-0">
                <div class="modal-body"> <button type="button" class="btn-close upr" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="ratio ratio-16x9"> <iframe class="embed-responsive-item" src="" id="video"
                            allowscriptaccess="always" allow="autoplay"></iframe> </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-bottom" class="bottom-menu"> <a
            onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','enquiry sticky button','','home page','','');"
            href="https://www.vaidam.com/lp/consult-online" class="readmore-outline me-2" title="Need-Help"
            data-cf-modified-7c4b08c82de89e199cc1ef36-="">Need Help?</a> <a
            href="https://api.whatsapp.com/send?phone=919971616131&text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com?source=wpchat_HPSB,%20Thank%20you!"
            title="Whatsapp Chat" class="readmore whatsapp-color wa_button_clicked"><img loading="lazy"
                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us"
                width="30" height="29" class="img-fluid me-1" title="Chat with Us banner"> Chat</a> </div>
    <div class="scroll-top-wrapper transition"> <span class="scroll-top-inner transition"> <span
                style='font-size:36px; color:#fff;'>&#8593;</span> </span> </div> <!-- Model Starts Here -->
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalOncology" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaOncology" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyOncology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandOncology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeOncology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"> </span> UAE</button> </li>
                                <li id="li_de"><button data-bs-toggle="pill" href="#germanyOncology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/germany-flag.webp"
                                                alt="Germany" title="Country Germany image"></span> Germany</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaOncology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/oncology-and-oncosurgery/india"
                                            title="Best Cancer Doctors in India">Best Cancer Doctors in India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/oncology-and-oncosurgery/india"
                                            title="Best Cancer Hospitals In India">Best Cancer Hospitals In India</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/search/cancer/india"
                                            title="Cancer Treatment Cost in India">Cancer Treatment Cost in India</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyOncology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/oncology-and-oncosurgery/turkey"
                                            title="Best Cancer Doctors in Turkey">Best Cancer Doctors in Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/oncology-and-oncosurgery/turkey"
                                            title="Best Cancer Hospitals In Turkey">Best Cancer Hospitals In Turkey</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/search/cancer/turkey"
                                            title="Cancer Treatment Cost in Turkey">Cancer Treatment Cost in Turkey</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandOncology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/oncology-and-oncosurgery/thailand"
                                            title="Best Cancer Doctors in Thailand">Best Cancer Doctors in Thailand</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/oncology-and-oncosurgery/thailand"
                                            title="Best Cancer Hospitals In Thailand">Best Cancer Hospitals In
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/cancer/thailand"
                                            title="Cancer Treatment Cost in Thailand">Cancer Treatment Cost in
                                            Thailand</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeOncology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/oncology-and-oncosurgery/united-arab-emirates"
                                            title="Best Cancer Doctors in UAE">Best Cancer Doctors in UAE</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/oncology-and-oncosurgery/united-arab-emirates"
                                            title="Best Cancer Hospitals In UAE">Best Cancer Hospitals In UAE</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="germanyOncology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/oncology-and-oncosurgery/germany"
                                            title="Best Cancer Doctors in Germany">Best Cancer Doctors in Germany</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/oncology-and-oncosurgery/germany"
                                            title="Best Cancer Hospitals In Germany">Best Cancer Hospitals In
                                            Germany</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalNeurosurgery" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaNeurosurgery" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyNeurosurgery"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandNeurosurgery"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeNeurosurgery"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"> </span> UAE</button> </li>
                                <li id="li_de"><button data-bs-toggle="pill" href="#germanyNeurosurgery"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/germany-flag.webp"
                                                alt="Germany" title="Country Germany image"> </span> Germany</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaNeurosurgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/neurosurgery/india"
                                            title="Best Neurosurgeons in India">Best Neurosurgeons in India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/neurosurgery/india"
                                            title="Best Neurosurgery Hospitals In India">Best Neurosurgery Hospitals In
                                            India</a></li>
                                    <li><a href="https://www.vaidam.com/search/neurosurgery/india"
                                            title="Neurosurgery Cost In India">Neurosurgery Cost In India</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyNeurosurgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/neurosurgery/turkey"
                                            title="Best Neurosurgeons in Turkey">Best Neurosurgeons in Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/neurosurgery/turkey"
                                            title="Best Neurosurgery Hospitals In Turkey">Best Neurosurgery Hospitals In
                                            Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/search/neurosurgery/turkey"
                                            title="Neurosurgery Cost In Turkey">Neurosurgery Cost In Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandNeurosurgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/neurosurgery/thailand"
                                            title="Best Neurosurgeons in Thailand">Best Neurosurgeons in Thailand</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/neurosurgery/thailand"
                                            title="Best Neurosurgery Hospitals In Thailand">Best Neurosurgery Hospitals
                                            In Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/neurosurgery/thailand"
                                            title="Neurosurgery Cost In Thailand">Neurosurgery Cost In Thailand</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeNeurosurgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/neurosurgery/united-arab-emirates"
                                            title="Best Neurosurgeons in UAE">Best Neurosurgeons in UAE</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/neurosurgery/united-arab-emirates"
                                            title="Best Neurosurgery Hospitals In UAE">Best Neurosurgery Hospitals In
                                            UAE</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="germanyNeurosurgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/neurosurgery/germany"
                                            title="Best Neurosurgeons in Germany">Best Neurosurgeons in Germany</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/neurosurgery/germany"
                                            title="Best Neurosurgery Hospitals In Germany">Best Neurosurgery Hospitals
                                            In Germany</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalSpine-Surgery" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaSpine-Surgery" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeySpine-Surgery"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandSpine-Surgery"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeSpine-Surgery"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"> </span> UAE</button> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaSpine-Surgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/spine-surgery/india"
                                            title="Best Spine Surgeons in India">Best Spine Surgeons in India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/spine-surgery/india"
                                            title="Best Spine Hospitals In India">Best Spine Hospitals In India</a></li>
                                    <li><a href="https://www.vaidam.com/search/spine-surgery/india"
                                            title="Spine Surgery Cost in India">Spine Surgery Cost in India</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeySpine-Surgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/spine-surgery/turkey"
                                            title="Best Spine Surgeons in Turkey">Best Spine Surgeons in Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/spine-surgery/turkey"
                                            title="Best Spine Hospitals In Turkey">Best Spine Hospitals In Turkey</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/search/spine-surgery/turkey"
                                            title="Spine Surgery Cost in Turkey">Spine Surgery Cost in Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandSpine-Surgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/spine-surgery/thailand"
                                            title="Best Spine Surgeons in Thailand">Best Spine Surgeons in Thailand</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/spine-surgery/thailand"
                                            title="Best Spine Hospitals In Thailand">Best Spine Hospitals In
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/spine-surgery/thailand"
                                            title="Spine Surgery Cost in Thailand">Spine Surgery Cost in Thailand</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeSpine-Surgery">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/spine-surgery/united-arab-emirates"
                                            title="Best Spine Surgeons in UAE">Best Spine Surgeons in UAE</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/spine-surgery/united-arab-emirates"
                                            title="Best Spine Hospitals In UAE">Best Spine Hospitals In UAE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalCardiology" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaCardiology" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyCardiology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandCardiology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeCardiology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"> </span> UAE</button> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaCardiology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india"
                                            title="Best Cardiac Surgeons in India">Best Cardiac Surgeons in India</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/india"
                                            title="Best Cardiac Hospitals In India">Best Cardiac Hospitals In India</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/search/heart-surgery/india"
                                            title="Heart Surgery Cost in India">Heart Surgery Cost in India</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyCardiology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/turkey"
                                            title="Best Cardiac Surgeons in Turkey">Best Cardiac Surgeons in Turkey</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/turkey"
                                            title="Best Cardiac Hospitals In Turkey">Best Cardiac Hospitals In
                                            Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/search/heart-surgery/turkey"
                                            title="Heart Surgery Cost in Turkey">Heart Surgery Cost in Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandCardiology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/thailand"
                                            title="Best Cardiac Surgeons in Thailand">Best Cardiac Surgeons in
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/thailand"
                                            title="Best Cardiac Hospitals In Thailand">Best Cardiac Hospitals In
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/heart-surgery/thailand"
                                            title="Heart Surgery Cost in Thailand">Heart Surgery Cost in Thailand</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeCardiology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/united-arab-emirates"
                                            title="Best Cardiac Surgeons in UAE">Best Cardiac Surgeons in UAE</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/united-arab-emirates"
                                            title="Best Cardiac Hospitals In UAE">Best Cardiac Hospitals In UAE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalOrthopedics" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaOrthopedics" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyOrthopedics"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandOrthopedics"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"></span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeOrthopedics"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"></span> UAE</button> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaOrthopedics">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/orthopedics/india"
                                            title="Best Orthopedic Doctors in India">Best Orthopedic Doctors in
                                            India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/orthopedics/india"
                                            title="Best Orthopedic Hospitals In India">Best Orthopedic Hospitals In
                                            India</a></li>
                                    <li><a href="https://www.vaidam.com/search/orthopedic-surgery/india"
                                            title="Orthopedic Surgery Cost In India">Orthopedic Surgery Cost In
                                            India</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyOrthopedics">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/orthopedics/turkey"
                                            title="Best Orthopedic Doctors in Turkey">Best Orthopedic Doctors in
                                            Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/orthopedics/turkey"
                                            title="Best Orthopedic Hospitals In Turkey">Best Orthopedic Hospitals In
                                            Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/search/orthopedic-surgery/turkey"
                                            title="Orthopedic Surgery Cost In Turkey">Orthopedic Surgery Cost In
                                            Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandOrthopedics">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/orthopedics/thailand"
                                            title="Best Orthopedic Doctors in Thailand">Best Orthopedic Doctors in
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/orthopedics/thailand"
                                            title="Best Orthopedic Hospitals in Thailand">Best Orthopedic Hospitals in
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/orthopedic-surgery/thailand"
                                            title="Orthopedic Surgery Cost In Thailand">Orthopedic Surgery Cost In
                                            Thailand</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeOrthopedics">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/orthopedics/united-arab-emirates"
                                            title="Best Orthopedic Doctors in UAE">Best Orthopedic Doctors in UAE</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/orthopedics/united-arab-emirates"
                                            title="Best Orthopedic Hospitals in UAE">Best Orthopedic Hospitals in
                                            UAE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalIVF" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaIVF" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyIVF"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandIVF"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeIVF"><span> <img loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"> </span> UAE</button> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaIVF">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/ivf-and-infertility/india"
                                            title="IVF Doctors in India">IVF Doctors in India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/ivf-and-infertility/india"
                                            title="IVF Centers In India">IVF Centers In India</a></li>
                                    <li><a href="https://www.vaidam.com/search/ivf/india"
                                            title="IVF Treatment Cost in India">IVF Treatment Cost in India</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyIVF">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/ivf-and-infertility/turkey"
                                            title="IVF Doctors in Turkey">IVF Doctors in Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/ivf-and-infertility/turkey"
                                            title="IVF Centers In Turkey">IVF Centers In Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/search/ivf/turkey"
                                            title="IVF Treatment Cost in Turkey">IVF Treatment Cost in Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandIVF">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/ivf-and-infertility/thailand"
                                            title="IVF Doctors in Thailand">IVF Doctors in Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/ivf-and-infertility/thailand"
                                            title="IVF Centers In Thailand">IVF Centers In Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/ivf/thailand"
                                            title="IVF Treatment Cost in Thailand">IVF Treatment Cost in Thailand</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeIVF">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/ivf-and-infertility/united-arab-emirates"
                                            title="IVF Doctors in UAE">IVF Doctors in UAE</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/ivf-and-infertility/united-arab-emirates"
                                            title="IVF Centers In UAE">IVF Centers In UAE</a></li>
                                    <li><a href="https://www.vaidam.com/search/ivf/united-arab-emirates"
                                            title="IVF Treatment Cost in UAE">IVF Treatment Cost in UAE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalGynecology" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaGynecology" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyGynecology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandGynecology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeGynecology"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"> </span> UAE</button> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaGynecology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/gynecology/india"
                                            title="Best Gynecologist in India">Best Gynecologist in India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/gynecology/india"
                                            title="Best Gynecology Hospitals In India">Best Gynecology Hospitals In
                                            India</a></li>
                                    <li><a href="https://www.vaidam.com/search/gynecological-surgery/india"
                                            title="Gynaecological Surgery Cost in India">Gynaecological Surgery Cost in
                                            India</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyGynecology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/gynecology/turkey"
                                            title="Best Gynecologist in Turkey">Best Gynecologist in Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/gynecology/turkey"
                                            title="Best Gynecology Hospitals In Turkey">Best Gynecology Hospitals In
                                            Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/search/gynecological-surgery/turkey"
                                            title="Gynaecological Surgery Cost in Turkey">Gynaecological Surgery Cost in
                                            Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandGynecology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/gynecology/thailand"
                                            title="Best Gynecologist in Thailand">Best Gynecologist in Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/gynecology/thailand"
                                            title="Best Gynecology Hospitals In Thailand">Best Gynecology Hospitals In
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/gynecological-surgery/thailand"
                                            title="Gynaecological Surgery Cost in Thailand">Gynaecological Surgery Cost
                                            in Thailand</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeGynecology">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/gynecology/united-arab-emirates"
                                            title="Best Gynecologist in UAE">Best Gynecologist in UAE</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/gynecology/united-arab-emirates"
                                            title="Best Gynecology Hospitals In UAE">Best Gynecology Hospitals In
                                            UAE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalCosmetic" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaCosmetic" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyCosmetic"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandCosmetic"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeCosmetic"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"></span> UAE</button> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaCosmetic">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/cosmetic-and-plastic-surgery/india"
                                            title="Best Cosmetic Surgeons in India">Best Cosmetic Surgeons in India</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/cosmetic-and-plastic-surgery/india"
                                            title="Best Cosmetic Hospitals In India">Best Cosmetic Hospitals In
                                            India</a></li>
                                    <li><a href="https://www.vaidam.com/search/cosmetic/india"
                                            title="Cosmetic Surgery Cost in India">Cosmetic Surgery Cost in India</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyCosmetic">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/cosmetic-and-plastic-surgery/turkey"
                                            title="Best Cosmetic Surgeons in Turkey">Best Cosmetic Surgeons in
                                            Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/cosmetic-and-plastic-surgery/turkey"
                                            title="Best Cosmetic Hospitals In Turkey">Best Cosmetic Hospitals In
                                            Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/search/cosmetic/turkey"
                                            title="Cosmetic Surgery Cost in Turkey">Cosmetic Surgery Cost in Turkey</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandCosmetic">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/cosmetic-and-plastic-surgery/thailand"
                                            title="Best Cosmetic Surgeons in Thailand">Best Cosmetic Surgeons in
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/cosmetic-and-plastic-surgery/thailand"
                                            title="Best Cosmetic Hospitals In Thailand">Best Cosmetic Hospitals In
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/cosmetic/thailand"
                                            title="Cosmetic Surgery Cost in Thailand">Cosmetic Surgery Cost in
                                            Thailand</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeCosmetic">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/cosmetic-and-plastic-surgery/united-arab-emirates"
                                            title="Best Cosmetic Surgeons in UAE">Best Cosmetic Surgeons in UAE</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/cosmetic-and-plastic-surgery/united-arab-emirates"
                                            title="Best Cosmetic Hospitals In UAE">Best Cosmetic Hospitals In UAE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalWeight-Loss" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaWeight-Loss" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyWeight-Loss"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"></span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandWeight-Loss"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"></span> Thailand</button>
                                </li>
                                <li id="li_uae"><button data-bs-toggle="pill" href="#uaeWeight-Loss"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/uae-flag.webp"
                                                alt="UAE" title="Country UAE image"></span> UAE</button> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaWeight-Loss">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/obesity-or-bariatric-surgery-0/india"
                                            title="Best Bariatric Surgeons in India">Best Bariatric Surgeons in
                                            India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/obesity-or-bariatric-surgery-0/india"
                                            title="Best Bariatric Surgery Hospitals In India">Best Bariatric Surgery
                                            Hospitals In India</a></li>
                                    <li><a href="https://www.vaidam.com/search/bariatric-surgery-for-weight-loss/india"
                                            title="Bariatric Surgery Cost in India">Bariatric Surgery Cost in India</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyWeight-Loss">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/obesity-or-bariatric-surgery-0/turkey"
                                            title="Best Bariatric Surgeons in Turkey">Best Bariatric Surgeons in
                                            Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/obesity-or-bariatric-surgery-0/turkey"
                                            title="Best Bariatric Surgery Hospitals In Turkey">Best Bariatric Surgery
                                            Hospitals In Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/search/bariatric-surgery-for-weight-loss/turkey"
                                            title="Bariatric Surgery Cost in Turkey">Bariatric Surgery Cost in
                                            Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandWeight-Loss">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/obesity-or-bariatric-surgery-0/thailand"
                                            title="Best Bariatric Surgeons in Thailand">Best Bariatric Surgeons in
                                            Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/obesity-or-bariatric-surgery-0/thailand"
                                            title="Best Bariatric Surgery Hospitals In Thailand">Best Bariatric Surgery
                                            Hospitals In Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/search/bariatric-surgery-for-weight-loss/thailand"
                                            title="Bariatric Surgery Cost in Thailand">Bariatric Surgery Cost in
                                            Thailand</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="uaeWeight-Loss">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/obesity-or-bariatric-surgery-0/united-arab-emirates"
                                            title="Best Bariatric Surgeons in UAE">Best Bariatric Surgeons in UAE</a>
                                    </li>
                                    <li><a href="https://www.vaidam.com/hospitals/obesity-or-bariatric-surgery-0/united-arab-emirates"
                                            title="Best Bariatric Surgery Hospitals In UAE">Best Bariatric Surgery
                                            Hospitals In UAE</a></li>
                                    <li><a href="https://www.vaidam.com/search/bariatric-surgery-for-weight-loss/united-arab-emirates"
                                            title="Bariatric Surgery Cost in UAE">Bariatric Surgery Cost in UAE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalLiver-Transplant" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaLiver-Transplant" class="active"><span>
                                            <img loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyLiver-Transplant"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandLiver-Transplant"><span>
                                            <img loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaLiver-Transplant">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/transplant-surgery/india"
                                            title="Best Liver Transplant Surgeons in India">Best Liver Transplant
                                            Surgeons in India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/transplant-surgery/india"
                                            title="Best Liver Transplant Hospitals In India">Best Liver Transplant
                                            Hospitals In India</a></li>
                                    <li><a href="https://www.vaidam.com/search/liver-transplant/india"
                                            title="Liver Transplant Cost in India">Liver Transplant Cost in India</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyLiver-Transplant">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/transplant-surgery/turkey"
                                            title="Best Liver Transplant Surgeons in Turkey">Best Liver Transplant
                                            Surgeons in Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/transplant-surgery/turkey"
                                            title="Best Liver Transplant Hospitals In Turkey">Best Liver Transplant
                                            Hospitals In Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandLiver-Transplant">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/transplant-surgery/thailand"
                                            title="Best Liver Transplant Surgeons in Thailand">Best Liver Transplant
                                            Surgeons in Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/transplant-surgery/thailand"
                                            title="Best Liver Transplant Hospitals In Thailand">Best Liver Transplant
                                            Hospitals In Thailand</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalKidney-transplant" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaKidney-transplant" class="active"><span>
                                            <img loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"> </span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyKidney-transplant"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"> </span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandKidney-transplant"><span>
                                            <img loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"> </span> Thailand</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaKidney-transplant">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/nephrology/kidney-transplant/india"
                                            title="Best Kidney Transplant Surgeons in India">Best Kidney Transplant
                                            Surgeons in India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/nephrology/kidney-transplant/india"
                                            title="Best Kidney Transplant Hospitals In India">Best Kidney Transplant
                                            Hospitals In India</a></li>
                                    <li><a href="https://www.vaidam.com/search/kidney-transplant/india"
                                            title="Kidney Transplant Cost in India">Kidney Transplant Cost in India</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyKidney-transplant">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/nephrology/kidney-transplant/turkey"
                                            title="Best Kidney Transplant Surgeons in Turkey">Best Kidney Transplant
                                            Surgeons in Turkey</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/nephrology/kidney-transplant/turkey"
                                            title="Best Kidney Transplant Hospitals In Turkey">Best Kidney Transplant
                                            Hospitals In Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandKidney-transplant">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/nephrology/kidney-transplant/thailand"
                                            title="Best Kidney Transplant Surgeons in Thailand">Best Kidney Transplant
                                            Surgeons in Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/nephrology/kidney-transplant/thailand"
                                            title="Best Kidney Transplant Hospitals In Thailand">Best Kidney Transplant
                                            Hospitals In Thailand</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal treatmentsModal" id="treatmentModalBMT" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-static"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                    <div class="mod-head">
                        <div class="country d-flex align-items-center my-2">
                            <ul class="nav nav-pills">
                                <li><button data-bs-toggle="pill" href="#indiaBMT" class="active"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/india-flag.webp"
                                                alt="India" title="Country India image"></span> India</button> </li>
                                <li id="li_tr"><button data-bs-toggle="pill" href="#turkeyBMT"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/turkey-flag.webp"
                                                alt="Turkey" title="Country Turkey image"></span> Turkey</button> </li>
                                <li id="li_th"><button data-bs-toggle="pill" href="#thailandBMT"><span> <img
                                                loading="lazy"
                                                src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/thailand-flag.webp"
                                                alt="Thailand" title="Country Thailand image"></span> Thailand</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntry-cnt">
                        <div class="tab-content">
                            <div class="tab-pane active" id="indiaBMT">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/hematology/bone-marrow-transplant/india"
                                            title="Best Bone Marrow Transplant Doctors in India">Best Bone Marrow
                                            Transplant Doctors in India</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/hematology/bone-marrow-transplant/india"
                                            title="Best Bone Marrow Transplant Hospitals In India">Best Bone Marrow
                                            Transplant Hospitals In India</a></li>
                                    <li><a href="https://www.vaidam.com/search/bmt-bone-marrow-transplant/india"
                                            title="Bone Marrow Transplant Cost in India">Bone Marrow Transplant Cost in
                                            India</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="turkeyBMT">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/hematology/bone-marrow-transplant/turkey"
                                            title="Best Bone Marrow Transplant Doctors in Turkey">Best Bone Marrow
                                            Transplant Doctors in Turkey</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thailandBMT">
                                <ul>
                                    <li><a href="https://www.vaidam.com/doctors/hematology/bone-marrow-transplant/thailand"
                                            title="Best Bone Marrow Transplant Doctors in Thailand">Best Bone Marrow
                                            Transplant Doctors in Thailand</a></li>
                                    <li><a href="https://www.vaidam.com/hospitals/hematology/bone-marrow-transplant/thailand"
                                            title="Best Bone Marrow Transplant Hospitals In Thailand">Best Bone Marrow
                                            Transplant Hospitals In Thailand</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Models End here -->
    <script type="text/javascript">
    $(".view-more-bx").slice(0, 2).show();
    if ($(".view-more-bx:hidden").length != 0) {
        $("#loadmorefaq").show();
    }
    $("#loadmorefaq").on("click", function(e) {
        e.preventDefault();
        if ($(".view-more-bx:hidden").length === 0) {
            window.location = "https://www.vaidam.com/knowledge-center/patient-testimonials";
        }
        if ($(".view-more-bx:hidden").length > 0) {
            $(".view-more-bx:hidden").slice(0, 2).slideDown();
        }
    });
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What is medical tourism, and why do people travel abroad for medical treatments?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Medical tourism is a global phenomenon whereby patients travel abroad looking for medical treatment. The reasons to travel vary from origin country of the patients but some common reasons are as follows: Availability of medical care - Unfortunately, many underdeveloped/ developing countries lack tertiary care centers in their country and patients dont even have an option of getting treated in their home country Better expertise abroad - A lot of patients have doctors available in their home country but unfortunately the infrastructure, latest equipments and experience of the doctors is so limited that patients don't want to risk their life and opt to travel abroad.Affordable care - Many patients (uninsured in their home country) have expertise and healthcare available but the cost is prohibitive for getting treated locally and they save a lot of money (even after adding travel and stay expenses) by traveling abroad for treatment Long waiting queue - Many Developed Countries which have public health systems which even offer quality care with best expertise for free of cost but patients may have to wait for weeks, months or sometimes years to access it. Many of these patients opt to travel and access healthcare faster.Miscellaneous - Add medical procedure with tourism, privacy of not getting treated in their home country are some of the other reasons people opt to travel abroad."
            }
        }, {
            "@type": "Question",
            "name": "What is Vaidam.com, and how does it work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Vaidam is a medical travel facilitation platform assisting patients looking for treatment abroad. Our services range from giving options of treatment to patients, helping them find the budget they can afford. Handle their travel logistics - airport transfers, hotel booking, interpreters in hospitals etc. For details on our services, please see <a href='https://www.vaidam.com/vaidam-services' target='_blank'> https://www.vaidam.com/vaidam-services</a>"
            }
        }, {
            "@type": "Question",
            "name": "How can I verify the credentials and reputation of a foreign hospital or doctor?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We encourage you to do your independent check on doctor profiles. For your ease and comfort we have captured details of doctor experience on Vaidam doctor detailed pages. Similarly, we have a lot of information available on hospital detailed pages to help our patients make informed decisions on the right place for medical treatment."
            }
        }, {
            "@type": "Question",
            "name": "How can Vaidam.com help me find the right hospital and doctor for my treatment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We encourage you to do your independent check on doctor profiles. For your ease and comfort we have captured details of doctor experience on Vaidam doctor detailed pages. Similarly, we have a lot of information available on hospital detailed pages to help our patients make informed decisions on the right place for medical treatment."
            }
        }, {
            "@type": "Question",
            "name": "What types of medical procedures and treatments are available through Vaidam.com?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We have handled cases for Cosmetics, Organ transplants, Cancer cases, Brain and spine surgery, Urology, ophthalmology, Dental, IVF, Orthopedic and joints replacements, Cardiac adult and pediatric with best possible outcomes."
            }
        }, {
            "@type": "Question",
            "name": "How do I request a cost estimate for my treatment through Vaidam.com?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Once you leave enquiry with Vaidam, we assign you a dedicated case manager who will organise everything for you thereafter - including hotel booking, airport transfers, online consultation with doctors etc. Treating doctor asks for detailed history of the patients, chronology of investigations done, treatments undertaken, current symptoms to arrive at the right line of treatment and share the expected cost of treatment."
            }
        }, {
            "@type": "Question",
            "name": "How does Vaidam.com ensure the quality and safety of the hospitals and doctors listed?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Vaidam works with reputed and accredited healthcare service providers only. You can read in detail about the doctor detailed page, or about the hospitals on the hospital detailed page. We capture their image gallery, bed capacity. locations, departments etc."
            }
        }, {
            "@type": "Question",
            "name": "Can Vaidam.com assist with travel and accommodation arrangements for my medical trip?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, we organise for airport transfers, book accomodation near the hospitals, arrange interpreters, assist our patients with money exchange, sim cards etc."
            }
        }, {
            "@type": "Question",
            "name": "Are there any language barriers, and how can I communicate effectively with medical staff abroad?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "To ensure our patients can communicate with the treating surgeon we arrange the interpreters for our patients. In some countries interpreters are available without any charge, however if you are travelling to countries such as South Korea, Germany interpreter services are chargeable."
            }
        }, {
            "@type": "Question",
            "name": "What are the visa and travel requirements for medical tourism in different countries?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Visa requirements for each country vary based on the origin country of the patient. Vaidam has created a dedicated tool for patients to check the requirements. Your case manager can also help you get all details related to your visa requirements and any medical visa invitation letter from your chosen healthcare service provider."
            }
        }, {
            "@type": "Question",
            "name": "What is the process to book a consultation with a specialist through Vaidam.com?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Once you leave enquiry with Vaidam, we assign you a dedicated case manager who will organise everything for you thereafter - including hotel booking, airport transfers, online consultation with doctors etc."
            }
        }, {
            "@type": "Question",
            "name": "Are there any fees associated with using Vaidam.com's services?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Vaidam services are complimentary for patients and patients are NOT overcharged for using Vaidam services. In fact there are high chances, we are able to get you a discounted price which you are unable to negotiate yourself from the service provider."
            }
        }, {
            "@type": "Question",
            "name": "Does Vaidam.com provide support for patients after their treatment is completed?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, our team maintains touch with patients even after they return home post treatment, We assist them with follow up consultation, medicines delivery (wherever possible), arranging conversation with local doctors of the patients, any medical reports required from the hospital where treatment was done etc."
            }
        }, {
            "@type": "Question",
            "name": "What documents are required to get a treatment plan and cost estimate from Vaidam.com?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Treating doctor asks for detailed history of the patients, chronology of investigations done, treatments undertaken, current symptoms to arrive at the right line of treatment and share the expected cost of treatment."
            }
        }, {
            "@type": "Question",
            "name": "How does Vaidam.com handle patient privacy and confidentiality?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Vaidam is NABH accredited and ISO 27001 certified to ensure highest standards in managing medical reports and ensuring confidentiality of privacy."
            }
        }, {
            "@type": "Question",
            "name": "Are there any patient success stories or testimonials available on Vaidam.com?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely, we have handled 100,000 + patient and we have 1000s of success story available at <a target='_blank' href='https://www.vaidam.com/knowledge-center/patient-testimonials'> https://www.vaidam.com/knowledge-center/patient-testimonials </a> and our youtube channel - <a href='https://www.youtube.com/vaidam' target='_blank'> https://www.youtube.com/vaidam </a>"
            }
        }, {
            "@type": "Question",
            "name": "What payment options are available for international patients using Vaidam.com?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Almost all hospitals need 100% payment before the patient is admitted for surgery. Patients can wire transfer money to the hospital before travel, pay via Visa/ MasterCard, bring cash and deposit before admission. Please Note - international wire transfer may take 3-5 working days and it is advised that patients transfer money timely to avoid wasting time once they arrive for treatment."
            }
        }, {
            "@type": "Question",
            "name": "Are there any insurance options available for medical tourists?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, there are many international insurance providers which cover international treatment as well.. Some of the common such names are Aetna, Bupa, Cigna, Axa etc."
            }
        }]
    }
    </script> <!-- 1. DEFINE THE ORGANIZATION (ONCE!) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Vaidam Health",
        "url": "https://www.vaidam.com/",
        "logo": {
            "@type": "ImageObject",
            "url": "https://www.vaidam.com/assets/vaidam_logo.svg"
        },
        "@id": "https://www.vaidam.com/#organization"
    }
    </script> <!-- 2. VIDEOOBJECT: Medical Treatment Abroad - Vaidam Health -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "VideoObject",
        "name": "Medical Treatment Abroad - Vaidam Health",
        "description": "Learn about Vaidam Health and how they help patients access quality medical treatment abroad.",
        "thumbnailUrl": "https://i.ytimg.com/vi/XZtyGhf5LJ8/maxresdefault.jpg",
        "uploadDate": "2024-10-27T00:00:00+00:00",
        "duration": "PT0M30S",
        "contentUrl": "https://youtu.be/XZtyGhf5LJ8",
        "embedUrl": "https://www.youtube.com/embed/XZtyGhf5LJ8",
        "url": "https://www.vaidam.com/",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.vaidam.com/"
        },
        "keywords": ["medical tourism", "medical travel", "healthcare abroad", "Vaidam Health"],
        "publisher": {
            "@id": "https://www.vaidam.com/#organization"
        }
    }
    </script>
    <!-- 3. VIDEOOBJECT: Happy Patient from Ethiopia I Chemotherapy and Soft Tissue Tumour Excision Treatment in India -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "VideoObject",
        "name": "Happy Patient from Ethiopia I Chemotherapy and Soft Tissue Tumour Excision Treatment in India",
        "description": "Hear from a happy patient from Ethiopia about their chemotherapy and soft tissue tumor excision treatment journey in India. Learn about their experience with Vaidam Health.",
        "thumbnailUrl": "https://i.ytimg.com/vi/dC5Gr2Ad7vo/maxresdefault.jpg",
        "uploadDate": "2024-10-27T00:00:00+00:00",
        "duration": "PT1M20S",
        "contentUrl": "https://youtu.be/dC5Gr2Ad7vo",
        "embedUrl": "https://www.youtube.com/embed/dC5Gr2Ad7vo",
        "url": "https://www.vaidam.com/",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.vaidam.com/"
        },
        "keywords": ["chemotherapy", "soft tissue tumor", "cancer treatment", "medical travel", "Ethiopia", "India",
            "Vaidam Health", "patient testimonial"
        ],
        "publisher": {
            "@id": "https://www.vaidam.com/#organization"
        }
    }
    </script> <!-- 4. VIDEOOBJECT: Happy Patient from Vanuatu | Pacemaker Implantation Treatment in India -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "VideoObject",
        "name": "Happy Patient from Vanuatu | Pacemaker Implantation Treatment in India",
        "description": "Hear from a happy patient from Vanuatu about their pacemaker implantation treatment journey in India. Learn about their experience with Vaidam Health.",
        "thumbnailUrl": "https://i.ytimg.com/vi/sxuj3GMvFCs/maxresdefault.jpg",
        "uploadDate": "2024-10-27T00:00:00+00:00",
        "duration": "PT1M11S",
        "contentUrl": "https://youtu.be/sxuj3GMvFCs",
        "embedUrl": "https://www.youtube.com/embed/sxuj3GMvFCs",
        "url": "https://www.vaidam.com/",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.vaidam.com/"
        },
        "keywords": ["pacemaker implantation", "heart treatment", "medical travel", "Vanuatu", "India", "Vaidam Health",
            "patient testimonial", "cardiology"
        ],
        "publisher": {
            "@id": "https://www.vaidam.com/#organization"
        }
    }
    </script> <!-- 5. VIDEOOBJECT: Happy Patient From Fiji | Breast Cancer -->
    
    <script type="text/javascript">
        $(document).ready(function() {
            // When page is ready, check if there is a pre-selected country
            // var urlCountry = getCookie("SetPageCountry");


            function autocomplete(inp, arr) {
                /*the autocomplete function takes two arguments, the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                if (inp) {
                    inp.addEventListener("input", function(e) {
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
                            if (arr[i]["city"].substr(0, val.length)
                            .toUpperCase() == val.toUpperCase()) {
                                /*create a DIV element for each matching element:*/
                                b = document.createElement("DIV");
                                /*make the matching letters bold:*/
                                b.innerHTML = "<strong>" + arr[i]["city"].substr(0,
                                    val.length) + "</strong>";
                                b.innerHTML += arr[i]["city"].substr(val.length);
                                /*insert a input field that will hold the current array item's value:*/
                                b.innerHTML += "<input type='hidden' value='" + arr[
                                    i]["city"] + "'>";
                                if (arr[i]["city"] != undefined) {
                                    //document.getElementById("state").value = arr[i]["state"];
                                    var stateElement = document.getElementById(
                                        "state");
                                    if (stateElement) {
                                        stateElement.value = arr[i]["state"];
                                    }
                                }
                                /*execute a function when someone clicks on the item value (DIV element):*/
                                b.addEventListener("click", function(e) {
                                    /*insert the value for the autocomplete text field:*/
                                    inp.value = this.getElementsByTagName(
                                        "input")[0].value;

                                    /*close the list of autocompleted values, (or any other open lists of autocompleted values:*/
                                    closeAllLists();
                                });
                                a.appendChild(b);
                            }
                        }
                    });
                }
                /*execute a function presses a key on the keyboard:*/
                if (inp) {
                    inp.addEventListener("keydown", function(e) {
                        var x = document.getElementById(this.id +
                            "autocomplete-list");
                        if (x) x = x.getElementsByTagName("div");
                        if (e.keyCode == 40) {
                            /*If the arrow DOWN key is pressed,increase the currentFocus variable:*/
                            currentFocus++;
                            /*and and make the current item more visible:*/
                            addActive(x);
                        } else if (e.keyCode == 38) {
                            //up
                            /*If the arrow UP key is pressed,decrease the currentFocus variable:*/
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
                    /*close all autocomplete lists in the document,except the one passed as an argument:*/
                    var x = document.getElementsByClassName("autocomplete-items");
                    for (var i = 0; i < x.length; i++) {
                        if (elmnt != x[i] && elmnt != inp) {
                            x[i].parentNode.removeChild(x[i]);
                        }
                    }
                }
                /*execute a function when someone clicks in the document:*/
                document.addEventListener("click", function(e) {
                    closeAllLists(e.target);
                });
            }

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
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
                $('#city').replaceWith(
                    '<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                    );
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
                    $('#city').replaceWith(
                        '<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                        );
                } else if (selectedCountry == "IN") {
                    $('#emirates-id-block').hide();
                    $('.stategroup').show();
                    $('#city').attr('placeholder', 'Enter city');
                    $('#city').replaceWith(
                        '<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">'
                        );
                    autocomplete(document.getElementById("city"), cities);
                } else {
                    $('#emirates-id-block').hide();
                    $('.stategroup').hide();
                }
            });

            setCountry();
            function setCountry(){
                var selectedCountry = 'IN';
                if (selectedCountry == 'AE') {
                    $('#emirates-id-block').show();
                    $('.stategroup').show();
                    $('.stategroup').removeAttr('style').show();
                    $('#city').attr('placeholder', 'Enter Emirates');
                    $('#city').replaceWith(
                        '<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                        );
                } else if (selectedCountry == "IN") {
                    $('#emirates-id-block').hide();
                    $('.stategroup').show();
                    $('#city').attr('placeholder', 'Enter city');
                    $('#city').replaceWith(
                        '<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">'
                        );
                    autocomplete(document.getElementById("city"), cities);
                } else {
                    $('#emirates-id-block').hide();
                    $('.stategroup').hide();
                }
            }
        });















        var cities = [
            {
                city: "Bombooflat",
                state: "Andaman & Nicobar Islands"
            },
            {
                city: "Garacharma",
                state: "Andaman & Nicobar Islands"
            },
            {
                city: "Port Blair",
                state: "Andaman & Nicobar Islands"
            },
            {
                city: "Along",
                state: "Arunachal Pradesh"
            },
            {
                city: "Basar",
                state: "Arunachal Pradesh"
            },
            {
                city: "Bomdila",
                state: "Arunachal Pradesh"
            },
            {
                city: "Changlang",
                state: "Arunachal Pradesh"
            },
            {
                city: "Daporijo",
                state: "Arunachal Pradesh"
            },
            {
                city: "Deomali",
                state: "Arunachal Pradesh"
            },
            {
                city: "Itanagar",
                state: "Arunachal Pradesh"
            },
            {
                city: "Jairampur",
                state: "Arunachal Pradesh"
            },
            {
                city: "Khonsa",
                state: "Arunachal Pradesh"
            },
            {
                city: "Naharlagun",
                state: "Arunachal Pradesh"
            },
            {
                city: "Namsai",
                state: "Arunachal Pradesh"
            },
            {
                city: "Pasighat",
                state: "Arunachal Pradesh"
            },
            {
                city: "Roing",
                state: "Arunachal Pradesh"
            },
            {
                city: "Seppa",
                state: "Arunachal Pradesh"
            },
            {
                city: "Tawang",
                state: "Arunachal Pradesh"
            },
            {
                city: "Tezu",
                state: "Arunachal Pradesh"
            },
            {
                city: "Ziro",
                state: "Arunachal Pradesh"
            },
            {
                city: "Abhayapuri",
                state: "Assam"
            },
            {
                city: "Ambikapur Part-X",
                state: "Assam"
            },
            {
                city: "Amguri",
                state: "Assam"
            },
            {
                city: "Anand Nagar",
                state: "Assam"
            },
            {
                city: "Badarpur",
                state: "Assam"
            },
            {
                city: "Badarpur Rly Town",
                state: "Assam"
            },
            {
                city: "Bahbari Gaon",
                state: "Assam"
            },
            {
                city: "Bamun Sualkuchi",
                state: "Assam"
            },
            {
                city: "Barbari (AMC Area)",
                state: "Assam"
            },
            {
                city: "Barpathar",
                state: "Assam"
            },
            {
                city: "Barpeta",
                state: "Assam"
            },
            {
                city: "Barpeta Road",
                state: "Assam"
            },
            {
                city: "Basugaon",
                state: "Assam"
            },
            {
                city: "Bihpuria",
                state: "Assam"
            },
            {
                city: "Bijni",
                state: "Assam"
            },
            {
                city: "Bilasipara",
                state: "Assam"
            },
            {
                city: "Biswanath Chariali",
                state: "Assam"
            },
            {
                city: "Bohari",
                state: "Assam"
            },
            {
                city: "Bokajan",
                state: "Assam"
            },
            {
                city: "Bokakhat",
                state: "Assam"
            },
            {
                city: "Bongaigaon",
                state: "Assam"
            },
            {
                city: "Borgolai Grant No.11",
                state: "Assam"
            },
            {
                city: "Chabua",
                state: "Assam"
            },
            {
                city: "Chandrapur Bagicha",
                state: "Assam"
            },
            {
                city: "Chapar",
                state: "Assam"
            },
            {
                city: "Chekonidhara",
                state: "Assam"
            },
            {
                city: "Choto Haibor",
                state: "Assam"
            },
            {
                city: "Dergaon",
                state: "Assam"
            },
            {
                city: "Dharapur",
                state: "Assam"
            },
            {
                city: "Dhekiajuli",
                state: "Assam"
            },
            {
                city: "Dhemaji",
                state: "Assam"
            },
            {
                city: "Dhing",
                state: "Assam"
            },
            {
                city: "Dhubri",
                state: "Assam"
            },
            {
                city: "Dibrugarh",
                state: "Assam"
            },
            {
                city: "Digboi",
                state: "Assam"
            },
            {
                city: "Digboi Oil Town",
                state: "Assam"
            },
            {
                city: "Dimaruguri",
                state: "Assam"
            },
            {
                city: "Diphu",
                state: "Assam"
            },
            {
                city: "Doboka",
                state: "Assam"
            },
            {
                city: "Dokmoka",
                state: "Assam"
            },
            {
                city: "Donkamokam",
                state: "Assam"
            },
            {
                city: "Doom Dooma",
                state: "Assam"
            },
            {
                city: "Duliajan No.1",
                state: "Assam"
            },
            {
                city: "Duliajan Oil Town",
                state: "Assam"
            },
            {
                city: "Durga Nagar Part-V",
                state: "Assam"
            },
            {
                city: "Gauripur",
                state: "Assam"
            },
            {
                city: "Goalpara",
                state: "Assam"
            },
            {
                city: "Gohpur",
                state: "Assam"
            },
            {
                city: "Golaghat",
                state: "Assam"
            },
            {
                city: "Golokganj",
                state: "Assam"
            },
            {
                city: "Gossaigaon",
                state: "Assam"
            },
            {
                city: "Guwahati",
                state: "Assam"
            },
            {
                city: "Haflong",
                state: "Assam"
            },
            {
                city: "Hailakandi",
                state: "Assam"
            },
            {
                city: "Hamren",
                state: "Assam"
            },
            {
                city: "Hojai",
                state: "Assam"
            },
            {
                city: "Howli",
                state: "Assam"
            },
            {
                city: "Howraghat",
                state: "Assam"
            },
            {
                city: "Jagiroad",
                state: "Assam"
            },
            {
                city: "Jonai Bazar",
                state: "Assam"
            },
            {
                city: "Jorhat",
                state: "Assam"
            },
            {
                city: "Kampur Town",
                state: "Assam"
            },
            {
                city: "Kanakpur Part-II",
                state: "Assam"
            },
            {
                city: "Karimganj",
                state: "Assam"
            },
            {
                city: "Kharijapikon",
                state: "Assam"
            },
            {
                city: "Kharupatia",
                state: "Assam"
            },
            {
                city: "Kochpara",
                state: "Assam"
            },
            {
                city: "Kokrajhar",
                state: "Assam"
            },
            {
                city: "Kumar Kaibarta Gaon",
                state: "Assam"
            },
            {
                city: "Lakhipur",
                state: "Assam"
            },
            {
                city: "Lakhipur",
                state: "Assam"
            },
            {
                city: "Lala",
                state: "Assam"
            },
            {
                city: "Lanka",
                state: "Assam"
            },
            {
                city: "Lido Tikok",
                state: "Assam"
            },
            {
                city: "Lido Town",
                state: "Assam"
            },
            {
                city: "Lumding",
                state: "Assam"
            },
            {
                city: "Lumding Rly Colony",
                state: "Assam"
            },
            {
                city: "Mahur",
                state: "Assam"
            },
            {
                city: "Maibong",
                state: "Assam"
            },
            {
                city: "Majgaon",
                state: "Assam"
            },
            {
                city: "Makum",
                state: "Assam"
            },
            {
                city: "Mangaldoi",
                state: "Assam"
            },
            {
                city: "Mankachar",
                state: "Assam"
            },
            {
                city: "Margherita",
                state: "Assam"
            },
            {
                city: "Mariani",
                state: "Assam"
            },
            {
                city: "Marigaon",
                state: "Assam"
            },
            {
                city: "Moran Town",
                state: "Assam"
            },
            {
                city: "Moranhat",
                state: "Assam"
            },
            {
                city: "Nagaon",
                state: "Assam",
                undefined: "q"
            },
            {
                city: "Naharkatiya",
                state: "Assam"
            },
            {
                city: "Nalbari",
                state: "Assam"
            },
            {
                city: "Namrup",
                state: "Assam"
            },
            {
                city: "Naubaisa Gaon",
                state: "Assam"
            },
            {
                city: "Nazira",
                state: "Assam"
            },
            {
                city: "North Guwahati",
                state: "Assam"
            },
            {
                city: "North Lakhimpur",
                state: "Assam"
            },
            {
                city: "Numaligarh Refinery Township",
                state: "Assam"
            },
            {
                city: "Palasbari",
                state: "Assam"
            },
            {
                city: "Pathsala",
                state: "Assam"
            },
            {
                city: "Rangapara",
                state: "Assam"
            },
            {
                city: "Rangia",
                state: "Assam"
            },
            {
                city: "Salakati",
                state: "Assam"
            },
            {
                city: "Sapatgram",
                state: "Assam"
            },
            {
                city: "Sarbhog",
                state: "Assam"
            },
            {
                city: "Sarthebari",
                state: "Assam"
            },
            {
                city: "Sarupathar",
                state: "Assam"
            },
            {
                city: "Sarupathar Bengali",
                state: "Assam"
            },
            {
                city: "Senchoa Gaon",
                state: "Assam"
            },
            {
                city: "Sibsagar",
                state: "Assam"
            },
            {
                city: "Silapathar",
                state: "Assam"
            },
            {
                city: "Silchar",
                state: "Assam"
            },
            {
                city: "Silchar Part-X",
                state: "Assam"
            },
            {
                city: "Sonari",
                state: "Assam"
            },
            {
                city: "Sualkuchi",
                state: "Assam"
            },
            {
                city: "Tangla",
                state: "Assam"
            },
            {
                city: "Tezpur",
                state: "Assam"
            },
            {
                city: "Tihu",
                state: "Assam"
            },
            {
                city: "Tinsukia",
                state: "Assam"
            },
            {
                city: "Titabor Town",
                state: "Assam"
            },
            {
                city: "Udalguri",
                state: "Assam"
            },
            {
                city: "Umrangso",
                state: "Assam"
            },
            {
                city: "Uttar Krishnapur Part-I",
                state: "Assam"
            },
            {
                city: "Amarpur",
                state: "Bihar"
            },
            {
                city: "Areraj",
                state: "Bihar"
            },
            {
                city: "Asarganj",
                state: "Bihar"
            },
            {
                city: "Bahadurganj",
                state: "Bihar"
            },
            {
                city: "Bairgania",
                state: "Bihar"
            },
            {
                city: "Bakhtiarpur",
                state: "Bihar"
            },
            {
                city: "Banmankhi Bazar",
                state: "Bihar"
            },
            {
                city: "Barauli",
                state: "Bihar"
            },
            {
                city: "Barauni IOC Township",
                state: "Bihar"
            },
            {
                city: "Barbigha",
                state: "Bihar"
            },
            {
                city: "Behea",
                state: "Bihar"
            },
            {
                city: "Belsand",
                state: "Bihar"
            },
            {
                city: "Araria",
                state: "Bihar"
            },
            {
                city: "Arrah",
                state: "Bihar"
            },
            {
                city: "Aurangabad",
                state: "Bihar"
            },
            {
                city: "Bagaha",
                state: "Bihar"
            },
            {
                city: "Bhagalpur (M.Corp)",
                state: "Bihar"
            },
            {
                city: "Banka",
                state: "Bihar"
            },
            {
                city: "Barahiya",
                state: "Bihar"
            },
            {
                city: "Barh",
                state: "Bihar"
            },
            {
                city: "Begusarai",
                state: "Bihar"
            },
            {
                city: "Bettiah",
                state: "Bihar"
            },
            {
                city: "Bhabua",
                state: "Bihar"
            },
            {
                city: "Bihar",
                state: "Bihar"
            },
            {
                city: "Buxar",
                state: "Bihar"
            },
            {
                city: "Chapra",
                state: "Bihar"
            },
            {
                city: "Colgong",
                state: "Bihar"
            },
            {
                city: "Daudnagar",
                state: "Bihar"
            },
            {
                city: "Dehri",
                state: "Bihar"
            },
            {
                city: "Dinapur Nizamat",
                state: "Bihar"
            },
            {
                city: "Dumraon",
                state: "Bihar"
            },
            {
                city: "Forbesganj",
                state: "Bihar"
            },
            {
                city: "Gopalganj",
                state: "Bihar"
            },
            {
                city: "Hajipur",
                state: "Bihar"
            },
            {
                city: "Jagdishpur",
                state: "Bihar"
            },
            {
                city: "Jamalpur",
                state: "Bihar"
            },
            {
                city: "Jamui",
                state: "Bihar"
            },
            {
                city: "Jehanabad",
                state: "Bihar"
            },
            {
                city: "Katihar",
                state: "Bihar"
            },
            {
                city: "Bikramganj",
                state: "Bihar"
            },
            {
                city: "Khagaria",
                state: "Bihar"
            },
            {
                city: "Khagaul",
                state: "Bihar"
            },
            {
                city: "Kishanganj",
                state: "Bihar"
            },
            {
                city: "Lakhisarai",
                state: "Bihar"
            },
            {
                city: "Lalganj",
                state: "Bihar"
            },
            {
                city: "Birpur",
                state: "Bihar"
            },
            {
                city: "Madhepura",
                state: "Bihar"
            },
            {
                city: "Madhubani",
                state: "Bihar"
            },
            {
                city: "Mahnar Bazar",
                state: "Bihar"
            },
            {
                city: "Bodh Gaya",
                state: "Bihar"
            },
            {
                city: "Mokameh",
                state: "Bihar"
            },
            {
                city: "Motihari",
                state: "Bihar"
            },
            {
                city: "Munger",
                state: "Bihar"
            },
            {
                city: "Nawada",
                state: "Bihar"
            },
            {
                city: "Purnia",
                state: "Bihar"
            },
            {
                city: "Raxaul Bazar",
                state: "Bihar"
            },
            {
                city: "Revelganj",
                state: "Bihar"
            },
            {
                city: "Rosera",
                state: "Bihar"
            },
            {
                city: "Saharsa",
                state: "Bihar"
            },
            {
                city: "Samastipur",
                state: "Bihar"
            },
            {
                city: "Sasaram",
                state: "Bihar"
            },
            {
                city: "Sheikhpura",
                state: "Bihar"
            },
            {
                city: "Sitamarhi",
                state: "Bihar"
            },
            {
                city: "Siwan",
                state: "Bihar"
            },
            {
                city: "Chakia",
                state: "Bihar"
            },
            {
                city: "Supaul",
                state: "Bihar"
            },
            {
                city: "Tekari",
                state: "Bihar"
            },
            {
                city: "Chanpatia",
                state: "Bihar"
            },
            {
                city: "Dalsinghsarai",
                state: "Bihar"
            },
            {
                city: "Darbhanga",
                state: "Bihar"
            },
            {
                city: "Dhaka",
                state: "Bihar"
            },
            {
                city: "Dighwara",
                state: "Bihar"
            },
            {
                city: "Dinapur Cantt.",
                state: "Bihar"
            },
            {
                city: "Dumra",
                state: "Bihar"
            },
            {
                city: "Fatwah",
                state: "Bihar"
            },
            {
                city: "Gaya",
                state: "Bihar"
            },
            {
                city: "Ghoghardiha",
                state: "Bihar"
            },
            {
                city: "Gogri Jamalpur",
                state: "Bihar"
            },
            {
                city: "Habibpur",
                state: "Bihar"
            },
            {
                city: "Hilsa",
                state: "Bihar"
            },
            {
                city: "Hisua",
                state: "Bihar"
            },
            {
                city: "Islampur",
                state: "Bihar"
            },
            {
                city: "Jainagar",
                state: "Bihar"
            },
            {
                city: "Jamhaur",
                state: "Bihar"
            },
            {
                city: "Janakpur Road",
                state: "Bihar"
            },
            {
                city: "Jhajha",
                state: "Bihar"
            },
            {
                city: "Jhanjharpur",
                state: "Bihar"
            },
            {
                city: "Jogbani",
                state: "Bihar"
            },
            {
                city: "Kanti",
                state: "Bihar"
            },
            {
                city: "Kasba",
                state: "Bihar"
            },
            {
                city: "Kataiya",
                state: "Bihar"
            },
            {
                city: "Kharagpur",
                state: "Bihar"
            },
            {
                city: "Khusrupur",
                state: "Bihar"
            },
            {
                city: "Koath",
                state: "Bihar"
            },
            {
                city: "Koilwar",
                state: "Bihar"
            },
            {
                city: "Lauthaha",
                state: "Bihar"
            },
            {
                city: "Maharajganj",
                state: "Bihar"
            },
            {
                city: "Mairwa",
                state: "Bihar"
            },
            {
                city: "Makhdumpur",
                state: "Bihar"
            },
            {
                city: "Maner",
                state: "Bihar"
            },
            {
                city: "Manihari",
                state: "Bihar"
            },
            {
                city: "Marhaura",
                state: "Bihar"
            },
            {
                city: "Masaurhi",
                state: "Bihar"
            },
            {
                city: "Mirganj",
                state: "Bihar"
            },
            {
                city: "Mohiuddinagar",
                state: "Bihar"
            },
            {
                city: "Motipur",
                state: "Bihar"
            },
            {
                city: "Murliganj",
                state: "Bihar"
            },
            {
                city: "Muzaffarpur",
                state: "Bihar"
            },
            {
                city: "Nabinagar",
                state: "Bihar"
            },
            {
                city: "Narkatiaganj",
                state: "Bihar"
            },
            {
                city: "Naugachhia",
                state: "Bihar"
            },
            {
                city: "Nirmali",
                state: "Bihar"
            },
            {
                city: "Nokha",
                state: "Bihar"
            },
            {
                city: "Paharpur",
                state: "Bihar"
            },
            {
                city: "Patna",
                state: "Bihar"
            },
            {
                city: "Phulwari Sharif",
                state: "Bihar"
            },
            {
                city: "Piro",
                state: "Bihar"
            },
            {
                city: "Rafiganj",
                state: "Bihar"
            },
            {
                city: "Raghunathpur",
                state: "Bihar"
            },
            {
                city: "Rajgir",
                state: "Bihar"
            },
            {
                city: "Ramnagar",
                state: "Bihar"
            },
            {
                city: "Shahpur",
                state: "Bihar"
            },
            {
                city: "Sheohar",
                state: "Bihar"
            },
            {
                city: "Sherghati",
                state: "Bihar"
            },
            {
                city: "Silao",
                state: "Bihar"
            },
            {
                city: "Sonepur",
                state: "Bihar"
            },
            {
                city: "Sugauli",
                state: "Bihar"
            },
            {
                city: "Sultanganj",
                state: "Bihar"
            },
            {
                city: "Thakurganj",
                state: "Bihar"
            },
            {
                city: "Warisaliganj",
                state: "Bihar"
            },
            {
                city: "Chandigarh",
                state: "Chandigarh"
            },
            {
                city: "Ahiwara",
                state: "Chhattisgarh"
            },
            {
                city: "Akaltara",
                state: "Chhattisgarh"
            },
            {
                city: "Ambagarh Chowki",
                state: "Chhattisgarh"
            },
            {
                city: "Ambikapur",
                state: "Chhattisgarh"
            },
            {
                city: "Arang",
                state: "Chhattisgarh"
            },
            {
                city: "Bade Bacheli",
                state: "Chhattisgarh"
            },
            {
                city: "Bagbahara",
                state: "Chhattisgarh"
            },
            {
                city: "Baikunthpur",
                state: "Chhattisgarh"
            },
            {
                city: "Balod",
                state: "Chhattisgarh"
            },
            {
                city: "Baloda",
                state: "Chhattisgarh"
            },
            {
                city: "Baloda Bazar",
                state: "Chhattisgarh"
            },
            {
                city: "Banarsi",
                state: "Chhattisgarh"
            },
            {
                city: "Basna",
                state: "Chhattisgarh"
            },
            {
                city: "Bemetra",
                state: "Chhattisgarh"
            },
            {
                city: "Bhanpuri",
                state: "Chhattisgarh"
            },
            {
                city: "Bhatgaon",
                state: "Chhattisgarh"
            },
            {
                city: "Bhilai Nagar",
                state: "Chhattisgarh"
            },
            {
                city: "Bilaspur",
                state: "Chhattisgarh"
            },
            {
                city: "Bilha",
                state: "Chhattisgarh"
            },
            {
                city: "Birgaon",
                state: "Chhattisgarh"
            },
            {
                city: "Bodri",
                state: "Chhattisgarh"
            },
            {
                city: "Bhatapara",
                state: "Chhattisgarh"
            },
            {
                city: "Bhilai Charoda",
                state: "Chhattisgarh"
            },
            {
                city: "Champa",
                state: "Chhattisgarh"
            },
            {
                city: "Chirmiri",
                state: "Chhattisgarh"
            },
            {
                city: "Dalli-Rajhara",
                state: "Chhattisgarh"
            },
            {
                city: "Dhamtari",
                state: "Chhattisgarh"
            },
            {
                city: "Dongragarh",
                state: "Chhattisgarh"
            },
            {
                city: "Gobranawapara",
                state: "Chhattisgarh"
            },
            {
                city: "Jagdalpur",
                state: "Chhattisgarh"
            },
            {
                city: "Kanker",
                state: "Chhattisgarh"
            },
            {
                city: "Kawardha",
                state: "Chhattisgarh"
            },
            {
                city: "Kirandul",
                state: "Chhattisgarh"
            },
            {
                city: "Kondagaon",
                state: "Chhattisgarh"
            },
            {
                city: "Mahasamund",
                state: "Chhattisgarh"
            },
            {
                city: "Manendragarh",
                state: "Chhattisgarh"
            },
            {
                city: "Mungeli",
                state: "Chhattisgarh"
            },
            {
                city: "Naila Janjgir",
                state: "Chhattisgarh"
            },
            {
                city: "Raigarh",
                state: "Chhattisgarh"
            },
            {
                city: "Tilda Newra",
                state: "Chhattisgarh"
            },
            {
                city: "Chharchha",
                state: "Chhattisgarh"
            },
            {
                city: "Chhuikhadan",
                state: "Chhattisgarh"
            },
            {
                city: "Dantewada",
                state: "Chhattisgarh"
            },
            {
                city: "Deori",
                state: "Chhattisgarh"
            },
            {
                city: "Dhamdha",
                state: "Chhattisgarh"
            },
            {
                city: "Dharamjaigarh",
                state: "Chhattisgarh"
            },
            {
                city: "Dipka",
                state: "Chhattisgarh"
            },
            {
                city: "Dongargaon",
                state: "Chhattisgarh"
            },
            {
                city: "Durg",
                state: "Chhattisgarh"
            },
            {
                city: "Frezarpur",
                state: "Chhattisgarh"
            },
            {
                city: "Gandai",
                state: "Chhattisgarh"
            },
            {
                city: "Gaurella",
                state: "Chhattisgarh"
            },
            {
                city: "Geedam",
                state: "Chhattisgarh"
            },
            {
                city: "Gharghoda",
                state: "Chhattisgarh"
            },
            {
                city: "Gogaon",
                state: "Chhattisgarh"
            },
            {
                city: "Hatkachora",
                state: "Chhattisgarh"
            },
            {
                city: "Jamul",
                state: "Chhattisgarh"
            },
            {
                city: "Jashpur nagar",
                state: "Chhattisgarh"
            },
            {
                city: "Jhagrakhand",
                state: "Chhattisgarh"
            },
            {
                city: "Katghora",
                state: "Chhattisgarh"
            },
            {
                city: "Khairagarh",
                state: "Chhattisgarh"
            },
            {
                city: "Khamhria",
                state: "Chhattisgarh"
            },
            {
                city: "Kharod",
                state: "Chhattisgarh"
            },
            {
                city: "Kharsia",
                state: "Chhattisgarh"
            },
            {
                city: "Khongapani",
                state: "Chhattisgarh"
            },
            {
                city: "Korba",
                state: "Chhattisgarh"
            },
            {
                city: "Kota",
                state: "Chhattisgarh"
            },
            {
                city: "Kumhari",
                state: "Chhattisgarh"
            },
            {
                city: "Kurud",
                state: "Chhattisgarh"
            },
            {
                city: "Lingiyadih",
                state: "Chhattisgarh"
            },
            {
                city: "Lormi",
                state: "Chhattisgarh"
            },
            {
                city: "Mehmand",
                state: "Chhattisgarh"
            },
            {
                city: "Mowa",
                state: "Chhattisgarh"
            },
            {
                city: "Namna Kalan",
                state: "Chhattisgarh"
            },
            {
                city: "Naya Baradwar",
                state: "Chhattisgarh"
            },
            {
                city: "Pandariya",
                state: "Chhattisgarh"
            },
            {
                city: "Patan",
                state: "Chhattisgarh"
            },
            {
                city: "Pathalgaon",
                state: "Chhattisgarh"
            },
            {
                city: "Pendra",
                state: "Chhattisgarh"
            },
            {
                city: "Phunderdihari",
                state: "Chhattisgarh"
            },
            {
                city: "Pithora",
                state: "Chhattisgarh"
            },
            {
                city: "Raipur",
                state: "Chhattisgarh"
            },
            {
                city: "Rajgamar",
                state: "Chhattisgarh"
            },
            {
                city: "Rajnandgaon",
                state: "Chhattisgarh"
            },
            {
                city: "Ramanujganj",
                state: "Chhattisgarh"
            },
            {
                city: "Ratanpur",
                state: "Chhattisgarh"
            },
            {
                city: "Sakti",
                state: "Chhattisgarh"
            },
            {
                city: "Saraipali",
                state: "Chhattisgarh"
            },
            {
                city: "Sarangarh",
                state: "Chhattisgarh"
            },
            {
                city: "Shivrinarayan",
                state: "Chhattisgarh"
            },
            {
                city: "Simga",
                state: "Chhattisgarh"
            },
            {
                city: "Sirgiti",
                state: "Chhattisgarh"
            },
            {
                city: "Surajpur",
                state: "Chhattisgarh"
            },
            {
                city: "Takhatpur",
                state: "Chhattisgarh"
            },
            {
                city: "Telgaon",
                state: "Chhattisgarh"
            },
            {
                city: "Urla",
                state: "Chhattisgarh"
            },
            {
                city: "Vishrampur",
                state: "Chhattisgarh"
            },
            {
                city: "Amli",
                state: "Dadra & Nagar Haveli"
            },
            {
                city: "Silvassa",
                state: "Dadra & Nagar Haveli"
            },
            {
                city: "Daman",
                state: "Daman & Diu"
            },
            {
                city: "Diu",
                state: "Daman & Diu"
            },
            {
                city: "Ali Pur",
                state: "Delhi"
            },
            {
                city: "Asola",
                state: "Delhi"
            },
            {
                city: "Babar Pur",
                state: "Delhi"
            },
            {
                city: "Bankner",
                state: "Delhi"
            },
            {
                city: "Bawana",
                state: "Delhi"
            },
            {
                city: "Begum Pur",
                state: "Delhi"
            },
            {
                city: "Bhalswa Jahangir Pur",
                state: "Delhi"
            },
            {
                city: "Bhati",
                state: "Delhi"
            },
            {
                city: "Burari",
                state: "Delhi"
            },
            {
                city: "Chhawla",
                state: "Delhi"
            },
            {
                city: "Chilla Saroda Bangar",
                state: "Delhi"
            },
            {
                city: "Dallo Pura",
                state: "Delhi"
            },
            {
                city: "Dayal Pur",
                state: "Delhi"
            },
            {
                city: "Delhi",
                state: "Delhi"
            },
            {
                city: "New Delhi",
                state: "Delhi"
            },
            {
                city: "Deoli",
                state: "Delhi"
            },
            {
                city: "Gharoli",
                state: "Delhi"
            },
            {
                city: "Gheora",
                state: "Delhi"
            },
            {
                city: "Ghitorni",
                state: "Delhi"
            },
            {
                city: "Ghoga",
                state: "Delhi"
            },
            {
                city: "Gokal Pur",
                state: "Delhi"
            },
            {
                city: "Hastsal",
                state: "Delhi"
            },
            {
                city: "Jaffrabad",
                state: "Delhi"
            },
            {
                city: "Jharoda Majra Burari",
                state: "Delhi"
            },
            {
                city: "Jiwan Pur alias Johri Pur",
                state: "Delhi"
            },
            {
                city: "Jona Pur",
                state: "Delhi"
            },
            {
                city: "Kanjhawala",
                state: "Delhi"
            },
            {
                city: "Kapas Hera",
                state: "Delhi"
            },
            {
                city: "Karawal Nagar",
                state: "Delhi"
            },
            {
                city: "Khajoori Khas",
                state: "Delhi"
            },
            {
                city: "Khera Khurd",
                state: "Delhi"
            },
            {
                city: "Kirari Suleman Nagar",
                state: "Delhi"
            },
            {
                city: "Kondli",
                state: "Delhi"
            },
            {
                city: "Libas Pur",
                state: "Delhi"
            },
            {
                city: "Mirpur Turk",
                state: "Delhi"
            },
            {
                city: "Mithe Pur",
                state: "Delhi"
            },
            {
                city: "Molar Band",
                state: "Delhi"
            },
            {
                city: "Mundka",
                state: "Delhi"
            },
            {
                city: "Mustafabad",
                state: "Delhi"
            },
            {
                city: "Nangal Dewat",
                state: "Delhi"
            },
            {
                city: "Nangal Thakran",
                state: "Delhi"
            },
            {
                city: "Nangloi Jat",
                state: "Delhi"
            },
            {
                city: "Pehlad Pur Bangar",
                state: "Delhi"
            },
            {
                city: "Pooth Kalan",
                state: "Delhi"
            },
            {
                city: "Pooth Khurd",
                state: "Delhi"
            },
            {
                city: "Pul Pehlad",
                state: "Delhi"
            },
            {
                city: "Quammruddin Nagar",
                state: "Delhi"
            },
            {
                city: "Rajokri",
                state: "Delhi"
            },
            {
                city: "Roshan Pura alias Dichaon Khurd",
                state: "Delhi"
            },
            {
                city: "Sadat Pur Gujran",
                state: "Delhi"
            },
            {
                city: "Sahibabad Daulat Pur",
                state: "Delhi"
            },
            {
                city: "Saidul Ajaib",
                state: "Delhi"
            },
            {
                city: "Sambhalka",
                state: "Delhi"
            },
            {
                city: "Sanoth",
                state: "Delhi"
            },
            {
                city: "Siras Pur",
                state: "Delhi"
            },
            {
                city: "Sultan Pur",
                state: "Delhi"
            },
            {
                city: "Sultan Pur Majra",
                state: "Delhi"
            },
            {
                city: "Taj Pul",
                state: "Delhi"
            },
            {
                city: "Tigri",
                state: "Delhi"
            },
            {
                city: "Ziauddin Pur",
                state: "Delhi"
            },
            {
                city: "Aldona",
                state: "Goa"
            },
            {
                city: "Aquem",
                state: "Goa"
            },
            {
                city: "Bambolim",
                state: "Goa"
            },
            {
                city: "Bandora",
                state: "Goa"
            },
            {
                city: "Benaulim",
                state: "Goa"
            },
            {
                city: "Bicholim",
                state: "Goa"
            },
            {
                city: "Calangute",
                state: "Goa"
            },
            {
                city: "Calapor",
                state: "Goa"
            },
            {
                city: "Canacona",
                state: "Goa"
            },
            {
                city: "Candolim",
                state: "Goa"
            },
            {
                city: "Carapur",
                state: "Goa"
            },
            {
                city: "Chicalim",
                state: "Goa"
            },
            {
                city: "Chimbel",
                state: "Goa"
            },
            {
                city: "Chinchinim",
                state: "Goa"
            },
            {
                city: "Colvale",
                state: "Goa"
            },
            {
                city: "Cuncolim",
                state: "Goa"
            },
            {
                city: "Curchorem Cacora",
                state: "Goa"
            },
            {
                city: "Curti",
                state: "Goa"
            },
            {
                city: "Davorlim",
                state: "Goa"
            },
            {
                city: "Goa Velha",
                state: "Goa"
            },
            {
                city: "Guirim",
                state: "Goa"
            },
            {
                city: "Mapusa",
                state: "Goa"
            },
            {
                city: "Margao",
                state: "Goa"
            },
            {
                city: "Mormugao",
                state: "Goa"
            },
            {
                city: "Navelim",
                state: "Goa"
            },
            {
                city: "Pale",
                state: "Goa"
            },
            {
                city: "Panaji",
                state: "Goa"
            },
            {
                city: "Parcem",
                state: "Goa"
            },
            {
                city: "Penha-de-Franca",
                state: "Goa"
            },
            {
                city: "Pernem",
                state: "Goa"
            },
            {
                city: "Ponda",
                state: "Goa"
            },
            {
                city: "Quepem",
                state: "Goa"
            },
            {
                city: "Queula",
                state: "Goa"
            },
            {
                city: "Reis Magos",
                state: "Goa"
            },
            {
                city: "Saligao",
                state: "Goa"
            },
            {
                city: "Sancoale",
                state: "Goa"
            },
            {
                city: "Sanguem",
                state: "Goa"
            },
            {
                city: "Sanquelim",
                state: "Goa"
            },
            {
                city: "Sanvordem",
                state: "Goa"
            },
            {
                city: "Sao Jose-de-Areal",
                state: "Goa"
            },
            {
                city: "Siolim",
                state: "Goa"
            },
            {
                city: "Socorro (Serula)",
                state: "Goa"
            },
            {
                city: "Valpoi",
                state: "Goa"
            },
            {
                city: "Varca",
                state: "Goa"
            },
            {
                city: "Aadityana",
                state: "Gujarat"
            },
            {
                city: "Aambaliyasan",
                state: "Gujarat"
            },
            {
                city: "Aantaliya",
                state: "Gujarat"
            },
            {
                city: "Aarambhada",
                state: "Gujarat"
            },
            {
                city: "Abrama",
                state: "Gujarat"
            },
            {
                city: "Adalaj",
                state: "Gujarat"
            },
            {
                city: "Ahmedabad",
                state: "Gujarat"
            },
            {
                city: "Ahmedabad Cantonment",
                state: "Gujarat"
            },
            {
                city: "Alang",
                state: "Gujarat"
            },
            {
                city: "Ambaji",
                state: "Gujarat"
            },
            {
                city: "Andada",
                state: "Gujarat"
            },
            {
                city: "Anklesvar INA",
                state: "Gujarat"
            },
            {
                city: "Atul",
                state: "Gujarat"
            },
            {
                city: "Bajva",
                state: "Gujarat"
            },
            {
                city: "Bedi",
                state: "Gujarat"
            },
            {
                city: "Bharuch INA",
                state: "Gujarat"
            },
            {
                city: "Bhavnagar",
                state: "Gujarat"
            },
            {
                city: "Bodeli",
                state: "Gujarat"
            },
            {
                city: "Bopal",
                state: "Gujarat"
            },
            {
                city: "Chala",
                state: "Gujarat"
            },
            {
                city: "Chalthan",
                state: "Gujarat"
            },
            {
                city: "Chanod",
                state: "Gujarat"
            },
            {
                city: "Amreli",
                state: "Gujarat"
            },
            {
                city: "Chhaprabhatha",
                state: "Gujarat"
            },
            {
                city: "Anand",
                state: "Gujarat"
            },
            {
                city: "Chhatral INA",
                state: "Gujarat"
            },
            {
                city: "Anjar",
                state: "Gujarat"
            },
            {
                city: "Anklav",
                state: "Gujarat"
            },
            {
                city: "Anklesvar",
                state: "Gujarat"
            },
            {
                city: "Bagasara",
                state: "Gujarat"
            },
            {
                city: "Balasinor",
                state: "Gujarat"
            },
            {
                city: "Chikhli",
                state: "Gujarat"
            },
            {
                city: "Bantwa",
                state: "Gujarat"
            },
            {
                city: "Chiloda(Naroda)",
                state: "Gujarat"
            },
            {
                city: "Bardoli",
                state: "Gujarat"
            },
            {
                city: "Bavla",
                state: "Gujarat"
            },
            {
                city: "Bhachau",
                state: "Gujarat"
            },
            {
                city: "Bhanvad",
                state: "Gujarat"
            },
            {
                city: "Bharuch",
                state: "Gujarat"
            },
            {
                city: "Bhayavadar",
                state: "Gujarat"
            },
            {
                city: "Bhuj",
                state: "Gujarat"
            },
            {
                city: "Bilimora",
                state: "Gujarat"
            },
            {
                city: "Boriavi",
                state: "Gujarat"
            },
            {
                city: "Borsad",
                state: "Gujarat"
            },
            {
                city: "Botad",
                state: "Gujarat"
            },
            {
                city: "Chaklasi",
                state: "Gujarat"
            },
            {
                city: "Chalala",
                state: "Gujarat"
            },
            {
                city: "Chanasma",
                state: "Gujarat"
            },
            {
                city: "Chandkheda",
                state: "Gujarat"
            },
            {
                city: "Chandlodiya",
                state: "Gujarat"
            },
            {
                city: "Chhaya",
                state: "Gujarat"
            },
            {
                city: "Chhota Udaipur",
                state: "Gujarat"
            },
            {
                city: "Chorvad",
                state: "Gujarat"
            },
            {
                city: "Dabhoi",
                state: "Gujarat"
            },
            {
                city: "Dahegam",
                state: "Gujarat"
            },
            {
                city: "Dakor",
                state: "Gujarat"
            },
            {
                city: "Deesa",
                state: "Gujarat"
            },
            {
                city: "Damnagar",
                state: "Gujarat"
            },
            {
                city: "Devgadbaria",
                state: "Gujarat"
            },
            {
                city: "Dhandhuka",
                state: "Gujarat"
            },
            {
                city: "Dhanera",
                state: "Gujarat"
            },
            {
                city: "Dharampur",
                state: "Gujarat"
            },
            {
                city: "Dholka",
                state: "Gujarat"
            },
            {
                city: "Dhoraji",
                state: "Gujarat"
            },
            {
                city: "Dhrangadhra",
                state: "Gujarat"
            },
            {
                city: "Dhrol",
                state: "Gujarat"
            },
            {
                city: "Dohad",
                state: "Gujarat"
            },
            {
                city: "Dwarka",
                state: "Gujarat"
            },
            {
                city: "Gadhada",
                state: "Gujarat"
            },
            {
                city: "Gandhidham",
                state: "Gujarat"
            },
            {
                city: "Gariadhar",
                state: "Gujarat"
            },
            {
                city: "Ghatlodiya",
                state: "Gujarat"
            },
            {
                city: "Godhra",
                state: "Gujarat"
            },
            {
                city: "Gondal",
                state: "Gujarat"
            },
            {
                city: "Devsar",
                state: "Gujarat"
            },
            {
                city: "Halol",
                state: "Gujarat"
            },
            {
                city: "Halvad",
                state: "Gujarat"
            },
            {
                city: "Harij",
                state: "Gujarat"
            },
            {
                city: "Himatnagar",
                state: "Gujarat"
            },
            {
                city: "Idar",
                state: "Gujarat"
            },
            {
                city: "Jafrabad",
                state: "Gujarat"
            },
            {
                city: "Jam Jodhpur",
                state: "Gujarat"
            },
            {
                city: "Jambusar",
                state: "Gujarat"
            },
            {
                city: "Jasdan",
                state: "Gujarat"
            },
            {
                city: "Jetpur Navagadh",
                state: "Gujarat"
            },
            {
                city: "Jodhpur",
                state: "Gujarat"
            },
            {
                city: "Joshipura",
                state: "Gujarat"
            },
            {
                city: "Dhola",
                state: "Gujarat"
            },
            {
                city: "Junagadh",
                state: "Gujarat"
            },
            {
                city: "Kadi",
                state: "Gujarat"
            },
            {
                city: "Kalavad",
                state: "Gujarat"
            },
            {
                city: "Kali",
                state: "Gujarat"
            },
            {
                city: "Kalol",
                state: "Gujarat"
            },
            {
                city: "Kalol",
                state: "Gujarat"
            },
            {
                city: "Kapadvanj",
                state: "Gujarat"
            },
            {
                city: "Digvijaygram",
                state: "Gujarat"
            },
            {
                city: "Karamsad",
                state: "Gujarat"
            },
            {
                city: "Karjan",
                state: "Gujarat"
            },
            {
                city: "Keshod",
                state: "Gujarat"
            },
            {
                city: "Khambhalia",
                state: "Gujarat"
            },
            {
                city: "Khambhat",
                state: "Gujarat"
            },
            {
                city: "Kheda",
                state: "Gujarat"
            },
            {
                city: "Khedbrahma",
                state: "Gujarat"
            },
            {
                city: "Kheralu",
                state: "Gujarat"
            },
            {
                city: "Kodinar",
                state: "Gujarat"
            },
            {
                city: "Kutiyana",
                state: "Gujarat"
            },
            {
                city: "Lathi",
                state: "Gujarat"
            },
            {
                city: "Limbdi",
                state: "Gujarat"
            },
            {
                city: "Dungra",
                state: "Gujarat"
            },
            {
                city: "Lunawada",
                state: "Gujarat"
            },
            {
                city: "Mahemdavad",
                state: "Gujarat"
            },
            {
                city: "Mahesana",
                state: "Gujarat"
            },
            {
                city: "Mahudha",
                state: "Gujarat"
            },
            {
                city: "Mahuva",
                state: "Gujarat"
            },
            {
                city: "Manavadar",
                state: "Gujarat"
            },
            {
                city: "Mandvi",
                state: "Gujarat"
            },
            {
                city: "Mangrol",
                state: "Gujarat"
            },
            {
                city: "Mansa",
                state: "Gujarat"
            },
            {
                city: "Freelandgunj",
                state: "Gujarat"
            },
            {
                city: "Memnagar",
                state: "Gujarat"
            },
            {
                city: "Modasa",
                state: "Gujarat"
            },
            {
                city: "Morvi",
                state: "Gujarat"
            },
            {
                city: "Nadiad",
                state: "Gujarat"
            },
            {
                city: "NavagamGhed",
                state: "Gujarat"
            },
            {
                city: "Gandevi",
                state: "Gujarat"
            },
            {
                city: "Navsari",
                state: "Gujarat"
            },
            {
                city: "Gandhinagar",
                state: "Gujarat"
            },
            {
                city: "Ode",
                state: "Gujarat"
            },
            {
                city: "Padra",
                state: "Gujarat"
            },
            {
                city: "Palanpur",
                state: "Gujarat"
            },
            {
                city: "Palitana",
                state: "Gujarat"
            },
            {
                city: "Pardi",
                state: "Gujarat"
            },
            {
                city: "Patan",
                state: "Gujarat"
            },
            {
                city: "Petlad",
                state: "Gujarat"
            },
            {
                city: "Porbandar",
                state: "Gujarat"
            },
            {
                city: "Prantij",
                state: "Gujarat"
            },
            {
                city: "Radhanpur",
                state: "Gujarat"
            },
            {
                city: "Ghogha",
                state: "Gujarat"
            },
            {
                city: "Rajpipla",
                state: "Gujarat"
            },
            {
                city: "Rajula",
                state: "Gujarat"
            },
            {
                city: "Ramol",
                state: "Gujarat"
            },
            {
                city: "Ranavav",
                state: "Gujarat"
            },
            {
                city: "Ranip",
                state: "Gujarat"
            },
            {
                city: "Rapar",
                state: "Gujarat"
            },
            {
                city: "Salaya",
                state: "Gujarat"
            },
            {
                city: "Sanand",
                state: "Gujarat"
            },
            {
                city: "Santrampur",
                state: "Gujarat"
            },
            {
                city: "Gota",
                state: "Gujarat"
            },
            {
                city: "GSFC Complex INA",
                state: "Gujarat"
            },
            {
                city: "Sarkhej-Okaf",
                state: "Gujarat"
            },
            {
                city: "Savarkundla",
                state: "Gujarat"
            },
            {
                city: "Sidhpur",
                state: "Gujarat"
            },
            {
                city: "Sihor",
                state: "Gujarat"
            },
            {
                city: "Songadh",
                state: "Gujarat"
            },
            {
                city: "Surendranagar Dudhrej",
                state: "Gujarat"
            },
            {
                city: "Talaja",
                state: "Gujarat"
            },
            {
                city: "Talod",
                state: "Gujarat"
            },
            {
                city: "Thangadh",
                state: "Gujarat"
            },
            {
                city: "Tharad",
                state: "Gujarat"
            },
            {
                city: "Umreth",
                state: "Gujarat"
            },
            {
                city: "Hajira INA",
                state: "Gujarat"
            },
            {
                city: "Una",
                state: "Gujarat"
            },
            {
                city: "Unjha",
                state: "Gujarat"
            },
            {
                city: "Upleta",
                state: "Gujarat"
            },
            {
                city: "Vadnagar",
                state: "Gujarat"
            },
            {
                city: "Vallabh Vidhyanagar",
                state: "Gujarat"
            },
            {
                city: "Valsad",
                state: "Gujarat"
            },
            {
                city: "Vanthali",
                state: "Gujarat"
            },
            {
                city: "Vapi",
                state: "Gujarat"
            },
            {
                city: "Vastral",
                state: "Gujarat"
            },
            {
                city: "Vejalpur",
                state: "Gujarat"
            },
            {
                city: "Veraval",
                state: "Gujarat"
            },
            {
                city: "Vijalpor",
                state: "Gujarat"
            },
            {
                city: "Vijapur",
                state: "Gujarat"
            },
            {
                city: "Viramgam",
                state: "Gujarat"
            },
            {
                city: "Visavadar",
                state: "Gujarat"
            },
            {
                city: "Visnagar",
                state: "Gujarat"
            },
            {
                city: "Vyara",
                state: "Gujarat"
            },
            {
                city: "Ichchhapor",
                state: "Gujarat"
            },
            {
                city: "Wadhwan",
                state: "Gujarat"
            },
            {
                city: "Wankaner",
                state: "Gujarat"
            },
            {
                city: "Zalod",
                state: "Gujarat"
            },
            {
                city: "Jalalpore",
                state: "Gujarat"
            },
            {
                city: "Jamnagar",
                state: "Gujarat"
            },
            {
                city: "Jawaharnagar (Gujarat Refinery)",
                state: "Gujarat"
            },
            {
                city: "Kadodara",
                state: "Gujarat"
            },
            {
                city: "Kalol INA",
                state: "Gujarat"
            },
            {
                city: "Kalol INA",
                state: "Gujarat"
            },
            {
                city: "Kandla",
                state: "Gujarat"
            },
            {
                city: "Kanodar",
                state: "Gujarat"
            },
            {
                city: "Karachiya",
                state: "Gujarat"
            },
            {
                city: "Katpar",
                state: "Gujarat"
            },
            {
                city: "Kevadiya",
                state: "Gujarat"
            },
            {
                city: "Kharaghoda",
                state: "Gujarat"
            },
            {
                city: "Kosamba",
                state: "Gujarat"
            },
            {
                city: "Lambha",
                state: "Gujarat"
            },
            {
                city: "Limla",
                state: "Gujarat"
            },
            {
                city: "Mahuvar",
                state: "Gujarat"
            },
            {
                city: "Makarba",
                state: "Gujarat"
            },
            {
                city: "Maktampur",
                state: "Gujarat"
            },
            {
                city: "Malpur",
                state: "Gujarat"
            },
            {
                city: "Meghraj",
                state: "Gujarat"
            },
            {
                city: "Mithapur",
                state: "Gujarat"
            },
            {
                city: "Mogravadi",
                state: "Gujarat"
            },
            {
                city: "Motera",
                state: "Gujarat"
            },
            {
                city: "Mundra",
                state: "Gujarat"
            },
            {
                city: "Nanakvada",
                state: "Gujarat"
            },
            {
                city: "Nandej",
                state: "Gujarat"
            },
            {
                city: "Nandesari",
                state: "Gujarat"
            },
            {
                city: "Nandesari INA",
                state: "Gujarat"
            },
            {
                city: "Okha port",
                state: "Gujarat"
            },
            {
                city: "Paddhari",
                state: "Gujarat"
            },
            {
                city: "Palej",
                state: "Gujarat"
            },
            {
                city: "Parnera",
                state: "Gujarat"
            },
            {
                city: "Parvat",
                state: "Gujarat"
            },
            {
                city: "Rajkot",
                state: "Gujarat"
            },
            {
                city: "Ranoli",
                state: "Gujarat"
            },
            {
                city: "Sachin",
                state: "Gujarat"
            },
            {
                city: "Sachin INA",
                state: "Gujarat"
            },
            {
                city: "Sarigam INA",
                state: "Gujarat"
            },
            {
                city: "Sayan",
                state: "Gujarat"
            },
            {
                city: "Sikka",
                state: "Gujarat"
            },
            {
                city: "Singarva",
                state: "Gujarat"
            },
            {
                city: "Surajkaradi",
                state: "Gujarat"
            },
            {
                city: "Surat",
                state: "Gujarat"
            },
            {
                city: "Tarsali",
                state: "Gujarat"
            },
            {
                city: "Thaltej",
                state: "Gujarat"
            },
            {
                city: "Ukai",
                state: "Gujarat"
            },
            {
                city: "Umbergaon",
                state: "Gujarat"
            },
            {
                city: "Umbergaon INA",
                state: "Gujarat"
            },
            {
                city: "Un",
                state: "Gujarat"
            },
            {
                city: "Utran",
                state: "Gujarat"
            },
            {
                city: "Vadia",
                state: "Gujarat"
            },
            {
                city: "Vadodara",
                state: "Gujarat"
            },
            {
                city: "Vaghodia INA",
                state: "Gujarat"
            },
            {
                city: "Valsad INA",
                state: "Gujarat"
            },
            {
                city: "Vapi INA",
                state: "Gujarat"
            },
            {
                city: "Vartej",
                state: "Gujarat"
            },
            {
                city: "Vasna Borsad INA",
                state: "Gujarat"
            },
            {
                city: "Vastrapur",
                state: "Gujarat"
            },
            {
                city: "Vitthal Udyognagar INA",
                state: "Gujarat"
            },
            {
                city: "Ambala",
                state: "Haryana"
            },
            {
                city: "Ambala Cantt.",
                state: "Haryana"
            },
            {
                city: "Ambala Sadar",
                state: "Haryana"
            },
            {
                city: "Asan  Khurd",
                state: "Haryana"
            },
            {
                city: "Assandh",
                state: "Haryana"
            },
            {
                city: "Ateli",
                state: "Haryana"
            },
            {
                city: "Babiyal",
                state: "Haryana"
            },
            {
                city: "Bahadurgarh",
                state: "Haryana"
            },
            {
                city: "Barwala",
                state: "Haryana"
            },
            {
                city: "Bawal",
                state: "Haryana"
            },
            {
                city: "Bawani Khera",
                state: "Haryana"
            },
            {
                city: "Beri",
                state: "Haryana"
            },
            {
                city: "Bhiwani",
                state: "Haryana"
            },
            {
                city: "Bilaspur",
                state: "Haryana"
            },
            {
                city: "Buria",
                state: "Haryana"
            },
            {
                city: "Charkhi Dadri",
                state: "Haryana"
            },
            {
                city: "Cheeka",
                state: "Haryana"
            },
            {
                city: "Chhachhrauli",
                state: "Haryana"
            },
            {
                city: "Dharuhera",
                state: "Haryana"
            },
            {
                city: "Dundahera",
                state: "Haryana"
            },
            {
                city: "Ellenabad",
                state: "Haryana"
            },
            {
                city: "Farakhpur",
                state: "Haryana"
            },
            {
                city: "Faridabad",
                state: "Haryana"
            },
            {
                city: "Farrukhnagar",
                state: "Haryana"
            },
            {
                city: "Fatehabad",
                state: "Haryana"
            },
            {
                city: "Ferozepur Jhirka",
                state: "Haryana"
            },
            {
                city: "Ganaur",
                state: "Haryana"
            },
            {
                city: "Gharaunda",
                state: "Haryana"
            },
            {
                city: "Gohana",
                state: "Haryana"
            },
            {
                city: "Gurgaon",
                state: "Haryana"
            },
            {
                city: "Haileymandi",
                state: "Haryana"
            },
            {
                city: "Hansi",
                state: "Haryana"
            },
            {
                city: "Hassanpur",
                state: "Haryana"
            },
            {
                city: "Hathin",
                state: "Haryana"
            },
            {
                city: "Hisar",
                state: "Haryana"
            },
            {
                city: "Hodal",
                state: "Haryana"
            },
            {
                city: "Indri",
                state: "Haryana"
            },
            {
                city: "Jagadhri",
                state: "Haryana"
            },
            {
                city: "Jakhal Mandi",
                state: "Haryana"
            },
            {
                city: "Jhajjar",
                state: "Haryana"
            },
            {
                city: "Jind",
                state: "Haryana"
            },
            {
                city: "Julana",
                state: "Haryana"
            },
            {
                city: "Kaithal",
                state: "Haryana"
            },
            {
                city: "Kalan Wali",
                state: "Haryana"
            },
            {
                city: "Kalanaur",
                state: "Haryana"
            },
            {
                city: "Kalayat",
                state: "Haryana"
            },
            {
                city: "Kalka",
                state: "Haryana"
            },
            {
                city: "Kanina",
                state: "Haryana"
            },
            {
                city: "Kansepur",
                state: "Haryana"
            },
            {
                city: "Kardhan",
                state: "Haryana"
            },
            {
                city: "Karnal",
                state: "Haryana"
            },
            {
                city: "Kharkhoda",
                state: "Haryana"
            },
            {
                city: "Ladrawan",
                state: "Haryana"
            },
            {
                city: "Ladwa",
                state: "Haryana"
            },
            {
                city: "Loharu",
                state: "Haryana"
            },
            {
                city: "Maham",
                state: "Haryana"
            },
            {
                city: "Mahendragarh",
                state: "Haryana"
            },
            {
                city: "Mandi Dabwali",
                state: "Haryana"
            },
            {
                city: "Mustafabad",
                state: "Haryana"
            },
            {
                city: "Nagai Chaudhry",
                state: "Haryana"
            },
            {
                city: "Naraingarh",
                state: "Haryana"
            },
            {
                city: "Narnaul",
                state: "Haryana"
            },
            {
                city: "Narnaund",
                state: "Haryana"
            },
            {
                city: "Narwana",
                state: "Haryana"
            },
            {
                city: "Nilokheri",
                state: "Haryana"
            },
            {
                city: "Nuh",
                state: "Haryana"
            },
            {
                city: "Palwal",
                state: "Haryana"
            },
            {
                city: "Panchkula Urban Estate",
                state: "Haryana"
            },
            {
                city: "Panipat",
                state: "Haryana"
            },
            {
                city: "Pataudi",
                state: "Haryana"
            },
            {
                city: "Pehowa",
                state: "Haryana"
            },
            {
                city: "Pinjore",
                state: "Haryana"
            },
            {
                city: "Punahana",
                state: "Haryana"
            },
            {
                city: "Pundri",
                state: "Haryana"
            },
            {
                city: "Radaur",
                state: "Haryana"
            },
            {
                city: "Raipur Rani",
                state: "Haryana"
            },
            {
                city: "Rania",
                state: "Haryana"
            },
            {
                city: "Ratia",
                state: "Haryana"
            },
            {
                city: "Rewari",
                state: "Haryana"
            },
            {
                city: "Rohtak",
                state: "Haryana"
            },
            {
                city: "Sadaura",
                state: "Haryana"
            },
            {
                city: "Safidon",
                state: "Haryana"
            },
            {
                city: "Samalkha",
                state: "Haryana"
            },
            {
                city: "Sankhol",
                state: "Haryana"
            },
            {
                city: "Sasauli",
                state: "Haryana"
            },
            {
                city: "Shahbad",
                state: "Haryana"
            },
            {
                city: "Sirsa",
                state: "Haryana"
            },
            {
                city: "Siwani",
                state: "Haryana"
            },
            {
                city: "Sohna",
                state: "Haryana"
            },
            {
                city: "Sonipat",
                state: "Haryana"
            },
            {
                city: "Sukhrali",
                state: "Haryana"
            },
            {
                city: "Taoru",
                state: "Haryana"
            },
            {
                city: "Taraori",
                state: "Haryana"
            },
            {
                city: "Thanesar",
                state: "Haryana"
            },
            {
                city: "Tilpat",
                state: "Haryana"
            },
            {
                city: "Tohana",
                state: "Haryana"
            },
            {
                city: "Tosham",
                state: "Haryana"
            },
            {
                city: "Uchana",
                state: "Haryana"
            },
            {
                city: "Uklanamandi",
                state: "Haryana"
            },
            {
                city: "Uncha Siwana",
                state: "Haryana"
            },
            {
                city: "Yamunanagar",
                state: "Haryana"
            },
            {
                city: "Arki",
                state: "Himachal Pradesh"
            },
            {
                city: "Baddi",
                state: "Himachal Pradesh"
            },
            {
                city: "Bakloh",
                state: "Himachal Pradesh"
            },
            {
                city: "Banjar",
                state: "Himachal Pradesh"
            },
            {
                city: "Bhota",
                state: "Himachal Pradesh"
            },
            {
                city: "Bhuntar",
                state: "Himachal Pradesh"
            },
            {
                city: "Bilaspur",
                state: "Himachal Pradesh"
            },
            {
                city: "Chamba",
                state: "Himachal Pradesh"
            },
            {
                city: "Chaupal",
                state: "Himachal Pradesh"
            },
            {
                city: "Chuari Khas",
                state: "Himachal Pradesh"
            },
            {
                city: "Dagshai",
                state: "Himachal Pradesh"
            },
            {
                city: "Dalhousie",
                state: "Himachal Pradesh"
            },
            {
                city: "Dalhousie",
                state: "Himachal Pradesh"
            },
            {
                city: "Daulatpur",
                state: "Himachal Pradesh"
            },
            {
                city: "Dera Gopipur",
                state: "Himachal Pradesh"
            },
            {
                city: "Dharmsala",
                state: "Himachal Pradesh"
            },
            {
                city: "Gagret",
                state: "Himachal Pradesh"
            },
            {
                city: "Ghumarwin",
                state: "Himachal Pradesh"
            },
            {
                city: "Hamirpur",
                state: "Himachal Pradesh"
            },
            {
                city: "Jawalamukhi",
                state: "Himachal Pradesh"
            },
            {
                city: "Jogindarnagar",
                state: "Himachal Pradesh"
            },
            {
                city: "Jubbal",
                state: "Himachal Pradesh"
            },
            {
                city: "Jutogh",
                state: "Himachal Pradesh"
            },
            {
                city: "Kangra",
                state: "Himachal Pradesh"
            },
            {
                city: "Kasauli",
                state: "Himachal Pradesh"
            },
            {
                city: "Kotkhai",
                state: "Himachal Pradesh"
            },
            {
                city: "Kullu",
                state: "Himachal Pradesh"
            },
            {
                city: "Manali",
                state: "Himachal Pradesh"
            },
            {
                city: "Mandi",
                state: "Himachal Pradesh"
            },
            {
                city: "Mant Khas",
                state: "Himachal Pradesh"
            },
            {
                city: "Mehatpur Basdehra",
                state: "Himachal Pradesh"
            },
            {
                city: "Nadaun",
                state: "Himachal Pradesh"
            },
            {
                city: "Nagrota Bagwan",
                state: "Himachal Pradesh"
            },
            {
                city: "Nahan",
                state: "Himachal Pradesh"
            },
            {
                city: "Naina Devi",
                state: "Himachal Pradesh"
            },
            {
                city: "Nalagarh",
                state: "Himachal Pradesh"
            },
            {
                city: "Narkanda",
                state: "Himachal Pradesh"
            },
            {
                city: "Nurpur",
                state: "Himachal Pradesh"
            },
            {
                city: "Palampur",
                state: "Himachal Pradesh"
            },
            {
                city: "Paonta Sahib",
                state: "Himachal Pradesh"
            },
            {
                city: "Parwanoo",
                state: "Himachal Pradesh"
            },
            {
                city: "Rajgarh",
                state: "Himachal Pradesh"
            },
            {
                city: "Rampur",
                state: "Himachal Pradesh"
            },
            {
                city: "Rawalsar",
                state: "Himachal Pradesh"
            },
            {
                city: "Rohru",
                state: "Himachal Pradesh"
            },
            {
                city: "Sabathu",
                state: "Himachal Pradesh"
            },
            {
                city: "Santokhgarh",
                state: "Himachal Pradesh"
            },
            {
                city: "Sarkaghat",
                state: "Himachal Pradesh"
            },
            {
                city: "Seoni",
                state: "Himachal Pradesh"
            },
            {
                city: "Shimla",
                state: "Himachal Pradesh"
            },
            {
                city: "Solan",
                state: "Himachal Pradesh"
            },
            {
                city: "Sundarnagar",
                state: "Himachal Pradesh"
            },
            {
                city: "Talai",
                state: "Himachal Pradesh"
            },
            {
                city: "Theog",
                state: "Himachal Pradesh"
            },
            {
                city: "Tira Sujanpur",
                state: "Himachal Pradesh"
            },
            {
                city: "Una",
                state: "Himachal Pradesh"
            },
            {
                city: "Yol",
                state: "Himachal Pradesh"
            },
            {
                city: "Achabal",
                state: "Jammu & Kashmir"
            },
            {
                city: "Akhnoor",
                state: "Jammu & Kashmir"
            },
            {
                city: "Anantnag",
                state: "Jammu & Kashmir"
            },
            {
                city: "Arnia",
                state: "Jammu & Kashmir"
            },
            {
                city: "Awantipora",
                state: "Jammu & Kashmir"
            },
            {
                city: "Badami Bagh",
                state: "Jammu & Kashmir"
            },
            {
                city: "Badgam",
                state: "Jammu & Kashmir"
            },
            {
                city: "Bandipore",
                state: "Jammu & Kashmir"
            },
            {
                city: "Banihal",
                state: "Jammu & Kashmir"
            },
            {
                city: "Baramula",
                state: "Jammu & Kashmir"
            },
            {
                city: "Bari Brahmana",
                state: "Jammu & Kashmir"
            },
            {
                city: "Bashohli",
                state: "Jammu & Kashmir"
            },
            {
                city: "Batote",
                state: "Jammu & Kashmir"
            },
            {
                city: "Beerwah",
                state: "Jammu & Kashmir"
            },
            {
                city: "Bhaderwah",
                state: "Jammu & Kashmir"
            },
            {
                city: "Bijbehara",
                state: "Jammu & Kashmir"
            },
            {
                city: "Billawar",
                state: "Jammu & Kashmir"
            },
            {
                city: "Bishna",
                state: "Jammu & Kashmir"
            },
            {
                city: "Charari Sharief",
                state: "Jammu & Kashmir"
            },
            {
                city: "Chenani",
                state: "Jammu & Kashmir"
            },
            {
                city: "Doda",
                state: "Jammu & Kashmir"
            },
            {
                city: "Duru-Verinag",
                state: "Jammu & Kashmir"
            },
            {
                city: "Ganderbal",
                state: "Jammu & Kashmir"
            },
            {
                city: "Gho Manhasan",
                state: "Jammu & Kashmir"
            },
            {
                city: "Gorah Salathian",
                state: "Jammu & Kashmir"
            },
            {
                city: "Gulmarg",
                state: "Jammu & Kashmir"
            },
            {
                city: "Hajan",
                state: "Jammu & Kashmir"
            },
            {
                city: "Handwara",
                state: "Jammu & Kashmir"
            },
            {
                city: "Hiranagar",
                state: "Jammu & Kashmir"
            },
            {
                city: "Jammu",
                state: "Jammu & Kashmir"
            },
            {
                city: "Jammu Cantonment",
                state: "Jammu & Kashmir"
            },
            {
                city: "Jourian",
                state: "Jammu & Kashmir"
            },
            {
                city: "Kargil",
                state: "Jammu & Kashmir"
            },
            {
                city: "Kathua",
                state: "Jammu & Kashmir"
            },
            {
                city: "Katra",
                state: "Jammu & Kashmir"
            },
            {
                city: "Khan Sahib",
                state: "Jammu & Kashmir"
            },
            {
                city: "Khour",
                state: "Jammu & Kashmir"
            },
            {
                city: "Khrew",
                state: "Jammu & Kashmir"
            },
            {
                city: "Kishtwar",
                state: "Jammu & Kashmir"
            },
            {
                city: "Kud",
                state: "Jammu & Kashmir"
            },
            {
                city: "Kukernag",
                state: "Jammu & Kashmir"
            },
            {
                city: "Kulgam",
                state: "Jammu & Kashmir"
            },
            {
                city: "Kunzer",
                state: "Jammu & Kashmir"
            },
            {
                city: "Kupwara",
                state: "Jammu & Kashmir"
            },
            {
                city: "Lakhenpur",
                state: "Jammu & Kashmir"
            },
            {
                city: "Leh",
                state: "Jammu & Kashmir"
            },
            {
                city: "Magam",
                state: "Jammu & Kashmir"
            },
            {
                city: "Mattan",
                state: "Jammu & Kashmir"
            },
            {
                city: "Nowshehra",
                state: "Jammu & Kashmir"
            },
            {
                city: "Pahalgam",
                state: "Jammu & Kashmir"
            },
            {
                city: "Pampore",
                state: "Jammu & Kashmir"
            },
            {
                city: "Parole",
                state: "Jammu & Kashmir"
            },
            {
                city: "Pattan",
                state: "Jammu & Kashmir"
            },
            {
                city: "Pulwama",
                state: "Jammu & Kashmir"
            },
            {
                city: "Punch",
                state: "Jammu & Kashmir"
            },
            {
                city: "Qazigund",
                state: "Jammu & Kashmir"
            },
            {
                city: "Rajauri",
                state: "Jammu & Kashmir"
            },
            {
                city: "Ram Garh",
                state: "Jammu & Kashmir"
            },
            {
                city: "Ramban",
                state: "Jammu & Kashmir"
            },
            {
                city: "Ramnagar",
                state: "Jammu & Kashmir"
            },
            {
                city: "Ranbir Singh Pora",
                state: "Jammu & Kashmir"
            },
            {
                city: "Reasi",
                state: "Jammu & Kashmir"
            },
            {
                city: "Rehambal",
                state: "Jammu & Kashmir"
            },
            {
                city: "Samba",
                state: "Jammu & Kashmir"
            },
            {
                city: "Shupiyan",
                state: "Jammu & Kashmir"
            },
            {
                city: "Sopore",
                state: "Jammu & Kashmir"
            },
            {
                city: "Srinagar",
                state: "Jammu & Kashmir"
            },
            {
                city: "Sumbal",
                state: "Jammu & Kashmir"
            },
            {
                city: "Sunderbani",
                state: "Jammu & Kashmir"
            },
            {
                city: "Talwara",
                state: "Jammu & Kashmir"
            },
            {
                city: "Thanamandi",
                state: "Jammu & Kashmir"
            },
            {
                city: "Tral",
                state: "Jammu & Kashmir"
            },
            {
                city: "Udhampur",
                state: "Jammu & Kashmir"
            },
            {
                city: "Uri",
                state: "Jammu & Kashmir"
            },
            {
                city: "Vijay Pur",
                state: "Jammu & Kashmir"
            },
            {
                city: "Adityapur",
                state: "Jharkhand"
            },
            {
                city: "Amlabad",
                state: "Jharkhand"
            },
            {
                city: "Angarpathar",
                state: "Jharkhand"
            },
            {
                city: "Ara",
                state: "Jharkhand"
            },
            {
                city: "Babua Kalan",
                state: "Jharkhand"
            },
            {
                city: "Bagbera",
                state: "Jharkhand"
            },
            {
                city: "Baliari",
                state: "Jharkhand"
            },
            {
                city: "Balkundra",
                state: "Jharkhand"
            },
            {
                city: "Bandhgora",
                state: "Jharkhand"
            },
            {
                city: "Barajamda",
                state: "Jharkhand"
            },
            {
                city: "Barhi",
                state: "Jharkhand"
            },
            {
                city: "Barkakana",
                state: "Jharkhand"
            },
            {
                city: "Barughutu",
                state: "Jharkhand"
            },
            {
                city: "Barwadih",
                state: "Jharkhand"
            },
            {
                city: "Basaria",
                state: "Jharkhand"
            },
            {
                city: "Basukinath",
                state: "Jharkhand"
            },
            {
                city: "Bermo",
                state: "Jharkhand"
            },
            {
                city: "Bhagatdih",
                state: "Jharkhand"
            },
            {
                city: "Bhojudih",
                state: "Jharkhand"
            },
            {
                city: "Bhowrah",
                state: "Jharkhand"
            },
            {
                city: "Bhuli",
                state: "Jharkhand"
            },
            {
                city: "Bokaro",
                state: "Jharkhand"
            },
            {
                city: "Bokaro Steel City",
                state: "Jharkhand"
            },
            {
                city: "Bundu",
                state: "Jharkhand"
            },
            {
                city: "Chakulia",
                state: "Jharkhand"
            },
            {
                city: "Chandaur",
                state: "Jharkhand"
            },
            {
                city: "Chandil",
                state: "Jharkhand"
            },
            {
                city: "Chandrapura",
                state: "Jharkhand"
            },
            {
                city: "Chhatatanr",
                state: "Jharkhand"
            },
            {
                city: "Chhota Gobindpur",
                state: "Jharkhand"
            },
            {
                city: "Chhotaputki",
                state: "Jharkhand"
            },
            {
                city: "Chiria",
                state: "Jharkhand"
            },
            {
                city: "Chirkunda",
                state: "Jharkhand"
            },
            {
                city: "Churi",
                state: "Jharkhand"
            },
            {
                city: "Danguwapasi",
                state: "Jharkhand"
            },
            {
                city: "Dari",
                state: "Jharkhand"
            },
            {
                city: "Deorikalan",
                state: "Jharkhand"
            },
            {
                city: "Dhanwar",
                state: "Jharkhand"
            },
            {
                city: "Dhaunsar",
                state: "Jharkhand"
            },
            {
                city: "Dugda",
                state: "Jharkhand"
            },
            {
                city: "Dumarkunda",
                state: "Jharkhand"
            },
            {
                city: "Egarkunr",
                state: "Jharkhand"
            },
            {
                city: "Gadhra",
                state: "Jharkhand"
            },
            {
                city: "Ghatshila",
                state: "Jharkhand"
            },
            {
                city: "Ghorabandha",
                state: "Jharkhand"
            },
            {
                city: "Gidi",
                state: "Jharkhand"
            },
            {
                city: "Gobindpur",
                state: "Jharkhand"
            },
            {
                city: "Godhar",
                state: "Jharkhand"
            },
            {
                city: "Gomoh",
                state: "Jharkhand"
            },
            {
                city: "Gua",
                state: "Jharkhand"
            },
            {
                city: "Gumia",
                state: "Jharkhand"
            },
            {
                city: "Haludbani",
                state: "Jharkhand"
            },
            {
                city: "Hesla",
                state: "Jharkhand"
            },
            {
                city: "Hussainabad",
                state: "Jharkhand"
            },
            {
                city: "Chaibasa",
                state: "Jharkhand"
            },
            {
                city: "Isri",
                state: "Jharkhand"
            },
            {
                city: "Chakradharpur",
                state: "Jharkhand"
            },
            {
                city: "Jadugora",
                state: "Jharkhand"
            },
            {
                city: "Chas",
                state: "Jharkhand"
            },
            {
                city: "Chatra",
                state: "Jharkhand"
            },
            {
                city: "Daltonganj",
                state: "Jharkhand"
            },
            {
                city: "Deoghar",
                state: "Jharkhand"
            },
            {
                city: "Dhanbad",
                state: "Jharkhand"
            },
            {
                city: "Dumka",
                state: "Jharkhand"
            },
            {
                city: "Garhwa",
                state: "Jharkhand"
            },
            {
                city: "Giridih",
                state: "Jharkhand"
            },
            {
                city: "Godda",
                state: "Jharkhand"
            },
            {
                city: "Gumla",
                state: "Jharkhand"
            },
            {
                city: "Hazaribag",
                state: "Jharkhand"
            },
            {
                city: "Jamadoba",
                state: "Jharkhand"
            },
            {
                city: "Jhumri Tilaiya",
                state: "Jharkhand"
            },
            {
                city: "Jugsalai",
                state: "Jharkhand"
            },
            {
                city: "Lohardaga",
                state: "Jharkhand"
            },
            {
                city: "Jamshedpur",
                state: "Jharkhand"
            },
            {
                city: "Jamtara",
                state: "Jharkhand"
            },
            {
                city: "Madhupur",
                state: "Jharkhand"
            },
            {
                city: "Pakaur",
                state: "Jharkhand"
            },
            {
                city: "Sahibganj",
                state: "Jharkhand"
            },
            {
                city: "Seraikela",
                state: "Jharkhand"
            },
            {
                city: "Jaridih Bazar",
                state: "Jharkhand"
            },
            {
                city: "Jasidih",
                state: "Jharkhand"
            },
            {
                city: "Jena",
                state: "Jharkhand"
            },
            {
                city: "Jharia",
                state: "Jharkhand"
            },
            {
                city: "Jharia Khas",
                state: "Jharkhand"
            },
            {
                city: "Jhinkpani",
                state: "Jharkhand"
            },
            {
                city: "Jorapokhar",
                state: "Jharkhand"
            },
            {
                city: "Kailudih",
                state: "Jharkhand"
            },
            {
                city: "Kalikapur",
                state: "Jharkhand"
            },
            {
                city: "Kandra",
                state: "Jharkhand"
            },
            {
                city: "Kanke",
                state: "Jharkhand"
            },
            {
                city: "Katras",
                state: "Jharkhand"
            },
            {
                city: "Kedla",
                state: "Jharkhand"
            },
            {
                city: "Kenduadih",
                state: "Jharkhand"
            },
            {
                city: "Kharkhari",
                state: "Jharkhand"
            },
            {
                city: "Kharsawan",
                state: "Jharkhand"
            },
            {
                city: "Khelari",
                state: "Jharkhand"
            },
            {
                city: "Khunti",
                state: "Jharkhand"
            },
            {
                city: "Kiriburu",
                state: "Jharkhand"
            },
            {
                city: "Kodarma",
                state: "Jharkhand"
            },
            {
                city: "Kuju",
                state: "Jharkhand"
            },
            {
                city: "Kurpania",
                state: "Jharkhand"
            },
            {
                city: "Kustai",
                state: "Jharkhand"
            },
            {
                city: "Lakarka",
                state: "Jharkhand"
            },
            {
                city: "Lapanga",
                state: "Jharkhand"
            },
            {
                city: "Latehar",
                state: "Jharkhand"
            },
            {
                city: "Loyabad",
                state: "Jharkhand"
            },
            {
                city: "Maithon",
                state: "Jharkhand"
            },
            {
                city: "Malkera",
                state: "Jharkhand"
            },
            {
                city: "Mango",
                state: "Jharkhand"
            },
            {
                city: "Marma",
                state: "Jharkhand"
            },
            {
                city: "Meghahatuburu Forest village",
                state: "Jharkhand"
            },
            {
                city: "Mera",
                state: "Jharkhand"
            },
            {
                city: "Meru",
                state: "Jharkhand"
            },
            {
                city: "Mihijam",
                state: "Jharkhand"
            },
            {
                city: "Mugma",
                state: "Jharkhand"
            },
            {
                city: "Muri",
                state: "Jharkhand"
            },
            {
                city: "Musabani",
                state: "Jharkhand"
            },
            {
                city: "Nagri Kalan",
                state: "Jharkhand"
            },
            {
                city: "Nirsa",
                state: "Jharkhand"
            },
            {
                city: "Noamundi",
                state: "Jharkhand"
            },
            {
                city: "Okni NO.II",
                state: "Jharkhand"
            },
            {
                city: "Orla",
                state: "Jharkhand"
            },
            {
                city: "Palawa",
                state: "Jharkhand"
            },
            {
                city: "Panchet",
                state: "Jharkhand"
            },
            {
                city: "Paratdih",
                state: "Jharkhand"
            },
            {
                city: "Pathardih",
                state: "Jharkhand"
            },
            {
                city: "Patratu",
                state: "Jharkhand"
            },
            {
                city: "Phusro",
                state: "Jharkhand"
            },
            {
                city: "Pondar Kanali",
                state: "Jharkhand"
            },
            {
                city: "Rajmahal",
                state: "Jharkhand"
            },
            {
                city: "Ramgarh Cantonment",
                state: "Jharkhand"
            },
            {
                city: "Ranchi",
                state: "Jharkhand"
            },
            {
                city: "Religara alias Pachhiari",
                state: "Jharkhand"
            },
            {
                city: "Rohraband",
                state: "Jharkhand"
            },
            {
                city: "Sahnidih",
                state: "Jharkhand"
            },
            {
                city: "Saraidhela",
                state: "Jharkhand"
            },
            {
                city: "Sarjamda",
                state: "Jharkhand"
            },
            {
                city: "Saunda",
                state: "Jharkhand"
            },
            {
                city: "Sewai",
                state: "Jharkhand"
            },
            {
                city: "Sijhua",
                state: "Jharkhand"
            },
            {
                city: "Sijua",
                state: "Jharkhand"
            },
            {
                city: "Simdega",
                state: "Jharkhand"
            },
            {
                city: "Sindri",
                state: "Jharkhand"
            },
            {
                city: "Sinduria",
                state: "Jharkhand"
            },
            {
                city: "Sini",
                state: "Jharkhand"
            },
            {
                city: "Sirka",
                state: "Jharkhand"
            },
            {
                city: "Siuliban",
                state: "Jharkhand"
            },
            {
                city: "Tati",
                state: "Jharkhand"
            },
            {
                city: "Tenu Dam-cum- Kathhara",
                state: "Jharkhand"
            },
            {
                city: "Tisra",
                state: "Jharkhand"
            },
            {
                city: "Topa",
                state: "Jharkhand"
            },
            {
                city: "Topchanchi",
                state: "Jharkhand"
            },
            {
                city: "Adityapatna",
                state: "Karnataka"
            },
            {
                city: "Adyar",
                state: "Karnataka"
            },
            {
                city: "Afzalpur",
                state: "Karnataka"
            },
            {
                city: "Aland",
                state: "Karnataka"
            },
            {
                city: "Alnavar",
                state: "Karnataka"
            },
            {
                city: "Alur",
                state: "Karnataka"
            },
            {
                city: "Ambikanagara",
                state: "Karnataka"
            },
            {
                city: "Anekal",
                state: "Karnataka"
            },
            {
                city: "Ankola",
                state: "Karnataka"
            },
            {
                city: "Annigeri",
                state: "Karnataka"
            },
            {
                city: "Arkalgud",
                state: "Karnataka"
            },
            {
                city: "Arsikere",
                state: "Karnataka"
            },
            {
                city: "Athni",
                state: "Karnataka"
            },
            {
                city: "Aurad",
                state: "Karnataka"
            },
            {
                city: "Badami",
                state: "Karnataka"
            },
            {
                city: "Bagalkot",
                state: "Karnataka"
            },
            {
                city: "Bagepalli",
                state: "Karnataka"
            },
            {
                city: "Bail Hongal",
                state: "Karnataka"
            },
            {
                city: "Bajala",
                state: "Karnataka"
            },
            {
                city: "Bajpe",
                state: "Karnataka"
            },
            {
                city: "Bangalore",
                state: "Karnataka"
            },
            {
                city: "Bangarapet",
                state: "Karnataka"
            },
            {
                city: "Bankapura",
                state: "Karnataka"
            },
            {
                city: "Bannur",
                state: "Karnataka"
            },
            {
                city: "Bantwal",
                state: "Karnataka"
            },
            {
                city: "Basavakalyan",
                state: "Karnataka"
            },
            {
                city: "Basavana Bagevadi",
                state: "Karnataka"
            },
            {
                city: "Belgaum",
                state: "Karnataka"
            },
            {
                city: "Belgaum Cantonment",
                state: "Karnataka"
            },
            {
                city: "Bellary",
                state: "Karnataka"
            },
            {
                city: "Beltangadi",
                state: "Karnataka"
            },
            {
                city: "Belur",
                state: "Karnataka"
            },
            {
                city: "Belvata",
                state: "Karnataka"
            },
            {
                city: "Bhadravati",
                state: "Karnataka"
            },
            {
                city: "Bhalki",
                state: "Karnataka"
            },
            {
                city: "Bhatkal",
                state: "Karnataka"
            },
            {
                city: "Bhimarayanagudi",
                state: "Karnataka"
            },
            {
                city: "Bhogadi",
                state: "Karnataka"
            },
            {
                city: "Bidar",
                state: "Karnataka"
            },
            {
                city: "Bijapur",
                state: "Karnataka"
            },
            {
                city: "Bilgi",
                state: "Karnataka"
            },
            {
                city: "Birur",
                state: "Karnataka"
            },
            {
                city: "Bommanahalli",
                state: "Karnataka"
            },
            {
                city: "Bommasandra",
                state: "Karnataka"
            },
            {
                city: "Byadgi",
                state: "Karnataka"
            },
            {
                city: "Byatarayanapura",
                state: "Karnataka"
            },
            {
                city: "Challakere",
                state: "Karnataka"
            },
            {
                city: "Chamrajnagar",
                state: "Karnataka"
            },
            {
                city: "Channagiri",
                state: "Karnataka"
            },
            {
                city: "Channapatna",
                state: "Karnataka"
            },
            {
                city: "Channarayapattana",
                state: "Karnataka"
            },
            {
                city: "Chik Ballapur",
                state: "Karnataka"
            },
            {
                city: "Chikmagalur",
                state: "Karnataka"
            },
            {
                city: "Chiknayakanhalli",
                state: "Karnataka"
            },
            {
                city: "Chikodi",
                state: "Karnataka"
            },
            {
                city: "Chincholi",
                state: "Karnataka"
            },
            {
                city: "Chintamani",
                state: "Karnataka"
            },
            {
                city: "Chitapur",
                state: "Karnataka"
            },
            {
                city: "Chitgoppa",
                state: "Karnataka"
            },
            {
                city: "Chitradurga",
                state: "Karnataka"
            },
            {
                city: "Dandeli",
                state: "Karnataka"
            },
            {
                city: "Dargajogihalli",
                state: "Karnataka"
            },
            {
                city: "Dasarahalli",
                state: "Karnataka"
            },
            {
                city: "Davanagere",
                state: "Karnataka"
            },
            {
                city: "Devadurga",
                state: "Karnataka"
            },
            {
                city: "Devanhalli",
                state: "Karnataka"
            },
            {
                city: "Dod Ballapur",
                state: "Karnataka"
            },
            {
                city: "Donimalai Township",
                state: "Karnataka"
            },
            {
                city: "Gadag-Betigeri",
                state: "Karnataka"
            },
            {
                city: "Gajendragarh",
                state: "Karnataka"
            },
            {
                city: "Gangawati",
                state: "Karnataka"
            },
            {
                city: "Gauribidanur",
                state: "Karnataka"
            },
            {
                city: "Gokak",
                state: "Karnataka"
            },
            {
                city: "Gokak Falls",
                state: "Karnataka"
            },
            {
                city: "Gonikoppal",
                state: "Karnataka"
            },
            {
                city: "Gottikere",
                state: "Karnataka"
            },
            {
                city: "Gubbi",
                state: "Karnataka"
            },
            {
                city: "Gudibanda",
                state: "Karnataka"
            },
            {
                city: "Gulbarga",
                state: "Karnataka"
            },
            {
                city: "Guledgudda",
                state: "Karnataka"
            },
            {
                city: "Gundlupet",
                state: "Karnataka"
            },
            {
                city: "Gurmatkal",
                state: "Karnataka"
            },
            {
                city: "Haliyal",
                state: "Karnataka"
            },
            {
                city: "Hangal",
                state: "Karnataka"
            },
            {
                city: "Harihar",
                state: "Karnataka"
            },
            {
                city: "Harpanahalli",
                state: "Karnataka"
            },
            {
                city: "Hassan",
                state: "Karnataka"
            },
            {
                city: "Hatti",
                state: "Karnataka"
            },
            {
                city: "Hatti Gold Mines",
                state: "Karnataka"
            },
            {
                city: "Haveri",
                state: "Karnataka"
            },
            {
                city: "Hebbagodi",
                state: "Karnataka"
            },
            {
                city: "Hebbalu",
                state: "Karnataka"
            },
            {
                city: "Heggadadevanakote",
                state: "Karnataka"
            },
            {
                city: "Herohalli",
                state: "Karnataka"
            },
            {
                city: "Hindalgi",
                state: "Karnataka"
            },
            {
                city: "Hirekerur",
                state: "Karnataka"
            },
            {
                city: "Hiriyur",
                state: "Karnataka"
            },
            {
                city: "Holalkere",
                state: "Karnataka"
            },
            {
                city: "Holenarsipur",
                state: "Karnataka"
            },
            {
                city: "Homnabad",
                state: "Karnataka"
            },
            {
                city: "Honavar",
                state: "Karnataka"
            },
            {
                city: "Honnali",
                state: "Karnataka"
            },
            {
                city: "Hoovina Hadagalli",
                state: "Karnataka"
            },
            {
                city: "Hosanagara",
                state: "Karnataka"
            },
            {
                city: "Hosdurga",
                state: "Karnataka"
            },
            {
                city: "Hoskote",
                state: "Karnataka"
            },
            {
                city: "Hospet",
                state: "Karnataka"
            },
            {
                city: "Hubli-Dharwad",
                state: "Karnataka"
            },
            {
                city: "Hukeri",
                state: "Karnataka"
            },
            {
                city: "Hunasamaranahalli",
                state: "Karnataka"
            },
            {
                city: "Hungund",
                state: "Karnataka"
            },
            {
                city: "Hunsur",
                state: "Karnataka"
            },
            {
                city: "Ilkal",
                state: "Karnataka"
            },
            {
                city: "Indi",
                state: "Karnataka"
            },
            {
                city: "Jagalur",
                state: "Karnataka"
            },
            {
                city: "Jamkhandi",
                state: "Karnataka"
            },
            {
                city: "Jevargi",
                state: "Karnataka"
            },
            {
                city: "Jog Falls",
                state: "Karnataka"
            },
            {
                city: "Kadur",
                state: "Karnataka"
            },
            {
                city: "Kalghatgi",
                state: "Karnataka"
            },
            {
                city: "Kamalapuram",
                state: "Karnataka"
            },
            {
                city: "Kampli",
                state: "Karnataka"
            },
            {
                city: "Kanakapura",
                state: "Karnataka"
            },
            {
                city: "Kangrali",
                state: "Karnataka"
            },
            {
                city: "Kannur",
                state: "Karnataka"
            },
            {
                city: "Karkal",
                state: "Karnataka"
            },
            {
                city: "Karwar",
                state: "Karnataka"
            },
            {
                city: "Kengeri",
                state: "Karnataka"
            },
            {
                city: "Kerur",
                state: "Karnataka"
            },
            {
                city: "Khanapur",
                state: "Karnataka"
            },
            {
                city: "Kodigenahalli",
                state: "Karnataka"
            },
            {
                city: "Kodiyal",
                state: "Karnataka"
            },
            {
                city: "Kolar",
                state: "Karnataka"
            },
            {
                city: "Kollegal",
                state: "Karnataka"
            },
            {
                city: "Konanakunte",
                state: "Karnataka"
            },
            {
                city: "Konnur",
                state: "Karnataka"
            },
            {
                city: "Koppa",
                state: "Karnataka"
            },
            {
                city: "Koppal",
                state: "Karnataka"
            },
            {
                city: "Koratagere",
                state: "Karnataka"
            },
            {
                city: "Kotekara",
                state: "Karnataka"
            },
            {
                city: "Kothnur",
                state: "Karnataka"
            },
            {
                city: "Kotturu",
                state: "Karnataka"
            },
            {
                city: "Krishnarajanagar",
                state: "Karnataka"
            },
            {
                city: "Krishnarajapura",
                state: "Karnataka"
            },
            {
                city: "Krishnarajasagara",
                state: "Karnataka"
            },
            {
                city: "Krishnarajpet",
                state: "Karnataka"
            },
            {
                city: "Kudchi",
                state: "Karnataka"
            },
            {
                city: "Kudligi",
                state: "Karnataka"
            },
            {
                city: "Kudremukh",
                state: "Karnataka"
            },
            {
                city: "Kumta",
                state: "Karnataka"
            },
            {
                city: "Kundapura",
                state: "Karnataka"
            },
            {
                city: "Kundgol",
                state: "Karnataka"
            },
            {
                city: "Kunigal",
                state: "Karnataka"
            },
            {
                city: "Kurgunta",
                state: "Karnataka"
            },
            {
                city: "Kushalnagar",
                state: "Karnataka"
            },
            {
                city: "Kushtagi",
                state: "Karnataka"
            },
            {
                city: "Lakshmeshwar",
                state: "Karnataka"
            },
            {
                city: "Lingsugur",
                state: "Karnataka"
            },
            {
                city: "Londa",
                state: "Karnataka"
            },
            {
                city: "Maddur",
                state: "Karnataka"
            },
            {
                city: "Madhugiri",
                state: "Karnataka"
            },
            {
                city: "Madikeri",
                state: "Karnataka"
            },
            {
                city: "Magadi",
                state: "Karnataka"
            },
            {
                city: "Mahadevapura",
                state: "Karnataka"
            },
            {
                city: "Mahalingpur",
                state: "Karnataka"
            },
            {
                city: "Malavalli",
                state: "Karnataka"
            },
            {
                city: "Mallar",
                state: "Karnataka"
            },
            {
                city: "Malur",
                state: "Karnataka"
            },
            {
                city: "Mandya",
                state: "Karnataka"
            },
            {
                city: "Mangalore",
                state: "Karnataka"
            },
            {
                city: "Manvi",
                state: "Karnataka"
            },
            {
                city: "Molakalmuru",
                state: "Karnataka"
            },
            {
                city: "Mudalgi",
                state: "Karnataka"
            },
            {
                city: "Mudbidri",
                state: "Karnataka"
            },
            {
                city: "Muddebihal",
                state: "Karnataka"
            },
            {
                city: "Mudgal",
                state: "Karnataka"
            },
            {
                city: "Mudhol",
                state: "Karnataka"
            },
            {
                city: "Mudigere",
                state: "Karnataka"
            },
            {
                city: "Mudushedde",
                state: "Karnataka"
            },
            {
                city: "Mulbagal",
                state: "Karnataka"
            },
            {
                city: "Mulgund",
                state: "Karnataka"
            },
            {
                city: "Mulki",
                state: "Karnataka"
            },
            {
                city: "Mulur",
                state: "Karnataka"
            },
            {
                city: "Mundargi",
                state: "Karnataka"
            },
            {
                city: "Mundgod",
                state: "Karnataka"
            },
            {
                city: "Munirabad",
                state: "Karnataka"
            },
            {
                city: "Munnur",
                state: "Karnataka"
            },
            {
                city: "Mysore",
                state: "Karnataka"
            },
            {
                city: "Nagamangala",
                state: "Karnataka"
            },
            {
                city: "Nanjangud",
                state: "Karnataka"
            },
            {
                city: "Narasimharajapura",
                state: "Karnataka"
            },
            {
                city: "Naregal",
                state: "Karnataka"
            },
            {
                city: "Nargund",
                state: "Karnataka"
            },
            {
                city: "Navalgund",
                state: "Karnataka"
            },
            {
                city: "Nelmangala",
                state: "Karnataka"
            },
            {
                city: "Nipani",
                state: "Karnataka"
            },
            {
                city: "Pandavapura",
                state: "Karnataka"
            },
            {
                city: "Pattanagere",
                state: "Karnataka"
            },
            {
                city: "Pavagada",
                state: "Karnataka"
            },
            {
                city: "Piriyapatna",
                state: "Karnataka"
            },
            {
                city: "Pudu",
                state: "Karnataka"
            },
            {
                city: "Puttur",
                state: "Karnataka"
            },
            {
                city: "Rabkavi Banhatti",
                state: "Karnataka"
            },
            {
                city: "Raichur",
                state: "Karnataka"
            },
            {
                city: "Ramanagaram",
                state: "Karnataka"
            },
            {
                city: "Ramdurg",
                state: "Karnataka"
            },
            {
                city: "Ranibennur",
                state: "Karnataka"
            },
            {
                city: "Raybag",
                state: "Karnataka"
            },
            {
                city: "Robertson Pet",
                state: "Karnataka"
            },
            {
                city: "Ron",
                state: "Karnataka"
            },
            {
                city: "Sadalgi",
                state: "Karnataka"
            },
            {
                city: "Sagar",
                state: "Karnataka"
            },
            {
                city: "Sakleshpur",
                state: "Karnataka"
            },
            {
                city: "Saligram",
                state: "Karnataka"
            },
            {
                city: "Sandur",
                state: "Karnataka"
            },
            {
                city: "Sankeshwar",
                state: "Karnataka"
            },
            {
                city: "Sathyamangala",
                state: "Karnataka"
            },
            {
                city: "Saundatti-Yellamma",
                state: "Karnataka"
            },
            {
                city: "Savanur",
                state: "Karnataka"
            },
            {
                city: "Sedam",
                state: "Karnataka"
            },
            {
                city: "Shahabad",
                state: "Karnataka"
            },
            {
                city: "Shahabad ACC",
                state: "Karnataka"
            },
            {
                city: "Shahpur",
                state: "Karnataka"
            },
            {
                city: "Shaktinagar",
                state: "Karnataka"
            },
            {
                city: "Shiggaon",
                state: "Karnataka"
            },
            {
                city: "Shikarpur",
                state: "Karnataka"
            },
            {
                city: "Shimoga",
                state: "Karnataka"
            },
            {
                city: "Shirhatti",
                state: "Karnataka"
            },
            {
                city: "Shorapur",
                state: "Karnataka"
            },
            {
                city: "Shrirangapattana",
                state: "Karnataka"
            },
            {
                city: "Siddapur",
                state: "Karnataka"
            },
            {
                city: "Sidlaghatta",
                state: "Karnataka"
            },
            {
                city: "Sindgi",
                state: "Karnataka"
            },
            {
                city: "Sindhnur",
                state: "Karnataka"
            },
            {
                city: "Sira",
                state: "Karnataka"
            },
            {
                city: "Siralkoppa",
                state: "Karnataka"
            },
            {
                city: "Sirsi",
                state: "Karnataka"
            },
            {
                city: "Siruguppa",
                state: "Karnataka"
            },
            {
                city: "Someshwar",
                state: "Karnataka"
            },
            {
                city: "Somvarpet",
                state: "Karnataka"
            },
            {
                city: "Sorab",
                state: "Karnataka"
            },
            {
                city: "Sringeri",
                state: "Karnataka"
            },
            {
                city: "Srinivaspur",
                state: "Karnataka"
            },
            {
                city: "Sulya",
                state: "Karnataka"
            },
            {
                city: "Talikota",
                state: "Karnataka"
            },
            {
                city: "Tarikere",
                state: "Karnataka"
            },
            {
                city: "Tekkalakota",
                state: "Karnataka"
            },
            {
                city: "Terdal",
                state: "Karnataka"
            },
            {
                city: "Thokur-62",
                state: "Karnataka"
            },
            {
                city: "Thumbe",
                state: "Karnataka"
            },
            {
                city: "Tiptur",
                state: "Karnataka"
            },
            {
                city: "Tirthahalli",
                state: "Karnataka"
            },
            {
                city: "Tirumakudal-Narsipur",
                state: "Karnataka"
            },
            {
                city: "Tumkur",
                state: "Karnataka"
            },
            {
                city: "Turuvekere",
                state: "Karnataka"
            },
            {
                city: "Udupi",
                state: "Karnataka"
            },
            {
                city: "Ullal",
                state: "Karnataka"
            },
            {
                city: "Uttarahalli",
                state: "Karnataka"
            },
            {
                city: "Venkatapura",
                state: "Karnataka"
            },
            {
                city: "Vijayapura",
                state: "Karnataka"
            },
            {
                city: "Virajpet",
                state: "Karnataka"
            },
            {
                city: "Wadi",
                state: "Karnataka"
            },
            {
                city: "Wadi ACC",
                state: "Karnataka"
            },
            {
                city: "Yadgir",
                state: "Karnataka"
            },
            {
                city: "Yelahanka",
                state: "Karnataka"
            },
            {
                city: "Yelandur",
                state: "Karnataka"
            },
            {
                city: "Yelbarga",
                state: "Karnataka"
            },
            {
                city: "Yellapur",
                state: "Karnataka"
            },
            {
                city: "Yenagudde",
                state: "Karnataka"
            },
            {
                city: "Akathiyoor",
                state: "Kerala"
            },
            {
                city: "Ancharakandy",
                state: "Kerala"
            },
            {
                city: "Arookutty",
                state: "Kerala"
            },
            {
                city: "Aroor",
                state: "Kerala"
            },
            {
                city: "Avinissery",
                state: "Kerala"
            },
            {
                city: "Azhikode North",
                state: "Kerala"
            },
            {
                city: "Azhikode South",
                state: "Kerala"
            },
            {
                city: "Bangramanjeshwar",
                state: "Kerala"
            },
            {
                city: "Beypore",
                state: "Kerala"
            },
            {
                city: "Brahmakulam",
                state: "Kerala"
            },
            {
                city: "Chala",
                state: "Kerala"
            },
            {
                city: "Chelora",
                state: "Kerala"
            },
            {
                city: "Chendamangalam",
                state: "Kerala"
            },
            {
                city: "Chengamanad",
                state: "Kerala"
            },
            {
                city: "Cheranallur",
                state: "Kerala"
            },
            {
                city: "Cheruthazham",
                state: "Kerala"
            },
            {
                city: "Cheruvannur",
                state: "Kerala"
            },
            {
                city: "Chevvoor",
                state: "Kerala"
            },
            {
                city: "Chirakkal",
                state: "Kerala"
            },
            {
                city: "Chockli",
                state: "Kerala"
            },
            {
                city: "Choornikkara",
                state: "Kerala"
            },
            {
                city: "Chowwara",
                state: "Kerala"
            },
            {
                city: "Dharmadom",
                state: "Kerala"
            },
            {
                city: "Edathala",
                state: "Kerala"
            },
            {
                city: "Elayavoor",
                state: "Kerala"
            },
            {
                city: "Eloor",
                state: "Kerala"
            },
            {
                city: "Eranholi",
                state: "Kerala"
            },
            {
                city: "Erattupetta",
                state: "Kerala"
            },
            {
                city: "Feroke",
                state: "Kerala"
            },
            {
                city: "Hosabettu",
                state: "Kerala"
            },
            {
                city: "Idukki Township",
                state: "Kerala"
            },
            {
                city: "Iringaprom",
                state: "Kerala"
            },
            {
                city: "Iriveri",
                state: "Kerala"
            },
            {
                city: "Adoor",
                state: "Kerala"
            },
            {
                city: "Alappuzha",
                state: "Kerala"
            },
            {
                city: "Aluva",
                state: "Kerala"
            },
            {
                city: "Angamaly",
                state: "Kerala"
            },
            {
                city: "Attingal",
                state: "Kerala"
            },
            {
                city: "Chalakudy",
                state: "Kerala"
            },
            {
                city: "Changanassery",
                state: "Kerala"
            },
            {
                city: "Chavakkad",
                state: "Kerala"
            },
            {
                city: "Chengannur",
                state: "Kerala"
            },
            {
                city: "Cherthala",
                state: "Kerala"
            },
            {
                city: "Chittur-Thathamangalam",
                state: "Kerala"
            },
            {
                city: "Guruvayoor",
                state: "Kerala"
            },
            {
                city: "Irinjalakuda",
                state: "Kerala"
            },
            {
                city: "Kalamassery",
                state: "Kerala"
            },
            {
                city: "Kalpetta",
                state: "Kerala"
            },
            {
                city: "Kanhangad",
                state: "Kerala"
            },
            {
                city: "Kannur",
                state: "Kerala"
            },
            {
                city: "Kasaragod",
                state: "Kerala"
            },
            {
                city: "Kayamkulam",
                state: "Kerala"
            },
            {
                city: "Kodungallur",
                state: "Kerala"
            },
            {
                city: "Koothuparamba",
                state: "Kerala"
            },
            {
                city: "Kadachira",
                state: "Kerala"
            },
            {
                city: "Kadamakkudy",
                state: "Kerala"
            },
            {
                city: "Kothamangalam",
                state: "Kerala"
            },
            {
                city: "Kottayam",
                state: "Kerala"
            },
            {
                city: "Kunnamkulam",
                state: "Kerala"
            },
            {
                city: "Kadirur",
                state: "Kerala"
            },
            {
                city: "Kadungalloor",
                state: "Kerala"
            },
            {
                city: "Malappuram",
                state: "Kerala"
            },
            {
                city: "Manjeri",
                state: "Kerala"
            },
            {
                city: "Mattannur",
                state: "Kerala"
            },
            {
                city: "Mavelikkara",
                state: "Kerala"
            },
            {
                city: "Muvattupuzha",
                state: "Kerala"
            },
            {
                city: "Nedumangad",
                state: "Kerala"
            },
            {
                city: "Neyyattinkara",
                state: "Kerala"
            },
            {
                city: "Ottappalam",
                state: "Kerala"
            },
            {
                city: "Kalliasseri",
                state: "Kerala"
            },
            {
                city: "Palai",
                state: "Kerala"
            },
            {
                city: "Palakkad",
                state: "Kerala"
            },
            {
                city: "Paravoor",
                state: "Kerala"
            },
            {
                city: "Paravur",
                state: "Kerala"
            },
            {
                city: "Pathanamthitta",
                state: "Kerala"
            },
            {
                city: "Payyannur",
                state: "Kerala"
            },
            {
                city: "Perinthalmanna",
                state: "Kerala"
            },
            {
                city: "Perumbavoor",
                state: "Kerala"
            },
            {
                city: "Ponnani",
                state: "Kerala"
            },
            {
                city: "Punalur",
                state: "Kerala"
            },
            {
                city: "Quilandy",
                state: "Kerala"
            },
            {
                city: "Shoranur",
                state: "Kerala"
            },
            {
                city: "Taliparamba",
                state: "Kerala"
            },
            {
                city: "Thalassery",
                state: "Kerala"
            },
            {
                city: "Kanhirode",
                state: "Kerala"
            },
            {
                city: "Kanjikkuzhi",
                state: "Kerala"
            },
            {
                city: "Thiruvalla",
                state: "Kerala"
            },
            {
                city: "Kannadiparamba",
                state: "Kerala"
            },
            {
                city: "Kannapuram",
                state: "Kerala"
            },
            {
                city: "Thodupuzha",
                state: "Kerala"
            },
            {
                city: "Kannur Cantonment",
                state: "Kerala"
            },
            {
                city: "Thrippunithura",
                state: "Kerala"
            },
            {
                city: "Tirur",
                state: "Kerala"
            },
            {
                city: "Vadakara",
                state: "Kerala"
            },
            {
                city: "Vaikom",
                state: "Kerala"
            },
            {
                city: "Varkala",
                state: "Kerala"
            },
            {
                city: "Karuvanthuruthy",
                state: "Kerala"
            },
            {
                city: "Kochi",
                state: "Kerala"
            },
            {
                city: "Kokkothamangalam",
                state: "Kerala"
            },
            {
                city: "Kolazhy",
                state: "Kerala"
            },
            {
                city: "Kollam",
                state: "Kerala"
            },
            {
                city: "Komalapuram",
                state: "Kerala"
            },
            {
                city: "Koratty",
                state: "Kerala"
            },
            {
                city: "Kottayam-Malabar",
                state: "Kerala"
            },
            {
                city: "Kottuvally",
                state: "Kerala"
            },
            {
                city: "Kozhikode",
                state: "Kerala"
            },
            {
                city: "Kudlu",
                state: "Kerala"
            },
            {
                city: "Kureekkad",
                state: "Kerala"
            },
            {
                city: "Manjeshwar",
                state: "Kerala"
            },
            {
                city: "Maradu",
                state: "Kerala"
            },
            {
                city: "Marathakkara",
                state: "Kerala"
            },
            {
                city: "Mavilayi",
                state: "Kerala"
            },
            {
                city: "Mavoor",
                state: "Kerala"
            },
            {
                city: "Methala",
                state: "Kerala"
            },
            {
                city: "Muhamma",
                state: "Kerala"
            },
            {
                city: "Mulavukad",
                state: "Kerala"
            },
            {
                city: "Munderi",
                state: "Kerala"
            },
            {
                city: "Muzhappilangad",
                state: "Kerala"
            },
            {
                city: "Nadathara",
                state: "Kerala"
            },
            {
                city: "Narath",
                state: "Kerala"
            },
            {
                city: "Nenmenikkara",
                state: "Kerala"
            },
            {
                city: "New Mahe",
                state: "Kerala"
            },
            {
                city: "Olavanna",
                state: "Kerala"
            },
            {
                city: "Paduvilayi",
                state: "Kerala"
            },
            {
                city: "Palayad",
                state: "Kerala"
            },
            {
                city: "Palissery",
                state: "Kerala"
            },
            {
                city: "Pallikkunnu",
                state: "Kerala"
            },
            {
                city: "Paluvai",
                state: "Kerala"
            },
            {
                city: "Panniyannur",
                state: "Kerala"
            },
            {
                city: "Panoor",
                state: "Kerala"
            },
            {
                city: "Pantheeramkavu",
                state: "Kerala"
            },
            {
                city: "Pappinisseri",
                state: "Kerala"
            },
            {
                city: "Pathiriyad",
                state: "Kerala"
            },
            {
                city: "Pattiom",
                state: "Kerala"
            },
            {
                city: "Pavaratty",
                state: "Kerala"
            },
            {
                city: "Perakam",
                state: "Kerala"
            },
            {
                city: "Peralasseri",
                state: "Kerala"
            },
            {
                city: "Peringathur",
                state: "Kerala"
            },
            {
                city: "Perumbaikad",
                state: "Kerala"
            },
            {
                city: "Pinarayi",
                state: "Kerala"
            },
            {
                city: "Pottore",
                state: "Kerala"
            },
            {
                city: "Puranattukara",
                state: "Kerala"
            },
            {
                city: "Puthukkad",
                state: "Kerala"
            },
            {
                city: "Puthunagaram",
                state: "Kerala"
            },
            {
                city: "Puzhathi",
                state: "Kerala"
            },
            {
                city: "Ramanattukara",
                state: "Kerala"
            },
            {
                city: "Thaikkad",
                state: "Kerala"
            },
            {
                city: "Thiruvankulam",
                state: "Kerala"
            },
            {
                city: "Thottada",
                state: "Kerala"
            },
            {
                city: "Thrissur",
                state: "Kerala"
            },
            {
                city: "Trivandrum",
                state: "Kerala"
            },
            {
                city: "Udma",
                state: "Kerala"
            },
            {
                city: "Valapattanam",
                state: "Kerala"
            },
            {
                city: "Vallachira",
                state: "Kerala"
            },
            {
                city: "Varam",
                state: "Kerala"
            },
            {
                city: "Varappuzha",
                state: "Kerala"
            },
            {
                city: "Vazhakkala",
                state: "Kerala"
            },
            {
                city: "Venmanad",
                state: "Kerala"
            },
            {
                city: "Villiappally",
                state: "Kerala"
            },
            {
                city: "Amini",
                state: "Lakshadweep"
            },
            {
                city: "Kavaratti",
                state: "Lakshadweep"
            },
            {
                city: "Minicoy",
                state: "Lakshadweep"
            },
            {
                city: "Ajaigarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Akoda",
                state: "Madhya Pradesh"
            },
            {
                city: "Akodia",
                state: "Madhya Pradesh"
            },
            {
                city: "Alampur",
                state: "Madhya Pradesh"
            },
            {
                city: "Alot",
                state: "Madhya Pradesh"
            },
            {
                city: "Amanganj",
                state: "Madhya Pradesh"
            },
            {
                city: "Amarkantak",
                state: "Madhya Pradesh"
            },
            {
                city: "Amarpatan",
                state: "Madhya Pradesh"
            },
            {
                city: "Amarwara",
                state: "Madhya Pradesh"
            },
            {
                city: "Ambada",
                state: "Madhya Pradesh"
            },
            {
                city: "Amlai",
                state: "Madhya Pradesh"
            },
            {
                city: "Anjad",
                state: "Madhya Pradesh"
            },
            {
                city: "Antari",
                state: "Madhya Pradesh"
            },
            {
                city: "Anuppur",
                state: "Madhya Pradesh"
            },
            {
                city: "Aron",
                state: "Madhya Pradesh"
            },
            {
                city: "Babai",
                state: "Madhya Pradesh"
            },
            {
                city: "Bada Malhera",
                state: "Madhya Pradesh"
            },
            {
                city: "Badagaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Badagoan",
                state: "Madhya Pradesh"
            },
            {
                city: "Badarwas",
                state: "Madhya Pradesh"
            },
            {
                city: "Badawada",
                state: "Madhya Pradesh"
            },
            {
                city: "Badi",
                state: "Madhya Pradesh"
            },
            {
                city: "Badkuhi",
                state: "Madhya Pradesh"
            },
            {
                city: "Badnawar",
                state: "Madhya Pradesh"
            },
            {
                city: "Badod",
                state: "Madhya Pradesh"
            },
            {
                city: "Badra",
                state: "Madhya Pradesh"
            },
            {
                city: "Bagh",
                state: "Madhya Pradesh"
            },
            {
                city: "Bagli",
                state: "Madhya Pradesh"
            },
            {
                city: "Baihar",
                state: "Madhya Pradesh"
            },
            {
                city: "Baikunthpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Baldeogarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Bamhani",
                state: "Madhya Pradesh"
            },
            {
                city: "Bamor",
                state: "Madhya Pradesh"
            },
            {
                city: "Bamora",
                state: "Madhya Pradesh"
            },
            {
                city: "Banda",
                state: "Madhya Pradesh"
            },
            {
                city: "Bangawan",
                state: "Madhya Pradesh"
            },
            {
                city: "Bansatar Kheda",
                state: "Madhya Pradesh"
            },
            {
                city: "Baraily",
                state: "Madhya Pradesh"
            },
            {
                city: "Barela",
                state: "Madhya Pradesh"
            },
            {
                city: "Barghat",
                state: "Madhya Pradesh"
            },
            {
                city: "Barhi",
                state: "Madhya Pradesh"
            },
            {
                city: "Barigarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Beohari",
                state: "Madhya Pradesh"
            },
            {
                city: "Berasia",
                state: "Madhya Pradesh"
            },
            {
                city: "Betma",
                state: "Madhya Pradesh"
            },
            {
                city: "Betul-Bazar",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhainsdehi",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhamodi",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhander",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhanpura",
                state: "Madhya Pradesh"
            },
            {
                city: "Bharveli",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhaurasa",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhavra",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhedaghat",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhikangaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhilakhedi",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhitarwar",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhopal",
                state: "Madhya Pradesh"
            },
            {
                city: "Bijawar",
                state: "Madhya Pradesh"
            },
            {
                city: "Bijeypur",
                state: "Madhya Pradesh"
            },
            {
                city: "Bijuri",
                state: "Madhya Pradesh"
            },
            {
                city: "Bilaua",
                state: "Madhya Pradesh"
            },
            {
                city: "Bilpura",
                state: "Madhya Pradesh"
            },
            {
                city: "Bina Rly Colony",
                state: "Madhya Pradesh"
            },
            {
                city: "Birsinghpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Boda",
                state: "Madhya Pradesh"
            },
            {
                city: "Budhni",
                state: "Madhya Pradesh"
            },
            {
                city: "Burhanpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Burhar",
                state: "Madhya Pradesh"
            },
            {
                city: "Buxwaha",
                state: "Madhya Pradesh"
            },
            {
                city: "Chachaura-Binaganj",
                state: "Madhya Pradesh"
            },
            {
                city: "Chakghat",
                state: "Madhya Pradesh"
            },
            {
                city: "Chandameta-Butaria",
                state: "Madhya Pradesh"
            },
            {
                city: "Chandia",
                state: "Madhya Pradesh"
            },
            {
                city: "Chandla",
                state: "Madhya Pradesh"
            },
            {
                city: "Chaurai Khas",
                state: "Madhya Pradesh"
            },
            {
                city: "Chhota Chhindwara (Gotegaon)",
                state: "Madhya Pradesh"
            },
            {
                city: "Chichli",
                state: "Madhya Pradesh"
            },
            {
                city: "Chitrakoot",
                state: "Madhya Pradesh"
            },
            {
                city: "Churhat",
                state: "Madhya Pradesh"
            },
            {
                city: "Daboh",
                state: "Madhya Pradesh"
            },
            {
                city: "Damua",
                state: "Madhya Pradesh"
            },
            {
                city: "Deodara",
                state: "Madhya Pradesh"
            },
            {
                city: "Deori",
                state: "Madhya Pradesh"
            },
            {
                city: "Depalpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Devendranagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Devhara",
                state: "Madhya Pradesh"
            },
            {
                city: "Dewas",
                state: "Madhya Pradesh"
            },
            {
                city: "Dhamnod",
                state: "Madhya Pradesh"
            },
            {
                city: "Dhana",
                state: "Madhya Pradesh"
            },
            {
                city: "Dharampuri",
                state: "Madhya Pradesh"
            },
            {
                city: "Dighawani",
                state: "Madhya Pradesh"
            },
            {
                city: "Diken",
                state: "Madhya Pradesh"
            },
            {
                city: "Dindori",
                state: "Madhya Pradesh"
            },
            {
                city: "Dola",
                state: "Madhya Pradesh"
            },
            {
                city: "Dumar Kachhar",
                state: "Madhya Pradesh"
            },
            {
                city: "G.C.F Jabalpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Gairatganj",
                state: "Madhya Pradesh"
            },
            {
                city: "Garhi-Malhara",
                state: "Madhya Pradesh"
            },
            {
                city: "Garoth",
                state: "Madhya Pradesh"
            },
            {
                city: "Ghansor",
                state: "Madhya Pradesh"
            },
            {
                city: "Ghuwara",
                state: "Madhya Pradesh"
            },
            {
                city: "Gogapur",
                state: "Madhya Pradesh"
            },
            {
                city: "Gormi",
                state: "Madhya Pradesh"
            },
            {
                city: "Govindgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Gurh",
                state: "Madhya Pradesh"
            },
            {
                city: "Gwalior",
                state: "Madhya Pradesh"
            },
            {
                city: "Hanumana",
                state: "Madhya Pradesh"
            },
            {
                city: "Harpalpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Harrai",
                state: "Madhya Pradesh"
            },
            {
                city: "Harsud",
                state: "Madhya Pradesh"
            },
            {
                city: "Hatod",
                state: "Madhya Pradesh"
            },
            {
                city: "Hatpipalya",
                state: "Madhya Pradesh"
            },
            {
                city: "Hindoria",
                state: "Madhya Pradesh"
            },
            {
                city: "Hirapur",
                state: "Madhya Pradesh"
            },
            {
                city: "Ichhawar",
                state: "Madhya Pradesh"
            },
            {
                city: "Iklehra",
                state: "Madhya Pradesh"
            },
            {
                city: "Indergarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Indore",
                state: "Madhya Pradesh"
            },
            {
                city: "Isagarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Jabalpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Jabalpur Cantt.",
                state: "Madhya Pradesh"
            },
            {
                city: "Jaisinghnagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Jaithari",
                state: "Madhya Pradesh"
            },
            {
                city: "Jaitwara",
                state: "Madhya Pradesh"
            },
            {
                city: "Jata Chhapar",
                state: "Madhya Pradesh"
            },
            {
                city: "Jatara",
                state: "Madhya Pradesh"
            },
            {
                city: "Jawad",
                state: "Madhya Pradesh"
            },
            {
                city: "Jawar",
                state: "Madhya Pradesh"
            },
            {
                city: "Jeron Khalsa",
                state: "Madhya Pradesh"
            },
            {
                city: "Jhundpura",
                state: "Madhya Pradesh"
            },
            {
                city: "Jiran",
                state: "Madhya Pradesh"
            },
            {
                city: "Jirapur",
                state: "Madhya Pradesh"
            },
            {
                city: "Jobat",
                state: "Madhya Pradesh"
            },
            {
                city: "Joura",
                state: "Madhya Pradesh"
            },
            {
                city: "Kailaras",
                state: "Madhya Pradesh"
            },
            {
                city: "Kakarhati",
                state: "Madhya Pradesh"
            },
            {
                city: "Kali Chhapar",
                state: "Madhya Pradesh"
            },
            {
                city: "Kanad",
                state: "Madhya Pradesh"
            },
            {
                city: "Kannod",
                state: "Madhya Pradesh"
            },
            {
                city: "Kantaphod",
                state: "Madhya Pradesh"
            },
            {
                city: "Agar",
                state: "Madhya Pradesh"
            },
            {
                city: "Alirajpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Ambah",
                state: "Madhya Pradesh"
            },
            {
                city: "Amla",
                state: "Madhya Pradesh"
            },
            {
                city: "Ashok Nagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Kareli",
                state: "Madhya Pradesh"
            },
            {
                city: "Karera",
                state: "Madhya Pradesh"
            },
            {
                city: "Kari",
                state: "Madhya Pradesh"
            },
            {
                city: "Ashta",
                state: "Madhya Pradesh"
            },
            {
                city: "Badnagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Karnawad",
                state: "Madhya Pradesh"
            },
            {
                city: "Karrapur",
                state: "Madhya Pradesh"
            },
            {
                city: "Badoda",
                state: "Madhya Pradesh"
            },
            {
                city: "Balaghat",
                state: "Madhya Pradesh"
            },
            {
                city: "Kasrawad",
                state: "Madhya Pradesh"
            },
            {
                city: "Katangi",
                state: "Madhya Pradesh"
            },
            {
                city: "Katangi",
                state: "Madhya Pradesh"
            },
            {
                city: "Barwaha",
                state: "Madhya Pradesh"
            },
            {
                city: "Barwani",
                state: "Madhya Pradesh"
            },
            {
                city: "Basoda",
                state: "Madhya Pradesh"
            },
            {
                city: "Begamganj",
                state: "Madhya Pradesh"
            },
            {
                city: "Betul",
                state: "Madhya Pradesh"
            },
            {
                city: "Bhind",
                state: "Madhya Pradesh"
            },
            {
                city: "Biaora",
                state: "Madhya Pradesh"
            },
            {
                city: "Kelhauri(chachai)",
                state: "Madhya Pradesh"
            },
            {
                city: "Bina Etawa",
                state: "Madhya Pradesh"
            },
            {
                city: "Chanderi",
                state: "Madhya Pradesh"
            },
            {
                city: "Chhatarpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Chhindwara",
                state: "Madhya Pradesh"
            },
            {
                city: "Dabra",
                state: "Madhya Pradesh"
            },
            {
                city: "Damoh",
                state: "Madhya Pradesh"
            },
            {
                city: "Datia",
                state: "Madhya Pradesh"
            },
            {
                city: "Deori",
                state: "Madhya Pradesh"
            },
            {
                city: "Dhanpuri",
                state: "Madhya Pradesh"
            },
            {
                city: "Dhar",
                state: "Madhya Pradesh"
            },
            {
                city: "Khajuraho",
                state: "Madhya Pradesh"
            },
            {
                city: "Dongar Parasia",
                state: "Madhya Pradesh"
            },
            {
                city: "Gadarwara",
                state: "Madhya Pradesh"
            },
            {
                city: "Garhakota",
                state: "Madhya Pradesh"
            },
            {
                city: "Khand(Bansagar)",
                state: "Madhya Pradesh"
            },
            {
                city: "Gohad",
                state: "Madhya Pradesh"
            },
            {
                city: "Khandwa",
                state: "Madhya Pradesh"
            },
            {
                city: "Khaniyadhana",
                state: "Madhya Pradesh"
            },
            {
                city: "Guna",
                state: "Madhya Pradesh"
            },
            {
                city: "Harda",
                state: "Madhya Pradesh"
            },
            {
                city: "Hatta",
                state: "Madhya Pradesh"
            },
            {
                city: "Khargapur",
                state: "Madhya Pradesh"
            },
            {
                city: "Hoshangabad",
                state: "Madhya Pradesh"
            },
            {
                city: "Khategaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Itarsi",
                state: "Madhya Pradesh"
            },
            {
                city: "Jamai",
                state: "Madhya Pradesh"
            },
            {
                city: "Jaora",
                state: "Madhya Pradesh"
            },
            {
                city: "Jhabua",
                state: "Madhya Pradesh"
            },
            {
                city: "Khetia",
                state: "Madhya Pradesh"
            },
            {
                city: "Khachrod",
                state: "Madhya Pradesh"
            },
            {
                city: "Khilchipur",
                state: "Madhya Pradesh"
            },
            {
                city: "Khirkiya",
                state: "Madhya Pradesh"
            },
            {
                city: "Khujner",
                state: "Madhya Pradesh"
            },
            {
                city: "Khargone",
                state: "Madhya Pradesh"
            },
            {
                city: "Khurai",
                state: "Madhya Pradesh"
            },
            {
                city: "Kotma",
                state: "Madhya Pradesh"
            },
            {
                city: "Mahidpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Maihar",
                state: "Madhya Pradesh"
            },
            {
                city: "Malaj Khand",
                state: "Madhya Pradesh"
            },
            {
                city: "Manawar",
                state: "Madhya Pradesh"
            },
            {
                city: "Mandideep",
                state: "Madhya Pradesh"
            },
            {
                city: "Mandla",
                state: "Madhya Pradesh"
            },
            {
                city: "Mandsaur",
                state: "Madhya Pradesh"
            },
            {
                city: "Kolaras",
                state: "Madhya Pradesh"
            },
            {
                city: "Morena",
                state: "Madhya Pradesh"
            },
            {
                city: "Nagda",
                state: "Madhya Pradesh"
            },
            {
                city: "Nainpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Narsimhapur",
                state: "Madhya Pradesh"
            },
            {
                city: "Kotar",
                state: "Madhya Pradesh"
            },
            {
                city: "Narsinghgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Neemuch",
                state: "Madhya Pradesh"
            },
            {
                city: "Kothi",
                state: "Madhya Pradesh"
            },
            {
                city: "Nepanagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Nowgaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Panagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Pandhurna",
                state: "Madhya Pradesh"
            },
            {
                city: "Panna",
                state: "Madhya Pradesh"
            },
            {
                city: "Pasan",
                state: "Madhya Pradesh"
            },
            {
                city: "Pipariya",
                state: "Madhya Pradesh"
            },
            {
                city: "Porsa",
                state: "Madhya Pradesh"
            },
            {
                city: "Raghogarh -Vijaypur",
                state: "Madhya Pradesh"
            },
            {
                city: "Raisen",
                state: "Madhya Pradesh"
            },
            {
                city: "Rehli",
                state: "Madhya Pradesh"
            },
            {
                city: "Kukshi",
                state: "Madhya Pradesh"
            },
            {
                city: "Sabalgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Sanawad",
                state: "Madhya Pradesh"
            },
            {
                city: "Sarangpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Sarni",
                state: "Madhya Pradesh"
            },
            {
                city: "Kumbhraj",
                state: "Madhya Pradesh"
            },
            {
                city: "Sehore",
                state: "Madhya Pradesh"
            },
            {
                city: "Sendhwa",
                state: "Madhya Pradesh"
            },
            {
                city: "Seoni",
                state: "Madhya Pradesh"
            },
            {
                city: "Kurwai",
                state: "Madhya Pradesh"
            },
            {
                city: "Seoni Malwa",
                state: "Madhya Pradesh"
            },
            {
                city: "Shahdol",
                state: "Madhya Pradesh"
            },
            {
                city: "Shajapur",
                state: "Madhya Pradesh"
            },
            {
                city: "Kymore",
                state: "Madhya Pradesh"
            },
            {
                city: "Sheopur",
                state: "Madhya Pradesh"
            },
            {
                city: "Shivpuri",
                state: "Madhya Pradesh"
            },
            {
                city: "Shujalpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Lahar",
                state: "Madhya Pradesh"
            },
            {
                city: "Sidhi",
                state: "Madhya Pradesh"
            },
            {
                city: "Sihora",
                state: "Madhya Pradesh"
            },
            {
                city: "Lakhnadon",
                state: "Madhya Pradesh"
            },
            {
                city: "Sironj",
                state: "Madhya Pradesh"
            },
            {
                city: "Tikamgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Lateri",
                state: "Madhya Pradesh"
            },
            {
                city: "Umaria",
                state: "Madhya Pradesh"
            },
            {
                city: "Laundi",
                state: "Madhya Pradesh"
            },
            {
                city: "Lidhorakhas",
                state: "Madhya Pradesh"
            },
            {
                city: "Vidisha",
                state: "Madhya Pradesh"
            },
            {
                city: "Lodhikheda",
                state: "Madhya Pradesh"
            },
            {
                city: "Loharda",
                state: "Madhya Pradesh"
            },
            {
                city: "Wara Seoni",
                state: "Madhya Pradesh"
            },
            {
                city: "Machalpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Maharajpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Maheshwar",
                state: "Madhya Pradesh"
            },
            {
                city: "Majholi",
                state: "Madhya Pradesh"
            },
            {
                city: "Makronia",
                state: "Madhya Pradesh"
            },
            {
                city: "Maksi",
                state: "Madhya Pradesh"
            },
            {
                city: "Malhargarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Manasa",
                state: "Madhya Pradesh"
            },
            {
                city: "Mandav",
                state: "Madhya Pradesh"
            },
            {
                city: "Mandleshwar",
                state: "Madhya Pradesh"
            },
            {
                city: "Manegaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Mangawan",
                state: "Madhya Pradesh"
            },
            {
                city: "Manglaya Sadak",
                state: "Madhya Pradesh"
            },
            {
                city: "Manpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Mau",
                state: "Madhya Pradesh"
            },
            {
                city: "Mauganj",
                state: "Madhya Pradesh"
            },
            {
                city: "Meghnagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Mehara Gaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Mehgaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Mhow Cantt.",
                state: "Madhya Pradesh"
            },
            {
                city: "Mhowgaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Mihona",
                state: "Madhya Pradesh"
            },
            {
                city: "Mohgaon",
                state: "Madhya Pradesh"
            },
            {
                city: "Morar Cantt.",
                state: "Madhya Pradesh"
            },
            {
                city: "Multai",
                state: "Madhya Pradesh"
            },
            {
                city: "Mundi",
                state: "Madhya Pradesh"
            },
            {
                city: "Mungaoli",
                state: "Madhya Pradesh"
            },
            {
                city: "Murwara (Katni)",
                state: "Madhya Pradesh"
            },
            {
                city: "Nagod",
                state: "Madhya Pradesh"
            },
            {
                city: "Nagri",
                state: "Madhya Pradesh"
            },
            {
                city: "Nai Garhi",
                state: "Madhya Pradesh"
            },
            {
                city: "Nalkheda",
                state: "Madhya Pradesh"
            },
            {
                city: "Namli",
                state: "Madhya Pradesh"
            },
            {
                city: "Narayangarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Narwar",
                state: "Madhya Pradesh"
            },
            {
                city: "Nasrullaganj",
                state: "Madhya Pradesh"
            },
            {
                city: "Naudhia",
                state: "Madhya Pradesh"
            },
            {
                city: "Neuton Chikhli Kalan",
                state: "Madhya Pradesh"
            },
            {
                city: "Niwari",
                state: "Madhya Pradesh"
            },
            {
                city: "Nowrozabad(Khodargama)",
                state: "Madhya Pradesh"
            },
            {
                city: "O.F.Khamaria",
                state: "Madhya Pradesh"
            },
            {
                city: "Obedullaganj",
                state: "Madhya Pradesh"
            },
            {
                city: "Omkareshwar",
                state: "Madhya Pradesh"
            },
            {
                city: "Orachha",
                state: "Madhya Pradesh"
            },
            {
                city: "Ordinance Factory Itarsi",
                state: "Madhya Pradesh"
            },
            {
                city: "Pachmarhi Cantt",
                state: "Madhya Pradesh"
            },
            {
                city: "Pachore",
                state: "Madhya Pradesh"
            },
            {
                city: "Pal Chourai",
                state: "Madhya Pradesh"
            },
            {
                city: "Palda",
                state: "Madhya Pradesh"
            },
            {
                city: "Palera",
                state: "Madhya Pradesh"
            },
            {
                city: "Pali",
                state: "Madhya Pradesh"
            },
            {
                city: "Panara",
                state: "Madhya Pradesh"
            },
            {
                city: "Pandhana",
                state: "Madhya Pradesh"
            },
            {
                city: "Pansemal",
                state: "Madhya Pradesh"
            },
            {
                city: "Patan",
                state: "Madhya Pradesh"
            },
            {
                city: "Patharia",
                state: "Madhya Pradesh"
            },
            {
                city: "Pawai",
                state: "Madhya Pradesh"
            },
            {
                city: "Petlawad",
                state: "Madhya Pradesh"
            },
            {
                city: "Phuphkalan",
                state: "Madhya Pradesh"
            },
            {
                city: "Pichhore",
                state: "Madhya Pradesh"
            },
            {
                city: "Pichhore",
                state: "Madhya Pradesh"
            },
            {
                city: "Pipariya",
                state: "Madhya Pradesh"
            },
            {
                city: "Piploda",
                state: "Madhya Pradesh"
            },
            {
                city: "Piplya Mandi",
                state: "Madhya Pradesh"
            },
            {
                city: "Pithampur",
                state: "Madhya Pradesh"
            },
            {
                city: "Polay Kalan",
                state: "Madhya Pradesh"
            },
            {
                city: "Prithvipur",
                state: "Madhya Pradesh"
            },
            {
                city: "Rahatgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Rajakhedi",
                state: "Madhya Pradesh"
            },
            {
                city: "Rajgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Rajgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Rajnagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Rajpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Rampur Baghelan",
                state: "Madhya Pradesh"
            },
            {
                city: "Rampur Naikin",
                state: "Madhya Pradesh"
            },
            {
                city: "Rampura",
                state: "Madhya Pradesh"
            },
            {
                city: "Ranapur",
                state: "Madhya Pradesh"
            },
            {
                city: "Ratangarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Ratlam",
                state: "Madhya Pradesh"
            },
            {
                city: "Rau",
                state: "Madhya Pradesh"
            },
            {
                city: "Rehti",
                state: "Madhya Pradesh"
            },
            {
                city: "Rewa",
                state: "Madhya Pradesh"
            },
            {
                city: "Runji Gautampura",
                state: "Madhya Pradesh"
            },
            {
                city: "Sagar",
                state: "Madhya Pradesh"
            },
            {
                city: "Sagar Cantt.",
                state: "Madhya Pradesh"
            },
            {
                city: "Sailana",
                state: "Madhya Pradesh"
            },
            {
                city: "Sanchi",
                state: "Madhya Pradesh"
            },
            {
                city: "Sardarpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Satai",
                state: "Madhya Pradesh"
            },
            {
                city: "Satna",
                state: "Madhya Pradesh"
            },
            {
                city: "Satwas",
                state: "Madhya Pradesh"
            },
            {
                city: "Sausar",
                state: "Madhya Pradesh"
            },
            {
                city: "Sawer",
                state: "Madhya Pradesh"
            },
            {
                city: "Semaria",
                state: "Madhya Pradesh"
            },
            {
                city: "Seondha",
                state: "Madhya Pradesh"
            },
            {
                city: "Sethia",
                state: "Madhya Pradesh"
            },
            {
                city: "Shahgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Shahpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Shahpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Shahpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Shahpura",
                state: "Madhya Pradesh"
            },
            {
                city: "Shahpura",
                state: "Madhya Pradesh"
            },
            {
                city: "Shamgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Singoli",
                state: "Madhya Pradesh"
            },
            {
                city: "Singrauli",
                state: "Madhya Pradesh"
            },
            {
                city: "Sinhasa",
                state: "Madhya Pradesh"
            },
            {
                city: "Sirgora",
                state: "Madhya Pradesh"
            },
            {
                city: "Sirmaur",
                state: "Madhya Pradesh"
            },
            {
                city: "Sitamau",
                state: "Madhya Pradesh"
            },
            {
                city: "Sohagpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Sonkatch",
                state: "Madhya Pradesh"
            },
            {
                city: "Soyatkalan",
                state: "Madhya Pradesh"
            },
            {
                city: "Suhagi",
                state: "Madhya Pradesh"
            },
            {
                city: "Sultanpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Susner",
                state: "Madhya Pradesh"
            },
            {
                city: "Suthaliya",
                state: "Madhya Pradesh"
            },
            {
                city: "Tal",
                state: "Madhya Pradesh"
            },
            {
                city: "Talen",
                state: "Madhya Pradesh"
            },
            {
                city: "Tarana",
                state: "Madhya Pradesh"
            },
            {
                city: "Taricharkalan",
                state: "Madhya Pradesh"
            },
            {
                city: "Tekanpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Tendu Kheda",
                state: "Madhya Pradesh"
            },
            {
                city: "Teonthar",
                state: "Madhya Pradesh"
            },
            {
                city: "Thandla",
                state: "Madhya Pradesh"
            },
            {
                city: "Timarni",
                state: "Madhya Pradesh"
            },
            {
                city: "Tirodi",
                state: "Madhya Pradesh"
            },
            {
                city: "Udaipura",
                state: "Madhya Pradesh"
            },
            {
                city: "Ujjain",
                state: "Madhya Pradesh"
            },
            {
                city: "Ukwa",
                state: "Madhya Pradesh"
            },
            {
                city: "Unchehara",
                state: "Madhya Pradesh"
            },
            {
                city: "Unhel",
                state: "Madhya Pradesh"
            },
            {
                city: "Vehicle Fac. Jabalpur",
                state: "Madhya Pradesh"
            },
            {
                city: "Vijayraghavgarh",
                state: "Madhya Pradesh"
            },
            {
                city: "Achalpur",
                state: "Maharashtra"
            },
            {
                city: "Ahmadnagar",
                state: "Maharashtra"
            },
            {
                city: "Ahmadnagar",
                state: "Maharashtra"
            },
            {
                city: "Ahmadpur",
                state: "Maharashtra"
            },
            {
                city: "Ajra",
                state: "Maharashtra"
            },
            {
                city: "Akkalkot",
                state: "Maharashtra"
            },
            {
                city: "Akola",
                state: "Maharashtra"
            },
            {
                city: "Akot",
                state: "Maharashtra"
            },
            {
                city: "Alandi",
                state: "Maharashtra"
            },
            {
                city: "Alibag",
                state: "Maharashtra"
            },
            {
                city: "Amalner",
                state: "Maharashtra"
            },
            {
                city: "Ambad",
                state: "Maharashtra"
            },
            {
                city: "Ambarnath",
                state: "Maharashtra"
            },
            {
                city: "Ambejogai",
                state: "Maharashtra"
            },
            {
                city: "Ambivali Tarf Wankhal",
                state: "Maharashtra"
            },
            {
                city: "Amravati",
                state: "Maharashtra"
            },
            {
                city: "Anjangaon",
                state: "Maharashtra"
            },
            {
                city: "Arvi",
                state: "Maharashtra"
            },
            {
                city: "Ashta",
                state: "Maharashtra"
            },
            {
                city: "Aurangabad",
                state: "Maharashtra"
            },
            {
                city: "Aurangabad",
                state: "Maharashtra"
            },
            {
                city: "Ausa",
                state: "Maharashtra"
            },
            {
                city: "Babhulgaon",
                state: "Maharashtra"
            },
            {
                city: "Badlapur",
                state: "Maharashtra"
            },
            {
                city: "Balapur",
                state: "Maharashtra"
            },
            {
                city: "Ballarpur",
                state: "Maharashtra"
            },
            {
                city: "Baramati",
                state: "Maharashtra"
            },
            {
                city: "Barshi",
                state: "Maharashtra"
            },
            {
                city: "Basmath",
                state: "Maharashtra"
            },
            {
                city: "Bhadravati",
                state: "Maharashtra"
            },
            {
                city: "Bhagur",
                state: "Maharashtra"
            },
            {
                city: "Bhandara",
                state: "Maharashtra"
            },
            {
                city: "Bhingar",
                state: "Maharashtra"
            },
            {
                city: "Bhiwandi",
                state: "Maharashtra"
            },
            {
                city: "Bhokardan",
                state: "Maharashtra"
            },
            {
                city: "Bhor",
                state: "Maharashtra"
            },
            {
                city: "Bhum",
                state: "Maharashtra"
            },
            {
                city: "Bhusawal",
                state: "Maharashtra"
            },
            {
                city: "Bid",
                state: "Maharashtra"
            },
            {
                city: "Biloli",
                state: "Maharashtra"
            },
            {
                city: "Birwadi",
                state: "Maharashtra"
            },
            {
                city: "Boisar",
                state: "Maharashtra"
            },
            {
                city: "Brahmapuri",
                state: "Maharashtra"
            },
            {
                city: "Budhgaon",
                state: "Maharashtra"
            },
            {
                city: "Buldana",
                state: "Maharashtra"
            },
            {
                city: "Chakan",
                state: "Maharashtra"
            },
            {
                city: "Chalisgaon",
                state: "Maharashtra"
            },
            {
                city: "Chandrapur",
                state: "Maharashtra"
            },
            {
                city: "Chandur",
                state: "Maharashtra"
            },
            {
                city: "Chandur",
                state: "Maharashtra"
            },
            {
                city: "Chandurbazar",
                state: "Maharashtra"
            },
            {
                city: "Chicholi",
                state: "Maharashtra"
            },
            {
                city: "Chikhaldara",
                state: "Maharashtra"
            },
            {
                city: "Chikhli",
                state: "Maharashtra"
            },
            {
                city: "Chinchani",
                state: "Maharashtra"
            },
            {
                city: "Chiplun",
                state: "Maharashtra"
            },
            {
                city: "Chopda",
                state: "Maharashtra"
            },
            {
                city: "Dahanu",
                state: "Maharashtra"
            },
            {
                city: "Dapoli Camp",
                state: "Maharashtra"
            },
            {
                city: "Darwha",
                state: "Maharashtra"
            },
            {
                city: "Daryapur Banosa",
                state: "Maharashtra"
            },
            {
                city: "Dattapur Dhamangaon",
                state: "Maharashtra"
            },
            {
                city: "Daund",
                state: "Maharashtra"
            },
            {
                city: "Davlameti",
                state: "Maharashtra"
            },
            {
                city: "Deglur",
                state: "Maharashtra"
            },
            {
                city: "Dehu",
                state: "Maharashtra"
            },
            {
                city: "Dehu Road",
                state: "Maharashtra"
            },
            {
                city: "Deolali",
                state: "Maharashtra"
            },
            {
                city: "Deolali Pravara",
                state: "Maharashtra"
            },
            {
                city: "Deoli",
                state: "Maharashtra"
            },
            {
                city: "Desaiganj",
                state: "Maharashtra"
            },
            {
                city: "Deulgaon Raja",
                state: "Maharashtra"
            },
            {
                city: "Dewhadi",
                state: "Maharashtra"
            },
            {
                city: "Dharangaon",
                state: "Maharashtra"
            },
            {
                city: "Dharmabad",
                state: "Maharashtra"
            },
            {
                city: "Dharur",
                state: "Maharashtra"
            },
            {
                city: "Dhatau",
                state: "Maharashtra"
            },
            {
                city: "Dhule",
                state: "Maharashtra"
            },
            {
                city: "Digdoh",
                state: "Maharashtra"
            },
            {
                city: "Digras",
                state: "Maharashtra"
            },
            {
                city: "Dondaicha-Warwade",
                state: "Maharashtra"
            },
            {
                city: "Dudhani",
                state: "Maharashtra"
            },
            {
                city: "Durgapur",
                state: "Maharashtra"
            },
            {
                city: "Dyane",
                state: "Maharashtra"
            },
            {
                city: "Eklahare",
                state: "Maharashtra"
            },
            {
                city: "Erandol",
                state: "Maharashtra"
            },
            {
                city: "Faizpur",
                state: "Maharashtra"
            },
            {
                city: "Gadchiroli",
                state: "Maharashtra"
            },
            {
                city: "Gadhinglaj",
                state: "Maharashtra"
            },
            {
                city: "Gandhinagar",
                state: "Maharashtra"
            },
            {
                city: "Ganeshpur",
                state: "Maharashtra"
            },
            {
                city: "Gangakhed",
                state: "Maharashtra"
            },
            {
                city: "Gangapur",
                state: "Maharashtra"
            },
            {
                city: "Georai",
                state: "Maharashtra"
            },
            {
                city: "Ghatanji",
                state: "Maharashtra"
            },
            {
                city: "Ghoti Budruk",
                state: "Maharashtra"
            },
            {
                city: "Ghugus",
                state: "Maharashtra"
            },
            {
                city: "Ghulewadi",
                state: "Maharashtra"
            },
            {
                city: "Godoli",
                state: "Maharashtra"
            },
            {
                city: "Gokhivare",
                state: "Maharashtra"
            },
            {
                city: "Gondiya",
                state: "Maharashtra"
            },
            {
                city: "Goregaon",
                state: "Maharashtra"
            },
            {
                city: "Greater Mumbai",
                state: "Maharashtra"
            },
            {
                city: "Guhagar",
                state: "Maharashtra"
            },
            {
                city: "Hadgaon",
                state: "Maharashtra"
            },
            {
                city: "Hinganghat",
                state: "Maharashtra"
            },
            {
                city: "Hingoli",
                state: "Maharashtra"
            },
            {
                city: "Hupari",
                state: "Maharashtra"
            },
            {
                city: "Ichalkaranji",
                state: "Maharashtra"
            },
            {
                city: "Igatpuri",
                state: "Maharashtra"
            },
            {
                city: "Indapur",
                state: "Maharashtra"
            },
            {
                city: "Jalgaon",
                state: "Maharashtra"
            },
            {
                city: "Jalgaon",
                state: "Maharashtra"
            },
            {
                city: "Jalgaon (Jamod)",
                state: "Maharashtra"
            },
            {
                city: "Jalna",
                state: "Maharashtra"
            },
            {
                city: "Jamkhed",
                state: "Maharashtra"
            },
            {
                city: "Jawhar",
                state: "Maharashtra"
            },
            {
                city: "Jaysingpur",
                state: "Maharashtra"
            },
            {
                city: "Jejuri",
                state: "Maharashtra"
            },
            {
                city: "Jintur",
                state: "Maharashtra"
            },
            {
                city: "Junnar",
                state: "Maharashtra"
            },
            {
                city: "Kabnur",
                state: "Maharashtra"
            },
            {
                city: "Kagal",
                state: "Maharashtra"
            },
            {
                city: "Kalamb",
                state: "Maharashtra"
            },
            {
                city: "Kalambe Turf Thane",
                state: "Maharashtra"
            },
            {
                city: "Kalameshwar",
                state: "Maharashtra"
            },
            {
                city: "Kalamnuri",
                state: "Maharashtra"
            },
            {
                city: "Kalundre",
                state: "Maharashtra"
            },
            {
                city: "Kalyan-Dombivali",
                state: "Maharashtra"
            },
            {
                city: "Kamptee",
                state: "Maharashtra"
            },
            {
                city: "Kamptee",
                state: "Maharashtra"
            },
            {
                city: "Kandari",
                state: "Maharashtra"
            },
            {
                city: "Kandhar",
                state: "Maharashtra"
            },
            {
                city: "Kandri",
                state: "Maharashtra"
            },
            {
                city: "Kandri",
                state: "Maharashtra"
            },
            {
                city: "Kanhan (Pipri)",
                state: "Maharashtra"
            },
            {
                city: "Kankavli",
                state: "Maharashtra"
            },
            {
                city: "Kannad",
                state: "Maharashtra"
            },
            {
                city: "Karad",
                state: "Maharashtra"
            },
            {
                city: "Karanja",
                state: "Maharashtra"
            },
            {
                city: "Karanje Turf Satara",
                state: "Maharashtra"
            },
            {
                city: "Karivali",
                state: "Maharashtra"
            },
            {
                city: "Karjat",
                state: "Maharashtra"
            },
            {
                city: "Karmala",
                state: "Maharashtra"
            },
            {
                city: "Kasara Budruk",
                state: "Maharashtra"
            },
            {
                city: "Katai",
                state: "Maharashtra"
            },
            {
                city: "Katkar",
                state: "Maharashtra"
            },
            {
                city: "Katol",
                state: "Maharashtra"
            },
            {
                city: "Kegaon",
                state: "Maharashtra"
            },
            {
                city: "Khadkale",
                state: "Maharashtra"
            },
            {
                city: "Khamgaon",
                state: "Maharashtra"
            },
            {
                city: "Khapa",
                state: "Maharashtra"
            },
            {
                city: "Khed",
                state: "Maharashtra"
            },
            {
                city: "Khed",
                state: "Maharashtra"
            },
            {
                city: "Kherdi",
                state: "Maharashtra"
            },
            {
                city: "Khoni",
                state: "Maharashtra"
            },
            {
                city: "Khopoli",
                state: "Maharashtra"
            },
            {
                city: "Khuldabad",
                state: "Maharashtra"
            },
            {
                city: "Kinwat",
                state: "Maharashtra"
            },
            {
                city: "Kirkee",
                state: "Maharashtra"
            },
            {
                city: "Kodoli",
                state: "Maharashtra"
            },
            {
                city: "Kolhapur",
                state: "Maharashtra"
            },
            {
                city: "Kon",
                state: "Maharashtra"
            },
            {
                city: "Kondumal",
                state: "Maharashtra"
            },
            {
                city: "Kopargaon",
                state: "Maharashtra"
            },
            {
                city: "Kopharad",
                state: "Maharashtra"
            },
            {
                city: "Korochi",
                state: "Maharashtra"
            },
            {
                city: "Kudal",
                state: "Maharashtra"
            },
            {
                city: "Kundalwadi",
                state: "Maharashtra"
            },
            {
                city: "Kurduvadi",
                state: "Maharashtra"
            },
            {
                city: "Kurundvad",
                state: "Maharashtra"
            },
            {
                city: "Kusgaon Budruk",
                state: "Maharashtra"
            },
            {
                city: "Lanja",
                state: "Maharashtra"
            },
            {
                city: "Lasalgaon",
                state: "Maharashtra"
            },
            {
                city: "Latur",
                state: "Maharashtra"
            },
            {
                city: "Loha",
                state: "Maharashtra"
            },
            {
                city: "Lonar",
                state: "Maharashtra"
            },
            {
                city: "Lonavala",
                state: "Maharashtra"
            },
            {
                city: "Madhavnagar",
                state: "Maharashtra"
            },
            {
                city: "Mahabaleshwar",
                state: "Maharashtra"
            },
            {
                city: "Mahad",
                state: "Maharashtra"
            },
            {
                city: "Mahadula",
                state: "Maharashtra"
            },
            {
                city: "Maindargi",
                state: "Maharashtra"
            },
            {
                city: "Malegaon",
                state: "Maharashtra"
            },
            {
                city: "Malkapur",
                state: "Maharashtra"
            },
            {
                city: "Malkapur",
                state: "Maharashtra"
            },
            {
                city: "Malkapur",
                state: "Maharashtra"
            },
            {
                city: "Malwan",
                state: "Maharashtra"
            },
            {
                city: "Manadur",
                state: "Maharashtra"
            },
            {
                city: "Manchar",
                state: "Maharashtra"
            },
            {
                city: "Mangalvedhe",
                state: "Maharashtra"
            },
            {
                city: "Mangrulpir",
                state: "Maharashtra"
            },
            {
                city: "Manjlegaon",
                state: "Maharashtra"
            },
            {
                city: "Manmad",
                state: "Maharashtra"
            },
            {
                city: "Manor",
                state: "Maharashtra"
            },
            {
                city: "Mansar",
                state: "Maharashtra"
            },
            {
                city: "Manwath",
                state: "Maharashtra"
            },
            {
                city: "Matheran",
                state: "Maharashtra"
            },
            {
                city: "Mehkar",
                state: "Maharashtra"
            },
            {
                city: "Mhasla",
                state: "Maharashtra"
            },
            {
                city: "Mhaswad",
                state: "Maharashtra"
            },
            {
                city: "Mira-Bhayandar",
                state: "Maharashtra"
            },
            {
                city: "Mohpa",
                state: "Maharashtra"
            },
            {
                city: "Mohpada Alias Wasambe",
                state: "Maharashtra"
            },
            {
                city: "Morshi",
                state: "Maharashtra"
            },
            {
                city: "Mowad",
                state: "Maharashtra"
            },
            {
                city: "Mudkhed",
                state: "Maharashtra"
            },
            {
                city: "Mukhed",
                state: "Maharashtra"
            },
            {
                city: "Mul",
                state: "Maharashtra"
            },
            {
                city: "Murbad",
                state: "Maharashtra"
            },
            {
                city: "Murgud",
                state: "Maharashtra"
            },
            {
                city: "Murtijapur",
                state: "Maharashtra"
            },
            {
                city: "Murud",
                state: "Maharashtra"
            },
            {
                city: "Murum",
                state: "Maharashtra"
            },
            {
                city: "Mumbai",
                state: "Maharashtra"
            },
            {
                city: "Nachane",
                state: "Maharashtra"
            },
            {
                city: "Nagapur",
                state: "Maharashtra"
            },
            {
                city: "Nagardeole",
                state: "Maharashtra"
            },
            {
                city: "Nagothana",
                state: "Maharashtra"
            },
            {
                city: "Nagpur",
                state: "Maharashtra"
            },
            {
                city: "Nakoda",
                state: "Maharashtra"
            },
            {
                city: "Nala Sopara",
                state: "Maharashtra"
            },
            {
                city: "Naldurg",
                state: "Maharashtra"
            },
            {
                city: "Nanded-Waghala",
                state: "Maharashtra"
            },
            {
                city: "Nandgaon",
                state: "Maharashtra"
            },
            {
                city: "Nandura",
                state: "Maharashtra"
            },
            {
                city: "Nandurbar",
                state: "Maharashtra"
            },
            {
                city: "Narkhed",
                state: "Maharashtra"
            },
            {
                city: "Nashik",
                state: "Maharashtra"
            },
            {
                city: "Navghar-Manikpur",
                state: "Maharashtra"
            },
            {
                city: "Navi Mumbai",
                state: "Maharashtra"
            },
            {
                city: "Navi Mumbai (Panvel, Raigarh)",
                state: "Maharashtra"
            },
            {
                city: "Nawapur",
                state: "Maharashtra"
            },
            {
                city: "Neral",
                state: "Maharashtra"
            },
            {
                city: "Nilanga",
                state: "Maharashtra"
            },
            {
                city: "Nildoh",
                state: "Maharashtra"
            },
            {
                city: "Nimbhore Budruk",
                state: "Maharashtra"
            },
            {
                city: "Osmanabad",
                state: "Maharashtra"
            },
            {
                city: "Ozar",
                state: "Maharashtra"
            },
            {
                city: "Pachgaon",
                state: "Maharashtra"
            },
            {
                city: "Pachora",
                state: "Maharashtra"
            },
            {
                city: "Padagha",
                state: "Maharashtra"
            },
            {
                city: "Paithan",
                state: "Maharashtra"
            },
            {
                city: "Palghar",
                state: "Maharashtra"
            },
            {
                city: "Pali",
                state: "Maharashtra"
            },
            {
                city: "Panchgani",
                state: "Maharashtra"
            },
            {
                city: "Pandharkaoda",
                state: "Maharashtra"
            },
            {
                city: "Pandharpur",
                state: "Maharashtra"
            },
            {
                city: "Pandharpur",
                state: "Maharashtra"
            },
            {
                city: "Panhala",
                state: "Maharashtra"
            },
            {
                city: "Panvel",
                state: "Maharashtra"
            },
            {
                city: "Paranda",
                state: "Maharashtra"
            },
            {
                city: "Parbhani",
                state: "Maharashtra"
            },
            {
                city: "Parli",
                state: "Maharashtra"
            },
            {
                city: "Parola",
                state: "Maharashtra"
            },
            {
                city: "Partur",
                state: "Maharashtra"
            },
            {
                city: "Pasthal",
                state: "Maharashtra"
            },
            {
                city: "Patan",
                state: "Maharashtra"
            },
            {
                city: "Pathardi",
                state: "Maharashtra"
            },
            {
                city: "Pathri",
                state: "Maharashtra"
            },
            {
                city: "Patur",
                state: "Maharashtra"
            },
            {
                city: "Pauni",
                state: "Maharashtra"
            },
            {
                city: "Pen",
                state: "Maharashtra"
            },
            {
                city: "Peth Umri",
                state: "Maharashtra"
            },
            {
                city: "Phaltan",
                state: "Maharashtra"
            },
            {
                city: "Pimpri Chinchwad",
                state: "Maharashtra"
            },
            {
                city: "Poladpur",
                state: "Maharashtra"
            },
            {
                city: "Pulgaon",
                state: "Maharashtra"
            },
            {
                city: "Pune",
                state: "Maharashtra"
            },
            {
                city: "Pune",
                state: "Maharashtra"
            },
            {
                city: "Purna",
                state: "Maharashtra"
            },
            {
                city: "Purushottamnagar",
                state: "Maharashtra"
            },
            {
                city: "Pusad",
                state: "Maharashtra"
            },
            {
                city: "Rahimatpur",
                state: "Maharashtra"
            },
            {
                city: "Rahta Pimplas",
                state: "Maharashtra"
            },
            {
                city: "Rahuri",
                state: "Maharashtra"
            },
            {
                city: "Rajapur",
                state: "Maharashtra"
            },
            {
                city: "Rajgurunagar (Khed)",
                state: "Maharashtra"
            },
            {
                city: "Rajur",
                state: "Maharashtra"
            },
            {
                city: "Rajura",
                state: "Maharashtra"
            },
            {
                city: "Ramtek",
                state: "Maharashtra"
            },
            {
                city: "Ratnagiri",
                state: "Maharashtra"
            },
            {
                city: "Raver",
                state: "Maharashtra"
            },
            {
                city: "Risod",
                state: "Maharashtra"
            },
            {
                city: "Roha Ashtami",
                state: "Maharashtra"
            },
            {
                city: "Sailu",
                state: "Maharashtra"
            },
            {
                city: "Sandor",
                state: "Maharashtra"
            },
            {
                city: "Sangamner",
                state: "Maharashtra"
            },
            {
                city: "Sangli-Miraj & Kupwad",
                state: "Maharashtra"
            },
            {
                city: "Sangole",
                state: "Maharashtra"
            },
            {
                city: "Sasti",
                state: "Maharashtra"
            },
            {
                city: "Sasvad",
                state: "Maharashtra"
            },
            {
                city: "Satana",
                state: "Maharashtra"
            },
            {
                city: "Satara",
                state: "Maharashtra"
            },
            {
                city: "Savda",
                state: "Maharashtra"
            },
            {
                city: "Savner",
                state: "Maharashtra"
            },
            {
                city: "Sawantwadi",
                state: "Maharashtra"
            },
            {
                city: "Sawari Jawharnagar",
                state: "Maharashtra"
            },
            {
                city: "Shahade",
                state: "Maharashtra"
            },
            {
                city: "Shahapur",
                state: "Maharashtra"
            },
            {
                city: "Shegaon",
                state: "Maharashtra"
            },
            {
                city: "Shelar",
                state: "Maharashtra"
            },
            {
                city: "Shendurjana",
                state: "Maharashtra"
            },
            {
                city: "Shirdi",
                state: "Maharashtra"
            },
            {
                city: "Shirpur-Warwade",
                state: "Maharashtra"
            },
            {
                city: "Shirur",
                state: "Maharashtra"
            },
            {
                city: "Shirwal",
                state: "Maharashtra"
            },
            {
                city: "Shivajinagar",
                state: "Maharashtra"
            },
            {
                city: "Shivatkar (Nira)",
                state: "Maharashtra"
            },
            {
                city: "Shrigonda",
                state: "Maharashtra"
            },
            {
                city: "Shrirampur",
                state: "Maharashtra"
            },
            {
                city: "Shrirampur(Rural)",
                state: "Maharashtra"
            },
            {
                city: "Shrivardhan",
                state: "Maharashtra"
            },
            {
                city: "Sillewada",
                state: "Maharashtra"
            },
            {
                city: "Sillod",
                state: "Maharashtra"
            },
            {
                city: "Sindi",
                state: "Maharashtra"
            },
            {
                city: "Sindi Turf Hindnagar",
                state: "Maharashtra"
            },
            {
                city: "Sindkhed Raja",
                state: "Maharashtra"
            },
            {
                city: "Singnapur",
                state: "Maharashtra"
            },
            {
                city: "Sinnar",
                state: "Maharashtra"
            },
            {
                city: "Solapur",
                state: "Maharashtra"
            },
            {
                city: "Sonegaon (Nipani)",
                state: "Maharashtra"
            },
            {
                city: "Sonpeth",
                state: "Maharashtra"
            },
            {
                city: "Soyagaon",
                state: "Maharashtra"
            },
            {
                city: "Surgana",
                state: "Maharashtra"
            },
            {
                city: "Talegaon Dabhade",
                state: "Maharashtra"
            },
            {
                city: "Talode",
                state: "Maharashtra"
            },
            {
                city: "Taloje Panchnad",
                state: "Maharashtra"
            },
            {
                city: "Tarapur",
                state: "Maharashtra"
            },
            {
                city: "Tasgaon",
                state: "Maharashtra"
            },
            {
                city: "Tathavade",
                state: "Maharashtra"
            },
            {
                city: "Tekadi",
                state: "Maharashtra"
            },
            {
                city: "Telhara",
                state: "Maharashtra"
            },
            {
                city: "Thane",
                state: "Maharashtra"
            },
            {
                city: "Tirora",
                state: "Maharashtra"
            },
            {
                city: "Totaladoh",
                state: "Maharashtra"
            },
            {
                city: "Trimbak",
                state: "Maharashtra"
            },
            {
                city: "Tuljapur",
                state: "Maharashtra"
            },
            {
                city: "Tumsar",
                state: "Maharashtra"
            },
            {
                city: "Uchgaon",
                state: "Maharashtra"
            },
            {
                city: "Udgir",
                state: "Maharashtra"
            },
            {
                city: "Ulhasnagar",
                state: "Maharashtra"
            },
            {
                city: "Umarga",
                state: "Maharashtra"
            },
            {
                city: "Umarkhed",
                state: "Maharashtra"
            },
            {
                city: "Umarsara",
                state: "Maharashtra"
            },
            {
                city: "Umbar Pada Nandade",
                state: "Maharashtra"
            },
            {
                city: "Umred",
                state: "Maharashtra"
            },
            {
                city: "Umri Pragane Balapur",
                state: "Maharashtra"
            },
            {
                city: "Uran",
                state: "Maharashtra"
            },
            {
                city: "Uran Islampur",
                state: "Maharashtra"
            },
            {
                city: "Utekhol",
                state: "Maharashtra"
            },
            {
                city: "Vada",
                state: "Maharashtra"
            },
            {
                city: "Vadgaon",
                state: "Maharashtra"
            },
            {
                city: "Vadgaon Kasba",
                state: "Maharashtra"
            },
            {
                city: "Vaijapur",
                state: "Maharashtra"
            },
            {
                city: "Vanvadi (Sadashivgad)",
                state: "Maharashtra"
            },
            {
                city: "Vasai",
                state: "Maharashtra"
            },
            {
                city: "Vasantnagar",
                state: "Maharashtra"
            },
            {
                city: "Vashind",
                state: "Maharashtra"
            },
            {
                city: "Vengurla",
                state: "Maharashtra"
            },
            {
                city: "Virar",
                state: "Maharashtra"
            },
            {
                city: "Vita",
                state: "Maharashtra"
            },
            {
                city: "Wadgaon Road",
                state: "Maharashtra"
            },
            {
                city: "Wadi",
                state: "Maharashtra"
            },
            {
                city: "Waghapur",
                state: "Maharashtra"
            },
            {
                city: "Wai",
                state: "Maharashtra"
            },
            {
                city: "Wajegaon",
                state: "Maharashtra"
            },
            {
                city: "Walani",
                state: "Maharashtra"
            },
            {
                city: "Waliv",
                state: "Maharashtra"
            },
            {
                city: "Wanadongri",
                state: "Maharashtra"
            },
            {
                city: "Wani",
                state: "Maharashtra"
            },
            {
                city: "Wardha",
                state: "Maharashtra"
            },
            {
                city: "Warora",
                state: "Maharashtra"
            },
            {
                city: "Warud",
                state: "Maharashtra"
            },
            {
                city: "Washim",
                state: "Maharashtra"
            },
            {
                city: "Yavatmal",
                state: "Maharashtra"
            },
            {
                city: "Yawal",
                state: "Maharashtra"
            },
            {
                city: "Yerkheda",
                state: "Maharashtra"
            },
            {
                city: "Yevla",
                state: "Maharashtra"
            },
            {
                city: "Andro",
                state: "Manipur"
            },
            {
                city: "Bishnupur",
                state: "Manipur"
            },
            {
                city: "Heriok",
                state: "Manipur"
            },
            {
                city: "Imphal",
                state: "Manipur"
            },
            {
                city: "Jiribam",
                state: "Manipur"
            },
            {
                city: "Kakching",
                state: "Manipur"
            },
            {
                city: "Kakching Khunou",
                state: "Manipur"
            },
            {
                city: "Khongman",
                state: "Manipur"
            },
            {
                city: "Kumbi",
                state: "Manipur"
            },
            {
                city: "Kwakta",
                state: "Manipur"
            },
            {
                city: "Lamai",
                state: "Manipur"
            },
            {
                city: "Lamjaotongba",
                state: "Manipur"
            },
            {
                city: "Lamshang",
                state: "Manipur"
            },
            {
                city: "Lilong (Imphal West)",
                state: "Manipur"
            },
            {
                city: "Lilong (Thoubal)",
                state: "Manipur"
            },
            {
                city: "Mayang Imphal",
                state: "Manipur"
            },
            {
                city: "Moirang",
                state: "Manipur"
            },
            {
                city: "Moreh",
                state: "Manipur"
            },
            {
                city: "Nambol",
                state: "Manipur"
            },
            {
                city: "Naoriya Pakhanglakpa",
                state: "Manipur"
            },
            {
                city: "Ningthoukhong",
                state: "Manipur"
            },
            {
                city: "Oinam",
                state: "Manipur"
            },
            {
                city: "Porompat",
                state: "Manipur"
            },
            {
                city: "Samurou",
                state: "Manipur"
            },
            {
                city: "Sekmai Bazar",
                state: "Manipur"
            },
            {
                city: "Sikhong Sekmai",
                state: "Manipur"
            },
            {
                city: "Sugnu",
                state: "Manipur"
            },
            {
                city: "Thongkhong Laxmi Bazar",
                state: "Manipur"
            },
            {
                city: "Thoubal",
                state: "Manipur"
            },
            {
                city: "Torban (Khetri Leikai)",
                state: "Manipur"
            },
            {
                city: "Wangjing",
                state: "Manipur"
            },
            {
                city: "Wangoi",
                state: "Manipur"
            },
            {
                city: "Yairipok",
                state: "Manipur"
            },
            {
                city: "Baghmara",
                state: "Meghalaya"
            },
            {
                city: "Cherapunjee",
                state: "Meghalaya"
            },
            {
                city: "Jawai",
                state: "Meghalaya"
            },
            {
                city: "Shillong",
                state: "Meghalaya"
            },
            {
                city: "Tura",
                state: "Meghalaya"
            },
            {
                city: "Madanrting",
                state: "Meghalaya"
            },
            {
                city: "Mairang",
                state: "Meghalaya"
            },
            {
                city: "Mawlai",
                state: "Meghalaya"
            },
            {
                city: "Nongmynsong",
                state: "Meghalaya"
            },
            {
                city: "Nongpoh",
                state: "Meghalaya"
            },
            {
                city: "Nongstoin",
                state: "Meghalaya"
            },
            {
                city: "Nongthymmai",
                state: "Meghalaya"
            },
            {
                city: "Pynthorumkhrah",
                state: "Meghalaya"
            },
            {
                city: "Resubelpara",
                state: "Meghalaya"
            },
            {
                city: "Shillong Cantt.",
                state: "Meghalaya"
            },
            {
                city: "Williamnagar",
                state: "Meghalaya"
            },
            {
                city: "Aizawl",
                state: "Mizoram"
            },
            {
                city: "Bairabi",
                state: "Mizoram"
            },
            {
                city: "Biate",
                state: "Mizoram"
            },
            {
                city: "Champhai",
                state: "Mizoram"
            },
            {
                city: "Darlawn",
                state: "Mizoram"
            },
            {
                city: "Hnahthial",
                state: "Mizoram"
            },
            {
                city: "Khawhai",
                state: "Mizoram"
            },
            {
                city: "Khawzawl",
                state: "Mizoram"
            },
            {
                city: "Kolasib",
                state: "Mizoram"
            },
            {
                city: "Lengpui",
                state: "Mizoram"
            },
            {
                city: "Lunglei",
                state: "Mizoram"
            },
            {
                city: "Mamit",
                state: "Mizoram"
            },
            {
                city: "N. Vanlaiphai",
                state: "Mizoram"
            },
            {
                city: "N.Kawnpui",
                state: "Mizoram"
            },
            {
                city: "Saiha",
                state: "Mizoram"
            },
            {
                city: "Sairang",
                state: "Mizoram"
            },
            {
                city: "Saitual",
                state: "Mizoram"
            },
            {
                city: "Serchhip",
                state: "Mizoram"
            },
            {
                city: "Thenzawl",
                state: "Mizoram"
            },
            {
                city: "Tlabung",
                state: "Mizoram"
            },
            {
                city: "Vairengte",
                state: "Mizoram"
            },
            {
                city: "Zawlnuam",
                state: "Mizoram"
            },
            {
                city: "Chumukedima",
                state: "Nagaland"
            },
            {
                city: "Dimapur",
                state: "Nagaland"
            },
            {
                city: "Kohima",
                state: "Nagaland"
            },
            {
                city: "Mokokchung",
                state: "Nagaland"
            },
            {
                city: "Mon",
                state: "Nagaland"
            },
            {
                city: "Phek",
                state: "Nagaland"
            },
            {
                city: "Tuensang",
                state: "Nagaland"
            },
            {
                city: "Wokha",
                state: "Nagaland"
            },
            {
                city: "Zunheboto",
                state: "Nagaland"
            },
            {
                city: "Anandapur",
                state: "Orissa"
            },
            {
                city: "Anugul",
                state: "Orissa"
            },
            {
                city: "Asika",
                state: "Orissa"
            },
            {
                city: "Athagad",
                state: "Orissa"
            },
            {
                city: "Athmallik",
                state: "Orissa"
            },
            {
                city: "Balagoda (Bolani)",
                state: "Orissa"
            },
            {
                city: "Balimela",
                state: "Orissa"
            },
            {
                city: "Balugaon",
                state: "Orissa"
            },
            {
                city: "Banapur",
                state: "Orissa"
            },
            {
                city: "Bangura",
                state: "Orissa"
            },
            {
                city: "Banki",
                state: "Orissa"
            },
            {
                city: "Barapali",
                state: "Orissa"
            },
            {
                city: "Basudebpur",
                state: "Orissa"
            },
            {
                city: "Baudhgarh",
                state: "Orissa"
            },
            {
                city: "Belagachhia",
                state: "Orissa"
            },
            {
                city: "Bellaguntha",
                state: "Orissa"
            },
            {
                city: "Belpahar",
                state: "Orissa"
            },
            {
                city: "Bhanjanagar",
                state: "Orissa"
            },
            {
                city: "Bhuban",
                state: "Orissa"
            },
            {
                city: "Bhubaneswar",
                state: "Orissa"
            },
            {
                city: "Binika",
                state: "Orissa"
            },
            {
                city: "Bishama Katek",
                state: "Orissa"
            },
            {
                city: "Brahmapur",
                state: "Orissa"
            },
            {
                city: "Buguda",
                state: "Orissa"
            },
            {
                city: "Burla",
                state: "Orissa"
            },
            {
                city: "Champua",
                state: "Orissa"
            },
            {
                city: "Chandapur",
                state: "Orissa"
            },
            {
                city: "Chandili",
                state: "Orissa"
            },
            {
                city: "Charibatia",
                state: "Orissa"
            },
            {
                city: "Chhatrapur",
                state: "Orissa"
            },
            {
                city: "Chikiti",
                state: "Orissa"
            },
            {
                city: "Cuttack",
                state: "Orissa"
            },
            {
                city: "Dadhapatna",
                state: "Orissa"
            },
            {
                city: "Daitari",
                state: "Orissa"
            },
            {
                city: "Damanjodi",
                state: "Orissa"
            },
            {
                city: "Deracolliery Township",
                state: "Orissa"
            },
            {
                city: "Dhamanagar",
                state: "Orissa"
            },
            {
                city: "Digapahandi",
                state: "Orissa"
            },
            {
                city: "Dungamal",
                state: "Orissa"
            },
            {
                city: "G. Udayagiri",
                state: "Orissa"
            },
            {
                city: "Ganjam",
                state: "Orissa"
            },
            {
                city: "Ghantapada",
                state: "Orissa"
            },
            {
                city: "Gopalpur",
                state: "Orissa"
            },
            {
                city: "Gudari",
                state: "Orissa"
            },
            {
                city: "Gunupur",
                state: "Orissa"
            },
            {
                city: "Hatibandha",
                state: "Orissa"
            },
            {
                city: "Hinjilicut",
                state: "Orissa"
            },
            {
                city: "Hirakud",
                state: "Orissa"
            },
            {
                city: "Jagatsinghapur",
                state: "Orissa"
            },
            {
                city: "Jalda",
                state: "Orissa"
            },
            {
                city: "Jaleswar",
                state: "Orissa"
            },
            {
                city: "Jhumpura",
                state: "Orissa"
            },
            {
                city: "Junagarh",
                state: "Orissa"
            },
            {
                city: "Kamakshyanagar",
                state: "Orissa"
            },
            {
                city: "Kantabanji",
                state: "Orissa"
            },
            {
                city: "Kantilo",
                state: "Orissa"
            },
            {
                city: "Karanjia",
                state: "Orissa"
            },
            {
                city: "Kashinagara",
                state: "Orissa"
            },
            {
                city: "Kavisuryanagar",
                state: "Orissa"
            },
            {
                city: "Kesinga",
                state: "Orissa"
            },
            {
                city: "Khaliapali",
                state: "Orissa"
            },
            {
                city: "Khalikote",
                state: "Orissa"
            },
            {
                city: "Khandapada",
                state: "Orissa"
            },
            {
                city: "Khariar",
                state: "Orissa"
            },
            {
                city: "Khariar Road",
                state: "Orissa"
            },
            {
                city: "Khatiguda",
                state: "Orissa"
            },
            {
                city: "Khordha",
                state: "Orissa"
            },
            {
                city: "Kochinda",
                state: "Orissa"
            },
            {
                city: "Kodala",
                state: "Orissa"
            },
            {
                city: "Konark",
                state: "Orissa"
            },
            {
                city: "Koraput",
                state: "Orissa"
            },
            {
                city: "Kotpad",
                state: "Orissa"
            },
            {
                city: "Lattikata",
                state: "Orissa"
            },
            {
                city: "Balangir",
                state: "Orissa"
            },
            {
                city: "Baleshwar",
                state: "Orissa"
            },
            {
                city: "Barbil",
                state: "Orissa"
            },
            {
                city: "Bargarh",
                state: "Orissa"
            },
            {
                city: "Baripada",
                state: "Orissa"
            },
            {
                city: "Bhadrak",
                state: "Orissa"
            },
            {
                city: "Bhawanipatna",
                state: "Orissa"
            },
            {
                city: "Biramitrapur",
                state: "Orissa"
            },
            {
                city: "Brajarajnagar",
                state: "Orissa"
            },
            {
                city: "Byasanagar",
                state: "Orissa"
            },
            {
                city: "Choudwar",
                state: "Orissa"
            },
            {
                city: "Debagarh",
                state: "Orissa"
            },
            {
                city: "Dhenkanal",
                state: "Orissa"
            },
            {
                city: "Jajapur",
                state: "Orissa"
            },
            {
                city: "Jatani",
                state: "Orissa"
            },
            {
                city: "Jeypur",
                state: "Orissa"
            },
            {
                city: "Jharsuguda",
                state: "Orissa"
            },
            {
                city: "Joda",
                state: "Orissa"
            },
            {
                city: "Kendrapara",
                state: "Orissa"
            },
            {
                city: "Kendujhar",
                state: "Orissa"
            },
            {
                city: "Makundapur",
                state: "Orissa"
            },
            {
                city: "Nabarangapur",
                state: "Orissa"
            },
            {
                city: "Parlakhemundi",
                state: "Orissa"
            },
            {
                city: "Puri",
                state: "Orissa"
            },
            {
                city: "Rajagangapur",
                state: "Orissa"
            },
            {
                city: "Malkangiri",
                state: "Orissa"
            },
            {
                city: "Raurkela",
                state: "Orissa"
            },
            {
                city: "Rayagada",
                state: "Orissa"
            },
            {
                city: "Sambalpur",
                state: "Orissa"
            },
            {
                city: "Sonapur",
                state: "Orissa"
            },
            {
                city: "Sundargarh",
                state: "Orissa"
            },
            {
                city: "Talcher",
                state: "Orissa"
            },
            {
                city: "Mukhiguda",
                state: "Orissa"
            },
            {
                city: "NALCO",
                state: "Orissa"
            },
            {
                city: "Nayagarh",
                state: "Orissa"
            },
            {
                city: "Nilagiri",
                state: "Orissa"
            },
            {
                city: "Nimapada",
                state: "Orissa"
            },
            {
                city: "Nuapatna",
                state: "Orissa"
            },
            {
                city: "OCL Industrialship",
                state: "Orissa"
            },
            {
                city: "Padmapur",
                state: "Orissa"
            },
            {
                city: "Panposh",
                state: "Orissa"
            },
            {
                city: "Paradip",
                state: "Orissa"
            },
            {
                city: "Patnagarh",
                state: "Orissa"
            },
            {
                city: "Pattamundai",
                state: "Orissa"
            },
            {
                city: "Phulabani",
                state: "Orissa"
            },
            {
                city: "Pipili",
                state: "Orissa"
            },
            {
                city: "Polasara",
                state: "Orissa"
            },
            {
                city: "Pratapsasan",
                state: "Orissa"
            },
            {
                city: "Purusottampur",
                state: "Orissa"
            },
            {
                city: "Rairangpur",
                state: "Orissa"
            },
            {
                city: "Rambha",
                state: "Orissa"
            },
            {
                city: "Raurkela",
                state: "Orissa"
            },
            {
                city: "Redhakhol",
                state: "Orissa"
            },
            {
                city: "Remuna",
                state: "Orissa"
            },
            {
                city: "Soro",
                state: "Orissa"
            },
            {
                city: "Sunabeda",
                state: "Orissa"
            },
            {
                city: "Surada",
                state: "Orissa"
            },
            {
                city: "Talcher",
                state: "Orissa"
            },
            {
                city: "Tarbha",
                state: "Orissa"
            },
            {
                city: "Tensa",
                state: "Orissa"
            },
            {
                city: "Titlagarh",
                state: "Orissa"
            },
            {
                city: "Udala",
                state: "Orissa"
            },
            {
                city: "Umarkote",
                state: "Orissa"
            },
            {
                city: "Kurumbapet",
                state: "Pondicherry"
            },
            {
                city: "Karaikal",
                state: "Pondicherry"
            },
            {
                city: "Mahe",
                state: "Pondicherry"
            },
            {
                city: "Ozhukarai",
                state: "Pondicherry"
            },
            {
                city: "Pondicherry",
                state: "Pondicherry"
            },
            {
                city: "Yanam",
                state: "Pondicherry"
            },
            {
                city: "Abohar",
                state: "Punjab"
            },
            {
                city: "Adampur",
                state: "Punjab"
            },
            {
                city: "Ahmedgarh",
                state: "Punjab"
            },
            {
                city: "Ajnala",
                state: "Punjab"
            },
            {
                city: "Akalgarh",
                state: "Punjab"
            },
            {
                city: "Alawalpur",
                state: "Punjab"
            },
            {
                city: "Amloh",
                state: "Punjab"
            },
            {
                city: "Amritsar",
                state: "Punjab"
            },
            {
                city: "Amritsar Cantt.",
                state: "Punjab"
            },
            {
                city: "Anandpur Sahib",
                state: "Punjab"
            },
            {
                city: "Badhni Kalan",
                state: "Punjab"
            },
            {
                city: "Bagha Purana",
                state: "Punjab"
            },
            {
                city: "Balachaur",
                state: "Punjab"
            },
            {
                city: "Banaur",
                state: "Punjab"
            },
            {
                city: "Banga",
                state: "Punjab"
            },
            {
                city: "Baretta",
                state: "Punjab"
            },
            {
                city: "Bariwala",
                state: "Punjab"
            },
            {
                city: "Barnala",
                state: "Punjab"
            },
            {
                city: "Bassi Pathana",
                state: "Punjab"
            },
            {
                city: "Batala",
                state: "Punjab"
            },
            {
                city: "Bathinda",
                state: "Punjab"
            },
            {
                city: "Begowal",
                state: "Punjab"
            },
            {
                city: "Bhabat",
                state: "Punjab"
            },
            {
                city: "Bhadaur",
                state: "Punjab"
            },
            {
                city: "Bhankharpur",
                state: "Punjab"
            },
            {
                city: "Bharoli Kalan",
                state: "Punjab"
            },
            {
                city: "Bhawanigarh",
                state: "Punjab"
            },
            {
                city: "Bhikhi",
                state: "Punjab"
            },
            {
                city: "Bhikhiwind",
                state: "Punjab"
            },
            {
                city: "Bhisiana",
                state: "Punjab"
            },
            {
                city: "Bhogpur",
                state: "Punjab"
            },
            {
                city: "Bhucho Mandi",
                state: "Punjab"
            },
            {
                city: "Bhulath",
                state: "Punjab"
            },
            {
                city: "Budha Theh",
                state: "Punjab"
            },
            {
                city: "Budhlada",
                state: "Punjab"
            },
            {
                city: "Cheema",
                state: "Punjab"
            },
            {
                city: "Chohal",
                state: "Punjab"
            },
            {
                city: "Daroha",
                state: "Punjab"
            },
            {
                city: "Dasua",
                state: "Punjab"
            },
            {
                city: "Daulatpur",
                state: "Punjab"
            },
            {
                city: "Dera Baba Nanak",
                state: "Punjab"
            },
            {
                city: "Dera Bassi",
                state: "Punjab"
            },
            {
                city: "Dhanaula",
                state: "Punjab"
            },
            {
                city: "Dharamkot",
                state: "Punjab"
            },
            {
                city: "Dhariwal",
                state: "Punjab"
            },
            {
                city: "Dhilwan",
                state: "Punjab"
            },
            {
                city: "Dhuri",
                state: "Punjab"
            },
            {
                city: "Dina Nagar",
                state: "Punjab"
            },
            {
                city: "Dirba",
                state: "Punjab"
            },
            {
                city: "Faridkot",
                state: "Punjab"
            },
            {
                city: "Fatehgarh Churian",
                state: "Punjab"
            },
            {
                city: "Fazilka",
                state: "Punjab"
            },
            {
                city: "Fiozpur",
                state: "Punjab"
            },
            {
                city: "Firozpur Cantt.",
                state: "Punjab"
            },
            {
                city: "Gardhiwala",
                state: "Punjab"
            },
            {
                city: "Garhshanker",
                state: "Punjab"
            },
            {
                city: "Ghagga",
                state: "Punjab"
            },
            {
                city: "Ghanaur",
                state: "Punjab"
            },
            {
                city: "Gidderbaha",
                state: "Punjab"
            },
            {
                city: "Gobindgarh",
                state: "Punjab"
            },
            {
                city: "Goniana",
                state: "Punjab"
            },
            {
                city: "Goraya",
                state: "Punjab"
            },
            {
                city: "Gurdaspur",
                state: "Punjab"
            },
            {
                city: "Guru Har Sahai",
                state: "Punjab"
            },
            {
                city: "Hajipur",
                state: "Punjab"
            },
            {
                city: "Handiaya",
                state: "Punjab"
            },
            {
                city: "Hariana",
                state: "Punjab"
            },
            {
                city: "Hoshiarpur",
                state: "Punjab"
            },
            {
                city: "Hussainpur",
                state: "Punjab"
            },
            {
                city: "Jagraon",
                state: "Punjab"
            },
            {
                city: "Jaitu",
                state: "Punjab"
            },
            {
                city: "Jalalabad",
                state: "Punjab"
            },
            {
                city: "Jalandhar",
                state: "Punjab"
            },
            {
                city: "Jalandhar Cantt.",
                state: "Punjab"
            },
            {
                city: "Jandiala",
                state: "Punjab"
            },
            {
                city: "Jandiala",
                state: "Punjab"
            },
            {
                city: "Jugial",
                state: "Punjab"
            },
            {
                city: "Kalanaur",
                state: "Punjab"
            },
            {
                city: "Kapurthala",
                state: "Punjab"
            },
            {
                city: "Karoran",
                state: "Punjab"
            },
            {
                city: "Kartarpur",
                state: "Punjab"
            },
            {
                city: "Khamanon",
                state: "Punjab"
            },
            {
                city: "Khanauri",
                state: "Punjab"
            },
            {
                city: "Khanna",
                state: "Punjab"
            },
            {
                city: "Kharar",
                state: "Punjab"
            },
            {
                city: "Khem Karan",
                state: "Punjab"
            },
            {
                city: "Kot Fatta",
                state: "Punjab"
            },
            {
                city: "Kot Kapura",
                state: "Punjab"
            },
            {
                city: "Kurali",
                state: "Punjab"
            },
            {
                city: "Lehragaga",
                state: "Punjab"
            },
            {
                city: "Lodhian Khas",
                state: "Punjab"
            },
            {
                city: "Longowal",
                state: "Punjab"
            },
            {
                city: "Ludhiana",
                state: "Punjab"
            },
            {
                city: "Machhiwara",
                state: "Punjab"
            },
            {
                city: "Mahilpur",
                state: "Punjab"
            },
            {
                city: "Majitha",
                state: "Punjab"
            },
            {
                city: "Makhu",
                state: "Punjab"
            },
            {
                city: "Malerkotla",
                state: "Punjab"
            },
            {
                city: "Maloud",
                state: "Punjab"
            },
            {
                city: "Malout",
                state: "Punjab"
            },
            {
                city: "Mansa",
                state: "Punjab"
            },
            {
                city: "Maur",
                state: "Punjab"
            },
            {
                city: "Moga",
                state: "Punjab"
            },
            {
                city: "Moonak",
                state: "Punjab"
            },
            {
                city: "Morinda",
                state: "Punjab"
            },
            {
                city: "Mukerian",
                state: "Punjab"
            },
            {
                city: "Muktsar",
                state: "Punjab"
            },
            {
                city: "Mullanpur Dakha",
                state: "Punjab"
            },
            {
                city: "Mullanpur- Garibdas",
                state: "Punjab"
            },
            {
                city: "Nabha",
                state: "Punjab"
            },
            {
                city: "Nakodar",
                state: "Punjab"
            },
            {
                city: "Nangal",
                state: "Punjab"
            },
            {
                city: "Nawanshahr",
                state: "Punjab"
            },
            {
                city: "Nehon",
                state: "Punjab"
            },
            {
                city: "Noor Mahal",
                state: "Punjab"
            },
            {
                city: "Pathankot",
                state: "Punjab"
            },
            {
                city: "Patiala",
                state: "Punjab"
            },
            {
                city: "Patti",
                state: "Punjab"
            },
            {
                city: "Pattran",
                state: "Punjab"
            },
            {
                city: "Payal",
                state: "Punjab"
            },
            {
                city: "Phagwara",
                state: "Punjab"
            },
            {
                city: "Phillaur",
                state: "Punjab"
            },
            {
                city: "Qadian",
                state: "Punjab"
            },
            {
                city: "Rahon",
                state: "Punjab"
            },
            {
                city: "Raikot",
                state: "Punjab"
            },
            {
                city: "Rajasansi",
                state: "Punjab"
            },
            {
                city: "Rajpura",
                state: "Punjab"
            },
            {
                city: "Raman",
                state: "Punjab"
            },
            {
                city: "Ramdass",
                state: "Punjab"
            },
            {
                city: "Rampura Phul",
                state: "Punjab"
            },
            {
                city: "Rayya",
                state: "Punjab"
            },
            {
                city: "Rupnagar",
                state: "Punjab"
            },
            {
                city: "Rurki Kasba",
                state: "Punjab"
            },
            {
                city: "S.A.S. Nagar (Mohali)",
                state: "Punjab"
            },
            {
                city: "Sahnewal",
                state: "Punjab"
            },
            {
                city: "Samana",
                state: "Punjab"
            },
            {
                city: "Samrala",
                state: "Punjab"
            },
            {
                city: "Sanaur",
                state: "Punjab"
            },
            {
                city: "Sangat",
                state: "Punjab"
            },
            {
                city: "Sangrur",
                state: "Punjab"
            },
            {
                city: "Sansarpur",
                state: "Punjab"
            },
            {
                city: "Sardulgarh",
                state: "Punjab"
            },
            {
                city: "Shahkot",
                state: "Punjab"
            },
            {
                city: "Shamchaurasi",
                state: "Punjab"
            },
            {
                city: "Shekhpura",
                state: "Punjab"
            },
            {
                city: "Sirhind -Fategarh",
                state: "Punjab"
            },
            {
                city: "Sri Hargobindpur",
                state: "Punjab"
            },
            {
                city: "Sujanpur",
                state: "Punjab"
            },
            {
                city: "Sultanpur Lodhi",
                state: "Punjab"
            },
            {
                city: "Sunam",
                state: "Punjab"
            },
            {
                city: "Talwandi Bhai",
                state: "Punjab"
            },
            {
                city: "Talwara",
                state: "Punjab"
            },
            {
                city: "Tappa",
                state: "Punjab"
            },
            {
                city: "Tarn Taran",
                state: "Punjab"
            },
            {
                city: "Urmar Tanda",
                state: "Punjab"
            },
            {
                city: "Zira",
                state: "Punjab"
            },
            {
                city: "Zirakpur",
                state: "Punjab"
            },
            {
                city: "1 SGM",
                state: "Rajasthan"
            },
            {
                city: "3 STR",
                state: "Rajasthan"
            },
            {
                city: "Ajmer",
                state: "Rajasthan"
            },
            {
                city: "Alwar",
                state: "Rajasthan"
            },
            {
                city: "Bakani",
                state: "Rajasthan"
            },
            {
                city: "Basni Belima",
                state: "Rajasthan"
            },
            {
                city: "Beawar",
                state: "Rajasthan"
            },
            {
                city: "Beejoliya Kalan",
                state: "Rajasthan"
            },
            {
                city: "Behat",
                state: "Rajasthan"
            },
            {
                city: "Bhalariya",
                state: "Rajasthan"
            },
            {
                city: "Bharatpur",
                state: "Rajasthan"
            },
            {
                city: "Bhilwara",
                state: "Rajasthan"
            },
            {
                city: "Bhiwadi",
                state: "Rajasthan"
            },
            {
                city: "Bikaner",
                state: "Rajasthan"
            },
            {
                city: "Budhpura",
                state: "Rajasthan"
            },
            {
                city: "Chechat",
                state: "Rajasthan"
            },
            {
                city: "Chhipabarod",
                state: "Rajasthan"
            },
            {
                city: "Dariba",
                state: "Rajasthan"
            },
            {
                city: "Dhariawad",
                state: "Rajasthan"
            },
            {
                city: "Galiakot",
                state: "Rajasthan"
            },
            {
                city: "Ganganagar",
                state: "Rajasthan"
            },
            {
                city: "Goredi Chancha",
                state: "Rajasthan"
            },
            {
                city: "Gothra",
                state: "Rajasthan"
            },
            {
                city: "Govindgarh",
                state: "Rajasthan"
            },
            {
                city: "Jaipur",
                state: "Rajasthan"
            },
            {
                city: "Jodhpur",
                state: "Rajasthan"
            },
            {
                city: "Kherliganj",
                state: "Rajasthan"
            },
            {
                city: "Kherwara Chhaoni",
                state: "Rajasthan"
            },
            {
                city: "Kiranipura",
                state: "Rajasthan"
            },
            {
                city: "Kishangarh",
                state: "Rajasthan"
            },
            {
                city: "Kolvi Mandi Rajendra pura",
                state: "Rajasthan"
            },
            {
                city: "Kota",
                state: "Rajasthan"
            },
            {
                city: "Kumbhkot",
                state: "Rajasthan"
            },
            {
                city: "Mahu Kalan",
                state: "Rajasthan"
            },
            {
                city: "Mahwa",
                state: "Rajasthan"
            },
            {
                city: "Mandawar",
                state: "Rajasthan"
            },
            {
                city: "Abu Road",
                state: "Rajasthan"
            },
            {
                city: "Aklera",
                state: "Rajasthan"
            },
            {
                city: "Amet",
                state: "Rajasthan"
            },
            {
                city: "Antah",
                state: "Rajasthan"
            },
            {
                city: "Anupgarh",
                state: "Rajasthan"
            },
            {
                city: "Asind",
                state: "Rajasthan"
            },
            {
                city: "Baggar",
                state: "Rajasthan"
            },
            {
                city: "Bagru",
                state: "Rajasthan"
            },
            {
                city: "Manohar Thana",
                state: "Rajasthan"
            },
            {
                city: "Bali",
                state: "Rajasthan"
            },
            {
                city: "Balotra",
                state: "Rajasthan"
            },
            {
                city: "Marwar Junction",
                state: "Rajasthan"
            },
            {
                city: "Bandikui",
                state: "Rajasthan"
            },
            {
                city: "Banswara",
                state: "Rajasthan"
            },
            {
                city: "Baran",
                state: "Rajasthan"
            },
            {
                city: "Bari",
                state: "Rajasthan"
            },
            {
                city: "Bari Sadri",
                state: "Rajasthan"
            },
            {
                city: "Barmer",
                state: "Rajasthan"
            },
            {
                city: "Bayana",
                state: "Rajasthan"
            },
            {
                city: "Begun",
                state: "Rajasthan"
            },
            {
                city: "Behror",
                state: "Rajasthan"
            },
            {
                city: "Bhadra",
                state: "Rajasthan"
            },
            {
                city: "Bhawani Mandi",
                state: "Rajasthan"
            },
            {
                city: "Bhinder",
                state: "Rajasthan"
            },
            {
                city: "Bhinmal",
                state: "Rajasthan"
            },
            {
                city: "Bhusawar",
                state: "Rajasthan"
            },
            {
                city: "Modak",
                state: "Rajasthan"
            },
            {
                city: "Bidasar",
                state: "Rajasthan"
            },
            {
                city: "Bilara",
                state: "Rajasthan"
            },
            {
                city: "Bissau",
                state: "Rajasthan"
            },
            {
                city: "Bundi",
                state: "Rajasthan"
            },
            {
                city: "Chaksu",
                state: "Rajasthan"
            },
            {
                city: "Chhabra",
                state: "Rajasthan"
            },
            {
                city: "Chhapar",
                state: "Rajasthan"
            },
            {
                city: "Chhoti Sadri",
                state: "Rajasthan"
            },
            {
                city: "Chirawa",
                state: "Rajasthan"
            },
            {
                city: "Chittaurgarh",
                state: "Rajasthan"
            },
            {
                city: "Chomu",
                state: "Rajasthan"
            },
            {
                city: "Churu",
                state: "Rajasthan"
            },
            {
                city: "Dausa",
                state: "Rajasthan"
            },
            {
                city: "Deeg",
                state: "Rajasthan"
            },
            {
                city: "Deoli",
                state: "Rajasthan"
            },
            {
                city: "Deshnoke",
                state: "Rajasthan"
            },
            {
                city: "Devgarh",
                state: "Rajasthan"
            },
            {
                city: "Dhaulpur",
                state: "Rajasthan"
            },
            {
                city: "Didwana",
                state: "Rajasthan"
            },
            {
                city: "Dungargarh",
                state: "Rajasthan"
            },
            {
                city: "Dungarpur",
                state: "Rajasthan"
            },
            {
                city: "Fatehnagar",
                state: "Rajasthan"
            },
            {
                city: "Fatehpur",
                state: "Rajasthan"
            },
            {
                city: "Gajsinghpur",
                state: "Rajasthan"
            },
            {
                city: "Gangapur",
                state: "Rajasthan"
            },
            {
                city: "Gangapur City",
                state: "Rajasthan"
            },
            {
                city: "Gulabpura",
                state: "Rajasthan"
            },
            {
                city: "Hanumangarh",
                state: "Rajasthan"
            },
            {
                city: "Hindaun",
                state: "Rajasthan"
            },
            {
                city: "Indragarh",
                state: "Rajasthan"
            },
            {
                city: "Jahazpur",
                state: "Rajasthan"
            },
            {
                city: "Jaisalmer",
                state: "Rajasthan"
            },
            {
                city: "Nasirabad",
                state: "Rajasthan"
            },
            {
                city: "Jaitaran",
                state: "Rajasthan"
            },
            {
                city: "Jalor",
                state: "Rajasthan"
            },
            {
                city: "Jhalawar",
                state: "Rajasthan"
            },
            {
                city: "Jhalrapatan",
                state: "Rajasthan"
            },
            {
                city: "Jhunjhunun",
                state: "Rajasthan"
            },
            {
                city: "Jobner",
                state: "Rajasthan"
            },
            {
                city: "Kaithoon",
                state: "Rajasthan"
            },
            {
                city: "Kaman",
                state: "Rajasthan"
            },
            {
                city: "Kanor",
                state: "Rajasthan"
            },
            {
                city: "Kapasan",
                state: "Rajasthan"
            },
            {
                city: "Kaprain",
                state: "Rajasthan"
            },
            {
                city: "Karanpur",
                state: "Rajasthan"
            },
            {
                city: "Karauli",
                state: "Rajasthan"
            },
            {
                city: "Newa Talai",
                state: "Rajasthan"
            },
            {
                city: "Kekri",
                state: "Rajasthan"
            },
            {
                city: "Keshoraipatan",
                state: "Rajasthan"
            },
            {
                city: "Kesrisinghpur",
                state: "Rajasthan"
            },
            {
                city: "Khairthal",
                state: "Rajasthan"
            },
            {
                city: "Khandela",
                state: "Rajasthan"
            },
            {
                city: "Kherli",
                state: "Rajasthan"
            },
            {
                city: "Khetri",
                state: "Rajasthan"
            },
            {
                city: "Kishangarh",
                state: "Rajasthan"
            },
            {
                city: "Kishangarh Renwal",
                state: "Rajasthan"
            },
            {
                city: "Kotputli",
                state: "Rajasthan"
            },
            {
                city: "Kuchaman City",
                state: "Rajasthan"
            },
            {
                city: "Kuchera",
                state: "Rajasthan"
            },
            {
                city: "Kumher",
                state: "Rajasthan"
            },
            {
                city: "Kushalgarh",
                state: "Rajasthan"
            },
            {
                city: "Lachhmangarh",
                state: "Rajasthan"
            },
            {
                city: "Ladnu",
                state: "Rajasthan"
            },
            {
                city: "Lakheri",
                state: "Rajasthan"
            },
            {
                city: "Lalsot",
                state: "Rajasthan"
            },
            {
                city: "Losal",
                state: "Rajasthan"
            },
            {
                city: "Makrana",
                state: "Rajasthan"
            },
            {
                city: "Malpura",
                state: "Rajasthan"
            },
            {
                city: "Mandalgarh",
                state: "Rajasthan"
            },
            {
                city: "Mandawa",
                state: "Rajasthan"
            },
            {
                city: "Mangrol",
                state: "Rajasthan"
            },
            {
                city: "Merta City",
                state: "Rajasthan"
            },
            {
                city: "Mount Abu",
                state: "Rajasthan"
            },
            {
                city: "Pali",
                state: "Rajasthan"
            },
            {
                city: "Mukandgarh",
                state: "Rajasthan"
            },
            {
                city: "Mundwa",
                state: "Rajasthan"
            },
            {
                city: "Nadbai",
                state: "Rajasthan"
            },
            {
                city: "Nagar",
                state: "Rajasthan"
            },
            {
                city: "Nagaur",
                state: "Rajasthan"
            },
            {
                city: "Nainwa",
                state: "Rajasthan"
            },
            {
                city: "Nathdwara",
                state: "Rajasthan"
            },
            {
                city: "Nawa",
                state: "Rajasthan"
            },
            {
                city: "Nawalgarh",
                state: "Rajasthan"
            },
            {
                city: "Neem-Ka-Thana",
                state: "Rajasthan"
            },
            {
                city: "Nimbahera",
                state: "Rajasthan"
            },
            {
                city: "Niwai",
                state: "Rajasthan"
            },
            {
                city: "Nohar",
                state: "Rajasthan"
            },
            {
                city: "Nokha",
                state: "Rajasthan"
            },
            {
                city: "Partapur",
                state: "Rajasthan"
            },
            {
                city: "Padampur",
                state: "Rajasthan"
            },
            {
                city: "Parbatsar",
                state: "Rajasthan"
            },
            {
                city: "Phalna",
                state: "Rajasthan"
            },
            {
                city: "Phalodi",
                state: "Rajasthan"
            },
            {
                city: "Phulera",
                state: "Rajasthan"
            },
            {
                city: "Pilani",
                state: "Rajasthan"
            },
            {
                city: "Pilibanga",
                state: "Rajasthan"
            },
            {
                city: "Pindwara",
                state: "Rajasthan"
            },
            {
                city: "Piparcity",
                state: "Rajasthan"
            },
            {
                city: "Pirawa",
                state: "Rajasthan"
            },
            {
                city: "Pokaran",
                state: "Rajasthan"
            },
            {
                city: "Pratapgarh",
                state: "Rajasthan"
            },
            {
                city: "Pushkar",
                state: "Rajasthan"
            },
            {
                city: "Raisinghnagar",
                state: "Rajasthan"
            },
            {
                city: "Rajakhera",
                state: "Rajasthan"
            },
            {
                city: "Rajaldesar",
                state: "Rajasthan"
            },
            {
                city: "Rajgarh",
                state: "Rajasthan"
            },
            {
                city: "Rajgarh",
                state: "Rajasthan"
            },
            {
                city: "Rajsamand",
                state: "Rajasthan"
            },
            {
                city: "Ramganj Mandi",
                state: "Rajasthan"
            },
            {
                city: "Ramgarh",
                state: "Rajasthan"
            },
            {
                city: "Rani",
                state: "Rajasthan"
            },
            {
                city: "Ratangarh",
                state: "Rajasthan"
            },
            {
                city: "Ratannagar",
                state: "Rajasthan"
            },
            {
                city: "Rawatbhata",
                state: "Rajasthan"
            },
            {
                city: "Rawatsar",
                state: "Rajasthan"
            },
            {
                city: "Reengus",
                state: "Rajasthan"
            },
            {
                city: "Sadri",
                state: "Rajasthan"
            },
            {
                city: "Sadulshahar",
                state: "Rajasthan"
            },
            {
                city: "Sagwara",
                state: "Rajasthan"
            },
            {
                city: "Salumbar",
                state: "Rajasthan"
            },
            {
                city: "Sambhar",
                state: "Rajasthan"
            },
            {
                city: "Sanchore",
                state: "Rajasthan"
            },
            {
                city: "Sangaria",
                state: "Rajasthan"
            },
            {
                city: "Sangod",
                state: "Rajasthan"
            },
            {
                city: "Sardarshahar",
                state: "Rajasthan"
            },
            {
                city: "Sarwar",
                state: "Rajasthan"
            },
            {
                city: "Sawai Madhopur",
                state: "Rajasthan"
            },
            {
                city: "Shahpura",
                state: "Rajasthan"
            },
            {
                city: "Shahpura",
                state: "Rajasthan"
            },
            {
                city: "Sheoganj",
                state: "Rajasthan"
            },
            {
                city: "Sirohi",
                state: "Rajasthan"
            },
            {
                city: "Sojat",
                state: "Rajasthan"
            },
            {
                city: "Sri Madhopur",
                state: "Rajasthan"
            },
            {
                city: "Sujangarh",
                state: "Rajasthan"
            },
            {
                city: "Sumerpur",
                state: "Rajasthan"
            },
            {
                city: "Surajgarh",
                state: "Rajasthan"
            },
            {
                city: "Suratgarh",
                state: "Rajasthan"
            },
            {
                city: "Takhatgarh",
                state: "Rajasthan"
            },
            {
                city: "Taranagar",
                state: "Rajasthan"
            },
            {
                city: "Tijara",
                state: "Rajasthan"
            },
            {
                city: "Todabhim",
                state: "Rajasthan"
            },
            {
                city: "Todaraisingh",
                state: "Rajasthan"
            },
            {
                city: "Udaipurwati",
                state: "Rajasthan"
            },
            {
                city: "Uniara",
                state: "Rajasthan"
            },
            {
                city: "Vidyavihar",
                state: "Rajasthan"
            },
            {
                city: "Vijainagar",
                state: "Rajasthan"
            },
            {
                city: "Vijainagar",
                state: "Rajasthan"
            },
            {
                city: "Viratnagar",
                state: "Rajasthan"
            },
            {
                city: "Weir",
                state: "Rajasthan"
            },
            {
                city: "Rikhabdeo",
                state: "Rajasthan"
            },
            {
                city: "Satalkheri",
                state: "Rajasthan"
            },
            {
                city: "Sikar",
                state: "Rajasthan"
            },
            {
                city: "Sogariya",
                state: "Rajasthan"
            },
            {
                city: "Sojat Road",
                state: "Rajasthan"
            },
            {
                city: "Suket",
                state: "Rajasthan"
            },
            {
                city: "Todra",
                state: "Rajasthan"
            },
            {
                city: "Tonk",
                state: "Rajasthan"
            },
            {
                city: "Udaipur",
                state: "Rajasthan"
            },
            {
                city: "Udpura",
                state: "Rajasthan"
            },
            {
                city: "Vanasthali",
                state: "Rajasthan"
            },
            {
                city: "Gangtok",
                state: "Sikkim"
            },
            {
                city: "Gyalshing",
                state: "Sikkim"
            },
            {
                city: "Jorethang",
                state: "Sikkim"
            },
            {
                city: "Mangan",
                state: "Sikkim"
            },
            {
                city: "Namchi",
                state: "Sikkim"
            },
            {
                city: "Nayabazar",
                state: "Sikkim"
            },
            {
                city: "Rangpo",
                state: "Sikkim"
            },
            {
                city: "Singtam",
                state: "Sikkim"
            },
            {
                city: "Upper Tadong",
                state: "Sikkim"
            },
            {
                city: "A.Thirumuruganpoondi",
                state: "Tamil Nadu"
            },
            {
                city: "A.Vellalapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Abiramam",
                state: "Tamil Nadu"
            },
            {
                city: "Achampudur",
                state: "Tamil Nadu"
            },
            {
                city: "Acharapakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Acharipallam",
                state: "Tamil Nadu"
            },
            {
                city: "Achipatti",
                state: "Tamil Nadu"
            },
            {
                city: "Adikaratti",
                state: "Tamil Nadu"
            },
            {
                city: "Adiramapattinam",
                state: "Tamil Nadu"
            },
            {
                city: "Aduthurai alias Maruthuvakudi",
                state: "Tamil Nadu"
            },
            {
                city: "Agaram",
                state: "Tamil Nadu"
            },
            {
                city: "Agastheeswaram",
                state: "Tamil Nadu"
            },
            {
                city: "Alagappapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Alampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Alanganallur",
                state: "Tamil Nadu"
            },
            {
                city: "Alangayam",
                state: "Tamil Nadu"
            },
            {
                city: "Alangudi",
                state: "Tamil Nadu"
            },
            {
                city: "Alangulam",
                state: "Tamil Nadu"
            },
            {
                city: "Alangulam",
                state: "Tamil Nadu"
            },
            {
                city: "Alanthurai",
                state: "Tamil Nadu"
            },
            {
                city: "Alapakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Allapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Alur",
                state: "Tamil Nadu"
            },
            {
                city: "Alwarkurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Alwarthirunagiri",
                state: "Tamil Nadu"
            },
            {
                city: "Ambasamudram",
                state: "Tamil Nadu"
            },
            {
                city: "Ammainaickanur",
                state: "Tamil Nadu"
            },
            {
                city: "Ammapettai",
                state: "Tamil Nadu"
            },
            {
                city: "Ammapettai",
                state: "Tamil Nadu"
            },
            {
                city: "Ammavarikuppam",
                state: "Tamil Nadu"
            },
            {
                city: "Ammoor",
                state: "Tamil Nadu"
            },
            {
                city: "Anaimalai",
                state: "Tamil Nadu"
            },
            {
                city: "Anaiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Anaiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Anakaputhur",
                state: "Tamil Nadu"
            },
            {
                city: "Ananthapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Andipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Andipatti Jakkampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Anjugramam",
                state: "Tamil Nadu"
            },
            {
                city: "Annamalai Nagar",
                state: "Tamil Nadu"
            },
            {
                city: "Annavasal",
                state: "Tamil Nadu"
            },
            {
                city: "Annur",
                state: "Tamil Nadu"
            },
            {
                city: "Anthiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Appakudal",
                state: "Tamil Nadu"
            },
            {
                city: "Arachalur",
                state: "Tamil Nadu"
            },
            {
                city: "Arakandanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Aralvaimozhi",
                state: "Tamil Nadu"
            },
            {
                city: "Arani",
                state: "Tamil Nadu"
            },
            {
                city: "Arasiramani",
                state: "Tamil Nadu"
            },
            {
                city: "Aravakurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Aravankad",
                state: "Tamil Nadu"
            },
            {
                city: "Arimalam",
                state: "Tamil Nadu"
            },
            {
                city: "Ariyalur",
                state: "Tamil Nadu"
            },
            {
                city: "Ariyappampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Ariyur",
                state: "Tamil Nadu"
            },
            {
                city: "Arumanai",
                state: "Tamil Nadu"
            },
            {
                city: "Arumbavur",
                state: "Tamil Nadu"
            },
            {
                city: "Arumuganeri",
                state: "Tamil Nadu"
            },
            {
                city: "Ashokapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Athani",
                state: "Tamil Nadu"
            },
            {
                city: "Athanur",
                state: "Tamil Nadu"
            },
            {
                city: "Athimarapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Athipattu",
                state: "Tamil Nadu"
            },
            {
                city: "Athur",
                state: "Tamil Nadu"
            },
            {
                city: "Athur",
                state: "Tamil Nadu"
            },
            {
                city: "Attayampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Avadattur",
                state: "Tamil Nadu"
            },
            {
                city: "Avalpoondurai",
                state: "Tamil Nadu"
            },
            {
                city: "Avanashi",
                state: "Tamil Nadu"
            },
            {
                city: "Avaniapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Ayakudi",
                state: "Tamil Nadu"
            },
            {
                city: "Aygudi",
                state: "Tamil Nadu"
            },
            {
                city: "Ayothiapattinam",
                state: "Tamil Nadu"
            },
            {
                city: "Ayyalur",
                state: "Tamil Nadu"
            },
            {
                city: "Ayyampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Ayyampettai",
                state: "Tamil Nadu"
            },
            {
                city: "Ayyampettai",
                state: "Tamil Nadu"
            },
            {
                city: "Azhagiapandiapuram",
                state: "Tamil Nadu"
            },
            {
                city: "B. Mallapuram",
                state: "Tamil Nadu"
            },
            {
                city: "B. Meenakshipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Balakrishnampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Balakrishnapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Balapallam",
                state: "Tamil Nadu"
            },
            {
                city: "Balasamudram",
                state: "Tamil Nadu"
            },
            {
                city: "Bargur",
                state: "Tamil Nadu"
            },
            {
                city: "Batlagundu",
                state: "Tamil Nadu"
            },
            {
                city: "Belur",
                state: "Tamil Nadu"
            },
            {
                city: "Bhavanisagar",
                state: "Tamil Nadu"
            },
            {
                city: "Bhuvanagiri",
                state: "Tamil Nadu"
            },
            {
                city: "Bikketti",
                state: "Tamil Nadu"
            },
            {
                city: "Boothapandi",
                state: "Tamil Nadu"
            },
            {
                city: "Boothipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Brahmana Periya-Agraharam",
                state: "Tamil Nadu"
            },
            {
                city: "Chengam",
                state: "Tamil Nadu"
            },
            {
                city: "Chennai",
                state: "Tamil Nadu"
            },
            {
                city: "Chennasamudram",
                state: "Tamil Nadu"
            },
            {
                city: "Chennimalai",
                state: "Tamil Nadu"
            },
            {
                city: "Cheranmadevi",
                state: "Tamil Nadu"
            },
            {
                city: "Chetpet",
                state: "Tamil Nadu"
            },
            {
                city: "Chettiarpatti",
                state: "Tamil Nadu"
            },
            {
                city: "Chettipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Chettipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Chettithangal",
                state: "Tamil Nadu"
            },
            {
                city: "Chinna Anuppanadi",
                state: "Tamil Nadu"
            },
            {
                city: "Chinnakkampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Chinnalapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Chinnampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Chinnasalem",
                state: "Tamil Nadu"
            },
            {
                city: "Chinnasekkadu",
                state: "Tamil Nadu"
            },
            {
                city: "Chinnavedampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Chithode",
                state: "Tamil Nadu"
            },
            {
                city: "Chitlapakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Cholapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Coimbatore",
                state: "Tamil Nadu"
            },
            {
                city: "Courtalam",
                state: "Tamil Nadu"
            },
            {
                city: "Dalavaipatti",
                state: "Tamil Nadu"
            },
            {
                city: "Denkanikottai",
                state: "Tamil Nadu"
            },
            {
                city: "Desur",
                state: "Tamil Nadu"
            },
            {
                city: "Devadanapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Devanangurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Devarshola",
                state: "Tamil Nadu"
            },
            {
                city: "Dhalavoipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Dhali",
                state: "Tamil Nadu"
            },
            {
                city: "Dhaliyur",
                state: "Tamil Nadu"
            },
            {
                city: "Dharapadavedu",
                state: "Tamil Nadu"
            },
            {
                city: "Dharasuram",
                state: "Tamil Nadu"
            },
            {
                city: "Dusi",
                state: "Tamil Nadu"
            },
            {
                city: "Edaganasalai",
                state: "Tamil Nadu"
            },
            {
                city: "Edaikodu",
                state: "Tamil Nadu"
            },
            {
                city: "Edakalinadu",
                state: "Tamil Nadu"
            },
            {
                city: "Elathur",
                state: "Tamil Nadu"
            },
            {
                city: "Elayirampannai",
                state: "Tamil Nadu"
            },
            {
                city: "Elumalai",
                state: "Tamil Nadu"
            },
            {
                city: "Eral",
                state: "Tamil Nadu"
            },
            {
                city: "Eraniel",
                state: "Tamil Nadu"
            },
            {
                city: "Eriodu",
                state: "Tamil Nadu"
            },
            {
                city: "Erumaipatti",
                state: "Tamil Nadu"
            },
            {
                city: "Eruvadi",
                state: "Tamil Nadu"
            },
            {
                city: "Ethapur",
                state: "Tamil Nadu"
            },
            {
                city: "Ettayapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Ettimadai",
                state: "Tamil Nadu"
            },
            {
                city: "Ezhudesam",
                state: "Tamil Nadu"
            },
            {
                city: "Ganapathipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Gandhi Nagar(Katpadi Ext.)",
                state: "Tamil Nadu"
            },
            {
                city: "Gangaikondan",
                state: "Tamil Nadu"
            },
            {
                city: "Gangavalli",
                state: "Tamil Nadu"
            },
            {
                city: "Ganguvarpatti",
                state: "Tamil Nadu"
            },
            {
                city: "Gingee",
                state: "Tamil Nadu"
            },
            {
                city: "Gopalasamudram",
                state: "Tamil Nadu"
            },
            {
                city: "Goundampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Gudalur",
                state: "Tamil Nadu"
            },
            {
                city: "Gudalur",
                state: "Tamil Nadu"
            },
            {
                city: "Gudalur",
                state: "Tamil Nadu"
            },
            {
                city: "Gummidipoondi",
                state: "Tamil Nadu"
            },
            {
                city: "Hanumanthampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Harur",
                state: "Tamil Nadu"
            },
            {
                city: "Harveypatti",
                state: "Tamil Nadu"
            },
            {
                city: "Highways",
                state: "Tamil Nadu"
            },
            {
                city: "Hubbathala",
                state: "Tamil Nadu"
            },
            {
                city: "Huligal",
                state: "Tamil Nadu"
            },
            {
                city: "Idikarai",
                state: "Tamil Nadu"
            },
            {
                city: "Ilampillai",
                state: "Tamil Nadu"
            },
            {
                city: "Ilanji",
                state: "Tamil Nadu"
            },
            {
                city: "Iluppaiyurani",
                state: "Tamil Nadu"
            },
            {
                city: "Iluppur",
                state: "Tamil Nadu"
            },
            {
                city: "Inam Karur",
                state: "Tamil Nadu"
            },
            {
                city: "Injambakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Irugur",
                state: "Tamil Nadu"
            },
            {
                city: "Jaffrabad",
                state: "Tamil Nadu"
            },
            {
                city: "Jagathala",
                state: "Tamil Nadu"
            },
            {
                city: "Jalakandapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Jalladiampet",
                state: "Tamil Nadu"
            },
            {
                city: "Jambai",
                state: "Tamil Nadu"
            },
            {
                city: "Jayankondam",
                state: "Tamil Nadu"
            },
            {
                city: "Jolarpet",
                state: "Tamil Nadu"
            },
            {
                city: "Kadambur",
                state: "Tamil Nadu"
            },
            {
                city: "Kadathur",
                state: "Tamil Nadu"
            },
            {
                city: "Kadayal",
                state: "Tamil Nadu"
            },
            {
                city: "Kadayampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Kalakkad",
                state: "Tamil Nadu"
            },
            {
                city: "Kalambur",
                state: "Tamil Nadu"
            },
            {
                city: "Kalapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Kalappanaickenpatti",
                state: "Tamil Nadu"
            },
            {
                city: "Kalavai",
                state: "Tamil Nadu"
            },
            {
                city: "Kalinjur",
                state: "Tamil Nadu"
            },
            {
                city: "Kaliyakkavilai",
                state: "Tamil Nadu"
            },
            {
                city: "Kalladaikurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Kallakkurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Kallakudi",
                state: "Tamil Nadu"
            },
            {
                city: "Kallukuttam",
                state: "Tamil Nadu"
            },
            {
                city: "Kalugumalai",
                state: "Tamil Nadu"
            },
            {
                city: "Kamayagoundanpatti",
                state: "Tamil Nadu"
            },
            {
                city: "Kambainallur",
                state: "Tamil Nadu"
            },
            {
                city: "Kamuthi",
                state: "Tamil Nadu"
            },
            {
                city: "Kanadukathan",
                state: "Tamil Nadu"
            },
            {
                city: "Kanakkampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Kanam",
                state: "Tamil Nadu"
            },
            {
                city: "Kandanur",
                state: "Tamil Nadu"
            },
            {
                city: "Kangayampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Kangeyam",
                state: "Tamil Nadu"
            },
            {
                city: "Kangeyanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Kaniyur",
                state: "Tamil Nadu"
            },
            {
                city: "Kanjikoil",
                state: "Tamil Nadu"
            },
            {
                city: "Kannadendal",
                state: "Tamil Nadu"
            },
            {
                city: "Kannamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Kannampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Kannankurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Kannivadi",
                state: "Tamil Nadu"
            },
            {
                city: "Kannivadi",
                state: "Tamil Nadu"
            },
            {
                city: "Kanniyakumari",
                state: "Tamil Nadu"
            },
            {
                city: "Kappiyarai",
                state: "Tamil Nadu"
            },
            {
                city: "Karamadai",
                state: "Tamil Nadu"
            },
            {
                city: "Karambakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Karambakkudi",
                state: "Tamil Nadu"
            },
            {
                city: "Kariamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Kariapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Karugampattur",
                state: "Tamil Nadu"
            },
            {
                city: "Karumandi Chellipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Karumathampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Karungal",
                state: "Tamil Nadu"
            },
            {
                city: "Karunguzhi",
                state: "Tamil Nadu"
            },
            {
                city: "Karuppur",
                state: "Tamil Nadu"
            },
            {
                city: "Kasipalayam (E)",
                state: "Tamil Nadu"
            },
            {
                city: "Kasipalayam (G)",
                state: "Tamil Nadu"
            },
            {
                city: "Kathujuganapalli",
                state: "Tamil Nadu"
            },
            {
                city: "Katpadi",
                state: "Tamil Nadu"
            },
            {
                city: "Kattumannarkoil",
                state: "Tamil Nadu"
            },
            {
                city: "Kattuputhur",
                state: "Tamil Nadu"
            },
            {
                city: "Kaveripakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Kaveripattinam",
                state: "Tamil Nadu"
            },
            {
                city: "Kayalpattinam",
                state: "Tamil Nadu"
            },
            {
                city: "Kayatharu",
                state: "Tamil Nadu"
            },
            {
                city: "Keelakarai",
                state: "Tamil Nadu"
            },
            {
                city: "Keeramangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Keeranur",
                state: "Tamil Nadu"
            },
            {
                city: "Keeranur",
                state: "Tamil Nadu"
            },
            {
                city: "Keeripatti",
                state: "Tamil Nadu"
            },
            {
                city: "Keezhapavur",
                state: "Tamil Nadu"
            },
            {
                city: "Kelamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Kembainaickenpalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Kethi",
                state: "Tamil Nadu"
            },
            {
                city: "Kilampadi",
                state: "Tamil Nadu"
            },
            {
                city: "Kilkulam",
                state: "Tamil Nadu"
            },
            {
                city: "Kilkunda",
                state: "Tamil Nadu"
            },
            {
                city: "Killiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Killlai",
                state: "Tamil Nadu"
            },
            {
                city: "Kilpennathur",
                state: "Tamil Nadu"
            },
            {
                city: "Kilvelur",
                state: "Tamil Nadu"
            },
            {
                city: "Kinathukadavu",
                state: "Tamil Nadu"
            },
            {
                city: "Kodavasal",
                state: "Tamil Nadu"
            },
            {
                city: "Kodumudi",
                state: "Tamil Nadu"
            },
            {
                city: "Kolappalur",
                state: "Tamil Nadu"
            },
            {
                city: "Kolathupalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Kolathur",
                state: "Tamil Nadu"
            },
            {
                city: "Kollankodu",
                state: "Tamil Nadu"
            },
            {
                city: "Kollankoil",
                state: "Tamil Nadu"
            },
            {
                city: "Komaralingam",
                state: "Tamil Nadu"
            },
            {
                city: "Kombai",
                state: "Tamil Nadu"
            },
            {
                city: "Konavattam",
                state: "Tamil Nadu"
            },
            {
                city: "Kondalampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Konganapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Kooraikundu",
                state: "Tamil Nadu"
            },
            {
                city: "Koothappar",
                state: "Tamil Nadu"
            },
            {
                city: "Koradacheri",
                state: "Tamil Nadu"
            },
            {
                city: "Kotagiri",
                state: "Tamil Nadu"
            },
            {
                city: "Kothinallur",
                state: "Tamil Nadu"
            },
            {
                city: "Kottaiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Kottakuppam",
                state: "Tamil Nadu"
            },
            {
                city: "Kottaram",
                state: "Tamil Nadu"
            },
            {
                city: "Kottivakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Kottur",
                state: "Tamil Nadu"
            },
            {
                city: "Krishnarayapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Krishnasamudram",
                state: "Tamil Nadu"
            },
            {
                city: "Kuchanur",
                state: "Tamil Nadu"
            },
            {
                city: "Kuhalur",
                state: "Tamil Nadu"
            },
            {
                city: "Kulasekarapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Kumarapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Kundrathur",
                state: "Tamil Nadu"
            },
            {
                city: "Kuniyamuthur",
                state: "Tamil Nadu"
            },
            {
                city: "Kunnathur",
                state: "Tamil Nadu"
            },
            {
                city: "Kurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Kurinjipadi",
                state: "Tamil Nadu"
            },
            {
                city: "Kurudampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Kurumbalur",
                state: "Tamil Nadu"
            },
            {
                city: "Kuthalam",
                state: "Tamil Nadu"
            },
            {
                city: "Labbaikudikadu",
                state: "Tamil Nadu"
            },
            {
                city: "Lakkampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Lalgudi",
                state: "Tamil Nadu"
            },
            {
                city: "Lalpet",
                state: "Tamil Nadu"
            },
            {
                city: "Llayangudi",
                state: "Tamil Nadu"
            },
            {
                city: "Madambakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Madathukulam",
                state: "Tamil Nadu"
            },
            {
                city: "Madippakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Madukkarai",
                state: "Tamil Nadu"
            },
            {
                city: "Madukkur",
                state: "Tamil Nadu"
            },
            {
                city: "Madurai",
                state: "Tamil Nadu"
            },
            {
                city: "Maduravoyal",
                state: "Tamil Nadu"
            },
            {
                city: "Mallamooppampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Mallankinaru",
                state: "Tamil Nadu"
            },
            {
                city: "Mallasamudram",
                state: "Tamil Nadu"
            },
            {
                city: "Mallur",
                state: "Tamil Nadu"
            },
            {
                city: "Mamallapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Mamsapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Manachanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Manali",
                state: "Tamil Nadu"
            },
            {
                city: "Manalmedu",
                state: "Tamil Nadu"
            },
            {
                city: "Manalurpet",
                state: "Tamil Nadu"
            },
            {
                city: "Manamadurai",
                state: "Tamil Nadu"
            },
            {
                city: "Manapakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Manavalakurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Mandaikadu",
                state: "Tamil Nadu"
            },
            {
                city: "Mandapam",
                state: "Tamil Nadu"
            },
            {
                city: "Mangadu",
                state: "Tamil Nadu"
            },
            {
                city: "Mangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Mangalampet",
                state: "Tamil Nadu"
            },
            {
                city: "Manimutharu",
                state: "Tamil Nadu"
            },
            {
                city: "Mappilaiurani",
                state: "Tamil Nadu"
            },
            {
                city: "Maraimalainagar",
                state: "Tamil Nadu"
            },
            {
                city: "Marakkanam",
                state: "Tamil Nadu"
            },
            {
                city: "Maramangalathupatti",
                state: "Tamil Nadu"
            },
            {
                city: "Marandahalli",
                state: "Tamil Nadu"
            },
            {
                city: "Markayankottai",
                state: "Tamil Nadu"
            },
            {
                city: "Marudur",
                state: "Tamil Nadu"
            },
            {
                city: "Marungur",
                state: "Tamil Nadu"
            },
            {
                city: "Mathigiri",
                state: "Tamil Nadu"
            },
            {
                city: "Mecheri",
                state: "Tamil Nadu"
            },
            {
                city: "Meenambakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Melacheval",
                state: "Tamil Nadu"
            },
            {
                city: "Melachokkanathapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Melagaram",
                state: "Tamil Nadu"
            },
            {
                city: "Melamadai",
                state: "Tamil Nadu"
            },
            {
                city: "Melamaiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Melathiruppanthuruthi",
                state: "Tamil Nadu"
            },
            {
                city: "Melattur",
                state: "Tamil Nadu"
            },
            {
                city: "Melpattampakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Melvisharam",
                state: "Tamil Nadu"
            },
            {
                city: "Mettupalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Minjur",
                state: "Tamil Nadu"
            },
            {
                city: "Modakurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Mohanur",
                state: "Tamil Nadu"
            },
            {
                city: "Moolakaraipatti",
                state: "Tamil Nadu"
            },
            {
                city: "Moovarasampettai",
                state: "Tamil Nadu"
            },
            {
                city: "Mopperipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Mudukulathur",
                state: "Tamil Nadu"
            },
            {
                city: "Mukasipidariyur",
                state: "Tamil Nadu"
            },
            {
                city: "Mukkudal",
                state: "Tamil Nadu"
            },
            {
                city: "Mulagumudu",
                state: "Tamil Nadu"
            },
            {
                city: "Mulanur",
                state: "Tamil Nadu"
            },
            {
                city: "Muruganpalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Musiri",
                state: "Tamil Nadu"
            },
            {
                city: "Muthupet",
                state: "Tamil Nadu"
            },
            {
                city: "Muthur",
                state: "Tamil Nadu"
            },
            {
                city: "Muttayyapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Myladi",
                state: "Tamil Nadu"
            },
            {
                city: "Naduvattam",
                state: "Tamil Nadu"
            },
            {
                city: "Nagavakulam",
                state: "Tamil Nadu"
            },
            {
                city: "Nagojanahalli",
                state: "Tamil Nadu"
            },
            {
                city: "Nallampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Nallur",
                state: "Tamil Nadu"
            },
            {
                city: "Namagiripettai",
                state: "Tamil Nadu"
            },
            {
                city: "Nambiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Nandambakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Nandivaram-Guduvancheri",
                state: "Tamil Nadu"
            },
            {
                city: "Nangavalli",
                state: "Tamil Nadu"
            },
            {
                city: "Nangavaram",
                state: "Tamil Nadu"
            },
            {
                city: "Nanguneri",
                state: "Tamil Nadu"
            },
            {
                city: "Nanjikottai",
                state: "Tamil Nadu"
            },
            {
                city: "Nannilam",
                state: "Tamil Nadu"
            },
            {
                city: "Naranammalpuram",
                state: "Tamil Nadu"
            },
            {
                city: "Naranapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Narasimhanaickenpalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Narasingapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Narasingapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Naravarikuppam",
                state: "Tamil Nadu"
            },
            {
                city: "Nasiyanur",
                state: "Tamil Nadu"
            },
            {
                city: "Natham",
                state: "Tamil Nadu"
            },
            {
                city: "Nathampannai",
                state: "Tamil Nadu"
            },
            {
                city: "Natrampalli",
                state: "Tamil Nadu"
            },
            {
                city: "Nattapettai",
                state: "Tamil Nadu"
            },
            {
                city: "Nattarasankottai",
                state: "Tamil Nadu"
            },
            {
                city: "Navalpattu",
                state: "Tamil Nadu"
            },
            {
                city: "Nazerath",
                state: "Tamil Nadu"
            },
            {
                city: "Needamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Neelagiri",
                state: "Tamil Nadu"
            },
            {
                city: "Neelankarai",
                state: "Tamil Nadu"
            },
            {
                city: "Neikkarapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Neiyyur",
                state: "Tamil Nadu"
            },
            {
                city: "Nelliyalam",
                state: "Tamil Nadu"
            },
            {
                city: "Nemili",
                state: "Tamil Nadu"
            },
            {
                city: "Neripperichal",
                state: "Tamil Nadu"
            },
            {
                city: "Nerkunram",
                state: "Tamil Nadu"
            },
            {
                city: "Nerkuppai",
                state: "Tamil Nadu"
            },
            {
                city: "Nerunjipettai",
                state: "Tamil Nadu"
            },
            {
                city: "Neykkarappatti",
                state: "Tamil Nadu"
            },
            {
                city: "Neyveli",
                state: "Tamil Nadu"
            },
            {
                city: "Nilakkottai",
                state: "Tamil Nadu"
            },
            {
                city: "O' Valley",
                state: "Tamil Nadu"
            },
            {
                city: "Odaipatti",
                state: "Tamil Nadu"
            },
            {
                city: "Odaiyakulam",
                state: "Tamil Nadu"
            },
            {
                city: "Oddanchatram",
                state: "Tamil Nadu"
            },
            {
                city: "Odugathur",
                state: "Tamil Nadu"
            },
            {
                city: "Oggiyamduraipakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Olagadam",
                state: "Tamil Nadu"
            },
            {
                city: "Omalur",
                state: "Tamil Nadu"
            },
            {
                city: "Orathanadu (Mukthambalpuram)",
                state: "Tamil Nadu"
            },
            {
                city: "Othakadai",
                state: "Tamil Nadu"
            },
            {
                city: "Othakalmandapam",
                state: "Tamil Nadu"
            },
            {
                city: "Ottapparai",
                state: "Tamil Nadu"
            },
            {
                city: "P. J. Cholapuram",
                state: "Tamil Nadu"
            },
            {
                city: "P.Mettupalayam",
                state: "Tamil Nadu"
            },
            {
                city: "P.N.Patti",
                state: "Tamil Nadu"
            },
            {
                city: "Pacode",
                state: "Tamil Nadu"
            },
            {
                city: "Padaiveedu",
                state: "Tamil Nadu"
            },
            {
                city: "Padianallur",
                state: "Tamil Nadu"
            },
            {
                city: "Padirikuppam",
                state: "Tamil Nadu"
            },
            {
                city: "Palaganangudy",
                state: "Tamil Nadu"
            },
            {
                city: "Palakkodu",
                state: "Tamil Nadu"
            },
            {
                city: "Palamedu",
                state: "Tamil Nadu"
            },
            {
                city: "Palani Chettipatti",
                state: "Tamil Nadu"
            },
            {
                city: "Palavakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Palavansathu",
                state: "Tamil Nadu"
            },
            {
                city: "Palayam",
                state: "Tamil Nadu"
            },
            {
                city: "Palladam",
                state: "Tamil Nadu"
            },
            {
                city: "Pallapalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Pallapalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Pallapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Pallapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Pallapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Pallathur",
                state: "Tamil Nadu"
            },
            {
                city: "Pallikaranai",
                state: "Tamil Nadu"
            },
            {
                city: "Pallikonda",
                state: "Tamil Nadu"
            },
            {
                city: "Pallipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Pallipalayam Agraharam",
                state: "Tamil Nadu"
            },
            {
                city: "Pallipattu",
                state: "Tamil Nadu"
            },
            {
                city: "Pammal",
                state: "Tamil Nadu"
            },
            {
                city: "Panagudi",
                state: "Tamil Nadu"
            },
            {
                city: "Panaimarathupatti",
                state: "Tamil Nadu"
            },
            {
                city: "Panapakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Panboli",
                state: "Tamil Nadu"
            },
            {
                city: "Pandamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Pannaikadu",
                state: "Tamil Nadu"
            },
            {
                city: "Pannaipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Papanasam",
                state: "Tamil Nadu"
            },
            {
                city: "Pappankurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Papparapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Papparapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Pappireddipatti",
                state: "Tamil Nadu"
            },
            {
                city: "Paramathi",
                state: "Tamil Nadu"
            },
            {
                city: "Parangipettai",
                state: "Tamil Nadu"
            },
            {
                city: "Paravai",
                state: "Tamil Nadu"
            },
            {
                city: "Pasur",
                state: "Tamil Nadu"
            },
            {
                city: "Pathamadai",
                state: "Tamil Nadu"
            },
            {
                city: "Pattinam",
                state: "Tamil Nadu"
            },
            {
                city: "Pattiveeranpatti",
                state: "Tamil Nadu"
            },
            {
                city: "Pazhugal",
                state: "Tamil Nadu"
            },
            {
                city: "Peerkankaranai",
                state: "Tamil Nadu"
            },
            {
                city: "Pennadam",
                state: "Tamil Nadu"
            },
            {
                city: "Pennagaram",
                state: "Tamil Nadu"
            },
            {
                city: "Pennathur",
                state: "Tamil Nadu"
            },
            {
                city: "Peraiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Peralam",
                state: "Tamil Nadu"
            },
            {
                city: "Perambalur",
                state: "Tamil Nadu"
            },
            {
                city: "Peranamallur",
                state: "Tamil Nadu"
            },
            {
                city: "Peravurani",
                state: "Tamil Nadu"
            },
            {
                city: "Periya Negamam",
                state: "Tamil Nadu"
            },
            {
                city: "Periyakodiveri",
                state: "Tamil Nadu"
            },
            {
                city: "Periyanaickenpalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Periyapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Periyasemur",
                state: "Tamil Nadu"
            },
            {
                city: "Pernampattu",
                state: "Tamil Nadu"
            },
            {
                city: "Perumagalur",
                state: "Tamil Nadu"
            },
            {
                city: "Perumandi",
                state: "Tamil Nadu"
            },
            {
                city: "Perumuchi",
                state: "Tamil Nadu"
            },
            {
                city: "Perundurai",
                state: "Tamil Nadu"
            },
            {
                city: "Perungalathur",
                state: "Tamil Nadu"
            },
            {
                city: "Perungudi",
                state: "Tamil Nadu"
            },
            {
                city: "Perungulam",
                state: "Tamil Nadu"
            },
            {
                city: "Perur",
                state: "Tamil Nadu"
            },
            {
                city: "Pethampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Pethanaickenpalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Pillanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Polichalur",
                state: "Tamil Nadu"
            },
            {
                city: "Polur",
                state: "Tamil Nadu"
            },
            {
                city: "Ponmani",
                state: "Tamil Nadu"
            },
            {
                city: "Ponnamaravathi",
                state: "Tamil Nadu"
            },
            {
                city: "Ponnampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Ponneri",
                state: "Tamil Nadu"
            },
            {
                city: "Poolambadi",
                state: "Tamil Nadu"
            },
            {
                city: "Poolampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Pooluvapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Poonamallee",
                state: "Tamil Nadu"
            },
            {
                city: "Porur",
                state: "Tamil Nadu"
            },
            {
                city: "Pothanur",
                state: "Tamil Nadu"
            },
            {
                city: "Pothatturpettai",
                state: "Tamil Nadu"
            },
            {
                city: "Pudukadai",
                state: "Tamil Nadu"
            },
            {
                city: "Pudukkottai",
                state: "Tamil Nadu"
            },
            {
                city: "Pudupalaiyam Aghraharam",
                state: "Tamil Nadu"
            },
            {
                city: "Pudupalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Pudupatti",
                state: "Tamil Nadu"
            },
            {
                city: "Pudupatti",
                state: "Tamil Nadu"
            },
            {
                city: "Pudupattinam",
                state: "Tamil Nadu"
            },
            {
                city: "Pudur (S)",
                state: "Tamil Nadu"
            },
            {
                city: "Puduvayal",
                state: "Tamil Nadu"
            },
            {
                city: "Puliyur",
                state: "Tamil Nadu"
            },
            {
                city: "Pullampadi",
                state: "Tamil Nadu"
            },
            {
                city: "Punjai Thottakurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Punjaipugalur",
                state: "Tamil Nadu"
            },
            {
                city: "Punjaipuliampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Puthalam",
                state: "Tamil Nadu"
            },
            {
                city: "Puvalur",
                state: "Tamil Nadu"
            },
            {
                city: "Puzhal",
                state: "Tamil Nadu"
            },
            {
                city: "Puzhithivakkam (Ullagaram)",
                state: "Tamil Nadu"
            },
            {
                city: "R.Pudupatti",
                state: "Tamil Nadu"
            },
            {
                city: "R.S.Mangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Alandur",
                state: "Tamil Nadu"
            },
            {
                city: "Ambattur",
                state: "Tamil Nadu"
            },
            {
                city: "Ambur",
                state: "Tamil Nadu"
            },
            {
                city: "Arakonam",
                state: "Tamil Nadu"
            },
            {
                city: "Ramapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Rameswaram",
                state: "Tamil Nadu"
            },
            {
                city: "Arani",
                state: "Tamil Nadu"
            },
            {
                city: "Aranthangi",
                state: "Tamil Nadu"
            },
            {
                city: "Arcot",
                state: "Tamil Nadu"
            },
            {
                city: "Aruppukkottai",
                state: "Tamil Nadu"
            },
            {
                city: "Attur",
                state: "Tamil Nadu"
            },
            {
                city: "Avadi",
                state: "Tamil Nadu"
            },
            {
                city: "Bhavani",
                state: "Tamil Nadu"
            },
            {
                city: "Bodinayakkanur",
                state: "Tamil Nadu"
            },
            {
                city: "Chengalpattu",
                state: "Tamil Nadu"
            },
            {
                city: "Chidambaram",
                state: "Tamil Nadu"
            },
            {
                city: "Chinnamanur",
                state: "Tamil Nadu"
            },
            {
                city: "Coonoor",
                state: "Tamil Nadu"
            },
            {
                city: "Rasipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Cuddalore",
                state: "Tamil Nadu"
            },
            {
                city: "Devakottai",
                state: "Tamil Nadu"
            },
            {
                city: "Dharapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Dharmapuri",
                state: "Tamil Nadu"
            },
            {
                city: "Dindigul",
                state: "Tamil Nadu"
            },
            {
                city: "Edappadi",
                state: "Tamil Nadu"
            },
            {
                city: "Erode",
                state: "Tamil Nadu"
            },
            {
                city: "Gobichettipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Rayagiri",
                state: "Tamil Nadu"
            },
            {
                city: "Gudiyatham",
                state: "Tamil Nadu"
            },
            {
                city: "Reethapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Hosur",
                state: "Tamil Nadu"
            },
            {
                city: "Kadayanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Kambam",
                state: "Tamil Nadu"
            },
            {
                city: "Kancheepuram",
                state: "Tamil Nadu"
            },
            {
                city: "Rosalpatti",
                state: "Tamil Nadu"
            },
            {
                city: "Karaikkudi",
                state: "Tamil Nadu"
            },
            {
                city: "Rudravathi",
                state: "Tamil Nadu"
            },
            {
                city: "S. Kannanur",
                state: "Tamil Nadu"
            },
            {
                city: "S.Kodikulam",
                state: "Tamil Nadu"
            },
            {
                city: "S.Nallur",
                state: "Tamil Nadu"
            },
            {
                city: "Karur",
                state: "Tamil Nadu"
            },
            {
                city: "Kattivakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Kodaikanal",
                state: "Tamil Nadu"
            },
            {
                city: "Kolachal",
                state: "Tamil Nadu"
            },
            {
                city: "Kouthanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Kovilpatti",
                state: "Tamil Nadu"
            },
            {
                city: "Krishnagiri",
                state: "Tamil Nadu"
            },
            {
                city: "Kulithalai",
                state: "Tamil Nadu"
            },
            {
                city: "Salangapalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Kumarapalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Salem",
                state: "Tamil Nadu"
            },
            {
                city: "Kumbakonam",
                state: "Tamil Nadu"
            },
            {
                city: "Kuzhithurai",
                state: "Tamil Nadu"
            },
            {
                city: "Samalapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Madavaram",
                state: "Tamil Nadu"
            },
            {
                city: "Maduranthakam",
                state: "Tamil Nadu"
            },
            {
                city: "Samathur",
                state: "Tamil Nadu"
            },
            {
                city: "Manapparai",
                state: "Tamil Nadu"
            },
            {
                city: "Sambavar Vadagarai",
                state: "Tamil Nadu"
            },
            {
                city: "Mannargudi",
                state: "Tamil Nadu"
            },
            {
                city: "Mayiladuthurai",
                state: "Tamil Nadu"
            },
            {
                city: "Melur",
                state: "Tamil Nadu"
            },
            {
                city: "Mettupalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Mettur",
                state: "Tamil Nadu"
            },
            {
                city: "Nagapattinam",
                state: "Tamil Nadu"
            },
            {
                city: "Nagercoil",
                state: "Tamil Nadu"
            },
            {
                city: "Sankaramanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Namakkal",
                state: "Tamil Nadu"
            },
            {
                city: "Sankarapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Sankari",
                state: "Tamil Nadu"
            },
            {
                city: "Sankarnagar",
                state: "Tamil Nadu"
            },
            {
                city: "Nellikuppam",
                state: "Tamil Nadu"
            },
            {
                city: "Padmanabhapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Palani",
                state: "Tamil Nadu"
            },
            {
                city: "Saravanampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Sarcarsamakulam",
                state: "Tamil Nadu"
            },
            {
                city: "Pallavaram",
                state: "Tamil Nadu"
            },
            {
                city: "Panruti",
                state: "Tamil Nadu"
            },
            {
                city: "Paramakudi",
                state: "Tamil Nadu"
            },
            {
                city: "Pattukkottai",
                state: "Tamil Nadu"
            },
            {
                city: "Periyakulam",
                state: "Tamil Nadu"
            },
            {
                city: "Sathankulam",
                state: "Tamil Nadu"
            },
            {
                city: "Sathiyavijayanagaram",
                state: "Tamil Nadu"
            },
            {
                city: "Sathuvachari",
                state: "Tamil Nadu"
            },
            {
                city: "Pollachi",
                state: "Tamil Nadu"
            },
            {
                city: "Pudukkottai",
                state: "Tamil Nadu"
            },
            {
                city: "Puliyankudi",
                state: "Tamil Nadu"
            },
            {
                city: "Rajapalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Ramanathapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Sayalgudi",
                state: "Tamil Nadu"
            },
            {
                city: "Sayapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Seerapalli",
                state: "Tamil Nadu"
            },
            {
                city: "Seevur",
                state: "Tamil Nadu"
            },
            {
                city: "Ranipettai",
                state: "Tamil Nadu"
            },
            {
                city: "Seithur",
                state: "Tamil Nadu"
            },
            {
                city: "Sembakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Semmipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Sankarankoil",
                state: "Tamil Nadu"
            },
            {
                city: "Senthamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Sentharapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Senur",
                state: "Tamil Nadu"
            },
            {
                city: "Sathyamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Sattur",
                state: "Tamil Nadu"
            },
            {
                city: "Shenkottai",
                state: "Tamil Nadu"
            },
            {
                city: "Sirkali",
                state: "Tamil Nadu"
            },
            {
                city: "Sivaganga",
                state: "Tamil Nadu"
            },
            {
                city: "Sethiathoppu",
                state: "Tamil Nadu"
            },
            {
                city: "Sevilimedu",
                state: "Tamil Nadu"
            },
            {
                city: "Sevugampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Sivakasi",
                state: "Tamil Nadu"
            },
            {
                city: "Srivilliputhur",
                state: "Tamil Nadu"
            },
            {
                city: "Tambaram",
                state: "Tamil Nadu"
            },
            {
                city: "Tenkasi",
                state: "Tamil Nadu"
            },
            {
                city: "Thanjavur",
                state: "Tamil Nadu"
            },
            {
                city: "Shenbakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Theni Allinagaram",
                state: "Tamil Nadu"
            },
            {
                city: "Thirumangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruthuraipoondi",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvallur",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvarur",
                state: "Tamil Nadu"
            },
            {
                city: "Sholavandan",
                state: "Tamil Nadu"
            },
            {
                city: "Sholinganallur",
                state: "Tamil Nadu"
            },
            {
                city: "Sholingur",
                state: "Tamil Nadu"
            },
            {
                city: "Sholur",
                state: "Tamil Nadu"
            },
            {
                city: "Thoothukkudi",
                state: "Tamil Nadu"
            },
            {
                city: "Thuraiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Tindivanam",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruchengode",
                state: "Tamil Nadu"
            },
            {
                city: "Tirupathur",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruppur",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruvannamalai",
                state: "Tamil Nadu"
            },
            {
                city: "Sikkarayapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Singampuneri",
                state: "Tamil Nadu"
            },
            {
                city: "Singaperumalkoil",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruvethipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruvottiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Udhagamandalam",
                state: "Tamil Nadu"
            },
            {
                city: "Udumalaipettai",
                state: "Tamil Nadu"
            },
            {
                city: "Sirugamani",
                state: "Tamil Nadu"
            },
            {
                city: "Sirumugai",
                state: "Tamil Nadu"
            },
            {
                city: "Usilampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Sithayankottai",
                state: "Tamil Nadu"
            },
            {
                city: "Sithurajapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Vandavasi",
                state: "Tamil Nadu"
            },
            {
                city: "Sivagiri",
                state: "Tamil Nadu"
            },
            {
                city: "Sivagiri",
                state: "Tamil Nadu"
            },
            {
                city: "Vaniyambadi",
                state: "Tamil Nadu"
            },
            {
                city: "Sivanthipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Vellore",
                state: "Tamil Nadu"
            },
            {
                city: "Viluppuram",
                state: "Tamil Nadu"
            },
            {
                city: "Virudhachalam",
                state: "Tamil Nadu"
            },
            {
                city: "Virudhunagar",
                state: "Tamil Nadu"
            },
            {
                city: "Walajapet",
                state: "Tamil Nadu"
            },
            {
                city: "Srimushnam",
                state: "Tamil Nadu"
            },
            {
                city: "Sriperumbudur",
                state: "Tamil Nadu"
            },
            {
                city: "Sriramapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Srivaikuntam",
                state: "Tamil Nadu"
            },
            {
                city: "St.Thomas Mount-cum-Pallavaram",
                state: "Tamil Nadu"
            },
            {
                city: "Suchindram",
                state: "Tamil Nadu"
            },
            {
                city: "Suleeswaranpatti",
                state: "Tamil Nadu"
            },
            {
                city: "Sulur",
                state: "Tamil Nadu"
            },
            {
                city: "Sundarapandiam",
                state: "Tamil Nadu"
            },
            {
                city: "Sundarapandiapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Surampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Surandai",
                state: "Tamil Nadu"
            },
            {
                city: "Suriyampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Swamimalai",
                state: "Tamil Nadu"
            },
            {
                city: "T.Kallupatti",
                state: "Tamil Nadu"
            },
            {
                city: "Tayilupatti",
                state: "Tamil Nadu"
            },
            {
                city: "Thadikombu",
                state: "Tamil Nadu"
            },
            {
                city: "Thakkolam",
                state: "Tamil Nadu"
            },
            {
                city: "Thalainayar",
                state: "Tamil Nadu"
            },
            {
                city: "Thalakudi",
                state: "Tamil Nadu"
            },
            {
                city: "Thamaraikulam",
                state: "Tamil Nadu"
            },
            {
                city: "Thammampatti",
                state: "Tamil Nadu"
            },
            {
                city: "Thanthoni",
                state: "Tamil Nadu"
            },
            {
                city: "Tharamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Tharangambadi",
                state: "Tamil Nadu"
            },
            {
                city: "Thathaiyangarpet",
                state: "Tamil Nadu"
            },
            {
                city: "Thedavur",
                state: "Tamil Nadu"
            },
            {
                city: "Thenambakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Thengampudur",
                state: "Tamil Nadu"
            },
            {
                city: "Thenkarai",
                state: "Tamil Nadu"
            },
            {
                city: "Thenkarai",
                state: "Tamil Nadu"
            },
            {
                city: "Thenthamaraikulam",
                state: "Tamil Nadu"
            },
            {
                city: "Thenthiruperai",
                state: "Tamil Nadu"
            },
            {
                city: "Thesur",
                state: "Tamil Nadu"
            },
            {
                city: "Thevaram",
                state: "Tamil Nadu"
            },
            {
                city: "Thevur",
                state: "Tamil Nadu"
            },
            {
                city: "Thiagadurgam",
                state: "Tamil Nadu"
            },
            {
                city: "Thingalnagar",
                state: "Tamil Nadu"
            },
            {
                city: "Thirukarungudi",
                state: "Tamil Nadu"
            },
            {
                city: "Thirukattupalli",
                state: "Tamil Nadu"
            },
            {
                city: "Thirumalayampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Thirumazhisai",
                state: "Tamil Nadu"
            },
            {
                city: "Thirunagar",
                state: "Tamil Nadu"
            },
            {
                city: "Thirunageswaram",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruneermalai",
                state: "Tamil Nadu"
            },
            {
                city: "Thirunindravur",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruparankundram",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruparappu",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruporur",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruppanandal",
                state: "Tamil Nadu"
            },
            {
                city: "Thirupuvanam",
                state: "Tamil Nadu"
            },
            {
                city: "Thirupuvanam",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruthangal",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvaiyaru",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvalam",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvattaru",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvenkatam",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvennainallur",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruverumbur",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvidaimarudur",
                state: "Tamil Nadu"
            },
            {
                city: "Thiruvithankodu",
                state: "Tamil Nadu"
            },
            {
                city: "Thisayanvilai",
                state: "Tamil Nadu"
            },
            {
                city: "Thittacheri",
                state: "Tamil Nadu"
            },
            {
                city: "Thondamuthur",
                state: "Tamil Nadu"
            },
            {
                city: "Thondi",
                state: "Tamil Nadu"
            },
            {
                city: "Thorapadi",
                state: "Tamil Nadu"
            },
            {
                city: "Thorapadi",
                state: "Tamil Nadu"
            },
            {
                city: "Thottipalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Thottiyam",
                state: "Tamil Nadu"
            },
            {
                city: "Thudiyalur",
                state: "Tamil Nadu"
            },
            {
                city: "Thuthipattu",
                state: "Tamil Nadu"
            },
            {
                city: "Thuvakudi",
                state: "Tamil Nadu"
            },
            {
                city: "Timiri",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruchendur",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruchirappalli",
                state: "Tamil Nadu"
            },
            {
                city: "Tirukalukundram",
                state: "Tamil Nadu"
            },
            {
                city: "Tirukkoyilur",
                state: "Tamil Nadu"
            },
            {
                city: "Tirunelveli",
                state: "Tamil Nadu"
            },
            {
                city: "Tirupathur",
                state: "Tamil Nadu"
            },
            {
                city: "Tirusulam",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruttani",
                state: "Tamil Nadu"
            },
            {
                city: "Tiruverkadu",
                state: "Tamil Nadu"
            },
            {
                city: "Tittakudi",
                state: "Tamil Nadu"
            },
            {
                city: "TNPL Pugalur",
                state: "Tamil Nadu"
            },
            {
                city: "Udangudi",
                state: "Tamil Nadu"
            },
            {
                city: "Udayarpalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Ullur",
                state: "Tamil Nadu"
            },
            {
                city: "Ulundurpettai",
                state: "Tamil Nadu"
            },
            {
                city: "Unjalaur",
                state: "Tamil Nadu"
            },
            {
                city: "Unnamalaikadai",
                state: "Tamil Nadu"
            },
            {
                city: "Uppidamangalam",
                state: "Tamil Nadu"
            },
            {
                city: "Uppiliapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Urapakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Uthamapalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Uthangarai",
                state: "Tamil Nadu"
            },
            {
                city: "Uthayendram",
                state: "Tamil Nadu"
            },
            {
                city: "Uthiramerur",
                state: "Tamil Nadu"
            },
            {
                city: "Uthukkottai",
                state: "Tamil Nadu"
            },
            {
                city: "Uthukuli",
                state: "Tamil Nadu"
            },
            {
                city: "V. Pudur",
                state: "Tamil Nadu"
            },
            {
                city: "Vadakarai Keezhpadugai",
                state: "Tamil Nadu"
            },
            {
                city: "Vadakkanandal",
                state: "Tamil Nadu"
            },
            {
                city: "Vadakkuvalliyur",
                state: "Tamil Nadu"
            },
            {
                city: "Vadalur",
                state: "Tamil Nadu"
            },
            {
                city: "Vadamadurai",
                state: "Tamil Nadu"
            },
            {
                city: "Vadavalli",
                state: "Tamil Nadu"
            },
            {
                city: "Vadipatti",
                state: "Tamil Nadu"
            },
            {
                city: "Vadugapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Vadugapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Vaitheeswarankoil",
                state: "Tamil Nadu"
            },
            {
                city: "Valangaiman",
                state: "Tamil Nadu"
            },
            {
                city: "Valasaravakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Valavanur",
                state: "Tamil Nadu"
            },
            {
                city: "Vallam",
                state: "Tamil Nadu"
            },
            {
                city: "Valparai",
                state: "Tamil Nadu"
            },
            {
                city: "Valvaithankoshtam",
                state: "Tamil Nadu"
            },
            {
                city: "Vanavasi",
                state: "Tamil Nadu"
            },
            {
                city: "Vandalur",
                state: "Tamil Nadu"
            },
            {
                city: "Vandiyur",
                state: "Tamil Nadu"
            },
            {
                city: "Vaniputhur",
                state: "Tamil Nadu"
            },
            {
                city: "Varadarajanpettai",
                state: "Tamil Nadu"
            },
            {
                city: "Vasudevanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Vathirairuppu",
                state: "Tamil Nadu"
            },
            {
                city: "Vazhapadi",
                state: "Tamil Nadu"
            },
            {
                city: "Vedapatti",
                state: "Tamil Nadu"
            },
            {
                city: "Vedaranyam",
                state: "Tamil Nadu"
            },
            {
                city: "Vedasandur",
                state: "Tamil Nadu"
            },
            {
                city: "Veeraganur",
                state: "Tamil Nadu"
            },
            {
                city: "Veerakeralam",
                state: "Tamil Nadu"
            },
            {
                city: "Veerakkalpudur",
                state: "Tamil Nadu"
            },
            {
                city: "Veerapandi",
                state: "Tamil Nadu"
            },
            {
                city: "Veerapandi",
                state: "Tamil Nadu"
            },
            {
                city: "Veerapandi",
                state: "Tamil Nadu"
            },
            {
                city: "Veerappanchatram",
                state: "Tamil Nadu"
            },
            {
                city: "Veeravanallur",
                state: "Tamil Nadu"
            },
            {
                city: "Velampalayam",
                state: "Tamil Nadu"
            },
            {
                city: "Velankanni",
                state: "Tamil Nadu"
            },
            {
                city: "Vellakinar",
                state: "Tamil Nadu"
            },
            {
                city: "Vellakoil",
                state: "Tamil Nadu"
            },
            {
                city: "Vellalur",
                state: "Tamil Nadu"
            },
            {
                city: "Vellimalai",
                state: "Tamil Nadu"
            },
            {
                city: "Vellottamparappu",
                state: "Tamil Nadu"
            },
            {
                city: "Velur",
                state: "Tamil Nadu"
            },
            {
                city: "Vengampudur",
                state: "Tamil Nadu"
            },
            {
                city: "Vengathur",
                state: "Tamil Nadu"
            },
            {
                city: "Venkarai",
                state: "Tamil Nadu"
            },
            {
                city: "Vennanthur",
                state: "Tamil Nadu"
            },
            {
                city: "Veppathur",
                state: "Tamil Nadu"
            },
            {
                city: "Verkilambi",
                state: "Tamil Nadu"
            },
            {
                city: "Vettaikaranpudur",
                state: "Tamil Nadu"
            },
            {
                city: "Vettavalam",
                state: "Tamil Nadu"
            },
            {
                city: "Vijayapuri",
                state: "Tamil Nadu"
            },
            {
                city: "Vikramasingapuram",
                state: "Tamil Nadu"
            },
            {
                city: "Vikravandi",
                state: "Tamil Nadu"
            },
            {
                city: "Vilangudi",
                state: "Tamil Nadu"
            },
            {
                city: "Vilankurichi",
                state: "Tamil Nadu"
            },
            {
                city: "Vilapakkam",
                state: "Tamil Nadu"
            },
            {
                city: "Vilathikulam",
                state: "Tamil Nadu"
            },
            {
                city: "Vilavur",
                state: "Tamil Nadu"
            },
            {
                city: "Villukuri",
                state: "Tamil Nadu"
            },
            {
                city: "Virupakshipuram",
                state: "Tamil Nadu"
            },
            {
                city: "Viswanatham",
                state: "Tamil Nadu"
            },
            {
                city: "Walajabad",
                state: "Tamil Nadu"
            },
            {
                city: "Wellington",
                state: "Tamil Nadu"
            },
            {
                city: "Zamin Uthukuli",
                state: "Tamil Nadu"
            },
            {
                city: "Agartala",
                state: "Tripura"
            },
            {
                city: "Amarpur",
                state: "Tripura"
            },
            {
                city: "Ambassa",
                state: "Tripura"
            },
            {
                city: "Badharghat",
                state: "Tripura"
            },
            {
                city: "Belonia",
                state: "Tripura"
            },
            {
                city: "Dharmanagar",
                state: "Tripura"
            },
            {
                city: "Gakulnagar",
                state: "Tripura"
            },
            {
                city: "Gandhigram",
                state: "Tripura"
            },
            {
                city: "Indranagar",
                state: "Tripura"
            },
            {
                city: "Jogendranagar",
                state: "Tripura"
            },
            {
                city: "Kailasahar",
                state: "Tripura"
            },
            {
                city: "Kamalpur",
                state: "Tripura"
            },
            {
                city: "Kanchanpur",
                state: "Tripura"
            },
            {
                city: "Khowai",
                state: "Tripura"
            },
            {
                city: "Kumarghat",
                state: "Tripura"
            },
            {
                city: "Kunjaban",
                state: "Tripura"
            },
            {
                city: "Narsingarh",
                state: "Tripura"
            },
            {
                city: "Pratapgarh",
                state: "Tripura"
            },
            {
                city: "Ranirbazar",
                state: "Tripura"
            },
            {
                city: "Sabroom",
                state: "Tripura"
            },
            {
                city: "Sonamura",
                state: "Tripura"
            },
            {
                city: "Teliamura",
                state: "Tripura"
            },
            {
                city: "Udaipur",
                state: "Tripura"
            },
            {
                city: "Achhalda",
                state: "Uttar Pradesh"
            },
            {
                city: "Achhnera",
                state: "Uttar Pradesh"
            },
            {
                city: "Adari",
                state: "Uttar Pradesh"
            },
            {
                city: "Afzalgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Agarwal Mandi",
                state: "Uttar Pradesh"
            },
            {
                city: "Agra",
                state: "Uttar Pradesh"
            },
            {
                city: "Agra",
                state: "Uttar Pradesh"
            },
            {
                city: "Ahraura",
                state: "Uttar Pradesh"
            },
            {
                city: "Ailum",
                state: "Uttar Pradesh"
            },
            {
                city: "Air Force Area",
                state: "Uttar Pradesh"
            },
            {
                city: "Ajhuwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Akbarpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Akbarpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Aliganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Aligarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Allahabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Allahabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Allahganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Allapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Amanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Ambehta",
                state: "Uttar Pradesh"
            },
            {
                city: "Amethi",
                state: "Uttar Pradesh"
            },
            {
                city: "Amethi",
                state: "Uttar Pradesh"
            },
            {
                city: "Amila",
                state: "Uttar Pradesh"
            },
            {
                city: "Amilo",
                state: "Uttar Pradesh"
            },
            {
                city: "Aminagar Sarai",
                state: "Uttar Pradesh"
            },
            {
                city: "Aminagar Urf Bhurbaral",
                state: "Uttar Pradesh"
            },
            {
                city: "Amraudha",
                state: "Uttar Pradesh"
            },
            {
                city: "Amroha",
                state: "Uttar Pradesh"
            },
            {
                city: "Anandnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Anpara",
                state: "Uttar Pradesh"
            },
            {
                city: "Antu",
                state: "Uttar Pradesh"
            },
            {
                city: "Anupshahr",
                state: "Uttar Pradesh"
            },
            {
                city: "Aonla",
                state: "Uttar Pradesh"
            },
            {
                city: "Armapur Estate",
                state: "Uttar Pradesh"
            },
            {
                city: "Ashrafpur Kichhauchha",
                state: "Uttar Pradesh"
            },
            {
                city: "Atarra",
                state: "Uttar Pradesh"
            },
            {
                city: "Atasu",
                state: "Uttar Pradesh"
            },
            {
                city: "Atrauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Atraulia",
                state: "Uttar Pradesh"
            },
            {
                city: "Auraiya",
                state: "Uttar Pradesh"
            },
            {
                city: "Aurangabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Aurangabad Bangar",
                state: "Uttar Pradesh"
            },
            {
                city: "Auras",
                state: "Uttar Pradesh"
            },
            {
                city: "Awagarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Ayodhya",
                state: "Uttar Pradesh"
            },
            {
                city: "Azamgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Azizpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Azmatgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Babarpur Ajitmal",
                state: "Uttar Pradesh"
            },
            {
                city: "Baberu",
                state: "Uttar Pradesh"
            },
            {
                city: "Babina",
                state: "Uttar Pradesh"
            },
            {
                city: "Babrala",
                state: "Uttar Pradesh"
            },
            {
                city: "Babugarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Bachhraon",
                state: "Uttar Pradesh"
            },
            {
                city: "Bachhrawan",
                state: "Uttar Pradesh"
            },
            {
                city: "Bad",
                state: "Uttar Pradesh"
            },
            {
                city: "Baghpat",
                state: "Uttar Pradesh"
            },
            {
                city: "Bah",
                state: "Uttar Pradesh"
            },
            {
                city: "Bahadurganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Baheri",
                state: "Uttar Pradesh"
            },
            {
                city: "Bahjoi",
                state: "Uttar Pradesh"
            },
            {
                city: "Bahraich",
                state: "Uttar Pradesh"
            },
            {
                city: "Bahsuma",
                state: "Uttar Pradesh"
            },
            {
                city: "Bahuwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Bajna",
                state: "Uttar Pradesh"
            },
            {
                city: "Bakewar",
                state: "Uttar Pradesh"
            },
            {
                city: "Bakiabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Baldeo",
                state: "Uttar Pradesh"
            },
            {
                city: "Ballia",
                state: "Uttar Pradesh"
            },
            {
                city: "Balrampur",
                state: "Uttar Pradesh"
            },
            {
                city: "Banat",
                state: "Uttar Pradesh"
            },
            {
                city: "Banda",
                state: "Uttar Pradesh"
            },
            {
                city: "Bangarmau",
                state: "Uttar Pradesh"
            },
            {
                city: "Banki",
                state: "Uttar Pradesh"
            },
            {
                city: "Bansdih",
                state: "Uttar Pradesh"
            },
            {
                city: "Bansgaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Bansi",
                state: "Uttar Pradesh"
            },
            {
                city: "Baragaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Baragaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Baraut",
                state: "Uttar Pradesh"
            },
            {
                city: "Bareilly",
                state: "Uttar Pradesh"
            },
            {
                city: "Bareilly",
                state: "Uttar Pradesh"
            },
            {
                city: "Barhalganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Barhani Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Barkhera",
                state: "Uttar Pradesh"
            },
            {
                city: "Barsana",
                state: "Uttar Pradesh"
            },
            {
                city: "Barua Sagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Barwar",
                state: "Uttar Pradesh"
            },
            {
                city: "Basti",
                state: "Uttar Pradesh"
            },
            {
                city: "Begumabad Budhana",
                state: "Uttar Pradesh"
            },
            {
                city: "Behta Hajipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bela Pratapgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Belthara Road",
                state: "Uttar Pradesh"
            },
            {
                city: "Beniganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Beswan",
                state: "Uttar Pradesh"
            },
            {
                city: "Bewar",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhadarsa",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhadohi",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhagwant Nagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Bharatganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhargain",
                state: "Uttar Pradesh"
            },
            {
                city: "Bharthana",
                state: "Uttar Pradesh"
            },
            {
                city: "Bharuhana",
                state: "Uttar Pradesh"
            },
            {
                city: "Bharwari",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhatni Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhatpar Rani",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhawan Bahadur Nagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhinga",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhogaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhojpur Dharampur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhokarhedi",
                state: "Uttar Pradesh"
            },
            {
                city: "Bhulepur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bidhuna",
                state: "Uttar Pradesh"
            },
            {
                city: "Bighapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bijnor",
                state: "Uttar Pradesh"
            },
            {
                city: "Bijpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bikapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilari",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilariaganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilaspur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilaspur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilgram",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilhaur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilram",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilsanda",
                state: "Uttar Pradesh"
            },
            {
                city: "Bilsi",
                state: "Uttar Pradesh"
            },
            {
                city: "Bindki",
                state: "Uttar Pradesh"
            },
            {
                city: "Bisalpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Bisanda Buzurg",
                state: "Uttar Pradesh"
            },
            {
                city: "Bisauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Bisharatganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Bisokhar",
                state: "Uttar Pradesh"
            },
            {
                city: "Biswan",
                state: "Uttar Pradesh"
            },
            {
                city: "Bithoor",
                state: "Uttar Pradesh"
            },
            {
                city: "Budaun",
                state: "Uttar Pradesh"
            },
            {
                city: "Budhana",
                state: "Uttar Pradesh"
            },
            {
                city: "Bugrasi",
                state: "Uttar Pradesh"
            },
            {
                city: "Bulandshahr",
                state: "Uttar Pradesh"
            },
            {
                city: "Chail",
                state: "Uttar Pradesh"
            },
            {
                city: "Chak Imam Ali",
                state: "Uttar Pradesh"
            },
            {
                city: "Chakeri",
                state: "Uttar Pradesh"
            },
            {
                city: "Chakia",
                state: "Uttar Pradesh"
            },
            {
                city: "Chandauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Chandausi",
                state: "Uttar Pradesh"
            },
            {
                city: "Chandpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Charkhari",
                state: "Uttar Pradesh"
            },
            {
                city: "Charthaval",
                state: "Uttar Pradesh"
            },
            {
                city: "Chaumuhan",
                state: "Uttar Pradesh"
            },
            {
                city: "Chhaprauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Chharra Rafatpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Chhata",
                state: "Uttar Pradesh"
            },
            {
                city: "Chhatari",
                state: "Uttar Pradesh"
            },
            {
                city: "Chhibramau",
                state: "Uttar Pradesh"
            },
            {
                city: "Chhutmalpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Chilkana Sultanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Chirgaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Chitbara Gaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Chitrakoot Dham (Karwi)",
                state: "Uttar Pradesh"
            },
            {
                city: "Chopan",
                state: "Uttar Pradesh"
            },
            {
                city: "Choubepur Kalan",
                state: "Uttar Pradesh"
            },
            {
                city: "Chunar",
                state: "Uttar Pradesh"
            },
            {
                city: "Churk Ghurma",
                state: "Uttar Pradesh"
            },
            {
                city: "Colonelganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Dadri",
                state: "Uttar Pradesh"
            },
            {
                city: "Dalmau",
                state: "Uttar Pradesh"
            },
            {
                city: "Dankaur",
                state: "Uttar Pradesh"
            },
            {
                city: "Dariyabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Dasna",
                state: "Uttar Pradesh"
            },
            {
                city: "Dataganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Daurala",
                state: "Uttar Pradesh"
            },
            {
                city: "Dayalbagh",
                state: "Uttar Pradesh"
            },
            {
                city: "Deoband",
                state: "Uttar Pradesh"
            },
            {
                city: "Deoranian",
                state: "Uttar Pradesh"
            },
            {
                city: "Deoria",
                state: "Uttar Pradesh"
            },
            {
                city: "Dewa",
                state: "Uttar Pradesh"
            },
            {
                city: "Dhampur",
                state: "Uttar Pradesh"
            },
            {
                city: "Dhanauha",
                state: "Uttar Pradesh"
            },
            {
                city: "Dhanauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Dhanaura",
                state: "Uttar Pradesh"
            },
            {
                city: "Dharoti Khurd",
                state: "Uttar Pradesh"
            },
            {
                city: "Dhaura Tanda",
                state: "Uttar Pradesh"
            },
            {
                city: "Dhaurehra",
                state: "Uttar Pradesh"
            },
            {
                city: "Dibai",
                state: "Uttar Pradesh"
            },
            {
                city: "Dibiyapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Dildarnagar Fatehpur Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Doghat",
                state: "Uttar Pradesh"
            },
            {
                city: "Dohrighat",
                state: "Uttar Pradesh"
            },
            {
                city: "Dostpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Dudhi",
                state: "Uttar Pradesh"
            },
            {
                city: "Dulhipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Ekdil",
                state: "Uttar Pradesh"
            },
            {
                city: "Erich",
                state: "Uttar Pradesh"
            },
            {
                city: "Etah",
                state: "Uttar Pradesh"
            },
            {
                city: "Etawah",
                state: "Uttar Pradesh"
            },
            {
                city: "Etmadpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Faizabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Faizabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Faizganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Farah",
                state: "Uttar Pradesh"
            },
            {
                city: "Faridnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Faridpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Faridpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Fariha",
                state: "Uttar Pradesh"
            },
            {
                city: "Farrukhabad-cum-Fatehgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Fatehabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Fatehganj Pashchimi",
                state: "Uttar Pradesh"
            },
            {
                city: "Fatehganj Purvi",
                state: "Uttar Pradesh"
            },
            {
                city: "Fatehgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Fatehpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Fatehpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Fatehpur Chaurasi",
                state: "Uttar Pradesh"
            },
            {
                city: "Fatehpur Sikri",
                state: "Uttar Pradesh"
            },
            {
                city: "Firozabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Gajraula",
                state: "Uttar Pradesh"
            },
            {
                city: "Gangaghat",
                state: "Uttar Pradesh"
            },
            {
                city: "Gangapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Gangoh",
                state: "Uttar Pradesh"
            },
            {
                city: "Ganj Dundawara",
                state: "Uttar Pradesh"
            },
            {
                city: "Ganj Muradabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Garautha",
                state: "Uttar Pradesh"
            },
            {
                city: "Garhi Pukhta",
                state: "Uttar Pradesh"
            },
            {
                city: "Garhmukteshwar",
                state: "Uttar Pradesh"
            },
            {
                city: "Gaura Barhaj",
                state: "Uttar Pradesh"
            },
            {
                city: "Gauri Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Gausganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Gawan",
                state: "Uttar Pradesh"
            },
            {
                city: "Ghatampur",
                state: "Uttar Pradesh"
            },
            {
                city: "Ghaziabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Ghazipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Ghiraur",
                state: "Uttar Pradesh"
            },
            {
                city: "Ghorawal",
                state: "Uttar Pradesh"
            },
            {
                city: "Ghosi",
                state: "Uttar Pradesh"
            },
            {
                city: "Ghosia Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Ghughuli",
                state: "Uttar Pradesh"
            },
            {
                city: "Gohand",
                state: "Uttar Pradesh"
            },
            {
                city: "Gokul",
                state: "Uttar Pradesh"
            },
            {
                city: "Gola Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Gola Gokarannath",
                state: "Uttar Pradesh"
            },
            {
                city: "Gonda",
                state: "Uttar Pradesh"
            },
            {
                city: "Gopamau",
                state: "Uttar Pradesh"
            },
            {
                city: "Gopiganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Gorakhpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Gosainganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Gosainganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Govardhan",
                state: "Uttar Pradesh"
            },
            {
                city: "Gulaothi",
                state: "Uttar Pradesh"
            },
            {
                city: "Gularia Bhindara",
                state: "Uttar Pradesh"
            },
            {
                city: "Gulariya",
                state: "Uttar Pradesh"
            },
            {
                city: "Gunnaur",
                state: "Uttar Pradesh"
            },
            {
                city: "Gursahaiganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Gursarai",
                state: "Uttar Pradesh"
            },
            {
                city: "Gyanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Hafizpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Haidergarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Haldaur",
                state: "Uttar Pradesh"
            },
            {
                city: "Hamirpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Handia",
                state: "Uttar Pradesh"
            },
            {
                city: "Hapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Hardoi",
                state: "Uttar Pradesh"
            },
            {
                city: "Harduaganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Hargaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Hariharpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Harraiya",
                state: "Uttar Pradesh"
            },
            {
                city: "Hasanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Hasayan",
                state: "Uttar Pradesh"
            },
            {
                city: "Hastinapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Hata",
                state: "Uttar Pradesh"
            },
            {
                city: "Hathras",
                state: "Uttar Pradesh"
            },
            {
                city: "Hyderabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Ibrahimpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Iglas",
                state: "Uttar Pradesh"
            },
            {
                city: "Ikauna",
                state: "Uttar Pradesh"
            },
            {
                city: "Iltifatganj Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Islamnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Itaunja",
                state: "Uttar Pradesh"
            },
            {
                city: "Jafarabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Jagner",
                state: "Uttar Pradesh"
            },
            {
                city: "Jahanabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Jahangirabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Jahangirpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Jais",
                state: "Uttar Pradesh"
            },
            {
                city: "Jaithara",
                state: "Uttar Pradesh"
            },
            {
                city: "Jalalabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Jalalabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Jalalabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Jalali",
                state: "Uttar Pradesh"
            },
            {
                city: "Jalalpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Jalaun",
                state: "Uttar Pradesh"
            },
            {
                city: "Jalesar",
                state: "Uttar Pradesh"
            },
            {
                city: "Jamshila",
                state: "Uttar Pradesh"
            },
            {
                city: "Jangipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Jansath",
                state: "Uttar Pradesh"
            },
            {
                city: "Jarwal",
                state: "Uttar Pradesh"
            },
            {
                city: "Jasrana",
                state: "Uttar Pradesh"
            },
            {
                city: "Jaswantnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Jatari",
                state: "Uttar Pradesh"
            },
            {
                city: "Jaunpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Jewar",
                state: "Uttar Pradesh"
            },
            {
                city: "Jhalu",
                state: "Uttar Pradesh"
            },
            {
                city: "Jhansi",
                state: "Uttar Pradesh"
            },
            {
                city: "Jhansi",
                state: "Uttar Pradesh"
            },
            {
                city: "Jhansi Rly. Settlement",
                state: "Uttar Pradesh"
            },
            {
                city: "Jhinjhak",
                state: "Uttar Pradesh"
            },
            {
                city: "Jhinjhana",
                state: "Uttar Pradesh"
            },
            {
                city: "Jhusi",
                state: "Uttar Pradesh"
            },
            {
                city: "Jhusi Kohna",
                state: "Uttar Pradesh"
            },
            {
                city: "Jiyanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Joya",
                state: "Uttar Pradesh"
            },
            {
                city: "Jyoti Khuria",
                state: "Uttar Pradesh"
            },
            {
                city: "Kabrai",
                state: "Uttar Pradesh"
            },
            {
                city: "Kachhauna Patseni",
                state: "Uttar Pradesh"
            },
            {
                city: "Kachhla",
                state: "Uttar Pradesh"
            },
            {
                city: "Kachhwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Kadaura",
                state: "Uttar Pradesh"
            },
            {
                city: "Kadipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Kailashpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Kaimganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Kairana",
                state: "Uttar Pradesh"
            },
            {
                city: "Kakgaina",
                state: "Uttar Pradesh"
            },
            {
                city: "Kakod",
                state: "Uttar Pradesh"
            },
            {
                city: "Kakori",
                state: "Uttar Pradesh"
            },
            {
                city: "Kakrala",
                state: "Uttar Pradesh"
            },
            {
                city: "Kalinagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Kalpi",
                state: "Uttar Pradesh"
            },
            {
                city: "Kamalganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Kampil",
                state: "Uttar Pradesh"
            },
            {
                city: "Kandhla",
                state: "Uttar Pradesh"
            },
            {
                city: "Kandwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Kannauj",
                state: "Uttar Pradesh"
            },
            {
                city: "Kanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Kanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Kanth",
                state: "Uttar Pradesh"
            },
            {
                city: "Kanth",
                state: "Uttar Pradesh"
            },
            {
                city: "Kaptanganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Karari",
                state: "Uttar Pradesh"
            },
            {
                city: "Karhal",
                state: "Uttar Pradesh"
            },
            {
                city: "Karnawal",
                state: "Uttar Pradesh"
            },
            {
                city: "Kasganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Katariya",
                state: "Uttar Pradesh"
            },
            {
                city: "Katghar Lalganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Kathera",
                state: "Uttar Pradesh"
            },
            {
                city: "Katra",
                state: "Uttar Pradesh"
            },
            {
                city: "Katra",
                state: "Uttar Pradesh"
            },
            {
                city: "Katra Medniganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Kauriaganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Kemri",
                state: "Uttar Pradesh"
            },
            {
                city: "Kerakat",
                state: "Uttar Pradesh"
            },
            {
                city: "Khadda",
                state: "Uttar Pradesh"
            },
            {
                city: "Khaga",
                state: "Uttar Pradesh"
            },
            {
                city: "Khailar",
                state: "Uttar Pradesh"
            },
            {
                city: "Khair",
                state: "Uttar Pradesh"
            },
            {
                city: "Khairabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Khairabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Khalilabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Khamaria",
                state: "Uttar Pradesh"
            },
            {
                city: "Khanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Kharela",
                state: "Uttar Pradesh"
            },
            {
                city: "Khargupur",
                state: "Uttar Pradesh"
            },
            {
                city: "Khariya",
                state: "Uttar Pradesh"
            },
            {
                city: "Kharkhoda",
                state: "Uttar Pradesh"
            },
            {
                city: "Khatauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Khatauli Rural",
                state: "Uttar Pradesh"
            },
            {
                city: "Khekada",
                state: "Uttar Pradesh"
            },
            {
                city: "Kheragarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Kheri",
                state: "Uttar Pradesh"
            },
            {
                city: "Kheta Sarai",
                state: "Uttar Pradesh"
            },
            {
                city: "Khudaganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Khurja",
                state: "Uttar Pradesh"
            },
            {
                city: "Khutar",
                state: "Uttar Pradesh"
            },
            {
                city: "Kiraoli",
                state: "Uttar Pradesh"
            },
            {
                city: "Kiratpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Kishni",
                state: "Uttar Pradesh"
            },
            {
                city: "Kishunpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Kithaur",
                state: "Uttar Pradesh"
            },
            {
                city: "Koeripur",
                state: "Uttar Pradesh"
            },
            {
                city: "Konch",
                state: "Uttar Pradesh"
            },
            {
                city: "Kopaganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Kora Jahanabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Koraon",
                state: "Uttar Pradesh"
            },
            {
                city: "Korwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Kosi Kalan",
                state: "Uttar Pradesh"
            },
            {
                city: "Kota",
                state: "Uttar Pradesh"
            },
            {
                city: "Kotra",
                state: "Uttar Pradesh"
            },
            {
                city: "Kotwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Kul Pahar",
                state: "Uttar Pradesh"
            },
            {
                city: "Kunda",
                state: "Uttar Pradesh"
            },
            {
                city: "Kundarki",
                state: "Uttar Pradesh"
            },
            {
                city: "Kunwargaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Kuraoli",
                state: "Uttar Pradesh"
            },
            {
                city: "Kurara",
                state: "Uttar Pradesh"
            },
            {
                city: "Kursath",
                state: "Uttar Pradesh"
            },
            {
                city: "Kursath",
                state: "Uttar Pradesh"
            },
            {
                city: "Kurthi Jafarpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Kushinagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Kusmara",
                state: "Uttar Pradesh"
            },
            {
                city: "Laharpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Lakhimpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Lakhna",
                state: "Uttar Pradesh"
            },
            {
                city: "Lal Gopalganj Nindaura",
                state: "Uttar Pradesh"
            },
            {
                city: "Lalganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Lalitpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Lar",
                state: "Uttar Pradesh"
            },
            {
                city: "Lawar NP",
                state: "Uttar Pradesh"
            },
            {
                city: "Ledwa Mahua",
                state: "Uttar Pradesh"
            },
            {
                city: "Lohta",
                state: "Uttar Pradesh"
            },
            {
                city: "Loni",
                state: "Uttar Pradesh"
            },
            {
                city: "Lucknow",
                state: "Uttar Pradesh"
            },
            {
                city: "Lucknow",
                state: "Uttar Pradesh"
            },
            {
                city: "Machhlishahr",
                state: "Uttar Pradesh"
            },
            {
                city: "Madhoganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Madhogarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Maghar",
                state: "Uttar Pradesh"
            },
            {
                city: "Mahaban",
                state: "Uttar Pradesh"
            },
            {
                city: "Mahmudabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Mahoba",
                state: "Uttar Pradesh"
            },
            {
                city: "Maholi",
                state: "Uttar Pradesh"
            },
            {
                city: "Mahona",
                state: "Uttar Pradesh"
            },
            {
                city: "Mahrajganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Mahrajganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Mahrajganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Mahroni",
                state: "Uttar Pradesh"
            },
            {
                city: "Mailani",
                state: "Uttar Pradesh"
            },
            {
                city: "Mainpuri",
                state: "Uttar Pradesh"
            },
            {
                city: "Majhara Pipar Ehatmali",
                state: "Uttar Pradesh"
            },
            {
                city: "Majhauli Raj",
                state: "Uttar Pradesh"
            },
            {
                city: "Malihabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Mallawan",
                state: "Uttar Pradesh"
            },
            {
                city: "Mandawar",
                state: "Uttar Pradesh"
            },
            {
                city: "Manikpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Manikpur Sarhat",
                state: "Uttar Pradesh"
            },
            {
                city: "Maniyar",
                state: "Uttar Pradesh"
            },
            {
                city: "Manjhanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Mankapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Marehra",
                state: "Uttar Pradesh"
            },
            {
                city: "Mariahu",
                state: "Uttar Pradesh"
            },
            {
                city: "Maruadih Rly. Settlement",
                state: "Uttar Pradesh"
            },
            {
                city: "Maswasi",
                state: "Uttar Pradesh"
            },
            {
                city: "Mataundh",
                state: "Uttar Pradesh"
            },
            {
                city: "Mathura",
                state: "Uttar Pradesh"
            },
            {
                city: "Mathura",
                state: "Uttar Pradesh"
            },
            {
                city: "Mau Aima",
                state: "Uttar Pradesh"
            },
            {
                city: "Maudaha",
                state: "Uttar Pradesh"
            },
            {
                city: "Maunath Bhanjan",
                state: "Uttar Pradesh"
            },
            {
                city: "Mauranipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Maurawan",
                state: "Uttar Pradesh"
            },
            {
                city: "Mawana",
                state: "Uttar Pradesh"
            },
            {
                city: "Meerut",
                state: "Uttar Pradesh"
            },
            {
                city: "Meerut",
                state: "Uttar Pradesh"
            },
            {
                city: "Mehdawal",
                state: "Uttar Pradesh"
            },
            {
                city: "Mehnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Mendu",
                state: "Uttar Pradesh"
            },
            {
                city: "Milak",
                state: "Uttar Pradesh"
            },
            {
                city: "Miranpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Mirganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Mirzapur-cum-Vindhyachal",
                state: "Uttar Pradesh"
            },
            {
                city: "Misrikh-cum-Neemsar",
                state: "Uttar Pradesh"
            },
            {
                city: "Modinagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Mogra Badshahpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Mohammadabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Mohammadabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Mohammadi",
                state: "Uttar Pradesh"
            },
            {
                city: "Mohan",
                state: "Uttar Pradesh"
            },
            {
                city: "Mohanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Mohiuddinpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Moradabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Moth",
                state: "Uttar Pradesh"
            },
            {
                city: "Mubarakpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Mughalsarai",
                state: "Uttar Pradesh"
            },
            {
                city: "Mughalsarai Rly. Settlement",
                state: "Uttar Pradesh"
            },
            {
                city: "Muhammadabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Mukrampur Khema",
                state: "Uttar Pradesh"
            },
            {
                city: "Mundera Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Mundia",
                state: "Uttar Pradesh"
            },
            {
                city: "Muradnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Mursan",
                state: "Uttar Pradesh"
            },
            {
                city: "Musafirkhana",
                state: "Uttar Pradesh"
            },
            {
                city: "Muzaffarnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Nadigaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Nagina",
                state: "Uttar Pradesh"
            },
            {
                city: "Nagram",
                state: "Uttar Pradesh"
            },
            {
                city: "Nai Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Nainana Jat",
                state: "Uttar Pradesh"
            },
            {
                city: "Najibabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Nakur",
                state: "Uttar Pradesh"
            },
            {
                city: "Nanauta",
                state: "Uttar Pradesh"
            },
            {
                city: "Nandgaon",
                state: "Uttar Pradesh"
            },
            {
                city: "Nanpara",
                state: "Uttar Pradesh"
            },
            {
                city: "Naraini",
                state: "Uttar Pradesh"
            },
            {
                city: "Narauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Naraura",
                state: "Uttar Pradesh"
            },
            {
                city: "Naugawan Sadat",
                state: "Uttar Pradesh"
            },
            {
                city: "Nautanwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Nawabganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Nawabganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Nawabganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Nawabganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Nehtaur",
                state: "Uttar Pradesh"
            },
            {
                city: "Nichlaul",
                state: "Uttar Pradesh"
            },
            {
                city: "Nidhauli Kalan",
                state: "Uttar Pradesh"
            },
            {
                city: "Niwari",
                state: "Uttar Pradesh"
            },
            {
                city: "Nizamabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Noida",
                state: "Uttar Pradesh"
            },
            {
                city: "Noorpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Northern Rly. Colony",
                state: "Uttar Pradesh"
            },
            {
                city: "Nyoria Husainpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Nyotini",
                state: "Uttar Pradesh"
            },
            {
                city: "Obra",
                state: "Uttar Pradesh"
            },
            {
                city: "Oel Dhakwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Orai",
                state: "Uttar Pradesh"
            },
            {
                city: "Oran",
                state: "Uttar Pradesh"
            },
            {
                city: "Ordnance Factory Muradnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Pachperwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Padrauna",
                state: "Uttar Pradesh"
            },
            {
                city: "Pahasu",
                state: "Uttar Pradesh"
            },
            {
                city: "Paintepur",
                state: "Uttar Pradesh"
            },
            {
                city: "Pali",
                state: "Uttar Pradesh"
            },
            {
                city: "Pali",
                state: "Uttar Pradesh"
            },
            {
                city: "Palia Kalan",
                state: "Uttar Pradesh"
            },
            {
                city: "Parasi",
                state: "Uttar Pradesh"
            },
            {
                city: "Parichha",
                state: "Uttar Pradesh"
            },
            {
                city: "Parikshitgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Parsadepur",
                state: "Uttar Pradesh"
            },
            {
                city: "Patala",
                state: "Uttar Pradesh"
            },
            {
                city: "Patiyali",
                state: "Uttar Pradesh"
            },
            {
                city: "Patti",
                state: "Uttar Pradesh"
            },
            {
                city: "Phalauda",
                state: "Uttar Pradesh"
            },
            {
                city: "Phaphund",
                state: "Uttar Pradesh"
            },
            {
                city: "Phulpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Phulpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Phulwaria",
                state: "Uttar Pradesh"
            },
            {
                city: "Pihani",
                state: "Uttar Pradesh"
            },
            {
                city: "Pilibhit",
                state: "Uttar Pradesh"
            },
            {
                city: "Pilkhana",
                state: "Uttar Pradesh"
            },
            {
                city: "Pilkhuwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Pinahat",
                state: "Uttar Pradesh"
            },
            {
                city: "Pipalsana Chaudhari",
                state: "Uttar Pradesh"
            },
            {
                city: "Pipiganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Pipraich",
                state: "Uttar Pradesh"
            },
            {
                city: "Pipri",
                state: "Uttar Pradesh"
            },
            {
                city: "Powayan",
                state: "Uttar Pradesh"
            },
            {
                city: "Pratapgarh City",
                state: "Uttar Pradesh"
            },
            {
                city: "Pukhrayan",
                state: "Uttar Pradesh"
            },
            {
                city: "Puranpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Purdilnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Purquazi",
                state: "Uttar Pradesh"
            },
            {
                city: "Purwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Qasimpur Power House Colony",
                state: "Uttar Pradesh"
            },
            {
                city: "Rabupura",
                state: "Uttar Pradesh"
            },
            {
                city: "Radhakund",
                state: "Uttar Pradesh"
            },
            {
                city: "Rae Bareli",
                state: "Uttar Pradesh"
            },
            {
                city: "Raja Ka Rampur",
                state: "Uttar Pradesh"
            },
            {
                city: "Rajapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Ramkola",
                state: "Uttar Pradesh"
            },
            {
                city: "Ramnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Ramnagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Rampur",
                state: "Uttar Pradesh"
            },
            {
                city: "Rampur Bhawanipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Rampur Karkhana",
                state: "Uttar Pradesh"
            },
            {
                city: "Rampur Maniharan",
                state: "Uttar Pradesh"
            },
            {
                city: "Rampura",
                state: "Uttar Pradesh"
            },
            {
                city: "Ranipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Rashidpur Garhi",
                state: "Uttar Pradesh"
            },
            {
                city: "Rasra",
                state: "Uttar Pradesh"
            },
            {
                city: "Rasulabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Rath",
                state: "Uttar Pradesh"
            },
            {
                city: "Raya",
                state: "Uttar Pradesh"
            },
            {
                city: "Renukoot",
                state: "Uttar Pradesh"
            },
            {
                city: "Reoti",
                state: "Uttar Pradesh"
            },
            {
                city: "Richha",
                state: "Uttar Pradesh"
            },
            {
                city: "Risia Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Rithora",
                state: "Uttar Pradesh"
            },
            {
                city: "Rly. Settlement Roza",
                state: "Uttar Pradesh"
            },
            {
                city: "Robertsganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Rudauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Rudayan",
                state: "Uttar Pradesh"
            },
            {
                city: "Rudrapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Rura",
                state: "Uttar Pradesh"
            },
            {
                city: "Rustamnagar Sahaspur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sadabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Sadat",
                state: "Uttar Pradesh"
            },
            {
                city: "Safipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sahanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Saharanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sahaspur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sahaswan",
                state: "Uttar Pradesh"
            },
            {
                city: "Sahatwar",
                state: "Uttar Pradesh"
            },
            {
                city: "Sahawar",
                state: "Uttar Pradesh"
            },
            {
                city: "Sahjanwa",
                state: "Uttar Pradesh"
            },
            {
                city: "Sahpau NP",
                state: "Uttar Pradesh"
            },
            {
                city: "Saidpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Saidpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sainthal",
                state: "Uttar Pradesh"
            },
            {
                city: "Saiyad Raja",
                state: "Uttar Pradesh"
            },
            {
                city: "Sakhanu",
                state: "Uttar Pradesh"
            },
            {
                city: "Sakit",
                state: "Uttar Pradesh"
            },
            {
                city: "Salarpur Khadar",
                state: "Uttar Pradesh"
            },
            {
                city: "Salempur",
                state: "Uttar Pradesh"
            },
            {
                city: "Salon",
                state: "Uttar Pradesh"
            },
            {
                city: "Sambhal",
                state: "Uttar Pradesh"
            },
            {
                city: "Samdhan",
                state: "Uttar Pradesh"
            },
            {
                city: "Samthar",
                state: "Uttar Pradesh"
            },
            {
                city: "Sandi",
                state: "Uttar Pradesh"
            },
            {
                city: "Sandila",
                state: "Uttar Pradesh"
            },
            {
                city: "Sarai Aquil",
                state: "Uttar Pradesh"
            },
            {
                city: "Sarai Mir",
                state: "Uttar Pradesh"
            },
            {
                city: "Sardhana",
                state: "Uttar Pradesh"
            },
            {
                city: "Sarila",
                state: "Uttar Pradesh"
            },
            {
                city: "Sarsawan",
                state: "Uttar Pradesh"
            },
            {
                city: "Sasni",
                state: "Uttar Pradesh"
            },
            {
                city: "Satrikh",
                state: "Uttar Pradesh"
            },
            {
                city: "Saunkh",
                state: "Uttar Pradesh"
            },
            {
                city: "Saurikh",
                state: "Uttar Pradesh"
            },
            {
                city: "Seohara",
                state: "Uttar Pradesh"
            },
            {
                city: "Sewalkhas",
                state: "Uttar Pradesh"
            },
            {
                city: "Sewarhi",
                state: "Uttar Pradesh"
            },
            {
                city: "Shahabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Shahabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Shahganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Shahi",
                state: "Uttar Pradesh"
            },
            {
                city: "Shahjahanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Shahjahanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Shahpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Shamli",
                state: "Uttar Pradesh"
            },
            {
                city: "Shamsabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Shamsabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Shankargarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Shergarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Sherkot",
                state: "Uttar Pradesh"
            },
            {
                city: "Shikarpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Shikohabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Shishgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Shivdaspur",
                state: "Uttar Pradesh"
            },
            {
                city: "Shivli",
                state: "Uttar Pradesh"
            },
            {
                city: "Shivrajpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Shohratgarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Siana",
                state: "Uttar Pradesh"
            },
            {
                city: "Siddhaur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sidhauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Sidhpura",
                state: "Uttar Pradesh"
            },
            {
                city: "Sikanderpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sikanderpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sikandra",
                state: "Uttar Pradesh"
            },
            {
                city: "Sikandra Rao",
                state: "Uttar Pradesh"
            },
            {
                city: "Sikandrabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Singahi Bhiraura",
                state: "Uttar Pradesh"
            },
            {
                city: "Sirathu",
                state: "Uttar Pradesh"
            },
            {
                city: "Sirauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Sirsa",
                state: "Uttar Pradesh"
            },
            {
                city: "Sirsaganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Sirsi",
                state: "Uttar Pradesh"
            },
            {
                city: "Sisauli",
                state: "Uttar Pradesh"
            },
            {
                city: "Siswa Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Sitapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Som",
                state: "Uttar Pradesh"
            },
            {
                city: "Soron",
                state: "Uttar Pradesh"
            },
            {
                city: "Suar",
                state: "Uttar Pradesh"
            },
            {
                city: "Sukhmalpur Nizamabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Sultanpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Sumerpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Suriyawan",
                state: "Uttar Pradesh"
            },
            {
                city: "Swamibagh",
                state: "Uttar Pradesh"
            },
            {
                city: "Talbehat",
                state: "Uttar Pradesh"
            },
            {
                city: "Talgram",
                state: "Uttar Pradesh"
            },
            {
                city: "Tambaur-cum-Ahmadabad",
                state: "Uttar Pradesh"
            },
            {
                city: "Tanda",
                state: "Uttar Pradesh"
            },
            {
                city: "Tanda",
                state: "Uttar Pradesh"
            },
            {
                city: "Tatarpur Lallu",
                state: "Uttar Pradesh"
            },
            {
                city: "Tetri Bazar",
                state: "Uttar Pradesh"
            },
            {
                city: "Thakurdwara",
                state: "Uttar Pradesh"
            },
            {
                city: "Thana Bhawan",
                state: "Uttar Pradesh"
            },
            {
                city: "Thiriya Nizamat Khan",
                state: "Uttar Pradesh"
            },
            {
                city: "Tikait Nagar",
                state: "Uttar Pradesh"
            },
            {
                city: "Tikri",
                state: "Uttar Pradesh"
            },
            {
                city: "Tilhar",
                state: "Uttar Pradesh"
            },
            {
                city: "Tindwari",
                state: "Uttar Pradesh"
            },
            {
                city: "Tirwaganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Titron",
                state: "Uttar Pradesh"
            },
            {
                city: "Tondi Fatehpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Tulsipur",
                state: "Uttar Pradesh"
            },
            {
                city: "Tundla",
                state: "Uttar Pradesh"
            },
            {
                city: "Tundla Kham",
                state: "Uttar Pradesh"
            },
            {
                city: "Tundla Rly. Colony",
                state: "Uttar Pradesh"
            },
            {
                city: "Ugu",
                state: "Uttar Pradesh"
            },
            {
                city: "Ujhani",
                state: "Uttar Pradesh"
            },
            {
                city: "Ujhari",
                state: "Uttar Pradesh"
            },
            {
                city: "Umri",
                state: "Uttar Pradesh"
            },
            {
                city: "Umri Kalan",
                state: "Uttar Pradesh"
            },
            {
                city: "Un",
                state: "Uttar Pradesh"
            },
            {
                city: "Unchahar",
                state: "Uttar Pradesh"
            },
            {
                city: "Unnao",
                state: "Uttar Pradesh"
            },
            {
                city: "Usawan",
                state: "Uttar Pradesh"
            },
            {
                city: "Usehat",
                state: "Uttar Pradesh"
            },
            {
                city: "Utraula",
                state: "Uttar Pradesh"
            },
            {
                city: "Varanasi",
                state: "Uttar Pradesh"
            },
            {
                city: "Varanasi",
                state: "Uttar Pradesh"
            },
            {
                city: "Vijaigarh",
                state: "Uttar Pradesh"
            },
            {
                city: "Vrindavan",
                state: "Uttar Pradesh"
            },
            {
                city: "Warhapur",
                state: "Uttar Pradesh"
            },
            {
                city: "Wazirganj",
                state: "Uttar Pradesh"
            },
            {
                city: "Zaidpur",
                state: "Uttar Pradesh"
            },
            {
                city: "Zamania",
                state: "Uttar Pradesh"
            },
            {
                city: "Almora",
                state: "Uttaranchal"
            },
            {
                city: "Almora",
                state: "Uttaranchal"
            },
            {
                city: "Badrinathpuri",
                state: "Uttaranchal"
            },
            {
                city: "Bageshwar",
                state: "Uttaranchal"
            },
            {
                city: "Bajpur",
                state: "Uttaranchal"
            },
            {
                city: "Banbasa",
                state: "Uttaranchal"
            },
            {
                city: "Bandia",
                state: "Uttaranchal"
            },
            {
                city: "Barkot",
                state: "Uttaranchal"
            },
            {
                city: "Bhimtal",
                state: "Uttaranchal"
            },
            {
                city: "Bhowali",
                state: "Uttaranchal"
            },
            {
                city: "Chakrata",
                state: "Uttaranchal"
            },
            {
                city: "Chamba",
                state: "Uttaranchal"
            },
            {
                city: "Chamoli Gopeshwar",
                state: "Uttaranchal"
            },
            {
                city: "Champawat",
                state: "Uttaranchal"
            },
            {
                city: "Clement Town",
                state: "Uttaranchal"
            },
            {
                city: "Dehradun",
                state: "Uttaranchal"
            },
            {
                city: "Dehradun",
                state: "Uttaranchal"
            },
            {
                city: "Dev Prayag",
                state: "Uttaranchal"
            },
            {
                city: "Dhaluwala",
                state: "Uttaranchal"
            },
            {
                city: "Dhandera",
                state: "Uttaranchal"
            },
            {
                city: "Dharchula",
                state: "Uttaranchal"
            },
            {
                city: "Dharchula Dehat",
                state: "Uttaranchal"
            },
            {
                city: "Didihat",
                state: "Uttaranchal"
            },
            {
                city: "Dineshpur",
                state: "Uttaranchal"
            },
            {
                city: "Dogadda",
                state: "Uttaranchal"
            },
            {
                city: "Doiwala",
                state: "Uttaranchal"
            },
            {
                city: "Dwarahat",
                state: "Uttaranchal"
            },
            {
                city: "FRI and College Area",
                state: "Uttaranchal"
            },
            {
                city: "Gadarpur",
                state: "Uttaranchal"
            },
            {
                city: "Gangotri",
                state: "Uttaranchal"
            },
            {
                city: "Gochar",
                state: "Uttaranchal"
            },
            {
                city: "Haldwani-cum-Kathgodam",
                state: "Uttaranchal"
            },
            {
                city: "Hardwar",
                state: "Uttaranchal"
            },
            {
                city: "Herbertpur",
                state: "Uttaranchal"
            },
            {
                city: "Jaspur",
                state: "Uttaranchal"
            },
            {
                city: "Jhabrera",
                state: "Uttaranchal"
            },
            {
                city: "Joshimath",
                state: "Uttaranchal"
            },
            {
                city: "Kachnal Gosain",
                state: "Uttaranchal"
            },
            {
                city: "Kaladungi",
                state: "Uttaranchal"
            },
            {
                city: "Karn Prayag",
                state: "Uttaranchal"
            },
            {
                city: "Kashipur",
                state: "Uttaranchal"
            },
            {
                city: "Kashirampur",
                state: "Uttaranchal"
            },
            {
                city: "Kedarnath",
                state: "Uttaranchal"
            },
            {
                city: "Kela Khera",
                state: "Uttaranchal"
            },
            {
                city: "Khatima",
                state: "Uttaranchal"
            },
            {
                city: "Kichha",
                state: "Uttaranchal"
            },
            {
                city: "Kirtinagar",
                state: "Uttaranchal"
            },
            {
                city: "Kotdwara",
                state: "Uttaranchal"
            },
            {
                city: "Laksar",
                state: "Uttaranchal"
            },
            {
                city: "Lalkuan",
                state: "Uttaranchal"
            },
            {
                city: "Landaura",
                state: "Uttaranchal"
            },
            {
                city: "Landour",
                state: "Uttaranchal"
            },
            {
                city: "Lansdowne",
                state: "Uttaranchal"
            },
            {
                city: "Lohaghat",
                state: "Uttaranchal"
            },
            {
                city: "Mahua Dabra Haripura",
                state: "Uttaranchal"
            },
            {
                city: "Mahua Kheraganj",
                state: "Uttaranchal"
            },
            {
                city: "Manglaur",
                state: "Uttaranchal"
            },
            {
                city: "Mohanpur Mohammadpur",
                state: "Uttaranchal"
            },
            {
                city: "Muni Ki Reti",
                state: "Uttaranchal"
            },
            {
                city: "Mussoori",
                state: "Uttaranchal"
            },
            {
                city: "Nagla",
                state: "Uttaranchal"
            },
            {
                city: "Nainital",
                state: "Uttaranchal"
            },
            {
                city: "Nainital",
                state: "Uttaranchal"
            },
            {
                city: "Nand Prayag",
                state: "Uttaranchal"
            },
            {
                city: "Narendra Nagar",
                state: "Uttaranchal"
            },
            {
                city: "Pauri",
                state: "Uttaranchal"
            },
            {
                city: "Pithoragarh",
                state: "Uttaranchal"
            },
            {
                city: "Pratitnagar",
                state: "Uttaranchal"
            },
            {
                city: "Raipur",
                state: "Uttaranchal"
            },
            {
                city: "Ramnagar",
                state: "Uttaranchal"
            },
            {
                city: "Ranikhet",
                state: "Uttaranchal"
            },
            {
                city: "Rishikesh",
                state: "Uttaranchal"
            },
            {
                city: "Roorkee",
                state: "Uttaranchal"
            },
            {
                city: "Roorkee",
                state: "Uttaranchal"
            },
            {
                city: "Rudra Prayag",
                state: "Uttaranchal"
            },
            {
                city: "Rudrapur",
                state: "Uttaranchal"
            },
            {
                city: "Shaktigarh",
                state: "Uttaranchal"
            },
            {
                city: "Sitarganj",
                state: "Uttaranchal"
            },
            {
                city: "Srinagar",
                state: "Uttaranchal"
            },
            {
                city: "Sultanpur",
                state: "Uttaranchal"
            },
            {
                city: "Tanakpur",
                state: "Uttaranchal"
            },
            {
                city: "Tehri",
                state: "Uttaranchal"
            },
            {
                city: "Uttarkashi",
                state: "Uttaranchal"
            },
            {
                city: "Veerbhadra",
                state: "Uttaranchal"
            },
            {
                city: "Vikasnagar",
                state: "Uttaranchal"
            },
            {
                city: "Adra",
                state: "West Bengal"
            },
            {
                city: "Ahmadpur",
                state: "West Bengal"
            },
            {
                city: "Aiho",
                state: "West Bengal"
            },
            {
                city: "Aistala",
                state: "West Bengal"
            },
            {
                city: "Alipurduar Rly.Jnc.",
                state: "West Bengal"
            },
            {
                city: "Alpur",
                state: "West Bengal"
            },
            {
                city: "Amkula",
                state: "West Bengal"
            },
            {
                city: "Amodghata",
                state: "West Bengal"
            },
            {
                city: "Amtala",
                state: "West Bengal"
            },
            {
                city: "Andul",
                state: "West Bengal"
            },
            {
                city: "Anksa",
                state: "West Bengal"
            },
            {
                city: "Ankurhati",
                state: "West Bengal"
            },
            {
                city: "Anup Nagar",
                state: "West Bengal"
            },
            {
                city: "Argari",
                state: "West Bengal"
            },
            {
                city: "Arra",
                state: "West Bengal"
            },
            {
                city: "Asansol",
                state: "West Bengal"
            },
            {
                city: "Aurangabad",
                state: "West Bengal"
            },
            {
                city: "Bablari Dewanganj",
                state: "West Bengal"
            },
            {
                city: "Badhagachhi",
                state: "West Bengal"
            },
            {
                city: "Bagnan",
                state: "West Bengal"
            },
            {
                city: "Bahirgram",
                state: "West Bengal"
            },
            {
                city: "Bahula",
                state: "West Bengal"
            },
            {
                city: "Bairatisal",
                state: "West Bengal"
            },
            {
                city: "Balaram Pota",
                state: "West Bengal"
            },
            {
                city: "Balarampur",
                state: "West Bengal"
            },
            {
                city: "Balarampur",
                state: "West Bengal"
            },
            {
                city: "Balichak",
                state: "West Bengal"
            },
            {
                city: "Ballavpur",
                state: "West Bengal"
            },
            {
                city: "Bally",
                state: "West Bengal"
            },
            {
                city: "Bamunari",
                state: "West Bengal"
            },
            {
                city: "Banarhat Tea Garden",
                state: "West Bengal"
            },
            {
                city: "Bankra",
                state: "West Bengal"
            },
            {
                city: "Banshra",
                state: "West Bengal"
            },
            {
                city: "Banupur",
                state: "West Bengal"
            },
            {
                city: "Bara Bamonia",
                state: "West Bengal"
            },
            {
                city: "Barabazar",
                state: "West Bengal"
            },
            {
                city: "Barijhati",
                state: "West Bengal"
            },
            {
                city: "Barjora",
                state: "West Bengal"
            },
            {
                city: "Barrackpur Cantonment",
                state: "West Bengal"
            },
            {
                city: "Baruihuda",
                state: "West Bengal"
            },
            {
                city: "Baska",
                state: "West Bengal"
            },
            {
                city: "Begampur",
                state: "West Bengal"
            },
            {
                city: "Beldubi",
                state: "West Bengal"
            },
            {
                city: "Belebathan",
                state: "West Bengal"
            },
            {
                city: "Beliatore",
                state: "West Bengal"
            },
            {
                city: "Bhandardaha",
                state: "West Bengal"
            },
            {
                city: "Bhangar Raghunathpur",
                state: "West Bengal"
            },
            {
                city: "Bhangri Pratham Khanda",
                state: "West Bengal"
            },
            {
                city: "Bhanowara",
                state: "West Bengal"
            },
            {
                city: "Bholar Dabri",
                state: "West Bengal"
            },
            {
                city: "Bikihakola",
                state: "West Bengal"
            },
            {
                city: "Bilandapur",
                state: "West Bengal"
            },
            {
                city: "Bilpahari",
                state: "West Bengal"
            },
            {
                city: "Bipra  Noapara",
                state: "West Bengal"
            },
            {
                city: "Birlapur",
                state: "West Bengal"
            },
            {
                city: "Bishnupur",
                state: "West Bengal"
            },
            {
                city: "Bowali",
                state: "West Bengal"
            },
            {
                city: "Cart Road",
                state: "West Bengal"
            },
            {
                city: "Chachanda",
                state: "West Bengal"
            },
            {
                city: "Chak Bankola",
                state: "West Bengal"
            },
            {
                city: "Chak Bansberia",
                state: "West Bengal"
            },
            {
                city: "Chak Enayetnagar",
                state: "West Bengal"
            },
            {
                city: "Chak Kashipur",
                state: "West Bengal"
            },
            {
                city: "Chakapara",
                state: "West Bengal"
            },
            {
                city: "Chamrail",
                state: "West Bengal"
            },
            {
                city: "Chandannagar",
                state: "West Bengal"
            },
            {
                city: "Chandpur",
                state: "West Bengal"
            },
            {
                city: "Chapari",
                state: "West Bengal"
            },
            {
                city: "Chapui",
                state: "West Bengal"
            },
            {
                city: "Char Brahmanagar",
                state: "West Bengal"
            },
            {
                city: "Char Maijdia",
                state: "West Bengal"
            },
            {
                city: "Charka",
                state: "West Bengal"
            },
            {
                city: "Chata Kalikapur",
                state: "West Bengal"
            },
            {
                city: "Chechakhata",
                state: "West Bengal"
            },
            {
                city: "Chelad",
                state: "West Bengal"
            },
            {
                city: "Chhora",
                state: "West Bengal"
            },
            {
                city: "Chikrand",
                state: "West Bengal"
            },
            {
                city: "Chittaranjan",
                state: "West Bengal"
            },
            {
                city: "Cooper's Camp",
                state: "West Bengal"
            },
            {
                city: "Dafahat",
                state: "West Bengal"
            },
            {
                city: "Dakshin Baguan",
                state: "West Bengal"
            },
            {
                city: "Dakshin Jhapardaha",
                state: "West Bengal"
            },
            {
                city: "Dakshin Rajyadharpur",
                state: "West Bengal"
            },
            {
                city: "Dalkhola",
                state: "West Bengal"
            },
            {
                city: "Dalurband",
                state: "West Bengal"
            },
            {
                city: "Darappur",
                state: "West Bengal"
            },
            {
                city: "Debipur",
                state: "West Bengal"
            },
            {
                city: "Deuli",
                state: "West Bengal"
            },
            {
                city: "Dhakuria",
                state: "West Bengal"
            },
            {
                city: "Dhandadihi",
                state: "West Bengal"
            },
            {
                city: "Dhanyakuria",
                state: "West Bengal"
            },
            {
                city: "Dharmapur",
                state: "West Bengal"
            },
            {
                city: "Dhatrigram",
                state: "West Bengal"
            },
            {
                city: "Dhuilya",
                state: "West Bengal"
            },
            {
                city: "Dhupguri",
                state: "West Bengal"
            },
            {
                city: "Dhusaripara",
                state: "West Bengal"
            },
            {
                city: "Dignala",
                state: "West Bengal"
            },
            {
                city: "Domjur",
                state: "West Bengal"
            },
            {
                city: "Durgapur",
                state: "West Bengal"
            },
            {
                city: "Durllabhganj",
                state: "West Bengal"
            },
            {
                city: "Eksara",
                state: "West Bengal"
            },
            {
                city: "Falakata",
                state: "West Bengal"
            },
            {
                city: "Farrakka Barrage Township",
                state: "West Bengal"
            },
            {
                city: "Fatellapur",
                state: "West Bengal"
            },
            {
                city: "Gabberia",
                state: "West Bengal"
            },
            {
                city: "Gairkata",
                state: "West Bengal"
            },
            {
                city: "Garalgachha",
                state: "West Bengal"
            },
            {
                city: "Garshyamnagar",
                state: "West Bengal"
            },
            {
                city: "Ghorsala",
                state: "West Bengal"
            },
            {
                city: "Goaljan",
                state: "West Bengal"
            },
            {
                city: "Goasafat",
                state: "West Bengal"
            },
            {
                city: "Gopalpur",
                state: "West Bengal"
            },
            {
                city: "Gopinathpur",
                state: "West Bengal"
            },
            {
                city: "Gora Bazar",
                state: "West Bengal"
            },
            {
                city: "Guma",
                state: "West Bengal"
            },
            {
                city: "Guriahati",
                state: "West Bengal"
            },
            {
                city: "Haora",
                state: "West Bengal"
            },
            {
                city: "Harharia Chak",
                state: "West Bengal"
            },
            {
                city: "Haripur",
                state: "West Bengal"
            },
            {
                city: "Harishpur",
                state: "West Bengal"
            },
            {
                city: "Hatgachha",
                state: "West Bengal"
            },
            {
                city: "Hatsimla",
                state: "West Bengal"
            },
            {
                city: "Hijuli",
                state: "West Bengal"
            },
            {
                city: "Hindusthan Cables Town",
                state: "West Bengal"
            },
            {
                city: "Ichhapur Defence  Estate",
                state: "West Bengal"
            },
            {
                city: "Jafarpur",
                state: "West Bengal"
            },
            {
                city: "Jagadanandapur",
                state: "West Bengal"
            },
            {
                city: "Jagadishpur",
                state: "West Bengal"
            },
            {
                city: "Jagtaj",
                state: "West Bengal"
            },
            {
                city: "Jala Kendua",
                state: "West Bengal"
            },
            {
                city: "Jaygaon",
                state: "West Bengal"
            },
            {
                city: "Jemari",
                state: "West Bengal"
            },
            {
                city: "Jemari  (J.K. Nagar Township)",
                state: "West Bengal"
            },
            {
                city: "Jetia",
                state: "West Bengal"
            },
            {
                city: "Jhorhat",
                state: "West Bengal"
            },
            {
                city: "Jot Kamal",
                state: "West Bengal"
            },
            {
                city: "Kachu Pukur",
                state: "West Bengal"
            },
            {
                city: "Kajora",
                state: "West Bengal"
            },
            {
                city: "Kakdihi",
                state: "West Bengal"
            },
            {
                city: "Kalara",
                state: "West Bengal"
            },
            {
                city: "Kanaipur",
                state: "West Bengal"
            },
            {
                city: "Kankuria",
                state: "West Bengal"
            },
            {
                city: "Kantlia",
                state: "West Bengal"
            },
            {
                city: "Kanyanagar",
                state: "West Bengal"
            },
            {
                city: "Karimpur",
                state: "West Bengal"
            },
            {
                city: "Kasba",
                state: "West Bengal"
            },
            {
                city: "Kasim Bazar",
                state: "West Bengal"
            },
            {
                city: "Kaugachhi",
                state: "West Bengal"
            },
            {
                city: "Kenda",
                state: "West Bengal"
            },
            {
                city: "Kendra Khottamdi",
                state: "West Bengal"
            },
            {
                city: "Kendua",
                state: "West Bengal"
            },
            {
                city: "Kesabpur",
                state: "West Bengal"
            },
            {
                city: "Khalia",
                state: "West Bengal"
            },
            {
                city: "Khalor",
                state: "West Bengal"
            },
            {
                city: "Khandra",
                state: "West Bengal"
            },
            {
                city: "Khantora",
                state: "West Bengal"
            },
            {
                city: "Kharagpur Rly. Settlement ",
                state: "West Bengal"
            },
            {
                city: "Kharimala Khagrabari",
                state: "West Bengal"
            },
            {
                city: "Kharsarai",
                state: "West Bengal"
            },
            {
                city: "Khodarampur",
                state: "West Bengal"
            },
            {
                city: "Kodalia",
                state: "West Bengal"
            },
            {
                city: "Kolaghat",
                state: "West Bengal"
            },
            {
                city: "Kolkata",
                state: "West Bengal"
            },
            {
                city: "Konardihi",
                state: "West Bengal"
            },
            {
                city: "Krishnapur",
                state: "West Bengal"
            },
            {
                city: "Kshidirpur",
                state: "West Bengal"
            },
            {
                city: "Kulihanda",
                state: "West Bengal"
            },
            {
                city: "Kunustara",
                state: "West Bengal"
            },
            {
                city: "Madanpur",
                state: "West Bengal"
            },
            {
                city: "Madhusudanpur",
                state: "West Bengal"
            },
            {
                city: "Mahiari",
                state: "West Bengal"
            },
            {
                city: "Mahira",
                state: "West Bengal"
            },
            {
                city: "Mainaguri",
                state: "West Bengal"
            },
            {
                city: "Makardaha",
                state: "West Bengal"
            },
            {
                city: "Mandarbani",
                state: "West Bengal"
            },
            {
                city: "Manikpur",
                state: "West Bengal"
            },
            {
                city: "Mansinhapur",
                state: "West Bengal"
            },
            {
                city: "Maslandapur",
                state: "West Bengal"
            },
            {
                city: "Mirik",
                state: "West Bengal"
            },
            {
                city: "Monoharpur",
                state: "West Bengal"
            },
            {
                city: "Mrigala",
                state: "West Bengal"
            },
            {
                city: "Muragachha",
                state: "West Bengal"
            },
            {
                city: "Murgathaul",
                state: "West Bengal"
            },
            {
                city: "Nabagram",
                state: "West Bengal"
            },
            {
                city: "Nabagram Colony",
                state: "West Bengal"
            },
            {
                city: "Nabgram",
                state: "West Bengal"
            },
            {
                city: "Nachhratpur Katabari",
                state: "West Bengal"
            },
            {
                city: "Nasra",
                state: "West Bengal"
            },
            {
                city: "Natibpur",
                state: "West Bengal"
            },
            {
                city: "Naupala",
                state: "West Bengal"
            },
            {
                city: "Nebadhai Duttapukur",
                state: "West Bengal"
            },
            {
                city: "Nibra",
                state: "West Bengal"
            },
            {
                city: "Nokpul",
                state: "West Bengal"
            },
            {
                city: "Ondal",
                state: "West Bengal"
            },
            {
                city: "Pairagachha",
                state: "West Bengal"
            },
            {
                city: "Palashban",
                state: "West Bengal"
            },
            {
                city: "Panchla",
                state: "West Bengal"
            },
            {
                city: "Panchpara",
                state: "West Bengal"
            },
            {
                city: "Pandua",
                state: "West Bengal"
            },
            {
                city: "Pangachhiya (B)",
                state: "West Bengal"
            },
            {
                city: "Paniara",
                state: "West Bengal"
            },
            {
                city: "Panuhat",
                state: "West Bengal"
            },
            {
                city: "Par Beliya",
                state: "West Bengal"
            },
            {
                city: "Parashkol",
                state: "West Bengal"
            },
            {
                city: "Parasia",
                state: "West Bengal"
            },
            {
                city: "Parbbatipur",
                state: "West Bengal"
            },
            {
                city: "Paschim  Jitpur",
                state: "West Bengal"
            },
            {
                city: "Paschim Punropara",
                state: "West Bengal"
            },
            {
                city: "Pattabong Tea Garden",
                state: "West Bengal"
            },
            {
                city: "Patuli",
                state: "West Bengal"
            },
            {
                city: "Patulia",
                state: "West Bengal"
            },
            {
                city: "Phulia",
                state: "West Bengal"
            },
            {
                city: "Podara",
                state: "West Bengal"
            },
            {
                city: "Prayagpur",
                state: "West Bengal"
            },
            {
                city: "Purba Tajpur",
                state: "West Bengal"
            },
            {
                city: "Raghudebbati",
                state: "West Bengal"
            },
            {
                city: "Raghunathchak",
                state: "West Bengal"
            },
            {
                city: "Raghunathpur (PS-Dankuni)",
                state: "West Bengal"
            },
            {
                city: "Raghunathpur (PS-Magra)",
                state: "West Bengal"
            },
            {
                city: "Raigachhi",
                state: "West Bengal"
            },
            {
                city: "Ramchandrapur",
                state: "West Bengal"
            },
            {
                city: "Ramnagar",
                state: "West Bengal"
            },
            {
                city: "Ratibati",
                state: "West Bengal"
            },
            {
                city: "Rishra",
                state: "West Bengal"
            },
            {
                city: "Ruiya",
                state: "West Bengal"
            },
            {
                city: "S.T. Power Project Town",
                state: "West Bengal"
            },
            {
                city: "Sadpur",
                state: "West Bengal"
            },
            {
                city: "Sahajadpur",
                state: "West Bengal"
            },
            {
                city: "Sahapur",
                state: "West Bengal"
            },
            {
                city: "Salap",
                state: "West Bengal"
            },
            {
                city: "Sankarpur",
                state: "West Bengal"
            },
            {
                city: "Sankrail",
                state: "West Bengal"
            },
            {
                city: "Santoshpur",
                state: "West Bengal"
            },
            {
                city: "Sarenga",
                state: "West Bengal"
            },
            {
                city: "Sarpi",
                state: "West Bengal"
            },
            {
                city: "Satigachha",
                state: "West Bengal"
            },
            {
                city: "Serpur",
                state: "West Bengal"
            },
            {
                city: "Shankhanagar",
                state: "West Bengal"
            },
            {
                city: "Siduli",
                state: "West Bengal"
            },
            {
                city: "Siliguri",
                state: "West Bengal"
            },
            {
                city: "Simla",
                state: "West Bengal"
            },
            {
                city: "Singur",
                state: "West Bengal"
            },
            {
                city: "Sirsha",
                state: "West Bengal"
            },
            {
                city: "Sobhaganj",
                state: "West Bengal"
            },
            {
                city: "Sonatikiri",
                state: "West Bengal"
            },
            {
                city: "Alipurduar",
                state: "West Bengal"
            },
            {
                city: "Arambag",
                state: "West Bengal"
            },
            {
                city: "Ashoknagar Kalyangarh",
                state: "West Bengal"
            },
            {
                city: "Baduria",
                state: "West Bengal"
            },
            {
                city: "Srikantabati",
                state: "West Bengal"
            },
            {
                city: "Srirampur",
                state: "West Bengal"
            },
            {
                city: "Baharampur",
                state: "West Bengal"
            },
            {
                city: "Baidyabati",
                state: "West Bengal"
            },
            {
                city: "Sukdal",
                state: "West Bengal"
            },
            {
                city: "Bally",
                state: "West Bengal"
            },
            {
                city: "Balurghat",
                state: "West Bengal"
            },
            {
                city: "Bangaon",
                state: "West Bengal"
            },
            {
                city: "Bankura",
                state: "West Bengal"
            },
            {
                city: "Bansberia",
                state: "West Bengal"
            },
            {
                city: "Baranagar",
                state: "West Bengal"
            },
            {
                city: "Barasat",
                state: "West Bengal"
            },
            {
                city: "Barddhaman",
                state: "West Bengal"
            },
            {
                city: "Barrackpur",
                state: "West Bengal"
            },
            {
                city: "Baruipur",
                state: "West Bengal"
            },
            {
                city: "Taherpur",
                state: "West Bengal"
            },
            {
                city: "Basirhat",
                state: "West Bengal"
            },
            {
                city: "Beldanga",
                state: "West Bengal"
            },
            {
                city: "Bhadreswar",
                state: "West Bengal"
            },
            {
                city: "Talbandha",
                state: "West Bengal"
            },
            {
                city: "Bhatpara",
                state: "West Bengal"
            },
            {
                city: "Bidhan Nagar",
                state: "West Bengal"
            },
            {
                city: "Birnagar",
                state: "West Bengal"
            },
            {
                city: "Bishnupur",
                state: "West Bengal"
            },
            {
                city: "Bolpur",
                state: "West Bengal"
            },
            {
                city: "Budge Budge",
                state: "West Bengal"
            },
            {
                city: "Chakdaha",
                state: "West Bengal"
            },
            {
                city: "Champdani",
                state: "West Bengal"
            },
            {
                city: "Chandrakona",
                state: "West Bengal"
            },
            {
                city: "Contai",
                state: "West Bengal"
            },
            {
                city: "Dainhat",
                state: "West Bengal"
            },
            {
                city: "Darjiling",
                state: "West Bengal"
            },
            {
                city: "Tentulkuli",
                state: "West Bengal"
            },
            {
                city: "Dhulian",
                state: "West Bengal"
            },
            {
                city: "Diamond Harbour",
                state: "West Bengal"
            },
            {
                city: "Dinhata",
                state: "West Bengal"
            },
            {
                city: "Dubrajpur",
                state: "West Bengal"
            },
            {
                city: "Dumdum",
                state: "West Bengal"
            },
            {
                city: "Egra",
                state: "West Bengal"
            },
            {
                city: "English Bazar",
                state: "West Bengal"
            },
            {
                city: "Gangarampur",
                state: "West Bengal"
            },
            {
                city: "Garulia",
                state: "West Bengal"
            },
            {
                city: "Gayespur",
                state: "West Bengal"
            },
            {
                city: "Ghatal",
                state: "West Bengal"
            },
            {
                city: "Gobardanga",
                state: "West Bengal"
            },
            {
                city: "Guskara",
                state: "West Bengal"
            },
            {
                city: "Habra",
                state: "West Bengal"
            },
            {
                city: "Haldia",
                state: "West Bengal"
            },
            {
                city: "Haldibari",
                state: "West Bengal"
            },
            {
                city: "Halisahar",
                state: "West Bengal"
            },
            {
                city: "Hugli-Chinsurah",
                state: "West Bengal"
            },
            {
                city: "Islampur",
                state: "West Bengal"
            },
            {
                city: "Jalpaiguri",
                state: "West Bengal"
            },
            {
                city: "Jamuria",
                state: "West Bengal"
            },
            {
                city: "Jangipur",
                state: "West Bengal"
            },
            {
                city: "Jaynagar Mazilpur",
                state: "West Bengal"
            },
            {
                city: "Jhalda",
                state: "West Bengal"
            },
            {
                city: "Jhargram",
                state: "West Bengal"
            },
            {
                city: "Jiaganj Azimganj",
                state: "West Bengal"
            },
            {
                city: "Kaliaganj",
                state: "West Bengal"
            },
            {
                city: "Kalimpong",
                state: "West Bengal"
            },
            {
                city: "Kalna",
                state: "West Bengal"
            },
            {
                city: "Kalyani",
                state: "West Bengal"
            },
            {
                city: "Kamarhati",
                state: "West Bengal"
            },
            {
                city: "Kanchrapara",
                state: "West Bengal"
            },
            {
                city: "Kandi",
                state: "West Bengal"
            },
            {
                city: "Katwa",
                state: "West Bengal"
            },
            {
                city: "Khagrabari",
                state: "West Bengal"
            },
            {
                city: "Ukhra",
                state: "West Bengal"
            },
            {
                city: "Kharagpur",
                state: "West Bengal"
            },
            {
                city: "Kharar",
                state: "West Bengal"
            },
            {
                city: "Khardaha",
                state: "West Bengal"
            },
            {
                city: "Koch Bihar",
                state: "West Bengal"
            },
            {
                city: "Konnagar",
                state: "West Bengal"
            },
            {
                city: "Krishnanagar",
                state: "West Bengal"
            },
            {
                city: "Kshirpai",
                state: "West Bengal"
            },
            {
                city: "Kulti",
                state: "West Bengal"
            },
            {
                city: "Kurseong",
                state: "West Bengal"
            },
            {
                city: "Uttar Bagdogra",
                state: "West Bengal"
            },
            {
                city: "Uttar Durgapur",
                state: "West Bengal"
            },
            {
                city: "Uttar Goara",
                state: "West Bengal"
            },
            {
                city: "Uttar Kalas",
                state: "West Bengal"
            },
            {
                city: "Uttar Kamakhyaguri",
                state: "West Bengal"
            },
            {
                city: "Uttar Latabari",
                state: "West Bengal"
            },
            {
                city: "Uttar Mahammadpur",
                state: "West Bengal"
            },
            {
                city: "Uttar Pirpur",
                state: "West Bengal"
            },
            {
                city: "Uttar Raypur",
                state: "West Bengal"
            },
            {
                city: "Madhyamgram",
                state: "West Bengal"
            },
            {
                city: "Maheshtala",
                state: "West Bengal"
            },
            {
                city: "Mal",
                state: "West Bengal"
            },
            {
                city: "Mathabhanga",
                state: "West Bengal"
            },
            {
                city: "Medinipur",
                state: "West Bengal"
            },
            {
                city: "Mekliganj",
                state: "West Bengal"
            },
            {
                city: "Memari",
                state: "West Bengal"
            },
            {
                city: "Murshidabad",
                state: "West Bengal"
            },
            {
                city: "Nabadwip",
                state: "West Bengal"
            },
            {
                city: "Naihati",
                state: "West Bengal"
            },
            {
                city: "New Barrackpur",
                state: "West Bengal"
            },
            {
                city: "North Barrackpur",
                state: "West Bengal"
            },
            {
                city: "North Dumdum",
                state: "West Bengal"
            },
            {
                city: "Old Maldah",
                state: "West Bengal"
            },
            {
                city: "Panihati",
                state: "West Bengal"
            },
            {
                city: "Pujali",
                state: "West Bengal"
            },
            {
                city: "Puruliya",
                state: "West Bengal"
            },
            {
                city: "Raghunathpur",
                state: "West Bengal"
            },
            {
                city: "Raiganj",
                state: "West Bengal"
            },
            {
                city: "Rajarhat Gopalpur",
                state: "West Bengal"
            },
            {
                city: "Rajpur Sonarpur",
                state: "West Bengal"
            },
            {
                city: "Ramjibanpur",
                state: "West Bengal"
            },
            {
                city: "Rampurhat",
                state: "West Bengal"
            },
            {
                city: "Ranaghat",
                state: "West Bengal"
            },
            {
                city: "Raniganj",
                state: "West Bengal"
            },
            {
                city: "Rishra",
                state: "West Bengal"
            },
            {
                city: "Sainthia",
                state: "West Bengal"
            },
            {
                city: "Santipur",
                state: "West Bengal"
            },
            {
                city: "Serampore",
                state: "West Bengal"
            },
            {
                city: "Sonamukhi",
                state: "West Bengal"
            },
            {
                city: "South Dumdum",
                state: "West Bengal"
            },
            {
                city: "Suri",
                state: "West Bengal"
            },
            {
                city: "Taki",
                state: "West Bengal"
            },
            {
                city: "Tamluk",
                state: "West Bengal"
            },
            {
                city: "Tarakeswar",
                state: "West Bengal"
            },
            {
                city: "Titagarh",
                state: "West Bengal"
            },
            {
                city: "Tufanganj",
                state: "West Bengal"
            },
            {
                city: "Uluberia",
                state: "West Bengal"
            },
            {
                city: "Uttarpara Kotrung",
                state: "West Bengal"
            },
            {
                city: "Visakhapatnam",
                state: "Andhra Pradesh"
            },
            {
                city: "Vijayawada",
                state: "Andhra Pradesh"
            },
            {
                city: "Guntur",
                state: "Andhra Pradesh"
            },
            {
                city: "Nellore",
                state: "Andhra Pradesh"
            },
            {
                city: "Kurnool",
                state: "Andhra Pradesh"
            },
            {
                city: "Rajahmundry",
                state: "Andhra Pradesh"
            },
            {
                city: "Kakinada",
                state: "Andhra Pradesh"
            },
            {
                city: "Tirupati",
                state: "Andhra Pradesh"
            },
            {
                city: "Anantapur",
                state: "Andhra Pradesh"
            },
            {
                city: "Kadapa",
                state: "Andhra Pradesh"
            },
            {
                city: "Vizianagaram",
                state: "Andhra Pradesh"
            },
            {
                city: "Eluru",
                state: "Andhra Pradesh"
            },
            {
                city: "Ongole",
                state: "Andhra Pradesh"
            },
            {
                city: "Nandyal",
                state: "Andhra Pradesh"
            },
            {
                city: "Machilipatnam",
                state: "Andhra Pradesh"
            },
            {
                city: "Adoni",
                state: "Andhra Pradesh"
            },
            {
                city: "Tenali",
                state: "Andhra Pradesh"
            },
            {
                city: "Chittoor",
                state: "Andhra Pradesh"
            },
            {
                city: "Hindupur",
                state: "Andhra Pradesh"
            },
            {
                city: "Proddatur",
                state: "Andhra Pradesh"
            },
            {
                city: "Bhimavaram",
                state: "Andhra Pradesh"
            },
            {
                city: "Madanapalle",
                state: "Andhra Pradesh"
            },
            {
                city: "Guntakal",
                state: "Andhra Pradesh"
            },
            {
                city: "Dharmavaram",
                state: "Andhra Pradesh"
            },
            {
                city: "Gudivada",
                state: "Andhra Pradesh"
            },
            {
                city: "Srikakulam",
                state: "Andhra Pradesh"
            },
            {
                city: "Narasaraopet",
                state: "Andhra Pradesh"
            },
            {
                city: "Rajampet",
                state: "Andhra Pradesh"
            },
            {
                city: "Tadpatri",
                state: "Andhra Pradesh"
            },
            {
                city: "Tadepalligudem",
                state: "Andhra Pradesh"
            },
            {
                city: "Chilakaluripet",
                state: "Andhra Pradesh"
            },
            {
                city: "Yemmiganur",
                state: "Andhra Pradesh"
            },
            {
                city: "Kadiri",
                state: "Andhra Pradesh"
            },
            {
                city: "Chirala",
                state: "Andhra Pradesh"
            },
            {
                city: "Anakapalle",
                state: "Andhra Pradesh"
            },
            {
                city: "Kavali",
                state: "Andhra Pradesh"
            },
            {
                city: "Palacole",
                state: "Andhra Pradesh"
            },
            {
                city: "Sullurpeta",
                state: "Andhra Pradesh"
            },
            {
                city: "Tanuku",
                state: "Andhra Pradesh"
            },
            {
                city: "Rayachoti",
                state: "Andhra Pradesh"
            },
            {
                city: "Srikalahasti",
                state: "Andhra Pradesh"
            },
            {
                city: "Bapatla",
                state: "Andhra Pradesh"
            },
            {
                city: "Naidupet",
                state: "Andhra Pradesh"
            },
            {
                city: "Nagari",
                state: "Andhra Pradesh"
            },
            {
                city: "Gudur",
                state: "Andhra Pradesh"
            },
            {
                city: "Vinukonda",
                state: "Andhra Pradesh"
            },
            {
                city: "Narasapuram",
                state: "Andhra Pradesh"
            },
            {
                city: "Nuzvid",
                state: "Andhra Pradesh"
            },
            {
                city: "Markapur",
                state: "Andhra Pradesh"
            },
            {
                city: "Ponnur",
                state: "Andhra Pradesh"
            },
            {
                city: "Kandukur",
                state: "Andhra Pradesh"
            },
            {
                city: "Bobbili",
                state: "Andhra Pradesh"
            },
            {
                city: "Rayadurg",
                state: "Andhra Pradesh"
            },
            {
                city: "Samalkot",
                state: "Andhra Pradesh"
            },
            {
                city: "Jaggaiahpet",
                state: "Andhra Pradesh"
            },
            {
                city: "Tuni",
                state: "Andhra Pradesh"
            },
            {
                city: "Amalapuram",
                state: "Andhra Pradesh"
            },
            {
                city: "Bheemunipatnam",
                state: "Andhra Pradesh"
            },
            {
                city: "Venkatagiri",
                state: "Andhra Pradesh"
            },
            {
                city: "Sattenapalle",
                state: "Andhra Pradesh"
            },
            {
                city: "Pithapuram",
                state: "Andhra Pradesh"
            },
            {
                city: "Palasa Kasibugga",
                state: "Andhra Pradesh"
            },
            {
                city: "Parvathipuram",
                state: "Andhra Pradesh"
            },
            {
                city: "Macherla",
                state: "Andhra Pradesh"
            },
            {
                city: "Gooty",
                state: "Andhra Pradesh"
            },
            {
                city: "Salur",
                state: "Andhra Pradesh"
            },
            {
                city: "Mandapeta",
                state: "Andhra Pradesh"
            },
            {
                city: "Jammalamadugu",
                state: "Andhra Pradesh"
            },
            {
                city: "Peddapuram",
                state: "Andhra Pradesh"
            },
            {
                city: "Punganur",
                state: "Andhra Pradesh"
            },
            {
                city: "Nidadavole",
                state: "Andhra Pradesh"
            },
            {
                city: "Repalle",
                state: "Andhra Pradesh"
            },
            {
                city: "Ramachandrapuram",
                state: "Andhra Pradesh"
            },
            {
                city: "Kovvur",
                state: "Andhra Pradesh"
            },
            {
                city: "Tiruvuru",
                state: "Andhra Pradesh"
            },
            {
                city: "Uravakonda",
                state: "Andhra Pradesh"
            },
            {
                city: "Narsipatnam",
                state: "Andhra Pradesh"
            },
            {
                city: "Yerraguntla",
                state: "Andhra Pradesh"
            },
            {
                city: "Pedana",
                state: "Andhra Pradesh"
            },
            {
                city: "Puttur",
                state: "Andhra Pradesh"
            },
            {
                city: "Renigunta",
                state: "Andhra Pradesh"
            },
            {
                city: "Rajam",
                state: "Andhra Pradesh"
            },
            {
                city: "Hyderabad",
                state: "Telangana"
            },
            {
                city: "Warangal",
                state: "Telangana"
            },
            {
                city: "Nizamabad",
                state: "Telangana"
            },
            {
                city: "Karimnagar",
                state: "Telangana"
            },
            {
                city: "Ramagundam",
                state: "Telangana"
            },
            {
                city: "Khammam",
                state: "Telangana"
            },
            {
                city: "Mahbubnagar",
                state: "Telangana"
            },
            {
                city: "Mancherial",
                state: "Telangana"
            },
            {
                city: "Adilabad",
                state: "Telangana"
            },
            {
                city: "Suryapet",
                state: "Telangana"
            },
            {
                city: "Jagtial",
                state: "Telangana"
            },
            {
                city: "Miryalaguda",
                state: "Telangana"
            },
            {
                city: "Nirmal",
                state: "Telangana"
            },
            {
                city: "Kamareddy",
                state: "Telangana"
            },
            {
                city: "Kothagudem",
                state: "Telangana"
            },
            {
                city: "Bodhan",
                state: "Telangana"
            },
            {
                city: "Palwancha",
                state: "Telangana"
            },
            {
                city: "Mandamarri",
                state: "Telangana"
            },
            {
                city: "Koratla",
                state: "Telangana"
            },
            {
                city: "Sircilla",
                state: "Telangana"
            },
            {
                city: "Tandur",
                state: "Telangana"
            },
            {
                city: "Siddipet",
                state: "Telangana"
            },
            {
                city: "Wanaparthy",
                state: "Telangana"
            },
            {
                city: "Kagaznagar",
                state: "Telangana"
            },
            {
                city: "Gadwal",
                state: "Telangana"
            },
            {
                city: "Sangareddy",
                state: "Telangana"
            },
            {
                city: "Bellampalle",
                state: "Telangana"
            },
            {
                city: "Bhongir",
                state: "Telangana"
            },
            {
                city: "Vikarabad",
                state: "Telangana"
            },
            {
                city: "Jangaon",
                state: "Telangana"
            },
            {
                city: "Bhadrachalam",
                state: "Telangana"
            },
            {
                city: "Bhainsa",
                state: "Telangana"
            },
            {
                city: "Farooqnagar",
                state: "Telangana"
            },
            {
                city: "Medak",
                state: "Telangana"
            },
            {
                city: "Narayanpet",
                state: "Telangana"
            },
            {
                city: "Sadasivpet",
                state: "Telangana"
            },
            {
                city: "Yellandu",
                state: "Telangana"
            },
            {
                city: "Manuguru",
                state: "Telangana"
            },
            {
                city: "Kyathampalle",
                state: "Telangana"
            },
            {
                city: "Nagarkurnool",
                state: "Telangana"
            },
        ],
        mcities = [{
                state: "Delhi",
                city: "Delhi"
            },
            {
                state: "India",
                city: "India"
            },
            {
                state: "Nagaland",
                city: "KOHIMA"
            },
            {
                state: "Nagaland",
                city: "LONGLENG"
            },
            {
                state: "Nagaland",
                city: "MON"
            },
            {
                state: "Nagaland",
                city: "PHEK"
            },
            {
                state: "Andaman Nicobar",
                city: "NICOBAR"
            },
            {
                state: "Bihar",
                city: "ARARIA"
            },
            {
                state: "Bihar",
                city: "BANKA"
            },
            {
                state: "Bihar",
                city: "DARBHANGA"
            },
            {
                state: "Bihar",
                city: "GOPALGANJ"
            },
            {
                state: "Bihar",
                city: "JEHANABAD"
            },
            {
                state: "Bihar",
                city: "KHAGARIA"
            },
            {
                state: "Bihar",
                city: "NALANDA"
            },
            {
                state: "Chandigarh",
                city: "CHANDIGARH"
            },
            {
                state: "Jharkhand",
                city: "BOKARO"
            },
            {
                state: "Jharkhand",
                city: "DEOGHAR"
            },
            {
                state: "Jharkhand",
                city: "DHANBAD"
            },
            {
                state: "Jharkhand",
                city: "GIRIDH"
            },
            {
                state: "Jharkhand",
                city: "GODDA"
            },
            {
                state: "Jharkhand",
                city: "KODERMA"
            },
            {
                state: "Jharkhand",
                city: "LOHARDAGA"
            },
            {
                state: "Jharkhand",
                city: "RAMGARH"
            },
            {
                state: "Jharkhand",
                city: "RANCHI"
            },
            {
                state: "Kerala",
                city: "KOLLAM"
            },
            {
                state: "Kerala",
                city: "PALAKKAD"
            },
            {
                state: "Nagaland",
                city: "KIPHIRE"
            },
            {
                state: "Nagaland",
                city: "PEREN"
            },
            {
                state: "Andhra Pradesh",
                city: "ADILABAD"
            },
            {
                state: "Andhra Pradesh",
                city: "KARIM NAGAR"
            },
            {
                state: "Andhra Pradesh",
                city: "KHAMMAM"
            },
            {
                state: "Andhra Pradesh",
                city: "KRISHNA"
            },
            {
                state: "Andhra Pradesh",
                city: "MEDAK"
            },
            {
                state: "Andhra Pradesh",
                city: "NALGONDA"
            },
            {
                state: "Andhra Pradesh",
                city: "NELLORE"
            },
            {
                state: "Andhra Pradesh",
                city: "PRAKASAM"
            },
            {
                state: "Assam",
                city: "BONGAIGAON"
            },
            {
                state: "Assam",
                city: "CACHAR"
            },
            {
                state: "Assam",
                city: "DARRANG"
            },
            {
                state: "Assam",
                city: "DHEMAJI"
            },
            {
                state: "Assam",
                city: "GOALPARA"
            },
            {
                state: "Assam",
                city: "HAILAKANDI"
            },
            {
                state: "Assam",
                city: "KARBI ANGLONG"
            },
            {
                state: "Assam",
                city: "KARIMGANJ"
            },
            {
                state: "Assam",
                city: "KOKRAJHAR"
            },
            {
                state: "Assam",
                city: "MARIGAON"
            },
            {
                state: "Assam",
                city: "NAGAON"
            },
            {
                state: "Assam",
                city: "NALBARI"
            },
            {
                state: "Assam",
                city: "SIBSAGAR"
            },
            {
                state: "Bihar",
                city: "KISHANGANJ"
            },
            {
                state: "Bihar",
                city: "LAKHISARAI"
            },
            {
                state: "Bihar",
                city: "SAHARSA"
            },
            {
                state: "Bihar",
                city: "SARAN"
            },
            {
                state: "Bihar",
                city: "SHEOHAR"
            },
            {
                state: "Himachal Pradesh",
                city: "CHAMBA"
            },
            {
                state: "Himachal Pradesh",
                city: "KANGRA"
            },
            {
                state: "Himachal Pradesh",
                city: "MANDI"
            },
            {
                state: "Himachal Pradesh",
                city: "SHIMLA"
            },
            {
                state: "Himachal Pradesh",
                city: "SOLAN"
            },
            {
                state: "Jharkhand",
                city: "SAHIBGANJ"
            },
            {
                state: "Jharkhand",
                city: "SIMDEGA"
            },
            {
                state: "Kerala",
                city: "KASARGOD"
            },
            {
                state: "Orissa",
                city: "BALANGIR"
            },
            {
                state: "Orissa",
                city: "BARGARH"
            },
            {
                state: "Orissa",
                city: "BHADRAK"
            },
            {
                state: "Orissa",
                city: "DEBAGARH"
            },
            {
                state: "Orissa",
                city: "DHENKANAL"
            },
            {
                state: "Orissa",
                city: "GANJAM"
            },
            {
                state: "Orissa",
                city: "KALAHANDI"
            },
            {
                state: "Orissa",
                city: "KANDHAMAL"
            },
            {
                state: "Orissa",
                city: "KENDRAPARA"
            },
            {
                state: "Orissa",
                city: "KHORDA"
            },
            {
                state: "Orissa",
                city: "MALKANGIRI"
            },
            {
                state: "Andaman Nicobar",
                city: "NORTH AND MIDDLE ANDAMAN"
            },
            {
                state: "Andhra Pradesh",
                city: "CHITTOOR"
            },
            {
                state: "Assam",
                city: "BARPETA"
            },
            {
                state: "Assam",
                city: "GOLAGHAT"
            },
            {
                state: "Assam",
                city: "JORHAT"
            },
            {
                state: "Assam",
                city: "NORTH CACHAR HILLS"
            },
            {
                state: "Bihar",
                city: "EAST CHAMPARAN"
            },
            {
                state: "Bihar",
                city: "KATIHAR"
            },
            {
                state: "Bihar",
                city: "PATNA"
            },
            {
                state: "Bihar",
                city: "ROHTAS"
            },
            {
                state: "Bihar",
                city: "SITAMARHI"
            },
            {
                state: "Chhattisgarh",
                city: "BASTAR"
            },
            {
                state: "Chhattisgarh",
                city: "DHAMTARI"
            },
            {
                state: "Chhattisgarh",
                city: "JANJGIR-CHAMPA"
            },
            {
                state: "Chhattisgarh",
                city: "KANKER"
            },
            {
                state: "Chhattisgarh",
                city: "KORBA"
            },
            {
                state: "Chhattisgarh",
                city: "RAIGARH"
            },
            {
                state: "Chhattisgarh",
                city: "RAJNANDGAON"
            },
            {
                state: "Delhi",
                city: "CENTRAL DELHI"
            },
            {
                state: "Delhi",
                city: "EAST DELHI"
            },
            {
                state: "Delhi",
                city: "NORTH DELHI"
            },
            {
                state: "Goa",
                city: "NORTH GOA"
            },
            {
                state: "Jharkhand",
                city: "CHATRA"
            },
            {
                state: "Jharkhand",
                city: "JAMTARA"
            },
            {
                state: "Jharkhand",
                city: "LATEHAR"
            },
            {
                state: "Karnataka",
                city: "BAGALKOT"
            },
            {
                state: "Karnataka",
                city: "BANGALORE"
            },
            {
                state: "Karnataka",
                city: "BIDAR"
            },
            {
                state: "Karnataka",
                city: "CHAMRAJNAGAR"
            },
            {
                state: "Karnataka",
                city: "DAKSHINA KANNADA"
            },
            {
                state: "Karnataka",
                city: "GADAG"
            },
            {
                state: "Karnataka",
                city: "HASSAN"
            },
            {
                state: "Karnataka",
                city: "KOLAR"
            },
            {
                state: "Karnataka",
                city: "KOPPAL"
            },
            {
                state: "Karnataka",
                city: "RAMANAGAR"
            },
            {
                state: "Karnataka",
                city: "SHIMOGA"
            },
            {
                state: "Kerala",
                city: "PATHANAMTHITTA"
            },
            {
                state: "Maharashtra",
                city: "AHMED NAGAR"
            },
            {
                state: "Maharashtra",
                city: "AKOLA"
            },
            {
                state: "Maharashtra",
                city: "BEED"
            },
            {
                state: "Maharashtra",
                city: "BHANDARA"
            },
            {
                state: "Maharashtra",
                city: "GADCHIROLI"
            },
            {
                state: "Maharashtra",
                city: "GONDIA"
            },
            {
                state: "Maharashtra",
                city: "HINGOLI"
            },
            {
                state: "Maharashtra",
                city: "JALGAON"
            },
            {
                state: "Maharashtra",
                city: "JALNA"
            },
            {
                state: "Maharashtra",
                city: "NANDED"
            },
            {
                state: "Maharashtra",
                city: "NASHIK"
            },
            {
                state: "Maharashtra",
                city: "OSMANABAD"
            },
            {
                state: "Maharashtra",
                city: "PARBHANI"
            },
            {
                state: "Maharashtra",
                city: "RAIGARH(MH)"
            },
            {
                state: "Maharashtra",
                city: "RATNAGIRI"
            },
            {
                state: "Maharashtra",
                city: "SANGLI"
            },
            {
                state: "Maharashtra",
                city: "SATARA"
            },
            {
                state: "Maharashtra",
                city: "THANE"
            },
            {
                state: "Orissa",
                city: "GAJAPATI"
            },
            {
                state: "Rajasthan",
                city: "AJMER"
            },
            {
                state: "Rajasthan",
                city: "BARAN"
            },
            {
                state: "Rajasthan",
                city: "BARMER"
            },
            {
                state: "Rajasthan",
                city: "BIKANER"
            },
            {
                state: "Rajasthan",
                city: "CHITTORGARH"
            },
            {
                state: "Rajasthan",
                city: "GANGANAGAR"
            },
            {
                state: "Rajasthan",
                city: "JAISALMER"
            },
            {
                state: "Rajasthan",
                city: "JALOR"
            },
            {
                state: "Rajasthan",
                city: "KOTA"
            },
            {
                state: "Rajasthan",
                city: "PALI"
            },
            {
                state: "Rajasthan",
                city: "RAJSAMAND"
            },
            {
                state: "Rajasthan",
                city: "SIKAR"
            },
            {
                state: "Rajasthan",
                city: "SIROHI"
            },
            {
                state: "Rajasthan",
                city: "TONK"
            },
            {
                state: "Sikkim",
                city: "EAST SIKKIM"
            },
            {
                state: "Sikkim",
                city: "NORTH SIKKIM"
            },
            {
                state: "Tamil Nadu",
                city: "KANCHIPURAM"
            },
            {
                state: "Chhattisgarh",
                city: "BIJAPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "BALLIA"
            },
            {
                state: "Andaman Nicobar",
                city: "SOUTH ANDAMAN"
            },
            {
                state: "Andhra Pradesh",
                city: "ANANTHAPUR"
            },
            {
                state: "Andhra Pradesh",
                city: "CUDDAPAH"
            },
            {
                state: "Andhra Pradesh",
                city: "GUNTUR"
            },
            {
                state: "Andhra Pradesh",
                city: "KURNOOL"
            },
            {
                state: "Andhra Pradesh",
                city: "MAHABUB NAGAR"
            },
            {
                state: "Andhra Pradesh",
                city: "SRIKAKULAM"
            },
            {
                state: "Arunachal Pradesh",
                city: "CHANGLANG"
            },
            {
                state: "Arunachal Pradesh",
                city: "EAST KAMENG"
            },
            {
                state: "Arunachal Pradesh",
                city: "EAST SIANG"
            },
            {
                state: "Arunachal Pradesh",
                city: "LOHIT"
            },
            {
                state: "Arunachal Pradesh",
                city: "PAPUM PARE"
            },
            {
                state: "Arunachal Pradesh",
                city: "TIRAP"
            },
            {
                state: "Arunachal Pradesh",
                city: "UPPER SIANG"
            },
            {
                state: "Arunachal Pradesh",
                city: "UPPER SUBANSIRI"
            },
            {
                state: "Assam",
                city: "DHUBRI"
            },
            {
                state: "Assam",
                city: "DIBRUGARH"
            },
            {
                state: "Assam",
                city: "KAMRUP"
            },
            {
                state: "Assam",
                city: "LAKHIMPUR"
            },
            {
                state: "Assam",
                city: "SONITPUR"
            },
            {
                state: "Assam",
                city: "TINSUKIA"
            },
            {
                state: "Bihar",
                city: "AURANGABAD(BH)"
            },
            {
                state: "Bihar",
                city: "BEGUSARAI"
            },
            {
                state: "Bihar",
                city: "BHAGALPUR"
            },
            {
                state: "Bihar",
                city: "BHOJPUR"
            },
            {
                state: "Bihar",
                city: "JAMUI"
            },
            {
                state: "Bihar",
                city: "KAIMUR (BHABUA)"
            },
            {
                state: "Bihar",
                city: "MADHEPURA"
            },
            {
                state: "Bihar",
                city: "MADHUBANI"
            },
            {
                state: "Bihar",
                city: "MUNGER"
            },
            {
                state: "Bihar",
                city: "PURNIA"
            },
            {
                state: "Bihar",
                city: "SAMASTIPUR"
            },
            {
                state: "Bihar",
                city: "SHEIKHPURA"
            },
            {
                state: "Bihar",
                city: "SUPAUL"
            },
            {
                state: "Chhattisgarh",
                city: "BILASPUR"
            },
            {
                state: "Chhattisgarh",
                city: "DURG"
            },
            {
                state: "Chhattisgarh",
                city: "JASHPUR"
            },
            {
                state: "Chhattisgarh",
                city: "MAHASAMUND"
            },
            {
                state: "Chhattisgarh",
                city: "RAIPUR"
            },
            {
                state: "Chhattisgarh",
                city: "SURGUJA"
            },
            {
                state: "Daman & Diu",
                city: "DAMAN"
            },
            {
                state: "Daman & Diu",
                city: "DIU"
            },
            {
                state: "Delhi",
                city: "SOUTH DELHI"
            },
            {
                state: "Goa",
                city: "SOUTH GOA"
            },
            {
                state: "Gujarat",
                city: "AHMEDABAD"
            },
            {
                state: "Gujarat",
                city: "AMRELI"
            },
            {
                state: "Gujarat",
                city: "ANAND"
            },
            {
                state: "Gujarat",
                city: "BANASKANTHA"
            },
            {
                state: "Gujarat",
                city: "BHARUCH"
            },
            {
                state: "Gujarat",
                city: "DAHOD"
            },
            {
                state: "Gujarat",
                city: "GANDHI NAGAR"
            },
            {
                state: "Gujarat",
                city: "JAMNAGAR"
            },
            {
                state: "Gujarat",
                city: "JUNAGADH"
            },
            {
                state: "Gujarat",
                city: "KACHCHH"
            },
            {
                state: "Gujarat",
                city: "KHEDA"
            },
            {
                state: "Gujarat",
                city: "MAHESANA"
            },
            {
                state: "Gujarat",
                city: "NARMADA"
            },
            {
                state: "Gujarat",
                city: "PANCH MAHALS"
            },
            {
                state: "Gujarat",
                city: "PATAN"
            },
            {
                state: "Gujarat",
                city: "PORBANDAR"
            },
            {
                state: "Gujarat",
                city: "RAJKOT"
            },
            {
                state: "Gujarat",
                city: "SABARKANTHA"
            },
            {
                state: "Gujarat",
                city: "SURAT"
            },
            {
                state: "Gujarat",
                city: "SURENDRA NAGAR"
            },
            {
                state: "Gujarat",
                city: "THE DANGS"
            },
            {
                state: "Himachal Pradesh",
                city: "BILASPUR (HP)"
            },
            {
                state: "Himachal Pradesh",
                city: "HAMIRPUR(HP)"
            },
            {
                state: "Himachal Pradesh",
                city: "KINNAUR"
            },
            {
                state: "Himachal Pradesh",
                city: "KULLU"
            },
            {
                state: "Himachal Pradesh",
                city: "LAHUL & SPITI"
            },
            {
                state: "Himachal Pradesh",
                city: "SIRMAUR"
            },
            {
                state: "Himachal Pradesh",
                city: "UNA"
            },
            {
                state: "Jammu & Kashmir",
                city: "ANANTHNAG"
            },
            {
                state: "Jammu & Kashmir",
                city: "BARAMULLA"
            },
            {
                state: "Jammu & Kashmir",
                city: "BUDGAM"
            },
            {
                state: "Jammu & Kashmir",
                city: "DODA"
            },
            {
                state: "Jammu & Kashmir",
                city: "JAMMU"
            },
            {
                state: "Jammu & Kashmir",
                city: "KARGIL"
            },
            {
                state: "Jammu & Kashmir",
                city: "KATHUA"
            },
            {
                state: "Jammu & Kashmir",
                city: "LEH"
            },
            {
                state: "Jammu & Kashmir",
                city: "POONCH"
            },
            {
                state: "Jammu & Kashmir",
                city: "RAJAURI"
            },
            {
                state: "Jammu & Kashmir",
                city: "SRINAGAR"
            },
            {
                state: "Jammu & Kashmir",
                city: "UDHAMPUR"
            },
            {
                state: "Jharkhand",
                city: "DUMKA"
            },
            {
                state: "Jharkhand",
                city: "EAST SINGHBHUM"
            },
            {
                state: "Jharkhand",
                city: "GUMLA"
            },
            {
                state: "Jharkhand",
                city: "PAKUR"
            },
            {
                state: "Jharkhand",
                city: "PALAMAU"
            },
            {
                state: "Karnataka",
                city: "BANGLORE RURAL"
            },
            {
                state: "Karnataka",
                city: "BELGAUM"
            },
            {
                state: "Karnataka",
                city: "CHICKMAGALUR"
            },
            {
                state: "Karnataka",
                city: "CHITRADURGA"
            },
            {
                state: "Karnataka",
                city: "GULBARGA"
            },
            {
                state: "Karnataka",
                city: "KODAGU"
            },
            {
                state: "Karnataka",
                city: "RAICHUR"
            },
            {
                state: "Karnataka",
                city: "TUMKUR"
            },
            {
                state: "Karnataka",
                city: "UDUPI"
            },
            {
                state: "Karnataka",
                city: "UTTARA KANNADA"
            },
            {
                state: "Kerala",
                city: "ERNAKULAM"
            },
            {
                state: "Kerala",
                city: "IDUKKI"
            },
            {
                state: "Kerala",
                city: "KANNUR"
            },
            {
                state: "Kerala",
                city: "MALAPPURAM"
            },
            {
                state: "Kerala",
                city: "THRISSUR"
            },
            {
                state: "Maharashtra",
                city: "AURANGABAD"
            },
            {
                state: "Maharashtra",
                city: "BULDHANA"
            },
            {
                state: "Maharashtra",
                city: "CHANDRAPUR"
            },
            {
                state: "Maharashtra",
                city: "DHULE"
            },
            {
                state: "Maharashtra",
                city: "KOLHAPUR"
            },
            {
                state: "Maharashtra",
                city: "LATUR"
            },
            {
                state: "Maharashtra",
                city: "MUMBAI"
            },
            {
                state: "Maharashtra",
                city: "NAGPUR"
            },
            {
                state: "Maharashtra",
                city: "NANDURBAR"
            },
            {
                state: "Maharashtra",
                city: "PUNE"
            },
            {
                state: "Maharashtra",
                city: "SINDHUDURG"
            },
            {
                state: "Maharashtra",
                city: "SOLAPUR"
            },
            {
                state: "Manipur",
                city: "BISHNUPUR"
            },
            {
                state: "Manipur",
                city: "CHANDEL"
            },
            {
                state: "Manipur",
                city: "CHURACHANDPUR"
            },
            {
                state: "Manipur",
                city: "IMPHAL EAST"
            },
            {
                state: "Manipur",
                city: "SENAPATI"
            },
            {
                state: "Manipur",
                city: "TAMENGLONG"
            },
            {
                state: "Manipur",
                city: "THOUBAL"
            },
            {
                state: "Manipur",
                city: "UKHRUL"
            },
            {
                state: "Nagaland",
                city: "DIMAPUR"
            },
            {
                state: "Nagaland",
                city: "MOKOKCHUNG"
            },
            {
                state: "Nagaland",
                city: "TUENSANG"
            },
            {
                state: "Orissa",
                city: "ANGUL"
            },
            {
                state: "Orissa",
                city: "BOUDH"
            },
            {
                state: "Orissa",
                city: "CUTTACK"
            },
            {
                state: "Orissa",
                city: "JAGATSINGHAPUR"
            },
            {
                state: "Orissa",
                city: "JAJAPUR"
            },
            {
                state: "Orissa",
                city: "JHARSUGUDA"
            },
            {
                state: "Orissa",
                city: "KENDUJHAR"
            },
            {
                state: "Orissa",
                city: "KORAPUT"
            },
            {
                state: "Orissa",
                city: "NABARANGAPUR"
            },
            {
                state: "Orissa",
                city: "NUAPADA"
            },
            {
                state: "Orissa",
                city: "PURI"
            },
            {
                state: "Orissa",
                city: "SAMBALPUR"
            },
            {
                state: "Orissa",
                city: "SONAPUR"
            },
            {
                state: "Orissa",
                city: "SUNDERGARH"
            },
            {
                state: "Punjab",
                city: "AMRITSAR"
            },
            {
                state: "Punjab",
                city: "BATHINDA"
            },
            {
                state: "Punjab",
                city: "FARIDKOT"
            },
            {
                state: "Punjab",
                city: "FATEHGARH SAHIB"
            },
            {
                state: "Punjab",
                city: "GURDASPUR"
            },
            {
                state: "Punjab",
                city: "HOSHIARPUR"
            },
            {
                state: "Punjab",
                city: "JALANDHAR"
            },
            {
                state: "Punjab",
                city: "KAPURTHALA"
            },
            {
                state: "Punjab",
                city: "LUDHIANA"
            },
            {
                state: "Punjab",
                city: "MANSA"
            },
            {
                state: "Punjab",
                city: "MOGA"
            },
            {
                state: "Punjab",
                city: "MOHALI"
            },
            {
                state: "Punjab",
                city: "MUKTSAR"
            },
            {
                state: "Punjab",
                city: "PATIALA"
            },
            {
                state: "Punjab",
                city: "ROPAR"
            },
            {
                state: "Punjab",
                city: "SANGRUR"
            },
            {
                state: "Rajasthan",
                city: "BHARATPUR"
            },
            {
                state: "Rajasthan",
                city: "BUNDI"
            },
            {
                state: "Rajasthan",
                city: "CHURU"
            },
            {
                state: "Rajasthan",
                city: "DAUSA"
            },
            {
                state: "Rajasthan",
                city: "DHOLPUR"
            },
            {
                state: "Rajasthan",
                city: "DUNGARPUR"
            },
            {
                state: "Rajasthan",
                city: "HANUMANGARH"
            },
            {
                state: "Rajasthan",
                city: "JAIPUR"
            },
            {
                state: "Rajasthan",
                city: "JHUJHUNU"
            },
            {
                state: "Rajasthan",
                city: "JODHPUR"
            },
            {
                state: "Rajasthan",
                city: "KARAULI"
            },
            {
                state: "Rajasthan",
                city: "NAGAUR"
            },
            {
                state: "Rajasthan",
                city: "UDAIPUR"
            },
            {
                state: "Sikkim",
                city: "SOUTH SIKKIM"
            },
            {
                state: "Tamil Nadu",
                city: "CHENNAI"
            },
            {
                state: "Tamil Nadu",
                city: "COIMBATORE"
            },
            {
                state: "Tamil Nadu",
                city: "CUDDALORE"
            },
            {
                state: "Tamil Nadu",
                city: "DHARMAPURI"
            },
            {
                state: "Tamil Nadu",
                city: "DINDIGUL"
            },
            {
                state: "Tamil Nadu",
                city: "ERODE"
            },
            {
                state: "Tamil Nadu",
                city: "KARUR"
            },
            {
                state: "Tamil Nadu",
                city: "KRISHNAGIRI"
            },
            {
                state: "Tamil Nadu",
                city: "MADURAI"
            },
            {
                state: "Tamil Nadu",
                city: "NAGAPATTINAM"
            },
            {
                state: "Tamil Nadu",
                city: "NAMAKKAL"
            },
            {
                state: "Tamil Nadu",
                city: "NILGIRIS"
            },
            {
                state: "Tamil Nadu",
                city: "PERAMBALUR"
            },
            {
                state: "Tamil Nadu",
                city: "PUDUKKOTTAI"
            },
            {
                state: "Tamil Nadu",
                city: "RAMANATHAPURAM"
            },
            {
                state: "Tamil Nadu",
                city: "SALEM"
            },
            {
                state: "Tamil Nadu",
                city: "THENI"
            },
            {
                state: "Tamil Nadu",
                city: "TIRUCHIRAPPALLI"
            },
            {
                state: "Tamil Nadu",
                city: "TUTICORIN"
            },
            {
                state: "Tripura",
                city: "DHALAI"
            },
            {
                state: "Tripura",
                city: "NORTH TRIPURA"
            },
            {
                state: "Tripura",
                city: "SOUTH TRIPURA"
            },
            {
                state: "Uttar Pradesh",
                city: "AGRA"
            },
            {
                state: "Uttar Pradesh",
                city: "ALIGARH"
            },
            {
                state: "Uttar Pradesh",
                city: "ALLAHABAD"
            },
            {
                state: "Uttar Pradesh",
                city: "AMBEDKAR NAGAR"
            },
            {
                state: "Uttar Pradesh",
                city: "BAGPAT"
            },
            {
                state: "Uttar Pradesh",
                city: "BAHRAICH"
            },
            {
                state: "Uttar Pradesh",
                city: "BALRAMPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "BANDA"
            },
            {
                state: "Uttar Pradesh",
                city: "BARABANKI"
            },
            {
                state: "Uttar Pradesh",
                city: "BASTI"
            },
            {
                state: "Uttar Pradesh",
                city: "BIJNOR"
            },
            {
                state: "Uttar Pradesh",
                city: "BUDAUN"
            },
            {
                state: "Uttar Pradesh",
                city: "BULANDSHAHR"
            },
            {
                state: "Uttar Pradesh",
                city: "CHANDAULI"
            },
            {
                state: "Uttar Pradesh",
                city: "CHITRAKOOT"
            },
            {
                state: "Uttar Pradesh",
                city: "DEORIA"
            },
            {
                state: "Uttar Pradesh",
                city: "ETAH"
            },
            {
                state: "Uttar Pradesh",
                city: "FARRUKHABAD"
            },
            {
                state: "Uttar Pradesh",
                city: "FATEHPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "GAUTAM BUDDHA NAGAR"
            },
            {
                state: "Uttar Pradesh",
                city: "GONDA"
            },
            {
                state: "Uttar Pradesh",
                city: "GORAKHPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "HAMIRPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "HARDOI"
            },
            {
                state: "Uttar Pradesh",
                city: "HATHRAS"
            },
            {
                state: "Uttar Pradesh",
                city: "JALAUN"
            },
            {
                state: "Uttar Pradesh",
                city: "JAUNPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "JHANSI"
            },
            {
                state: "Uttar Pradesh",
                city: "KANNAUJ"
            },
            {
                state: "Uttar Pradesh",
                city: "KANPUR DEHAT"
            },
            {
                state: "Uttar Pradesh",
                city: "KANPUR NAGAR"
            },
            {
                state: "Uttar Pradesh",
                city: "KAUSHAMBI"
            },
            {
                state: "Uttar Pradesh",
                city: "KHERI"
            },
            {
                state: "Uttar Pradesh",
                city: "KUSHINAGAR"
            },
            {
                state: "Uttar Pradesh",
                city: "LALITPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "MAHARAJGANJ"
            },
            {
                state: "Uttar Pradesh",
                city: "MAHOBA"
            },
            {
                state: "Uttar Pradesh",
                city: "MAINPURI"
            },
            {
                state: "Uttar Pradesh",
                city: "MATHURA"
            },
            {
                state: "Uttar Pradesh",
                city: "MAU"
            },
            {
                state: "Uttar Pradesh",
                city: "MEERUT"
            },
            {
                state: "Uttar Pradesh",
                city: "MORADABAD"
            },
            {
                state: "Uttar Pradesh",
                city: "PILIBHIT"
            },
            {
                state: "Uttar Pradesh",
                city: "PRATAPGARH"
            },
            {
                state: "Uttar Pradesh",
                city: "RAEBARELI"
            },
            {
                state: "Uttar Pradesh",
                city: "RAMPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "SAHARANPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "SANT KABIR NAGAR"
            },
            {
                state: "Uttar Pradesh",
                city: "SHAHJAHANPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "SIDDHARTHNAGAR"
            },
            {
                state: "Uttar Pradesh",
                city: "SITAPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "SONBHADRA"
            },
            {
                state: "Uttar Pradesh",
                city: "SULTANPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "UNNAO"
            },
            {
                state: "Uttarakhand",
                city: "ALMORA"
            },
            {
                state: "Uttarakhand",
                city: "CHAMOLI"
            },
            {
                state: "Uttarakhand",
                city: "DEHRADUN"
            },
            {
                state: "Uttarakhand",
                city: "NAINITAL"
            },
            {
                state: "Uttarakhand",
                city: "PITHORAGARH"
            },
            {
                state: "Uttarakhand",
                city: "UDHAM SINGH NAGAR"
            },
            {
                state: "Uttarakhand",
                city: "UTTARKASHI"
            },
            {
                state: "Uttar Pradesh",
                city: "NOIDA"
            },
            {
                state: "Uttar Pradesh",
                city: "Greater NOIDA"
            },
            {
                state: "Andhra Pradesh",
                city: "EAST GODAVARI"
            },
            {
                state: "Andhra Pradesh",
                city: "VISAKHAPATNAM"
            },
            {
                state: "Bihar",
                city: "VAISHALI"
            },
            {
                state: "Dadra & Nagar Haveli",
                city: "DADRA & NAGAR HAVELI"
            },
            {
                state: "Gujarat",
                city: "BHAVNAGAR"
            },
            {
                state: "Gujarat",
                city: "NAVSARI"
            },
            {
                state: "Gujarat",
                city: "VADODARA"
            },
            {
                state: "Gujarat",
                city: "VALSAD"
            },
            {
                state: "Karnataka",
                city: "DAVANGARE"
            },
            {
                state: "Karnataka",
                city: "HAVERI"
            },
            {
                state: "Kerala",
                city: "THIRUVANANTHAPURAM"
            },
            {
                state: "Maharashtra",
                city: "AMRAVATI"
            },
            {
                state: "Tamil Nadu",
                city: "SIVAGANGA"
            },
            {
                state: "Tamil Nadu",
                city: "THANJAVUR"
            },
            {
                state: "Tamil Nadu",
                city: "TIRUNELVELI"
            },
            {
                state: "Tamil Nadu",
                city: "TIRUVALLUR"
            },
            {
                state: "Tamil Nadu",
                city: "TIRUVANNAMALAI"
            },
            {
                state: "Tamil Nadu",
                city: "TIRUVARUR"
            },
            {
                state: "Tamil Nadu",
                city: "VELLORE"
            },
            {
                state: "Tamil Nadu",
                city: "VILLUPURAM"
            },
            {
                state: "Tamil Nadu",
                city: "VIRUDHUNAGAR"
            },
            {
                state: "Uttar Pradesh",
                city: "SANT RAVIDAS NAGAR"
            },
            {
                state: "Uttar Pradesh",
                city: "VARANASI"
            },
            {
                state: "Andhra Pradesh",
                city: "WARANGAL"
            },
            {
                state: "Andhra Pradesh",
                city: "WEST GODAVARI"
            },
            {
                state: "Arunachal Pradesh",
                city: "LOWER SUBANSIRI"
            },
            {
                state: "Arunachal Pradesh",
                city: "TAWANG"
            },
            {
                state: "Arunachal Pradesh",
                city: "WEST KAMENG"
            },
            {
                state: "Arunachal Pradesh",
                city: "WEST SIANG"
            },
            {
                state: "Bihar",
                city: "NAWADA"
            },
            {
                state: "Bihar",
                city: "SIWAN"
            },
            {
                state: "Bihar",
                city: "WEST CHAMPARAN"
            },
            {
                state: "Chhattisgarh",
                city: "DANTEWADA"
            },
            {
                state: "Chhattisgarh",
                city: "KAWARDHA"
            },
            {
                state: "Delhi",
                city: "NEW DELHI"
            },
            {
                state: "Delhi",
                city: "NORTH WEST DELHI"
            },
            {
                state: "Delhi",
                city: "SOUTH WEST DELHI"
            },
            {
                state: "Delhi",
                city: "WEST-DELHI"
            },
            {
                state: "Jammu & Kashmir",
                city: "KUPWARA"
            },
            {
                state: "Jammu & Kashmir",
                city: "PULWAMA"
            },
            {
                state: "Jharkhand",
                city: "GARHWA"
            },
            {
                state: "Jharkhand",
                city: "SERAIKELA-KHARSAWAN"
            },
            {
                state: "Jharkhand",
                city: "WEST SINGHBHUM"
            },
            {
                state: "Karnataka",
                city: "DHARWARD"
            },
            {
                state: "Lakshdweep",
                city: "LAKSHADWEEP"
            },
            {
                state: "Maharashtra",
                city: "WARDHA"
            },
            {
                state: "Maharashtra",
                city: "WASHIM"
            },
            {
                state: "Manipur",
                city: "IMPHAL WEST"
            },
            {
                state: "Nagaland",
                city: "WOKHA"
            },
            {
                state: "Orissa",
                city: "BALESWAR"
            },
            {
                state: "Punjab",
                city: "NAWANSHAHR"
            },
            {
                state: "Rajasthan",
                city: "ALWAR"
            },
            {
                state: "Rajasthan",
                city: "BANSWARA"
            },
            {
                state: "Rajasthan",
                city: "BHILWARA"
            },
            {
                state: "Rajasthan",
                city: "JHALAWAR"
            },
            {
                state: "Rajasthan",
                city: "SAWAI MADHOPUR"
            },
            {
                state: "Sikkim",
                city: "WEST SIKKIM"
            },
            {
                state: "Tripura",
                city: "WEST TRIPURA"
            },
            {
                state: "Uttar Pradesh",
                city: "ETAWAH"
            },
            {
                state: "Uttar Pradesh",
                city: "LUCKNOW"
            },
            {
                state: "Uttar Pradesh",
                city: "SHRAWASTI"
            },
            {
                state: "Uttarakhand",
                city: "BAGESHWAR"
            },
            {
                state: "Uttarakhand",
                city: "CHAMPAWAT"
            },
            {
                state: "Uttarakhand",
                city: "HARIDWAR"
            },
            {
                state: "Uttarakhand",
                city: "PAURI GARHWAL"
            },
            {
                state: "Uttarakhand",
                city: "TEHRI GARHWAL"
            },
            {
                state: "West Bengal",
                city: "BANKURA"
            },
            {
                state: "West Bengal",
                city: "BARDHAMAN"
            },
            {
                state: "West Bengal",
                city: "BIRBHUM"
            },
            {
                state: "West Bengal",
                city: "COOCH BEHAR"
            },
            {
                state: "West Bengal",
                city: "DARJILING"
            },
            {
                state: "West Bengal",
                city: "EAST MIDNAPORE"
            },
            {
                state: "West Bengal",
                city: "HOWRAH"
            },
            {
                state: "West Bengal",
                city: "JALPAIGURI"
            },
            {
                state: "West Bengal",
                city: "KOLKATA"
            },
            {
                state: "West Bengal",
                city: "MALDA"
            },
            {
                state: "West Bengal",
                city: "MURSHIDABAD"
            },
            {
                state: "West Bengal",
                city: "NADIA"
            },
            {
                state: "West Bengal",
                city: "NORTH 24 PARGANAS"
            },
            {
                state: "West Bengal",
                city: "NORTH DINAJPUR"
            },
            {
                state: "West Bengal",
                city: "SOUTH 24 PARGANAS"
            },
            {
                state: "West Bengal",
                city: "SOUTH DINAJPUR"
            },
            {
                state: "West Bengal",
                city: "WEST MIDNAPORE"
            },
            {
                state: "Uttar Pradesh",
                city: "Greater NOIDA West"
            },
            {
                state: "Bihar",
                city: "BUXAR"
            },
            {
                state: "Andhra Pradesh",
                city: "HYDERABAD"
            },
            {
                state: "Andhra Pradesh",
                city: "K.V.RANGAREDDY"
            },
            {
                state: "Arunachal Pradesh",
                city: "DIBANG VALLEY"
            },
            {
                state: "Arunachal Pradesh",
                city: "KURUNG KUMEY"
            },
            {
                state: "Arunachal Pradesh",
                city: "LOWER DIBANG VALLEY"
            },
            {
                state: "Bihar",
                city: "GAYA"
            },
            {
                state: "Chhattisgarh",
                city: "KORIYA"
            },
            {
                state: "Chhattisgarh",
                city: "NARAYANPUR"
            },
            {
                state: "Haryana",
                city: "AMBALA"
            },
            {
                state: "Haryana",
                city: "BHIWANI"
            },
            {
                state: "Haryana",
                city: "FARIDABAD"
            },
            {
                state: "Haryana",
                city: "FATEHABAD"
            },
            {
                state: "Haryana",
                city: "GURGAON"
            },
            {
                state: "Haryana",
                city: "HISAR"
            },
            {
                state: "Haryana",
                city: "JHAJJAR"
            },
            {
                state: "Haryana",
                city: "JIND"
            },
            {
                state: "Haryana",
                city: "KAITHAL"
            },
            {
                state: "Haryana",
                city: "KARNAL"
            },
            {
                state: "Haryana",
                city: "KURUKSHETRA"
            },
            {
                state: "Haryana",
                city: "MAHENDRAGARH"
            },
            {
                state: "Haryana",
                city: "PANCHKULA"
            },
            {
                state: "Haryana",
                city: "PANIPAT"
            },
            {
                state: "Haryana",
                city: "REWARI"
            },
            {
                state: "Haryana",
                city: "ROHTAK"
            },
            {
                state: "Haryana",
                city: "SIRSA"
            },
            {
                state: "Haryana",
                city: "SONIPAT"
            },
            {
                state: "Haryana",
                city: "YAMUNA NAGAR"
            },
            {
                state: "Karnataka",
                city: "BELLARY"
            },
            {
                state: "Karnataka",
                city: "MANDYA"
            },
            {
                state: "Karnataka",
                city: "MYSORE"
            },
            {
                state: "Kerala",
                city: "KOTTAYAM"
            },
            {
                state: "Kerala",
                city: "WAYANAD"
            },
            {
                state: "Madhya Pradesh",
                city: "ANUPPUR"
            },
            {
                state: "Madhya Pradesh",
                city: "ASHOK NAGAR"
            },
            {
                state: "Madhya Pradesh",
                city: "BALAGHAT"
            },
            {
                state: "Madhya Pradesh",
                city: "BARWANI"
            },
            {
                state: "Madhya Pradesh",
                city: "BETUL"
            },
            {
                state: "Madhya Pradesh",
                city: "BHIND"
            },
            {
                state: "Madhya Pradesh",
                city: "BHOPAL"
            },
            {
                state: "Madhya Pradesh",
                city: "BURHANPUR"
            },
            {
                state: "Madhya Pradesh",
                city: "CHHATARPUR"
            },
            {
                state: "Madhya Pradesh",
                city: "CHHINDWARA"
            },
            {
                state: "Madhya Pradesh",
                city: "DAMOH"
            },
            {
                state: "Madhya Pradesh",
                city: "DATIA"
            },
            {
                state: "Madhya Pradesh",
                city: "DEWAS"
            },
            {
                state: "Madhya Pradesh",
                city: "DHAR"
            },
            {
                state: "Madhya Pradesh",
                city: "DINDORI"
            },
            {
                state: "Madhya Pradesh",
                city: "GUNA"
            },
            {
                state: "Madhya Pradesh",
                city: "GWALIOR"
            },
            {
                state: "Madhya Pradesh",
                city: "HARDA"
            },
            {
                state: "Madhya Pradesh",
                city: "HOSHANGABAD"
            },
            {
                state: "Madhya Pradesh",
                city: "INDORE"
            },
            {
                state: "Madhya Pradesh",
                city: "JABALPUR"
            },
            {
                state: "Madhya Pradesh",
                city: "JHABUA"
            },
            {
                state: "Madhya Pradesh",
                city: "KATNI"
            },
            {
                state: "Madhya Pradesh",
                city: "KHANDWA"
            },
            {
                state: "Madhya Pradesh",
                city: "KHARGONE"
            },
            {
                state: "Madhya Pradesh",
                city: "MANDLA"
            },
            {
                state: "Madhya Pradesh",
                city: "MANDSAUR"
            },
            {
                state: "Madhya Pradesh",
                city: "MORENA"
            },
            {
                state: "Madhya Pradesh",
                city: "NARSINGHPUR"
            },
            {
                state: "Madhya Pradesh",
                city: "NEEMUCH"
            },
            {
                state: "Madhya Pradesh",
                city: "PANNA"
            },
            {
                state: "Madhya Pradesh",
                city: "RAISEN"
            },
            {
                state: "Madhya Pradesh",
                city: "RAJGARH"
            },
            {
                state: "Madhya Pradesh",
                city: "RATLAM"
            },
            {
                state: "Madhya Pradesh",
                city: "REWA"
            },
            {
                state: "Madhya Pradesh",
                city: "SAGAR"
            },
            {
                state: "Madhya Pradesh",
                city: "SATNA"
            },
            {
                state: "Madhya Pradesh",
                city: "SEHORE"
            },
            {
                state: "Madhya Pradesh",
                city: "SEONI"
            },
            {
                state: "Madhya Pradesh",
                city: "SHAHDOL"
            },
            {
                state: "Madhya Pradesh",
                city: "SHAJAPUR"
            },
            {
                state: "Madhya Pradesh",
                city: "SHEOPUR"
            },
            {
                state: "Madhya Pradesh",
                city: "SHIVPURI"
            },
            {
                state: "Madhya Pradesh",
                city: "SIDHI"
            },
            {
                state: "Madhya Pradesh",
                city: "TIKAMGARH"
            },
            {
                state: "Madhya Pradesh",
                city: "UJJAIN"
            },
            {
                state: "Madhya Pradesh",
                city: "UMARIA"
            },
            {
                state: "Madhya Pradesh",
                city: "VIDISHA"
            },
            {
                state: "Maharashtra",
                city: "YAVATMAL"
            },
            {
                state: "Meghalaya",
                city: "EAST GARO HILLS"
            },
            {
                state: "Meghalaya",
                city: "EAST KHASI HILLS"
            },
            {
                state: "Meghalaya",
                city: "JAINTIA HILLS"
            },
            {
                state: "Meghalaya",
                city: "RI BHOI"
            },
            {
                state: "Meghalaya",
                city: "SOUTH GARO HILLS"
            },
            {
                state: "Meghalaya",
                city: "WEST GARO HILLS"
            },
            {
                state: "Meghalaya",
                city: "WEST KHASI HILLS"
            },
            {
                state: "Orissa",
                city: "MAYURBHANJ"
            },
            {
                state: "Orissa",
                city: "NAYAGARH"
            },
            {
                state: "Orissa",
                city: "RAYAGADA"
            },
            {
                state: "Pondicherry",
                city: "KARAIKAL"
            },
            {
                state: "Pondicherry",
                city: "MAHE"
            },
            {
                state: "Pondicherry",
                city: "PONDICHERRY"
            },
            {
                state: "Tamil Nadu",
                city: "ARIYALUR"
            },
            {
                state: "Tamil Nadu",
                city: "KANYAKUMARI"
            },
            {
                state: "Uttar Pradesh",
                city: "AURAIYA"
            },
            {
                state: "Uttar Pradesh",
                city: "BAREILLY"
            },
            {
                state: "Uttar Pradesh",
                city: "JYOTIBA PHULE NAGAR"
            },
            {
                state: "Uttarakhand",
                city: "RUDRAPRAYAG"
            },
            {
                state: "West Bengal",
                city: "HOOGHLY"
            },
            {
                state: "West Bengal",
                city: "PURULIYA"
            },
            {
                state: "Andhra Pradesh",
                city: "NIZAMABAD"
            },
            {
                state: "Andhra Pradesh",
                city: "VIZIANAGARAM"
            },
            {
                state: "Bihar",
                city: "MUZAFFARPUR"
            },
            {
                state: "Jharkhand",
                city: "HAZARIBAG"
            },
            {
                state: "Kerala",
                city: "ALAPPUZHA"
            },
            {
                state: "Kerala",
                city: "KOZHIKODE"
            },
            {
                state: "Mizoram",
                city: "AIZAWL"
            },
            {
                state: "Mizoram",
                city: "CHAMPHAI"
            },
            {
                state: "Mizoram",
                city: "KOLASIB"
            },
            {
                state: "Mizoram",
                city: "LAWNGTLAI"
            },
            {
                state: "Mizoram",
                city: "LUNGLEI"
            },
            {
                state: "Mizoram",
                city: "MAMMIT"
            },
            {
                state: "Mizoram",
                city: "SAIHA"
            },
            {
                state: "Mizoram",
                city: "SERCHHIP"
            },
            {
                state: "Nagaland",
                city: "ZUNHEBOTTO"
            },
            {
                state: "Punjab",
                city: "FIROZPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "AZAMGARH"
            },
            {
                state: "Uttar Pradesh",
                city: "FAIZABAD"
            },
            {
                state: "Uttar Pradesh",
                city: "FIROZABAD"
            },
            {
                state: "Uttar Pradesh",
                city: "GHAZIABAD"
            },
            {
                state: "Uttar Pradesh",
                city: "GHAZIPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "MIRZAPUR"
            },
            {
                state: "Uttar Pradesh",
                city: "MUZAFFARNAGAR"
            },
        ];
        var country_phone_code = {
            AD: "+376",
            AE: "+971",
            AF: "+93",
            AG: "+1268",
            AI: "+1264",
            AL: "+355",
            AM: "+374",
            AN: "+599",
            AO: "+244",
            AQ: "+672",
            AR: "+54",
            AS: "+1684",
            AT: "+43",
            AU: "+61",
            AW: "+297",
            AZ: "+994",
            BA: "+387",
            BB: "+1246",
            BD: "+880",
            BE: "+32",
            BF: "+226",
            BG: "+359",
            BH: "+973",
            BI: "+257",
            BJ: "+229",
            BL: "+590",
            BM: "+1441",
            BN: "+673",
            BO: "+591",
            BR: "+55",
            BS: "+1242",
            BT: "+975",
            BW: "+267",
            BY: "+375",
            BZ: "+501",
            CA: "+1",
            CC: "+61",
            CD: "+243",
            CF: "+236",
            CG: "+242",
            CH: "+41",
            CI: "+225",
            CK: "+682",
            CL: "+56",
            CM: "+237",
            CN: "+86",
            CO: "+57",
            CR: "+506",
            CU: "+53",
            CV: "+238",
            CX: "+61",
            CY: "+357",
            CZ: "+420",
            DE: "+49",
            DJ: "+253",
            DK: "+45",
            DM: "+1767",
            DO: "+1809",
            DZ: "+213",
            EC: "+593",
            EE: "+372",
            EG: "+20",
            ER: "+291",
            ES: "+34",
            ET: "+251",
            FI: "+358",
            FJ: "+679",
            FK: "+500",
            FM: "+691",
            FO: "+298",
            FR: "+33",
            GA: "+241",
            GB: "+44",
            GD: "+1473",
            GE: "+995",
            GH: "+233",
            GI: "+350",
            GL: "+299",
            GM: "+220",
            GN: "+224",
            GQ: "+240",
            GR: "+30",
            GT: "+502",
            GU: "+1671",
            GW: "+245",
            GY: "+592",
            HK: "+852",
            HN: "+504",
            HR: "+385",
            HT: "+509",
            HU: "+36",
            ID: "+62",
            IE: "+353",
            IL: "+972",
            IM: "+44",
            IN: "+91",
            IQ: "+964",
            IR: "+98",
            IS: "+354",
            IT: "+39",
            JM: "+1876",
            JO: "+962",
            JP: "+81",
            KE: "+254",
            KG: "+996",
            KH: "+855",
            KI: "+686",
            KM: "+269",
            KN: "+1869",
            KP: "+850",
            KR: "+82",
            KW: "+965",
            KY: "+1345",
            KZ: "+7",
            LA: "+856",
            LB: "+961",
            LC: "+1758",
            LI: "+423",
            LK: "+94",
            LR: "+231",
            LS: "+266",
            LT: "+370",
            LU: "+352",
            LV: "+371",
            LY: "+218",
            MA: "+212",
            MC: "+377",
            MD: "+373",
            ME: "+382",
            MF: "+1599",
            MG: "+261",
            MH: "+692",
            MK: "+389",
            ML: "+223",
            MM: "+95",
            MN: "+976",
            MO: "+853",
            MP: "+1670",
            MR: "+222",
            MS: "+1664",
            MT: "+356",
            MU: "+230",
            MV: "+960",
            MW: "+265",
            MX: "+52",
            MY: "+60",
            MZ: "+258",
            NA: "+264",
            NC: "+687",
            NE: "+227",
            NG: "+234",
            NI: "+505",
            NL: "+31",
            NO: "+47",
            NP: "+977",
            NR: "+674",
            NU: "+683",
            NZ: "+64",
            OM: "+968",
            PA: "+507",
            PE: "+51",
            PF: "+689",
            PG: "+675",
            PH: "+63",
            PK: "+92",
            PL: "+48",
            PM: "+508",
            PN: "+870",
            PR: "+1",
            PT: "+351",
            PW: "+680",
            PY: "+595",
            QA: "+974",
            RO: "+40",
            RS: "+381",
            RU: "+7",
            RW: "+250",
            SA: "+966",
            SB: "+677",
            SC: "+248",
            SD: "+249",
            SE: "+46",
            SG: "+65",
            SH: "+290",
            SI: "+386",
            SK: "+421",
            SL: "+232",
            SM: "+378",
            SN: "+221",
            SO: "+252",
            SR: "+597",
            ST: "+239",
            SV: "+503",
            SY: "+963",
            SZ: "+268",
            TC: "+1649",
            TD: "+235",
            TG: "+228",
            TH: "+66",
            TJ: "+992",
            TK: "+690",
            TL: "+670",
            TM: "+993",
            TN: "+216",
            TO: "+676",
            TR: "+90",
            TT: "+1868",
            TV: "+688",
            TW: "+886",
            TZ: "+255",
            UA: "+380",
            UG: "+256",
            US: "+1",
            UY: "+598",
            UZ: "+998",
            VA: "+39",
            VC: "+1784",
            VE: "+58",
            VG: "+1284",
            VI: "+1340",
            VN: "+84",
            VU: "+678",
            WF: "+681",
            WS: "+685",
            XK: "+381",
            YE: "+967",
            YT: "+262",
            ZA: "+27",
            ZM: "+260",
            ZW: "+263",
        };
        $("#genericForm_2").submit(function(e) {
            e.preventDefault();
            var path = window.location.href;
            var segment = path.split("/");
            var langCountry = ['en', 'fr', 'ar', 'ru', 'bn', 'hi', 'ro', 'es', 'pt'];
            if (jQuery.inArray(segment[3], langCountry) !== -1) {
                var base_url_lp2 = "https://www.vaidam.com/" + segment[3] + "/lp";
            } else {
                var base_url_lp2 = "https://www.vaidam.com/lp";
            }
            var city = $("#city_2").val();
            city = city.toLowerCase().replace(/\b[a-z]/g, function(city) {
                return city.toUpperCase();
            });
            city = city.trim();
            var page_source = $("#page_source_2").val();
            var url = page_source.split("/");
            var citydata = cities.filter(function(citydata) {
                return citydata.city == city;
            });

            if (citydata[0] != undefined) {
                $("#state_2").val(citydata[0].state);
            } else {
                $("#state_2").val("");
            }

            $(".online-consult-button").attr("disabled", true);
            $(".online-consult-button").text("Submitting...");

            $.post("https://www.vaidam.com/lp/genericform", $("#genericForm_2").serialize(),
                function(data) {
                    console.log(data)
                    window.location.replace(base_url_lp2 + "/consult-online?form_step_1=done");
                });
            return false;
        });
        $("#ageblock_2").hide();
        $(".stategroup").hide();
        $("#country_2").change(function() {
            var curval = $(this).val();

            $("#country_phone_code_2").val(country_phone_code[curval]);
            if (curval != "IN") {
                $(".stategroup").hide();
                $("#state_2").attr("disabled", "true");
                $("#ageblock_2").hide();
            } else {
                $(".stategroup").show();
                $("#state_2").removeAttr("disabled");
                $("#ageblock_2").show();
            }
        });
        var page_source = localStorage.getItem("current_lp_url");
        $("#page_source_2").val(page_source);
        $("#lang1_2").val(page_source);

        /* Ajax Code For Set Cookie */
        var cc;
        var cn;
        var cpc;
        $.ajax({
            type: "GET",
            url: "https://www.vaidam.com/setCookie",
            success: function(res) {
                cc = res['countryCode'];
                cn = res['countryName'];
                cpc = res['countryPhnCode'];
            },
            async: false
        });

        /* Pre Select User Country */
        var countryCode = cc;
        var countryName = cn;
        var countryPhnCode = cpc;
        // console.log('countryCode: '+countryCode);
        // console.log('countryName: '+countryName);
        // console.log('countryPhnCode: '+countryPhnCode);

        if (countryCode != undefined || countryCode == "") {
            $("#country_2").val(countryCode);
            $("#country_phone_code_2").val(country_phone_code[countryCode]);
        }

        if (countryCode == "IN") {
            $("#ageblock_2").show();
            $(".stategroup").show();
        }

        if (countryCode != undefined && countryCode == "IN") {
            $(".vaidam-phone-number").hide();
        }
    </script>