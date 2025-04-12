<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= base_url(''); ?>assets/img/favicon.png" type="image/png" />
        <title>Patient Form</title>
        <meta name="description" content="Complete our patient form to streamline your healthcare experience.">
        <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/css/bootstrap3.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/css/custom.css">
    </head>
    <body>

        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header col-md-3 col-sm-6 col-xs-6 main-logo">
                    <a href="#" onclick="event.preventDefault();" class="logolink">
                        <img src="<?= base_url(''); ?>assets/img/logo.png" alt="Vaidam logo" class="lgo" title="Vaidam logo ">
                    </a>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-6 main-logo">
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 main-logo">
                    <p class="mail-heading">
                        <span class="mail-heading-anchor1">
                            <a href="mailto:info@medassure.co.in" class="__cf_email__" style="color: #FFF;">info@medassure.co.in</a>
                        </span>
                    </p>
                </div>
            </div>
        </nav>
        <div class="main_container">
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
                                <form class="form-horizontal form-customize" id="genericForm" autocomplete="off">
                                    <input type="hidden" name="c_url" id="c_url" value="">
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
                                            <select class="form-control new-form-control" id="country" placeholder="Select Country" name="country" required="true">
                                                <option value="" selected="selected">Country</option>
                                                <?php foreach($countryList as $k => $v) { ?>
                                                    <option value="<?= $v->short_name; ?>"><?= $v->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group label-controls stategroup" style="display: none;">
                                        <label class="control-label col-sm-12" for="state" id="city-label">City<span class="red">*</span></label>
                                        <div class="col-sm-12">
                                            <div class="autocomplete">
                                                <input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City">
                                                <input type="hidden" id="state" name="state">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group label-controls">
                                        <label class="control-label col-sm-12" for="phone">Phone Number<span class="red">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" id="country_phone_code" name="country_phone_code" class="form-control new-form-control col-md-2" value="" readonly style="width: 15%; float: left;">
                                            <input type="tel" class="form-control new-form-control col-md-10" id="phone_number" placeholder="Your Phone number" name="phone_number" required style="width: 84%">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="medicalissue"> Medical Issue <span class="red">*</span></label>
                                            <br>
                                            <textarea cols="5" rows="5" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem .." style="height:100%; width:100%; resize: vertical;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group label-controls" id="ageblock" style="display: none;">
                                        <label class="control-label col-sm-12" for="email">Patient's Age or Date Of Birth<span class="red">*</span>/label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                        </div>
                                    </div>
                                    <div class="form-group label-controls" id="emirates-id-block" style="display: none;">
                                        <label class="control-label col-sm-12" for="inputCity" class="form-label">Emirates ID </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)">
                                        </div>
                                    </div>
                                    <div class="form-group label-controls">
                                        <div class="col-sm-12 text-center">
                                            <p id="consult_msg"></p>
                                            <button type="submit" class="btn online-consult-button lp_form">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                                <div style="width: 100%;" class="form-group label-controls">
                                    <div class="col-sm-12 text-center">
                                        <span class="formtns-triger text-muted">
                                            By submitting the form I agree to the 
                                            <a title="Terms of Use" href="<?= base_url(); ?>terms-use" target="_blank" class="terms_of_use">Terms of Use</a>
                                            and <a title="Privacy Policy" href="<?= base_url(); ?>privacy-policy" target="_blank" class="terms_of_use">Privacy Policy</a>
                                            of Vaidam Health.
                                        </span>
                                    </div>
                                </div>
                                
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
        </div>
        <script src="https://www.vaidam.com/consult/v1/js/jquery.min.js" type="text/javascript"></script>
        <script src="https://www.vaidam.com/consult/v1/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?= base_url(''); ?>assets/js/custom2.js"></script>
        <link href="https://www.vaidam.com/consult/v1/css/jquery-ui.css" rel="stylesheet" type="text/css" >
        <script src="https://www.vaidam.com/consult/v1/js/jquery-ui.js" type="text/javascript"></script>

<script type="text/javascript">
    document.getElementById("c_url").value = window.location.href;

    $('#ageblock').hide();
    $('.stategroup').hide();
    $('.datepicker').datepicker({ 
        beforeShowDay: noSunday, 
        minDate:0,
        dateFormat: "yy-mm-dd"
    });
	function noSunday(date){ 
        return [date.getDay() != 0, ''];
    }; 

    $('#country').change(function(){
        var curval = $(this).val();
        $('#country_phone_code').val(country_phone_code[curval]);
        if(curval!='IN'){
            $('.stategroup').hide();
            $('#state').attr('disabled','true');
            $('#ageblock').hide();
        }else{
            $('.stategroup').show();
            $('#state').removeAttr('disabled');
            $('#ageblock').show();
        }
    })


    //generic ip tracker
    var page_source =  localStorage.getItem("current_lp_url");  
    $('#page_source').val(page_source);
    $('#lang1').val(page_source);
    


    /* Pre Select User Country */
    var countryCode = 'IN';//$.cookie("countryCode");
    var countryName = 'India';//$.cookie("countryName");
    var countryPhnCode = '+91';//$.cookie("countryPhnCode");

    if(countryCode != undefined || countryCode == ""){
        $("#country").val(countryCode);
        $("#country_phone_code").val(country_phone_code[countryCode]);
    }

    if (countryCode == "IN") {
        $("#ageblock").show();
        $(".stategroup").show();
    }

    autocomplete(document.getElementById("city"), cities);

    $(document).ready(function () {
        var preferredLocation = 'India';
        var countryCode = 'IN';
        // Check for UAE and show emirates ID and city dropdown
        if (preferredLocation == 'United Arab Emirates' && countryCode == 'AE') {
            $('#emirates-id-block').show();  
            $('.stategroup').show();        
            $("#city-label").text("Emirates");
            $('#city').replaceWith('<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
        } else if (countryCode == 'IN') {
            $('#emirates-id-block').hide();
            $('.stategroup').show();       
            $("#city-label").text("City");
            $('#city').replaceWith('<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
            autocomplete(document.getElementById("city"), cities);
        } else {  
            $('#emirates-id-block').hide();
            $('.stategroup').hide();  
        }

        // Handle country selection change event
        $('#country').on('change', function() {
            var selectedCountry = $(this).val();
            
            if (selectedCountry == 'AE') {
                $('#emirates-id-block').show();  
                $('.stategroup').show();   
                $("#city-label").text("Emirates");
                $('#city').replaceWith('<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
            } else if (selectedCountry == "IN") {
                $('#emirates-id-block').hide();  
                $('.stategroup').show();     
                $("#city-label").text("City");
                $('#city').replaceWith('<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
                autocomplete(document.getElementById("city"), cities); 
            }   
            else {
                $('#emirates-id-block').hide();  
                $('.stategroup').hide(); 
            }
        });
    }); 

    var geo_countryCode =  localStorage.getItem("geo_countryCode");
    if(geo_countryCode!=undefined && geo_countryCode=='IN'){
        $('.vaidam-phone-number').hide();
    } 
</script>
<script src="<?= base_url(''); ?>assets/js/rocket-loader.min.js"></script>

</body>
</html>
