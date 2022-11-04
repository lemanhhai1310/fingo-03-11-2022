<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title>Fingo - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.11/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<?php //require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">

    <!--header-->
    <header class="header" uk-sticky>

        <!--header__top-->
        <div class="header__top uk-visible@m">
            <div class="uk-container uk-container-expand">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <div class="header__top__langSwitch uk-border-pill uk-visible@m uk-overflow-hidden">
                                <div class="header__top__langSwitch__box uk-border-pill uk-grid-collapse uk-child-width-auto uk-grid">
                                    <label>
                                        <input class="uk-radio header__top__langSwitch__radio" type="radio" name="radio2" checked>
                                        <div class="header__top__langSwitch__txt uk-border-pill header__top__langSwitch__txt--en">
                                            En
                                        </div>
                                    </label>
                                    <label>
                                        <input class="uk-radio header__top__langSwitch__radio" type="radio" name="radio2">
                                        <div class="header__top__langSwitch__txt uk-border-pill header__top__langSwitch__txt--vi">
                                            Vi
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li class="phone"><a href="tel:0899938383">08 999 38383</a></li>
                            <li class="email"><a href="mailto:info@fingo.vn">info@fingo.vn</a></li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right uk-visible@m">
                        <div>
                            <a class="uk-navbar-toggle header__top__iconSearch" uk-search-icon href="#"></a>
                            <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                                <form class="uk-search uk-search-navbar uk-width-1-1">
                                    <input class="uk-search-input" type="search" placeholder="Tìm kiếm..." aria-label="Search" autofocus>
                                </form>
                            </div>
                        </div>
                        <div class="uk-navbar-item">
                            <a href="#" class="header__top__iconSocial header__top__iconSocial--telegram uk-icon-link uk-margin-small-right" uk-icon="vimeo" uk-tooltip="title: Telegram"></a>
                            <a href="#" class="header__top__iconSocial header__top__iconSocial--fb uk-icon-link uk-margin-small-right" uk-icon="facebook" uk-tooltip="title: Facebook"></a>
                            <a href="#" class="header__top__iconSocial header__top__iconSocial--dribbble uk-icon-link uk-margin-small-right" uk-icon="dribbble" uk-tooltip="title: Dribbble"></a>
                            <a href="#" class="header__top__iconSocial header__top__iconSocial--instagram uk-icon-link uk-margin-small-right" uk-icon="instagram" uk-tooltip="title: Instagram"></a>
                            <a href="#" class="header__top__iconSocial header__top__iconSocial--twitter uk-icon-link" uk-icon="twitter" uk-tooltip="title: Twitter"></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--/header__top-->

        <!--header__bottom-->
        <div class="header__bottom">
            <div class="uk-container uk-container-expand">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="" class="uk-navbar-item uk-logo uk-visible@m"><img src="images/logo_fingo_h.png" alt=""></a>
                        <a class="header__bottom__menuBtn uk-navbar-toggle uk-hidden@m uk-light" href="#">
                            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                        </a>
                    </div>
                    <div class="uk-navbar-center">
                        <a href="" class="uk-navbar-item uk-logo uk-hidden@m"><img src="images/Logo_white.png" alt=""></a>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li class="uk-active"><a href="#">trang chủ</a></li>
                            <li><a href="#">đăng ký vay tiền</a></li>
                            <li><a href="#">MỞ THẺ TÍN DỤNG</a></li>
                            <li><a href="#">ĐĂNG KÝ ĐẠI LÝ</a></li>
                            <li><a href="#">tuyển dụng</a></li>
                            <li><a href="#">tin tức</a></li>
                            <li><a href="#">banker đăng nhập</a></li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <a href="" class="uk-visible@m header__bottom__btn uk-button uk-button-default uk-border-pill" uk-toggle="cls: uk-button-small; mode: media; media: (max-width: 959.8px)">Liên hệ</a>
                            <div class="uk-hidden@m uk-light" uk-form-custom="target: > * > span:last-child">
                                <select class="selectLanguage" aria-label="Custom controls">
                                    <option value="en">En</option>
                                    <option value="vi">Vi</option>
                                </select>
                                <span class="uk-link header__bottom__selectLang">
                                    <span class="header__bottom__selectLang__icon" uk-icon="icon: pencil"></span>
                                    <span></span>
                                </span>
                            </div>
                            <script>
                                $('.selectLanguage option:selected').each(function () {
                                    $(".header__bottom__selectLang__icon").addClass($(this).val());
                                });

                                $(document).on('change', '.selectLanguage', function(e) {
                                    $('.selectLanguage option').each(function () {
                                        $(".header__bottom__selectLang__icon").removeClass($(this).val());
                                    });
                                    var idSize = $(this).val();
                                    $(".header__bottom__selectLang__icon").addClass(idSize);
                                });
                            </script>
                        </div>
                    </div>
                </nav>
                <form class="uk-search header__bottom__formSearch uk-search-default uk-width-1-1 uk-hidden@m uk-margin-small-bottom">
                    <span class="uk-search-icon-flip" uk-search-icon></span>
                    <input class="header__bottom__formSearch__input uk-form-large uk-search-input uk-border-pill" type="search" placeholder="Tìm kiếm..." aria-label="Search" aria-label="Search">
                </form>
            </div>
        </div>
        <!--/header__bottom-->

    </header>
    <!--/header-->