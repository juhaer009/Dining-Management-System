<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styles.css')); ?>"/>
    <title>Practice</title>
</head>

<?php $__currentLoopData = $listingsall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="manage-order2">
<h2><?php echo e($listing->name); ?> | Update or Cancel Booking</h2>
<a id="editbutton" href="/listings/<?php echo e($listing->id); ?>/edit">Edit</a>
<form method="POST" action="/listings/<?php echo e($listing->id); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button id="cancelorder">Cancel Order</button>
</form>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/saikat/Desktop/oldproject/resources/views/list.blade.php ENDPATH**/ ?>