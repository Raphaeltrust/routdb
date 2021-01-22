# routdb
RoutDB is a lightweight and yet a powerful database client. It is a simple database manager to create, delete and view databases.
RoutDB makes development work much faster by accessing and managing all your database in one dashboard, easily create and delete databases and more.
# Installation
RoutDB is a PHP script, so it is very easy to install. RoutDB is compatible with all major servers including Apache, Lighttpd, Nginx etc.<br>
No technical knowledge required to use RoutDB, easily follow the simple steps below<br>
<ul><li><strong>STEP 1:</strong> Download routDB .zip file from the GitHub repository</li>
<li><strong>STEP 2:</strong> Upload the .zip file to your server root directory or a subdirectory where you wish to install routDB</li>
<li><strong>STEP 3:</strong> After uploading the .zip file, extract the .zip file and that's all!</li></ul>
You can now access the database area by visiting routDB on your browser.
# Documentation
As per the development of RoutDB, it is easy to use. RoutDB works with built-in session function. The session enables RoutDB to communicate with your server as well as to give access to pull, delete, and manage databases on the server.
RoutDB session is made up of four componets:
<ol><li><strong>Session name:</strong> The session name is used to create a secured environment where you can only have access to the server, without a session name you won't be able to access any part of the database area. The session name acts like a login password but doesn't store the session name in a database, this is because of security issues. To improve security issues we attempt not to store user session which mean when you close your browser window the session will be erased.You have to create a new session name each time you want to access the database area. 
Session name can contain letters, you can name your session name with any name of your choice, it could be your name or something else. The session name is just a reference to create a secured environment.</li>
<li><strong>Server Name:</strong> The servername refers to you server address, if you install routDB on a local machine, your server name should be "localhost". Server name is required to locate your server as well as connecting to the server. Always make sure you input the correct server name.</li>
<li><strong>Username:</strong> This refers to your server username example " root@localhost or "root" depending on your sever configuration you need to input the correct username.</li>
<li><strong>Password:</strong> This to your server password<li></ol>
