<?php $data["title"] = "Blog"; ?>
<?php $bodyClass = 'blog' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-muted">
    <div class="uk-section-xsmall uk-text-center" uk-toggle="cls: uk-section-small; mode: media; media: @m">
        <div class="uk-container">
            <h1 class="uk-h1 blog__title">Fingo Blog</h1>
        </div>
    </div>
    <div class="uk-background-muted blog__navbar" uk-sticky="offset: 151; media: @m">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar-container uk-navbar-transparent uk-overflow-auto home__overflow__scrollbar" uk-navbar>
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav uk-flex-nowrap">
                        <li class="uk-active"><a href="#">Tất cả bài viết</a></li>
                        <li><a href="#">Tài chính cá nhân</a></li>
                        <li><a href="#">Kiến thức vay</a></li>
                        <li><a href="#">Đầu tư</a></li>
                        <li><a href="#">Ngân hàng</a></li>
                        <li><a href="#">Tiết kiệm</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>
<div class="blog__blockContent uk-background-default uk-section-small">
    <div class="uk-container">
        <?php for ($i=0;$i<=2;$i++): ?>
        <?php if ($i==0): ?>
        <div class="uk-grid-small uk-grid-20-m uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-flex uk-flex-column">
                    <div class="uk-cover-container home__blog__card uk-background-muted uk-flex-auto">
                        <img src="https://picsum.photos/895/391/?random=<?= $i ?>" alt="" uk-cover="">
                        <canvas width="895" height="391"></canvas>
                    </div>
                    <div class="uk-margin-top">
                        <div class="uk-child-width-auto uk-grid uk-visible@m" uk-grid="">
                            <div class="uk-first-column">
                                <span class="home__blog__card__txtSmall uk-icon" uk-icon="icon: calendar; ratio:0.8;">17/10/2022<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M 2,3 2,17 18,17 18,3 2,3 Z M 17,16 3,16 3,8 17,8 17,16 Z M 17,7 3,7 3,4 17,4 17,7 Z"></path><rect width="1" height="3" x="6" y="2"></rect><rect width="1" height="3" x="13" y="2"></rect></svg></span>
                            </div>
                            <div>
                                <span class="home__blog__card__txtSmall uk-icon" uk-icon="icon: heart; ratio:0.8;">23<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.03" d="M10,4 C10,4 8.1,2 5.74,2 C3.38,2 1,3.55 1,6.73 C1,8.84 2.67,10.44 2.67,10.44 L10,18 L17.33,10.44 C17.33,10.44 19,8.84 19,6.73 C19,3.55 16.62,2 14.26,2 C11.9,2 10,4 10,4 L10,4 Z"></path></svg></span>
                            </div>
                        </div>
                        <div class="home__blog__card__label item__10 uk-visible@m">Giải trí</div>
                        <h3 class="uk-h3 home__blog__card__title home__blog__card__title--c1 item__10 uk-margin-remove-bottom"><a href="blog-detail.php">Ahn Yu Jin - nữ thần tượng tài sắc vẹn toàn ở Kpop</a></h3>
                        <div class="home__blog__card__desc item__10">Thẻ tín dụng (Credit Card) là thẻ do ngân hàng phát hành cho phép bạn mượn trước tiền của ngân hàng để mua hàng với điều kiện bạn phải hoàn trả lại số tiền bạn đã tiêu trong một khoảng thời gian.</div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-child-width-1-1 uk-grid-10 uk-grid-match" uk-grid>
                    <?php else: ?>
                    <div>
                        <div class="home__blog__card uk-card uk-background-muted">
                            <div class="uk-grid-collapse uk-grid-match" uk-grid>
                                <div class="uk-width-1-1@s uk-width-2-5">
                                    <div class="uk-cover-container uk-background-muted">
                                        <img src="https://picsum.photos/285/135/?random=<?= $i ?>" alt="" uk-cover="">
                                        <canvas width="285" height="135"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-card-body uk-padding-small">
                                        <div class="home__blog__card__label">Giải trí</div>
                                        <h3 class="uk-h3 home__blog__card__title item__0 uk-margin-remove-bottom">Ahn Yu Jin - nữ thần tượng tài sắc vẹn toàn ở Kpop</h3>
                                        <div class="uk-child-width-auto item__0 uk-grid" uk-grid="">
                                            <div class="uk-first-column">
                                                <span class="home__blog__card__txtSmall uk-icon" uk-icon="icon: calendar; ratio:0.8;">17/10/2022<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M 2,3 2,17 18,17 18,3 2,3 Z M 17,16 3,16 3,8 17,8 17,16 Z M 17,7 3,7 3,4 17,4 17,7 Z"></path><rect width="1" height="3" x="6" y="2"></rect><rect width="1" height="3" x="13" y="2"></rect></svg></span>
                                            </div>
                                            <div>
                                                <span class="home__blog__card__txtSmall uk-icon" uk-icon="icon: heart; ratio:0.8;">23<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.03" d="M10,4 C10,4 8.1,2 5.74,2 C3.38,2 1,3.55 1,6.73 C1,8.84 2.67,10.44 2.67,10.44 L10,18 L17.33,10.44 C17.33,10.44 19,8.84 19,6.73 C19,3.55 16.62,2 14.26,2 C11.9,2 10,4 10,4 L10,4 Z"></path></svg></span>
                                            </div>
                                        </div>
                                        <div class="home__blog__card__desc item__3">Gia nhập Kbiz từ năm 13 tuổi cùng với nỗ lực không ngừng để hoàn thiện bản thân, Ahn Yu Jin hiện được công nhận là đại diện tiêu biểu cho thế hệ idol trẻ tuổi toàn năng ở Kpop.</div>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-detail.php" class="uk-position-cover"></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-background-muted uk-section">
    <div class="uk-container">
        <div class="uk-grid-20-m uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-grid-small uk-grid-20-m uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                    <?php for ($i=0;$i<=8;$i++): ?>
                    <div>
                        <div class="home__blog__card uk-card uk-background-default">
                            <div class="uk-grid-collapse uk-grid-match" uk-grid>
                                <div class="uk-width-1-1@s uk-width-1-1">
                                    <div class="uk-cover-container uk-background-muted">
                                        <img src="https://picsum.photos/284/250/?random=<?= $i ?>" alt="" uk-cover="">
                                        <canvas width="284" height="250"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-card-body uk-padding-small">
                                        <div class="home__blog__card__label">Giải trí</div>
                                        <h3 class="uk-h3 home__blog__card__title item__10 uk-margin-remove-bottom">Ahn Yu Jin - nữ thần tượng tài sắc vẹn toàn ở Kpop</h3>
                                        <div class="uk-child-width-auto item__10 uk-grid" uk-grid="">
                                            <div class="uk-first-column">
                                                <span class="home__blog__card__txtSmall uk-icon" uk-icon="icon: calendar; ratio:0.8;">17/10/2022<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M 2,3 2,17 18,17 18,3 2,3 Z M 17,16 3,16 3,8 17,8 17,16 Z M 17,7 3,7 3,4 17,4 17,7 Z"></path><rect width="1" height="3" x="6" y="2"></rect><rect width="1" height="3" x="13" y="2"></rect></svg></span>
                                            </div>
                                            <div>
                                                <span class="home__blog__card__txtSmall uk-icon" uk-icon="icon: heart; ratio:0.8;">23<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.03" d="M10,4 C10,4 8.1,2 5.74,2 C3.38,2 1,3.55 1,6.73 C1,8.84 2.67,10.44 2.67,10.44 L10,18 L17.33,10.44 C17.33,10.44 19,8.84 19,6.73 C19,3.55 16.62,2 14.26,2 C11.9,2 10,4 10,4 L10,4 Z"></path></svg></span>
                                            </div>
                                        </div>
                                        <div class="home__blog__card__desc item__10">Gia nhập Kbiz từ năm 13 tuổi cùng với nỗ lực không ngừng để hoàn thiện bản thân, Ahn Yu Jin hiện được công nhận là đại diện tiêu biểu cho thế hệ idol trẻ tuổi toàn năng ở Kpop.</div>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-detail.php" class="uk-position-cover"></a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <ul class="blog__pagination uk-pagination uk-flex-center home__spNoibat__item-48-25">
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                </ul>
            </div>
            <div class="uk-width-1-4@m">
                <aside class="blog__blockContent__aside">
                    <div class="uk-position-z-index-zero" uk-sticky="end: true; offset: 221;">
                        <?php require "template-parts/layouts/blog.php"; ?>
                    </div>
                </aside>
            </div>
        </div>
        <div class="blog__boxAds home__blog__item-75-30 uk-card uk-card-body uk-flex uk-flex-middle uk-height-min-small">
            <div class="uk-width-1-1">
                <h2 class="uk-h2 blog__boxAds__title">Kết nối ngay để chúng tôi hiểu thêm về bạn</h2>
                <p class="blog__boxAds__desc">Chúng tôi quan tâm đến giải pháp quản lý tài chính cá nhân hiệu quả, giúp bạn <br class="uk-visible@m"> sử dụng, phân bổ và kiểm soát tốt tài chính cá nhân</p>
                <a href="" class="header__bottom__btn uk-button uk-button-default uk-border-pill" uk-toggle="cls: uk-button-small; mode: media; media: (max-width: 959.8px)">Liên hệ ngay</a>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>