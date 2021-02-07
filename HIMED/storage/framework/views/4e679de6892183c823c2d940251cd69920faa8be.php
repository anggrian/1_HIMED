<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" href="<?php echo e(asset('gentelella/production/images/favicon.ico')); ?>" type="image/ico" />
    
        <title><?php echo $__env->yieldContent('title'); ?></title>
    
        <!-- Bootstrap -->
        <link href="<?php echo e(asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo e(asset('gentelella/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo e(asset('gentelella/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo e(asset('gentelella/vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">
        
        <!-- bootstrap-progressbar -->
        <link href="<?php echo e(asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo e(asset('gentelella/vendors/jqvmap/dist/jqvmap.min.css')); ?>" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo e(asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">
    
        <!-- Custom Theme Style -->
        <link href="<?php echo e(asset('gentelella/build/css/custom.min.css')); ?>" rel="stylesheet">
      </head>

    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form class="form-signin" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <h1>Create Account</h1>
                            <div>
                                <input type="text" name="name" id="inputName" value="<?php echo e(old('name')); ?>" class="form-control <?php echo e($errors->has('name')); ?>" placeholder="User Name" required="" />
                                <?php if($errors->has('name')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('name')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div> 
                                <input type="email" name="email" id="inputEmail" value="<?php echo e(old('email')); ?>" class="form-control <?php echo e($errors->has('email')); ?>" placeholder="Email Address" required="" />
                                <?php if($errors->has('email')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('email')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <input type="password" name="password" id="inputPassword" value="<?php echo e(old('password')); ?>" class="form-control <?php echo e($errors->has('password')); ?>" placeholder="Password" required="" />
                                <?php if($errors->has('password')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('password')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div>
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-sign-in cc_pointer"></i> 
                                    <br>
                                    <p>submit</p>
                                </button>
                            </div>
                            
                            
                            <div class="separator"></div>
                        </form>
                    </section>

                    
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\1_HIMED\HIMED\resources\views/Backend_admin/User_admin/register.blade.php ENDPATH**/ ?>