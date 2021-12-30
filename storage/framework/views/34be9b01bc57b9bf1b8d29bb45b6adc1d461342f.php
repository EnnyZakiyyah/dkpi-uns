


<?php $__env->startSection('title', 'Halaman Register'); ?>

<?php $__env->startSection('container'); ?>
<br />
<br />

<section class="sign-up">
    <div class="container2">
        <div class="signup-content">
            <div class="signin-image mt-5 pt-5">
                <figure><img src="<?php echo e(url('/assets/img/login-bg.png')); ?>" alt="sing in image"></figure>
                
            </div>

            <div class="signin-form">
                <h2 class="form-title">Registration Form</h2>
                <form method="POST" class="register-form" id="login-form" action="/register">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" placeholder="Enter your name" id="name" autofocus required value="<?php echo e(old('name')); ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="email" placeholder="Enter a valid email address" id="email" autofocus required value="<?php echo e(old('name')); ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                    </div>
                    <div class="row mb-4 px-3 mt-2"> <small class="font-weight-bold">Already registered? <a class="text-danger " href="/login">Login</a></small> </div>
                    <div class="form-group form-button">
                        <?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('success')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
</div>  
<?php endif; ?>
                        <input type="submit" class="form-submit" role="button" aria-pressed="true" value="Register"/>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

                        
                    

        
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('login/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder (3)\dkpi-uns\resources\views/register/index.blade.php ENDPATH**/ ?>