<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}"/>
    <title>Practice</title>
    <style>
         .notice-container {
            text-align: center; 
            margin-top: 50px; 
            padding: 20px; 
            border: 1px solid #ccc; 
            background-color: #f4f4f4; 
            color: #df0e0e; 
        }
    </style>
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

<div  class="notice-container">
<h3>Important Notice</h3>
@foreach($seenotices as $seenotice)
    <p>{{$seenotice->Notice}}</p>
@endforeach
</div>