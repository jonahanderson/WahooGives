Created by Andrew Ni, Navid Jahromi, Kush Patel, Jonah Anderson

CS 4750: Databases
Final Project 

Our project was built using a combination of PHP, HTML, and CSS using a cloud hosted Postgres Database on Heroku. In order to run this project locally you will need to install XAMPP/LAMPP and run the mySQL and Apache servers. Make sure to take the WahooGives folder after unzipping and place it in the /XAMPP/htdocs/ directory in order to be able to access our website homepage at localhost/WahooGives/index.php once the apache and sql servers are running.

**Note: Since the remote database is a Postgre database then extra steps may be required to be completed before the project can be run locally. To start, locate the php.ini file in your XAMPP folder, the path may vary based on your operating system:**

For windows: 
Open the file at /xampp/php/php.ini
1. Uncomment the lines:
2. extension=pdo_mysql
3. extension=pgsql
4. Restart your apache/mysql servers
5. You should be able to properly signup and use the app at localhost/wahooGives

For mac:
1. Run mySQL and Apache servers
2. Open the .ini file at /lampp/etc/php.ini
3. Uncomment the lines:
4. extension="pgsql.so"
5. extension=”pgsql.dll”
6. Restart your apache/mysql servers
7. You should be able to properly signup and use the app at localhost/wahooGives**

