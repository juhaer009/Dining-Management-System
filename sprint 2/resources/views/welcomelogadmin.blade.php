<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}"/>

    <style>
        /* Add or update styles for the Logout and Notice buttons */
        
        .logout button,
        .notice button {
            background-color: #007bff; /* Blue background color */
            color: #fff; /* White text color */
            padding: 8px 12px; /* Adjusted padding */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout button:hover,
        .notice button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
        #notice {
            text-align: center; /* Center the content in the Notice section */
            padding: 20px 0; /* Add some padding for better appearance */
            background-color: #f4f4f4; /* Light gray background color */
        }
        .notice a {
            text-decoration: none; /* Remove underline from links */
            color: #fff; /* Set link color */
        }
    </style>

    <title>Practice</title>
</head>
<body>
    <div class="navbar">

        <ul id="list1">
            <li class="resname">Chef's Table</li>     
            <li class="notice">
                <a class="logout2" href="/updatenotice"><button>Notice</button></a>
            </li>       
            <li class="logout">
                <form class = "logout2" method="POST" action="/adminlogout">
                    @csrf
                    <button style="background: #dc3545;" type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <div id="midsec">
        <div class="adminreservation">
            <a id="tablebook" href="/discount">Discount</a> 
        </div>
        <div class="adminreservation2">
            <a id="homedel" href="/adminreservations">Booking <br> Request</a>
        </div>
        <div class="adminreservation3">
            <a id="menubar" href="/updatemenu">Update Menu</a>

        </div>
        <div class="adminreservation4">
            <a id="menubar" href="/handleorder">Online order</a>
        </div>
        <div class="adminreservation5">
            <a id="menubar" href="/admindishes">Dishes</a>
        </div>


        </div><br>

    </div>

    <div id="bottomsec">
        <p id="copyright">Copyright 2024 &copy; CSE470-Group08</p>
    </div>


</body>
</html>
