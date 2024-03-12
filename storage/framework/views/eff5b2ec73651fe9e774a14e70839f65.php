<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styles.css')); ?>"/>
    <title>Practice</title>
</head>



<?php $__currentLoopData = $listingsall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="mho">
<h2><?php echo e($listing->name); ?> | RATINGS & REVIEWS </h2>
<a id="orderreview" href="/ratingreview"> Review Your Order </a>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/mahmudul/laravel/testProject/resources/views/managehomeorder.blade.php ENDPATH**/ ?>