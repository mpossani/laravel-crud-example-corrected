CREATE USER 'my-laravel-app'@'%' IDENTIFIED BY '8562@mYapp';
GRANT Delete ON `my-laravel-app`.* TO 'my-laravel-app'@'%';
GRANT Insert ON `my-laravel-app`.* TO 'my-laravel-app'@'%';
GRANT Select ON `my-laravel-app`.* TO 'my-laravel-app'@'%';
GRANT Update ON `my-laravel-app`.* TO 'my-laravel-app'@'%';
GRANT Trigger ON `my-laravel-app`.* TO 'my-laravel-app'@'%';
GRANT Show view ON `my-laravel-app`.* TO 'my-laravel-app'@'%';
GRANT Lock tables ON `my-laravel-app`.* TO 'my-laravel-app'@'%';
