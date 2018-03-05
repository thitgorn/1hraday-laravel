# Day2

## setup php myadmin

```install mysql```

copy generated password to somewhere

// change mysql password

```cd /usr/local/mysql/bin```

```sudo ./mysql -u root -p```

<b>then enter copied password</b>

// change the password

```Alter user 'root'@'localhost' identified by '<new password>'```


install phpmyadmin by

mv phpmyadmin folder that downloaded to /Library/WebServer/Documents/phpmyadmin

open mysql server

then you can now open

localhost/phpmyadmin

### to setup

go to localhost/phpmyadmin/setup

use the same password as mysql

Now you're rdy to go

### config

.env and .env.example
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<database table>
DB_USERNAME=<username>
DB_PASSWORD=<password>
```
