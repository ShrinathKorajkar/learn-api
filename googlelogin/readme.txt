1.Google OAuth Prerequisites

    1.Create Google API project and get OAuth credentials in Google Developers Console

    2.Here are the steps
        1.click on Create New Project -> name -> enter
        2.select your project.
        3.click on OAuth consent screen. -> external -> appname,email ->
        4.click credentials -> Create credential -> application type,website name -> url of index.php -> create    
        5.then you can get your Client ID and your client secret key.
        

        
2.Download / Install PHP Google API client library.
    1.install composer if not already installed
    2.pushd C:\xampp\htdocs\Api in cmd
    3.type in cmd :- composer require google/apiclient:"^2.0"
    4.copy vendor folder in C:\xampp\htdocs\Api               // automatically installed in above line



3.First we need to create a config.php page to enter all the data that we get while creating our google API / OAuth Credentials

    1.config.php page just copy the below code and replace with your own Google OAuth Credentials
        Copy Source Code and enter client key, secrect key, redirection url

    2.create a index.php page and then add the following code
        Copy Source Code

    3.create a logout.php page and this code
        Copy Source Code



