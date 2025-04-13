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
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/faq'); ?>">FAQ's</a></li>
                                <li class="breadcrumb-item">Edit FAQ</li>
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
                                                            <label class="control-label">Page <span class="star">*</span></label>
                                                            <select class="form-control" name="page" id="page" required="">
																<option value="">Select Page</option>
                                                                <option value="home" <?php if($faq->page == 'home'){ ?> selected <?php } ?>>Home Page</option>
                                                                <option value="faq" <?php if($faq->page == 'faq'){ ?> selected <?php } ?>>FAQ Page</option>
                                                                <option value="hospital" <?php if($faq->page == 'hosptial'){ ?> selected <?php } ?>>Hospitals</option>
                                                                <option value="doctor" <?php if($faq->page == 'doctor'){ ?> selected <?php } ?>>Doctor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="control-label">Title <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter FAQ Title" value="<?= $faq->title; ?>" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Content <span class="star">*</span></label>
                                                            <textarea class="form-control" id="content" name="content" rows="22" placeholder="Enter FAQ Content" required=""><?= $faq->content; ?></textarea>
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
                                                <input type="hidden" name="id" id="id" value="<?= $faq->id; ?>">
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
        $('#content').summernote({});
    });



    $('#addFaq').submit(function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        var submitBtn = $('#addBtn');

        $.ajax({
            url: "<?= base_url('admin/update_faq'); ?>",
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