<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Salary</title>
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
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            color: #007bff; /* Bootstrap primary color */
            margin-bottom: 20px; /* Add some space below the heading */
        }

        form {
            width: 100%; /* Make the form take up the full width of its container */
            max-width: 400px; /* Limit the maximum width of the form */
            padding: 20px; /* Add some padding to the form */
            background-color: #ffffff; /* White background */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }

        .form-group {
            margin-bottom: 20px; /* Add some space below each form field */
        }

        label {
            font-weight: bold; /* Make labels bold */
            color: #333; /* Dark gray text color */
        }

        input[type="text"] {
            width: 100%; /* Make text input fields take up the full width */
            padding: 10px; /* Add padding to the text input fields */
            border: 1px solid #ccc; /* Add a border */
            border-radius: 5px; /* Rounded corners */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff; /* Bootstrap primary color */
            color: #fff; /* White text color */
            padding: 10px 20px; /* Add padding to the button */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Show pointer cursor on hover */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Slightly darker color on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Employee Salary</h1>

    <form method="POST" action="{{ route('update-salary', ['id' => $employee->id]) }}">
        @csrf
        @method('PUT')

        <!-- Display current salary -->
        <div class="form-group">
            <label for="current_salary">Current Salary:</label>
            <input type="text" id="current_salary" name="current_salary" value="{{ $employee->salary }}">
        </div>

        <!-- Other fields for salary update -->
        <!-- Add additional fields here if needed -->

        <button type="submit" class="btn btn-primary">Update Salary</button>
    </form>
</div>

</body>
</html>
