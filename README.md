RESTful API in Yii 2 Advanced Application Template
==================================================

Yii2 Advanced Application Template with RESTful API configured. Take a look at http://budiirawan.com/setup-restful-api-yii2/ for more detail explanation

## Install Composer Packages
You need [Composer](http://getcomposer.org) installed first.
```
composer self-update
```
```
composer install
```

## Run Yii Init
Open terminal and go to the project folder and run

Mac/Linux
```
php ./init
```

Windows
```
init
```
Choose **development** environment and finish the steps.

## Configure Database
create your database and configure it in **common/config/main-local.php**

## Run Database Migration
This command will create new country table and populate its data

```
./yii migrate
```

## Enable Mod Rewrite if you use Apache
Make sure you already enable this mod. Follow this [Tutorial](http://stackoverflow.com/questions/869092/how-to-enable-mod-rewrite-for-apache-2-2)






