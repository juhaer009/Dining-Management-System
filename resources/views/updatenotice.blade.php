<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .discount-container {
            width: 400px; 
            background-color: #fff; 
            padding: 30px; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #333; 
            text-align: center;
        }

        hr {
            border-color: #333; 
        }

        .form-control {
            margin-bottom: 20px; 
            border: 1px solid #ddd; 
        }

        .btn-primary {
            background-color: #333; 
            border-color: #333; 
        }

        .btn-primary:hover {
            background-color: #222; 
            border-color: #222; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="discount-container">
            <h3>Notice</h3>
            <hr>
            <form method="post" action="{{route('adminNotice')}}">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('not'))
                <div class="alert alert-danger">{{Session::get('not')}}</div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="notice">Notice</label>
                    <textarea class="form-control" name="notice"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Post Notice</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
