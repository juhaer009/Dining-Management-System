<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styles.css')); ?>"/>
    <title>Practice</title>
</head>
<body>
    <div class="navbar">
        <ul id = "list1">
            <?php if(auth()->guard()->check()): ?>
            <li class="login">Welcome <?php echo e(auth()->user()->name); ?></li>
            <li><a class="regi" href="/manage-order"> Manage Order </a></li>
            <li class="logout">
                <form method="POST" action="/logout">
                    <?php echo csrf_field(); ?>
                    <button type="submit">Logout</button>
                </form>
            </li>
            <?php else: ?>
            <li><a class="login" href="/login"> Login </a></li>
            <li><a class="regi" href="/register"> Register </a></li>
            <?php endif; ?>
        </ul>
    </div>
    <div>
        <form class="login-user" method = "POST" action="/users/authenticate">
        <?php echo csrf_field(); ?>
            <p id="lulogin">Login</p>
            <label id="lumail" for="email">Email</label><br>
            <input id="lumailbox" type="text" id="email" name="email"><br>
            <label id="lupass" for="password">Password</label><br>
            <input id="lupassbox" type="password" id="password" name="password"><br>
            <button id="lusubmit" type="submit">Sign In</button>
        </form>
    </div>
</body>
</html><?php /**PATH /home/saikat/Desktop/oldproject/resources/views/users/login.blade.php ENDPATH**/ ?>