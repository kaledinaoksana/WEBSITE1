
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <?php include(__DIR__.'/blocks/head.php'); ?>
</head> 
<body>
    <header>
        <?php include(__DIR__.'/blocks/nav-bar-main.php'); ?>
    </header>

    <div class="container-fluid">
        <div class="main-content-wrapper">
            <div class="container-fluid">
                <div class="resume-wrapper mx-auto rounded-5"">
                    <div class="resume-header px-4 px-lg-5">
                        <div class="resume-profile-holder text-center">
                            <!-- Content of the resume -->
                            
                            <h2 class="resume-name text-uppercase">Welcome to my website!</h2>
                            <hr>
                            <div class="resume-summary-desc" style="text-align: justify;  padding: 2% 5% 5% 5%; color: c5d7f7; text-indent: 25px;">
                                <p>
                                I'm thrilled to have you here. My name is Oksana Kaledina, 
                                and I'm a passionate data analyst with expertise in Python, 
                                Excel, SQL, and Tableau. I love exploring datasets, uncovering 
                                insights, and using data-driven approaches to solve real-world problems.</p>

                                <p>On this website, you'll find a showcase of my data 
                                analysis projects and visualizations. Each project 
                                reflects my dedication to delivering meaningful and 
                                actionable insights through data. Whether it's exploring 
                                trends, predicting outcomes, or creating interactive 
                                dashboards, I'm always eager to dive into data and 
                                extract valuable information.</p>

                                <p>Thank you for taking the time to visit my portfolio. I hope 
                                my projects and skills resonate with you, and I look forward 
                                to staying connected in the world of data analytics!</p>

                                <p style="line-height: 0.75;">Best regards,</p>
                                <p style="line-height: 0.0;">Oksana Kaledina</p>
                            
                            </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include(__DIR__.'/blocks/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="../assets/fontawesome/js/all.js"></script>
</body>
</html>
