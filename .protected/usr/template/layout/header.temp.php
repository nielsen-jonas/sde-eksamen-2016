<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" type="text/css" href="<?= SRC_CSS . 'base.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?= SRC_CSS . 'general.css' ?>">
        <?php
        if (isset($styles) && is_array($styles)){
            foreach ($styles as $style){
                echo '<link rel="stylesheet" type="text/css" href="' . SRC_CSS . $style . '.css">' . "\n";
            } 
        }?>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Peddana">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Bitter">
    </head>
    <body>
        <!-- SHOWCASE ONLY -->
        <ul style="color: rgba(0,0,0, .5); position: fixed; top: .5rem; left: .5rem;">
    	       <li style="display: inline; margin-right: .5rem;">
               <?php scr_url('page/admin/master'); ?> 
                    <a
                    href="<?= scr_url('page/admin/instructor') ?>"
                    <?= scr_is('page/admin/instructor') ? 'id="active-link"':''; ?>
                    >! ADMIN INSTRUKTØR !</a>    	       
    	       </li>
    	       <li style="display: inline; margin-right: .5rem;">
    	           <a
                    href="<?= scr_url('page/admin/master') ?>"
                    <?= scr_is('page/admin/master') ? 'id="active-link"':''; ?>
                    >! ADMIN MASTER !</a>  
    	       </li>
    	   </ul>
    	   <!-- / SHOWCASE ONLY -->
        <div
            id="login-bar"
            class="content-wrapper">
            <?php
            isset($_SESSION['logged_in']) ?
            $out = '<a href="' . scr_url('action/logout') . '" class="login-item">Log-ud</a>'
            : $out = '<a href="' . scr_url('page/admin/member') . '" class="login-item">Log-ind</a>';
            echo $out; ?>
            <img
                id="profile-image"
                class="login-item"
                src="<?= SRC_APP . 'profile_placeholder.jpg' ?>"
                alt="Profile Thumbnail">
        </div>
        <header id="banner">
            <div 
                id="heading-background"
                style='background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)),
                url("<?= SRC_APP . 'header.jpg'?>") top / 100%'>
                    <h1 id="heading">Kajakklubben Pagaj</h1>
            </div>
            <nav
                id="banner-nav"
                class="highlight-section">
                <ul class="content-wrapper">
                    <li>
                        <a
                        href="<?= scr_url('page/index') ?>"
                        <?= scr_is('page/index') ? 'id="active-link"':''; ?>
                        >Om Klubben</a>
                    </li>
                    
                    <li>
                        <a href="<?= scr_url('page/news') ?>"
                        <?= scr_is('page/news') ? 'id="active-link"':''; ?>
                        >Nyheder</a>
                    </li>
                    
                    <li>
                        <a href="<?= scr_url('page/arrangements') ?>"
                        <?= scr_is('page/arrangements') ? 'id="active-link"':''; ?>
                        >Arrangementer</a>
                    </li>
                    
                    <li>
                        <a href="<?= scr_url('page/gallery') ?>"
                        <?= scr_is('page/gallery') ? 'id="active-link"':''; ?>
                        >Galleri</a>
                    </li>
                    
                    <li>
                        <a href="<?= scr_url('page/boatpark') ?>"
                        <?= scr_is('page/boatpark') ? 'id="active-link"':''; ?>
                        >Bådpark</a>
                    </li>
                    
                    <li>
                        <a href="<?= scr_url('page/membership') ?>"
                        <?= scr_is('page/membership') ? 'id="active-link"':''; ?>
                        >Bliv Medlem</a>
                    </li>
                    
                    <li>
                        <a href="<?= scr_url('page/my_page') ?>"
                        <?= scr_is('page/my_page') ? 'id="active-link"':''; ?>
                        >Min Side</a>
                    </li>
                    
                    <li>
                        <a href="<?= scr_url('page/contact') ?>"
                        <?= scr_is('page/contact') ? 'id="active-link"':''; ?>
                        >Kontakt</a>
                    </li>
                </ul>
            </nav>
            <div style="clear:both"></div>
        </header>
            <section>
                <main>