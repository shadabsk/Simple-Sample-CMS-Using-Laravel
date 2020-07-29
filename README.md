# Project Title
A simple sample CMS application Using Laravel.

## Getting Started
All the source code related to the Controllers that mainly handles with backend logic is present inside app/Http/Controllers directory. It requires php 7.x, HTML5 Browser, Composer, Node.js and Laravel framework.
* Open the root directory of the project and using cmd/terminal run the command "php artisan migrate:fresh". This will flush all the data and create every schema from fresh configured inside sqlite3 internally.
* For laravel 5.x or earlier use the following command, "php artisan make:auth". For laravel 6 and higher use the following set of commands, "composer require laravel/ui" followed by "npm install" and lastly "npm run dev".
* Using cmd/terminal run the command "composer require intervention/image" that will install the image-intervention package that handles the image resizing. Inside public directory a storage link has to be created so first delete this directory if it exist "public/storage/" and run the command "php artisan storage:link" which basically establishes a link essential for image uploading and storing.
* Using cmd/terminal run the command "php artisan serve". Open the browser following the url as "http://localhost:8000/".
* If you want to change the port you can do by the running the server with the following command "php artisan serve --port <any port number of your choice eg: 8090>" and follow the url in the browser as "http://localhost:8090/".	


### Prerequisites

* Php 7.x
* Node.js lts latest version (v14.4.0 used in this case)
* Composer
* Laravel framework
* image-intervention package
* HTML5 compatible browser


### Installing

Download the software setups and follow the on screen instructions

step 1

```
Installing xampp server that will install the php automatically
```
[Click here to visit download page](https://www.apachefriends.org/download.html)

step 2

```
Installing Node.js
```
[Click here to visit download page](https://nodejs.org/en/download/)

step 3
```
Installing Composer
```
[Click here to visit download page](https://getcomposer.org/download/)

step 4

```
Installing Laravel via composer with the following command
```
```
composer global require laravel/installer
```
[Click here to visit official documentation for installing laravel](https://laravel.com/docs/7.x/installation)

step 5

```
Installing chrome browser (HTML5 compatible) can be downloaded from below link
```
[Click here to visit download page](https://www.google.com/chrome/)

## Built With

* [Laravel](https://laravel.com/) - A web application framework with expressive, elegant syntax.
* [Visual Studio Code](https://code.visualstudio.com/) - A code editor redefined and optimized for building & debugging modern web & cloud apps. 


## Demonstrations

* Take a look at the working project demonstration. Press Ctrl+Click on the image to view the complete video on a new tab.


[![A simple sample CMS application Using Laravel
](https://i.ytimg.com/vi/WglHeNO-Qpc/hqdefault.jpg)](https://youtu.be/WglHeNO-Qpc)


## Authors

* **Shadab Shaikh** - [shadabsk](https://github.com/shadabsk)

## Acknowledgments

* The template of readme.md was taken from [PurpleBooth](https://github.com/PurpleBooth)
