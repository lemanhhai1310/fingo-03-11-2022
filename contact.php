<?php $data["title"] = "Contact"; ?>
<?php $bodyClass = 'uk-background-default' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-xsmall blog__boxBreadcrumb" uk-sticky="offset: 151; media: @m">
    <div class="uk-container uk-padding-remove">
        <div class="uk-overflow-auto home__overflow__scrollbar">
            <ul class="blog__breadcrumb uk-breadcrumb uk-flex-center uk-flex uk-flex-nowrap">
                <li><a href="." uk-icon="icon: home"></a></li>
                <li><span>Liên hệ</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">

    </div>
</div>
<div class="uk-section uk-background-muted">
    <div class="uk-container">
        <div class="about__section1__item-24-10">
            <h2 class="home__spNoibat__title uk-h2 uk-margin-remove uk-text-center">Bạn có thể để lại yêu cầu</h2>
        </div>
        <div class="about__section1__item-24-10">
            <div class="about__section1__desc uk-text-center">
                Chúng tôi sẽ trả lời ngay khi có thể
            </div>
        </div>
        <div class="uk-grid-20 uk-grid-match contact__item-58-25" uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-cover-container">
                    <canvas width="387" height="317"></canvas>
                    <iframe class="uk-position-cover" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29800.94450612691!2d105.873408!3d20.987904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1667985779511!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="uk-width-expand">
                <form class="uk-grid-match uk-grid-20 uk-form-stacked" uk-grid>
                    <div class="uk-width-1-2@m">
                        <div class="uk-flex uk-flex-column uk-flex-between">
                            <div class="item__21">
                                <label class="uk-form-label home__banner__label" for="form-stacked-text">Họ và tên</label>
                                <div class="uk-form-controls">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon home__banner__icon home__banner__icon--user" uk-icon="icon: user"></span>
                                        <input class="uk-input home__banner__input" type="text" placeholder="Họ và tên của bạn" aria-label="Not clickable icon">
                                    </div>
                                </div>
                            </div>
                            <div class="item__21">
                                <label class="uk-form-label home__banner__label" for="form-stacked-text">Email</label>
                                <div class="uk-form-controls">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon home__banner__icon home__banner__icon--email" uk-icon="icon: user"></span>
                                        <input class="uk-input home__banner__input" type="email" placeholder="Email của bạn" aria-label="Not clickable icon">
                                    </div>
                                </div>
                            </div>
                            <div class="item__21">
                                <label class="uk-form-label home__banner__label" for="form-stacked-text">Số điện thoại</label>
                                <div class="uk-form-controls">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon home__banner__icon home__banner__icon--phone" uk-icon="icon: user"></span>
                                        <input class="uk-input home__banner__input" type="tel" placeholder="Số điện thoại" aria-label="Not clickable icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="uk-flex uk-flex-column">
                            <label class="uk-form-label home__banner__label" for="form-stacked-text">Lời nhắn</label>
                            <div class="uk-form-controls uk-flex-auto">
                                <textarea class="uk-textarea home__banner__input uk-height-1-1" rows="5" placeholder="" aria-label="Textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-flex uk-flex-bottom">
                            <a href="" class="header__bottom__btn uk-button uk-button-default uk-border-pill" uk-toggle="cls: uk-button-small; mode: media; media: (max-width: 959.8px)">Gửi</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="about__section3 uk-section-small uk-background-default uk-height-min-medium">
    <div class="uk-container">
        <div class="footer__item-48-20">
            <h2 class="home__spNoibat__title uk-h2 uk-margin-remove uk-text-center">Đối tác của chúng tôi</h2>
        </div>
        <div class="footer__item-48-20">
            <?php require "template-parts/layouts/doitac.php"; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>