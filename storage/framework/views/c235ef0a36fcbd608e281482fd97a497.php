
<?php $__env->startSection('title'); ?> <title>School | Student Passport</title> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?> 



    <div class="container">
        <?php if(session()->has('mssg')): ?>
            <?php echo e(session('mssg')); ?>

        <?php endif; ?>
        <div ></div>
            <form
                 action="<?php echo e(Route('update.img', $student->id)); ?>"
                 method="POST"
                 enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PATCH"); ?>
                <div class="row">
                    <div class="col">
                        <label for="passport">Edit Image</label>
                        <input type="file" accept="image/jepg, image/png,  image/jpg" name="passport" id='passport' class="form-control <?php $__errorArgs = ['passport'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__errorArgs = ['passport'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <span><?php echo e($message); ?> </span>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col mt-3">
                        <button class="btn btn-primary">Update Image <?php echo e($student->id); ?> </button>
                    </div>
                </div>

            </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Peter Bette\Documents\LARAVEL\school\school\resources\views/students\passport.blade.php ENDPATH**/ ?>