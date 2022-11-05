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
                        <div>Fingo Việt Nam được thành lập vào năm 2015. Dựa trên nền tảng công nghệ, Fingo cam kết mang đến những giải pháp tài chính tối ưu nhất đến với khách hàng. Fingo là một startup về lĩnh vực Fintech đang được đa số khách hàng tại khu vực Việt Nam quan tâm, và được tạp chí Fintech Singapore đề cử vào Top Startup Fintech...</div>
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
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-height-min-small">
                        
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="about__section2 uk-section uk-background-muted uk-height-min-medium">
    <div class="uk-container">

    </div>
</div>
<div class="about__section3 uk-section-small uk-background-default uk-height-min-medium">

</div>
<?php require "template-parts/layouts/footer.php"; ?>