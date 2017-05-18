<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <title>HTML Chat - Creación de cuenta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style rel="stylesheet">
        body {
            background-color: #edecec;
            /* font-family: 'OverlockRegular', Arial, sans-serif; */
        }

        .logo {
            margin: auto;
            /* background: url("../gfx/logo.png") no-repeat; */
            width: 260px;
            height: 100px;
        }
    </style>
</head>
<body>


    <div class="logo"></div>

    <div class="container text-center">
        <h1>Creación de cuenta</h1>
    </div>
    <br/><br/>

    <div class="container">
        <form class="form" method="post">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="form-group col-sm-4">
                    <label for="userName"> Nombre de usuario:</label>
                    <input type="text" class="form-control" id="userName" name="userName">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="form-group col-sm-4">
                    <label for="password"> Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="form-group col-sm-4">
                    <label for="gravatar"> Gravatar (opcional):</label>
                    <input type="text" class="form-control" id="gravatar" name="gravatar">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-5"></div>
                <input class="btn btn-primary col-sm-2" type="submit" value="Crear cuenta"/>
            </div>
        </form>
    </div>


</body>
