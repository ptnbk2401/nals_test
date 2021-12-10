<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>TodoList</title>
        <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/assets/js/datatable/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/assets/js/fullcalendar/main.min.css"/>
        <script>
            const URL_ROOT = '<?=URLROOT?>'
        </script>
    </head>
    <body>
    <div class="container">
        <?php require_once 'views/layouts/navbar.php' ?>
        <?= @$content ?>
    </div>
    <script src="<?=URLROOT?>/assets/js/jquery.slim.min.js"></script>
    <script src="<?=URLROOT?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src='<?=URLROOT?>/assets/js/fullcalendar/main.min.js'></script>
    <script src="<?=URLROOT?>/assets/js/datatable/datatables.min.js"></script>
    <script src='<?=URLROOT?>/assets/js/main.js'></script>
    </body>
</html>
