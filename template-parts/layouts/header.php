<?php $projectName = "Bidwood"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-light uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div class="uk-position-top uk-position-z-index header__position">
        <nav class="header__navbar uk-navbar-container uk-navbar-transparent" uk-sticky="start: 200; animation: uk-animation-slide-top; media: @l">
            <div class="uk-container uk-container-xlarge">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav uk-visible@l">
                            <li>
                                <a href="#">Service <span uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Pricing Guide <span uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Process <span uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Investors</a></li>
                        </ul>

                    </div>

                    <div class="uk-navbar-center">
                        <a href="" class="uk-navbar-item uk-logo header__navbar__logo"><img src="images/logo.png" alt=""></a>
                    </div>

                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav uk-visible@l">
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <div class="uk-navbar-item uk-visible@l">
                            <a href="" class="home__btn home__btn--success uk-button uk-button-primary uk-border-pill">Get Started</a>
                        </div>

                        <div class="uk-navbar-item">
                            <a class="header__navbar__searchIcon" href="#modal-full" uk-search-icon uk-toggle></a>
                        </div>

                    </div>

                </div>
            </div>
        </nav>
    </div>

    <div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
            <button class="uk-modal-close-full" type="button" uk-close></button>
            <form class="uk-search uk-search-large">
                <input class="uk-search-input uk-text-center" type="search" placeholder="Search" aria-label="Search" autofocus>
            </form>
        </div>
    </div>