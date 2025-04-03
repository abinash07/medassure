<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="../assets/images/favicon.png" sizes="32x32" /> -->
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= base_url(''); ?>admin_assets/css/bootstrap.min.css">
</head>
<body>


    <section class=" p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-11">
                    <div class="card border-light-subtle shadow-sm">
                        <div class="row g-0">
                            <div class="col-12 col-md-6">
                                <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="<?= base_url(''); ?>/admin_assets/img/partnerv1.webp" alt="">
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-lg-11 col-xl-10">
                                    <div class="card-body p-3 p-md-4 p-xl-5">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-5">
                                                    <div class="text-center mb-4">
                                                        <a href="#!">
                                                            <img src="<?= base_url(''); ?>admin_assets/img/light_logo.png" alt="" width="175" height="auto">
                                                        </a>
                                                    </div>
                                                    <h4 class="text-center">Welcome to Medassure</h4>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <form id="loginForm">
                                            <div class="row gy-3 overflow-hidden">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                                                        <label for="username" class="form-label">Email Id</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter Password" required>
                                                        <label for="password" class="form-label">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary btn-lg login-cnk" type="submit" name="submit" id="loginBtn">
                                                            <span id="btnLoader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span> Log in now
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





<script src="<?= base_url(''); ?>admin_assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(''); ?>admin_assets/js/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function(){
        $('#loginForm').on('submit',function(e){
        e.preventDefault();

            var username = $('#username').val();
            var password = $('#password').val();
            //var captcha = $('#captcha').val();
            $.ajax({
                url: "<?php echo base_url('adminlogin'); ?>",
                method: "POST",
                data: {username: username, password: password},
                dataType: 'JSON',         
                beforeSend: function () {
                    $('#btnLoader').show();
                    $('#loginBtn').attr('disabled',true);
                },
                success: function(data){
                    if(data.status == true){
                        location.href="<?php echo base_url('admin'); ?>";
                    }
                    if(data.status == false){
                        alert(data.message);
                    }
                },
                complete: function () {
                    $('#btnLoader').hide();
                    $('#loginBtn').attr('disabled',false);
                }
            });
        });
    });
</script>

</body>
</html>