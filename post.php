<?php
    $company_name = "WealthWise Advisory";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Office Investments | WealthWise Advisory</title>
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
        <h1>Post Office Investment Plans</h1>
        <p>Explore secure and reliable investment options with current interest rates.</p>
    </header>

    <div class="container my-5">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Scheme</th>
                    <th>Interest Rate</th>
                    <th>Calculate Interest</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Post Office Savings Account</td>
                    <td>4.0% p.a.</td>
                    <td><a href="calculate_interest.php?scheme=savings" class="btn btn-primary">Calculate</a></td>
                </tr>
                <tr>
                    <td>Recurring Deposit (5 years)</td>
                    <td>6.7% p.a.</td>
                    <td><a href="calculate_interest.php?scheme=rd" class="btn btn-primary">Calculate</a></td>
                </tr>
                <tr>
                    <td>Time Deposit (1 year)</td>
                    <td>6.9% p.a.</td>
                    <td><a href="calculate_interest.php?scheme=td1" class="btn btn-primary">Calculate</a></td>
                </tr>
                <tr>
                    <td>Time Deposit (5 years)</td>
                    <td>7.5% p.a.</td>
                    <td><a href="calculate_interest.php?scheme=td5" class="btn btn-primary">Calculate</a></td>
                </tr>
                <tr>
                    <td>Public Provident Fund (PPF)</td>
                    <td>7.1% p.a.</td>
                    <td><a href="calculate_interest.php?scheme=ppf" class="btn btn-primary">Calculate</a></td>
                </tr>
                <tr>
                    <td>Senior Citizens' Savings Scheme (SCSS)</td>
                    <td>8.2% p.a.</td>
                    <td><a href="calculate_interest.php?scheme=scss" class="btn btn-primary">Calculate</a></td>
                </tr>
                <tr>
                    <td>National Savings Certificate (NSC)</td>
                    <td>7.7% p.a.</td>
                    <td><a href="calculate_interest.php?scheme=nsc" class="btn btn-primary">Calculate</a></td>
                </tr>
                <tr>
                    <td>Kisan Vikas Patra (KVP)</td>
                    <td>7.5% (Maturity in 115 months)</td>
                    <td><a href="calculate_interest.php?scheme=kvp" class="btn btn-primary">Calculate</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="footer text-center">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $company_name; ?>. All Rights Reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
