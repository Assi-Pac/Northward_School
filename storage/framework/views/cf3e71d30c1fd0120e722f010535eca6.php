
<?php $__env->startSection('title'); ?> <title>School | Student Login</title> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="login-page">
        <div class="container-sm mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 col-lg-5 shadow bg-white rounded py-3">
                    <div class="login-title pt-2 pb-4"> 
                        <h3 class="text-center">Students Login Panel</h3>
                    </div>
                    <form action="" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="d-flex flex-column gap-3">
                            <input type="text" placeholder="Matric number" class="form-control <?php $__errorArgs = ['matric_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>}" name="matric_number">
                            <input type="password" name="password" class="form-control <?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="password">
                            
                            <button type="submit" class="btn btn-primary ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Peter Bette\Documents\LARAVEL\school\school\resources\views/auth/login.blade.php ENDPATH**/ ?>