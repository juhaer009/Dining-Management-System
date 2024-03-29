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

    <div id="midsec">
        <div class="reservation">
            <a id="tablebook" href="/reserve">Book Table</a> 
        </div>
        <div class="reservation2">
            <a id="homedel" href="/onlineorder">Order Online</a>
        </div>
        <div class="reservation3">
            <a id="menubar" href="/menu">See Menu</a>
        </div>

        <div class="reservation4">
            <a id="menubar" href="/seenotice">See Notice</a>
        </div>

    </div>

    <div id="bottomsec">
        <p id="copyright">Copyright 2023 &copy; CSE471-Group02</p>
    </div>

</body>
</html>
<?php /**PATH /home/saikat/Desktop/oldproject/resources/views/welcomeuser.blade.php ENDPATH**/ ?>