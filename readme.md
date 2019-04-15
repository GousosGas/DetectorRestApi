This is my solution for the device detector challenge.
It is a REST Api that stores user's public ip, device information and his OS.



## UserStories

- As admin I want to store user's public ip, device information and OS.
- As admin I want to serve the resources to other users.
- As admin I want to delete a resource.
- As admin I want to update a resource.

## Technologies

- Laravel 5.5
- Vagrant
- Homestead
- barryvdh/laravel-cors

## Software
To reproduce the app you will need to install a virtual Machine, Vagrant, Postman or something similar
- [Homestead Page](https://laravel.com/docs/5.5/homestead)
- [Postman Page](https://www.getpostman.com/)
 
## Instructions

- Run the container with the command **vagrant up**
- You need to enter Vagrant's environment with the command **vagrant shh**
- Navigate to **home/vagrant/code** path where the app is located 
- Run the tests with the command **vendor/bin/phpunit**
- Run the migrations with **php artisan migrate** command
- Seed the database with random content with the command **php artisan db:seed**
 - Access [devicedetector.test](http://devicedetector.test/device-info)
 
 ## Endpoints

 - GET   http://devicedetector.test/device-info
 - GET   http://devicedetector.test/device-info/{public_id}
 - PUT   http://devicedetector.test/device-info/{public_id}
 - DELETE   http://devicedetector.test/device-info/{public_id}
 - POST  http://devicedetector.test/device-info/
 

## Author 
[Gousopoulos Konstantinos](http://gousopoulos.gr/)