<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <form method="post" action="<?php echo $bootstrap::pathTo('dologin'); ?>">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>