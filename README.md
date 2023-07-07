# Simple Online Bank System (Backend System)
This is a simple online banking system written in PHP using Laravel Lumen Framework. I also written the frontend that uses this backend system that you can also clone. This is the link to the repository of the frontend https://github.com/joseph-bautista/online_bank_ui

> Please note that the frontend system of this is the recommended frontend to be used. If you wish to create your own frontend system, please refer to this https://www.postman.com/lunar-star-596261/workspace/online-banking-system/overview It is a postman workspace than you can check so you may know the API endpoints that is being used in this system 

# Setting up the system
1. Clone the repository by opening your terminal and run the 
> git clone https://github.com/joseph-bautista/online_bank.git 
2. Go to the directory of the project by running
> cd online_bank 
3. Create your .env file to the root of the project and update necessary details such as database details.
4. Create an empty database in mysql.
5. Go back to the terminal and run 
> composer install 
6. After that, we can create tables and seed our tables by running
> php artisan migrate:fresh --seed 
7. We can now run the server by running
> php -S localhost:8000 -t public 

And viola! We have set up our online bank backend system. 

We can access the postman workspace here https://www.postman.com/lunar-star-596261/workspace/online-banking-system/overview choose local environment and play along the API Endpoints. 

We can then proceed to setting up the UI of it in a separate repository. You can follow the steps here https://github.com/joseph-bautista/online_bank_ui 


# The Database Diagram
![alt text](https://github.com/joseph-bautista/online_bank/blob/master/online_banking.png?raw=true)


# Technologies Used

1. Laravel Framework Lumen (10.0.0) (Laravel Components ^10.0)
2. PHP 8.2
3. MySQL 8
4. Postman
5. RESTFul API

# References
1. https://lumen.laravel.com/docs/10.x
2. https://laravel.com/docs/10.x
3. https://www.bsp.gov.ph/PaymentAndSettlement/PESONet%20Participants.pdf
4. https://www.instapayph.com/what-is-instapay/
5. https://laravel-auditing.com/guide/installation.html