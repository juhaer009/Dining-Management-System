<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Selected dishes</title>
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
        h6{
            text-align: center;
        }
        </style>

</head>

<body>
    <h2>Dish Selected Users ({{$dish}})</h2>
    <h6>Rating: {{$averageRating}}⭐</h6>
    <hr>

    @foreach($selects as $select)
        <div>
            <p>Name: {{$select->name}}</p>
            <p>Email: {{$select->email }}</p>
            <p>Selected Item: {{$select->dish_name}}</p>
        </div>
            <hr>
    @endforeach

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

    </html>