
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include "shared/header.php";
        include "db_connet.php";
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
                        <li>Posted Job</li>
                    </ol>						
                    <h2 class="title">Posted Job</h2>

                    <div class="section trending-ads latest-jobs-ads">
                        <h4>Posted Jobs</h4>
                        <?php
                        $sql = "select *,(select name from districts where district_id=job_details.district) as dist_name from job_details where job_post_by='$_SESSION[id]' order by id desc";
                        $qeury_jobs = mysql_query($sql);
                        $num_row = mysql_num_rows($qeury_jobs);
                        if ($num_row > 0) {
                            while ($row_jobs = mysql_fetch_array($qeury_jobs)) {
                                ?>
                                <div class="job-ad-item" onClick="window.location.href = 'applied_candidate.php'" onMouseOver="this.style.cursor = 'pointer'">
                                    <div class="item-info">
                                        <div class="item-image-box">
                                            <div class="item-image">
                                                <a href="applied_candidate.php?job_id=<?php echo $row_jobs['id'];?>"><img src="<?php echo $row_jobs['company_logo']; ?>" alt="Image" class="img-responsive"></a>
                                            </div><!-- item-image -->
                                        </div>

                                        <div class="ad-info">
                                            <span><a href="applied_candidate.php?job_id=<?php echo $row_jobs['id'];?>" class="title"><?php echo $row_jobs['title_for_your_job']; ?></a> @ <a href="#"><?php echo $row_jobs['company_name']; ?></a></span>
                                            <div class="ad-meta">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row_jobs['address'] . "," . $row_jobs['dist_name']; ?></a></li>
                                                    <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $row_jobs['job_type']; ?></a></li>
                                                    <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i><?php echo "$" . $row_jobs['salary_min'] . "-" . $row_jobs['salary_max']; ?></a></li>
                                                </ul>
                                            </div><!-- ad-meta -->									
                                        </div><!-- ad-info -->
                                        <div class="pull-right">
                                            <div style="color:#00A651;font-weight: bold;font-size: 18px;">
                                                <font style="color:#000;font-size: 24px;">
                                                <?php
                                                $sql_num = "select * from apply_inforation where job_id='$row_jobs[id]' group by job_id";
                                                $qeury_jobs_num = mysql_query($sql_num);
                                                echo $num_row2 = mysql_num_rows($qeury_jobs_num);
                                                ?>
                                                </font> Applicants Applied.
                                            </div>
                                        </div>
                                    </div><!-- item-info -->
                                </div><!-- job-ad-item -->
                                <?php
                            }
                        } else {
                            ?>
                            <div class="job-ad-item">
                                <div class="item-info">
                                    <div class="item-image-box">
                                    </div>

                                    <div class="ad-info">
                                        <span><a href="job-details.php" class="title"><font style="color:red;font-weight: bold;text-align: center;">Jobs Not Found.</font></span>
                                        <div class="ad-meta">
                                            <ul>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
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
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                                <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                      