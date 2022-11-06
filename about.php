<?php $data["title"] = "About"; ?>
<?php $bodyClass = 'uk-background-default' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-xsmall blog__boxBreadcrumb" uk-sticky="offset: 151; media: @m">
    <div class="uk-container uk-padding-remove">
        <div class="uk-overflow-auto home__overflow__scrollbar">
            <ul class="blog__breadcrumb uk-breadcrumb uk-flex-center uk-flex uk-flex-nowrap">
                <li><a href="." uk-icon="icon: home"></a></li>
                <li><span>Về chúng tôi</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="about__section1 uk-section-small uk-background-default">
    <div class="uk-container">
        <div class="home__blog__item-75-30">
            <div class="about__section1__coverImg uk-height-min-medium uk-light uk-background-center-center uk-background-cover uk-background-muted uk-cover-container">
                <canvas width="1200" height="391"></canvas>
                <div class="uk-position-cover uk-flex uk-flex-middle uk-card uk-card-body">
                    <div class="uk-text-center uk-width-1-1">
                        <h1 class="uk-h1 about__section1__coverImg__title">Về chúng tôi</h1>
                        <p class="about__section1__coverImg__desc">Website tư vấn và so sánh sản phẩm tài chính uy tín tại Việt Nam</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__blog__item-75-30">
            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-20-m uk-flex-middle" uk-grid>
                <div>
                    <div class="about__section1__item-24-10">
                        <h2 class="home__spNoibat__title uk-h2 uk-margin-remove">Giới thiệu</h2>
                    </div>
                    <div class="about__section1__item-24-10">
                        <div class="about__section1__desc">Fingo Việt Nam được thành lập vào năm 2015. Dựa trên nền tảng công nghệ, Fingo cam kết mang đến những giải pháp tài chính tối ưu nhất đến với khách hàng. Fingo là một startup về lĩnh vực Fintech đang được đa số khách hàng tại khu vực Việt Nam quan tâm, và được tạp chí Fintech Singapore đề cử vào Top Startup Fintech...</div>
                    </div>
                    <div class="about__section1__item-24-10">
                        <a href="" class="home__about__link">Đọc nhiều hơn</a>
                    </div>
                </div>
                <div class="uk-flex-first@m">
                    <img src="images/Rectangle-1464.png" alt="">
                </div>
            </div>
        </div>
        <div class="home__blog__item-75-30">
            <div class="uk-child-width-1-2@m uk-grid-20-m uk-grid-small uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'title' => 'Khách hàng sử dụng dịch vụ',
                        'number' => '5,555',
                    ),
                    array(
                        'title' => 'Đơn vay đăng ký hôm nay',
                        'number' => '555',
                    ),
                    array(
                        'title' => 'Đơn vay được duyệt',
                        'number' => '90',
                    ),
                    array(
                        'title' => 'Khách hàng quay lại',
                        'number' => '95',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div class="about__section1__column">
                    <div class="uk-card about__section1__card uk-card-body uk-card-default uk-height-min-small">
                        <div class="uk-width-1-1">
                            <div class="uk-flex-middle uk-grid-small uk-grid-30-m" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="about__section1__card__boxIcon uk-cover-container uk-border-circle uk-background-muted">
                                        <canvas width="96" height="96"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="about__section1__card__txt"><?= $v['title'] ?></div>
                                    <div class="about__section1__card__number item__10"><?= $v['number'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="about__section2 uk-section uk-background-muted uk-height-min-medium">
    <div class="uk-container">
        <div class="footer__item-48-20 uk-text-center">
            <div class="about__section2__item-27-15">
                <h2 class="home__spNoibat__title uk-h2 uk-margin-remove uk-text-center">Chúng tôi có thể giúp gì cho bạn?</h2>
            </div>
            <div class="about__section2__item-27-15">
                <div class="about__section1__desc">
                    Kết nối khách hàng với hàng nghìn chuyên gia, nhân viên tư vấn của các <br class="uk-visible@m"> ngân hàng và công ty tài chính trên toàn quốc.
                </div>
            </div>
        </div>
        <div class="footer__item-48-20">
            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-20-m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'txt1' => 'đối với <br> khách hàng',
                        'txt2' => 'Trên Fingo , Khách hàng có cơ hội tìm kiếm, so sánh và lựa chọn các sản phẩm của công ty tài chính, Ngân hàng tốt nhất dựa trên các tiêu chí như: Lãi suất, thời gian vay, số tiền vay, vị trí địa lý…',
                    ),
                    array(
                        'txt1' => 'đối với <br> tổ chức tài chính',
                        'txt2' => 'Tiếp cận với những Khách hàng có nhu cầu vay, mở thẻ tín dụng phù hợp nhất với yêu cầu của từng Ngân hàng/ Tổ chức tài chính. Từ đó tăng khả năng thành công trong cho vay, phát hành thẻ và bán các sản phẩm tài chính khác.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="about__section2__card uk-card uk-card-body uk-card-default uk-height-min-medium uk-border-rounded">
                        <div class="about__section2__item-39-20">
                            <div class="about__section2__card__txt1 uk-height-min-small uk-text-center uk-flex uk-flex-middle uk-flex-center uk-text-capitalize">
                                <?= $v['txt1'] ?>
                            </div>
                        </div>
                        <div class="about__section2__item-39-20">
                            <div class="about__section2__card__txt2"><?= $v['txt2'] ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="about__section3 uk-section-small uk-background-default uk-height-min-medium">
    <div class="uk-container uk-container-xlarge home__blog__item-75-30">
        <div class="footer__item-48-20">
            <h2 class="home__spNoibat__title uk-h2 uk-margin-remove uk-text-center">Đội ngũ</h2>
        </div>
        <div class="footer__item-48-20">
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-small uk-grid-20-m" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'img' => 'images/a.png',
                                    'txt' => 'Nguyễn A',
                                ),
                                array(
                                    'img' => 'images/lemanhhai_anhthe.jpg',
                                    'txt' => 'Nguyễn B',
                                ),
                                array(
                                    'img' => 'images/c.png',
                                    'txt' => 'Nguyễn C',
                                ),
                                array(
                                    'img' => 'images/d.png',
                                    'txt' => 'Nguyễn D',
                                ),
                                array(
                                    'img' => 'images/e.png',
                                    'txt' => 'Nguyễn E',
                                ),
                                array(
                                    'img' => 'images/a.png',
                                    'txt' => 'Nguyễn A',
                                ),
                                array(
                                    'img' => 'images/b.png',
                                    'txt' => 'Nguyễn B',
                                ),
                                array(
                                    'img' => 'images/c.png',
                                    'txt' => 'Nguyễn C',
                                ),
                                array(
                                    'img' => 'images/d.png',
                                    'txt' => 'Nguyễn D',
                                ),
                                array(
                                    'img' => 'images/e.png',
                                    'txt' => 'Nguyễn E',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <li>
                                <div class="uk-text-center">
                                    <div class="uk-cover-container about__section3__coverImg">
                                        <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                        <canvas width="305" height="316"></canvas>
                                        <div class="uk-position-cover about__section3__coverImg__overlay"></div>
                                    </div>
                                    <div class="item__10 about__section3__txt1"><?= $v['txt'] ?></div>
                                    <div class="item__10 about__section3__txt2" uk-icon="icon: user; ratio: .8">Ceo and founder</div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="about__section3__slidenav about__section3__slidenav--prev uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="about__section3__slidenav about__section3__slidenav--next uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="about__section3__slidenav about__section3__slidenav--prev uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="about__section3__slidenav about__section3__slidenav--next uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="uk-container home__blog__item-75-30">
        <div class="footer__item-48-20">
            <h2 class="home__spNoibat__title uk-h2 uk-margin-remove uk-text-center">Đối tác của chúng tôi</h2>
        </div>
        <div class="footer__item-48-20">
            <?php require "template-parts/layouts/doitac.php"; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>