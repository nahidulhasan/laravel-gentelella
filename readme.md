

## Laravel-gentelella

Laravel with Gentelella admin template for developing Laravel applications

## Quick Start

- Clone this repo or download and extract it somewhere
- You may delete .git folder if you get this code via git clone

- Create .env file from copy .env.example 

- Run ``npm install``

- Run ```composer update```



 Now run the following command from your terminal one by one. Running the commands be sure that you have installed docker. You will get install instructions from this
 [link](https://docs.docker.com/)

```sh
docker-compose build
```


```sh
docker-compose up -d
```

Now Run Following commands for migration and DB Seed.

```
docker-compose exec php php artisan migrate
```

```
docker-compose exec php php artisan db:seed
```


Now browse project 

 ```
 http://localhost:8025/
```

Login:

![alt text](https://github.com/nahidulhasan/laravel-gentelella/blob/master/public/images/login.png "Login")


Dashboard:

![alt text](https://github.com/nahidulhasan/laravel-gentelella/blob/master/public/images/d1.png "Dashboard")

Add New User:

![alt text](https://github.com/nahidulhasan/laravel-gentelella/blob/master/public/images/d2.png "Dashboard")






