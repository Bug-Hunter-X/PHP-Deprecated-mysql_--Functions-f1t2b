# PHP Deprecated mysql_* Functions

This repository demonstrates a common error in PHP code: the use of deprecated `mysql_*` functions. These functions are no longer supported in newer PHP versions and pose security risks. This example shows how to identify and fix this issue, switching to MySQLi or PDO.

## Bug
The `bug.php` file contains code that uses `mysql_connect`, `mysql_select_db`, `mysql_query`, and `mysql_fetch_assoc`. These functions are deprecated and should be avoided.

## Solution
The `bugSolution.php` file provides the corrected code using MySQLi, a more modern and secure alternative.

## How to Run
1.  Make sure you have a MySQL server running and have a database and table created.
2. Replace the database credentials (`localhost`, `user`, `password`, `mydatabase`) in both files with your own.
3. Run the `bug.php` file to see the deprecated functions in action (potentially causing an error in modern PHP versions).
4. Run `bugSolution.php` to see the correct usage of MySQLi. 