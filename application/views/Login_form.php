<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('/login/login'); ?>" method="POST">
        <label>email</label>
        <input type="text" name="email" placeholder="enter your email"><br><br>
        <label>password</label>
        <input type="text" name="password" placeholder="enter your password"><br><br>
        <input type="submit" value="submit">
        <p>if you not account <a href="<?= base_url(); ?>register_page">create your account</a></p>
    </form>
</body>
</html>