
<?php $__env->startSection('title'); ?> <title>E-School | Student IDcard</title><?php $__env->stopSection(); ?>
<?php $__env->startSection('head-contents'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/card.css')); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="IDCard">
        <div class="main-wrapper">
            
            <div class="passport-wrapper">
                <div class="passport passport-front">
                    <div class="passport-top bg-primary" style="height: 20%; width: 100%">

                    </div>
                    <div class="passport-img">
                        <img src="<?php echo e(asset('/img/user.jpg')); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="passport-info">

                    </div>
                </div>
                
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Peter Bette\Documents\LARAVEL\school\school\resources\views/students/getIDCard.blade.php ENDPATH**/ ?>