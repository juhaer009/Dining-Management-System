<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styles.css')); ?>"/>
    <title>Practice</title>
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

<table id="menutable">
    <tr>
        <th>Items</th>
        <th>Price</th>
    </tr>

    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(data_get($menu, 'Item name')); ?></td>
        <td><?php echo e($menu->Price); ?></td>
    </tr>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH /home/saikat/Desktop/oldproject/resources/views/menu.blade.php ENDPATH**/ ?>