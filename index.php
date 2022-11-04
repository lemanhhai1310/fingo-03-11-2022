<?php $data["title"] = "Homepage"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-viewport">

</div>
<!--Về chúng tôi-->
<div class="uk-section home__about">
    <div class="uk-container">
        <div class="home__about__item-90-40 uk-text-center">
            <div class="item__15">
                <h2 class="home__spNoibat__title uk-h2 uk-text-center uk-margin-remove">Về chúng tôi</h2>
            </div>
            <div class="item__15">
                <div class="home__about__desc"><span>Fingo</span> bên cạnh việc cung cấp hệ thống, tư vấn giải pháp về các chương trình vay, thẻ tín dụng phù hợp, Fingo còn hỗ
                    <br class="uk-visible@m"> trợ xử lý hồ sơ vay vốn tiêu dùng cũng như làm thẻ tín dụng miễn phí cho khách hàng đến khi hoàn thành tất cả mọi
                    <br class="uk-visible@m"> thủ tục. Các dịch vụ này đều được đỗi ngũ Fingo tư vấn miễn phí.</div>
            </div>
            <div class="item__15">
                <a href="" class="home__about__link" uk-icon="icon: arrow-right">Xem thông tin nhiều hơn</a>
            </div>
        </div>
        <div class="home__about__item-90-40">
            <div class="uk-overflow-auto home__boxSpace home__overflow__scrollbar home__overflow__boxshadow">
                <div uk-scrollspy="target: .animation; cls: uk-animation-slide-left-small; delay: 300" class="uk-child-width-1-4@m uk-child-width-auto uk-flex-middle uk-grid-match uk-grid-20 uk-flex-nowrap" uk-grid>
                    <div class="home__about__column" uk-toggle="cls: home__overflow__column; mode: media; media: (max-width: 959.8px)">
                        <div class="" uk-toggle="cls: uk-width-medium; mode: media; media: (max-width: 959.8px)">
                            <div class="item__15">
                                <div class="home__about__txt1">Cách sử dụng Fingo</div>
                            </div>
                            <div class="item__15">
                                <div class="home__about__txt2">3 bước đơn giản để tìm kiếm sản phẩm tài chính phù hợp với Fingo</div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $data = array(
                        'Nhập thông tin <br> & tìm kiếm',
                        'So sánh <br> các sản phẩm',
                        'Chọn sản phẩm <br> phù hợp',
                    );
                    foreach ($data as $k=>$v): ?>
                    <div class="home__about__column animation" uk-toggle="cls: home__overflow__column; mode: media; media: (max-width: 959.8px)">
                        <div data-number="<?= $k+1; ?>" class="home__about__box uk-height-min-small uk-flex uk-flex-middle" uk-toggle="cls: uk-width-medium; mode: media; media: (max-width: 959.8px)">
                            <div class="uk-text-center"><?= $v ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Về chúng tôi-->

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
                                        <canvas class="uk-visible@m" width="147" height="122"></canvas>
                                        <canvas class="uk-hidden@m" width="350" height="290"></canvas>
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


