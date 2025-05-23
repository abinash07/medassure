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
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/home'); ?>">Video</a></li>
                                <li class="breadcrumb-item">Add New Video</li>
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
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="control-label">Title <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" value="<?= $video->title; ?>" required="">
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="control-label">URL <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="url" id="url" placeholder="Enter URL" value="<?= $video->url; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Category <span class="star">*</span></label>
                                                            <select class="form-control" name="cat_id" id="cat_id" required="">
																<option selected="selected" value="">Select Category</option>
                                                                <?php foreach($category as $cat){ ?>
                                                                    <option value="<?= $cat->id; ?>" <?php if($video->cat_id == $cat->id){?>selected<?php } ?>><?= $cat->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="radio-inline">
                                                            <input type="checkbox" name="home_page" id="home_page" value="1" <?php if($video->home_page){?>checked<?php } ?>> Show in home page                                                                </label>
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
                                                <input type="hidden" name="id" id="id" value="<?= $video->id; ?>">
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

    $('#addFaq').submit(function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        var submitBtn = $('#addBtn');

        $.ajax({
            url: "<?= base_url('admin/update_video'); ?>",
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