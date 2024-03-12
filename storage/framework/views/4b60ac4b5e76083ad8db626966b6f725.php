<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class ="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Booking Request</h3>
                <hr>
                <form method="post" action="<?php echo e(route('reqAccept')); ?>">
                    <?php if(session('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                    <?php endif; ?>
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                    <?php endif; ?>
                    <?php if(Session::has('not')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('not')); ?></div>
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="" name="name" value="Jhon">
                    </div>

                    <div class="form-group">
                        <label for="people">Number of people</label>
                        <input type="text" class="form-control" placeholder="" name="people" value="5">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Accept</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html><?php /**PATH /home/saikat/Desktop/oldproject/resources/views/bookreq.blade.php ENDPATH**/ ?>