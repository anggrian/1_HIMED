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
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        
                        <form method="POST" action="<?php echo e(route ('login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <h1>Form Login </h1>
                            <?php if($pesan = Session::get('danger')): ?>
                            <div class="alert alert-danger"><?php echo e($pesan); ?></div>
                            <?php endif; ?>
                            <div>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Username" required/>
                            </div>
                            <div>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required/>
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
<?php /**PATH C:\xampp\htdocs\1_HIMED\HIMED\resources\views/Backend_admin/User_admin/login.blade.php ENDPATH**/ ?>