<div class="uk-section" uk-height-viewport="expand: true">
    <div class="uk-container">
        <!--Báo chí nói về chúng tôi-->
        <div class="home__baochi__item-115-60">
            <div class="home__spNoibat__item-48-25">
                <h2 class="home__spNoibat__title home__spNoibat__title--c1 uk-h2 uk-text-center uk-margin-remove">Báo chí nói về chúng tôi</h2>
            </div>
            <div class="home__spNoibat__item-48-25">
                <div class="home__baochi__item-40-20">
                    <div class="uk-text-center home__baochi__desc">
                        Fingo là một nền tảng tài chính công nghệ trẻ, năng động đang nhận <br class="uk-visible@m"> được sự quan tâm của đông đảo khách hàng tại Việt Nam.
                    </div>
                </div>
                <div class="home__baochi__item-40-20">
                    <div uk-slider="autoplay: true">

                        <div class="uk-position-relative">

                            <div class="uk-slider-container">
                                <ul class="uk-slider-items uk-grid-match uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                                    <?php
                                    $data = array(
                                        'images/1280px-VTV1_logo_2013_final.png',
                                        'images/Vietnamnet-Logo.png',
                                        'images/VnExpress_logo.png',
                                        'images/nhip-cau-dau-tu.png',
                                        'images/1280px-VTV1_logo_2013_final.png',
                                        'images/Vietnamnet-Logo.png',
                                        'images/VnExpress_logo.png',
                                        'images/nhip-cau-dau-tu.png',
                                    );
                                    foreach ($data as $k=>$v): ?>
                                    <li>
                                        <div class="uk-flex uk-flex-column uk-text-center">
                                            <div class="uk-flex-auto uk-flex uk-flex-middle uk-flex-center">
                                                <img src="<?= $v ?>" alt="">
                                            </div>
                                            <div class="item__24">
                                                <a href="" class="home__baochi__link1">Xem chi tiết >></a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="uk-hidden@s uk-light">
                                <a class="home__baochi__slidenav home__baochi__slidenav--prev uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="home__baochi__slidenav home__baochi__slidenav--next uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                            <div class="uk-visible@s">
                                <a class="home__baochi__slidenav home__baochi__slidenav--prev uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="home__baochi__slidenav home__baochi__slidenav--next uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="home__spNoibat__item-48-25">
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-20-m uk-grid-match" uk-grid>
                    <div class="uk-width-1-1 uk-width-1-2@m">
                        <div class="uk-cover-container">
                            <img src="images/Rectangle1464.png" alt="" uk-cover="">
                            <canvas width="590" height="307"></canvas>
                            <a href="#modal-media-youtube" uk-toggle class="home__baochi__link uk-position-cover"></a>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-1-4@m">
                        <div class="uk-cover-container">
                            <img src="images/Rectangle1465.png" alt="" uk-cover="">
                            <canvas width="283" height="307"></canvas>
                            <a href="#modal-media-youtube" uk-toggle class="home__baochi__link uk-position-cover"></a>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-1-4@m">
                        <div class="uk-cover-container">
                            <img src="images/Rectangle1466.png" alt="" uk-cover="">
                            <canvas width="283" height="307"></canvas>
                        </div>
                    </div>
                </div>

                <div id="modal-media-youtube" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA" width="1920" height="1080" uk-video uk-responsive></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--/Báo chí nói về chúng tôi-->

        <!--Khách hàng nói gì về Fingo-->
        <div class="home__baochi__item-115-60">
            <div class="home__khachhang__card uk-position-relative uk-card uk-card-body uk-card-default">
                <div class="home__khachhang__box uk-position-cover"></div>
                <div class="uk-position-relative">
                    <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                        <div class="uk-visible@m">
                            <img src="images/section-3-shape-social-girl1.png" alt="">
                        </div>
                        <div>
                            <div class="home__khachhang__item-36-20">
                                <h2 class="home__spNoibat__title home__spNoibat__title--c2 uk-h2 uk-margin-remove">Khách hàng nói gì về Fingo</h2>
                            </div>
                            <div class="home__khachhang__item-36-20">
                                <div class="home__khachhang__box1 uk-height-min-small">
                                    <div uk-slider="autoplay: true">

                                        <div class="uk-position-relative">

                                            <div class="uk-slider-container">
                                                <ul class="uk-slider-items uk-child-width-1-1">
                                                    <?php for ($i=0;$i<=4;$i++): ?>
                                                    <li>
                                                        <div>
                                                            <span class="home__khachhang__star"></span>
                                                            <span class="home__khachhang__star"></span>
                                                            <span class="home__khachhang__star"></span>
                                                            <span class="home__khachhang__star"></span>
                                                            <span class="home__khachhang__star"></span>
                                                        </div>
                                                        <div class="item__14 home__khachhang__desc">Nhân viên tư vấn rất nhiệt tình, chọn đúng ngân hàng phù hợp, vay được hạn mức cao và lãi suất ưu đãi, không phải mất phí ngoài, đặc biệt nhân viên chăm sóc cũng rất nhiệt tình hỗ trợ tốt.</div>
                                                        <div class="item__19 uk-grid-small uk-flex-middle" uk-grid>
                                                            <div class="uk-width-auto">
                                                                <div class="uk-cover-container uk-border-circle">
                                                                    <img src="images/K/Photo.png" alt="" uk-cover="">
                                                                    <canvas width="56" height="56"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="uk-width-expand">
                                                                <div class="home__khachhang__name">Mr. Quang</div>
                                                                <div class="item__4 home__khachhang__txt">Nhân viên văn phòng</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php endfor; ?>
                                                </ul>
                                            </div>

                                            <div class="uk-hidden@s uk-light">
                                                <a class="home__khachhang__slidenav home__khachhang__slidenav--prev uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                <a class="home__khachhang__slidenav home__khachhang__slidenav--next uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                            </div>

                                            <div class="uk-visible@s">
                                                <a class="home__khachhang__slidenav home__khachhang__slidenav--prev uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                <a class="home__khachhang__slidenav home__khachhang__slidenav--next uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                            </div>

                                        </div>

                                        <ul class="uk-slider-nav home__khachhang__dotnav uk-dotnav uk-margin"></ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Khách hàng nói gì về Fingo-->

        <!--Tin tức mới-->
        <div class="home__baochi__item-115-60">
            <div class="home__blog__item-75-30">
                <div class="uk-grid-small uk-grid-50-m" uk-grid>
                    <div class="uk-width-1-4@m">
                        <h2 class="home__spNoibat__title uk-h2 uk-margin-remove">Tin tức mới</h2>
                        <div class="item__10 home__blog__txt">Các sự kiện sắp tới, cẩm nang và tin tức mới nhất từ Fingo</div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-20-m" uk-grid>
                            <?php
                            $data = array(
                                'Kiến thức vay',
                                'Tài chính cá nhân',
                                'Kiến thức vay',
                            );
                            foreach ($data as $k=>$v): ?>
                            <div>
                                <div class="home__blog__card uk-card uk-card-default">
                                    <div class="uk-cover-container">
                                        <img src="https://picsum.photos/285/250/?random=<?= $k ?>" alt="" uk-cover="">
                                        <canvas width="285" height="250"></canvas>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="home__blog__card__label"><?= $v ?></div>
                                        <h3 class="uk-h3 home__blog__card__title item__10 uk-margin-remove-bottom"><a href="">Hướng dẫn sử dụng?...</a></h3>
                                        <div class="uk-child-width-auto item__10" uk-grid>
                                            <div>
                                                <span class="home__blog__card__txtSmall" uk-icon="icon: calendar; ratio:0.8;">17/10/2022</span>
                                            </div>
                                            <div>
                                                <span class="home__blog__card__txtSmall" uk-icon="icon: heart; ratio:0.8;">23</span>
                                            </div>
                                        </div>
                                        <div class="home__blog__card__desc item__10">Các thông tin mới nhất luôn được  cập nhật...</div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home__blog__item-75-30">
                <div uk-slider="autoplay: true">

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-flex-middle uk-child-width-1-3 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-middle" uk-grid>
                                <?php
                                $data = array(
                                    'images/logo-bidv-2022-dongphucsongphu1.png',
                                    'images/Logo-TPBank1.png',
                                    'images/vietcombank-logo-11.png',
                                    'images/logo-ngan-hang-vpbank1.png',
                                    'images/logo-mbbanksd1.png',

                                    'images/logo-bidv-2022-dongphucsongphu1.png',
                                    'images/Logo-TPBank1.png',
                                    'images/vietcombank-logo-11.png',
                                    'images/logo-ngan-hang-vpbank1.png',
                                    'images/logo-mbbanksd1.png',
                                );
                                foreach ($data as $k=>$v): ?>
                                <li class="uk-text-center">
                                    <img src="<?= $v ?>" alt="">
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </div>

                    <ul class="uk-slider-nav home__blog__dotnav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>

                </div>
            </div>
        </div>
        <!--/Tin tức mới-->
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>