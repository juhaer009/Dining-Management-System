<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styles.css')); ?>"/>
    <title>Practice</title>
</head>

<div id="reviewbox">
        <form  method="POST" action="/ratingreview">
            <?php echo csrf_field(); ?>
        <p id="rrtitle"> PLEASE REVIEW YOUR ORDER </p>

        <label id="rrrating" for="rating">Rating</label><br>
        <input id="rrratingbox" type="number" name="rating" min="1" max="5"><br>


        <label id="rrreview" for="review">Write Review</label><br>
        <textarea id="rrreviewbox" name="review" rows="10"></textarea><br>
        <button id="rrbutton" type="submit">Submit</button>
        </form>
</div><?php /**PATH /home/mahmudul/laravel/testProject/resources/views/review.blade.php ENDPATH**/ ?>