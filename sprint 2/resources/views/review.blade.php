<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}"/>
    <title>Practice</title>
</head>

<div class="navbar">
        <ul id = "list1">
            @auth
            <li class="resname">Chef's Table</li>            
            <li><a id="loggedin" href="/managehomeorder"> Welcome {{auth()->user()->name}}</a></li>
            <li><a id="manageorder" href="/manageorder"> Manage Order </a></li>
            <li class="logout">
                <form class = "logout2" method="POST" action="/logout">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @else
            <li class="resname">Chef's Table</li>
            <li><a class="login" href="/login"> Login </a></li>
            <li><a class="regi" href="/register"> Register </a></li>
            @endauth
        </ul>
    </div>

<div id="reviewbox">
        <form  method="POST" action="/ratingreview">
            @csrf
        <p id="rrtitle"> PLEASE REVIEW YOUR ORDER </p>

        <label id="rrrating" for="rating">Rating</label><br>
        <input id="rrratingbox" type="number" name="rating" min="1" max="5"><br>


        <label id="rrreview" for="review">Write Review</label><br>
        <textarea id="rrreviewbox" name="review" rows="10"></textarea><br>
        <button id="rrbutton" type="submit">Submit</button>
        </form>
</div>