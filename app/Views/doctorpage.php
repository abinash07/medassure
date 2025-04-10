
        <link href="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/css/style.css" rel="stylesheet"/>


        <style>
            @media only screen and (max-width: 767px) {
                .bottom-menu.show {
                    display: none;
                }
            }

            div#cityautocomplete-list {
                position: absolute;
                z-index: 9;
                background: #fff;
                color: #444;
                padding: 0 10px;
                width: 95%;
                max-height: 270px;
                min-height: 0;
                overflow-y: auto;
                border-radius: 5px;
                border: 1px solid #ddd
            }

            .top-display-banner span {
                background: #bee1fb;
                display: flex;
                height: 50px;
                justify-content: space-evenly;
                align-items: center;
                max-width: 630px;
                width: 100%
            }

            .top-display-banner img {
                width: 200px
            }

            .top-display-banner p {
                padding-left: 20px;
                border-left: 1px solid #ccc;
                line-height: .5;
                font-size: 16px;
                margin-bottom: 0
            }

            .top-display-banner p strong {
                font-size: 21px
            }

            .top-display-banner a {
                text-decoration: underline
            }

            @media only screen and (min-width: 769px) {
                .top-display-banner span {
                    margin-left:-30px;
                    border-radius: 0 0 10px 0
                }
            }

            @media screen and (max-width: 769px) {
                .top-display-banner {
                    padding-left:0;
                    padding-right: 0
                }

                .top-display-banner span {
                    border-radius: 0 0 10px 10px;
                    max-width: unset;
                    height: 75px
                }

                h6.register {
                    max-width: 198px;
                    display: block;
                    padding: 5px
                }

                .top-display-banner img {
                    width: 148px
                }

                .top-display-banner p {
                    font-size: 14px;
                    padding-left: 10px
                }

                .top-display-banner p strong {
                    font-size: 18px
                }
            }

            @media screen and (max-width: 530px) {
                .top-display-banner span {
                    height:96px
                }

                div#google_translate_element {
                    padding: 5px
                }

                .top-display-banner span p br,p.gt-block br {
                    display: none
                }

                .top-display-banner strong {
                    display: flex;
                    margin-bottom: 10px
                }

                .top-display-banner p {
                    line-height: 1
                }
            }

            .uzbek a {
                display: block;
                width: 100%;
                max-width: 584px
            }

            .uzbek a img {
                height: auto;
                max-height: 50px;
                width: 100%;
                max-width: 584px
            }

            .uzbek {
                padding: 0
            }

            @media only screen and (min-width: 769px) {
                .visa-ufsp a {
                    border-radius:0;
                    margin-left: -30px
                }
            }

            .visa-ufsp a {
                background: #f8ddcb;
                display: flex;
                height: 50px;
                justify-content: flex-start;
                align-items: center;
                max-width: 572px;
                width: auto;
                text-decoration: none
            }

            .visa-ufsp img {
                max-width: 148px;
                background: #1431c5;
                height: 50px
            }

            .visa-ufsp p {
                font-size: 11px;
                color: #1431c5;
                padding-left: 20px;
                line-height: 1;
                margin-bottom: 0
            }

            .visa-ufsp p strong {
                font-size: 20px;
                color: #1431c5
            }

            @media only screen and (max-width: 520px) {
                .visa-ufsp {
                    padding:0
                }

                .visa-ufsp img {
                    width: 116px;
                    background: #1431c5;
                    height: 100%
                }

                .visa-ufsp p {
                    padding-left: 5px;
                    font-size: 12px
                }

                .visa-ufsp p strong {
                    font-size: 15px;
                    display: block
                }

                .visa-ufsp p br {
                    display: none
                }
            }

            @media only screen and (max-width: 360px) {
                .visa-ufsp p {
                    font-size:11px
                }

                .visa-ufsp p strong {
                    font-size: 14px
                }
            }

            .celebration-banner img,.celebration-banner-mob img {
                width: 100%;
                height: auto
            }

            @media screen and (min-width: 992px) {
                .celebration-banner-mob {
                    display:none
                }

                .celebration-banner {
                    display: block
                }
            }

            @media screen and (max-width: 991px) {
                .celebration-banner {
                    display:none
                }

                .celebration-banner-mob {
                    display: block
                }
            }
        </style>


        <style>
            iframe {
                max-width: 100%;
            }

            #video-tab {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .rating {
                align-items: center;
            }

            @media screen and (max-width: 520px) {
                .view-mor-dr-box .rating {
                    justify-content:center;
                }

                #Pricing li strong {
                    display: block;
                    width: 100% !important;
                }
            }

            .accordion-button:focus {
                box-shadow: none;
            }

            .readmorebox.collapse:not(.show) {
                height: 128px !important;
                overflow: hidden;
                display: -webkit-box;
                /* -webkit-line-clamp: 4; */
                -webkit-box-orient: vertical
            }

            .readmore-btn {
                display: block;
                text-align: right;
                color: #005897;
                cursor: pointer;
            }

            .readmore-btn.collapsed:after {
                content: '+ Read More'
            }

            .readmore-btn:not(.collapsed):after {
                content: '- Read Less'
            }

            .view-more-bx {
                display: none
            }

            .view-more-csop-bx {
                display: none
            }

            .view-more-nrb-bx {
                display: none
            }

            .qna {
                max-height: unset
            }
        </style>

        <section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle doctor-details">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb mt-3">
                                <li class="breadcrumb-item">
                                    <a href="https://www.vaidam.com" title="Home">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="https://www.vaidam.com/doctors/india" title="Doctors">Doctors</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="https://www.vaidam.com/doctors/india" title="India">India</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="https://www.vaidam.com/doctors/vascular-surgery/india" title="Vascular Surgery">Vascular Surgery</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="https://www.vaidam.com/doctors/vascular-surgery/india/new-delhi" title="New Delhi">New Delhi</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span>Dr. Rakesh Mahajan</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="serach-main">
            <!-- <div class="container-fluid"> -->
            <div class="container">
                <!-- Modal Start for Doctor Availablity -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header1">
                                <strong style="padding:12px 8px;display:block" class="modal-title" id="exampleModalLabel">OPD Schedule Of Dr. Rakesh Mahajan</strong>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-cnt">
                                    <div class="modal-bx">
                                        <p>
                                            <strong></strong>
                                        </p>
                                        <span>- </span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Rakesh Mahajan','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Book Appointment OPD Time Popup','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon','Indraprastha Apollo Hospital  New Delhi');" class="btn btn-danger book-apt-btn doctor-apt-btn" href="https:\/\/www.vaidam.com/lp/consult-online?doctor=13755" title="Book Appointment" data-cf-modified-2871a139d359471d4633ed77-="">Book Appointment</a>
                                <a onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Rakesh Mahajan','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Enquiry Button OPD Time Popup','','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon','Indraprastha Apollo Hospital  New Delhi');" class="btn btn-danger book-apt-btn send-enq-btn" style="display:none;" href="https://www.vaidam.com/lp/consult-online" title="Contact Doctor" data-cf-modified-2871a139d359471d4633ed77-="">Contact Doctor</a>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">Close</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Model View End -->
                <!-- Doctor Main Info -->
                <div class="doctor-main">
                    <div class="row">
                        <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                            <div class="doc_img">
                                <img src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr_rakesh_mahajan.webp" alt="Dr. Rakesh Mahajan" width="164" height="183" title="Dr. Rakesh Mahajan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="doc_info">
                                <h1 class="h2">
                                    Dr. Rakesh Mahajan <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/tick.svg" width="15" height="15" alt="Doctor Tick" title="Doctor Tick">
                                </h1>
                                <div class="tag">Vascular Surgeon</div>
                                <!-- Multi-Speciality If lots of Speciality Attached on the Doctors than Show all Speciality -->
                                <!-- Multi-Speciality End Here -->
                                <p>
                                    <!-- Doctor Designation -->
                                    <b>Senior Consultant</b>
                                    <br>
                                    <!-- Doctor Education -->
                                    <span class="span-edu">MBBS                                    , </span>
                                    <span class="span-edu">MS                                    , </span>
                                    <span class="span-edu">FRCS                                    , </span>
                                    <span class="span-edu">FRCS </span>
                                </p>
                                <!-- Rating Display of doctors -->
                                <!-- End Rating Block -->
                                <p>40 years of overall experience</p>
                                <p class="p-hospitalname">
                                    Works at <strong>Indraprastha Apollo Hospital, New Delhi</strong>
                                </p>
                                <!-- <p>44 years of experience Overall (44 years as specialist)</p> <p>Work at <strong>Manipal Hospitals Dwarka, Delhi</strong></p> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                            <div class="btn1-group">
                                <span class="blink">
                                    <img alt="Top Doctor" width="16" height="14" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/Top.svg" title="Top Doctor">You are viewing our top rated doctor
                                </span>
                                <!-- <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">OPD Time</a> -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 100%; text-align: center; display: block; margin: 20px 0 0;" title="Schedule">
                                    <img style="margin-top: -6px;" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/Calendar.svg" title="Schedule" alt="Schedule">Schedule
                                </a>
                                <!-- <a href="#" class="btn btn-primary">Contact Doctor</a> -->
                                <a onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Rakesh Mahajan','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Book Appointment Button Next to Main Content Name','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon','Indraprastha Apollo Hospital  New Delhi');" class="btn btn-danger book-apt-btn doctor-apt-btn" href="https:\/\/www.vaidam.com/lp/consult-online?doctor=13755" title="Book Appointment" data-cf-modified-2871a139d359471d4633ed77-="">Book Appointment</a>
                                <a onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Rakesh Mahajan','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Enquiry Button Next to Main Content Name','','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon','Indraprastha Apollo Hospital  New Delhi');" class="btn btn-danger book-apt-btn send-enq-btn" style="display:none;" href="https://www.vaidam.com/lp/consult-online" title="Contact Doctor" data-cf-modified-2871a139d359471d4633ed77-="">Contact Doctor</a>
                                <a href="https://api.whatsapp.com/send?phone=+919971616131&text=Hello, please contact me regarding https://www.vaidam.com/doctors/dr-rakesh-mahajan-vascular-surgeon?source=wpchat_DDMB, Thank you!" class="btn btn-success" title="Thank you">
                                    <img style="width: 20px;margin-top:-8px;margin-right:5px;" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/WhatsApp-Icon.svg" alt="WhatsApp Us" title="WhatsApp Us">WhatsApp Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Section -->
            </div>
            <!-- </div> -->
        </section>
        <!-- About Doctor Start From Here-->
        <section class="doctor-allD">
            <div class="container">
                <div class="row content-row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="left-content">
                            <div class="content-part" id="about-doctor">
                                <h2>About Dr. Rakesh Mahajan</h2>
                                <div class="content">
                                    <div class="readmorebox collapse" id="doctor-detail-body">
                                        <!-- Print the About Doctor Content -->
                                        <ul>
                                            <li class="rtejustify">
                                                Dr. Rakesh Mahajan is a &nbsp;<a href="https://www.vaidam.com/doctors/vascular-surgery/india/new-delhi">top doctor for Vascular Surgery in New Delhi</a>
                                                , having 40+ years of experience.
                                            </li>
                                            <li class="rtejustify">Besides being the best doctor for laser varicose vein treatment in New Delhi, he is also skilled in managing arterial disease, spider veins, vascular trauma, as well as ischemic and cardiac vascular problems.</li>
                                            <li class="rtejustify">His areas of expertise include treating deep vein thrombosis, hyperhidrosis, Raynaud’s syndrome, and upper and lower limb pain.</li>
                                            <li class="rtejustify">Dr. Mahajan completed his MBBS and MS (Surgery) from AIIMS, New Delhi, in 1984 and 1989, respectively.</li>
                                            <li class="rtejustify">Later, he pursued fellowships from the Royal College of Physicians &amp;Surgeons (Glasgow) in 1994 and the Royal College of Surgeons (UK) in 2002.</li>
                                            <li class="rtejustify">He is a leading expert for varicose veins removal surgery in New Delhi and has penned multiple articles on vascular surgery for national and international publications.</li>
                                            <li class="rtejustify">Dr. Mahajan is an honourary member of the Vascular Society of India, the International Society of Vascular Surgery, and the Association of Surgeons of India.</li>
                                        </ul>
                                    </div>
                                    <p class="mb-0 text-end w-100">
                                        <a class="readmore-btn collapsed" data-bs-toggle="collapse" href="#doctor-detail-body" aria-expanded="false" aria-controls=""></a>
                                    </p>
                                </div>
                                <!-- Show the -->
                            </div>
                        </div>
                        <!-- Doctor Appointment -->
                        <!-- Doctor Appointment End -->
                        <!-- doctor_medical_problems_treated Start -->
                        <div class="content-part" id="doctor_medical_problems_treated">
                            <div class="row">
                                <div class="col-12">
                                    <h2>Medical Problems</h2>
                                    <p>For which Dr. Rakesh Mahajan can be consulted</p>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h3 class="accordion-header mb-0">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne0" aria-expanded="true" aria-controls="collapseOne0">Vascular Conditions</button>
                                            </h3>
                                            <div id="collapseOne0" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                                <div class="accordion-body row">
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <!-- <li><a href="https://www.vaidam.com/doctors/neurology-and-neurosurgery/arteriovenous-malformations/india">Renal Ischemia</a></li> -->
                                                            <li>Renal Ischemia</li>
                                                            <!-- <li><a href="https://www.vaidam.com/doctors/opthalmology/diabetic-retinopathy-treatment/india">Pulmonary Embolism</a></li> -->
                                                            <li>Pulmonary Embolism</li>
                                                            <!-- <li><a href="https://www.vaidam.com/doctors/vascular-surgery/thoracic-aortic-aneurysm-treatment/india">Buerger’s Disease</a></li> -->
                                                            <li>Buerger’s Disease</li>
                                                            <!-- <li><a href="https://www.vaidam.com/doctors/vascular-surgery/carotid-artery-stenosis/india">Aortic Occlusive Disease</a></li> -->
                                                            <li>Aortic Occlusive Disease</li>
                                                            <!-- <li><a href="https://www.vaidam.com/doctors/general-surgery/varicose-veins-treatment/india">Prostate Enlargement</a></li> -->
                                                            <li>Prostate Enlargement</li>
                                                            <li>Varicose Veins</li>
                                                            <li>Diabetic Foot</li>
                                                            <li>Gangrene</li>
                                                            <li>Arterio-Venous Malformations</li>
                                                            <li>Vascular Trauma</li>
                                                            <li>Cervical Rib Syndrome</li>
                                                            <li>Deep Vein Thrombosis (DVT)</li>
                                                            <li>Aortic Aneurysm</li>
                                                            <li>Lymphedema</li>
                                                            <li>Hyperhidrosis</li>
                                                            <li>Raynaud’s Syndrome</li>
                                                            <li>Peripheral Vascular Disease</li>
                                                            <li>Carotid Artery Stenosis</li>
                                                            <li>Mesenteric Ischemia</li>
                                                        </ul>
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
                                    <p>Performed by Dr. Rakesh Mahajan</p>
                                    <div class="accordion" id="accordionProcedures">
                                        <div class="accordion-item">
                                            <h3 class="accordion-header mb-0">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProcedure0" aria-expanded="true" aria-controls="collapseProcedure0">Vascular Surgeries </button>
                                            </h3>
                                            <div id="collapseProcedure0" class="accordion-collapse collapse" data-bs-parent="#accordionProcedures">
                                                <div class="accordion-body row">
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li>
                                                                <a href="https://www.vaidam.com/search/angioplasty/india">Angiography and Angioplasty/Stenting</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.vaidam.com/search/heart-bypass-surgery-cabg/india">Open Bypass Surgery</a>
                                                            </li>
                                                            <li>Thoracoscopic Sympathectomy</li>
                                                            <li>Wound Management with VAC Therapy and IDRT</li>
                                                            <li>Treatment of Mesenteric and Renal Ischemia</li>
                                                            <li>Laser/Radio-Frequency Ablation for Varicose Veins</li>
                                                            <li>Stenting and Surgery for Aortic Aneurysm</li>
                                                            <li>Management of Arterio-Venous Malformations</li>
                                                            <li>Glue Ablation</li>
                                                            <li>EVAR and TEVAR</li>
                                                            <li>Treatment of Cervical Rib Syndrome</li>
                                                            <li>Foam Sclerotherapy</li>
                                                            <li>Carotid Surgery for Stroke Prevention</li>
                                                            <li>Management of Portal Hypertension</li>
                                                            <li>Complex Dialysis Access Procedures</li>
                                                            <li>Pain and Cramp Management in Limbs</li>
                                                            <li>Thrombolysis and Thrombosuction for DVT</li>
                                                            <li>Fistulas for Dialysis</li>
                                                            <li>Venoplasty and Stenting</li>
                                                            <li>Management of Dialysis Access Complications</li>
                                                            <li>IVC Filter Placement</li>
                                                            <li>HD Catheter Placement</li>
                                                            <li>Permacath Placement</li>
                                                            <li>Complex Venous Reconstruction and Bypass</li>
                                                            <li>PIC Line Placement</li>
                                                            <li>Revascularization for Diabetic Foot</li>
                                                            <li>Chemoport Insertion</li>
                                                            <li>Debridements</li>
                                                            <li>Management of Vascular Trauma</li>
                                                            <li>Stem Cell Therapy</li>
                                                            <li>Endovascular Treatment for Peripheral Vascular Disease</li>
                                                            <li>Lymphedema Management</li>
                                                            <li>Uterine Artery Embolization</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- doctor_medical_procedures_performed End -->
                        <!-- doctor_pricing_data Start -->
                        <!-- doctor_pricing_data End -->
                        <!-- Specialication Start -->
                        <!-- Specialication End -->
                        <!-- Location Start -->
                        <div class="content-part" id="location">
                            <h3>Location</h3>
                            <!-- Location Content Start -->
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="hp-img">
                                        <!-- <iframe style="border:0;width:100%;" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCX-mQO_g3CfuC9KfsvZzNqUX2kdtHMJZQ&q=Indraprastha Apollo Hospital, New Delhi"></iframe> -->
                                        <img title="Indraprastha Apollo Hospital, New Delhi" src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/hospitals/Apollo%20Hospital%20Delhi.webp" loading="lazy" width="288" height="177" alt="Hospital Images" class="img-fluid" title="Hospital Images">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="hospital-info flex-column gap-3">
                                        <div class="w-100 d-flex gap-2">
                                            <a class="locatio-icon" href="#" target="_blank" title="Location">
                                                <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/images/mastercard/location.svg" loading="lazy" width="21" height="30" alt="Location Image" title="Location Image">
                                            </a>
                                            <p>
                                                <a class="locatio-icon" href="/hospitals/indraprastha-apollo-hospital-new-delhi" title="Indraprastha Apollo Hospital, New Delhi">Indraprastha Apollo Hospital, New Delhi</a>
                                                <span>New Delhi, India</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Location Content End -->
                        </div>
                        <!-- Location End -->
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
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#block-simple-text-3" aria-selected="false" aria-controls="block-simple-text-3" id="block-simple-text-3-tab" title="Work Experience">Work Experience</a>
                                            </h3>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="tabEduTrainContent">
                                    <!-- Education Block -->
                                    <div id="block-simple-text-1" class="tab-pane  block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-1-tab">
                                        <ul>
                                            <li>MBBS, 1984, All India Institute Of Medical Sciences, New Delhi</li>
                                        </ul>
                                        <ul>
                                            <li>MS, 1989, All India Institute Of Medical Sciences, New Delhi</li>
                                        </ul>
                                        <ul>
                                            <li>FRCS, 1994, The Royal College of Physicians & Surgeons, Glasgow</li>
                                        </ul>
                                        <ul>
                                            <li>FRCS, 2002, Royal Colleges of Surgeons, UK</li>
                                        </ul>
                                    </div>
                                    <!-- Awards Start -->
                                    <!-- Awards end -->
                                    <!-- Education Start -->
                                    <div id="block-simple-text-3" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-3-tab">
                                        <ul>
                                            <li>Consultant,  Royal Gwent Hospital, UK</li>
                                        </ul>
                                    </div>
                                    <!-- Education End  -->
                                </div>
                            </div>
                        </div>
                        <!-- Related Video start -->
                        <!-- Related Video end -->
                        <!-- Snippet Start-->
                        <!-- Snippet End  -->
                        <!-- New BLog -->
                        <!-- End Blog -->
                        <!-- Banner Middle  -->
                        <div class="banner-part banner-theam-1">
                            <div class="content">
                                <h2 class="text-white">Want to consult the doctor?</h2>
                                <span>Don't Ignore Your Health!</span>
                                <a class="btn btn-danger" onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Rakesh Mahajan','','Send Enquiry form on Banner Image','','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon','Indraprastha Apollo Hospital  New Delhi');" href="https://www.vaidam.com/lp/consult-online" title="Send Enquiry" data-cf-modified-2871a139d359471d4633ed77-="">Send Enquiry</a>
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
                                                    <div class="modeofconsultation h2 bold" style="text-align:center;">Send Your Enquiry</div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="container block-container">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form class="form-horizontal form-customize" id="genericForm" autocomplete="off">
                                                    <input type="hidden" name="_token" id="_token" value="eNMkefwbU0c1btEHKUuqI41l2GeZd7I48JAThEVg">
                                                    <input type="hidden" name="pagetype" value="">
                                                    <input type="hidden" name="page_source" id="page_source" value="">
                                                    <input type="hidden" name="lang1" id="lang1" value="">
                                                    <input type="hidden" name="preferredLocation" id="preferredLocation" value="India">
                                                    <input type="hidden" name="urlDepartment" id="urlDepartment" value="VASCULAR SURGERY">
                                                    <input type="hidden" name="urlSpeciality" id="urlSpeciality" value="Vascular Surgeon">
                                                    <input type="hidden" name="hospital_Intent_Name" id="hospital_Intent_Name" value="Indraprastha Apollo Hospital, New Delhi">
                                                    <input type="hidden" name="Form_Location" id="Form_Location" value="Form at footer">
                                                    <input type="hidden" name="Page_Type" id="Page_Type" value="Dr Detail Page">
                                                    <input type="hidden" name="doctorName" id="doctorName" value="Dr. Rakesh Mahajan">
                                                    <input type="hidden" name="hospitalName" id="hospitalName" value="Indraprastha Apollo Hospital, New Delhi">
                                                    <input type="hidden" name="c_url" id="c_url" value="">
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
                                                                <option value="XK">Kosovo</option>
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
                                                <!-- Model open  -->
                                                <!-- Model open  -->
                                                <!-- Start Modal Privacy Policy -->
                                                <div class="modal fade" id="formTerms" tabindex="-1" role="dialog" aria-labelledby="termsModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <span class="modal-title" style="font-weight: bold" id="">Terms of Use</span>
                                                                <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" id="terms_of_use"></div>
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
                                                                <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" id="privacy_policy"></div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button>
                                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal Privacy Policy -->
                                                <style type="text/css">
                                                    #formTerms,#formPrivacyPolicy {
                                                        font-size: 14px;
                                                        color: #666;
                                                        top: 30px
                                                    }

                                                    #formTerms .modal-dialog,#formPrivacyPolicy .modal-dialog {
                                                        margin: 0px auto;
                                                    }

                                                    #formTerms .modal-title,#formPrivacyPolicy .modal-title {
                                                        color: #666;
                                                        font-size: 16px;
                                                        margin: 10px
                                                    }

                                                    .formtns-triger {
                                                        opacity: .6;
                                                        font-size: 14px;
                                                        cursor: pointer;
                                                    }

                                                    #formTerms .modal-header,#formPrivacyPolicy .modal-header {
                                                        background: unset;
                                                        padding: 0 5px;
                                                        border: 0
                                                    }

                                                    #formTerms .close,#formPrivacyPolicy .close {
                                                        font-size: 30px;
                                                        color: #e43939;
                                                        position: absolute;
                                                        opacity: 1;
                                                        top: 1px;
                                                        right: 5px;
                                                        z-index: 999
                                                    }

                                                    #formTerms .modal-body,#formPrivacyPolicy .modal-body {
                                                        padding: 5px 15px;
                                                        max-height: 420px;
                                                        overflow: auto;
                                                        border-top: 1px solid #ddd;
                                                        border-bottom: 1px solid #ddd
                                                    }

                                                    #formTerms .modal-footer,#formPrivacyPolicy .modal-footer {
                                                        padding: 5px;
                                                        border-top: 0
                                                    }

                                                    #formTerms .modal-footer .btn,#formPrivacyPolicy .modal-footer .btn {
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

                                                    #formTerms h2,#formPrivacyPolicy h2 {
                                                        font-size: 16px;
                                                        color: #666
                                                    }

                                                    #formTerms ul,#formPrivacyPolicy ul,#formTerms ol,#formPrivacyPolicy ol {
                                                        padding-left: 15px
                                                    }

                                                    #formTerms .modal-content, #formPrivacyPolicy .modal-content {
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
                                                            top:36px
                                                        }

                                                        #formTerms .modal-body, #formPrivacyPolicy .modal-body {
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
                            <script type="text/javascript">
                                 $(document).ready(function () {
    // When page is ready, check if there is a pre-selected country
	// var urlCountry = getCookie("SetPageCountry");


  function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments, the text field element and an array of possible autocompleted values:*/
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
}); 
                            </script>
                        </div>
                        <!-- Form End -->
                        <!-- Similar Doctor Div Start from here -->
 
                        <!-- Similar Doctor Div End  Here -->
                        <!-- FAQ Section Start -->
                        <div class="content-part" id="qna">
                            <h2 class="mb-4 mt-2">FAQs About Dr. Rakesh Mahajan</h2>
                            <div class="qna">
                                <!-- Item Start -->
                                <div class="view-more-bx">
                                    <div class="q-bx mb-3">
                                        <img alt="Question" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/q.svg" loading="lazy" width="20" height="24" title="Question">
                                        <h3>Where does Dr. Rakesh Mahajan practice?</h3>
                                        <div class="a-bx">
                                            <img alt="Answer" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/a.svg" loading="lazy" width="20" height="24" title="Answer">
                                            <p>
                                                <strong>Answer</strong>
                                            </p>
                                            <p>Dr. Rakesh Mahajan practices at Indraprastha Apollo Hospital, New Delhi </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-more-bx">
                                    <div class="q-bx mb-3">
                                        <img alt="Question" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/q.svg" loading="lazy" width="20" height="24" title="Question">
                                        <h3>What is the specialty of Dr. Rakesh Mahajan?</h3>
                                        <div class="a-bx">
                                            <img alt="Answer" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/a.svg" loading="lazy" width="20" height="24" title="Answer">
                                            <p>
                                                <strong>Answer</strong>
                                            </p>
                                            <p>Dr. Rakesh Mahajan specialty is Vascular Surgeon </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-more-bx">
                                    <div class="q-bx mb-3">
                                        <img alt="Question" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/q.svg" loading="lazy" width="20" height="24" title="Question">
                                        <h3>What is the experience of Dr. Rakesh Mahajan?</h3>
                                        <div class="a-bx">
                                            <img alt="Answer" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/a.svg" loading="lazy" width="20" height="24" title="Answer">
                                            <p>
                                                <strong>Answer</strong>
                                            </p>
                                            <p>Dr. Rakesh Mahajan is Vascular Surgeon with 40 years of experience. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-more-bx">
                                    <div class="q-bx mb-3">
                                        <img alt="Question" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/q.svg" loading="lazy" width="20" height="24" title="Question">
                                        <h3>What is Appointment Schedule Of Dr. Rakesh Mahajan?</h3>
                                        <div class="a-bx">
                                            <img alt="Answer" src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/img/a.svg" loading="lazy" width="20" height="24" title="Answer">
                                            <p>
                                                <strong>Answer</strong>
                                            </p>
                                            <p>
                                                <b></b>
                                                : From:-  To:- , 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item End -->
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="more-doctors-btn btn btn-primary bg-vh-theam text-white" id="loadmorefaq" title="Show More">Show More</button>
                            </div>
                        </div>
                        <!-- FAQ Section End -->
                        <!-- Banner-2 Start -->
                        <!-- <div class="banner-part banner-theam-2"> <div class="content"> <h2>Don't Ignore Your Health!</h2> <span>Want to consult the doctor?</span> <a class="btn btn-danger book-apt-btn send-enq-btn" onclick="setformtype('Dr. Rakesh Mahajan','','Banner 2 Doctor Details','','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon','Indraprastha Apollo Hospital  New Delhi');" href="https://www.vaidam.com/lp/consult-online">Send Enquiry</a> </div> <div class="image"> <img src="https://test.drdineshkumarmittal.com/dr2.png" alt="Don't Ignore Your Health!" width="128" height="180"> </div> </div> -->
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
                            <!-- <li> <a href="#honoured">Honours & Awards</a> </li> -->
                            <li>
                                <a href="#location" title="Location">Location</a>
                            </li>
                            <li>
                                <a href="#submitFrom" title="Submit Form">Submit Form</a>
                            </li>
                            <li>
                                <a href="#similar-doctor" title="More Doctors">More Doctors</a>
                            </li>
                            <li>
                                <a href="#qna" title="FAQs">FAQs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Doctor End -->
        <!-- Our Network Section Start-->
        <section class="vaidam-number mt-5">
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
        <!-- External Link section -->
        <section class="related-link-section">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 related-link-box">
                        <div class="p-4 rounded-4 border bg-light mb-4">
                            <p class="fs-3 fw-semibold mb-1">You May Be Interested In</p>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://www.vaidam.com/doctors/vascular-surgery/india/indraprastha-apollo-hospital-new-delhi" title="VASCULAR SURGERY in Indraprastha Apollo Hospital, New Delhi">Vascular Surgery Doctors in Indraprastha Apollo Hospital, New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/doctors/vascular-surgery/india/new-delhi" title="VASCULAR SURGERY Doctors in New Delhi">Vascular Surgery Doctors in New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/vascular-surgery/india" title="Best Vascular Surgery hospitals in India">Best Vascular Surgery hospitals in India</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/vascular-surgery/india/new-delhi" title="Best Vascular Surgery hospitals in New Delhi">Best Vascular Surgery hospitals in New Delhi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 rounded-4 border bg-light mb-4">
                            <p class="fs-3 fw-semibold mb-1">Top Doctors By Department</p>
                            <span class="sectionSubHeading h4-block2"></span>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="vascular-surgery/india" title="Best Vascular Surgery Doctors in India">Best Vascular Surgery Doctors in India</a>
                                </li>
                                <li>
                                    <a href="vascular-surgery/india/bangalore" title="Best Vascular Surgery Doctors In Bangalore">Best Vascular Surgery Doctors In Bangalore</a>
                                </li>
                                <li>
                                    <a href="vascular-surgery/india/chennai" title="Best Vascular Surgery Doctors In Chennai">Best Vascular Surgery Doctors In Chennai</a>
                                </li>
                                <li>
                                    <a href="vascular-surgery/india/gurgaon" title="Best Vascular Surgery Doctors In Gurgaon">Best Vascular Surgery Doctors In Gurgaon</a>
                                </li>
                                <li>
                                    <a href="vascular-surgery/india/hyderabad" title="Best Vascular Surgery Doctors In Hyderabad">Best Vascular Surgery Doctors In Hyderabad</a>
                                </li>
                                <li>
                                    <a href="vascular-surgery/india/mumbai" title="Best Vascular Surgery Doctors In Mumbai">Best Vascular Surgery Doctors In Mumbai</a>
                                </li>
                                <li>
                                    <a href="vascular-surgery/india/new-delhi" title="Best Vascular Surgery Doctors In New Delhi">Best Vascular Surgery Doctors In New Delhi</a>
                                </li>
                                <li>
                                    <a href="vascular-surgery/india/noida" title="Best Vascular Surgery Doctors In Noida">Best Vascular Surgery Doctors In Noida</a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 rounded-4 border bg-light mb-4">
                            <p class="fs-3 fw-semibold mb-1">Top Hospitals In New Delhi</p>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/blk-hospital-new-delhi" title="BLK-Max Super Speciality Hospital Delhi">BLK-Max Super Speciality Hospital Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi" title="Indraprastha Apollo Hospital, New Delhi">Indraprastha Apollo Hospital, New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/fortis-escorts-heart-institute-new-delhi" title="Fortis Escorts Heart Institute, New Delhi">Fortis Escorts Heart Institute, New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/fortis-flt-lt-rajan-dhall-hospital-vasant-kunj-new-delhi" title="Fortis Flt. Lt. Rajan Dhall Hospital, Vasant Kunj, New Delhi">Fortis Flt. Lt. Rajan Dhall Hospital, Vasant Kunj, New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/max-super-speciality-hospital-patparganj-new-delhi" title="Max Super Speciality Hospital, Patparganj, New Delhi">Max Super Speciality Hospital, Patparganj, New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/max-super-speciality-hospital-shalimar-bagh-new-delhi" title="Max Super Speciality hospital, Shalimar Bagh, New Delhi">Max Super Speciality hospital, Shalimar Bagh, New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/nova-ivi-fertility-new-delhi" title="NOVA IVI Fertility, New Delhi">NOVA IVI Fertility, New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/max-super-speciality-hospital-saket-new-delhi" title="Max Super Speciality Hospital, Saket, New Delhi">Max Super Speciality Hospital, Saket, New Delhi</a>
                                </li>
                                <li>
                                    <a href="https://www.vaidam.com/hospitals/fortis-hospital-shalimar-bagh-new-delhi" title="Fortis Hospital, Shalimar Bagh, New Delhi">Fortis Hospital, Shalimar Bagh, New Delhi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 rounded-4 border bg-light"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End External Link Section -->
        <!-- Search Related to Doctor List End -->
        <!-- Sticky Btn Mobile -->
        <div class="sticky_enquiry_btn-mob">
            <a style="display:none;" onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Rakesh Mahajan','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Book Appointment Sticky Button','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon','Indraprastha Apollo Hospital, New Delhi');" class="send-enquiry sticky-doctor-apt-btn" href="https://www.vaidam.com/lp/consult-online?doctor=13755" title="Book Appointment" data-cf-modified-2871a139d359471d4633ed77-="">Book Appointment</a>
            <a title="Contact Doctor" onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('Dr. Rakesh Mahajan','https:\/\/www.vaidam.com/lp/consult-online?doctor=13755','Send Enquiry Sticky Button','','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon','Indraprastha Apollo Hospital, New Delhi');" style="display:none;" class="send-enquiry sticky-send-enq-btn" href="https://www.vaidam.com/lp/consult-online" data-cf-modified-2871a139d359471d4633ed77-="">Contact Doctor</a>
        </div>
        <div id="rk_chat_plugin">
            <div class="icon-for-whatsapp wa_button_clicked" style="position: fixed;bottom: 3%;right: 2%;z-index: 99999;">
                <a href="https://api.whatsapp.com/send?phone=+919971616131&text=Hello, please contact me regarding https://www.vaidam.com/doctors/dr-rakesh-mahajan-vascular-surgeon?source=wpchat_DDSB, Thank you!" title="whatsapp">
                    <img loading="lazy" src="https://d1ea147o02h74h.cloudfront.net/chat-icon-whatsapp.png" width="50" height="50" alt="Whatsapp" style="width: 50px;height: 50px;margin-top: -22px;" title="Whatsapp">
                </a>
            </div>
        </div>
        <script src="https://d3lclm53tbcdw6.cloudfront.net/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://www.youtube.com/player_api" type="text/javascript"></script>
        <script src="https://d3lclm53tbcdw6.cloudfront.net/v2/doctor_detail/v1/js/search.js" type="text/javascript"></script>
        <script src="https://d3lclm53tbcdw6.cloudfront.net/js/searchpage.js" type="text/javascript"></script>
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
            <a onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','enquiry sticky button','','Footer','','');" href="https://www.vaidam.com/lp/consult-online" class="readmore-outline me-2" title="Need Help" data-cf-modified-2871a139d359471d4633ed77-="">Need Help?</a>
            <a href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/doctors/dr-rakesh-mahajan-vascular-surgeon?source=,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color">
                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us" title="Chat with Us" width="30" height="29" class="img-fluid me-1">Chat
            </a>
        </div>
        <div class="sticky_enquiry_btn">
            <a onclick="setformtype('','','Send Enquiry Sticky Button','','Dr Detail Page','VASCULAR SURGERY','Vascular Surgeon');" href="https://www.vaidam.com/lp/consult-online" data-cf-modified-2871a139d359471d4633ed77-="">Contact Us Now</a>
        </div>

        <script src="https://d3lclm53tbcdw6.cloudfront.net/v2/js/globalsearch.js" type="text/javascript"></script>
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

