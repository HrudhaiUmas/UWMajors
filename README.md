# UWMajors
This is the github repo for the summer project UWMajors

# IMPORTANT
To run the HTML go to you local machine and run Index.html


# Localhost Setup & Setting Up DB for Crowdsouce Page (Just 5 quick steps)!

1) Download XAMPP from online 
2) Open XAMPP and go to "Manage Servers"
  - Debugging tips:
  - If XAMPP won't let you run the MySql server(you click start and its still red) then go to terminal and type (for Mac):
```
$ sudo killall mysqld
$ sudo /Applications/XAMPP/xamppfiles/bin/mysql.server start
```
  - Then click start for MySql on XAMPP Application and it should work!

3) Start a localhost server for UWMajors
   - To do this be in the UWMajors directory and type
```
$ php -S 0.0.0.0:8000
```
  - This will start hosting locally on http://localhost:8000/ !

4) Open MyPHPAdmin.
    - To do this type in your browser: http://localhost/phpmyadmin/
    - This will allow you to open MyPHPAdmin (won't work if you do not have XAMPP Mysql and Apache Web Server running.

5) Create a DB named "crowdsource" and a table inside that DB named "crowdsource_info" and the crowdsourcing page should work fine!



# Put link to UW major's discord server 
* link
