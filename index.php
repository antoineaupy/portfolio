
<?php
session_start();
include_once("php/code.php");

$user = new Users;
$work = new Works;

if(isset($_SESSION["etat"])) {

}
else {
    $_SESSION["etat"]="Se connecter";
}

?>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<!DOCTYPE html>
<html class="no-js" lang="fr">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>INDEX</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="Assets/css/base.css">
    <link rel="stylesheet" href="Assets/css/vendor.css">
    <link rel="stylesheet" href="Assets/css/main.css">

    <!-- script
    ================================================== -->
    <script src="Assets/js/modernizr.js"></script>
    <script src="Assets/js/pace.min.js"></script>


</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a class="smoothscroll"  href="#home" onclick="window.location.href = 'login.php';" id="buttoncss"> 
                    <?php echo($_SESSION["etat"]); ?></a></li>
                <li ><a class="smoothscroll" href="#home" onclick="window.location.href = 'works.php';" id="buttoncss">Nouveau projet</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->

    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full">
                <h3>Portfolio</h3>
                <h1> 

                    <?php if(isset($_SESSION["account"]["username"]))
                        {   
                            echo("Bienvenue ");
                            echo($_SESSION["account"]["username"]);
                        }
                        else
                        {
                            echo ("Veuillez vous connecter");
                        }

                        
                    ?>.</h1>
                
                <p class="lead">Je vous présente mon portfolio, codé lors d'un projet étudiant.</p>

            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">
               <?php 
                    $allworks = $work->get_works(); 
                    foreach($allworks as $w)
                    {
               ?>
                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" data-size="1050x700">
                                <img src="images/portfolio/shutterbug.jpg"
                                     srcset="images/portfolio/shutterbug.jpg 1x, images/portfolio/shutterbug@2x.jpg 2x" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                
                            </h3>
                            <p class="item-folio__cat">
                                <?php
                                    echo($w["title"]);
                                ?>
                            </p>
                        </div>
                        <a class="item-folio__project-link" title="Modifier le projet" value="OK" onclick="location.href = 'update.php?id=<?php echo($w["id"]); ?>'">
                            <i class="im im-link"></i>
                        </a>
                        
                        <span class="item-folio__caption">
                            <div> 
                                <?php
                                echo($w["description"]); 
                                ?> 
                            </div> 
                        </span>

                    </div> <!-- end item-folio -->
                    
                </div> <!-- end masonry__brick -->
                <?php }

                ?>
            </div>
        </div> <!-- end masonry -->

    </section> <!-- end works -->

    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="images/logo.png" alt="Homepage"></a>
                </div>

            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Hola 2017</span> 
                    <span>Design by <a href="https://www.styleshout.com/">styleshout</a></span>	
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="Assets/js/jquery-3.2.1.min.js"></script>
    <script src="Assets/js/plugins.js"></script>
    <script src="Assets/js/main.js"></script>

</body>

</html>