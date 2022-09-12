<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo __('Admin Login'); ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo asset('public/backend/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo asset('public/backend/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo asset('public/backend/bower_components/Ionicons/css/ionicons.min.css'); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo asset('public/backend/dist/css/AdminLTE.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('public/backend/dist/css/shiplo.css'); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo asset('public/backend/plugins/iCheck/square/blue.css'); ?>">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    </head>
    <body class="hold-transition login-page">
        
        <section class="LoginBg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 force_mar">
                        <div class="content_Foinny">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="Login_form">
                                        <div class="Heading text-center">
                                            <h3><?php echo __('HRM & Payroll'); ?> <span><?php echo __('Soft. V3.0'); ?></span></h3>
                                        </div>
                                        <form action="<?php echo route('login'); ?>" method="post">
                                            <?php echo csrf_field(); ?>

                                            <div class="form-group">
                                                <div class="over_box">
                                                    <label for="InputEmail1" class="Label<?php echo $errors->has('email') ? ' has-error' : ''; ?> has-feedback"><?php echo __('Email Address'); ?></label>
                                                    <input type="email" name="email" value="admin@mail.com" class="Input" id="" aria-describedby="emailHelp">
                                                    <?php if($errors->has('email')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo $errors->first('email'); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <div class="SideIcon"><img class="img-fluid" src="<?php echo asset('public/images/userLoginIcon01.png'); ?>" alt="Email Icon"></div>
                                                </div>
                                              
                                            </div>
                                            <div class="form-group">
                                                <div class="over_box">
                                                    <label for="InputPassword" class="<?php echo $errors->has('password') ? ' has-error' : ''; ?> has-feedback"><?php echo __('Password'); ?></label>
                                                    <input type="password" name="password"  value="demo" class="Input" id="">
                                                    <?php if($errors->has('password')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo $errors->first('password'); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <div class="SideIcon"><img src="<?php echo asset('public/images/userLoginIcon02.png'); ?>" alt="Password Icon"></div>
                                                </div>
                                            </div>
                                            <div class="form-group Buttons text-center">
                                                <button type="submit" class="btn Admin"><?php echo __('Admin Login'); ?></button>
                                            </div>
                                        </form>

                                        <form action="<?php echo route('login'); ?>" method="post">
                                            <?php echo csrf_field(); ?>

                                            <input type="hidden" name="email" value="wali@gmail.com" class="Input" id="" aria-describedby="emailHelp">
                                            <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                                <strong><?php echo $errors->first('email'); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                            <input type="hidden" name="password"  value="demo" class="Input" id="">
                                            
                                            <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                                <strong><?php echo $errors->first('password'); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                            <div class="form-group Buttons text-center">
                                                <button type="submit" class="btn Employee"><?php echo __('Employee Login'); ?></button>
                                            </div>
                                        </form>
                                        <div class="JoinUs">
                                            <p><?php echo __('Follow us'); ?></p>
                                            <a class="share_link facebook text-center" href="#"><i class="fab fa-facebook-f"></i></a><a class="share_link twitter text-center" href="#"><i class="fab fa-twitter"></i></a><a class="share_link linkin text-center" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="Right_side">
                                        <div class="SoftWare_name m-auto text-center">
                                            <img class="img-fluid" src="<?php echo asset('public/images/Vector-Image.png'); ?>" alt="Software Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.login-box -->
    <!-- jQuery 3 -->
    <script src="<?php echo asset('public/backend/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo asset('public/backend/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo asset('public/backend/plugins/iCheck/icheck.min.js'); ?>"></script>
    <script>
    $(function () {
    $('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' // optional
    });
    });
    </script>
</body>
</html>