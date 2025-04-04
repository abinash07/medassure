
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
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter News Title" required="">
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


                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="control-label">Link <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="link" id="link" placeholder="Enter News Link" required="">
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Description <span class="star">*</span></label>
                                                            <textarea class="form-control" id="description" name="description" rows="10" placeholder="Enter News Description" required=""></textarea>
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


$('#profileImg').change(function(){
		const file = this.files[0];
		if(file.size < 2000000){
			var userImage = document.getElementById('profileImg');
			var filename = userImage.value;
			var extdot = filename.lastIndexOf(".")+1;
			var image_ext = filename.substr(extdot,filename.lenght).toLowerCase();
			if (image_ext == "jpg" || image_ext == "jpeg" || image_ext == "png") {
                $('#profileerrormsg').html('');
				if(file){
					let reader = new FileReader();
					reader.onload = function(event){
						$('#profileimagepreview').attr('src', event.target.result);
					}
					reader.readAsDataURL(file);
				}
			}else{
				$('#profileImg').val('');
                $('#profileimagepreview').attr('src', baseUrl2+'assets/img/default-image.jpeg');
                $('#profileerrormsg').html('<span class="text-danger">Only png, jpeg, jpg files are allowed.</span>');
			}
		}else{
			$('#profileImg').val('');
            $('#profileimagepreview').attr('src', baseUrl2+'assets/img/default-image.jpeg');
			$('#profileerrormsg').html('<span class="text-danger">Please upload file Less than 2 MB</span>');
		}
	});



    $('#addFaq').submit(function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        var submitBtn = $('#addBtn');

        $.ajax({
            url: "<?= base_url('admin/insert_faq'); ?>",
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