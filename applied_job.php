
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

        <section class=" job-bg page  ad-profile-page">
            <div class="container">
                <div class="breadcrumb-section">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Applied Job</li>
                    </ol>						
                    <h2 class="title">Applied Job</h2>
                </div><!-- breadcrumb-section -->
                <?php
                include "shared/profile_head.php";
                include "db_connet.php";
                ?>

                <div class="section trending-ads latest-jobs-ads">
                    <h4>Applied Jobs</h4>
                    <?php
                    $sql = "select *,(select name from districts where district_id=js.district) as dist_name from apply_inforation as ai left join job_details as js on ai.job_id=js.id group by ai.job_id";
                    $qeury_jobs = mysql_query($sql);
                    while ($row_jobs = mysql_fetch_array($qeury_jobs)) {
                        ?>
                        <div class="job-ad-item" onClick="window.location.href = 'job_details.php?job_id=<?php echo $row_jobs['id']; ?>'" onMouseOver="this.style.cursor = 'pointer'">
                            <div class="item-info">
                                <div class="item-image-box">
                                    <div class="item-image">
                                        <a href="job_details.php?job_id=<?php echo $row_jobs['id']; ?>"><img src="<?php echo $row_jobs['company_logo']; ?>" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div>

                                <div class="ad-info">
                                    <span><a href="job_details.php?job_id=<?php echo $row_jobs['id']; ?>" class="title"><?php echo $row_jobs['title_for_your_job']; ?></a> @ <a href="#"><?php echo $row_jobs['company_name']; ?></a></span>
                                    <div class="ad-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row_jobs['address'] . "," . $row_jobs['dist_name']; ?></a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $row_jobs['job_type']; ?></a></li>
                                            <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i><?php echo "$" . $row_jobs['salary_min'] . "-" . $row_jobs['salary_max']; ?></a></li>
                                        </ul>
                                    </div><!-- ad-meta -->									
                                </div><!-- ad-info -->
                            </div><!-- item-info -->
                        </div><!-- job-ad-item -->
                    <?php } ?>
                </div><!-- latest-jobs-ads -->									
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
</html>                                                             <a href="job-details.php"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
                                        </div><!-- item-image -->
                                    </div>

                                    <div class="ad-info">
                                        <span><a href="job-details.php" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                                        <div class="ad-meta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                                <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                                <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                            </ul>
                                        </div><!-- ad-meta -->									
                                    </div><!-- ad-info -->
                                    <div class="close-icon">
                                        <i class="fa fa-window-close" aria-hidden="true"></i>
                                    </div>
                                </div><!-- item-info -->
                            </div><!-- ad-item -->	
                        </div><!-- latest-jobs-ads -->									
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
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          