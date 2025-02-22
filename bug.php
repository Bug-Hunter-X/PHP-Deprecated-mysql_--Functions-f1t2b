This code uses the `mysql_*` functions, which are deprecated and removed in PHP 7.0.  This can lead to unexpected behavior or errors.

```php
<?php
$conn = mysql_connect('localhost', 'user', 'password');
if (!$conn) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('mydatabase', $conn);

$sql = "SELECT * FROM mytable";
$result = mysql_query($sql, $conn);
if (!$result) {
die('Could not query: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print_r($row);
}

mysql_close($conn);
?>
```