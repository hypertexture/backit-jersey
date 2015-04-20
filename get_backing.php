<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-GB"> <!--<![endif]-->
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

        <link href="css/main.css" rel="stylesheet">
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
    <body>

        <?php include('header.php'); ?>

        <!-- register for backing form  -->
        <article style="margin-top: 50px;" class="section gray-bg">
            <section id="contact">
                <!-- Title Page -->
                <div class="section-title">
                    <h1 class="title">Get Backing<span>.</span></h1>
                </div>

                <div class="contact-form-full">


                    <form id="contact-form" class="contact-form" action="php/contact.php">
                        <p class="contact-name">
                            <label>Project name:</label>
                            <input id="contact_name" type="text" placeholder="Type your name here..." value="" name="name"/>
                        </p>

                        <p class="contact-message">
                            <label>Project Summary:</label>
                            <textarea id="contact_message" placeholder="Type your message here..." name="message" rows="15" cols="40"></textarea>
                        </p>

                        <p class="contact-message">
                            <label>Project Description:</label>
                            <textarea id="contact_message" placeholder="Type your message here..." name="message" rows="15" cols="40"></textarea>
                        </p>

                        <p>
                            <label>Choose a category:</label>
                            <select name="Category">
                            <option value="Milk">Art</option>
                            <option value="Cheese">Music</option>
                            <option value="Bread">Sport</option>
                        </p>

                        <p class="contact-email">
                            <label>Your hashtag:</label>
                            <input id="contact_email" type="text" placeholder="Type your hashtag here..." value="" name="email"/>
                        </p>

                        <p>
                            <label>Upload your video:</label>
                            <input type="text" name="textline" size="30">
                        </p>
                            <label>Upload your video:</label>
                            <input type="file" name="datafile" size="40">
                        </p>

                        <p>
                            <label>Upload your Ppoto:</label>
                            <input type="text" name="textline" size="30">
                        </p>
                            <label>Upload your photo:</label>
                            <input type="file" name="datafile" size="40">
                        </p>

                        <p>
                            <label>Choose a campaign model:</label>
                            <select name="model">
                            <option value="Milk">Art</option>
                            <option value="Cheese">Music</option>
                            <option value="Bread">Sport</option>
                        </p>

                        <p class="contact-email">
                            <label>Your start date:</label>
                            <input id="contact_email" type="text" placeholder="Type your start date here..." value="" name="email"/>
                        </p>

                        <p class="contact-email">
                            <label>Your end date:</label>
                            <input id="contact_email" type="text" placeholder="Type your end date here..." value="" name="email"/>
                        </p>

                        <p class="contact-email">
                            <label>Amount of backing:</label>
                            <input id="contact_email" type="text" placeholder="Type your target amount here..." value="" name="email"/>
                        </p>

                        <p class="contact-submit">
                            <a id="contact-submit" class="submit" type="submit" value="submit">Submit your details</a>
                        </p>

                        <div id="response">
                        
                        </div>
                    </form>                        
                </div>
                <!-- End Title Page -->

                <div class="contact-details">
                    <h1>Looking forward to getting backing?</h1>
                <ul>

                    <li><a href="mailto:hello@backit.je">hello@backit.je</a></li>
                    <li>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        
                    </li>
                </ul>
            </div>
            </section>
        </article>
        <!-- End Section -->

        <?php include('footer.php'); ?>

        
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>

    </body>
</html>
