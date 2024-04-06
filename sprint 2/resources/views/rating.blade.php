<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}" />
    <title>Practice</title>
    <style>
        td{
            padding:30px;
        }
        button{
            background: #00bfff;
            padding:5px;
            border: none;
            border-radius:4px;
        }
    </style>
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

<table id="menutable">
    <tr>
        <th>Dish</th>
        <th>Rating</th>
        <th>Action</th>
    </tr>

    @foreach($dishes as $dish)
    <tr>
        <form method="POST" action="/rate">
            @csrf
            <input type="hidden" name="dish_name" value="{{ $dish->name }}">
            <td>{{ $dish->name }}</td>
            <td>
                <select name="rating">
                    <option value="1">1⭐</option>
                    <option value="2">2⭐</option>
                    <option value="3">3⭐</option>
                    <option value="4">4⭐</option>
                    <option value="5">5⭐</option>
                </select>
            </td>
            <td>
                <button type="submit">Submit</button>
            </td>
        </form>
    </tr>  
    @endforeach
</table>
