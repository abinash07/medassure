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
                            <form id="addFaq">
                                <div class="box-body">
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="clint-info">
                                                <span><i class="fa fa-file"></i>Email Configuration</span>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Country From <span class="star">*</span></label>
                                                            <select class="form-control" name="country_from" id="country_from" required="">
																<option selected="selected" value="">Select Country From</option>
                                                                <?php foreach($countryList as $k => $v) { ?>
                                                                    <option value="<?= $v->name; ?>"><?= $v->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Country To <span class="star">*</span></label>
                                                            <select class="form-control" name="country_to" id="country_to" required="">
																<option selected="selected" value="">Select Country To</option>
                                                                <?php foreach($countryList as $k => $v) { ?>
                                                                    <option value="<?= $v->name; ?>"><?= $v->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Visa Requirements <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="visa_requirement" id="visa_requirement" placeholder="Enter FAQ Title" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Visa Invitation <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="visa_invitation" id="visa_invitation" placeholder="Enter FAQ Title" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Remarks <span class="star">*</span></label>
                                                            <textarea class="form-control" id="remark" name="remark" rows="5" placeholder="Enter FAQ Content" required=""></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Eligible for Evisa <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="eligible_for_evisa" id="eligible_for_evisa" placeholder="Enter FAQ Title" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Evisa Fees <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="evisa_fees" id="evisa_fees" placeholder="Enter FAQ Title" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Regular Visa Fees <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="regular_visa_fee" id="regular_visa_fee" placeholder="Enter FAQ Title" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Visa Duration <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="visa_duration" id="visa_duration" placeholder="Enter FAQ Title" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Visa Application <span class="star">*</span></label>
                                                            <textarea class="form-control" id="visa_application" name="visa_application" rows="5" placeholder="Enter FAQ Content" required=""></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Evisa Application <span class="star">*</span></label>
                                                            <textarea class="form-control" id="evisa_application" name="evisa_application" rows="5" placeholder="Enter FAQ Content" required=""></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Resources <span class="star">*</span></label>
                                                            <textarea class="form-control" id="resource" name="resource" rows="10" placeholder="Enter FAQ Content" required=""></textarea>
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
                                                <button id="addBtn" class="btn btn-success mr-2" type="submit" name="submit">Submit</button>
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
    $(document).ready(function () {
        $('#resource').summernote({});
    });

    $('#addFaq').submit(function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        var submitBtn = $('#addBtn');

        $.ajax({
            url: "<?= base_url('admin/insert_travel_visa'); ?>",
            method: "POST",
            enctype: "multipart/form-data",
            data: formdata,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            beforeSend: function () {
                submitBtn.prop('disabled', true);
                submitBtn.html('<span class="spinner-border spinner-border-sm"></span> Submitting...');
            },
            success: function (data) {
                if(data.status == true){
                    swal(data.message);
                    $('#addFaq').trigger('reset');
                    $('#summernote').summernote('reset');
                    //$('#summernote').summernote('code', '');
                }if((data.status == false)){
                    swal(data.message);
                }
            },
            complete: function () {
                submitBtn.prop('disabled', false);
                submitBtn.html('Submit');
            },
        });
    });
</script>