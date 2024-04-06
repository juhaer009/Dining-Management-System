<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Light gray background */
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center items horizontally */
            min-height: 100vh;
            padding: 20px; /* Add padding for spacing */
        }

        h1 {
            color: #007bff; /* Bootstrap primary color */
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Align items to the left side */
            margin-bottom: 20px; /* Add margin for spacing between form and table */
        }

        .table-container {
            width: 100%;
            display: flex;
            justify-content: center; /* Center items horizontally */
        }

        table {
            background-color: #f8f9fa; /* Light gray table background */
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
        }

        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff; /* Bootstrap primary color */
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px; /* Add margin for spacing */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Slightly darker color on hover */
        }

        /* Style the form */
        form {
            width: 300px; /* Set a fixed width for the form */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Chef's Table</h1>
       <!-- Employee Time button -->
    <div class="align-top-left">
        <a href="{{ route('employee-schedules.index') }}" class="btn btn-primary">Employee Time</a>
    </div>
    <!-- Add Employee Form -->
    <div class="form-container">
        <h2>Add Employee</h2>
        <form action="{{ route('store-employee') }}" method="POST">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>

            <label for="job_title">Job Title:</label><br>
            <input type="text" id="job_title" name="job_title"><br>

            <label for="salary">Salary:</label><br>
            <input type="number" id="salary" name="salary"><br><br>

            <button type="submit">Add Employee</button>
        </form>
    </div>

    <!-- Employee Table -->
    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Job Title</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->job_title }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td><a href="{{ route('edit-salary', ['id' => $employee->id]) }}" class="btn btn-primary">Edit Salary</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
</div>
</div>


</body>
</html>
