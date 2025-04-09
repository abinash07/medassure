


        <link rel="stylesheet" type="text/css" href="https://www.vaidam.com/assets/dr_list_v1/css/select2.css"/>

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
                background-image: url(https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp);
                background-repeat: no-repeat,repeat;
                background-position: right 12px center
            }

            .department_filter+.select2-container--default .select2-selection--single .select2-selection__rendered,.hospital_filter+.select2-container--default .select2-selection--single .select2-selection__rendered,.tag_filter+.select2-container--default .select2-selection--single .select2-selection__rendered {
                background-image: url(https://www.vaidam.com/assets/dr_list_v1/images/arrow-down.webp);
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
                                    <a class="text-secondary" href="https://www.vaidam.com" title="Home">Home</a>
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
                <!-- <img class="hero-patern-l" src="https://www.vaidam.com/assets/anchor/images/hero-bg-patern.webp" width="240" height="125" alt="bg-patern"> -->
                <img class="hero-patern-l" src="https://www.vaidam.com/assets/anchor/images/hero-bg-patern.webp" width="240" height="125" title="bg-patern" alt="bg-patern">
                <!-- <img class="hero-patern-r flip-img" src="https://www.vaidam.com/assets/anchor/images/hero-bg-patern.webp" width="240" height="125" alt="bg-patern"> -->
                <img class="hero-patern-r flip-img" src="https://www.vaidam.com/assets/anchor/images/hero-bg-patern.webp" width="240" height="125" title="bg-patern" alt="bg-patern">
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
                            <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/go-to-back-arrow.svg" width="28" height="28" title="Close fillter" alt="Close fillter">
                            <p class="mb-0">Go to back</p>
                        </button>
                    </div>
                    <div class="col-10 mx-auto">
                        <form class="search-new-search-box row mt-3 align-items-center position-relative">
                            <div class="search-fieald d-flex flex-wrap gap-2 gap-md-0 col-lg-10 col-md-9">
                                <select class="country_filter select2" id="country_filter" onChange="if (!window.__cfRLUnblockHandlers) return false; getCitiesFilter(this.options[this.selectedIndex].value);" data-cf-modified-897b962918d967e17e613750-="">
                                    <option value="">Select Country</option>
                                    <option value="IN">India</option>
                                    <option value="TR">Turkey</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="DE">Germany</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="KR">South Korea</option>
                                    <option value="EG">Egypt</option>
                                    <option value="ES">Spain</option>
                                    <option value="FR">France</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="TH">Thailand</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="SG">Singapore</option>
                                    <option value="IL">Israel</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="AT">Austria</option>
                                    <option value="PL">Poland</option>
                                    <option value="CH">Switzerland</option>
                                </select>
                                <select class="city_filter select2" id="city_filter">
                                    <option value="">All Cities</option>
                                </select>
                                <select class="department_filter1 select2" id="department_filter1">
                                    <option value="">All Departments</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-3 mt-3 mt-md-0">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary search-btn btn-danger border-0" id="search_btn" onclick="if (!window.__cfRLUnblockHandlers) return false; applyFilterOnHospList();" data-cf-modified-897b962918d967e17e613750-="">
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
                        <h2 class="mb-4">Top Hospitals Across India, Turkey, and Thailand</h2>
                        <div class="p-4 rounded-4 border bg-light">
                            <h3>Top Hospitals in India</h3>
                            <ul>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/medanta-medicity-gurgaon" title="Medanta - The Medicity">Medanta - The Medicity</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi" title="Indraprastha Apollo Hospital">Indraprastha Apollo Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/fortis-escorts-heart-institute-new-delhi" title="Fortis Escorts Heart Institute">Fortis Escorts Heart Institute</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/artemis-hospital-gurgaon" title="Artemis Hospital">Artemis Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/max-super-speciality-hospital-saket-new-delhi" title="Max Super Speciality Hospital">Max Super Speciality Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/fortis-memorial-research-institute-gurgaon" title="Fortis Memorial Research Institute">Fortis Memorial Research Institute</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/manipal-hospital-bangalore" title="Manipal Hospital (Old Airport Road)">Manipal Hospital (Old Airport Road)</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/apollo-hospitals-greams-road-chennai" title="Apollo Hospitals, Greams Road">Apollo Hospitals, Greams Road</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/kokilaben-dhirubhai-ambani-hospital-mumbai" title="Kokilaben Dhirubhai Ambani Hospital">Kokilaben Dhirubhai Ambani Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/apollo-hospitals-hyderabad" title="Apollo Hospitals, Jubilee Hills Hyderabad">Apollo Hospitals, Jubilee Hills Hyderabad</a>
                                </li>
                            </ul>
                            <h3>Top Hospitals in Turkey</h3>
                            <ul>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/acibadem-hospitals-group-turkey" title="Acibadem Hospitals Group">Acibadem Hospitals Group</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/hisar-hospital-intercontinental-istanbul" title="Hisar Hospital Intercontinental">Hisar Hospital Intercontinental</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/medicana-international-istanbul" title="Medicana International Istanbul">Medicana International Istanbul</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/medical-park-group-istanbul" title="Medical Park Group">Medical Park Group</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/florence-nightingale-hospital-istanbul" title="Florence Nightingale Hospital">Florence Nightingale Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/memorial-hospitals-group-istanbul" title="Memorial Hospitals Group">Memorial Hospitals Group</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/american-hospital-istanbul" title="American Hospital">American Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/estetik-international-heath-group-istanbul" title="Estetik International Health Group">Estetik International Health Group</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/anadolu-medical-center-kocaeli" title="Anadolu Medical Center">Anadolu Medical Center</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/liv-hospital-istanbul" title="LIV Hospital">LIV Hospital</a>
                                </li>
                            </ul>
                            <h3>Top Hospitals in Thailand</h3>
                            <ul>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/bangkok-hospital" title="Bangkok Hospital">Bangkok Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/bumrungrad-international-hospital-bangkok" title="Bumrungrad International Hospital">Bumrungrad International Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/samitivej-sukhumvit-hospital-bangkok" title="Samitivej Sukhumvit Hospital">Samitivej Sukhumvit Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/yanhee-hospital-bangkok" title="Yanhee Hospital">Yanhee Hospital</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/vejthani-hospital-bangkok-thailand" title="Vejthani Hospital Bangkok">Vejthani Hospital Bangkok</a>
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
                    <div class="col-lg-8 mb-0">
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
                                                <img class="mr-2" loading="lazy" src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg" width="50" height="50" alt="Know more" title="Know more">
                                                <span class="d-flex justify-content-center flex-column lh-base">
                                                    <strong class="fs-4">Need Help </strong>
                                                    <!-- <small> Treatment plan and quote within 2 days </small> -->
                                                </span>
                                            </div>
                                            <div id="custom-form-doctor-card col-12">
                                                <form class="row" id="secondFormInList" autocomplete="off">
                                                    <input type="hidden" name="_token" id="_token" value="lL213S6ypzXlyAzlDecEWfVLS4moFQ1BuEopBxUt">
                                                    <input type="hidden" name="pagetype" value="">
                                                    <input type="hidden" name="page_source" id="page_source-sfil" value="http://www.vaidam.com/hospitals">
                                                    <input type="hidden" name="lang1" id="lang-sfil" value="">
                                                    <input type="hidden" name="second_form" value="yes">
                                                    <input type="hidden" name="preferredLocation" id="preferredLocation" value="">
                                                    <input type="hidden" name="Form_Location" id="Form_Location" value="Main Form">
                                                    <input type="hidden" name="Page_Type" id="Page_Type" value="Hospital Anchor Page">
                                                    <input type="hidden" name="c_url" id="c_url" value="">
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
                                                            <option selected="">Select Country</option>
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
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
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
                                                            <option value="XK">Kosovo</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3 autocomplete stategroup-sfil" style="display: block;">
                                                        <label for="inputCity" class="form-label">City </label>
                                                        <input type="text" class="form-control" name="city" id="city-sfil" placeholder="Enter city">
                                                        <input type="hidden" id="state-sfil" name="state">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="inputPhone" class="form-label">Phone Number </label>
                                                        <div class="input-group">
                                                            <input class="input-group-text country_phone_code" id="country_phone_code-sfil" name="country_phone_code" placeholder="Code" style="width: 80px;">
                                                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no.">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3" id="ageblock-sfil" style="display: block;">
                                                        <label for="inputAddress2" class="form-label">Patient's Age or Date Of Birth </label>
                                                        <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="medicalIssue" class="form-label">Medical Issue </label>
                                                        <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea>
                                                    </div>
                                                    <div class="col-12 mb-3" id="emirates-id-block" style="display: none;">
                                                        <label for="inputCity" class="form-label">Emirates ID </label>
                                                        <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <div class="d-grid">
                                                            <button type="submit" id="search-main-form-btn" class="btn btn-danger online-consult-button-sfil submit-form-btn in_page_form">Contact Us Now </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4">
                                                    By submitting the form I agree to the <a title="Terms of Use" href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use </a>
                                                    and <a title="Privacy Policy" href="/privacy-policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy </a>
                                                    of Vaidam Health. 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Between form -->
                                <script type="text/javascript" src="https://www.vaidam.com/assets/js/searchpage.js"></script>
                                <script type="text/javascript">
                                     $("#secondFormInList").submit(function (e) {
    e.preventDefault();
    var path = window.location.href;
    var segment = path.split("/");
    var langCountry = ['en','fr','ar','ru','bn','hi','ro','es','pt'];
    if(jQuery.inArray(segment[3], langCountry) !== -1)
    {
        var base_url_lp_new = "https://www.vaidam.com/"+segment[3]+"/lp";
    }else{
        var base_url_lp_new = "https://www.vaidam.com/lp";
    }
    if (typeof segment[3] !== 'undefined') {
        var base_url_lp_new = base_url_lp_new.replace(segment[3]+'/'+segment[3], segment[3]);
    }
    var city = $("#city-sfil").val();
    city = city.toLowerCase().replace(/\b[a-z]/g, function(city) {
        return city.toUpperCase();
    });
    city = city.trim();
    var page_source = $("#page_source-sfil").val();
    var url = page_source.split("/");
    var citydata = cities.filter(function (citydata) {
        return citydata.city == city;
    });
  
    if (citydata[0] != undefined) {
        $("#state-sfil").val(citydata[0].state);
    } else {
        $("#state-sfil").val("");
    }
  
    $(".online-consult-button-sfil").attr("disabled", true);
    $(".online-consult-button-sfil").text("Submitting...");
  
    $.post(base_url_lp_new + "/genericform", $("#secondFormInList").serialize(), function (data) {
        window.location.replace(base_url_lp_new + "/consult-online?form_step_1=done");
    });
    return false;
  });

  $("#country-sfil").change(function () {
    var curval = $(this).val();
    $("#country_phone_code-sfil").val(country_phone_code[curval]);
    if (curval != "IN") {
        $(".stategroup-sfil").hide();
        $("#state-sfil").attr("disabled", "true");
        $("#ageblock-sfil").hide();
    } else {
        $(".stategroup-sfil").show();
        $("#state-sfil").removeAttr("disabled");
        $("#ageblock-sfil").show();
    }
  });

  //generic ip tracker
  var page_source = window.location.href;
  $("#page_source-sfil").val(page_source);
  $("#lang-sfil").val(page_source);

  if(countryCode != undefined || countryCode == "")
  {
    $("#country-sfil").val(countryCode);
    $("#country_phone_code-sfil").val(country_phone_code[countryCode]);
 }

 autocomplete(document.getElementById("city-sfil"), cities);
   $(document).ready(function () {
    // When page is ready, check if there is a pre-selected country
    // var urlCountry = getCookie("SetPageCountry");
    var preferredLocation = getCookie("preferredLocation").replace(/\+/g, ' ');
    var countryCode = getCookie("countryCode");

    // Check for UAE and show emirates ID and city dropdown
    if (preferredLocation == 'United Arab Emirates' && countryCode == 'AE') {
        $('#emirates-id-block').show();  
        $('.stategroup-sfil').show();        
        $('#city-sfil').attr('placeholder', 'Enter Emirates');  
        $('#city-sfil').replaceWith('<select id="city-sfil" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
    } else if (countryCode == 'IN') {
        $('#emirates-id-block').hide();
        $('.stategroup-sfil').show();       
        $('#city-sfil').attr('placeholder', 'Enter city');
        $('#city-sfil').replaceWith('<input id="city-sfil" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
        autocomplete(document.getElementById("city-sfil"), cities);
        
    } else {  
        $('#emirates-id-block').hide();
        $('.stategroup-sfil').hide();  
    }

    // Handle country selection change event
    $('#country-sfil').on('change', function() {
        var selectedCountry = $(this).val();
        $("#country_phone_code-sfil").val(country_phone_code[selectedCountry]);
        if (selectedCountry == 'AE') {
            $('#emirates-id-block').show();  
            $('.stategroup-sfil').show();  
            $("#state-sfil").attr("disabled", "true"); 
            $("#ageblock-sfil").hide();
            $('#city-sfil').attr('placeholder', 'Enter Emirates');  
            $('#city-sfil').replaceWith('<select id="city-sfil" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
        } else if (selectedCountry == "IN") {
            $('#emirates-id-block').hide();  
            $('.stategroup-sfil').show();     
            $('#city-sfil').attr('placeholder', 'Enter city');
            $('#city-sfil').replaceWith('<input id="city-sfil" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
            autocomplete(document.getElementById("city-sfil"), cities); 
        }   
        else {
            $('#emirates-id-block').hide();  
            $('.stategroup-sfil').hide(); 
            $("#ageblock-sfil").hide();
            $("#state-sfil").attr("disabled", "true");
        }
    });
}); 
                                </script>
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
                    <div class="col-lg-6 faqs">
                        <div class="accordion-item rounded-2">
                            <h3 class="accordion-header">
                                <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">How do you select the hospitals included on your list? </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                                <div class="accordion-body">
                                    <p>We have a stringent criteria to include hospitals in our list and here are some of the factors we take into consideration: 
                                    <ul>
                                        <li>Size of the hospital - Number of beds/ ICU Bed/ Operation theaters</li>
                                        <li>Availability of diagnostic services - PET CT, MRI, CT, Nuclear medicine, In House Lab etc</li>
                                        <li>Availability of blood bank</li>
                                        <li>Total number of departments - sub specialization and super specializations offered</li>
                                        <li>Accreditation received in last 5-10 years - JCI, ISQua, GHA etc</li>
                                        <li>Published information on re-admissions, Hospital Acquired Infections, Long Term success rates on the surgeries offered</li>
                                    </ul>
</p></div></div></div>
<div class="accordion-item rounded-2">
    <h3 class="accordion-header">
        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What accreditations do the hospitals on your list hold? </button>
    </h3>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
        <div class="accordion-body">
            <p>There are some global accreditation bodies and some which are specific to a country. We consider both when evaluating listing of hospitals on Vaidam.com. 
            <ul>
                <li>International Accreditations - JCI, ISQua, GHA, ACHSI, CCHSA</li>
                <li>Country Specific - NABH for India; Healthcare Accreditation Institute in Thailand; SAS in Turkey etc</li>
            </ul>
</p></div></div></div>
<div class="accordion-item rounded-2">
    <h3 class="accordion-header">
        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">Can I view detailed information about the hospitals on your list? </button>
    </h3>
    <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
        <div class="accordion-body">
            <p>Yes, we cover following information about hospitals on their detail pages: 
            <ul>
                <li>Brief about the hospital</li>
                <li>Departments available</li>
                <li>List of top doctors working there</li>
                <li>Facilities offered - Food, Currency exchange, In-Room services, Transportation</li>
                <li>Infrastructure</li>
                <li>Location - Distance from airport</li>
                <li>Happy patient stories of that hospital</li>
                <li>Photo Gallery</li>
            </ul>
</p></div></div></div>
<div class="accordion-item rounded-2">
    <h3 class="accordion-header">
        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">How can I choose the right hospital for my treatment? </button>
    </h3>
    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
        <div class="accordion-body">
            <p>Finding a hospital is never an easy task. We have provided a lot of details on Vaidam.com for our patients to consume specific information relevant to their case, however, you are also welcome to speak in person with our case managers on call and they can also share their previous experience of handling thousands of similar patients.</p>
        </div>
    </div>
</div>
<div class="accordion-item rounded-2">
    <h3 class="accordion-header">
        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Do the hospitals on your list cater to international patients? </button>
    </h3>
    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
        <div class="accordion-body">
            <p>Yes, almost all hospitals listed on Vaidam.com have services specific to International patients. Many of them have dedicated departments and teams for the comfort and needs of international patients. For language assistance, Vaidam also offers complimentary interpreter services in many countries of our operations.</p>
        </div>
    </div>
</div>
</div>
<div class="col-lg-6 faqs">
    <div class="accordion-item rounded-2">
        <h3 class="accordion-header">
            <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I contact the hospital directly for more information? </button>
        </h3>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
            <div class="accordion-body">
                <p>Yes, if you are not comfortable talking to our team or need validation on the information shared by our team from the hospital side, we will be happy to put you in touch with the hospital department to allay your concerns. Although not every hospital has the language interpreter you may need for yourself, our team can assist you bridge the gap.</p>
            </div>
        </div>
    </div>
    <div class="accordion-item rounded-2">
        <h3 class="accordion-header">
            <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How do I know the hospital is safe and up to international standards? </button>
        </h3>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
            <div class="accordion-body">
                <p>International accreditation achieved by the hospital is an indicator for high focus on patient safety and outcomes. Don't forget to check if the accreditation of the hospital is still valid or expired/ revoked.</p>
            </div>
        </div>
    </div>
    <div class="accordion-item rounded-2">
        <h3 class="accordion-header">
            <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">What services are offered to international patients at these hospitals? </button>
        </h3>
        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
            <div class="accordion-body">
                <p>Most hospitals offer following special considerations for international patients: 
                <ul>
                    <li>Airport transfers</li>
                    <li>International lounge in hospital for comfort</li>
                    <li>Priority for doctor appointments and investigations</li>
                    <li>Money Exchange</li>
                    <li>SIM card availability</li>
                    <li>Listing of nearby hotels/ guest houses</li>
                </ul>
</p></div></div></div>
<div class="accordion-item rounded-2">
    <h3 class="accordion-header">
        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Are there patient testimonials available for the hospitals? </button>
    </h3>
    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
        <div class="accordion-body">
            <p>Yes, Vaidam has handled more than 100,000 patients. We have a lot of patient stories available on our platform (https://www.vaidam.com/knowledge-center/patient-testimonials) and our youtube channel (https://www.youtube.com/vaidam) to ensure high patient satisfaction.</p>
        </div>
    </div>
</div>
<div class="accordion-item rounded-2">
    <h3 class="accordion-header">
        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">Can I arrange a tour of the hospital before deciding? </button>
    </h3>
    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
        <div class="accordion-body">
            <p>We can arrange for virtual tours or share the videos of the hospital infrastructure. Our team can help coordinate these details.</p>
        </div>
    </div>
</div>
</div></div></div></section>
<script type="text/javascript">
     function getCitiesFilter(country) {
    var country = country;
    //console.log(dept);
    if (typeof country == 'undefined' || country == '') {
        var dd = document.getElementById("country_filter");
        dd.style.borderColor = "#FF0000";
        $('#country_filter').focus();
        return false;
    }else{
            document.getElementById('country_filter').style.removeProperty('border');
    }
    const form_data = {country: country};

    $.ajax({
        url: 'https://www.vaidam.com/hospitals/get_city_filter',
        type: 'GET',
        data: form_data,
        headers: {
            'X-CSRF-TOKEN': 'lL213S6ypzXlyAzlDecEWfVLS4moFQ1BuEopBxUt'
        },
        success: function(response) {
                let result = response.data;
                //console.log(result);exit;
            resetCities(result);
            resetDepartment1(result);
        },
        error: function(xhr, status, error) {
            console.log('Error: ', error);
        }
    });
}

function resetCities(result){
    if (typeof result !== 'undefined' && result !== null && typeof result.cities !== 'undefined') {
        const cities = result.cities;
        $('#city_filter').empty();
        let department_option = '<option value="">All Cities</option>';
        if(cities.length>0){
            cities.forEach(item => {
                //let dept_value = (item.alias).replace('department/','');
                department_option += '<option value="'+item.city_name+'">'+item.city_name+'</option>';
            });
        }
        $('#city_filter').append(department_option);
    }
}

function resetDepartment1(result){
    if (typeof result !== 'undefined' && result !== null && typeof result.department !== 'undefined') {
        const department = result.department;
        $('#department_filter1').empty();
        let department_option = '<option value="">All Departments</option>';
        if(department.length>0){
            department.forEach(item => {
                //let dept_value = (item.alias).replace('department/','');
                department_option += '<option value="'+item.department+'">'+item.department+'</option>';
            });
        }
        $('#department_filter1').append(department_option);
    }
}

function applyFilterOnHospList(){
        const end_point = 'https://www.vaidam.com';
        let department = $('#department_filter1 option:selected').val() || '';
        let country = $('#country_filter option:selected').val() || '';
        let city = $('#city_filter option:selected').val() || '';

        var errorMessage = document.getElementById("country_error");
        let search = document.getElementById('search_btn');
        let loader = document.getElementById('loader');
        
        if (typeof country == 'undefined' || country == '') {
                const spanElement = document.querySelector('span[data-select2-id="1"]');
                if (spanElement) {
                    spanElement.style.border = "5px solid red";
                    spanElement.style.borderRadius = "4px";
                }
                errorMessage.style.display = "inline";               
                $('#country_filter').focus();
                return false;
        }
        search.querySelector("#search_text").textContent = "Searching..."; 
        loader.style.display = "inline";
        let drListSearchFilter = {
            department: department,
            country: country,
            city: city,
            url: end_point+'/hospitals'
        };
        $.ajax({
            url: end_point+'/hospitals/getAppliedFilterUrl',
            type: 'GET',
            data: drListSearchFilter,
            headers: {
                'X-CSRF-TOKEN': 'lL213S6ypzXlyAzlDecEWfVLS4moFQ1BuEopBxUt'
            },
            success: function(response) {
                const mappingPageUrl = response.formatted_url || '';
                console.log('mappingPageUrl: ', mappingPageUrl);
                if(mappingPageUrl!=''){
                    window.location.assign(mappingPageUrl);
                    setTimeout(function() 
                    {
                        loader.style.display = "none"; 
                        search.querySelector("#search_text").textContent = "Search";
                    },1000);
                }
                
            },
            error: function(xhr, status, error) {
                console.log('Error: ', error);
            }
        });
    }
    $('#country_filter').on('change', function() {
    const country = $(this).val();
    if (country) {
       
        const spanElement = document.querySelector('span[data-select2-id="1"]');
        if (spanElement) {
            spanElement.style.removeProperty('border');
            spanElement.style.removeProperty('border-radius');
        }
        var errorMessage = document.getElementById("country_error");
        if (errorMessage) {
            errorMessage.style.display = "none";
        }
    }
}); 
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



<script type="text/javascript" defer src="https://www.vaidam.com/assets/dr_list_v1/js/select2.js"></script>

<script src="https://www.vaidam.com/assets/v2/js/countryData.js" type="text/javascript"></script>
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
<script type="text/javascript">
     $(document).ready(function(){
	    //let country_filter = $('#country_filter option:selected').val();
	    //$('#country_filter').val(country_filter).trigger('change');
	    //console.log('country selected');
    });
    // function resetCityFilter(){
    //     $('#city_filter').empty();
    //     getCitiesByCountry();
    // }
    function refreshFilterDropdown_old(types){
        let country = $('#country_filter option:selected').val() || '';
        if(types=='country'){
            $('#department_filter').empty();
            $('#city_filter').empty();
            $('#hospital_filter').empty();
        }
        let department = $('#department_filter option:selected').data('dept_id') || '';
        let city = $('#city_filter option:selected').val() || '';
        let hospitals = $('#hospital_filter option:selected').data('mhosp_id') || '';
        const form_data = {department: department, country: country, city: city, hospitals: hospitals};
        console.log('form_data: ', form_data);
        $.ajax({
            url: 'https://www.vaidam.com/doctors/refreshDoctorListFilter',
            type: 'POST',
            data: form_data,
            headers: {
                'X-CSRF-TOKEN': 'lL213S6ypzXlyAzlDecEWfVLS4moFQ1BuEopBxUt'
            },
            success: function(response) {
                let result = response.data;
                resetDepartment(result);
                resetCity(result);
                resetHospital(result);
            },
            error: function(xhr, status, error) {
                console.log('Error: ', error);
            }
        });
    }

    function refreshFilterDropdown(types) {
        let selectedValues = {
            country: $('#country_filter option:selected').val() || '',
            department: $('#department_filter option:selected').data('dept_id') || '',
            city: $('#city_filter option:selected').val() || '',
            treatment: $('#treatment_filter option:selected').data('treatment_id') || '',
            hospitals: $('#hospital_filter option:selected').data('mhosp_id') || ''
        };

        const select2Widths = {
            default: '30%',
            departmentSelected: '20%'
        };

        const filterDependencies = {
            country: ['department_filter', 'city_filter', 'hospital_filter'],
            city: ['department_filter', 'treatment_filter', 'hospital_filter'],
            department: ['treatment_filter', 'hospital_filter'],
            treatment: ['hospital_filter']
        };

        const resetFunctions = {
            country: [resetDepartment, resetCity, resetHospital],
            city: [resetDepartment, resetTreatment, resetHospital],
            department: [resetTreatment, resetHospital],
            treatment: [resetHospital]
        };

        // Dynamic Select2 width handling
        let departmentSelected = !!selectedValues.department;
        $(".department_filter, .treatment_filter, .hospital_filter").select2({
            width: departmentSelected && types != 'country' ? select2Widths.departmentSelected : select2Widths.default
        });

        if (types === 'country') {
            $('#treatment_filter').next('span').hide();
        }

        // Clear dependent filters dynamically
        // (filterDependencies[types] || []).forEach(id => $('#' + id).empty());
        (filterDependencies[types] || []).forEach((id) => {
            let key_name = id.split('_');
            $('#' + id).empty();
            $('#' + key_name[0]).empty();
            // $('.'+key_name[0]+'_filter+.select2-container--default .select2-selection--single .select2-selection__rendered').after('<span class="'+key_name[0]+'filterloader" style="display:none;"></span>');

            let spanClass = key_name[0] + 'filterloader';
            let $existingSpan = $('.' + key_name[0] + '_filter+.select2-container--default .select2-selection--single .select2-selection__rendered').siblings('.' + spanClass);

            if ($existingSpan.length) {
                $existingSpan.remove(); // Remove if already exists
                $('.' + key_name[0] + '_filter+.select2-container--default .select2-selection--single .select2-selection__rendered')
                    .after('<span class="' + spanClass + '"></span>');
            } else {
                $('.' + key_name[0] + '_filter+.select2-container--default .select2-selection--single .select2-selection__rendered')
                    .after('<span class="' + spanClass + '"></span>'); // Add if not exists
            }
        });

        toggleLoadingIndicators(true);

        $.ajax({
            url: 'https://www.vaidam.com/doctors/refreshDoctorListFilter',
            type: 'POST',
            data: { ...selectedValues, types },
            headers: {
                'X-CSRF-TOKEN': 'lL213S6ypzXlyAzlDecEWfVLS4moFQ1BuEopBxUt'
            },
            success: function (response) {
                let result = response.data;
                toggleLoadingIndicators(false);
                (resetFunctions[types] || []).forEach(fn => fn(result,types));
            },
            error: function (xhr, status, error) {
                console.error('Error: ', error);
            }
        });
    }

    function toggleLoadingIndicators(show) {
        const action = show ? 'show' : 'hide';
        ['city', 'department', 'treatment', 'hospital'].forEach(type => {
            $(`.${type}_filter+.select2-container--default .select2-selection--single .select2-selection__rendered`).next(`.${type}filterloader`)[action]();
        });
    }

    function resetDepartment(result,types){
        const department_list = result.departmentFilter.departmentFilter;
        $('#department_filter').empty();
        let department_option = '<option value="">All Departments</option>';
        if(department_list.length>0){
            department_list.forEach(item => {
                let dept_value = (item.alias).replace('department/','');
                department_option += '<option data-dept_id="'+item.id+'" value="'+dept_value+'">'+item.label+'</option>';
            });
        }
        $('#department_filter').append(department_option);
        // $('#department_filter').val(selected_dept).trigger('change');
    }
    function resetCity(result,types){
        const city_list = result.cityFilter.cityFilter;
        // Separate the cities based on their priority
        const topCities = city_list.filter(item => item.priority === 'High');
        const otherCities = city_list.filter(item => item.priority !== 'High');
        $('#city_filter').empty();
        let city_option = '<option value="">All Cities</option>';

        if (topCities.length > 0) {
        	city_option += '<optgroup label="Top Cities">'; // Start Top Cities group
        	topCities.forEach(item => {
            		city_option += '<option value="' + item.label + '">' + item.label + '</option>';
        	});
        	city_option += '</optgroup>'; // End Top Cities group
    	}

        // Create the second part of the options for 'Other Cities'
        if (otherCities.length > 0) {
            city_option += '<optgroup label="Other Cities">'; // Start Other Cities group
            otherCities.forEach(item => {
                city_option += '<option value="' + item.label + '">' + item.label + '</option>';
            });
            city_option += '</optgroup>'; // End Other Cities group
        }
        $('#city_filter').append(city_option);
    }
    function resetTreatment(result,types){
        $('#treatment_filter').next('span').hide();
        $('#treatment_filter').empty();
        if(result.hasOwnProperty('treatmentFilter')){
            const treatment_list = result.treatmentFilter.treatmentFilter;
            let treatment_option = '<option value="">All Treatments</option>';
            if(treatment_list.length>0){
                treatment_list.forEach(item => {
                    let treatment_value = (item.alias).replace('content/','');
                    treatment_option += '<option data-treatment_id="'+item.id+'" value="'+treatment_value+'">'+item.label+'</option>';
                });
            }
            $('#treatment_filter').append(treatment_option);
            $('#treatment_filter').next('span').show();
        }
    }
    function resetHospital(result,types){
        const hospital_list = result.hospitalFilter.hospitalFilter;
        $('#hospital_filter').empty();
        let hospital_option = '<option value="">All Hospitals</option>';
        if(hospital_list.length>0){
            hospital_list.forEach(item => {
                let hospital_value = (item.alias).replace('hospitals/','');
                hospital_option += '<option data-mhosp_id="'+item.id+'" value="'+hospital_value+'">'+item.label+'</option>';
            });
        }
        $('#hospital_filter').append(hospital_option);
        let treatment_value = $('#treatment_filter option:selected').val() || '';
        if(treatment_value!='' || types=='treatment'){
            console.log('treatment_value: ', treatment_value);

            $('#treatment_filter').show(); // Shows the element
            $('#treatment_filter.select2 + .select2-container').show();
        }
        // $('#hospital_filter').val(selected_hospital).trigger('change');
    }

    function applyFilterOnDrList(){
        const end_point = 'https://www.vaidam.com';
        let department = $('#department_filter option:selected').val() || '';
        let country = $('#country_filter option:selected').val() || '';
        let city = $('#city_filter option:selected').val() || '';
        let treatment = $('#treatment_filter option:selected').val() || '';
        let hospital = $('#hospital_filter option:selected').val() || '';
        let drListSearchFilter = {
            department: department,
            country: country,
            city: city,
            treatment: treatment,
            hospital: hospital,
            url: end_point+'/doctors'
        };
        $('#loader').show(); 
        $('#search_text').text('Searching...');
        $.ajax({
            url: end_point+'/doctors/getAppliedFilterUrl',
            type: 'POST',
            data: drListSearchFilter,
            headers: {
                'X-CSRF-TOKEN': 'lL213S6ypzXlyAzlDecEWfVLS4moFQ1BuEopBxUt'
            },
            success: function(response) {
                const mappingPageUrl = response.formatted_url || '';
                console.log('mappingPageUrl: ', mappingPageUrl);
                if(mappingPageUrl!=''){
                    location.replace(mappingPageUrl);
                    setTimeout(function() 
                    {
                        $('#loader').style.display = "none"; 
                        $("#search_text").textContent = "Search";
                    },1000);
                }
               
            },
            error: function(xhr, status, error) {
                console.log('Error: ', error);
            }
        });
    }

$(".fillter-on-mobile").click(function(){
    $(".filter-section").addClass("call-fillter-on-mob");
});
$(".close-mob-filter").click(function(){
    $(".filter-section").removeClass("call-fillter-on-mob");
});

function doGTranslate(lang_pair) {
    if (lang_pair.value) lang_pair = lang_pair.value;
    if (lang_pair == "") return;
    var lang = lang_pair.split("|")[1];
    var plang = location.pathname.split("/")[1];
    if (
        plang.length != 2 &&
        plang.toLowerCase() != "zh-cn" &&
        plang.toLowerCase() != "zh-tw"
    )
        plang = "en";
    if (lang == "en")
        location.href =
            location.protocol +
            "//" +
            location.host +
            location.pathname.replace("/" + plang + "/", "/") +
            location.search;
    else
        location.href =
            location.protocol +
            "//" +
            location.host +
            "/" +
            lang +
            location.pathname.replace("/" + plang + "/", "/") +
            location.search;
}

$(document).ready(function(){
    $(".translateText li").click(function () {
        doGTranslate($(this).attr("value"));
    });
   $('.lang_opt, .select-lang-mob select').on('change',function(){
        doGTranslate($(this).val());
    });
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
