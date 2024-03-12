<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}"/>
    <title>Practice</title>
</head>

@foreach($listingsall as $listing)
<div id="manage-order2">
<h2>{{$listing->name}} | Update or Cancel Booking</h2>
<a id="editbutton" href="/listings/{{$listing->id}}/edit">Edit</a>
<form method="POST" action="/listings/{{$listing->id}}">
    @csrf
    @method('DELETE')
    <button id="cancelorder">Cancel Order</button>
</form>
</div>
@endforeach