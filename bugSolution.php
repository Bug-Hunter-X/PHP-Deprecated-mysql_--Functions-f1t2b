This code uses the MySQLi extension, a more secure and up-to-date alternative to the deprecated `mysql_*` functions.

```php
<?php
$conn = new mysqli('localhost', 'user', 'password', 'mydatabase');
if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);
}

$sql = "SELECT * FROM mytable";
$result = $conn->query($sql);
if (!$result) {
die('Could not query: ' . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    print_r($row);
}

$conn->close();
?>
```