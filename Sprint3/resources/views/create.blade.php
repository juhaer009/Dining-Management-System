<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee Schedule</title>
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

        select,
        input[type="datetime-local"] {
            width: 100%; /* Make select and datetime-local inputs take up the full width */
            padding: 10px; /* Add padding to the inputs */
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
    <h1>Create Employee Schedule</h1>
    <form action="{{ route('employee-schedules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="employee_id">Employee</label>
            <select name="employee_id" id="employee_id" class="form-control">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="datetime-local" name="start_time" id="start_time" class="form-control">
        </div>
        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="datetime-local" name="end_time" id="end_time" class="form-control">
        </div>
        <!-- Add other necessary fields -->
        <button type="submit" class="btn btn-primary">Create Schedule</button>
    </form>
</div>

</body>
</html>
