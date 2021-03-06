
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include "shared/header.php";
        ?>
    </head>
    <body>
        <?php
        include "shared/nav.php";
        ?>

        <!-- delete-page -->
        <section class="clearfix job-bg delete-page">
            <div class="container">
                <div class="breadcrumb-section">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Close account</li>
                    </ol><!-- breadcrumb -->						
                    <h2 class="title">Close Account</h2>
                </div><!-- banner -->

                <?php
                include "shared/profile_head.php";
                ?>

                <div class="close-account text-center">
                    <div class="delete-account section">
                        <h2>Delete Your Account</h2>
                        <h4>Are you sure, you want to delete your account?</h4>
                        <a href="#" class="btn">Delete Account</a>
                        <a href="#" class="btn cancle">Cancel</a>
                    </div>			
                </div>
            </div><!-- container -->
        </section><!-- delete-page -->

        <?php include "shared/footer.php";
        ?>




        <!-- JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/price-range.js"></script>   
        <script src="js/main.js"></script>
        <script src="js/switcher.js"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-73239902-1', 'auto');
            ga('send', 'pageview');

        </script>	
    </body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                             