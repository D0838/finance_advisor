<?php
    $company_name = "WealthWise Advisory";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumpsum Investment | WealthWise Advisory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .hero-section {
            background: linear-gradient(to right, #004d99, #0099cc);
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        .card {
            border-radius: 10px;
            transition: 0.3s;
        }
        .card:hover {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            background-color: #007acc;
            border: none;
        }
        .btn-primary:hover {
            background-color: #005fa3;
        }
        .footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004d99;">
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

    <div class="hero-section">
        <h2>Lumpsum Investment</h2>
        <p>Your key to long-term financial growth with a one-time investment.</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm p-3">
                    <h4><i class="bi bi-piggy-bank-fill text-success"></i> Benefits of Lumpsum Investment</h4>
                    <ul>
                        <li>Potential for high returns over a long period.</li>
                        <li>No need for regular investments like SIP.</li>
                        <li>Better suited for those with a large amount to invest.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm p-3">
                    <h4><i class="bi bi-graph-up-arrow text-warning"></i> How It Works</h4>
                    <p>Invest a one-time amount in mutual funds and let it grow based on market performance. Over time, your investment has the potential to yield significant returns.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="calculate_lumpsum.php" class="btn btn-primary btn-lg"><i class="bi bi-calculator"></i> Calculate Lumpsum Returns</a>
        </div>
        
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary btn-lg"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> WealthWise Advisory. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
