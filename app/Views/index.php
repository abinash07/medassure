
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
                <img width="375" height="566" src="<?= base_url(''); ?>assets/img/slider-mob.webp" alt="Treatment With Unmatched Personal Care" class="img-fluid d-md-none" title="Treatment With Unmatched Personal Care"> 
            </figure>
            <div class="container upr">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-7 slider-info mb-4 mb-sm-5 mb-lg-0 text-center text-sm-start text-white">
                        <h1 class="text-white">Bringing Smiles to 10,000+ International Patients Since 2020 Since its inception in 2020</h1>
                        <p></p>
                        <!-- <p> Medassure Healthcare has assisted 10,000+ overseas patients with top-tier medical care in India. From diagnostics to advanced treatments, we at Medassure ensure seamless care and support, including hospital coordination, travel, and accommodation, offering a hassle-free healthcare journey.</p> -->
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
                                                            <a title="Terms of Use" href="<?= base_url(); ?>terms-use" target="_blank" class="terms_of_use">Terms of Use</a> and 
                                                            <a title="Privacy Policy" href="<?= base_url(); ?>privacy-policy" target="_blank" class="terms_of_use">Privacy Policy</a> of Medassure Health.
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

        <section>
            <div class="container">
                <div class="section-title mb-2 mb-sm-4 text-center">
                    <h2>Medical Destinations</h2>
                    <p class="mt-3">Our network spans the top medical tourism hubs worldwide - giving you the choice of cities, doctors and price.</p>
                </div>
                <div class="row row-cols-lg-6 row-cols-md-4 row-cols-sm-3 row-cols-2 justify-content-center g-3 mt-0 cntry-bxes">
                    <div class="col"> 
                        <button data-bs-toggle="modal" data-bs-target="#get_quote" class="country-bx d-flex align-items-center w-100 h-100">
                            <figure>
                                <img loading="lazy" src="<?= base_url(''); ?>assets/img/india-flag.webp"  width="24" height="24" alt="India Flag" class="img-fluid" title="Indian Flag image">
                            </figure>
                            <p>India</p>
                        </button>
                    </div>
                    <!-- <div class="col"> 
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
                    </div> -->
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
                            <div class="treatment_bx d-block d-sm-flex position-relative">
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
                    <a href="https://api.whatsapp.com/send?phone=919958278202&text=Hello,%20please%20contact%20me%20regarding%20https://www.medassure.co.in?source=wpchat_HPTL,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color wa_button_clicked">
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
                            <a href="<?= base_url(''); ?>hospitals/india" title="Top Hospital in India">
                                <h4>Delhi 
                                    <figure><img src="<?= base_url(''); ?>assets/img/india-flag.webp" alt="India Flag" width="24" height="24" class="img-fluid" title="India Flag image"></figure>
                                </h4>
                            </a>
                            <div class="row row-cols-2 g-2 g-lg-3">
                                <?php foreach($delhitophospital as $k9 => $v9){ ?>
                                    <div class="col"> 
                                        <a href="<?= base_url(''); ?>hospital/<?= $v9->hospital_slug; ?>" title="<?= $v9->hospital_name; ?>"> 
                                            <img loading="lazy" src="<?= base_url(); ?><?= $v9->primary_image; ?>" alt="<?= $v9->hospital_name; ?>" class="img-fluid" title="<?= $v9->hospital_name; ?>">
                                            <p><?= $v9->hospital_name; ?></p>
                                        </a> 
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row row-cols-1 g-3 g-xl-4">
                            <div class="col">
                                <div class="col-country"> 
                                    <a href="<?= base_url(''); ?>hospitals/turkey" title="Top Hospital in Gurugram">
                                        <h4>Gurugram 
                                            <figure>
                                            <img src="<?= base_url(''); ?>assets/img/india-flag.webp" alt="India Flag" width="24" height="24" class="img-fluid" title="India Flag image">
                                            </figure>
                                        </h4>
                                    </a>
                                    <div class="row g-3">
                                        <?php foreach($gurugramtophospital as $k9 => $v9){ ?>
                                            <div class="col"> 
                                                <a href="<?= base_url(''); ?>hospital/<?= $v9->hospital_slug; ?>" title="<?= $v9->hospital_name; ?>"> 
                                                    <img loading="lazy" src="<?= base_url(); ?><?= $v9->primary_image; ?>" alt="<?= $v9->hospital_name; ?>" class="img-fluid" title="<?= $v9->hospital_name; ?>">
                                                    <p><?= $v9->hospital_name; ?></p>
                                                </a> 
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-country"> 
                                    <a href="<?= base_url(''); ?>hospitals/thailand"
                                        title="Top Hospital in Thailand">
                                        <h4>Noida <figure><img src="<?= base_url(''); ?>assets/img/india-flag.webp" alt="India Flag" width="24" height="24" class="img-fluid" title="India Flag image"></figure></h4>
                                    </a>
                                    <div class="row g-3">
                                        <?php foreach($noidatophospital as $k9 => $v9){ ?>
                                            <div class="col"> 
                                                <a href="<?= base_url(''); ?>hospital/<?= $v9->hospital_slug; ?>" title="<?= $v9->hospital_name; ?>"> 
                                                    <img loading="lazy" src="<?= base_url(); ?><?= $v9->primary_image; ?>" alt="<?= $v9->hospital_name; ?>" class="img-fluid" title="<?= $v9->hospital_name; ?>">
                                                    <p><?= $v9->hospital_name; ?></p>
                                                </a> 
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row row-cols-1 g-3 g-xl-4">
                            <div class="col">
                                <div class="col-country"> 
                                    <a href="<?= base_url(''); ?>hospitals/united-arab-emirates"
                                        title="Top Hospital in UAE">
                                        <h4>Faridabad <figure><img src="<?= base_url(''); ?>assets/img/india-flag.webp" alt="India Flag" width="24" height="24" class="img-fluid" title="India Flag image"></figure></h4>
                                    </a>
                                    <div class="row g-3">
                                        <?php foreach($faridabadtophospital as $k9 => $v9){ ?>
                                            <div class="col"> 
                                                <a href="<?= base_url(''); ?>hospital/<?= $v9->hospital_slug; ?>" title="<?= $v9->hospital_name; ?>"> 
                                                    <img loading="lazy" src="<?= base_url(); ?><?= $v9->primary_image; ?>" alt="<?= $v9->hospital_name; ?>" class="img-fluid" title="<?= $v9->hospital_name; ?>">
                                                    <p><?= $v9->hospital_name; ?></p>
                                                </a> 
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-country"> 
                                    <a href="<?= base_url(''); ?>hospitals/germany" title="Top Hospital in Germany">
                                        <h4>Apollo proton chennai <figure><img src="<?= base_url(''); ?>assets/img/india-flag.webp" alt="India Flag" width="24" height="24" class="img-fluid" title="India Flag image"></figure></h4>
                                    </a>
                                    <div class="row g-3">
                                        <?php foreach($channaitophospital as $k9 => $v9){ ?>
                                            <div class="col"> 
                                                <a href="<?= base_url(''); ?>hospital/<?= $v9->hospital_slug; ?>" title="<?= $v9->hospital_name; ?>"> 
                                                    <img loading="lazy" src="<?= base_url(); ?><?= $v9->primary_image; ?>" alt="<?= $v9->hospital_name; ?>" class="img-fluid" title="<?= $v9->hospital_name; ?>">
                                                    <p><?= $v9->hospital_name; ?></p>
                                                </a> 
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-3 hospital-dec text-center">
                    <img loading="lazy" src="<?= base_url(''); ?>assets/img/hospital-ac.webp" alt="Hospitals with highest accreditation" width="244" height="25" class="img-fluid me-2" title="Hospitals with highest accreditation"> Hospitals with highest accreditation
                </p>
                <div class="mt-4 pt-3 text-center"> 
                    <a href="<?= base_url(); ?>consult-online" class="readmore-outline me-2" title="Contact-Hospital">Contact Hospital</a> 
                    <a href="https://api.whatsapp.com/send?phone=919958278202&text=Hello,%20please%20contact%20me%20regarding%20https://www.medassure.co.in?source=wpchat_HPHL,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color wa_button_clicked">
                        <img loading="lazy" src="<?= base_url(''); ?>assets/img/whatsaap-icon01.webp" alt="Chat with Us" width="30" height="29" class="img-fluid me-1" title="Chat with Us">Chat
                    </a>
                </div>
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
                                    <figure>
                                        <img loading="lazy" src="<?= base_url(''); ?>assets/img/noun-contact-us.svg" alt="Share your case details" width="56" height="56" class="img-fluid" title="Share your case details"><span class="d-lg-none">01</span>
                                    </figure>
                                    <h3>Contact us, share your case details and our team will get in touch with you.</h3>
                                </div>
                            </div>
                            <div class="col position-relative">
                                <div class="work_bx">
                                    <figure>
                                        <img loading="lazy" src="<?= base_url(''); ?>assets/img/Cost.svg" alt="Receive cost estimate in 48 Hours" width="56" height="56" class="img-fluid" title="Receive cost estimate in 48 Hours"><span class="d-lg-none">02</span>
                                    </figure>
                                    <h3>Receive medical opinion and cost estimate within 48 Hours</h3>
                                </div>
                            </div>
                            <div class="col position-relative">
                                <div class="work_bx">
                                    <figure>
                                        <img loading="lazy" src="<?= base_url(''); ?>assets/img/noun-booking-online.svg" alt="Get received by our team" width="56" height="56" class="img-fluid" title="Get received by our team"><span class="d-lg-none">03</span>
                                    </figure>
                                    <h3>Book flights and get received by our team at the airport</h3>
                                </div>
                            </div>
                            <div class="col position-relative">
                                <div class="work_bx">
                                    <figure>
                                        <img loading="lazy" src="<?= base_url(''); ?>assets/img/noun-follow-up.svg" alt="Get treated and fly back" width="56" height="56" class="img-fluid" title="Get treated and fly back"><span class="d-lg-none">04</span>
                                    </figure>
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
                        <a href="">
                            <div class="serv_bx d-flex d-sm-block d-md-flex align-items-start text-start text-sm-center text-md-start">
                                <figure>
                                    <img loading="lazy" src="<?= base_url(''); ?>assets/img/serv-icon07.webp" width="26" height="26" alt="Medical Opinion and Cost Estimations" class="iimg-fluid" title="Medical Opinion and Cost Estimations">
                                </figure>
                                <div class="info">
                                    <h3>Medical Opinion and Cost Estimations</h3>
                                    <p>Expert opinions and cost estimates.</p>
                                </div>
                            </div>
                        </a>
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
                <div class="testimonial-title align-items-center">
                    
                    <div class="section-title text-center">
                        <h2>Bringing Smiles to 10,000+ International Patients Since 2020.</h2>
                        <p class="my-3"></p>
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

            </div>
        </section>

        

        
        <section>
            <div class="container">
                <div class="section-title text-start mb-4">
                    <h2>Frequently Asked Questions (FAQ’s)</h2>
                </div>
                <div class="row accordion custom-accordion gy-3 gy-lg-0" id="faqaccord">
                    <?php foreach($faq as $k2 => $v2){ ?>
                        <div class="col-lg-6 mb-3">
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
                <div class="modal-body"> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
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
                                            <h2 class="modeofconsultation" style="text-align:center;">Help Us With Patient Details</h2>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="container block-container">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form class="form-horizontal form-customize" id="genericForm_2" autocomplete="off">
                                            
                                            <div class="form-group label-controls"> 
                                                <label class="control-label col-sm-12" for="name">Name<span class="red">*</span></label>
                                                <div class="col-sm-12"> 
                                                    <input type="text" class="form-control new-form-control" id="name_2" placeholder="Patient Name" name="name" required>
                                                </div>
                                            </div>
                                            <div class="form-group label-controls"> 
                                                <label class="control-label col-sm-12" for="email">Email<span class="red">*</span></label>
                                                <div class="col-sm-12">
                                                    <input type="email" class="form-control new-form-control" id="email_2" placeholder="Enter email" name="email" required>
                                                </div>
                                            </div>
                                            <div class="form-group label-controls"> 
                                                <label class="control-label col-sm-12" for="country">Country<span class="red">*</span></label>
                                                <div class="col-sm-12"> 
                                                    <select class="form-control new-form-control" id="country_2" placeholder="Select Country" name="country" required="true">
                                                        <option value="IN">India</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="form-group label-controls stategroup">
                                                <label class="control-label col-sm-12" for="state">City<span class="red">*</span></label>
                                                <input class="form-control new-form-control" type="text" id="other" name="other" placeholder="Enter City"> 
                                            </div>
                                            <div class="form-group label-controls"> 
                                                <label class="control-label col-sm-12" for="phone">Phone Number<span class="red">*</span></label>
                                                <div class="col-sm-12"> 
                                                    <input type="text" id="country_phone_code_2" name="country_phone_code" class="form-control new-form-control col-md-2" value="+91" readonly style="width: 15%; float: left;"> 
                                                    <input type="tel"class="form-control new-form-control col-md-10"  id="phone_number_2" placeholder="Your Phone number" name="phone_number" required style="width: 84%">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="medicalissue">Medical Issue <span class="red">*</span></label><br>
                                                    <textarea cols="5" rows="5" id="medical_problem_2" name="medical_problem" placeholder="Describe The Current Medical Problem .." style="height:100%; width:100%; resize: vertical;" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group label-controls" id="ageblock_2">
                                                <label class="control-label col-sm-12" for="email">Patient's Age or Date Of Birth<span class="red">*</span></label>
                                                <div class="col-sm-12"> 
                                                    <input type="text" class="form-control new-form-control" id="age_2" placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                                </div>
                                            </div>
                                            <div class="form-group label-controls">
                                                <div class="col-sm-12 text-center">
                                                    <p id="category_master_msg"></p>
                                                    <button type="submit" id="categoryBtn" name="submit" class="btn online-consult-button in_page_form">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>

                                        <div style="width: 100%;" class="form-group label-controls">
                                            <div class="col-sm-12 text-center"> 
                                                <span class="formtns-triger text-muted">By submitting the form I agree to the 
                                                    <a title="Terms of Use" href="<?= base_url(); ?>terms-use" target="_blank" class="terms_of_use">Terms of Use</a> and 
                                                    <a title="Privacy Policy" href="<?= base_url(); ?>privacy-policy" target="_blank" class="terms_of_use">Privacy Policy</a> of Vaidam Health.
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

    <div id="menu-bottom" class="bottom-menu"> 
        <a href="<?= base_url(''); ?>consult-online" class="readmore-outline me-2" title="Need-Help">Need Help?</a> 
        <a href="https://api.whatsapp.com/send?phone=919958278202&text=Hello,%20please%20contact%20me%20regarding%20https://www.medassure.co.in?source=wpchat_HPSB,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color wa_button_clicked">
            <img loading="lazy" src="<?= base_url(''); ?>assets/img/whatsaap-icon01.webp" alt="Chat with Us" width="30" height="29" class="img-fluid me-1" title="Chat with Us banner"> Chat
        </a> 
    </div>

    <div class="scroll-top-wrapper transition"> 
        <span class="scroll-top-inner transition"> 
            <span style='font-size:36px; color:#fff;'>&#8593;</span> 
        </span> 
    </div>
    
<script>
    $('#genericForm_2').submit(function(e){
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
                    $('#genericForm_2').trigger('reset');
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