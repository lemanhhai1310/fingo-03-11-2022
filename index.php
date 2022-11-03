<?php $data["title"] = "Homepage"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Sản phẩm nổi bật-->
<div class="uk-section home__spNoibat uk-background-cover">
    <div class="uk-container">
        <div class="home__spNoibat__item-48-25 uk-light">
            <h2 class="home__spNoibat__title uk-h2 uk-text-center uk-margin-remove">Sản phẩm nổi bật</h2>
        </div>
        <div class="home__spNoibat__item-48-25 uk-text-center">
            <div class="uk-border-pill home__spNoibat__boxTabs uk-margin-auto" uk-toggle="cls: uk-display-inline-block; mode: media; media: @m">
                <ul class="uk-subnav uk-subnav-pill uk-child-width-expand uk-flex-center uk-margin-remove-bottom" uk-toggle="cls: uk-flex-inline; mode: media; media: @m" uk-switcher>
                    <li><a href="#">Các loại thẻ</a></li>
                    <li><a href="#">Các khoản vay</a></li>
                    <li><a href="#">Sản phẩm khác</a></li>
                </ul>
            </div>
        </div>
        <div class="home__spNoibat__item-48-25">
            <div class="uk-child-width-1-2@s uk-grid-small uk-grid-20-m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'img' => 'images/the-1.png',
                        'title' => 'Thẻ tín dụng Vietcombank Visa Chuẩn',
                    ),
                    array(
                        'img' => 'images/the-2.png',
                        'title' => 'Thẻ tín dụng Vietcombank American Express®',
                    ),
                    array(
                        'img' => 'images/the-3.png',
                        'title' => 'Thẻ tín dụng Vietcombank Vietnam Airlines Platinum American Express®',
                    ),
                    array(
                        'img' => 'images/the-4.png',
                        'title' => 'Thẻ tín dụng Vietcombank JCB Chuẩn',
                    ),
                    array(
                        'img' => 'images/the-5.png',
                        'title' => 'Vietcombank visa vàng',
                    ),
                    array(
                        'img' => 'images/the-6.png',
                        'title' => 'Thẻ tín dụng quốc tế Vietcombank Visa Platinum',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="home__spNoibat__card uk-card uk-card-default">
                        <div class="uk-grid-collapse uk-grid-match uk-height-1-1 uk-grid-match" uk-grid>
                            <div class="uk-width-auto@m uk-width-1-1">
                                <div class="uk-padding-remove-right" uk-toggle="cls: uk-padding-small; mode: media; media: @m">
                                    <div class="uk-cover-container uk-height-1-1">
                                        <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                        <canvas width="147" height="122"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-padding-small uk-flex uk-flex-column">
                                    <div class="uk-flex-auto">
                                        <div class="item__10">
                                            <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                                                <div>
                                                    <div class="home__spNoibat__card__star"><b>5.0</b>/100+ nhận xét</div>
                                                </div>
                                                <div>
                                                    <div class="home__spNoibat__card__txt">8358 người đã mở thẻ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__10">
                                            <div class="uk-grid-10" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__spNoibat__card__label">Ưu đãi</div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-h3 home__spNoibat__card__title"><?= $v['title'] ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item__8">
                                        <a href="" class="home__spNoibat__card__btn uk-button uk-button-secondary uk-button-small uk-margin-small-right uk-border-pill">Mở thẻ ngay</a>
                                        <a href="" class="home__spNoibat__card__btn uk-button uk-button-default uk-button-small uk-border-pill">Liên hệ tư vấn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="home__spNoibat__item-48-25 uk-text-center">
            <a href="" class="home__spNoibat__loadMoreBtn uk-button uk-button-secondary uk-border-pill" uk-icon="icon: plus-circle">Tải nhiều hơn</a>
        </div>
    </div>
</div>
<!--/Sản phẩm nổi bật-->

<!--Báo chí nói về chúng tôi-->
<div class="uk-section" uk-height-viewport="expand: true">
    <div class="uk-container">
        1
    </div>
</div>
<!--/Báo chí nói về chúng tôi-->

<?php require "template-parts/layouts/footer.php"; ?>