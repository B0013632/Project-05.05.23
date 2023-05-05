<!DOCTYPE html>
    <head> 
        <meta charset="UTF-8"> 
        <title>Tud Bar</title> 
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
        <!-- Bootstrap 3.3.7 --> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
         
    </head> 
    <body > 
        <nav class="navbar navbar-default navbar-static-top"> 
            <ul class="nav navbar-nav"> 
                <li><a href="<?php echo e(route('employees.index')); ?>">Employees</a></li> 
                <li><a href="<?php echo e(route('customers.index')); ?>">Customers</a></li> 
				<li><a href="<?php echo e(route('tables.index')); ?>">Tables</a></li> 
            </ul> 
        </nav> 
        <div id="page-content-wrapper"> 
            <div class="container-fluid"> 
                <div class="row"> 
                    <div class="col-lg-2"></div> 
                    <div class="col-lg-8"> <?php echo $__env->yieldContent('content'); ?> </div> 
                    <div class="col-lg-2"></div> 
                </div> 
            </div> 
         </div> 
    </body> 
</html><?php /**PATH C:\Users\alexj\laravel\BarDatabaseProject\resources\views/layouts/app.blade.php ENDPATH**/ ?>