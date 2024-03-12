<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Reservations request</title>
<<<<<<< HEAD
    <style>
        body {
            background-color: #f4f4f4; /* Light gray background */
            padding: 20px; /* Added padding for better appearance */
        }

        h2 {
            color: #333; /* Dark gray heading color */
            text-align: center;
            margin-bottom: 20px; /* Added margin-bottom for spacing */
        }

        hr {
            border-color: #333; /* Dark gray border color */
            margin-top: 20px; /* Added margin-top for spacing */
            margin-bottom: 20px; /* Added margin-bottom for spacing */
        }

        p {
            color: #333; /* Dark gray text color */
            margin-bottom: 10px; /* Added margin-bottom for spacing */
        }

        form {
            margin-bottom: 20px; /* Added margin-bottom for spacing */
        }

        .btn-primary {
            background-color: #333; /* Dark gray button background color */
            border-color: #333; /* Dark gray button border color */
            width: 100%; /* Make the button full width */
        }

        .btn-primary:hover {
            background-color: #222; /* Slightly darker gray on hover */
            border-color: #222; /* Slightly darker gray on hover */
        }
    </style>
=======
>>>>>>> origin/main
</head>
<body>
    <h2>Reservations request</h2>
    <hr>

    <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($reservation->accept == null): ?>

            <div>
                <p>Name: <?php echo e($reservation->name); ?></p>
                <p>Email: <?php echo e($reservation->email); ?></p>
                <p>Date: <?php echo e($reservation->date); ?></p>
                <p>Phone: <?php echo e($reservation->phone); ?></p>
                <p>No. of people: <?php echo e($reservation->guests); ?></p>
                <p>Request: <?php echo e($reservation->description); ?></p>
                <form style="display: inline-block;" action="<?php echo e(route('reservation', ['id' => $reservation->id])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <button class="btn btn-primary" type="submit">Accept</button>
                </form>
                <form style="display: inline-block;" method="post" action="<?php echo e(route('reservations.delete', ['id' => $reservation->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button class="btn btn-primary" type="submit">Reject</button>
                </form>
            </div>
            <hr>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
            <p>Name: <?php echo e($reservation->name); ?></p>
            <p>Email: <?php echo e($reservation->email); ?></p>
            <p>Date: <?php echo e($reservation->date); ?></p>
            <p>Phone: <?php echo e($reservation->phone); ?></p>
            <p>No. of people: <?php echo e($reservation->guests); ?></p>
            <p>Request: <?php echo e($reservation->description); ?></p>
            <form  style="display: inline-block;" action="<?php echo e(route('reservation', ['id' => $reservation->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <button class="btn btn-block btn-primary" type="submit">Accept</button>
            </form>
            <form  style="display: inline-block;" method="post" action="<?php echo e(route('reservations.delete', ['id' => $reservation->id])); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button class="btn btn-block btn-primary" type="submit">Reject</button>
            </form>
            <hr>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html><?php /**PATH /home/saikat/Desktop/oldproject/resources/views/adminreservations.blade.php ENDPATH**/ ?>