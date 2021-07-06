<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Login Page</title>
</head>
<body>
    <form name="form" class = "box" action="process.php" method="POST">
        <img src="51f6fb256629fc755b8870c801092942.png" alt="">
        <h1>LOGIN</h1>
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" onclick="return IsEmpty();">
    </form>
    <footer>
    <p class="copyright">© kranwn2015</p>
    </footer>
    <script>
        function IsEmpty() {
    if (document.forms['form'].username.value === "" || document.forms['form'].password.value === "") {
        alert("username atau password tidak boleh kosong");
        return false;
    }
    return true;
}
    </script>
</body>
</html>