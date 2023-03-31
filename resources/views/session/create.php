<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        <?php include __DIR__ . '/../../assets/css/style.css' ?>
    </style>
</head>
<body>
<main>
    <div class="row">
        <div class="colm-form">
            <form class="form-container" action="/login" method="post">
                <div class="form-row">
                    <input type="text" name="email" id="email" placeholder="Enter Your Email"
                           value="<?= $_SESSION['email'] ?? '' ?>"
                    >
                    <?php
                    if (isset($_SESSION['credentials'])) { ?>
                        <span class="error" style="display: flex;"><?= $_SESSION['credentials'] ?></span>
                        <?php
                    }
                    ?>
                </div>

                <div class="form-row">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <button class="btn-login">Login</button>
                <a class="btn-new" href="/register">Register</a>
            </form>
        </div>
    </div>
</main>
</body>
</html>