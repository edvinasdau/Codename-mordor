<!doctype html>
<html lang="en">
<head>
    <title><?= $data['post']['title'] . " | " . CONFIG['site_title']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="container-fluid header">
     <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1 class="display-3"><?= CONFIG['site_title']; ?></h1>
                            </div>
                        </div>
                        <div class="menu">                        
                            <a class="btn btn-sm btn-outline-light" href="/<?= CONFIG['site_path']; ?>">Home</a>
                            <a class="btn btn-sm btn-outline-light" href="/<?= CONFIG['site_path']; ?>/blog">Blog</a>
                        </div>
                    </div>          
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <?php

        echo '<div class="row">
        <div class="col content">
        <h2>'. $data['post']['title'] . '</h2>
        <hr> '. $data['post']['body'] .'</div></div>';
        ?>
    </div>

<footer class="w3-container w3-teal banners">
     <?php 
     foreach ($data['banners'] as $banner) {
        echo  "<a class='btn btn-light' href='" . $banner['link'] . "'>" . $banner['name'] . "</a>&nbsp";
    }
    ?>
</footer>
<script src="/<?= CONFIG['site_path']; ?>/assets/js/script.js"></script>
</body>
</html>