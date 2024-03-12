<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styles.css')); ?>"/>
    <title>Practice</title>
    <style>
         .notice-container {
            text-align: center; 
            margin-top: 50px; 
            padding: 20px; 
            border: 1px solid #ccc; 
            background-color: #f4f4f4; 
            color: #df0e0e; 
        }
    </style>
</head>

<div class="navbar">
        <ul id = "list1">
            <?php if(auth()->guard()->check()): ?>
            <li class="resname">Chef's Table</li>            
            <li><a id="loggedin" href="/managehomeorder"> Welcome <?php echo e(auth()->user()->name); ?></a></li>
            <li><a id="manageorder" href="/manageorder"> Manage Order </a></li>
            <li class="logout">
                <form class = "logout2" method="POST" action="/logout">
                    <?php echo csrf_field(); ?>
                    <button type="submit">Logout</button>
                </form>
            </li>
            <?php else: ?>
            <li class="resname">Chef's Table</li>
            <li><a class="login" href="/login"> Login </a></li>
            <li><a class="regi" href="/register"> Register </a></li>
            <?php endif; ?>
        </ul>
</div>

<div  class="notice-container">
<h3>Important Notice</h3>
<?php $__currentLoopData = $seenotices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seenotice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($seenotice->notice); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /home/saikat/Desktop/oldproject/resources/views/seenotice.blade.php ENDPATH**/ ?>