<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta  http-equiv="X-UA-Compatible" content="ie=edge"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Авторизация</title>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
            <h1>Авторизация</h1> 
            <form action="authadmin.php" method="post">
            <input type="text" class="form-control" name="loginadmin" id="loginadmin" placeholder="Ваш логин"><br>
            <input type="password" class="form-control" name="passadmin" id="passadmin" placeholder="Ваш пароль"><br>
            <button class="btn btn-success">Авторизоваться</button>
            </form>
                </div>
		
            </div>
    </body>
</html>