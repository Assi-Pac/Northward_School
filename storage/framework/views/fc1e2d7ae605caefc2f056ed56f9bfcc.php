
<?php $__env->startSection('title'); ?> <title> E-school | Student Portal</title> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-xxl  border-bottom py-3">
        <div class="row align-items-center justify-conten-between">
            <div class="col-md-3">
                <div class="row d-flex ps-2"> 
                    <ul class="navbar-nav d-flex align-items-center flex-row gap-3" >
                        <li class="nav-item">
                            <a href="#" class="nav-link">Check Result</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Get IDCard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 student-info">
                <h5><?php echo e($student->last_name . " " . $student->other_names . " " . $student->matric_number); ?></h5>
            </div>
            <div class="col-md-4 bread-crums lead">
                <h6 ><span class="text-muted" >You are here: <?php echo e('Home'); ?> > </span><?php echo e('Undergraduate'); ?> </h6>
            </div>
        </div>
    </div>
    <div class="container-xxl my-2">
        <div class="row">
            <div class="col-md-6 ">
                <div class="row">
                    <div class="col">
                         <table class="table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>Matric Number </th>
                                    <th><?php echo e($student->matric_number); ?></th>
                                </tr>
                                
                                <tr>
                                    <th>Faculty</th>
                                    <th><?php echo e($student->faculty); ?></th>
                                </tr>
                                <tr>
                                    <th>Department </th>
                                    <th><?php echo e($student->department); ?></th>
                                </tr>
                                <tr>
                                    <th>Email </th>
                                    <th><?php echo e($student->email); ?></th>
                                </tr>
                                <tr>
                                    <th>Phone </th>
                                    <th><?php echo e($student->phone); ?></th>
                                </tr>
                                <tr>
                                    <th>Entry Year </th>
                                    <th><?php echo e($student->year_of_admission); ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                
                <div class="row">
                    <form 
                        action="<?php echo e(Route('update.email', $student->id)); ?>"
                        
                        method="POST"
                        class="col "
                        >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <?php if(session()->has('mssg')): ?>
                        <div class="row">
                            <span class="text-center">
                                <?php echo e(session('mssg')); ?>

                            </span>
                        </div>

                        <?php endif; ?>
                        <div class="row gap-3">
                            <div class="row col-md-12 d-md-flex justify-content-between align-items-center">
                                <div class="col-md-6 ">
                                    <label >Email</label>
                                    <input type="text" value="<?php echo e(old('email')); ?>" name="email" class="form-control <?php $__errorArgs = ['email'];
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
                                        <div class="invalid-feedback">
                                            <span > <?php echo e($message); ?> </span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6 pt-2">
                                    
                                    <input type="submit" value="Update Email Address" class="btn btn-primary">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <form 
                        action="<?php echo e(Route('update.phone', $student->id)); ?>"
                        
                        method="POST"
                        >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="row gap-3">
                            <div class="col-md-6">
                                <label for="">Phone</label>
                                <input type="text" name="phone" value="<?php echo e(old('phone')); ?>" class="form-control <?php $__errorArgs = ['phone'];
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
                                        <span > <?php echo e($message); ?> </span>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary">Update Phone Number</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            
            <div class="col-md-6 py-3">
                <div class="row">
                    <div class="col">
                        <a href="<?php echo e(Route('edit.img', $student->id)); ?>" class="btn btn-primary btn-sm">Edit Image</a>
                    </div>
                    <div class="col">
                        <img src="<?php echo e($student->passport ? asset('storage/' . $student->passport ) : asset('img/user.jpg')); ?>"  width="100" alt="<?php echo e($student->last_name); ?>">
                    </div>
                </div>


                
            </div>
        </div>


    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Peter Bette\Documents\LARAVEL\school\school\resources\views/students/index.blade.php ENDPATH**/ ?>