Cloud9-scripts
===============


#index-teacher.html

Copy the code in this file to put at the top of the teachers cloud9 index.html page. This will allow entering each student and a link to their sites for easy marking and student feedback.


#donations.html

Example thank you page for anyone who helps with the course.


#Advanced scripts for nitrous.io

Note: right click your www folder to download a backup called www.tar.gz

to restore your backup, upload the file then find where the www.tar.gz file is and type

tar xzf www.tar.gz

that will restore your entire folder.




You should know a bit of linux commands such as:

pwd  (shows where you are)

tab  (auto-completes, type the first few letters, then tab, super useful!)

up arrow  (shows other commands you have tried, also very useful )

cd .. (moves up a directory)

cd folderName (moves into the directory)

chmod -R +x *      (sets all files in the directory to be able to be executed)

chmod +x myBashFile.sh  (sets a bash file to be able to be executed by anyone)

ls -la   (shows all files and attributes including hidden files)

./myBashFile.sh   (activates the file)



Note: Students should only activate the cloud9.js file using the run command.
Sometimes students accidentally activate the index.html file with the run command. that is BAD, BAD, BAD it acti8vates apache2 which you can then stop using the killall comand

See if apache2 is running using 

ps -ax

stop apache2 using

killall -9 apache2


then reactivate cloud9.js by choosing to run it.

These scripts should be in the correct folder when you activate them. Good idea to drag them into the main workspace folder from your repository.


Note: 2 files in this directory (pakage.json and Procfile) are needed in the main www folder only if pushing your repository to heroku.


#php

Note: A few files have .php endings these are for working with AJAX. php files can not work directly on a mobile app since a mobile app is not a php server. 


Cloud9   http://c9.io auto sets up a demo-project workspace that has a running php server. 
php -- index.php  (run) starts the php capable apache2 server

You can link your phonegap apps to this url for development of php server side information.

Databases are a bit more complex.

Unless you can run a php script that sets up your database you will need to install phpmyadmin in the demo-project on cloud9.



In the terminal enter

mysql-ctl start

phpmyadmin-ctl install


You can then use phpmyadmin to setup your databases.

find database C9

Create table

c9table 4 columns 

myID INT Primary A_I

myName TEXT

myX   INT   click not null

myY   INT   click not null


then insert a few entries using simple names like fred tom peter etc


The webpage to use to access and change the database is callede

updateData.php

It only updates information. Let the students figure out how to Insert new fields into the database.

Any files in this project with the .php extension need to go in the php folder of the demo=project
oe make a new HTML5 or PHP project using cloud9

use the file updateData.php













