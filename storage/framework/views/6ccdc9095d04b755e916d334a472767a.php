
<!DOCTYPE html>
<html lang="en">
<head>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f0f0f0; /* Light gray background */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 300px;
            background-color: #ffffff; /* White background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #007bff; /* Bootstrap primary color */
        }

        hr {
            border-color: #007bff; /* Bootstrap primary color */
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff; /* Bootstrap primary color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Slightly darker color on hover */
            border-color: #0056b3; /* Slightly darker color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h3 class="text-center">Login</h3>
            <hr>
            <form method="post" action="<?php echo e(route('authenticateAdmin')); ?>">
                <?php if(Session::has('invalid')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('invalid')); ?></div>
                <?php endif; ?>
                <?php if(Session::has('not')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('not')); ?></div>
                <?php endif; ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" value="">
                    <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" value="">
                    <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class ="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Login</h3>
                <hr>
                <form method="post" action="<?php echo e(route('authenticateAdmin')); ?>">
                    <?php if(Session::has('invalid')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('invalid')); ?></div>
                    <?php endif; ?>
                    <?php if(Session::has('not')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('not')); ?></div>
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" value="">
                        <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" value="">
                        <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
<?php /**PATH /home/saikat/Desktop/oldproject/resources/views/adminlog.blade.php ENDPATH**/ ?>