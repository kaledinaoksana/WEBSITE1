<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Crypo project</title>
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
                            <h2 class="resume-name text-uppercase" style="color: #19202e;">Portfolio WEBSITE</h2>
                            <!-- Skills-->
                            <ul class="list-inline" padding="0% 0% 0% 0%">
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">HTML/CSS</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Backend Development (PHP)</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">XAMPP</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Git</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Bootstrap</span></li>   
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Design</span></li> 
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Bash</span></li>                        
                            </ul>
                            <!-- Main Part of the Project -->
                            <h3>Description + <a href="https://github.com/kaledinaoksana/website1" > <i class="fab fa-github" style="color: black;"></i> github</a></h3>

                            <p> 

                                My portfolio is a website developed using Bootstrap. It showcases my web development skills and creativity. 
                                It features a diverse range of projects, each accompanied by descriptions and code samples on GitHub. 
                                Additionally, it includes a contact form and an "About Me" section with information about myself and my skills.
                                The GitHub repository can be found <a href="https://github.com/kaledinaoksana/website1">here</a>.</p>


                                <h3>Website Deployment Instructions</h3>
                                <ol>
                                    <li>Create bash script <code>notes.bash</code></li>
                                    <li>Install XAMPP</li>
                                    <li>Copy files <code>rsync -av --delete /path/to/your/website/ /Applications/XAMPP/xamppfiles/htdocs</code></li>
                                    <li>Add rules <code>chmod +x notes.bash</code></li>
                                    <li>Run .bash file <code>./notes.bash</code></li>
                                    
                                </ol>
                            <!-- Botton NEXT --> 
                            <div class="actions d-flex justify-content-center " style="padding: 5%">
                                <a href="kpmg.php" class="button" style="color: #1E2738;">
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