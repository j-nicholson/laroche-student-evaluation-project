# laroche-student-evaluation-project
Chemistry/Biochemistry student assessment and evaluation site for La Roche College students and professors
Setting up Apache, PHP, and MYSQL on Local Machine

Overview
	In order for PHP to function properly, it must be run on a server. There are many software packages out there that will cause your local machine to act like a server to run languages such as PHP and also different types of Databases. XAMPP, the software we will be installing, will provide the setup needed to do just that.

1.	Install XAMPP. XAMPP is a program distributed by Apache containing MySQL, PHP, and Perl packages. Use the following link to go to the install page: https://www.apachefriends.org/download.html. For Windows users, download the PHP 7.1.8 32-bit package. For Linux users, download the PHP 7.1.8 64-bit package. For Mac users, download the PHP 7.1.8 64-bit package.

2.	After installing, open the XAMPP manager application and click on the Manage Servers tab. Start both the Apache Web Server and the MySQL Database servers. If issues with starting the MySQL Database server occurs, please follow the below steps.
a.	If MySQL Database will not start: First open the XAMPP installation directory
b.	Open the etc Folder
c.	Open the my.cnf file using any text editor (I used sublime text 2).
d.	Change the Port location from 3306 to 3307 in both sections listing the Port.
e.	Add the line “innodb_force_recovery = 1” directly under the line that reads “myisam_sort_buffer_size = 8M”.
f.	Save the my.cnf file.
g.	Restart the MySQL Database server. This can be done one of two ways:
i.	Terminal: (Only have the Mac Applications directory. This will be different for Linux and Windows machines) $ sudo /Applications/XAMPP/xamppfiles/bin/mysql.server/ start
ii.	Restart from the XAMPP manager application: Go to the Manage Servers tab and click restart while the MySQL Database server is selected.
h.	Visit https://stackoverflow.com/questions/27835348/mysql-database-cannot-start-on-xampp-for-mac for more information.

3.	Go to any browser and type “localhost” into the URL field. If set up was successful, you should see the XAMPP homepage with functioning links to phpInfo and phpMyAdmin in the top right corner of the page.

4.	Install the Brackets IDE to develop with PHP, HTML, and CSS. The link to download the IDE can be found here: http://brackets.io/

5.	Create a project folder to hold your PHP files. Save this folder in the XAMPP Application folder directory: XAMPP/xamppfiles/htdocs/

6.	To set up a live preview of your web page using the brackets IDE, go to file -> Project Settings and type in the following: http://localhost/name_of_folder_containing_PHP_files

7.	Click the lightning bolt icon to launch the web page.

8.	For PHP documentation and information, visit http://www.php.net/. For more information on MySQL, visit https://www.mysql.com/. 

Setting up Ubuntu VM Development Environment (Dev tools pre installed)
1.	Install VirtualBox from the following link: https://www.virtualbox.org/wiki/Downloads. Be sure to select your correct OS platform.

2.	Open VirtualBox after installation.

3.	Insert flash drive containing Ubuntu image into your machine.

4.	Double click the Ubuntu image file to start running it in VirtualBox.

5.	Once the Ubuntu VM starts, enter the password: batman to gain access.

6.	Open the terminal (Control + alt + T) and navigate to the XAMPP folder directory using the following command: $ cd /opt/lampp/

7.	To run the XAMPP manager, run the executable file with the following command: $ sudo ./manager-linux-x64.run &

8.	Once the application starts, go to the manage servers tab and make sure all servers are running by pressing start all button. (Apache home and phpMyAdmin should now be available to use at localhost. Type in localhost into the firefox browser URL field.)

9.	Make sure to store PHP files in the following directory: /opt/lampp/htdocs/[php_file_folder]/ for the browser to recognize the file path.

10.	To access/ execute PHP files, visit the following in the browser’s URL: localhost/[php_file_folder]/[php_file_name.php]

11.	NOTE: To edit/save/create PHP files, you may have to change the file permissions. To do this, execute the following command in the PHP file directory in the terminal: $ sudo chmod 777 [php_file_name.php]. This will give the php file read/write permissions. To check if this was successful, type the following terminal command in the PHP file directory: $ ls -l. This will list all files in the current directory with their permissions and owners.

