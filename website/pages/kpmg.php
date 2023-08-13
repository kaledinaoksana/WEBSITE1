<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>KPMG project</title>
    <?php include(__DIR__.'/../blocks/head_art.php') ?>
</head> 

<body>
	
    <!-- Navbar -->
    <header>
        <?php include(__DIR__.'/../blocks/nav-bar-page.php') ?>  
    </header>

    <!-- Main -->
	<div class="container-fluid">	
        <div class="main-content-wrapper">
            <div class="container-fluid" >
                <div class="resume-wrapper mx-auto rounded-5" style="background-color: #FFFFFF;">
                    <div class="resume-header px-4 px-lg-5" >
                        <div class="resume-profile-holder text-center">
                            
                            <!-- Content of the Project -->
                            <?php include(__DIR__.'/kpmg/kpmg1.php') ?>
                            <?php include(__DIR__.'/kpmg/kpmg2.php') ?>
                            <?php include(__DIR__.'/kpmg/kpmg3.php') ?>
                            <!-- Botton NEXT --> 
                            <div class="actions d-flex justify-content-center " style="padding: 5%">
                                <a href="amazon.php" class="button" style="color: #1E2738;">
                                    <h3 class="resume-section-heading text-uppercase m-2 align-items-center" style="color: #1E2738;">
                                        <i class="fas fa-eye mr-2"></i>View Next Project
                                    </h3>
                                </a>
                            </div>  
                            <!-- END Botton NEXT -->   
                        </div>
                    </div>
                </div>         
            </div><!--//container-fluid-->
        </div><!--//main-content-wrapper-->
	</div><!--//container-->
	
    <!-- Footer -->
	<footer class="footer text-center py-4">
		<small class="copyright" style="color: #FFFFFF">2023 </span><i class="bi bi-heart-fill" style="color:#fe655c"></i> </small>
	</footer>

</body>