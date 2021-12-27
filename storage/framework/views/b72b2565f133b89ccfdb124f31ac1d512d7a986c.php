


<?php $__env->startSection('title', 'Halaman Login'); ?>

<?php $__env->startSection('container'); ?>
<br />
<br />

<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('success')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
</div>  
<?php endif; ?>

<?php if(session()->has('loginError')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo e(session('loginError')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
</div>  
<?php endif; ?>

 <!-- Sing in  Form -->
 <section class="sign-in">
            <div class="container2">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo e(asset('assets3/images/why-us.png')); ?>" alt="sing in image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="/login">
                        <?php echo csrf_field(); ?>
                            <div class="form-group <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" placeholder="Enter a valid email address" id="email" autofocus required value="<?php echo e(old('email')); ?>"/>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('login/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New DKPI\dkpi-uns\resources\views/login/index.blade.php ENDPATH**/ ?>