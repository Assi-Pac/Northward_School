
<?php $__env->startSection('title'); ?>
    <title>E-school | Registration Portal </title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('head-contents'); ?>
<style>
    .lab{
        color: tomato;
    }
    form label{
        padding: 10px 0;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="registration">
        <div class="container-md align-items-center">
            <div class="grid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10 col-lg-10 shadow rounded bg-white mt-5 py-4">
                        <div class="registration-title">
                            <h4>Student Registration Form</h4>
                        </div>
                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Surname <span class="lab">*</span></label>
                                    <input type="text" value="<?php echo e(old('surname')); ?>" name="surename" class="form-control <?php $__errorArgs = ['surename'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"> 
                                     <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="alert invalid-feedback" role="alert">
                                            <span>
                                                $message</span>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label >Other Names <span class="lab">*</span></label>
                                    <input type="text" name="othernames" value="<?php echo e(old("othernames")); ?>" class="form-control <?php $__errorArgs = ['othernames'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                </div>
                                <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="alert invalid-feedback" role="alert">
                                        <span> $message</span>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Faculty <span class="lab">*</span></label>
                                    <input type="text" value="<?php echo e(old('faculty')); ?>" class="form-control <?php $__errorArgs = ['faculty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ">
                                    <?php $__errorArgs = ['faculty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="alert ">

                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label >Department <span class="lab">*</span></label>
                                    <select name="department" id="department" class="form-select">
                                        <option value="" selected="" disabled>Select your department</option>
                                        <option value="Surveying and Geoinformatics">SURVEYING AND GEOINFORMATICS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Gender <span class="lab">*</span></label>
                                        <select name="department" id="department" class="form-select">
                                            <option value="" selected="" disabled>Select your Gender</option>
                                            <option value="Male">Male</option>
                                            <option value=Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label > Level <span class="lab">*</span></label>
                                    <select name="level" id="level" class="form-select">
                                        <option value="" selected="" disabled>Select your level </option>
                                        <option value="100 Level">100 Level</option>
                                        <option value="200 Level">200 Level</option>
                                        <option value="300 Level">300 Level</option>
                                        <option value="400 Level">400 Level</option>
                                        <option value="500 Level">500 Level</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Email <span class="lab">*</span></label>
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="aler " role="alert">
                                            <span>$message</span>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label >Phone</label>
                                    <input type="text" name="phone" class="form-control <?php $__errorArgs = ["phone"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Year of admission <span class="lab">*</span></label>
                                    <select name="yearOfAdmission" class="form-select">
                                        <option value="" selected disabled>Select year of admission</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="passport">Passport <span class="lab">*</span></label>
                                    <input type="file" class="form-control <?php $__errorArgs = ['passport'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Nationality</label>
                                    <input type="text" class="form-control name="nationality" <?php $__errorArgs = ["nationality"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                </div>
                                <div class="col-md-6">
                                    <label >State of Origin</label>
                                    <select name="state_of_origin" id="" class="form-select">
                                        <option value="" selected disabled>Select state of Origin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Password</label>
                                    <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="*******" >
                                </div>
                                <div class="col-md-6">
                                    <label>Confrim Password <span class="lab">*</span></label>
                                    <input type="password" name="confirm_password" placeholder="******" class="form-control">          
                                </div>
                            </div>
                            <div class="input-group py-3">
                                <button type="submit" class=" btn btn-large btn-warning">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Peter Bette\Documents\LARAVEL\school\school\resources\views/auth/register.blade.php ENDPATH**/ ?>