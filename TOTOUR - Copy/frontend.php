<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <video autoplay muted plays-inline class="back video">
            <source src="images/iloveaurora-Copy.mp4" type="video/mp4">
        </video>
</div>
    <div class="content">
        <h1>Welcome to My TOTOUR App</h1>
        <a href="home.php" class="btn">Explore</a>
        <!-- Add your tour app content here -->

        <style>
        .content{
            text-align: center;
        }

        .content h1{
            font-size: 50px;
            color: #000;
            font-weight: 600;
        }

        .content a{
            text-decoration: none;
            display: inline-block;
            color: black;
            font-size: 24px;
            border: 2px solid white;
            padding: 14px 70px;
            border-radius: 50px;
            margin-top: 20px;
        }

        .content a:hover{
            background: violet;
        }

        .back-video{
            position: absolute;
            right: 8;
            bottom: 0;
            z-index: -1;
        }
        
        </style>
        
    </div>
</body>
</html>
