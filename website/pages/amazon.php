<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Amazon project</title>
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
                            <h2 class="resume-name text-uppercase" style="color: #19202e;">Amazon Scrapper</h2>

                            
                            <!-- Skills-->
                            <ul class="list-inline" padding="0% 0% 0% 0%">
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Web Scraping</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Python Programming</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Data Parsing</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Database Management</span></li>   
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">SQL</span></li> 
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Data Manipulation (clean, transform data)</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">HTTP Requests</span></li>
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">XPath/CSS Selectors</span></li>   
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Data Analysis</span></li> 
                                <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Git</span></li>                        
                            </ul>

                            <!-- Main Part of the Project -->
                            
                            <h3>Description + <a href="https://github.com/kaledinaoksana/amazon" > <i class="fab fa-github" style="color: black;"></i> github</a></h3>
                            <p> This project involves creating a web scraping tool to extract book information from Amazon 
                                and store the data in a CSV file. Additionally, the project integrates 
                                <a href="https://t.me/AmazonScrapperBot">Telegram bot (@AmazonScrapperBot)</a> that 
                                allows users to initiate the scraping process and receive notifications when the data is 
                                successfully saved.
                            
                                The GitHub repository can be found <a href="https://github.com/kaledinaoksana/amazon">here</a>.</p>

                            <h3>Key Steps</h3>
                            <ol >
                                    <li>
                                    <ul>
                                        
                                            <strong>Environment Setup</strong>
                                            <p>Install necessary libraries and tools:</p>
                                            <ol style=" padding-left: 5em;">
                                                <li>Install <code>pyodbc==4.0.34</code> (for macOS M1): <code>pip install pyodbc==4.0.34</code></li>
                                                <li>Install <code>sqlalchemy</code>: <code>pip install sqlalchemy</code></li>
                                                <li>Install <code>BeautifulSoup4</code>: <code>pip install BeautifulSoup4</code></li>
                                                <li>Install <code>asyncio</code>: <code>pip install asyncio</code></li>
                                                <li>Install <code>python-telegram-bot</code>: <code>pip install python-telegram-bot</code></li>
                                                <li>Install <code>aiogram</code>: <code>pip install aiogram</code></li>
                                            </ol>
                                            <p>Create a Telegram bot and obtain an API token for interaction.</p>
                                            <ol style="padding-left: 5em;">
                                                <li>Open Telegram and search for <strong>BotFather</strong>.</li>
                                                <li>Start a chat with <strong>BotFather</strong>.</li>
                                                <li>Use the <code>/newbot</code> command to create a new bot.</li>
                                                <li>Follow the instructions to choose a name and username for your bot.</li>
                                                <li>Once your bot is created, <strong>BotFather</strong> will provide you with an API token.</li>
                                                <li>Copy the API token and use it for interaction with your bot.</li>
                                            </ol>
                                        
                                    </ul>


                                    
                                     </li><li>
                                <strong>Data Scraping</strong>
                                <p>In this project, a script was developed to perform web scraping of book details on Amazon. 
                                    The script extracted data such as book title, author, price, rating, and other attributes. 
                                    Additionally, the project involved using a separate file named <code>htmls/classes.py </code> to manage 
                                    and organize the HTML classes and attributes used in the web scraping process. 
                                </p>
                                     </li><li> 
                                <strong>CSV Data Storage</strong>
                                <p>A CSV file was created to store the scraped book data. 
                                    The extracted data was formatted into CSV format and written to the <code>lib/save.py </code> file.</p>
                                     </li><li>
                                <strong>Telegram Bot</strong>
                                <p>A script was written to handle user commands through a Telegram bot.</p>

                                <p><strong>Key Features:</strong></p>
                                <ul style=" padding-left: 5em;">
                                    <li><strong>Search and Scraping:</strong> The bot allows users to start a search for books on Amazon.
                                        It utilizes the entered search query to scrape book details, including title, author, price, and rating, from the Amazon search results page.</li>
                                    <li><strong>CSV Data Storage:</strong> Scraped book data is organized and stored in a CSV file.
                                        The script uses the <code>CSVwork</code> module to save the scraped data to a CSV file named based on the search query.</li>
                                    <li><strong>User Interaction:</strong> The bot interacts with users using Telegram commands.
                                        It offers a <code>/start</code> command to greet users and a <code>/search</code> command to initiate a book search.</li>
                                    <li><strong>Telegram Notifications:</strong> After scraping and storing book data, the bot can send the CSV file containing the data to the user.
                                        It also provides an option for users to receive the file via email.</li>
                                    <li><strong>Integration with Email:</strong> Users have the option to provide their email address to receive the CSV file.
                                        The bot sends the file as an email attachment using the <code>send</code> module.</li>
                                    <li><strong>Efficient Data Handling:</strong> The script ensures that the CSV files are managed efficiently.
                                        After sending the data, the script deletes the temporary CSV file to maintain data privacy.</li>
                                    <li><strong>User-friendly Interface:</strong> The bot employs Telegram's inline keyboards to facilitate user interaction.
                                        Users can respond to prompts with simple button clicks, enhancing the overall user experience.</li>
                                </ul>

                             
                                <p><strong>Usage:</strong></p>
                                    <ol style=" padding-left: 5em;">
                                        <li>Start the bot by using the <code>/start</code> command. The bot will greet the user and provide instructions.</li>
                                        <li>Initiate a book search by using the <code>/search</code> command.
                                            The bot will prompt the user to enter a search query.</li>
                                        <li>The bot will scrape book details from Amazon based on the search query.
                                            If results are found, the bot will provide the option to send the CSV file via email.</li>
                                        <li>Users can choose whether to send the file via email or not using the provided inline keyboard.</li>
                                        <li>If the user chooses to send the file via email, they will be prompted to enter their email address.
                                            Once entered, the bot will send the CSV file as an email attachment.</li>
                                        <li>After successful sending or completion of the process, the bot will provide appropriate notifications and instructions.</li>
                                    </ol>

                                </li>
                                
                            </ol>

                            <!-- Botton NEXT --> 
                            <div class="actions d-flex justify-content-center " style="padding: 5%">
                                <a href="covid.php" class="button" style="color: #1E2738;">
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