
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio projects</title>
    <?php include 'blocks/head.php'; ?>
</head> 
<body>
    <header>
        <?php include(__DIR__.'/blocks/nav-bar-main.php'); ?>
    </header>

    <div class="container-fluid">
        <div class="main-content-wrapper">
            <div class="container-fluid">
                <div class="resume-wrapper mx-auto rounded-5">
                    <div class="resume-header px-4 px-lg-5">
                        <div class="resume-profile-holder text-center">

                            <!-- Content of the portfolio -->
                            <?php include 'articles/kpmg_art.php'; ?>
                            <hr>
                            <!-- Row for two columns -->
                            <div class="row">
                                <div class="col-md-6">
                                    <?php include 'articles/amazon_art.php'; ?>
                                </div>
                                <div class="col-md-6">
                                    <?php include 'articles/covid_art.php'; ?>
                                </div>
                            </div>
                            <hr>
                             <!-- Row for two columns -->
                            <div class="row">
                                <div class="col-md-6">
                                    <?php include 'articles/website_art.php'; ?>
                                </div>
                            </div> 
                            <!-- Row for two columns
                            <div class="row">
                                <div class="col-md-6">
                                    <?php #include 'articles/crypto_art.php'; ?>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'blocks/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/fontawesome/js/all.js"></script>
</body>
</html>
