<?php
    require_once "include/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container"> 
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"> 
            <div class="col-md-3 mb-2 mb-md-0"> 
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none"> 
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg> 
                </a> 
            </div> 
            
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"> 
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li> 
                <li><a href="#" class="nav-link px-2">Features</a></li> 
                <li><a href="#" class="nav-link px-2">Pricing</a></li> 
                <li><a href="#" class="nav-link px-2">FAQs</a></li> 
                <li><a href="#" class="nav-link px-2">About</a></li> 
            </ul> 
            <?php if(!$userName){ ?>
                <div class="col-md-3 text-end"> 
                    <a href="login.php" class="btn btn-outline-primary me-2">Login</a> 
                    <a href="signup.php" class="btn btn-primary">Sign-up</a> 
                </div> 
            <?php } else { ?>
                <div class="col-md-3 text-end"> 
                    <a href="info.php" class="btn btn-outline-primary me-2"><?= $userName ?></a> 
                    <a href="logout.php" class="btn btn-primary">Log Out</a> 
                </div> 
            <?php }  ?>
            <!-- 의논해서 info.php 만들어보세요... -->
        </header> 
    </div>

    <div class="container my-5">