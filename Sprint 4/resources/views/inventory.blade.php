<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Inventory Management</title>
    <style>

        body {
            background-color: #f4f4f4; /* Light gray background */
            padding: 20px; /* Added padding for better appearance */
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 10px;
            font-size: 40px;
        }

        p {
            margin: 10px 0;
        }

        a {
            display: block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0a2c50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px; /* Added margin-top */
            margin-bottom: 60px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #073669;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        hr {
            border-color: #333; /* Dark gray border color */
            margin-top: 20px; /* Added margin-top for spacing */
            margin-bottom: 20px; /* Added margin-bottom for spacing */
        }
    </style>
</head>
<body>

<h2>Inventory Management</h2>
<hr>

<table>
    <tr>
        <th>Item</th>
        <th>Unit</th>
        <th>Unit price</th>
    </tr>

    @foreach($invs as $inv)
    <tr>
        <td>{{$inv->item_name}}</td>
        <td>{{$inv->unit}}</td>
        <td>{{$inv->unit_price}}</td>
    </tr>  
    @endforeach
</table>

<p style="margin-top: 20px;"><a href="/addcost">Add Daily Cost</a></p> <!-- Added margin-top -->

<p><a href="/addsales">Add Daily Sales</a></p>
<button id="generate-report-btn">Generate Report</button>

<script>
    document.getElementById('generate-report-btn').addEventListener('click', function() {
        window.location.href = '/generate-report'; // Redirect to generate report route
    });
</script>

</body>
</html>