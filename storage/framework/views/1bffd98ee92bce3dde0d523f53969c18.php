
<?php $__env->startSection('title'); ?>
    <title>E-school | Registration Portal </title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('head-tags'); ?>
<style>
    .lab{
        color: tomato;
    }
    form label{
        padding: 10px 0;
    }
    /* .registration form{
        position: relative;
    }
    .registration form::after{
        content: ' ';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: .3;
        background-image: url("<?php echo e(asset('img/logo.png')); ?>");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 300px;
    } */
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h2 class="text-center">
    <?php if(session()->has('mssg')): ?>
        <span><?php echo e(session('mssg')); ?></span>
    <?php endif; ?>
    
</h2>
    <section class="registration">
        <div class="container-md align-items-center">
            <div class="grid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10 col-lg-10 shadow rounded bg-white mt-5 py-4">
                        <div class="registration-title my-3">
                            <h4 class="text-muted">Students Registration Form</h4>
                        </div>
                        <form action="<?php echo e(Route('students.register')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <img src="<?php echo e(asset('img/user.jpg')); ?>" class="img-fluid"  id="img" style="width: 100px; height: 100px" alt="">
                                </div>
                                <label for="passport" class="btn mt-2" style="width: 30%">Upload Passport</label>
                                <input type="file" name="passport" accept="image/jepg, image/png, image/jpg" class="d-none" id="passport">
                                 <?php $__errorArgs = ['passport'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <span> <?php echo e($message); ?> </span>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Last Name <span class="lab">*</span></label>
                                    <input type="text" value="<?php echo e(old('last_name')); ?>" name="last_name" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"> 
                                     <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <span>
                                               <?php echo e($message); ?>

                                            </span>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label >Other Names <span class="lab">*</span></label>
                                    <input type="text" name="other_names" value="<?php echo e(old("other_names")); ?>" class="form-control <?php $__errorArgs = ['other_names'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                </div>
                                <?php $__errorArgs = ['other_names'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <span> $message</span>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Matriculation no <span class="lab">*</span></label>
                                    <input type="text" value="<?php echo e(old('matric_number')); ?>" name="matric_number" class="form-control <?php $__errorArgs = ['matric_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"> 
                                     <?php $__errorArgs = ['matric_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <span>
                                               <?php echo e($message); ?>

                                            </span>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Faculty <span class="lab">*</span></label>
                                    <input name="faculty" type="text" value="<?php echo e(old('faculty')); ?>" class="form-control <?php $__errorArgs = ['faculty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ">
                                    <?php $__errorArgs = ['faculty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="alert ">
                                            <?php echo e($message); ?>

                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label >Department <span class="lab">*</span></label>
                                    <select name="department" id="department" class="form-select <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value="" selected="" disabled>Select your department</option>
                                        <option value="Surveying and Geoinformatics">SURVEYING AND GEOINFORMATICS</option>
                                    </select>
                                    </span>
                                    <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Gender <span class="lab">*</span></label>
                                        <select name="gender" id="gender" class="form-select <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <option value="" selected="" disabled>Select your Gender</option>
                                            <option value="Male">Male</option>
                                            <option value=Female">Female</option>
                                        </select>
                                    </div>
                                    <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label > Level <span class="lab">*</span></label>
                                    <select name="level" id="level" class="form-select <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value="" selected="" disabled>Select your level </option>
                                        <option value="100 Level">100 Level</option>
                                        <option value="200 Level">200 Level</option>
                                        <option value="300 Level">300 Level</option>
                                        <option value="400 Level">400 Level</option>
                                        <option value="500 Level">500 Level</option>
                                    </select>
                                </div>
                                <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <span><?php echo e($message); ?></span>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Email <span class="lab">*</span></label>
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback">
                                            <span><?php echo e($message); ?></span>
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
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <span> <?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Year of admission <span class="lab">*</span></label>
                                    <select name="year_of_admission" class="form-select <?php $__errorArgs = ['year_of_admission'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value="" selected disabled>Select year of admission</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                    <?php $__errorArgs = ['year_of_admission'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <span> <?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="passport">Age <span class="lab">*</span></label>
                                    <input type="number" name="age"  class="form-control <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <span> <?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label >Fess Status</label>
                                    <select name="school_fess_status" id="" class="form-select">
                                        <option value="" selected="" disabled>Select fee status</option>
                                        <option value="PAID">PAID</option>
                                        <option value="PAID">NOT PAID</option>
                                    </select>
                                    <?php $__errorArgs = ['school_fess_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <span> <?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label >State of Origin</label>
                                    <select name="state_of_origin" id="" class="form-select <?php $__errorArgs = ['state_of_origin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value="" selected="" disabled>Select state of Origin</option>
                                        <option value="ABUJA">ABUJA FCT</option>
                                        <option value="ABIA">ABIA</option>
                                        <option value="ADAMAWA">ADAMAWA</option>
                                        <option value="AKWA IBOM">AKWA IBOM</option>
                                        <option value="ANAMBRA">ANAMBRA</option>
                                        <option value="BAUCHI">BAUCHI</option>
                                        <option value="BAYELSA">BAYELSA</option>
                                        <option value="BENUE">BENUE</option>
                                        <option value="BORNO">BORNO</option>
                                        <option value="CROSS RIVER">CROSS RIVER</option>
                                        <option value="DELTA">DELTA</option>
                                        <option value="EBONYI">EBONYI</option>
                                        <option value="EDO">EDO</option>
                                        <option value="EKITI">EKITI</option>
                                        <option value="ENUGU">ENUGU</option>
                                        <option value="GOMBE">GOMBE</option>
                                        <option value="IMO">IMO</option>
                                        <option value="JIGAWA">JIGAWA</option>
                                        <option value="KADUNA">KADUNA</option>
                                        <option value="KANO">KANO</option>
                                        <option value="KATSINA">KATSINA</option>
                                        <option value="KEBBI">KEBBI</option>
                                        <option value="KOGI">KOGI</option>
                                        <option value="KWARA">KWARA</option>
                                        <option value="LAGOS">LAGOS</option>
                                        <option value="NASSARAWA">NASSARAWA</option>
                                        <option value="NIGER">NIGER</option>
                                        <option value="OGUN">OGUN</option>
                                        <option value="ONDO">ONDO</option>
                                        <option value="OSUN">OSUN</option>
                                        <option value="OYO">OYO</option>
                                        <option value="PLATEAU">PLATEAU</option>
                                        <option value="RIVERS">RIVERS</option>
                                        <option value="SOKOTO">SOKOTO</option>
                                        <option value="TARABA">TARABA</option>
                                        <option value="YOBE">YOBE</option>
                                        <option value="ZAMFARA">ZAMFARA</option>
                                    </select>
                                    
                                    <?php $__errorArgs = ['state_of_origin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <span> <?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <span> <?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>     
                                </div>
                                <div class="col-md-6">
                                    <label>Confrim Password <span class="lab">*</span></label>
                                    <input type="password" name="password_confirmation" placeholder="******" class="form-control">   
                                </div>
                            </div>
                            <div class="input-group py-3">
                                <button type="submit" class=" btn btn-large btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let passport = document.getElementById('passport');
        let img = document.querySelector("#img");
        passport.onchange = function(){
            img.src = URL.createObjectURL(passport.files[0])
        }

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Peter Bette\Documents\LARAVEL\school\school\resources\views/students/register.blade.php ENDPATH**/ ?>