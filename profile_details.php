
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

        <section class="clearfix job-bg  ad-profile-page">
            <div class="container">
                <div class="breadcrumb-section">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Profile Details</li>
                    </ol>						
                    <h2 class="title">My Profile</h2>
                </div><!-- breadcrumb-section -->

                <?php
                include "shared/profile_head.php";
                ?>

                <div class="profile job-profile">
                    <div class="user-pro-section">
                        <!-- profile-details -->
                        <div class="profile-details section">
                            <h2>Profile Details</h2>
                            <form action="#">
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control" placeholder="jhondoe@mail.com">
                                </div>

                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control" placeholder="+213 1234 56789">
                                </div>								
                            </form>				
                        </div><!-- profile-details -->

                        <!-- change-password -->
                        <div class="change-password section">
                            <h2>Change password</h2>
                            <!-- form -->
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" class="form-control">	
                            </div>

                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" class="form-control">
                            </div>															
                        </div><!-- change-password -->

                        <!-- preferences-settings -->
                        <div class="preferences-settings section">
                            <div class="buttons">
                                <a href="#" class="btn">Update Profile</a>
                                <a href="#" class="btn cancle">Cancel</a>
                            </div>												
                        </div><!-- preferences-settings -->
                    </div><!-- user-pro-edit -->
                </div>				
            </div><!-- container -->
        </section><!-- ad-profile-page -->

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
</html>                                                                                                                                                                                                                                                                                                    ncle</a>
				</div>
				<div class="download-button resume">
					<a href="#" class="btn">Download Resume as doc</a>
				</div>
			</div><!-- resume-content -->						
		</div><!-- container -->
	</section><!-- ad-profile-page -->

	<?php include "shared/footer";
	?>
	
	
	
	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/price-range.js"></script>   
    <script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parent