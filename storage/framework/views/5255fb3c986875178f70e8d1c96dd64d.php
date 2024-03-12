
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

<form  id="onlineorder" method="POST" action="/onlineorder">
    <?php echo csrf_field(); ?>
    <p id="hddeli">ONLINE DELIVERY</p>
    <?php
        $totalCost = 0;
    ?>
<label id="hdname" for="name">Name</label><br>
<input id="hdnamebox" type="text" name="name"><br>
<label id="hdcont" for="email">Email</label><br>
<input id="hdcontbox" type="email" name ="email"><br>
<label id="hdaddr" for="address">Address</label><br>
<input id="hdaddrbox" type="text" name = "address"><br>
<p id="hditem">Select Item</p>
<?php $__currentLoopData = $listingsall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input id="hdmenu" type="checkbox" name="menu" value="<?php echo e(data_get($listing, 'Item name')); ?>" >
    <label id="hdmenubox" for="menu"> <?php echo e(data_get($listing, 'Item name')); ?> - <?php echo e($listing->Price); ?></label><br>
    <?php
            $totalCost += $listing['Price'];
    ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<button id="hdbutton" type="submit">Submit</button>
</form>


<?php /**PATH /home/saikat/Desktop/oldproject/resources/views/homedel.blade.php ENDPATH**/ ?>