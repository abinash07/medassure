<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 connectedSortable ui-sortable">
            <section class="content-header">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Client</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Client</li>
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
                                <h3 class="box-title">Add New Client</h3>
                            </div>
                            <form id="addclient">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="clint-info">
                                                <span><i class="fa fa-file"></i>Client Details</span>
                                                <div class="row">
                                                
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Name <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Short Name <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="shortname" id="shortname" placeholder="Enter Short Name" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Address <span class="star">*</span></label>
                                                            <textarea class="form-control" id="address" name="address" rows="1" placeholder="Enter Full Address" required=""></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="clint-info">
                                                <span><i class="fa fa-file"></i>SPOC Login Details</span>
                                                <div class="row">
                                                
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Full Name <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="spoc_name" id="spoc_name" placeholder="Enter Full Name" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Username <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="spoc_username" id="spoc_username" placeholder="Enter SPOC Username" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Email <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="spoc_email" id="spoc_email" placeholder="Enter SPOC Email Id" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Phone <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="spoc_phone" id="spoc_phone" placeholder="Enter SPOC Contact Number" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Designation <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Password <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="spoc_password" id="spoc_password" placeholder="Enter Password" required="">
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
                                                <a class="btn btn-primary mr-2" href="javascript:void(0);" onclick="resetForm()">Reset</a>
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
    $('#addclient').submit(function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: "<?= base_url('admin/insertclient'); ?>",
            method: "POST",
            enctype: "multipart/form-data",
            data: formdata,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            beforeSend: function () {
                //$(".loaders").show();
            },
            success: function (data) {
                if(data.status == true){
                    swal(data.message);
                    $('#addclient').trigger('reset');
                }if((data.status == false)){
                    swal(data.message);
                }
            },
            complete: function () {
                //$(".loaders").hide();
            },
        });
    });
</script>