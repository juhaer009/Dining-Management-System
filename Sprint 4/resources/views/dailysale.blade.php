<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Sales Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f0f0f0; /* Light gray background */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .sales-form-container {
            width: 300px;
            background-color: #ffffff; /* White background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #007bff; /* Bootstrap primary color */
        }

        hr {
            border-color: #007bff; /* Bootstrap primary color */
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff; /* Bootstrap primary color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Slightly darker color on hover */
            border-color: #0056b3; /* Slightly darker color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sales-form-container">
            <h3 class="text-center">Add Daily Sales</h3>
            <hr>
            <form method="POST" action="/addsales">
                @csrf
                <div class="form-group">
                    <label for="customer_name">Customer Name</label>
                    <input type="text" class="form-control" placeholder="Customer Name" name="customer_name">
                </div>

                <div class="form-group">
                    <label for="item">Items</label>
                    <input type="text" class="form-control" placeholder="Items" name="item">
                </div>

                <div class="form-group">
                    <label for="total_bill">Total Bill</label>
                    <input type="number" class="form-control" placeholder="Total Bill" name="total_bill">
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
