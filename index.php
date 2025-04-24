<?php
    $company_name = "WealthWise Advisory";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mutual Fund & Post Office Advisor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .navbar {
            background-color: #004d99 !important;
        }
        .header-section {
            background: linear-gradient(to right, #004d99, #00b3b3);
            color: white;
            padding: 60px 20px;
        }
        .btn-primary {
            background-color: #00b3b3;
            border: none;
        }
        .btn-primary:hover {
            background-color: #008080;
        }
        .footer {
            background-color: #004d99;
            color: white;
            padding: 15px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><?php echo $company_name; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="post.php">Post Office Investments</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="mutualFundDropdown" role="button" data-bs-toggle="dropdown">Mutual Funds</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="sip.php">SIP</a></li>
                            <li><a class="dropdown-item" href="lumpsum.php">Lumpsum</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header-section text-center">
        <h1>Welcome to <?php echo $company_name; ?></h1>
        <p>Your trusted partner in wealth creation, mutual funds, and post office investments</p>
    </header>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>
                    We provide expert financial advice tailored to your needs. Whether it's SIPs, lump sum investments, or post office savings schemes,
                    we help you make informed decisions for a secure financial future.
                </p>
                <a href="contact.php" class="btn btn-primary">Get in Touch</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="advisor.jpg" alt="Advisor Image" class="img-fluid rounded shadow-lg" style="max-width: 80%;">
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $company_name; ?>. All Rights Reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>