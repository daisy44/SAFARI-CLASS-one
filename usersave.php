<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            background-color: #ff2dee;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>
<body>
    <form action="userSaveProcess.php" method="POST">
        <legend>
            <a href="viewUsers.php">View Users</a>
        </legend>
        <input type="text"name="x"placeholder="Name" class="form-group" required><br>
        <input type="email"name="y"placeholder="Email" class="form-group" required><br>
        <input type="password"name="z"placeholder="Password" class="form-group" required><br>
        <input type="submit"name="btnsubmit"value="Save" class="btn btn-success">
        <input type="reset"name="btnreset"value="Refresh" class="btn btn-primary">

    </form>

</body>
</html>