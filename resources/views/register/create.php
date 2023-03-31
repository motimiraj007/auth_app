<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        <?php include __DIR__ . '/../../assets/css/style.css' ?>
    </style>
</head>
<body>
<main>
    <div class="row">
        <div class="colm-form">
            <form class="form-container" action="/register" method="post">
                <div class="form-row">
                    <input type="text" name="name" id="name" placeholder="Enter Your Name"
                           value="<?= $_SESSION['request']['name'] ?? '' ?>"
                    >
                    <?php
                    if (isset($_SESSION['errors']['name'])) { ?>
                        <span class="error" style="width: 100%"><?= $_SESSION['errors']['name'] ?></span>
                        <?php
                    } ?>
                </div>

                <div class="form-row">
                    <input type="text" name="username" id="username" placeholder="Enter Your Username"
                           value="<?= $_SESSION['request']['username'] ?? '' ?>"
                    >
                    <?php
                    if (isset($_SESSION['errors']['username'])) { ?>
                        <span class="error"><?= $_SESSION['errors']['username'] ?></span>
                        <?php
                    } ?>
                </div>

                <div class="form-row">
                    <input type="text" name="email" id="email" placeholder="Enter Your Email"
                           value="<?= $_SESSION['request']['email'] ?? '' ?>"
                    >
                    <?php
                    if (isset($_SESSION['errors']['email'])) { ?>
                        <span class="error"><?= $_SESSION['errors']['email'] ?></span>
                        <?php
                    } ?>
                </div>

                <div class="form-row">
                    <input type="password" name="password" id="password" placeholder="Password"
                    >
                    <?php
                    if (isset($_SESSION['errors']['password'])) { ?>
                        <span class="error"><?= $_SESSION['errors']['password'] ?></span>
                        <?php
                    } ?>
                </div>

                <button class="btn-login">Create new Account</button>
                <a class="btn-new" href="/login">Login</a>
            </form>
        </div>
    </div>
</main>
</body>
</html>