if (typeof countryCode === 'undefined') 
{
  /* Ajax Code For Set Cookie */
$.ajax({
    type: "GET",
    url: "https://www.vaidam.com/setCookie",
    success: function(res)
    {
        cc = res['countryCode'];
        cn = res['countryName'];
        cpc = res['countryPhnCode'];
    },
    async: false
});
  
/* Pre Select User Country */
var countryCode = cc;//$.cookie("countryCode");
var countryName = cn;//$.cookie("countryName");
var countryPhnCode = cpc;//$.cookie("countryPhnCode");
console.log('countryCode: '+countryCode);
console.log('countryName: '+countryName);
console.log('countryPhnCode: '+countryPhnCode);

//   banner logic
if(countryCode=='IN')
{
    $('.register').show();
}
else if(countryCode=='GB' || countryCode=='FR' || countryCode=='ES' || countryCode=='PT')
{
    $('.visa-ufsp').show();
    $('.register').hide();
    $('.top-display-banner').hide();
}
else{
    $('.top-display-banner').show();
}
}
// SO
const blockCountry = ['TR','DE','DZ','MA','TN','IQ','LY','SA','MY','EG','YE','PK','JO','ZA'];
// $(window).on('load', function() {
if(countryCode!=undefined && countryCode!=null)
{
    if(blockCountry.includes(countryCode))
    {
        $('.whatsapp-chat-text').hide();
        // $('.icon-for-whatsapp').hide();
    }else{
        $('.whatsapp-chat-text').show();
        // $('.icon-for-whatsapp').show();
    }
}

const footerblockCountry = ['TR','DE','DZ','MA','TN','IQ','LY','SA','MY','EG','YE','PK','JO','ZA'];
if(countryCode!=undefined && countryCode!=null)
{
    if(footerblockCountry.includes(countryCode))
    {
        $('.icon-for-whatsapp').hide();
    }else{
        $('.icon-for-whatsapp').show();
    }
}
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
    </body>
</html>
