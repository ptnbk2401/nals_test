<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>TodoList</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href='/assets/js/fullcalendar/main.min.css' rel='stylesheet'/>
    </head>
    <body>
    <div class="container">
        <?php require_once 'views/layouts/navbar.php' ?>
        <?= @$content ?>
    </div>
    <script src="/assets/js/jquery.slim.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src='/assets/js/fullcalendar/main.min.js'></script>
    <script src='/assets/js/main.js'></script>
    </body>
    </html>