<!-- <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script> -->


<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>



<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 connectedSortable ui-sortable">
            <section class="content-header">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/home'); ?>">Board Members</a></li>
                                <li class="breadcrumb-item">Add New Board Member</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        <a href="javascript:history.back()" style="float: right; color: #333333; font-weight: 600;"><i style="font-size: 12px;" class="fa fa-chevron-left"></i> Go Back</a>
                    </div>
                </div>
            </section>



            <section class="content fill-profile">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-danger">
                            <div class="box-header with-border">

                            </div>
                            <form id="addclient">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="clint-info">
                                                <span><i class="fa fa-file"></i>Basic Details</span>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Name <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required="">
                                                            <!-- <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required="" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"> -->
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Email <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Id" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Phone <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Age <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="age" id="age" placeholder="Enter Age" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Director Since <span class="star">*</span></label>
                                                            <input type="year" class="form-control" name="since" id="since" placeholder="Enter Director Scince" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Type of Directorship <span class="star">*</span></label>
                                                            <select class="form-control" name="director_type" id="director_type" required="">
																<option selected="selected" value="">Select Type of Directorship</option>
                                                                <option value="Independent">Independent</option>
                                                                <option value="Executive">Executive</option>
                                                                <option value="Nominee">Nominee</option>
                                                                <option value="others">others</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Is She/He Chairperson of the Board <span class="star">*</span></label>
                                                            <select class="form-control" name="is_chairperson" id="is_chairperson" required="">
																<option selected="selected" value="">Select Type of Directorship</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Is She/He Chairperson of <span class="star">*</span></label>
                                                            <select class="form-control" name="chairperson_of" id="chairperson_of" required="">
																<option selected="selected" value="">Select Type of Committees</option>
                                                                <option value="Risk Committee">Risk Committee</option>
                                                                <option value="All Committees">All Committees</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Is She/He Member of <span class="star">*</span></label>
                                                            <select class="form-control" name="member_of" id="member_of" required="">
																<option selected="selected" value="">Select Type of Committees</option>
                                                                <option value="Risk Committee">Risk Committee</option>
                                                                <option value="All Committees">All Committees</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <!-- <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Board Role <span class="star">*</span></label>
                                                            <select name="board_role" id="board_role" class="form-control" required="">
																<option selected="selected" value="" disabled="">Select Board Role</option>
                                                                <option value="Board Member">Board Member</option>
                                                                <option value="Chairperson">Chairperson</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Designation <span class="star">*</span></label>
                                                            <select name="designation" id="designation" class="form-control" required="">
																<option selected="selected" value="" disabled="">Select Designation</option>
                                                                <option value="Executive Director">Executive Director</option>
                                                                <option value="Chairperson">Chairperson</option>
                                                                <option value="Independent Director">Independent Director</option>
                                                                <option value="Nominee Director">Nominee Director</option>
                                                                <option value="Executive Director">Executive Director</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Current Designation <span class="star">*</span></label>
                                                            <select name="current_designation" id="current_designation" class="form-control" required="">
																<option selected="selected" value="" disabled="">Select Current Designation</option>
                                                                <option value="MD &CEO">MD &CEO</option>
                                                                <option value="Chairperson">Independent Director & Non Executive Chairperson</option>
                                                                <option value="Independent Director">Independent Director</option>
                                                                <option value="Nominee of goodcorporate.com">Nominee of goodcorporate.com</option>
                                                                <option value="Executive Director - (APAC development)">Executive Director - (APAC development)</option>
                                                                <option value="Executive Director (Sales)">Executive Director (Sales)</option>
                                                                <option value="Executive Director (Marketing)">Executive Director (Marketing)</option>
                                                            </select>
                                                        </div>
                                                    </div> -->

                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-12">
                                            <div class="clint-info">
                                                <span><i class="fa fa-file"></i>Select Sections for Survey</span>
                                                <div class="row">
                                                    <?php foreach ((array) $category as $k2 => $v2) { ?>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="section[]" id="section" value="<?php echo $v2->id; ?>" checked=""> <?php echo $v2->name; ?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-12">
                                            <div class="clint-info">
                                                <span><i class="fa fa-file"></i>Email Configuration</span>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Subject <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Email Subject" value="Invitation to Participate in the Board Evaluation Survey" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Message <span class="star">*</span></label>
                                                            <textarea class="form-control" id="message" name="message" rows="22" placeholder="Enter Email Body Message" required="">
                                                            <p>Dear [name],</p>

<p>Extensive research has shown that an independent and unbiased Board Evaluation enhances overall Board performance, ensures the fulfillment of its responsibilities, and enables the company to proactively respond to external demands. Ultimately, this benefits all shareholders and promotes value creation in markets where good corporate governance thrives.</p>

<p>Globally, it is now a best practice to undertake an externally facilitated Board Evaluation to assess Board effectiveness and gain deeper insights into members' perspectives. The <strong>GoodGovern Evaluation Tool</strong> is a research-based framework that incorporates global best practices, aligns with regulatory requirements, and allows customization to fit organizational and industry contexts.</p>

<p><strong>Key Features of the GoodGovern Toolkit:</strong></p>
<ul>
    <li><strong>Board Evaluation:</strong> Reflection on effectiveness and improvement of Board processes and practices.</li>
    <li><strong>Director’s Feedback:</strong> Ensuring alignment with Board objectives and purpose.</li>
    <li><strong>Chairperson’s Feedback:</strong> Actionable insights for enhanced efficiency and measurable impact.</li>
    <li><strong>GGE Score:</strong> Benchmarking for continuous governance improvement.</li>
</ul>

<p>The evaluation survey assesses Board effectiveness across multiple dimensions, including strategic planning, risk oversight, Board dynamics, relationships with management, and information flow. To ensure a qualitative perspective, the survey includes open-ended sections for additional comments and reflective questions.</p>

<p>All responses will be kept strictly confidential, with key outcomes shared only with the Chairperson or a designated representative. We recommend that Boards focus on areas where consensus indicates opportunities for improvement and where diverse perspectives highlight key performance factors. A brief summary of key findings may also be included in the company’s Annual Report to maintain a continuous focus on governance enhancement.</p>
<p>The login credentials to complete the Survey will be sent in the next email.</p>

<p>Best regards,</p>
<p><?= $_SESSION['name']; ?> <br> <?= $_SESSION['designation']; ?> <br> <?= $_SESSION['client_name']; ?> <br> <?= $_SESSION['phone']; ?></p>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-left" style="margin:15px 0px;">
                                                <p id="message"></p>
                                                <button id="addBatchBtn" class="btn btn-success mr-2" type="submit" name="submit">Submit</button>
                                                <a class="btn btn-danger" href="javascript:void(0);" onclick="history.back()">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>
</div>

<script>
    var originalEmailTemplate = '';
    $(document).ready(function () {
        $('#message').summernote({
            height: 500,
            callbacks: {
                onInit: function () {
                    window.originalTemplate = $('#message').summernote('code') || "";
                    originalEmailTemplate = $('#message').summernote('code') || "";
                }
            }
        });

        $("#name").on("keyup", function () {
            var nameValue = $(this).val().trim() || "Board Member";
            if (typeof window.originalTemplate === "undefined") {
                console.error("Original template is not defined yet.");
                return;
            }
            var updatedContent = window.originalTemplate.replace(/\[name\]/g, nameValue);
            $('#message').summernote('code', updatedContent);
        });

        // $("#email").on("keyup", function () {
        //     var emailValue = $(this).val().trim();
        //     if (typeof window.originalTemplate === "undefined") {
        //         console.error("Original template is not defined yet.");
        //         return;
        //     }
        //     var updatedContent = window.originalTemplate.replace(/\[registered_email\]/g, emailValue);
        //     $('#message').summernote('code', updatedContent);
        // });

        // function updateTemplate() {
        //     if (typeof window.originalTemplate === "undefined") {
        //         console.error("Original template is not defined yet.");
        //         return;
        //     }

        //     var nameValue = $("#name").val().trim() || "Board Member";
        //     var emailValue = $("#email").val().trim() || "[registered_email]"; // Preserve placeholder if empty

        //     var updatedContent = window.originalTemplate
        //         .replace(/\[name\]/g, nameValue)
        //         .replace(/\[registered_email\]/g, emailValue);

        //     $('#message').summernote('code', updatedContent);
        // }

        // $("#name, #email").on("keyup", updateTemplate);

    });



    $('#addclient').submit(function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        var submitBtn = $('#addBatchBtn');

        $.ajax({
            url: "<?= base_url('admin/insertexaminee'); ?>",
            method: "POST",
            enctype: "multipart/form-data",
            data: formdata,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            beforeSend: function () {
                //$(".loaders").show();
                // Disable the button & show loader
                submitBtn.prop('disabled', true);
                submitBtn.html('<span class="spinner-border spinner-border-sm"></span> Submitting...');

            },
            success: function (data) {
                if(data.status == true){
                    swal(data.message);
                    $('#addclient').trigger('reset');
                    $('#message').summernote('code', originalEmailTemplate);
                }if((data.status == false)){
                    swal(data.message);
                }
            },
            complete: function () {
                //$(".loaders").hide();
                submitBtn.prop('disabled', false);
                submitBtn.html('Submit');
            },
        });
    });
</script>