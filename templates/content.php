<main class="m-page">
    <div class="logo">
        <div class="container-fluid">
            <div class="title">
                <h1>FREE PSD TEMPLATE</h1>
                <span>A long time ago in a galaxy far far away...</span>
                <a href="#about-us" class="button next round">
                    <i class="fa fa-chevron-down"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="about-us">
        <div class="container-fluid">
            <span id="about-us"></span>
            <div class="describe title-article">
                <div class="describe-inner">
                    <h2>About Us</h2>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </p>
                <div class="layout-above">
                    <a href="#" class="button read-more">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <div id="news">
        <div class="container-fluid">
            <span id="news-field"></span>
            <div class="title-article">
                <h2>Check out last articles</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </div>
            <section class="clearfix">
                <?php
                include_once  '/scripts/array.php';
                foreach ($news as $article) {
                    ?>
                    <article class="col-xs-12 col-sm-6 col-md-3 clearfix">
                        <div class="video-wrapper">
                            <video controls preload="none">
                                <source src="<?php echo $article['video_href']; ?>"
                                        type='video/ogg; codecs="theora, vorbis"'>
                                <source src="<?php echo $article['video_href_alt']; ?>"
                                        type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                <source src="<?php echo $article['video_href_alt1']; ?>"
                                        type='video/webm; codecs="vp8, vorbis"'>
                                Тег video не поддерживается вашим браузером.
                                <a href="<?php echo $article['video_href']; ?>">Скачайте видео</a>
                            </video>
                        </div>

                        <h3><a href="<?php echo $article['title_href']; ?>"><?php echo $article['title']; ?></a></h3>
                        <p><?php echo $article['description']; ?></p>
                    </article>
                <?php } ?>
            </section>
            <div class="nav-ctrl">
                <div class="nav-section clearfix">
                    <a href='#' class="fa fa-chevron-left"></a>
                    <ul class="clearfix">
                        <?php foreach ($navigation as $nav_btn) { ?>
                            <li>
                                <a href="<?php echo $nav_btn['href']; ?>"><?php echo $nav_btn['title']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <a href='#' class="fa fa-chevron-right"></a>
                </div>
            </div>
        </div>
    </div>
    <div id='progress'>
        <div class="container-fluid">
            <span id="progress-field"></span>
            <div class="title-article">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </div>
            <div class="statistic">
                <div class="pie">
                    <div class="clip1">
                        <div class="slice1"></div>
                    </div>
                    <div class="clip2">
                        <div class="slice2"></div>
                    </div>
                    <div class="status"></div>
                </div>
            </div>

        </div>
    </div>
    <div id="comment">
        <div class="container-fluid">
            <span id="about-us-field"></span>
            <div class="title-article">
                <h2>First impression about Us</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </div>
                <ul class="comment-section">
                    <?php foreach ($comment_section as $person) { ?>
                        <li class="col-xs-12 col-sm-6">
                            <div class="img-wrapper">
                                <img src="<?php echo $person['img']; ?>" alt="<?php echo $person['img_title']; ?>">
                            </div>
                            <div class="description">
                                <q><?php echo $person['description']; ?></q>
                                <cite>
                                    <span><?php echo $person['name_author']; ?></span>
                                    ,<?php echo $person['company']; ?>
                                </cite>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
        </div>
    </div>
    <div id="join-us">
        <div class="container-fluid">
            <span id="join-us-field"></span>
            <div class="title-article">
                <h2>Choose Your path!</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </div>
        </div>
        <form action="#" method="get">
            <button class="light-side" type="submit">Join the dark side</button>
            <button class="black-side" type="submit">Join the light side</button>

        </form>
    </div>
</main