# Laravel Backend

A RESTful API that fetches pairs of pictures(title, link, and description) from a mySQL database designed to be used in the frontend application <a href="https://github.com/tr4cey/who-is-cuter-frontend">"Who is Cuter?"</a>. This application will get and display 2 photos of cute animals and allow the user to vote on which animal is cuter, updating the total number of votes and then displaying a new pair of photos

Currently Available at: **Currently N/A, will hopefully be available soon**

## Getting Started

By following these instructions, you will be able to get this project up and running. You will be able to send HTTP requests to recieve information about induvidual pictures and pairs of pictures, and also update the number of total votes given for each picture.

### Prerequisites

* PHP
* Composer
* Laravel 5 installer(you can get this via composer)
* mysql

### Installing and Running on Localhost

After cloning the repository, make sure you have a mysql server up and running on your system.
Then open up the file:
```
who-is-cuter-backend/config/database.php
```
And edit the following lines, by putting in the Database name, Username, and Password for your mysql database:
```
...
'database' => env('DB_DATABASE', 'DatabaseName'),
'username' => env('DB_USERNAME', 'User'),
'password' => env('DB_PASSWORD', 'Password'),
...
```
Then run the following command:
```
php artisan migrate
```
This will create a Pictures and a Pairs table in your mysql database.  Since the tables are created you can now populate them with pictures and pairs. 
<a href="https://pastebin.com/ksSHsWPz">Here are the SQL insert statements I originally used.</a>

Finally run: 
```
php artisan serve
```
To serve the application. You should now be able to access the project on localhost:8000

### Test: HTTP Requests

Below are examples of HTTP GET requests that can be used with this project: (replace parts in all caps with data)

```
http://localhost:8000/getPair/PAIR_ID
http://localhost:8000/getPicture/PICTURE_ID
http://localhost:8000/votePic1/PAIR_ID
http://localhost:8000/votePic2/PAIR_ID
```

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
