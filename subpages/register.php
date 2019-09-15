<!DOCTYPE html>
<html lang="en-EN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpaceSim</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="background">
        <header class="header wrapper">
            <h1 class="main-header">
                SpaceSim
            </h1>
            <nav>
                <ul class="menu">
                    <li>
                        <a href="../index.html">&#11104; Back to home page</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
        <section class="signup-form wrapper">
            Login: <?php echo $_POST["login"]; ?><br>
            Email: <?php echo $_POST["email"]; ?><br>
            Password: <?php echo $_POST["password"]; ?><br>
            Password-repeat: <?php echo $_POST["repassword"]; ?><br>
        </section>
        </main>
    </div>
</body>

</html>
