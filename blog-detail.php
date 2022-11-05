<?php $data["title"] = "Blog Detail"; ?>
<?php $bodyClass = 'blog-detail' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-muted uk-section-xsmall blog__boxBreadcrumb" uk-sticky="offset: 151; media: @m">
    <div class="uk-container uk-padding-remove">
        <div class="uk-overflow-auto home__overflow__scrollbar">
            <ul class="blog__breadcrumb uk-breadcrumb uk-flex-center uk-flex uk-flex-nowrap">
                <li><a href="." uk-icon="icon: home"></a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="">Tài chính cá nhân</a></li>
                <li><span>Vay tiền NÓNG Online, nhận tiền LIỀN TAY sau 30 phút</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="uk-section-small blog__content" uk-height-viewport="offset-top: true">
    <div class="uk-container">
        <div class="blog__content__coverImg uk-cover-container uk-background-muted home__boxSpace">
            <img src="https://picsum.photos/1200/391/?random=<?php echo(time()) ?>" alt="" uk-cover="">
            <canvas class="uk-visible@m" width="1200" height="391"></canvas>
            <canvas class="uk-hidden@m" width="450" height="300"></canvas>
        </div>
        <div class="uk-margin-top uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <article class="uk-height-viewport-2">

                </article>
            </div>
            <div class="uk-width-1-4@m">
                <aside class="blog__blockContent__aside">
                    <div class="uk-position-z-index-zero" uk-sticky="end: true; offset: 211;">
                        <?php require "template-parts/layouts/blog.php"; ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>