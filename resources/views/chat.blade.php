<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Chat</title>
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
        }
        #chat {
            height: 520px;
            overflow: auto;
        }
        .chat-username {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <h1>Bienvenido al Chat NAME</h1>
</div>

<div class="container chat">
    <div class="row">
        <div class="col-sm-9" id="chat">
            <table class="table table-bordered table-condensed table-striped">
                <tbody  id="auto_load_div"></tbody>
            </table>
        </div>
        <div class="col-sm-3" id="users">
            <table class="table table-bordered table-condensed table-striped">
                <tbody id="auto_load_users"></tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <form method="post">
                <div class="form-group">
                    <label for="msgText"> Mensaje:</label>
                    <input type="text" class="form-control" id="msgText" name="msgText">
                </div>
                <input class="btn btn-primary" type="submit" value="Enviar" id="send_msg" />
            </form>
        </div>
    </div>
</div>

    <div id="form_logout">
        <form method="post" action="/logout" class="form">
            <input class="btn btn-primary" type="submit" value="Logout" />
        </form>
    </div>
</body>
</html>