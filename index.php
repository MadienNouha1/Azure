<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madien Nouha - Welcome to my app</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap");

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 3rem;
            color: #333;
            margin: 0;
        }

        p {
            font-size: 1.5rem;
            color: #555;
            margin-top: 0.5rem;
        }

        /* Encadrement pour le texte */
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container h1 {
            color: #3498db;
        }

        .container p {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Madien Nouha</h1>
        <p>Welcome to my app</p>
    </div>
</body>
</html>
';
?>
