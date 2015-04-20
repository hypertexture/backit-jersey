<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-GB" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BackIt.je | The Jersey Crowdfunding Platform</title>

        <meta name="description" content="BackIt.je - A crowdfunding platform for Jersey specific civic, community, creative and commerce projects, featuring a choice of campaign types including thresholds, subscriptions and donations.">
        <meta name="keywords" content="jersey, crowdfunding, fund-raising">
        <meta name="robots" content="index, follow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="320">
        <meta name="theme-color" content="#fff">
        <!--[if IEMobile]><meta http-equiv="cleartype" content="on"><![endif]-->

        <link href="css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="ico/favicon.ico">
        <link rel="apple-touch-icon" href="ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-60756207-1', 'auto');
          ga('send', 'pageview');
        </script>
        
    </head>
    <?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>

     <body>

        <?php include('header.php');?>
        
        <article class="section image-bg">
            <section style="margin-top:30px;" id="logo-large">
                <div class="section-title">
                    <img src="img/logo.svg">
                    <h1 class="title">Welcome to Crowdfunding for Jersey</h1>
                </div>
            </section>
        </article>

        <!-- Home Section -->
        <article class="section gray-bg">
            <section id="how-it-works">
                <!-- Title Page -->
                <div class="section-title">
                    <h1>Charity projects</h1>
                    <section class="">
                        <div class="project-image">
                            <img style="float: left; width: 100%; max-width: 400px; height: auto;" src="img/boots.jpg" alt="">
                        </div>

                       
                        <div class="funding-progress clearfix ">
                            
                            <h1 style="margin-bottom: 0;">Project name</h1>
                            <h2 style="font-size: 1em; margin: 0; line-height: auto;"><span style="font-style: italic;">by</span>User</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat numquam nostrum consectetur distinctio quae dolor rem enim sunt quo corporis harum, maxime totam...</p>

                            <div class="campaign-funding">
                                <progress value="120" max="1000"></progress>
                                <ul>
                                    <li><strong>&pound;1,000</strong> <span>Target</span></li>
                                    <li><strong>12</strong> <span>Days Left</span></li>
                                    <li><strong>12%</strong> <span>Backed</span></li>
                                    <li><strong>5</strong> <span>Backers</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="categories">
                            <ul>
                                <li>Art</li>
                                <li>Comics</li>
                                <li class="active">Charity</li>
                                <li>Dance</li>
                                <li>Design</li>
                                <li>Fashion</li>
                                <li>Film &amp; Video</li>
                                <li>Food</li>
                                <li>Games</li>
                                <li>Journalism</li>
                                <li>Music</li>
                                <li>Photography</li>
                                <li>Publishing</li>
                                <li>Technology</li>
                                <li>Theater</li>
                            </ul>
                        </div>
                    

                    </section>
                    
                    
                </div>
                <!-- End Title Page -->
            </section>
        </article>
        <!-- Home Section -->

        <!-- Project Section -->
        <article id="current-projects" class="section white-bg">
            <section class="listings">
                <div class="section-title">
                    <h1>Whats popular</h1>
                    <div class="campaign-listing">
                        <a href="project_details.html"><img src="img/inter-island-lock-in-image.jpg" alt=""></a>

                        <div class="campaign-funding">
                            <h3><a href="">My First Campaign for an awesome crowdfunding project :)</a></h3>
                            <p><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna nibh, iaculis id metus varius, posuere elementum felis. In pharetra diam at ante fermentum luctus. Fusce vitae quam mollis, lobortis purus suscipit, blandit metus.</a></p>
                        
                            <progress value="120" max="1000"></progress>
                            <ul>
                                <li><strong>&pound;1,000</strong> <span>Target</span></li>
                                <li><strong>12</strong> <span>Days Left</span></li>
                                <li><strong>12%</strong> <span>Backed</span></li>
                                <li><strong>5</strong> <span>Backers</span></li>
                            </ul>
                        </div>
                    </div>  
                    
                    <div class="campaign-listing">
                        <a href="project_details.html"><img src="img/jersey-football-disabled.jpeg" alt=""></a>

                        <div class="campaign-funding">
                            <h3><a href="">My First Campaign</a></h3>
                            <p><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna nibh, iaculis id metus varius, posuere elementum felis.</a></p>
                        
                            <progress value="200" max="300"></progress>
                            <ul>
                                <li><strong>&pound;300</strong> <span>Target</span></li>
                                <li class="ends-today"><strong>6</strong> <span>Hours Left</span></li>
                                <li><strong>67%</strong> <span>Backed</span></li>
                                <li><strong>3</strong> <span>Backers</span></li>
                            </ul>
                        </div>
                    </div> 
                    
                    <div class="campaign-listing">
                        <a href="project_details.html"><img src="img/boots.jpg" alt=""></a>

                        <div class="campaign-funding successful">
                            <h3><a href="">My First Campaign</a></h3>
                            <p><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna nibh, iaculis id metus varius, posuere elementum felis.</a></p>
                        
                            <progress value="2500" max="2500"></progress>
                            <ul>
                                <li><strong>&pound;2,500</strong> <span>Target</span></li>
                                <li><strong>120%</strong> <span>Backed</span></li>
                                <li><strong>42</strong> <span>Backers</span></li>
                            </ul>
                        </div>
                    </div> 
                    
                    <!--<div class="campaign-listing">
                        <a href="project_details.html"><img src="img/lockin.jpg" alt=""></a>
                        
                        <div class="campaign-funding failed">
                            <h3><a href="">My First Campaign</a></h3>
                            <p><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna nibh, iaculis id metus varius, posuere elementum felis.</a></p>
                        
                            <progress value="125" max="500"></progress>
                            <ul>
                                <li><strong>&pound;500</strong> <span>Target</span></li>
                                <li><strong>25%</strong> <span>Backed</span></li>
                                <li><strong>6</strong> <span>Backers</span></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </section>
        </article>
        <!-- Project Section -->


        <?php include('footer.php'); ?>

        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

    </body>
</html>
     
     <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    
    $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
    
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
        
        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
    ?>
    
   <div id="login-tog" class="login-content">
        <div id="login" class="login-content-inner">
            <form method="post" action="index.php" name="loginform" id="loginform">
                <fieldset>
                    <h2>Sign in</h2>

                    <p><label for="username">Username:</label><input type="text" name="username" id="username" placeholder="Username"/></p>
                    
                    <p><label for="password">Password:</label><input type="password" name="password" id="password" placeholder="Password"/></p>

                    <p class="remember_me">
                      <label>
                        <input id="log-in-different" type="checkbox" name="remember_me" id="remember_me">
                        Remember me on this computer
                      </label>
                    </p>
                    <p class="button submit"><input style="padding: 0;" type="submit" name="login" id="login" value="Login"/></p>
                </fieldset>
            </form>
        </div>
    </div><!-- End login-content -->
 
    
   <?php
}
?>
    
