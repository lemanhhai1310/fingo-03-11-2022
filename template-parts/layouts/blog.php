<div class="blog__blockContent__aside__card uk-card uk-card-body uk-padding-small uk-card-default uk-height-min-medium">
    <h4 class="uk-h4 uk-text-center blog__blockContent__aside__card__title">Bài viết đọc nhiều</h4>
    <ul class="uk-nav uk-nav-divider blog__blockContent__aside__navList">
        <?php
        $data = array(
            'Hướng dẫn kiểm tra số CMND, CCCD Online nhanh và chính xác nhất 2020',
            'Vay tiền không thế chấp, không cần chứng minh thu nhập tại TPHCM',
            'Vay tiền NÓNG Online, nhận tiền LIỀN TAY sau 30 phút',
            'Nợ xấu CIC là gì? Nợ xấu có vay tiền được không? Hướng dẫn tra cứu CIC',
            'Giải đáp thắc mắc về việc mở thẻ ATM và những lưu ý cần biết khi mở thẻ',
        );
        foreach ($data as $k=>$v): ?>
            <li><a href="blog-detail.php" data-number="<?= $k+1 ?>"><?= $v ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>