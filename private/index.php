<!DOCTYPE html>
<html>
    <head>
        <title>AmornwanSpa2016</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
    </head>
    <body>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php include '../include/layout_header.php'; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <?php include '../include/layout_menu.php'; ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <?php
                    $page = $_GET['page'];
                    $filename = $page . '.php';
                    if (!empty($page) && file_exists($filename)) {
                        //echo "The file $filename exists";
                        include $filename;
                    } else {
                        echo 'Page Not Found !!';
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php include '../include/layout_footer.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>
