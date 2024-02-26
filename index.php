<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Banner-->
<div class="home__banner__bg uk-position-relative uk-background-norepeat uk-background-cover uk-background-center-center lazy" data-src="images/construction-plans-architectural-project1.png" uk-height-viewport="offset-bottom: 20">
    <div class="uk-position-cover uk-background-norepeat uk-background-bottom-right lazy" data-src="images/banner_Ellipse26.png"></div>
    <div class="uk-position-cover uk-flex uk-flex-bottom">
        <div class="uk-width uk-section home__banner__section">
            <div class="uk-container uk-container-xlarge">
                <div class="uk-child-width-auto@l uk-flex-between" uk-grid>
                    <div>
                        <div class="width-906px">
                            <h2 class="home__banner__title">
                                We strive to deliver top-quality home remodels and renovations <span>that exceed your expectations</span>
                            </h2>
                        </div>
                    </div>
                    <div>
                        <div class="width-533px">
                            <p class="home__banner__desc">Our team of experienced professionals takes pride in transforming your house into your dream home, and we’re dedicated to making your remodeling process stress-free and enjoyable.</p>
                            <p class="home__banner__desc">Whether you’re looking for a small renovation or a full-scale remodel, we’re here to make your dreams a reality. Contact us today to schedule your consultation and take the first step towards your dream home.  Learn more about our process here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Banner-->

