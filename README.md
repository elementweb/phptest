# Sample PHP application

This is a very good starting point for someone looking to develop nicely structured PHP application. No frameworks used, only a couple of components to make everything easier.

-- Kostas Gliozeris

# Set-up

1. Set 'public' folder as domain root so that it is accessed as like as follows: http://test.local/.
2. Run 'composer update'.
3. Create new database on your MySQL server then configure application to use host, user, password and database name in 'config/database.php'.
4. Run command to build the database by visiting URL '/database/build'. This will create database tables and populate products tables (subscriptions, services and goods) with fake data. To recreate the database, firstly destroy it using '/database/destroy' and then create it again using '/database/build'.
5. Application is ready to go.

# Components used

Back-end:

1. AltoRouter (https://github.com/dannyvankooten/AltoRouter) for routing HTTP requests.
2. Illuminate/Database (https://github.com/illuminate/database) for easier database handling.
3. Fake library (https://github.com/fzaninotto/Faker) for generating fake data (Subscriptions, Services, Goods).
4. Validation library (https://github.com/Respect/Validation) for Back-end validation.
5. Openwall PHPass library (https://github.com/hautelook/phpass) for generating user passwords.

Front-end:

1. Bootstrap v3.3.7.
2. jQuery v1.11.1.
3. Bootstrap Date Picker (http://bootstrap-datepicker.readthedocs.io/en/latest/index.html).
4. Vue.js, Vue-resource component.
5. Moment.js (https://github.com/moment/moment/).
6. Font-Awesome (https://github.com/FortAwesome/Font-Awesome).

# Database:

SQL dump available: https://github.com/elementweb/phptest/blob/master/phptest.sql