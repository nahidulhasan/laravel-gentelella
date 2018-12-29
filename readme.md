

## Laravel-gentelella

Please Follow the instructions.

- Clone the repo

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