<!--Intro-->
<div class="home__intro__section uk-section">
    <div class="uk-container uk-container-xlarge">
        <div class="uk-child-width-1-3@l" uk-grid uk-height-match=".my-class-img">
            <?php
            $data = array(
                array(
                    "title" => "Reliable Experts",
                    'img' => "images/intro1.png",
                ),
                array(
                    "title" => "Licensed Contractor",
                    'img' => "images/intro2.png",
                ),
                array(
                    "title" => "Quality Guaranteed",
                    'img' => "images/intro3.png",
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div>
                <div class="home__intro__box">
                    <div class="my-class-img uk-flex uk-flex-middle">
                        <img class="lazy" data-src="<?= $v['img'] ?>" alt="">
                    </div>
                    <h3 class="home__intro__box__title"><?= $v['title'] ?></h3>
                    <div class="home__intro__box__txt width-376px">Lorem ipsum dolor sit amet consecte. Bibendum tempus aliquam sed.</div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--/Intro-->

<!--Who We Are-->
<div class="home__who__section uk-section-large uk-background-image@l">
    <div class="uk-container uk-container-xlarge">
        <h3 class="home__Testimonials__title uk-flex-center" style="display: flex">Who We Are</h3>

        <h2 class="home__title home__title--67 item-60px uk-text-uppercase clip-text width-1526px uk-margin-auto uk-text-center">
            Welcome to Bitwood Build, where we strive to deliver
            <img class="lazy" data-src="images/Frame589.png" alt="">
            top-quality home remodels. and renovations that exceed.
            <img class="lazy" data-src="images/Frame590.png" alt="">
            your expectations.
        </h2>

        <div class="width-1209px uk-margin-auto item-101px">
            <div class="uk-cover-container">
                <img class="lazy" data-src="images/modern-styled-small-entryway1.png" alt="" uk-cover="">
                <canvas width="1209" height="629"></canvas>
                <a href="#modal-media-youtube" uk-toggle class="uk-position-center home__Testimonials__video__btnPlay">
                    <svg xmlns="http://www.w3.org/2000/svg" width="218" height="218" viewBox="0 0 218 218" fill="none">
                        <rect x="1.56214" y="1.56214" width="214.534" height="214.534" rx="107.267" stroke="white" stroke-width="3.12428"/>
                        <path d="M89.8047 77.625L140.033 109.589L89.8047 141.553V77.625Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
        <p class="home__who__txt width-803px item-85px uk-margin-auto uk-text-center">
            Whether you’re looking for a small renovation or a full-scale remodel, we’re here to make your dreams a reality. Contact us today to schedule your consultation and take the first step towards your dream home.
        </p>
        <div class="uk-text-center item-50px">
            <a href="" class="home__btn home__btn--outline uk-button uk-button-primary uk-border-pill">Learn More</a>
        </div>
    </div>
</div>
<!--/Who We Are-->

<div class="home__expertise__section uk-section-large">
    <div class="uk-container uk-container-xlarge">
        <div class="uk-grid-divider uk-grid-large" uk-grid>
            <div class="uk-width-expand">
                <h3 class="home__Testimonials__title" uk-toggle="cls: uk-margin-top; mode: media; media: @l">Our Expertise</h3>
                <div class="item-400px" uk-toggle="cls: item-400px; mode: media; media: @l">
                    <h2 class="home__expertise__title1"><span class="uk-position-z-index-negative">230+</span></h2>
                    <div class="home__expertise__title2">Completed Project</div>
                </div>
            </div>
            <div class="uk-width-auto@l">
                <div class="width-1084px">
                    <h2 class="home__title home__title--67 clip-text">Nulla neque lorem aliquam lectus consequat scelerisque fermentum.</h2>
                    <p class="home__contact__txt width-651px item-46px">Lorem ipsum dolor sit amet consectetur. Iaculis ac vitae a rutrum in non nullam viverra. Est mattis dolor eget sociis quam nunc. Malesuada eget non pretium aliquet. Imperdiet id amet pulvinar eleifend mauris</p>
                    <div class="uk-child-width-1-2@l item-208px" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'img' => 'images/v1.png',
                                'title' => 'High Quality',
                                'txt' => '',
                            ),
                            array(
                                'img' => 'images/v2.png',
                                'title' => 'Professional Technique',
                                'txt' => '',
                            ),
                            array(
                                'img' => 'images/v3.png',
                                'title' => 'Varierty of Material',
                                'txt' => '',
                            ),
                            array(
                                'img' => 'images/v4.png',
                                'title' => 'Custom Production',
                                'txt' => '',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                        <div>
                            <div class="home__expertise__box uk-background-norepeat" style="--img: url(<?= $v['img'] ?>)">
                                <h4 class="home__expertise__box__title clip-text"><?= $v['title'] ?></h4>
                                <p class="home__contact__txt width-305px">Lorem ipsum dolor sit amet consectetur. Iaculis ac vitae a rutrum in non nullam viverra.</p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__startBox uk-card uk-card-body item-216px uk-text-center">
            <div class="home__contact__flex uk-flex uk-flex-column">
                <h2 class="home__title uk-position-z-index clip-text home__title--60 home__title--lineBottom">Start The Process Now!</h2>
                <div class="home__contact__txt uk-position-z-index width-1021px uk-margin-auto">Lorem ipsum dolor sit amet consectetur. Iaculis ac vitae a rutrum in non nullam viverra. Est mattis dolor eget sociis quam nunc. Malesuada eget non pretium aliquet. Imperdiet id amet pulvinar eleifend mauris</div>
                <div>
                    <div class="uk-position-z-index uk-child-width-1-3@l uk-grid-small uk-grid-32-l" uk-grid>
                        <div>
                            <a href="" class="home__btn uk-width home__btn--outline uk-button uk-button-primary uk-border-pill">Get Started on Your Dream Bathroom!</a>
                        </div>
                        <div>
                            <a href="" class="home__btn uk-width home__btn--outline uk-button uk-button-primary uk-border-pill">Get Started on Your Dream Kitchen</a>
                        </div>
                        <div>
                            <a href="" class="home__btn uk-width home__btn--outline uk-button uk-button-primary uk-border-pill">Get Started on Your Basement</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-child-width-auto uk-flex-between item-273px" uk-grid>
            <div>
                <h3 class="home__Testimonials__title" uk-toggle="cls: uk-margin-top; mode: media; media: @l">Our Sevices</h3>
            </div>
            <div>
                <h2 class="home__title home__title--67 clip-text width-1084px">Nulla neque lorem aliquam lectus consequat scelerisque fermentum.</h2>
            </div>
        </div>
        <div class="uk-child-width-1-2@l item-150px uk-grid-row-large uk-grid-column-medium" uk-grid uk-scrollspy="target: .anima; repeat: false; cls: animate; delay: 200">
            <?php
            $data = array(
                array(
                    'img' => 'images/service1.png',
                    'txt' => 'Kitchen Remodeling',
                ),
                array(
                    'img' => 'images/service2.png',
                    'txt' => 'Bathroom Remodeling',
                ),
                array(
                    'img' => 'images/service3.png',
                    'txt' => 'Basement Remodeling',
                ),
                array(
                    'img' => 'images/service4.png',
                    'txt' => 'Tile & Flooring',
                ),
                array(
                    'img' => 'images/service5.png',
                    'txt' => 'Investor Services',
                ),
                array(
                    'img' => 'images/service6.png',
                    'txt' => 'Handyman Services',
                ),
            );
            foreach ($data as $k=> $v): ?>
            <div>
                <div class="anima">
                    <div class="uk-cover-container">
                        <img class="lazy" data-src="<?= $v['img'] ?>" alt="" uk-cover="">
                        <canvas width="831" height="500"></canvas>
                    </div>
                    <div class="item-52px" uk-grid>
                        <div class="uk-width-expand">
                            <h3 class="home__service__title clip-text"><a href="" class="uk-link-toggle"><?= $v['txt'] ?></a></h3>
                            <div class="home__service__txt width-324px">Nulla neque lorem aliquam lectus consequat scelerisque fermentum sit justo.</div>
                        </div>
                        <div class="uk-width-auto">
                            <a href="" class="home__btn home__btn--success uk-button uk-button-primary uk-border-pill">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!--Our Projects-->
<div class="home__project__section uk-section-large uk-height-viewport">
    <div class="uk-container uk-container-xlarge">
        <h3 class="home__Testimonials__title">Our Projects</h3>
        <div class="uk-child-width-auto@l item-57px" uk-grid>
            <div>
                <h2 class="home__title home__title--67 clip-text width-1078px">Est mattis dolor eget sociis quam nunc. Malesuada eget non</h2>
            </div>
            <div>
                <p class="home__contact__txt width-463px">Lorem ipsum dolor sit amet consectetur. Iaculis ac vitae a rutrum in non nullam viverra. Est mattis dolor eget sociis quam nunc. Malesuada eget non pretium aliquet. Imperdiet id amet pulvinar eleifend mauris</p>
                <div class="item-69px">
                    <a href="" class="home__btn home__btn--outline uk-button uk-button-primary uk-border-pill">Learn More</a>
                </div>
            </div>
        </div>
        <div class="item-148px uk-flex-right" uk-grid>
            <div class="uk-width-auto">
                <div class="width-1266px">
                    <div class="uk-child-width-1-2@m uk-grid-large" uk-grid="parallax: 255; parallax-start: 10%; parallax-end: 50%;">
                        <?php for ($i=1;$i<=4;$i++): ?>
                        <div>
                            <div class="uk-card">
                                <div class="uk-cover-container">
                                    <img class="lazy" data-src="images/project<?= $i ?>.png" alt="" uk-cover="">
                                    <canvas width="592" height="482"></canvas>
                                </div>
                                <div class="uk-card-body home__project__card__body">
                                    <h4 class="home__project__card__title uk-position-z-index"><a href="" class="uk-link-toggle">Foerster St.</a></h4>
                                    <div class="home__project__card__txt item-44px uk-position-z-index">Bathroom Remodel, Kitchen Remodel, Tile & Flooring</div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Our Projects-->

<!--Testimonials-->
<div class="home__Testimonials__section uk-section-large uk-background-image@l">
    <div class="uk-container uk-container-xlarge uk-container-expand-right">
        <div class="uk-container-item-padding-remove-right" uk-toggle="cls: uk-container-item-padding-remove-right; mode: media; media: @l">
            <div class="uk-grid-263-l" uk-grid>
                <div class="uk-width-auto@l">
                    <h3 class="home__Testimonials__title" uk-toggle="cls: uk-margin-top; mode: media; media: @l">Testimonials</h3>
                </div>
                <div class="uk-width-expand">
                    <h2 class="home__title clip-text home__title--67">What our clients say?</h2>
                    <p class="home__contact__txt width-696px">Lorem ipsum dolor sit amet consectetur. Iaculis ac vitae a rutrum in non nullam viverra. Est mattis dolor eget sociis quam nunc.</p>
                    <div class="item-108px uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-grid-small uk-grid-28-l" uk-grid>
                            <?php for ($i=1;$i<=3;$i++): ?>
                            <li class="uk-width-4-5 uk-width-auto@l">
                                <div class="home__Testimonials__boxCard uk-card uk-card-body width-592px">
                                    <div class="uk-grid-small uk-grid-35-l" uk-grid>
                                        <div class="uk-width-1-3 uk-width-auto@l">
                                            <div class="uk-cover-container">
                                                <img class="lazy" data-src="images/Frame589_<?= $i ?>.png" alt="" uk-cover="">
                                                <canvas width="151" height="89"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <h4 class="home__Testimonials__boxCard__name clip-text">Jamnie Langston</h4>
                                            <div class="home__Testimonials__boxCard__txt">BOSTON</div>
                                        </div>
                                    </div>
                                    <div class="home__contact__txt">Lorem ipsum dolor sit amet consectetur. Iaculis ac vitae a rutrum in non nullam viverra. Est mattis dolor eget sociis quam nunc.</div>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>

                        <ul class="home__Testimonials__slider__dotnav uk-flex-middle uk-slider-nav uk-dotnav uk-margin-medium"></ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item-189px uk-container uk-container-xlarge">
        <div class="uk-cover-container">
            <img class="lazy" data-src="images/unsplash_v2aKnjMbP_k.png" alt="" uk-cover="">
            <canvas width="1704" height="716"></canvas>
            <a href="#modal-media-youtube" uk-toggle class="uk-position-center home__Testimonials__video__btnPlay">
                <svg xmlns="http://www.w3.org/2000/svg" width="218" height="218" viewBox="0 0 218 218" fill="none">
                    <rect x="1.56214" y="1.56214" width="214.534" height="214.534" rx="107.267" stroke="white" stroke-width="3.12428"/>
                    <path d="M89.8047 77.625L140.033 109.589L89.8047 141.553V77.625Z" fill="white"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<div id="modal-media-youtube" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <iframe src="https://www.youtube-nocookie.com/embed/xcJtL7QggTI" width="1920" height="1080" uk-video uk-responsive></iframe>
    </div>
</div>
<!--/Testimonials-->

<!--Contact-->
<div class="uk-section home__contact__section uk-text-center">
    <div class="uk-container uk-container-xlarge">
        <div class="home__contact__flex uk-flex uk-flex-column">
            <h2 class="home__title clip-text home__title--60 home__title--lineBottom width-841px uk-margin-auto">Call The Leading Home
                Remodeling Contractor Today!</h2>
            <p class="home__contact__txt width-1021px uk-margin-auto">Lorem ipsum dolor sit amet consectetur. Iaculis ac vitae a rutrum in non nullam viverra. Est mattis dolor eget sociis quam nunc. Malesuada eget non pretium aliquet. Imperdiet id amet pulvinar eleifend mauris</p>
            <div><a href="" class="home__btn home__btn--success uk-button uk-button-primary uk-border-pill">Contact Now</a></div>
        </div>
    </div>
</div>
<!--/Contact-->
<?php require "template-parts/layouts/footer.php"; ?>