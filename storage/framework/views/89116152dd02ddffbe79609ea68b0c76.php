<form  method="POST" action="/listings/<?php echo e($listing->id); ?>/edit">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="name">Name</label><br>
    <input type="text" name="name" value="<?php echo e($listing->name); ?>"><br>
    <label for="email">Email</label><br>
    <input type="email" name ="email" value="<?php echo e($listing->email); ?>"><br>
    <label for="date">Date</label><br>
    <input type="date" name = "date" value="<?php echo e($listing->date); ?>"><br>
    <label for="phone">Phone</label><br>
    <input type="tel" name="phone" value="<?php echo e($listing->phone); ?>"><br>
    <label for="guests">No. of guests</label><br>
    <input type="number" name="guests" value="<?php echo e($listing->guests); ?>"><br>
    <label for="time">Time</label><br>
    <input type="time" name="time" value="<?php echo e($listing->time); ?>"><br>
    <label for="description">Description</label><br>
    <textarea name="description" rows="10"><?php echo e($listing->description); ?></textarea><br>
    <button type="submit">Update</button>
</form>
<?php /**PATH /home/mahmudul/laravel/testProject/resources/views/edit.blade.php ENDPATH**/ ?>