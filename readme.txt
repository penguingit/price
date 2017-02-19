This is PHP + MYSQL + CSS example

I have DB (you can see all settings in config.php) 

The table name is price with 3 rows (just change 'price' to what U like in code if U need it).

my 3 rows is:
id (int, auto increment), name (text, UTF-8-General), price (double for prices like 45.67)

For administration your DB directly form website you can use admin.php or enter.php  (also you can give it to user!)

I use md5 password encryption. 
U can generate md5 hash with passgen.php , it's included.  Just edit and generate, it's easy. Then put md5 hash in enter.php, $pass variable.

Now, I use edit2.php to put it all PHP files together in order.

In firstpart.php I just show DB in table 
In dbadd.php part about add new line to DB

page.php is just simple DB layout in table with .css style
If you need to add this table to your project you can simple use include ('page.php'); like I did it in index.php
