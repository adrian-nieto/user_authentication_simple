<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
<style>
body{
    height: 100vh;
    width: 100vw;
    position: relative;
}
.login_form{
    width: 40%;
    height: 40%;
    margin: 0 auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    background-color: lightgray;
    border: 2px double gray;
}
</style>
</head>
<body>
    
<div class="login_form">
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Input Username">
        <input type="text" name="password" placeholder="Input Password">
        <button type="submit" name="submitButton" value="submit">Submit</button>
    </form>
</div>
</body>
</html>