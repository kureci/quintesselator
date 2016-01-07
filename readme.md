# Quintesselator - Demo for Web developer role
This is a simple demo to showcase a responsive calculator developed using HTML, CSS and JavaScript + Bootstrap for responsiveness. I'm using Laravel just for the authentication and user registration sides of the demo.

### To install, please follow the steps below

Note that you will need PHP 5.5.9 or above as Laravel 5.1 requires that, and composer to install the project

After cloning this repository do

```
cd quintesselator
composer install
```

At this point you should create a database on your machine so we can run the migrations needed for user registration and login counter.

Create a default .env file for Laravel DB (and other) configuration
```
cp .env.example .env 
```
Modify ```.env``` to include correct database name and login credentials.

Then make sure the following directories are writabe by the webserver
```
chmod -R 775 storeage/ bootstrap/ public/
```
If you get errors when loading the page, try changing the group for the whole repository for include the webserver.

And then within the root directory of the project
```
php artisan migrate
php artisan key:generate
```

If all goes well, you should be able to see the project by going to the /public URL in the project. e.g. http://localhost/public

## HAVE FUN!!!
