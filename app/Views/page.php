<!doctype html>
<html lang="en">
<head>
    <title><?= $data['title'] . " | " . CONFIG['site_title']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/style.css">
</head>
<body>
<div class="container-fluid header">
    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="col-8">
                            <div class="navbar-brand">
                                <h1 class="display-3"><?= CONFIG['site_title']; ?></h1>
                            </div>
                        </div>
                        <div class="menu">
                                 <?php uFrame\Menu::show(); ?>
                        </div>
                    </div>          
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col content">
                <h2><?= $data['page']['title']; ?></h2>
                <hr>
				<?= $data['page']['body']; ?>
            </div>
        </div>
    </div>
</div>
<script src="/<?= CONFIG['site_path']; ?>/assets/js/script.js"></script>
</body>
</html>