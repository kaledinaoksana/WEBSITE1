<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>CV Kaledina Oksana</title>
	<?php include 'blocks/head.php'; ?>
</head> 

<body>

	<!-- Navbar -->
	<header>
        <?php include(__DIR__.'/blocks/nav-bar-main.php'); ?>
    </header>

	<div class="container-fluid">
        <div class="main-content-wrapper">
            <div class="container-fluid">
                <div class="resume-wrapper mx-auto rounded-5">
                    <div class="resume-header px-4 px-lg-5">
                        <div class="resume-profile-holder text-center">
                            <!-- CV HEADER -->
                            <?php include 'cv_blocks/cv_header.php'; ?>
                        </div>
                    </div>
                    <div class="resume-body p-4 p-lg-5">
                        <div class="row">

                            <!-- LEFT COLUMN -->
                            <div class="col-main col-12 col-lg-8 pe-lg-4">

                                    <!-- ABOUT ME -->
                                <section class="resume-summary-section resume-section">
                                    <?php include 'cv_blocks/about.php'; ?> 
                                </section><hr>
                                
                                <!-- TIMELINE -->
                                <section class="resume-experience-section resume-section">
                                    <!-- Work Experience -->
                                    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
                                    <i class="resume-section-heading-icon bi bi-briefcase me-2"></i>Work Experience</h3>
                                    
                                    <div class="resume-timeline position-relative">
                                        <article class="resume-timeline-item position-relative pb-5"> 
                                            <?php include 'cv_blocks/work_analyst.php'; ?> 
                                        </article>
                                        <article class="resume-timeline-item position-relative pb-5">
                                            <?php include 'cv_blocks/job_fti.php'; ?> 
                                        </article>
                                    </div>
                                    <!-- EDUCATION -->
                                    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
                                    <i class="resume-section-heading-icon bi bi-briefcase me-2"></i>Education</h3>
                                    <div class="resume-timeline position-relative">
                                        <!-- MASTER -->
                                        <article class="resume-timeline-item position-relative pb-5">
                                            <?php include 'cv_blocks/master.php'; ?> 
                                        </article>
                                        <!-- BACHELOR -->
                                        <article class="resume-timeline-item position-relative pb-5">
                                            <?php include 'cv_blocks/bachelor.php'; ?> 
                                        </article>
                                    </div>
                                </section><!--// TIMELINE --><hr>
                            </div><!-- END OF LEFT COLUMN -->

                            <!-- RIGHT COLUMN -->
                            <div class="col-12 col-lg-4 ps-lg-4">

                                
                                <!-- HARD SKILLS -->
                                <section class="resume-skills-section resume-section">
                                    <?php include 'cv_blocks/hard_skills.php'; ?> 
                                </section><hr>
                                <!-- SOFT SKILLS -->
                                <section class="resume-skills-section resume-section">
                                    <?php include 'cv_blocks/soft_skills.php'; ?> 
                                </section><hr>
                                <!-- PROJECTS -->
                                <section class="resume-projects-section resume-section">
                                    <?php include 'cv_blocks/projects.php'; ?> 
                                </section><hr>
                                <!-- LANGUAGES -->
                                <section class="resume-lang-section resume-section">
                                    <?php include 'cv_blocks/lang.php'; ?> 
                                </section><hr>
                                <!-- Download CV -->
                                <section class="resume-lang-section resume-section">
                                    <?php include 'cv_blocks/download_cv.php'; ?> 
                                </section>
                            </div><!-- END OF RIGHT COLUMN -->

                        </div><!--//row-->
                    </div><!--//resume-body-->
                </div><!--//resume-wrapper-->
            </div><!--//container-fluid-->
        </div><!--//main-content-wrapper-->
	</div><!--//container-->
	
    <!-- Footer -->
    <?php include 'blocks/footer.php'; ?>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/fontawesome/js/all.js"></script>

</body>