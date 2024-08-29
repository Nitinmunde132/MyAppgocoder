<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff;
        }
        .hero-section {
            background-color: #007bff;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .features {
            padding: 50px 0;
        }
        .feature-item {
            text-align: center;
            padding: 20px;
        }
        .feature-item i {
            font-size: 50px;
            margin-bottom: 20px;
            color: #007bff;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Go Coder</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
    <?php
                    $aa=$_POST['name'];
                    $bb=$_POST['email'];
                    $cc=$_POST['password'];

                    //echo "$aa $bb $cc";

                    $c=mysql_connect("localhost","root","");
                    if(!$c)
                    echo "Error in connection";

                    mysql_select_db("registration");
                
                  
                    $result=mysql_query("insert into user values('$aa','$bb','$cc')");

                    $result=mysql_query("select * from user");

                    while($row=mysql_fetch_array($result))
                    {
                            //echo $row['name']." ".$row['email']." ".$row['password']."<br> ";
                    }

                    echo " <h2> $aa Registration done successfully <h2> <br> ";
                ?>
       
        <a href="#" class="btn btn-light btn-lg">Learn More</a>
    </div>
</div>

<!-- Features Section -->
<div class="container features">
    <div class="row">
        <div class="col-md-4 feature-item">
            <i class="bi bi-speedometer2"></i>
            <h3>Fast Performance</h3>
            <p>Experience blazing fast speed with our optimized solutions.</p>
        </div>
        <div class="col-md-4 feature-item">
            <i class="bi bi-shield-lock"></i>
            <h3>Security</h3>
            <p>Top-notch security features to protect your data.</p>
        </div>
        <div class="col-md-4 feature-item">
            <i class="bi bi-people"></i>
            <h3>User Friendly</h3>
            <p>Easy-to-use interface designed for everyone.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <p>&copy; 2024 BrandName. All rights reserved.</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
