<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            padding-top: 5rem;
            background-image: url('https://media0.giphy.com/media/S3bkh4BuHMyfC/200w.gif?cid=6c09b952eje0v1wsc0p7g9hmn97916n1q5efkmuc7zxvs79f&rid=200w.gif&ct=g');
        }

        a {
            text-decoration: none;
        }

        .jumbotron {
            background-image: url("https://media.tenor.com/6x_MKyzpfSoAAAAC/jerma-green-screen.gif");
            background-size: cover;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Docker LAMP Stack for RaspberryPi</a>
            <div class="d-flex">
                <a href="/pma/" class="btn btn-outline-light">PhpMyAdmin</a>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="text-center jumbotron p-5 mb-4 bg-dark rounded">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">????????</h1>
                <p class="text-center">Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma,
                    Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma, Jerma.</p>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-4">
                <img class="card-img-top"
                    src="https://media.tenor.com/F3k_x-qCxyIAAAAd/jerma-running-away.gif" alt="people">
                <div class="h-100% p-5 text-black text-light bg-dark rounded-3">
                    <h2>This Docker Stack includes</h2>
                    <span class="badge bg-primary">😈</span>
                    <span class="badge bg-secondary">😈</span>
                    <ul>
                        <li>PHP 7</li>
                        <li>MariaDB</li>
                        <li><a href="/pma/">PhpMyAdmin</a></li>
                        <li>Apache mod_userdir to allow multi user document root</li>
                        <li>Basic <a href="ftp://raspberrypi.local:20121">FTP Server</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <img class="card-img-top"
                    src="https://media.tenor.com/L1Ut3CEQp5YAAAAi/jerma985-jerma.gif" alt="people">
                <div class="h-100% p-5 text-black bg-dark rounded-3">
                    <div class="row align-items-md-stretch">
                        <div class="col-md-6 text-center">
                            <a class="btn btn-primary btn-lg" href="/pma/" role="button">PMA</a>
                        </div>
                        <div class="col-md-6 text-center">
                        <a class="btn btn-primary btn-lg" href="ftp://raspberrypi.local:20121" role="button">FTP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            $dirs = array_diff(glob('users/*', GLOB_ONLYDIR),  array('..', '.'));
            if(sizeof($dirs) > 0){
        ?>
        <hr />
        <h2>Public user<?=sizeof($dirs)>1?'s':''?></h2>
        <div class="container">
            <div class="row justify-content-center">
                <?php
                        foreach ($dirs as $dir) {
                            $dir = basename($dir);
                            echo "
                            <div class='col-sm-12 col-md-3 p-3'>
                                <div class='card'>
                                    <div class='card-body text-center'>
                                        <a class='link-primary stretched-link' href='/~$dir'>$dir</a>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                    ?>
            </div>
        </div>
        <?php
            }
        ?>

        <hr />
    </main>
</body>

</html>
