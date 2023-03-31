<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        <?php include __DIR__ . '/../assets/css/home.css' ?>
    </style>
</head>
<body>
<div style="display: flex; justify-items: center; justify-content: space-between; align-items: center; margin: 20px;">
    <h1>Dashboard</h1>
    <form action="/logout" method="post">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

</body>
</html>