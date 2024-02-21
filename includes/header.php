<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nabin Ghimire">
    <title><?php echo $title; ?> | Online Store</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" <?php if($active == 'home') { echo "class='active'"; } ?>>Home</a></li>
                <li><a href="login.php" <?php if($active == 'login') { echo "class='active'"; } ?>>Login</a></li>
                <li><a href="register.php" <?php if($active == 'register') { echo "class='active'"; } ?>>Register</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="dashboard/">Dashboard</a></li>                
            </ul>
        </nav>
    </header>
    <div class="container">
