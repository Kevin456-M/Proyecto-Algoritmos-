<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-with, initial-scale=1">
    <title><?= $this->renderSection("title ") ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
>
    <link rel="stylesheet" type="text/css" href="<?= site_url('/css/auto-complete.css')?>">
    
</head>
<body>

<section class="section">

    <nav class="navbar" role="navigation" aria-label="main navigation">   
        
    <div class="navbar-menu">
        <div class="navbar-start">

            <a class="navbar-item" href="<?= site_url("/") ?>">Home</a> 

        </div>

        <div class="navbar-end">

    <?php if (current_user()): ?> 
                        
                        <div class="navbar-item">Hello <?= esc(current_user()->name) ?></div>

                        <a class="navbar-item" href="<?= site_url("/profile/show") ?>">Profile</a>

                        <?php if (current_user()->is_admin): ?>
                            <a class="navbar-item" href="<?= site_url("/admin/users") ?>">Users</a> 
                        <?php endif; ?> 

                        <a class="navbar-item" href="<?= site_url("/tasks") ?>">Tasks</a> 

                        <a class="navbar-item" href="<?= site_url("/logout") ?>">Log out</a>    

                    <?php else: ?>

                        <a class="navbar-item" href="<?= site_url("/signup") ?>">Sign up</a>
                        <a class="navbar-item" href="<?= site_url("/login") ?>">Log in</a>

                    <?php endif; ?>

            </div>
        </div>
    </nav>  

    <?php if (session()->has('warning')): ?>  
        <div class="notification is-warning is-light">
            <button class="Delete"></button>
            <?= session('warning') ?>
        </div>
    <?php endif; ?> 

    <?php if (session()->has('info')): ?>
        <div class="notification is-info is-Light"> 
        <button class="Delete"></button> 
            <?= session('info') ?>
        </div> 
    <?php endif; ?> 

    <?php if (session()->has('error')): ?>
        <div class="notification is-danger is-light">  
        <button class="Delete"></button>
            <?= session('error') ?>
        </div> 
    <?php endif; ?> 

    <?= $this->renderSection("content") ?>


    </section> 

        <script src="<?= site_url('/css/js/app.js') ?></script>

</body>
</html>