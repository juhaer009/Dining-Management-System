<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f4f4f4; /* Light gray background */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .update-menu-container {
            width: 400px; /* Adjusted width */
            background-color: #fff; /* White form background */
            padding: 30px; /* Adjusted padding */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #333; /* Dark gray heading color */
            text-align: center;
        }

        hr {
            border-color: #333; /* Dark gray border color */
        }

        .form-control {
            margin-bottom: 20px; /* Adjusted margin-bottom */
            border: 1px solid #ddd; /* Light gray border for form controls */
        }

        .btn-primary {
            background-color: #333; /* Dark gray button background color */
            border-color: #333; /* Dark gray button border color */
        }

        .btn-primary:hover {
            background-color: #222; /* Slightly darker gray on hover */
            border-color: #222; /* Slightly darker gray on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="update-menu-container">
            <h3>Update Menu</h3>
            <hr>
            <form method="post" action="{{route('updateinfo')}}">
                @if(Session::has('del success'))
                    <div class="alert alert-success">{{Session::get('del success')}}</div>
                @endif
                @if(Session::has('not del'))
                    <div class="alert alert-success">{{Session::get('not del')}}</div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('not'))
                    <div class="alert alert-success">{{Session::get('not')}}</div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="add">Add new item</label>
                    <input type="text" class="form-control" placeholder="" name="add" value="">
                </div>

                <div class="form-group">
                    <label for="nprice">Add new item's price</label>
                    <input type="text" class="form-control" placeholder="" name="nprice" value="">
                </div>

                <div class="form-group">
                    <label for="del">Delete an item</label>
                    <input type="text" class="form-control" placeholder="" name="del" value="">
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Update</button>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
