<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}"/>
    <title>Practice</title>
</head>



@foreach($listingsall as $listing)
<div id="mho">
<h2>{{$listing->name}} | RATINGS & REVIEWS </h2>
<a id="orderreview" href="/ratingreview"> Review Your Order </a>

</div>
@endforeach