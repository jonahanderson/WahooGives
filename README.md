Created by Andrew Ni, Navid Jahromi, Kush Patel, Jonah Anderson

CS 4750: Databases
Final Project 

Our project was built using a combination of PHP, HTML, and CSS using a cloud hosted Postgres Database on Heroku. In order to run this project locally you will need to install XAMPP/LAMPP and run the mySQL and Apache servers. Make sure to take the WahooGives folder after unzipping and place it in the /XAMPP/htdocs/ directory in order to be able to access our website homepage at localhost/WahooGives/index.php once the apache and sql servers are running.

Note: Since the remote database is a Postgre database then extra steps may be required to be completed before the project can be run locally. To start, locate the php.ini file in your XAMPP folder, the path may vary based on your operating system:

For windows: 
Open the file at /xampp/php/php.ini
1. Uncomment the lines:
2. extension=pdo_mysql
3. extension=pgsql
4. Restart your apache/mysql servers
5. You should be able to properly signup and use the app at localhost/wahooGives

For mac:
Run mySQL and Apache servers
Open the .ini file at /lampp/etc/php.ini
Uncomment the lines:
extension="pgsql.so"
extension=”pgsql.dll”
Restart your apache/mysql servers
You should be able to properly signup and use the app at localhost/wahooGives**

