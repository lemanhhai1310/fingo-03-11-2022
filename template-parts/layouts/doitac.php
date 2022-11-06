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