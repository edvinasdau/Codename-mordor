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
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                            <div class="col">
                                <h1 class="display-3"><?= CONFIG['site_title']; ?></h1>
                            </div>            
                        <div class="menu">                        
                            <a class="btn btn-sm btn-outline-light" href="/<?= CONFIG['site_path']; ?>">Home</a>
                        </div>
                         <div class="col text=right">
                            <form action="/<?= CONFIG['site_path']; ?>/blog/search" method ="GET">
                            <div class="input-group">

                                <input type="text" name="query" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">GO!</button>
                                </span>
                            </div>  
                             </form> 
                        </div>

                    </div>          
                </nav>
            </div>
        </div>
</div>
<div class="container">
    <?php
    foreach ($data['postList'] as $post) {

     echo '<div class="row">
     <div class="col content">
     <h2>'. $post['title'] . '</h2>

     <hr> '. $post['body'] .'</div></div>';
 }
 ?>
</div>

</div>
<script src="/<?= CONFIG['site_path']; ?>/assets/js/script.js"></script>
</body>
</html>