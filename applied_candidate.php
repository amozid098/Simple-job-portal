
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
                        <li>Applied Candidate</li>
                    </ol>						
                    <h2 class="title">Applied Candidate</h2>

                    <div class="section trending-ads latest-jobs-ads">
                        <h4>Posted Jobs</h4>
                        <?php
                        $sql = "select * from apply_information";
                        $qeury_jobs = mysql_query($sql);
                        $num_row = mysql_num_rows($qeury_jobs);
                        if ($num_row > 0) {
                            while ($row_jobs = mysql_fetch_array($qeury_jobs)) {
                                ?>
                                <div class="job-ad-item" onClick="window.location.href = 'applied_candidate.php'" onMouseOver="this.style.cursor = 'pointer'">
                                    <div class="item-info">
                                        <div class="item-image-box">
                                            <div class="item-image">
                                                <a href="applied_candidate.php?job_id=<?php echo $row_jobs['id']; ?>"><img src="<?php echo $row_jobs['company_logo']; ?>" alt="Image" class="img-responsive"></a>
                                            </div><!-- item-image -->
                                        </div>

                                        <div class="ad-info">
                                            <span><a href="applied_candidate.php?job_id=<?php echo $row_jobs['id']; ?>" class="title"><?php echo $row_jobs['title_for_your_job']; ?></a> @ <a href="#"><?php echo $row_jobs['company_name']; ?></a></span>
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
                                <?php
                        }}
                            ?>
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
</html>                                                                                                                                                                                                                                                                                                                                                                                                         o),
                                                m = s.getElementsByTagName(o)[0];
                                        a.async = 1;
                                        a.src = g;
                                        m.parentNode.insertBefore(a, m)
                                    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                                    ga('create', 'UA-73239902-1', 'auto');
                                    ga('send', 'pageview');

        </script>	
    </body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                          cher.js"></script>
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
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        