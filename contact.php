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