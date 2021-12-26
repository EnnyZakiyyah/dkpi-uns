


<?php $__env->startSection('title', 'Halaman Register'); ?>

<?php $__env->startSection('container'); ?>
<br />
<br />


<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5 pt-5">
                    <br />
                    <div class="row px-3 justify-content-center mt-5 mb-5 border-line"> <img src="<?php echo e(url('/assets/img/login-bg.png')); ?>" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <form action="/register" method="POST">
                            <?php echo csrf_field(); ?>
                        <h6 class="mb-0 mr-4 mt-2">Registration Form</h6>
                        <div class="facebook2 text-center mr-3">
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        </div>
                        <div class="twitter2 text-center mr-3">
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </div>
                        <div class="instagram2 text-center mr-3">
                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm"></h6>
                        </label>
                        <input class="mb-4 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="name" placeholder="Enter name" id="name"> </div>
                    <div class="row px-3"> <label class="mb-1" required value="<?php echo e(old('name')); ?>">
                            <h6 class="mb-0 text-sm"></h6>
                        </label>
                        
                    <div class="row px-3">
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm"></h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address" id="email" required value="<?php echo e(old('email')); ?>"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm"></h6>
                        </label> <input type="password" name="password" placeholder="Enter password" id="password" required> </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <button class="btn btn-blue text-center" role="button" aria-pressed="true">Register</button>
                    <div class="row mb-4 px-3 mt-2"> <small class="font-weight-bold">Already registered? <a class="text-danger " href="/login">Login</a></small> </div>
                </form>
                </div>
            </div>
        </div>

        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('login/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dkpi-uns\resources\views/register/index.blade.php ENDPATH**/ ?>