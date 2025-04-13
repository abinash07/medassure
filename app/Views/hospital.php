


    <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/css/select2.css"/>

    <style>
        @media only screen and (max-width: 767px) {
            .bottom-menu.show {
                display: none;
            }
        }

        @font-face {
            font-family: 'Pacifico';
            font-style: normal;
            font-weight: 400;
            src: local('Pacifico Regular'),local(MyriadPro-Regular),url(https://www.vaidam.com/assets/fonts/MyriadPro-Regular.woff2) format("woff2");
            font-display: swap
        }

        @font-face {
            font-family: 'Pacifico';
            font-style: normal;
            font-weight: 600;
            src: local('Pacifico Regular'),local(MyriadPro-Semibold),url(https://www.vaidam.com/assets/fonts/MyriadPro-Semibold.woff2) format("woff2");
            font-display: swap
        }

        .hero-bg {
            background-color: #dee8f7;
        }

        .sticy-filter-bar .d-md-block img {
            display: none;
        }

        img {
            max-width: 100%;
            height: auto
        }

        a {
            color: #005897
        }

        .link-underline {
            text-decoration-color: #005897!important;
            text-decoration: underline
        }

        .btn-wp {
            background-color: #25cb68!important;
            color: #fff
        }

        .btn-wp:hover {
            background-color: #04b94c!important;
            color: #fff
        }

        .department_filter, .city_filter, .country_filter, .hospital_filter {
            border: 1px solid #c9c9c9!important;
            height: 44px
        }

        .search-btn {
            height: 46px
        }

        .country_filter,.city_filter {
            width: 20%
        }

        .department_filter,.hospital_filter {
            width: 30%
        }

        #treatment_filter.select2 {
            display: none;
        }

        #treatment_filter.select2 + .select2-container {
            display: none;
        }

        .short-filt select {
            height: 36px;
            border-right: 16px solid transparent
        }

        .chkd-stars-list {
            list-style-type: none;
            padding: 0;
            line-height: 1.4
        }

        .chkd-stars-list li {
            display: inline
        }

        .readmorebox.collapse:not(.show) {
            height: 44px!important;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical
        }

        .dr-card-btn {
            width: 100%
        }

        small.theam-color {
            font-size: .8em
        }

        li.breadcrumb-item {
            font-size: 13px
        }

        .heding-icon {
            width: 60px;
            height: 60px;
            padding: 10px;
            line-height: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .list-content {
            padding-left: 20px;
            width: calc(100% - 60px);
        }

        @media screen and (min-width: 530px) {
            img.dr-img-list {
                width:136px
            }
        }

        @media screen and (min-width: 1480px) {
            .readmorebox.collapse:not(.show) {
                height:54px!important
            }
        }

        .readmore-btn {
            display: block;
            text-align: right;
            color: #005897;
            cursor: pointer
        }

        .readmorebox.collapsing {
            min-height: 52px!important
        }

        .readmore-btn.collapsed:after {
            content: '+ Read More'
        }

        .readmore-btn:not(.collapsed):after {
            content: '- Read Less'
        }

        .show-more-doctor-div button {
            line-height: 2;
            box-shadow: 0 0 15px 0 #9E9E9E;
            border: 1px solid #005897
        }

        .accordion-button:focus {
            box-shadow: none
        }

        .accordion-button:not(.collapsed) {
            background-color: #005897;
            color: #fff
        }

        .faqs .accordion-item {
            margin-bottom: 15px
        }

        li.breadcrumb-item {
            font-size: 13px
        }

        @media screen and (min-width: 768px) {
            .dr-card-lt {
                width:calc(100% - 190px);
                padding-right: 15px
            }

            .dr-card-rt {
                width: 190px
            }

            .flip-img {
                -moz-transform: scaleX(-1);
                -o-transform: scaleX(-1);
                -webkit-transform: scaleX(-1);
                transform: scaleX(-1);
                filter: FlipH;
                -ms-filter: "FlipH";
            }

            .patern-row img {
                width: 240px;
                height: 125px;
            }
        }

        @media screen and (max-width: 768px) {
            .department_filter, .city_filter, .country_filter, .hospital_filter {
                width:100%;
                border-radius: 5px!important
            }

            .dr-card-rt {
                width: 100%
            }

            li.breadcrumb-item {
                font-size: 12px
            }
        }

        .casestudies-box img {
            width: 100px;
            height: 66px
        }

        .casestudies-box {
            background-color: #005897;
            color: #fff
        }

        .casestudies-box.collapsed {
            background-color: #c1e4f9;
            color: #5f5f5f
        }

        @media screen and (min-width: 991px) {
            .case-studies .accordion-item {
                height:120px;
                overflow: hidden
            }

            .casestudies-box {
                width: 420px;
                margin-right: 15px
            }

            .case-studies .accordion-collapse.collapse.show {
                width: calc(100% - 435px);
                position: absolute;
                top: 0;
                right: 0
            }

            .case-studies .accordion-item {
                border: none
            }

            div#accordionCasestudies {
                height: auto;
                overflow-y: auto
            }

            .sticy-filter-bar {
                position: fixed;
                top: 0;
                z-index: 1002;
                width: 100%;
                background-color: #005897 !important;
                padding: 0 !important
            }

            .sticy-filter-bar form.search-new-search-box.row.my-3.align-items-center {
                padding: 0px 0;
            }
        }

        @media screen and (max-width: 991px) {
            .case-studies .accordion-item {
                border:none
            }
        }

        .related-link-box ul {
            padding-left: 0
        }

        .related-link-box ul li {
            display: inline-block;
            position: relative;
            padding-left: 12px;
            margin-right: 15px;
            margin-bottom: 10px
        }

        .related-link-box ul li a {
            color: #666
        }

        .related-link-box ul li:after {
            content: '';
            height: 6px;
            width: 6px;
            background: #464646;
            position: absolute;
            left: 0;
            top: 8px;
            border-radius: 20px
        }

        .form-col-box .form-label,label {
            display: none!important
        }

        .position-sticky {
            position: sticky!important;
            top: 90px!important;
            right: 0!important;
            max-width: 460px;
            width: 100%
        }

        @media screen and (min-width: 768px) {
            .body-form-row .col-12.mb-3 {
                width:50%
            }
        }

        .online-consult-button {
            max-width: 320px;
            width: 100%;
            margin: 0 auto
        }

        .body-form-row .col-12.mb-3 {
            margin-bottom: 1.5rem!important
        }

        .body-form-row .form-label {
            margin-bottom: 3px;
            display: none
        }

        form.search-new-search-box {
            background: #005897;
            padding: 15px 0;
            border-radius: 10px
        }

        .select2-container .select2-selection--single {
            height: 44px!important;
            padding: 8px 0
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #f6f6f6!important;
            border-radius: 0!important
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none
        }

        .country_filter+.select2-container--default .select2-selection--single .select2-selection__rendered,.city_filter+.select2-container--default .select2-selection--single .select2-selection__rendered {
            background-image: url(<?= base_url(''); ?>assets/img/location-red.webp);
            background-repeat: no-repeat,repeat;
            background-position: right 12px center
        }

        .department_filter+.select2-container--default .select2-selection--single .select2-selection__rendered,.hospital_filter+.select2-container--default .select2-selection--single .select2-selection__rendered,.tag_filter+.select2-container--default .select2-selection--single .select2-selection__rendered {
            background-image: url(<?= base_url(''); ?>assets/img/dr_list_v1/images/arrow-down.webp);
            background-repeat: no-repeat,repeat;
            background-position: right 12px center
        }

        .country_filter + .select2-container--default .select2-selection--single {
            border-radius: 8px 0 0 8px!important
        }

        .hospital_filter + .select2-container--default .select2-selection--single {
            border-radius: 0 8px 8px 0!important
        }

        .dr-card-btn .btn {
            height: 44px!important;
            line-height: 2
        }

        .dr-p-img {
            width: 100%;
            max-width: 132px
        }

        .close-mob-filter-text {
            margin-top: 20px;
            border: 1px solid #ccc;
            width: 91%;
            position: absolute;
            bottom: -48px;
            right: 15px;
            border-radius: 8px;
            padding: 11px 32px;
            line-height: 1;
            background: #eee;
            text-align: center
        }

        .close-mob-filter {
            display: none
        }

        .autocomplete.stategroup {
            position: relative
        }

        #cityautocomplete-list {
            max-height: 251px;
            overflow-y: auto;
            padding: 10px;
            position: absolute;
            z-index: 100;
            width: 95%;
            background: #fff;
            border-radius: 10px !important;
            border: 1px solid #ccc
        }

        /* .select2-search--dropdown {display: none;} */
        @media screen and (max-width: 768px) {
            .department_filter + .select2-container--default .select2-selection--single,.hospital_filter + .select2-container--default .select2-selection--single,.select2-container--default .select2-selection--single {
                border-radius:8px!important
            }
        }

        @media screen and (min-width: 768px) {
            .fillter-on-mobile,.close-button-box {
                display:none
            }
        }

        @media screen and (max-width: 768px) {
            .fillter-on-mobile button {
                border:unset;
                padding: 6px;
                width: 100%
            }

            button.close-mob-filter {
                border: unset;
                background: unset;
                padding: 6px;
                width: 100%
            }

            .call-fillter-on-mob {
                display: block;
                position: fixed;
                height: 100%;
                width: 100%;
                z-index: 1001;
                top: 0;
                background-color: #005897!important
            }

            .filter-section .close-mob-filter {
                display: none
            }

            .call-fillter-on-mob .close-mob-filter {
                display: flex
            }

            span.select2.select2-container.select2-container--default {
                width: 100%!important
            }

            .close-button-box {
                display: block
            }
        }

        @media screen and (max-width: 768px) {
            .nav-search-section.mob_layout {
                width: 100%;
            }
        }

        span.countryfilterloader, span.cityfilterloader, span.departmentfilterloader, span.treatmentfilterloader, span.hospitalfilterloader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-right: 4px solid #3498db;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin-right: 10px;
            display: none;
            position: absolute;
            top: 10px;
            right: 18px;
            animation-name: filterspin;
            animation-duration: 1200ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes filterspin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>

    <style>
        .hospital_filter + .select2-container--default .select2-selection--single,.department_filter1 + .select2-container--default .select2-selection--single {
            border-radius: 0 8px 8px 0!important
        }

        .country_filter, .city_filter {
            width: 30%;
        }

        .department_filter1 {
            border: 1px solid #c9c9c9 !important;
            height: 44px;
        }

        @media screen and (min-width: 768px) {
            .department_filter1 {
                width: 40%!important;
            }
        }
    </style>

    <!-- Breadcrumb section -->
    <section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item">
                                <a class="text-secondary" href="<?= base_url(''); ?>" title="Home">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="text-secondary" title="Hospitals">Hospitals</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="list-search hero-bg pt-5 pt-md-0">
        <div class="container-fluid patern-row justify-content-between d-none d-md-flex px-0">
            <img class="hero-patern-l" src="<?= base_url(''); ?>assets/img/hero-bg-patern.webp" width="240" height="125" title="bg-patern" alt="bg-patern">
            <img class="hero-patern-r flip-img" src="<?= base_url(''); ?>assets/img/hero-bg-patern.webp" width="240" height="125" title="bg-patern" alt="bg-patern">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-11 mx-auto">
                    <h1 class="text-center">Find Your Ideal Hospital</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="filter-section hero-bg pb-5 pb-md-0">
        <div class="container">
            <div class="row">
                <div class="close-button-box bg-theam-2">
                    <button class="close-mob-filter align-content-center align-items-center gap-3 py-2" id="CloseMobFilter">
                        <img src="<?= base_url(''); ?>assets/img/go-to-back-arrow.svg" width="28" height="28" title="Close fillter" alt="Close fillter">
                        <p class="mb-0">Go to back</p>
                    </button>
                </div>
                <div class="col-10 mx-auto">
                    <form class="search-new-search-box row mt-3 align-items-center position-relative">
                        <div class="search-fieald d-flex flex-wrap gap-2 gap-md-0 col-lg-10 col-md-9">
                            <select class="country_filter select2" id="country_filter">
                                <option value="96">India</option>
                            </select>
                            <select class="city_filter select2" id="city_filter">
                                <option value="">All Cities</option>
                                <?php foreach($city as $k2 => $v2) { ?>
                                    <option value="<?= $v2['id']; ?>"><?= $v2['name']; ?></option>
                                <?php } ?>
                            </select>
                            <select class="department_filter1 select2" id="department_filter1">
                                <option value="">All Departments</option>
                                <?php foreach($department as $k3 => $v3) { ?>
                                    <option value="<?= $v3['id']; ?>"><?= $v3['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3 mt-3 mt-md-0">
                            <div class="d-grid">
                                <button type="button" class="btn btn-primary search-btn btn-danger border-0" id="search_btn" onclick="applyFilterOnHospList();">
                                    <div id="loader" class="loader" style="display: none;"></div>
                                    <span id="search_text">Search</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <span class="close-mob-filter close-mob-filter-text fw-bolder fs-5 text-danger justify-content-center">Close</span>
                        </div>
                        <div class="mt-2" style="display: none; color: white " id="country_error">
                            <span>Please select a country</span>
                        </div>
                    </form>
                </div>
                <div class="col-12 text-center d-none d-md-block mt-4">
                    <img src="https://www.vaidam.com/assets/anchor/images/hospital-basepage-bg.webp" width="198" height="124" title="Hero bg-2" alt="hero bg-2">
                </div>
            </div>
        </div>
    </section>

    <section class="related-link-section">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 related-link-box">
                    <h2 class="mb-4">Top Hospitals Across India</h2>
                    <div class="p-4 rounded-4 border bg-light">
                        <h3>Top Hospitals in India</h3>
                        <ul>
                            <li>
                                <a href="<?= base_url(''); ?>hospitals/delhi" title="Delhi">Delhi</a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>hospitals/gurugram" title="Gurugram">Gurugram</a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>hospitals/noida" title="Noida">Noida</a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>hospitals/faridabad" title="Faridabad">Faridabad</a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>hospitals/apollo-proton-chennai" title="Apollo proton chennai">Apollo proton chennai</a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>hospitals/fortis-wb-west-bengal" title="Fortis WB West Bengal">Fortis WB West Bengal</a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>hospitals/max-nanawati-mumbai" title="Max Nanawati Mumbai">Max Nanawati Mumbai</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main pb-4">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-8 mb-0" id="hospital_list">
                    <h2 class="mb-4">See How Vaidam Helps You Choose the Best Hospitals Effortlessly</h2>
                    <div class="list-row">
                        <div class="col-12 d-flex my-4 my-md-5">
                            <div class="heding-icon bg-theam-2 rounded-circle">
                                <img class="hicon-img" src="https://www.vaidam.com/assets/anchor/images/Comprehensive-List-of-Hospitals.webp" width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                            </div>
                            <div class="list-content">
                                <h3>Comprehensive List of Hospitals</h3>
                                <p>Wide range of hospitals from multiple countries for you to choose as per your need</p>
                            </div>
                        </div>
                        <div class="col-12 d-flex my-4 my-md-5">
                            <div class="heding-icon bg-theam-2 rounded-circle">
                                <img class="hicon-img" src="https://www.vaidam.com/assets/anchor/images/Expert-Guidance-and-Support.webp" width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                            </div>
                            <div class="list-content">
                                <h3>Expert Guidance and Support</h3>
                                <p>Access to a team of medical coordinators who assist you throughout the process, from initial consultation to post-treatment follow-up</p>
                            </div>
                        </div>
                        <div class="col-12 d-flex my-4 my-md-5">
                            <div class="heding-icon bg-theam-2 rounded-circle">
                                <img class="hicon-img" src="https://www.vaidam.com/assets/anchor/images/Language-Support.webp" width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                            </div>
                            <div class="list-content">
                                <h3>Language Support</h3>
                                <p>Multilingual support to help bridge communication gaps</p>
                            </div>
                        </div>
                        <div class="col-12 d-flex my-4 my-md-5">
                            <div class="heding-icon bg-theam-2 rounded-circle">
                                <img class="hicon-img" src="https://www.vaidam.com/assets/anchor/images/Patient-Reviews-and-Ratings.webp" width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                            </div>
                            <div class="list-content">
                                <h3>Patient Reviews and Ratings</h3>
                                <p>Real feedback from past patients, enabling you to make decisions based on the experiences of others</p>
                            </div>
                        </div>
                        <div class="col-12 d-flex my-4 my-md-5">
                            <div class="heding-icon bg-theam-2 rounded-circle">
                                <img class="hicon-img" src="https://www.vaidam.com/assets/anchor/images/Transparency-in-Pricing.webp" width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                            </div>
                            <div class="list-content">
                                <h3>Transparency in Pricing</h3>
                                <p>Detailed information on treatment costs, helping you make informed decisions without hidden fees or surprises</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 position-relative">
                    <!-- Right Side Form -->
                    <div class="form-col-box bg-theam-2 rounded-3 position-sticky">
                        <!-- <div class="ms_v_cta_heading d-flex mb-4"> <span class="d-flex flex-column"><strong class="fs-4">Get FREE Evaluation</strong><small>Treatment plan and quote within 2 days</small></span> </div> -->
                        <div id="custom-form">
                            <!-- Form Between List -->
                            <div class="row body-form-row pt-0 pb-4">
                                <div class="col-12">
                                    <div class="form-col-box bg-theam-2 p-4 rounded-3">
                                        <div class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4">
                                            <span class="d-flex justify-content-center flex-column lh-base">
                                                <strong class="fs-4">Need Help </strong>
                                            </span>
                                        </div>
                                        <div id="custom-form-doctor-card col-12">
                                            <form class="row" id="secondFormInList" autocomplete="off">
                                                <div class="col-12 mb-3">
                                                    <label for="inputName" class="form-label">Name </label>
                                                    <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required="">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label for="inputEmail" class="form-label">Email </label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label for="inputState" class="form-label">Country </label>
                                                    <select class="form-select country" id="country-sfil" placeholder="Select Country" name="country" required="true">
                                                        <option value="IN">India</option>
                                                    </select>
                                                </div>
                                                <!-- <div class="col-12 mb-3 autocomplete stategroup-sfil">
                                                    <label for="inputCity" class="form-label">City </label>
                                                    <input type="text" class="form-control" name="other" id="other" placeholder="Enter city">
                                                </div> -->
                                                <div class="col-12 mb-3">
                                                    <label class="control-label col-sm-12" for="state">City<span class="red">*</span></label>
                                                    <input class="form-control new-form-control" type="text" id="other" name="other" placeholder="Enter City"> 
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label for="inputPhone" class="form-label">Phone Number </label>
                                                    <div class="input-group">
                                                        <input class="input-group-text country_phone_code" id="country_phone_code-sfil" name="country_phone_code" placeholder="Code" value="+91" style="width: 65px;">
                                                        <input type="text" class="form-control" id="phone_number" name="phone_number"  placeholder="Enter Phone no.">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3" id="ageblock-sfil">
                                                    <label for="inputAddress2" class="form-label">Patient's Age or Date Of Birth </label>
                                                    <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label for="medicalIssue" class="form-label">Medical Issue </label>
                                                    <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea>
                                                </div>
                                                
                                                <div class="col-12 mt-2">
                                                    <div class="d-grid">
                                                        <p id="category_master_msg"></p>
                                                        <button type="submit" id="categoryBtn" name="submit" class="btn btn-danger online-consult-button-sfil submit-form-btn in_page_form">Contact Us Now </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4">
                                                By submitting the form I agree to the 
                                                <a title="Terms of Use" href="<?= base_url(); ?>terms-use" target="_blank" class="terms_of_use">Terms of Use </a> and 
                                                <a title="Privacy Policy" href="<?= base_url(); ?>privacy-policy" target="_blank" class="terms_of_use">Privacy Policy </a> of Vaidam Health. 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                            @media screen and (min-width: 768px) {
                                .body-form-row .col-12.mb-3 {
                                    width: 100%;
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-bottom bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-4">Frequently Asked Questions (FAQ’s)</h2>
                </div>
            </div>
            <div class="row accordion faq custom-accordion" id="accordionFacilities">
                <?php foreach($faq as $k2 => $v2){ ?>
                    <div class="col-lg-6 faqs">
                        <div class="accordion-item rounded-2 mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $v2->id; ?>" aria-expanded="false" aria-controls="collapseOne"><?= $v2->title; ?></button>
                            </h3>
                            <div id="collapse<?= $v2->id; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                                <div class="accordion-body">
                                    <?= $v2->content; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <script type="text/javascript">
        var city = '';
        var get_city = '<?= $citymenu; ?>';
        if(get_city != ''){
            city = get_city;
            applyFilterOnHospList();
        }

        function applyFilterOnHospList(){
            $('#hospital_list').html('');
            const end_point = '<?= base_url(''); ?>';
            let department = $('#department_filter1 option:selected').val() || '';
            let country = $('#country_filter option:selected').val() || '';
            city = $('#city_filter option:selected').val() || '';
            if(city == '' ){
                if(get_city != ''){
                    if(get_city == 'delhi'){city = 15}
                    if(get_city == 'gurugram'){city = 6}
                    if(get_city == 'noida'){city = 16}
                    if(get_city == 'faridabad'){city = 5}
                    if(get_city == 'apollo-proton-chennai'){city = 4}
                    if(get_city == 'fortis-wb-west-bengal'){city = 11}
                    if(get_city == 'max-nanawati-mumbai'){city = 13}                    
                }
            }

            var errorMessage = document.getElementById("country_error");
            let search = document.getElementById('search_btn');
            let loader = document.getElementById('loader');

            search.querySelector("#search_text").textContent = "Searching..."; 
            loader.style.display = "inline";

            let drListSearchFilter = {
                department: department,
                country: country,
                city: city,
            };
            $.ajax({
                url: end_point+'gethospital',
                type: 'POST',
                data: drListSearchFilter,
                dataType: 'json',
                success: function(data) {
                    $.each(data.result, function(key, val) {
                        $('#hospital_list').append(
                            '<div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">'+
                                '<div class="dr-card-lt">'+
                                    '<div class="card drcard mb-3 mb-md-0 border-0">'+
                                        '<div class="row g-0 text-body-secondary">'+
                                            '<div class="col-md-3">'+
                                                '<img alt="'+val.name+'" title="'+val.name+'" src="<?= base_url(); ?>'+val.primary_image+'" width="332" height="190" class="hospital-img-list shadow-sm rounded-3">'+
                                            '</div>'+
                                            '<div class="col-md-9 py-3 py-md-0">'+
                                                '<div class="card-body px-0 px-0 px-md-3 mt-md-0 py-0 lh-md">'+
                                                    '<div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">'+
                                                        '<h2 class="card-title fs-4 fw-semibold mb-0 lh-1"><a class="text-dark" href="<?php echo base_url(); ?>hospital/'+val.slug+'" title="'+val.name+'">'+val.name+'</a></h2>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="dr-card-rt d-flex flex-wrap gap-3 align-items-center">'+
                                    '<div class="features-box">'+
                                        '<p class="d-flex flex-row gap-2 align-items-flex-start lh-1"> <img src="https://www.vaidam.com/assets/img/Icons/Established-grey.webp" title="Established" alt="Established in: 1996" width="14" height="14"> <span>Established in: '+val.established+'</span> </p>'+
                                        '<p class="d-flex flex-row gap-2 align-items-flex-start lh-1"> <img src="https://www.vaidam.com/assets/img/Icons/Doctors-greay.webp" title="Doctors" alt="Doctors: 150" width="19" height="14"> <span>Number of Beds: '+val.number_of_bed+'</span> </p>'+
                                        '<p class="d-flex flex-row gap-2 align-items-flex-start lh-1"> <img src="https://www.vaidam.com/assets/img/Icons/beds-grey.webp" title="Specialty" alt="Specialty: Multi Specialty" width="16" height="14"> <span>'+val.specialty+'</span> </p>'+
                                        '<p class="d-flex flex-row gap-2 align-items-flex-start lh-1"> <img src="https://www.vaidam.com/assets/img/Icons/Location-grey.webp" title="Location" alt="Location: India , '+val.city+'" style="height: 14px; width: 14px;"> <span>Location: India, '+val.city+'</span> </p>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="d-flex flex-wrap flex-column-reverse flex-md-row">'+
                                    '<div class="dr-card-lt">'+
                                        '<div class="mt-3">'+val.about+'...</div>'+
                                    '</div>'+
                                    '<div class="dr-card-rt mt-2">'+
                                        '<div class="card-btn d-grid gap-3">'+
                                            '<a style="display: block;" btn-type="Book Apointment Button on List Element" page-type="Hospital List Page" doc-depart="" doc-speciality="" class="btn px-xm-1 px-sm-3 btn-danger geo-in" href="<?= base_url(); ?>consult-online" title="Book Apointment" data-link="<?= base_url(); ?>consult-online">Book Apointment</a>'+
                                            '<a style="display: block;" class="btn px-xm-1 px-sm-3 btn-wp wa_button_clicked" target="_blank" href="https://api.whatsapp.com/send?phone=919958278202&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.medassure.co.in/hospital/'+val.slug+'?source=wpchat_HLLC%20,%20Thank%20you!" title="Whatsapp Chat">WhatsApp Us</a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                        );
                    });
                },
                complete: function () {
                    loader.style.display = "none"; 
                    search.querySelector("#search_text").textContent = "Search";
                },
                error: function(xhr, status, error) {
                    console.log('Error: ', error);
                }
            });
        }
        
    </script>

<style>
    /* Styling for the search button */
    #search_btn {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        animation: spin 1s linear infinite;
        margin-right: 10px;
        display: none;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<style>
    .footer-stic-btns {
        display: none
    }

    @media screen and (max-width: 768px) {
        #footerCta, #floating-whatsapp {
            display: none
        }

        .footer-stic-btns {
            display: block;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
            border-top: 1px solid #fefefe;
        }

        .sticky-send-enquiry-smallscreen,.whatsapp-btn-mob {
            height: 44px;
            width: 50%;
            display: flex;
            float: left;
            gap: 5px;
            font-size: .95em;
            align-items: center;
            justify-content: center
        }

        .whatsapp-btn-mob {
            background-color: #40c351
        }

        a.whatsapp-btn-mob span {
            color: #fff
        }

        a.whatsapp-btn-mob img {
            width: 26px;
            height: 26px
        }

        .whatsapp-btn-mob span {
            color: #fff
        }
    }

    #search_btn {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        animation: spin 1s linear infinite;
        margin-right: 10px;
        display: none;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
<!-- Sticky buttton for mobile view End -->



<script type="text/javascript" defer src="<?= base_url(''); ?>assets/js/select2.js"></script>

<script type="text/javascript">
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

            // Patient review show more
            $('.p-review-row-card').slice(2).hide();
            $('#show-more-reviews').on('click', function(){
                $('.p-review-row-card:hidden').slice(0, 2).slideDown();
                if ($('.p-review-row-card:hidden').length === 0) {
                    $(this).hide(); 
                }
            });
            // select2 initialization
            $('.select2').select2();
        });
        //document.getElementById("year").innerHTML = new Date().getFullYear();
        // filter sticky on desktop
        $(window).scroll(function(){
            if ($(this).scrollTop() > 258) {
                $('.filter-section').addClass('sticy-filter-bar');
            } else {
                $('.filter-section').removeClass('sticy-filter-bar');
            }
        }); 
</script>


<script>
    $('#secondFormInList').submit(function(e){
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
                    $('#secondFormInList').trigger('reset');
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