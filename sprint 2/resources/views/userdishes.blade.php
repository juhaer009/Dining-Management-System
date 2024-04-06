<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}" />
    <title>Practice</title>
</head>

<div class="navbar">
    <ul id="list1">
        @auth
        <li class="resname">Chef's Table</li>
        <li><a id="loggedin" href="/managehomeorder"> Welcome {{auth()->user()->name}}</a></li>
        <li><a id="manageorder" href="/manageorder"> Manage Order </a></li>
        <li class="logout">
            <form class="logout2" method="POST" action="/logout">
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
<div style="float: right; margin-right: 200px; margin-top: 20px">
    <a href="/rating"><button>Rate Dish</button></a>
</div>
<form id="onlineorder" method="POST" action="/selectdish">
    @csrf
    <h3 id="hditem">Select Dish</h3>
    @foreach($dishes as $dish)
    <input id="hdmenu" type="checkbox" name="menu[]" value="{{ $dish->name }}">
    <label id="hdmenubox" for="menu"> {{ $dish->name }}</label><br>
    @endforeach

    <button id="hdbutton" type="submit">Submit</button>
</form>