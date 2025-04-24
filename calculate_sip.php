<?php
    $company_name = "WealthWise Advisory";
    $default_sip_interest = 12; // Average SIP interest rate in percentage
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate SIP Returns | WealthWise Advisory</title>
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
        <h2>Calculate SIP Returns</h2>
        <p>Estimate the future value of your monthly SIP investment.</p>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm">
                    <h4 class="text-center">SIP Calculator</h4>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Monthly Investment Amount (₹)</label>
                            <input type="number" class="form-control" id="sipAmount" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Expected Annual Return Rate (%)</label>
                            <input type="number" class="form-control" id="sipRate" value="<?php echo $default_sip_interest; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Investment Period (Years)</label>
                            <input type="number" class="form-control" id="sipYears" required>
                        </div>
                        <button type="button" class="btn btn-primary w-100" onclick="calculateSIP()">Calculate Returns</button>
                    </form>
                    <h5 class="text-center mt-3" id="sipResult"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="sip.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back to SIP Info</a>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> WealthWise Advisory. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function calculateSIP() {
            let sipAmount = parseFloat(document.getElementById("sipAmount").value);
            let sipRate = parseFloat(document.getElementById("sipRate").value) / 100 / 12;
            let sipYears = parseFloat(document.getElementById("sipYears").value);
            let months = sipYears * 12;

            if (isNaN(sipAmount) || isNaN(sipRate) || isNaN(sipYears) || sipAmount <= 0 || sipRate <= 0 || sipYears <= 0) {
                document.getElementById("sipResult").innerHTML = "Please enter valid inputs.";
                return;
            }

            let futureValue = sipAmount * ((Math.pow(1 + sipRate, months) - 1) / sipRate) * (1 + sipRate);
            document.getElementById("sipResult").innerHTML = `Future Value: ₹${futureValue.toFixed(2)}`;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>