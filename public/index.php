<!DOCTYPE html>
<html>
    <head>
        <title>AmornwanSpa2016</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $page = $_GET['page'];
        $filename = $page . '.php';
        if (!empty($page) && file_exists($filename)) {
            echo "The file $filename exists";
        } else {
            echo 'Page Not Found !!';
            exit();
        }
        ?>
    </body>
</html>
