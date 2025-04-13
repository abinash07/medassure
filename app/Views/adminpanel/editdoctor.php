<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

<link rel="stylesheet" href="https://tms.tmivirtually.com/assets/css/multiselect.css">
<script src="https://tms.tmivirtually.com/assets/js/multiselect.js" type="text/javascript"></script>

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
                                                            <label class="control-label">Name <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?= $doctor->name; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label>Profile Image</label>
                                                                    <input type="file" class="form-control" name="profileImg" id="profileImg">
                                                                    <input type="text" id="oldProfileImg" name="oldProfileImg" style="display: none;" value="<?php echo @$doctor->image; ?>">
                                                                    <p id="profileerrormsg"></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if($doctor->image){ ?>
                                                                    <img class="img-fluid" id="profileimagepreview" src="<?php echo base_url(); ?><?php echo @$doctor->image; ?>" alt="User avatar" style="height: 70px; width: 70px;">
                                                                <?php }else{ ?>
                                                                    <img class="img-fluid" id="profileimagepreview" src="<?php echo base_url(); ?>/admin_assets/img/default-image.jpg" alt="User avatar" style="height: 70px; width: 70px;">
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Designation <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter established year" value="<?= $doctor->designation; ?>" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Qualification <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="qualification" id="qualification" placeholder="Enter established year" value="<?= $doctor->qualification; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Experience <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter established year" value="<?= $doctor->experience; ?>" required="">
                                                        </div>
                                                    </div>



                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">About <span class="star">*</span></label>
                                                            <textarea class="form-control" id="about" name="about" rows="5" placeholder="Enter About" required=""><?= $doctor->about; ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Monday <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="monday" id="monday" placeholder="Enter established year" value="<?= $doctor->monday; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Tuesday <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="tuesday" id="tuesday" placeholder="Enter established year" value="<?= $doctor->tuesday; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Wednesday <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="wednesday" id="wednesday" placeholder="Enter established year" value="<?= $doctor->wednesday; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Thursday <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="thursday" id="thursday" placeholder="Enter established year" value="<?= $doctor->thursday; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Friday <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="friday" id="friday" placeholder="Enter established year" value="<?= $doctor->friday; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Saturday <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="saturday" id="saturday" placeholder="Enter established year" value="<?= $doctor->saturday; ?>" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Medical Problems <span class="star">*</span></label>
                                                            <textarea class="form-control" id="medical_problems" name="medical_problems" rows="5" placeholder="Enter About" required=""><?= $doctor->medical_problems; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Medical Procedures <span class="star">*</span></label>
                                                            <textarea class="form-control" id="medical_procedures" name="medical_procedures" rows="5" placeholder="Enter About" required=""><?= $doctor->medical_procedures; ?></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Working Hospital <span class="star">*</span></label>
                                                            <select class="form-control" name="hospital_id" id="hospital_id" required="">
																<option selected="selected" value="">Select Hospital</option>
                                                                <?php foreach($hospital as $hospital){ ?>
                                                                    <option value="<?= $hospital['id']; ?>" <?php if($doctor->hospital_id == $hospital['id']){?>selected<?php } ?>><?= $hospital['name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">City <span class="star">*</span></label>
                                                            <select class="form-control" name="city_id" id="city_id" required="">
																<option selected="selected" value="">Select City</option>
                                                                <?php foreach($city as $city){ ?>
                                                                    <option value="<?= $city['id']; ?>" <?php if($doctor->city_id == $city['id']){?>selected<?php } ?>><?= $city['name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Department <span class="star">*</span></label>
                                                            <select class="form-control" name="department_id" id="department_id" required="">
																<option selected="selected" value="">Select Department</option>
                                                                <?php foreach($department as $department){ ?>
                                                                    <option value="<?= $department['id']; ?>" <?php if($doctor->department_id == $department['id']){?>selected<?php } ?>><?= $department['name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Treatment <span class="star">*</span></label>
                                                            <select class="form-control" name="treatment_id" id="treatment_id" required="">
																<option selected="selected" value="">Select Treatment</option>
                                                                <?php foreach($treatment as $treatment){ ?>
                                                                    <option value="<?= $treatment['id']; ?>" <?php if($doctor->treatment_id == $treatment['id']){?>selected<?php } ?>><?= $treatment['name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Education Training <span class="star">*</span></label>
                                                            <textarea class="form-control" id="education_training" name="education_training" rows="5" placeholder="Enter About" required=""><?= $doctor->education_training; ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Honours Awards <span class="star">*</span></label>
                                                            <textarea class="form-control" id="honours_awards" name="honours_awards" rows="5" placeholder="Enter About" required=""><?= $doctor->honours_awards; ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Work Experience <span class="star">*</span></label>
                                                            <textarea class="form-control" id="work_experience" name="work_experience" rows="5" placeholder="Enter About" required=""><?= $doctor->work_experience; ?></textarea>
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
                                                <input type="hidden" name="id" id="id" value="<?= $doctor->id; ?>">
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
        $('#about').summernote({});
        $('#medical_problems').summernote({});
        $('#medical_procedures').summernote({});
        $('#education_training').summernote({});
        $('#honours_awards').summernote({});
        $('#work_experience').summernote({});
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
            url: "<?= base_url('admin/update_doctor'); ?>",
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