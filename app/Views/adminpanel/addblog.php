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
                                                    
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="control-label">Title <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter FAQ Title" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label>Image</label>
                                                                    <input type="file" class="form-control" name="profileImg" id="profileImg" required>
                                                                    <p id="profileerrormsg"></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <img class="img-fluid" id="profileimagepreview" src="<?php echo base_url(); ?>/admin_assets/img/default-image.jpg" alt="User avatar" style="height: 70px; width: 70px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Author <span class="star">*</span></label>
                                                            <select class="form-control" name="author_id" id="author_id" required="">
																<option selected="selected" value="">Select Author</option>
                                                                <?php foreach($author as $cat){ ?>
                                                                    <option value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Category <span class="star">*</span></label>
                                                            <select class="form-control" name="cat_id" id="cat_id" required="">
																<option selected="selected" value="">Select Category</option>
                                                                <?php foreach($category as $cat){ ?>
                                                                    <option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Content <span class="star">*</span></label>
                                                            <textarea class="form-control" id="content" name="content" rows="22" placeholder="Enter FAQ Content" required=""></textarea>
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

    var baseUrl3 = "<?php echo base_url(); ?>";

    function showSuccessAndReload() {
        Swal.fire({
            title: 'Success!',
            text: 'Your changes have been saved.',
            icon: 'success',
            confirmButtonText: 'OK',
            allowOutsideClick: false,
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
        });
    }

    function showDeleteConfirmation() {
        Swal.fire({
        title: 'Are you sure?',
        text: 'You are about to delete this item.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it',
        cancelButtonText: 'Cancel',
        allowOutsideClick: false,
        }).then((result) => {
        if (result.isConfirmed) {
            location.reload();
        }
        });
    }

    function get_size_quality(size){
        if(size <= 10000000){
            quality=0.8;
        }
        if(size >= 20000000){
            quality=0.7;
        }
        if(size >= 40000000){
            quality=0.6;
        }
        return quality;
    }

    function get_height(ow,oh){
        if(ow >= 500){
            var factor = 900;
            var sum = Math.floor(ow+oh);
            var nwa = ow/sum;
            var nw = Math.floor(nwa*factor);
            var nha = oh/sum;
            var nh = Math.floor(nha*factor);
        }else if(ow >= 12000){
            var factor = 500;
            var sum = Math.floor(ow+oh);
            var nwa = ow/sum;
            var nw = Math.floor(nwa*factor);
            var nha = oh/sum;
            var nh = Math.floor(nha*factor);
        }else{
            var nw = ow;
            var nh = oh;
        }
        
        return nh;
    }

    function get_width(ow,oh){
        if(ow >= 500){
            var factor = 900;
            var sum = Math.floor(ow+oh);
            var nwa = ow/sum;
            var nw = Math.floor(nwa*factor);
            var nha = oh/sum;
            var nh = Math.floor(nha*factor);
        }else if(ow >= 12000){
            var factor = 500;
            var sum = Math.floor(ow+oh);
            var nwa = ow/sum;
            var nw = Math.floor(nwa*factor);
            var nha = oh/sum;
            var nh = Math.floor(nha*factor);
        }else{
            var nw = ow;
            var nh = oh;
        }
        
        return nw;
    }



    $('#profileImg').change(function(){
        const file = this.files[0];
        if(file.size < 50000000){
            var userImage = document.getElementById('profileImg');
            var filename = userImage.value;
            var extdot = filename.lastIndexOf(".")+1;
            var image_ext = filename.substr(extdot,filename.lenght).toLowerCase();
            if (image_ext == "jpg" || image_ext == "jpeg" || image_ext == "png" || image_ext == "webp") {
                $('#profileerrormsg').html('');
                if(file){
                    const blobURL = URL.createObjectURL(file);
                    const img = new Image();
                    img.src = blobURL;
                    var size = file.size;
                    var quality = get_size_quality(size);
                    img.onload = function () {
                        var nw = get_width(this.width,this.height);
                        var nh = get_height(this.width,this.height);
                        //var canvas = document.getElementById("canvas");
                        var canvas = document.createElement('canvas');
                        canvas.width = nw;
                        canvas.height = nh;
                        var ctx = canvas.getContext("2d");
                        ctx.filter = 'none';
                        ctx.drawImage(img, 0, 0, nw, nh);
                        var resizedDataUrl = canvas.toDataURL('image/jpeg', quality);
                        $("#profileimagepreview").attr('src',resizedDataUrl);
                    };
                }
            }else{
                $('#profileImg').val('');
                $('#profileimagepreview').attr('src', baseUrl3+'assets/img/user.jpg');
                $('#profileerrormsg').html('<span class="text-danger">Only png, jpeg, jpg files are allowed.</span>');
            }
        }else{
            $('#profileImg').val('');
            $('#profileimagepreview').attr('src', baseUrl3+'assets/img/user.jpg');
            $('#profileerrormsg').html('<span class="text-danger">Please upload file Less than 2 MB</span>');
        }
    });


    $(document).ready(function () {
        $('#content').summernote({});
    });

    $('#addFaq').submit(function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        var submitBtn = $('#addBtn');

        var profileImg = $('#profileImg').val();
        if(profileImg != ''){
            var image = $("#profileimagepreview").attr('src');
            formdata.append('resizedprofileimg',image);
        }

        $.ajax({
            url: "<?= base_url('admin/insert_blog'); ?>",
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
                    $('#content').summernote('reset');
                    //$('#content').summernote('code', '');
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