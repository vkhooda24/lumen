Why Lumen: Lumen is the perfect solution for building Laravel based micro-services and blazing fast APIs. In fact, it's one of the fastest micro-frameworks for building APIs for mobile apps.

Lumnen Installation:
https://lumen.laravel.com/docs/5.3/installation#installing-lumen

Setup Valet:
Valet is a Laravel development environment for Mac minimalists. No Vagrant, no /etc/hosts file required.Laravel Valet configures your Mac to always run Nginx local server in the background when your machine starts. Then, using DnsMasq, Valet proxies all requests on the *.dev domain to point to sites installed on your local machine.
Read more about Valet :https://laravel.com/docs/5.3/valet
Installation Valet : https://laravel.com/docs/5.3/valet#installation

Setup phpMyAdmin: 
1.Download phpmyadmin from https://www.phpmyadmin.net/
2.Unzip file and paste it in valet park folder i.e any directory which set park using valet park foldername.
3.Open in browser using phpmyadmin.vk vk is domain name which set by valet.
4.use password reset step for phpmyadmin. by default password and user root.

Passowrd add/update:
Sometime you will see this issue when setting new or updating the old password for phpMyAdmin:
Issue :mysql SET PASSWORD FOR 'root'@'localhost' = PASSWORD('vk');
ERROR 1131 (42000): You are using MariaDB as an anonymous user and anonymous users are not allowed to modify user settings.

Solution: use given below command for user root
mysql -u root 
SHOW GRANTS FOR 'root'@'localhost';
SELECT * FROM mysql.user WHERE User='root' and Host='localhost'\G
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('vk');
Select user();//fetch all user
SHOW VARIABLES WHERE Variable_name = 'port'; // show port number phpmyadmin using
SHOW VARIABLES WHERE Variable_name = 'hostname';//show hostname phpmyadmin using

Commonly use terminal command on MAC:
1. Print Path using terminal: 
echo $PATH

2. Add paths to bash file:
sudo nano /etc/paths

3. Open bash file
vim ~/.bash_profile

