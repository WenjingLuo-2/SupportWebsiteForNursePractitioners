<?php 
namespace resources\views;

use App\Http\Controllers\HomeController;
@include ('bootstrapcdn.blade.php');

$homeCon = new HomeController();
?>
<!DOCTYPE HTML>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href= "{{asset('css/style-homepage.css')}}" rel="stylesheet" type = "text/css">

    <head>
        <title>WebNp - Homepage</title>
    </head>

    <body>
        <?php @include 'header.blade.php' ?>

        <!-- Recently Added Articles -->
        <div>
            <div class = "container recentarticlessection">
                <div class="recentarticlesheader">
                    <h3>
                        <b>Recent Articles</b>
                    </h3>
                    <div class="seeall_main">
                            <div class="see_all"><a href="/education">SHOW ALL</a></div>
                    </div>
                    <p>Take a Look at our Recent Articles, Vetted and Approved by Medical Professionals! </p>
                    <hr>
                </div>
                
                    <div class="row">
                        <div class = "recentarticle-main">
                            <a href="https://www.youtube.com">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                A look at the effects of smoking
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(0));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                        <div class = "recentarticle-main">
                            <a href="https://www.youtube.com">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                How yoga can benefit your heart
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(0));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                        <div class = "recentarticle-main">
                            <a href="https://www.youtube.com">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                Daily runs: a trend everyone should follow
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(0));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                        <div class = "recentarticle-main">
                            <a href="https://www.youtube.com">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                Recent advances in Heart Medicine
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(0));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                        <div class = "recentarticle-main">
                            <a href="https://www.youtube.com">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                A random article title
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(0));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                                                
                    </div>
                    
                </div>
            </div>
            </div>
            <!-- List of Categories -->
            <div class="container topicsheader">
                <h3>
                    <b>Medical Categories</b>
                </h3>
                <div class="seeall_main">
                    <div class="see_all"><a href="/education">SHOW ALL</a></div>
                </div>
                    
            <hr>
            </div> 
            
                <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(1) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(1) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(2) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(2) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(3) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(3) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(4) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(4) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(5) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(5) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(6) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(6) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(7) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(7) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(8) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(8) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(1) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(1) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(2) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(2) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(3) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(3) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(4) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(4) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(5) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(5) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(6) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(6) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(7) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(7) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a <?php echo $homeCon->getCategoryContent(8) ?>>
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(8) ?></h5>
                                </a>
                            </li>
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>

                <div class="container-fluid bg-light shadow">
            <h1 style="text-align: center;">Introduction</h1>

            <div class="row" >
                <div class="col-3 p-3" style="text-align: center;"><img class="rounded-circle" src="imgs/gail1.jpg"></div>

                <div class="col-9 p-3" text-align="center">
                    <i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                    </i>
                </div>
            </div>
        </div>
        <br><br>
            <?php @include 'footer.blade.php' ?>
        </body>
    </html>
