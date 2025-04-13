
        <link rel="preload" type="text/css" href="https://d3lclm53tbcdw6.cloudfront.net/custom_page/css/custom_cost_page.css" as="style"/>
        <link rel="stylesheet" href="https://d3lclm53tbcdw6.cloudfront.net/custom_page/css/custom_cost_page.css">
        

 
        <!-- Breadcrumb section -->
        <section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle cost-details">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb mt-3">
                                <li class='breadcrumb-item'>
                                    <a class='text-secondary' href='<?= base_url(''); ?>'>Home</a>
                                </li>
                                <li class='breadcrumb-item'>
                                    <a class='text-secondary' href='<?= base_url(''); ?>'>Cost</a>
                                </li>
                                <li class='breadcrumb-item'>
                                    <span class='text-secondary' title='<?php echo $cost->title; ?>'><?php echo $cost->title; ?></span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="serach-main">
            <div class="container container-main">
                <!-- Cost Block Section -->
                <div class="row">
                    <div class="col-12">
                        <h1 class="my-4 main-heading"><?php echo $cost->title; ?></h1>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                    <!-- COST & USP Block Section -->
                    </div>
                </div>
                <!-- Cost Block Section end -->
                <div class="row content-row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                        <div class="cnt_bx">
                            <?php echo $cost->content; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12 mt-3 mb-5">
                        <div class="form-col-box bg-vh-secondary">
                            <div class="ms_v_cta_heading d-flex align-items-center justify-content-center mb-4">
                                <img class="mr-2" loading="lazy" src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg" width="50" height="50" alt="Know more" title="Know more">
                                <span class="d-flex justify-content-center">
                                    <strong class="fs-4">Get FREE Evaluation</strong>
                                    <small>Treatment plan and quote within 2 days</small>
                                </span>
                            </div>
                            <div id="custom-form">
                                <form class="row" id="genericFormSearch" autocomplete="off">
                                    <div class="col-12 mb-3">
                                        <label for="inputName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputState" class="form-label">Country</label>
                                        <select class="form-select" id="country" placeholder="Select Country" name="country" required="true">
                                            <option value="IN">India</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3 autocomplete stategroup">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" name="other" id="other" placeholder="Enter city">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputPhone" class="form-label">Phone Number</label>
                                        <div class="input-group">
                                            <input class="input-group-text" id="country_phone_code" name="country_phone_code" placeholder="Code" value="+91" style="width: 80px;">
                                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no.">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="medicalIssue" class="form-label">Medical Issue</label>
                                        <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea>
                                    </div>
                                    <div class="col-12 mb-3" id="ageblock">
                                        <label for="inputAddress2" class="form-label">Patient's Age or Date Of Birth</label>
                                        <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="d-grid">
                                            <p id="category_master_msg"></p>
                                            <button type="submit" id="categoryBtn" name="submit" class="btn btn-danger online-consult-button in_page_form">Contact Us Now</button>
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
        </section>
        
        
        <script>
            $('#genericFormSearch').submit(function(e){
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
                            $('#genericFormSearch').trigger('reset');
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

        <div id="menu-bottom" class="bottom-menu">
            <a href="<?= base_url(''); ?>consult-online" class="readmore-outline me-2" title="Need Help">Need Help?</a>
            <a href="https://api.whatsapp.com/send?phone=919958278202&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.medassure.co.in/cost/<?php echo $cost->slug; ?>?source=,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color">
                <img loading="lazy" src="<?= base_url(''); ?>assets/img/whatsaap-icon01.webp" alt="Chat with Us" title="Chat with Us" width="30" height="29" class="img-fluid me-1">Chat
            </a>
        </div>
        <!-- End Footer Start here -->
        <!-- Sticky Button -->
        <a href="<?= base_url(''); ?>consult-online" class="bg-danger py-2 text-center sticky-send-enquiry-bigscreen fs-5 fw-bold text-white">Contact Us Now</a>
        <div class="footer-stic-btns">
            <a class="bg-danger py-2 sticky-send-enquiry-smallscreen text-white" href="<?= base_url(''); ?>consult-online">Contact Us Now</a>
            <a class="whatsapp-btn-mob wa_button_clicked" href="https://api.whatsapp.com/send?phone=+919958278202&text=Hello,%20please%20contact%20me%20regarding http://www.medassure.co.in/cost/<?php echo $cost->slug; ?>?source=wpchat_CCSB, Thank%20you!">
                <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/whatsapp-icon-white.png" title="Whatsapp Us" alt="Whatsapp us">
                <span>Whatsapp Us</span>
            </a>
        </div>
        <style>
            .h5-tnc {
                font-size: 1em;
                font-weight: bold;
                display: inline-block;
            }

            .h4-privacy {
                font-size: 1.5em;
                font-weight: bold;
                display: inline-block;
            }
        </style>
        

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
      });
      $(window).scroll(function() {
      if ($(this).scrollTop() > 700){
        $('.form-col-box').addClass("sticy-form");
      } else {
        $('.form-col-box').removeClass("sticy-form");
      }
    });
    // show more COst Table
    $(".show-more-row").click(function () {
        if($(".cost-table-all-row").hasClass("cost-table-box")) {
            $(this).text("Show Less");
        } else {
            $(this).text("Show More");
        }

        $(".cost-table-all-row").toggleClass("cost-table-box");
    });
    // End show more Cost Table
    // Start Sliders
  
    // Serach bar for mobile
    $(document).ready(function () {
        if (window.innerWidth <=768) {
            $(document).ready( $('#closemob_search').click(function() {
                $(".nav-search-section").removeClass("mob_layout"); // this.children().removeClass("mob_layout");
            }),
            $('#search_find_new').click(function() {
                $(".nav-search-section").addClass('mob_layout');
                $("#closemob_search").show();
            }),
            $('#closemob_search').click(function() {
                $(this).hide()
            })
            );
        }
    }); 
        </script>
