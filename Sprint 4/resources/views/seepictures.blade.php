<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our restaurant</title>
    <style>
        /* Basic styles to improve picture visibility */
        body {
            background-color: #3498db; /* Vibrant blue color */
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }
        
        .image {
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: 300px; /* Adjust as needed */
            height: 200px; /* Adjust as needed */
        }
        
        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        h1{
            text-align: center; /* Center the title */
            color: white; /* Set the title color */
        }

    </style>
</head>
<body>
    <h1>Our Restaurant</h1>
    <hr>
    <div class="gallery">
        @foreach ($pictures as $picture)
            <div class="image">
                <img src="{{ route('image.show', ['id' => $picture->id]) }}" alt="Picture">
            </div>
        @endforeach
    </div>
</body>
</html>

