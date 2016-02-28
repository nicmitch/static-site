<?php
    include 'header.tpl.php';
?>
<section id="intro-bg">
        <img src="../images/main-img.jpg" width="1440" height="897"/>
    </section>

    <section id="intro-top">
        <div class="center-content">
            <div class="container align-center">
                <h1><?php echo $texts['introHeadline']; ?></h1>
                <h2><?php echo $texts['introHeadline2']; ?></h2>
                <a href="get-quote.php" class="btn btn-white"><?php echo $texts['getYourFreeConsult']; ?></a>
            </div>
        </div>
    </section>

	<section id="intro-white">
        <div class="container align-center">
            <div class="max-width">
                <?php echo $texts['introWhiteText']; ?>
            </div>
        </div>
    </section>

    <section id="categories-cont">

        <div class="container align-center">

            <h2><?php echo $texts['categories']; ?></h2>
            
            <div class="line-bg">
                <div class="items-list-cont" id="categories-list-cont">


                <div class="item-parallax" data-anchor-target="#categories-list-cont"
                    data-bottom-top="top:45%;"
                    data-top-bottom="left:0%;top:35%;"><img src="../images/icon-bottle.png" width="47" height="125" /></div>

                <div class="item-parallax" data-anchor-target="#categories-list-cont"
                    data-bottom-top="top:0%;"
                    data-top-bottom="left:30%;top:15%;"><img src="../images/icon-cheese.png" width="114" height="90" /></div>

                <div class="item-parallax" data-anchor-target="#categories-list-cont"
                    data-bottom-top="top:100%;"
                    data-top-bottom="left:55%;top:90%;"><img src="../images/icon-carrot.png" width="71" height="133" /></div>

                <div class="item-parallax" data-anchor-target="#categories-list-cont"
                    data-bottom-top="top:60%;"
                    data-top-bottom="right:0%;top:70%;"><img src="../images/icon-lemon.png" width="120" height="119" /></div>

                    <?php foreach ($categories as $category) { ?>

                        <div class="item">
                            <div class="inner">
                                <div class="flip-container">
                                    <div class="side side-front bordered">
                                        <h3><?php echo $category['title']; ?></h3>
                                        <div class="label button flip"><?php echo $texts['viewList']; ?></div>
                                    </div>
                                    <div class="side side-back">
                                        <div class="product-cont">
                                            <?php
                                                foreach ($category['products'] as $product) {
                                                    echo "<span>{$product}</span>";
                                                };
                                            ?>
                                        </div>
                                        <div class="close button flip"></div>
                                    </div>
                                </div>
                                <img src="../images/quad-blank.png" width="100" height="100" />
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>

            <a href="get-quote.php" class="btn btn-default"><?php echo $texts['getYourFreeConsult']; ?></a>

        </div>
    </section>

    <section id="services-cont">
        <div class="container align-center">
            <h2 class="small light">
                <?php echo $texts['serviceTitle']; ?>
                <small><?php echo $texts['serviceSubtitle']; ?></small>
            </h2>
            
            <div class="line-bg-light">
                <div class="items-list-cont">

                    <?php foreach ($services as $service) { ?>

                        <div class="item">
                            <div class="inner">
                                <div class="flip-container">
                                    <div class="side side-front flip">
                                        <h3><?php echo $service['title']; ?></h3>
                                    </div>
                                    <div class="side side-back">
                                        <div class="product-cont flip">
                                            <?php
                                                foreach ($service['products'] as $product) {
                                                    echo "<span>{$product}</span>";
                                                };
                                            ?>
                                        </div>
                                        <div class="close button"></div>
                                    </div>
                                </div>
                                <img src="../images/rect-blank.png" width="300" height="170" />
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>

            <a href="#" class="btn btn-primary"><?php echo $texts['serviceButton']; ?></a>

        </div>
    </section>


    <section id="aboutus-cont">

        <div class="container align-center">
            <h2 class="small light"><?php echo $texts['aboutusTitle']; ?></h2>
            <div class="line-bg-light"><?php echo $texts['aboutusText']; ?></div>
        </div>

        <?php if($references){ ?>
        <hr>

        <div class="container align-center">
            <h2 class="small light"><?php echo $texts['referenceTitle']; ?></h2>
            <div class="line-bg-light" style="margin-top: 20px;">
                <div id="reference-slider">

                    <?php foreach ($references as $reference) { ?>
                    
                    <div>
                        <div class="max-width">
                            <span class="reference-text"><?php echo $reference['text']; ?></span>
                            <span class="reference-person"><?php echo $reference['person']; ?></span>
                        </div>
                    </div>

                    <?php }; ?>
                </div>
            </div>

        </div>
        <?php }; ?>
        <div class="container align-center">
            <a href="get-quote.php" class="btn btn-default"><?php echo $texts['getYourFreeConsult']; ?></a>
        </div>
        

    </section>

    <footer id="footer-main">
        <div class="container align-center">
            <img src="../images/italy-flag@2x.png" width="29" height="23" />
            <div><?php echo $texts['footer']; ?></div>
            <div class="social-cont">
                <a href="#" class="item skype"><i class="fa fa-skype"></i></a>
                <a href="#" class="item linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
            
        </div>
    </footer>
</div>
<?php 
    include 'footer.tpl.php';
?>