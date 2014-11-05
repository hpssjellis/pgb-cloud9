nitrous-scripts
===============

Advanced scripts for nitrous.io

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


These scripts should be in the correct folder when you activate them. Good idea to drag them into the main workspace folder from your repository.


Note: 2 files in this directory (pakage.json and Procfile) are needed in the main www folder only if pushing your repository to heroku.


#php

Note: A few files have .php endings these are for working with AJAX. php files can not work directly on a mobile app since a mobile app is not a php server. 

I tried making my nitrous box into a php server, which is easy to do, just not at the same time that it is a node server. The trick is to just make a new login with a new box for all your classes php files. Then each person can copy the correct code for their app.

Commands to setup a php server

parts install php5

parts restart apache2      (or parts start apache2)

note the www folder needs to be in the workspace folder not like our setup where it is inside another folder.

