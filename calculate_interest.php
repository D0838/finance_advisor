<?php
    $company_name = "WealthWise Advisory";

    $schemes = [
        "savings" => ["name" => "Post Office Savings Account", "rate" => 4.0],
        "rd" => ["name" => "Recurring Deposit (5 years)", "rate" => 6.7],
        "td1" => ["name" => "Time Deposit (1 year)", "rate" => 6.9],
        "td5" => ["name" => "Time Deposit (5 years)", "rate" => 7.5],
        "ppf" => ["name" => "Public Provident Fund (PPF)", "rate" => 7.1],
        "scss" => ["name" => "Senior Citizens' Savings Scheme (SCSS)", "rate" => 8.2],
        "nsc" => ["name" => "National Savings Certificate (NSC)", "rate" => 7.7],
        "kvp" => ["name" => "Kisan Vikas Patra (KVP)", "rate" => 7.5]
    ];

    $selected_scheme = $_GET['scheme'] ?? '';
    $scheme = $schemes[$selected_scheme] ?? null;
    
    $interest = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $scheme) {
        $amount = floatval($_POST['amount']);
        $years = intval($_POST['years']);
        $rate = $scheme['rate'];
        
        $interest = $amount * pow((1 + $rate / 100), $years) - $amount;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Interest | WealthWise Advisory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3e50;">
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

    <div class="container mt-5">
        <h2 class="text-center">Calculate Interest</h2>
        <?php if ($scheme): ?>
            <h4 class="text-center text-primary"><?php echo $scheme['name']; ?> (<?php echo $scheme['rate']; ?>% p.a.)</h4>
            <form method="POST" class="mt-4">
                <div class="mb-3">
                    <label class="form-label">Investment Amount (₹)</label>
                    <input type="number" name="amount" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Investment Duration (Years)</label>
                    <input type="number" name="years" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
            
            <?php if ($interest !== ""): ?>
                <div class="alert alert-success mt-3">
                    <strong>Estimated Interest Earned:</strong> ₹<?php echo number_format($interest, 2); ?>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="alert alert-danger">Invalid scheme selected.</div>
        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="post.php" class="btn btn-secondary">Back to Post Office Investments</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
