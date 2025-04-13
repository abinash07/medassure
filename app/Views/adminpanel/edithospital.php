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
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/hospital'); ?>">Hospital</a></li>
                                <li class="breadcrumb-item">Edit Hospital</li>
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
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?= $hospital->name; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label>Primary Banner</label>
                                                                    <input type="file" class="form-control" name="profileImg" id="profileImg">
                                                                    <input type="text" id="oldProfileImg" name="oldProfileImg" style="display: none;" value="<?php echo @$hospital->primary_image; ?>">
                                                                    <p id="profileerrormsg"></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if($hospital->primary_image){ ?>
                                                                    <img class="img-fluid" id="profileimagepreview" src="<?php echo base_url(); ?><?php echo $hospital->primary_image; ?>" alt="User avatar" style="height: 70px; width: 70px;">
                                                                <?php }else{ ?>
                                                                    <img class="img-fluid" id="profileimagepreview" src="<?php echo base_url(); ?>/admin_assets/img/default-image.jpg" alt="User avatar" style="height: 70px; width: 70px;">
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label>Secondary Banner</label>
                                                                    <input type="file" class="form-control" name="secondaryImg" id="secondaryImg">
                                                                    <input type="text" id="oldSecondaryImg" name="oldSecondaryImg" style="display: none;" value="<?php echo @$hospital->secondary_img; ?>">
                                                                    <p id="secondaryerrormsg"></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if($hospital->secondary_img){ ?>
                                                                    <img class="img-fluid" id="secondaryimagepreview" src="<?php echo base_url(); ?><?php echo $hospital->secondary_img; ?>" alt="User avatar" style="height: 70px; width: 70px;">
                                                                <?php }else{ ?>
                                                                    <img class="img-fluid" id="secondaryimagepreview" src="<?php echo base_url(); ?>/admin_assets/img/default-image.jpg" alt="User avatar" style="height: 70px; width: 70px;">
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">City <span class="star">*</span></label>
                                                            <select class="form-control" name="city" id="city" required="">
																<option selected="selected" value="">Select City</option>
                                                                <?php foreach($city as $city){ ?>
                                                                    <option value="<?= $city['id']; ?>" <?php if($hospital->city == $city['id']){?>selected<?php } ?>><?= $city['name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Department <span class="star">*</span></label>
                                                            <select class="form-control" name="department" id="department" required="">
																<option selected="selected" value="">Select Department</option>
                                                                <?php foreach($department as $department){ ?>
                                                                    <option value="<?= $department->id; ?>" <?php if($hospital->department == $department->id){?>selected<?php } ?>><?= $department->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Established In <span class="star">*</span></label>
                                                            <input type="number" class="form-control" name="established" id="established" placeholder="Enter established year" value="<?= $hospital->established; ?>" required="">
                                                        </div>
                                                    </div>


                                                    <!-- <div class="form-group">
                                                        <label class="control-label">Accreditation</label>
                                                        <select name="accreditation[]" id="accreditation" class="form-control" multiple="multiple" size="4" required>
                                                            <option value="JCI" <?php if($hospital->accreditation == 'JCI'){?>selected<?php } ?>>JCI</option>
                                                            <option value="NABL" <?php if($hospital->accreditation == 'NABL'){?>selected<?php } ?>>NABL</option>
                                                        </select>
                                                    </div> -->


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Specialty <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="specialty" id="specialty" placeholder="Enter specialty" value="<?= $hospital->specialty; ?>" required="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Number of bed <span class="star">*</span></label>
                                                            <input type="number" class="form-control" name="number_of_bed" id="number_of_bed" placeholder="Enter number of bed" value="<?= $hospital->number_of_bed; ?>" required="">
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">About <span class="star">*</span></label>
                                                            <textarea class="form-control" id="about" name="about" rows="5" placeholder="Enter About" required=""><?= $hospital->about; ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Team and Specialities <span class="star">*</span></label>
                                                            <textarea class="form-control" id="team_and_specialities" name="team_and_specialities" rows="5" placeholder="Enter team and specialities" required=""><?= $hospital->team_and_specialities; ?></textarea>
                                                        </div>
                                                    </div>

                                                    
                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Comfort During Stay</label>
                                                            <select name="comfort_during_stay[]" id="comfort_during_stay" class="form-control" multiple="multiple" size="4" required>
                                                                <option value="TV in room">TV in room</option>
                                                                <option value="Private rooms">Private rooms</option>
                                                                <option value="Free Wifi">Free Wifi</option>
                                                                <option value="Phone in Room">Phone in Room</option>
                                                                <option value="Mobility accessible rooms">Mobility accessible rooms</option>
                                                                <option value="Family accommodation">Family accommodation</option>
                                                                <option value="Laundry">Laundry</option>
                                                                <option value="Welcome">Welcome</option>
                                                                <option value="Safe in the room">Safe in the room</option>
                                                                <option value="Nursery / Nanny services">Nursery / Nanny services</option>
                                                                <option value="Dry cleaning">Dry cleaning</option>
                                                                <option value="Personal assistance / Concierge">Personal assistance / Concierge</option>
                                                                <option value="Religious facilities">Religious facilities</option>
                                                                <option value="Spa and wellness">Spa and wellness</option>
                                                                <option value="Café">Café</option>
                                                                <option value="Business centre services">Business centre services</option>
                                                                <option value="Shop">Shop</option>
                                                                <option value="Dedicated smoking areas">Dedicated smoking areas</option>
                                                                <option value="Special offer for group stays">Special offer for group stays</option>
                                                                <option value="Parking available">Parking available</option>
                                                            </select>
                                                        </div>
                                                    </div> -->

                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Money Matters</label>
                                                            <select name="money_matters[]" id="money_matters" class="form-control" multiple="multiple" size="4" required>
                                                                <option value="Health insurance coordination">Health insurance coordination</option>
                                                                <option value="Medical travel insurance">Medical travel insurance</option>
                                                                <option value="Foreign currency exchange">Foreign currency exchange</option>
                                                                <option value="ATM">ATM</option>
                                                                <option value="Credit Card">Credit Card</option>
                                                                <option value="Debit Card">Debit Card</option>
                                                                <option value="Netbanking">Netbanking</option>
                                                            </select>
                                                        </div>
                                                    </div> -->


                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Food</label>
                                                            <select name="food[]" id="food" class="form-control" multiple="multiple" size="4" required>
                                                                <option value="Diet on Request">Diet on Request</option>
                                                                <option value="Restaurant">Restaurant</option>
                                                                <option value="International Cuisine">International Cuisine</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    

                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Treatment Related</label>
                                                            <select name="treatment_related[]" id="treatment_related" class="form-control" multiple="multiple" size="4" required>
                                                                <option value="Medical records transfer">Medical records transfer</option>
                                                                <option value="Online doctor consultation">Online doctor consultation</option>
                                                                <option value="Rehabilitation">Rehabilitation</option>
                                                                <option value="Pharmacy">Pharmacy</option>
                                                                <option value="Document legalisation">Document legalisation</option>
                                                                <option value="Post operative followup">Post operative followup</option>
                                                            </select>
                                                        </div>
                                                    </div> -->


                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Language</label>
                                                            <select name="language[]" id="language" class="form-control" multiple="multiple" size="4" required>
                                                                <option value="Interpreter">Interpreter</option>
                                                                <option value="Translation services">Translation services</option>
                                                            </select>
                                                        </div>
                                                    </div> -->


                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Transportation</label>
                                                            <select name="transportation[]" id="transportation" class="form-control" multiple="multiple" size="4" required>
                                                                <option value="Airport pickup">Airport pickup</option>
                                                                <option value="Local tourism options">Local tourism options</option>
                                                                <option value="Local transportation booking">Local transportation booking</option>
                                                                <option value="Visa / Travel office">Visa / Travel office</option>
                                                                <option value="Car Hire">Car Hire</option>
                                                                <option value="Air ambulance">Air ambulance</option>
                                                            </select>
                                                        </div>
                                                    </div> -->


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Infrastructure <span class="star">*</span></label>
                                                            <textarea class="form-control" id="infrastructure" name="infrastructure" rows="5" placeholder="Enter infrastructure" required=""><?= $hospital->infrastructure; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Address <span class="star">*</span></label>
                                                            <textarea class="form-control" id="address" name="address" rows="5" placeholder="Enter address" required=""><?= $hospital->address; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Map <span class="star">*</span></label>
                                                            <input type="text" class="form-control" name="map" id="map" placeholder="Enter map" value="<?= $hospital->map; ?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Location <span class="star">*</span></label>
                                                            <textarea class="form-control" id="location" name="location" rows="5" placeholder="Enter location" required=""><?= $hospital->location; ?></textarea>
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
                                                <input type="hidden" name="id" id="id" value="<?= $hospital->id; ?>">
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

    // $('[id*=accreditation]').multiselect({  
    //     includeSelectAllOption: true,
    //     placeholder:'Select accreditation'
    // });

    // $('[id*=comfort_during_stay]').multiselect({  
    //     includeSelectAllOption: true,
    //     placeholder:'Select comfort during stay'
    // });

    // $('[id*=money_matters]').multiselect({  
    //     includeSelectAllOption: true,
    //     placeholder:'Select money matters'
    // });


    // $('[id*=food]').multiselect({  
    //     includeSelectAllOption: true,
    //     placeholder:'Select food'
    // });

    // $('[id*=treatment_related]').multiselect({  
    //     includeSelectAllOption: true,
    //     placeholder:'Select treatment related'
    // });

    // $('[id*=language]').multiselect({  
    //     includeSelectAllOption: true,
    //     placeholder:'Select language'
    // });


    // $('[id*=transportation]').multiselect({  
    //     includeSelectAllOption: true,
    //     placeholder:'Select transportion'
    // });

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


    $('#secondaryImg').change(function(){
        const file = this.files[0];
        if(file.size < 50000000){
            var userImage = document.getElementById('secondaryImg');
            var filename = userImage.value;
            var extdot = filename.lastIndexOf(".")+1;
            var image_ext = filename.substr(extdot,filename.lenght).toLowerCase();
            if (image_ext == "jpg" || image_ext == "jpeg" || image_ext == "png" || image_ext == "webp") {
                $('#secondaryerrormsg').html('');
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
                        $("#secondaryimagepreview").attr('src',resizedDataUrl);
                    };
                }
            }else{
                $('#secondaryImg').val('');
                $('#secondaryimagepreview').attr('src', baseUrl3+'assets/img/user.jpg');
                $('#secondaryerrormsg').html('<span class="text-danger">Only png, jpeg, jpg files are allowed.</span>');
            }
        }else{
            $('#secondaryImg').val('');
            $('#secondaryimagepreview').attr('src', baseUrl3+'assets/img/user.jpg');
            $('#secondaryerrormsg').html('<span class="text-danger">Please upload file Less than 2 MB</span>');
        }
    });


    $(document).ready(function () {
        $('#about').summernote({});
        $('#team_and_specialities').summernote({});
        $('#infrastructure').summernote({});
        $('#location').summernote({});
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

        var secondaryImg = $('#secondaryImg').val();
        if(secondaryImg != ''){
            var image = $("#secondaryimagepreview").attr('src');
            formdata.append('resizedsecondaryimg',image);
        }

        $.ajax({
            url: "<?= base_url('admin/update_hospital'); ?>",
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