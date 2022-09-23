# USOM API Address Checker - www.usom.gov.tr/api/

* URL or IP address checker
* If you want to change the language, edit the file "usom.class.php"
* Works on php 5.6.0 or higher

Add the "usom" class to your file
-----------------------
```php
$directory = __DIR__;
require($directory . '/usom.class.php');
```

URL Checking Example
-----------------------
```php
//URL Check
$url_check = \usom::check("https://example.com", 1);

// print return array
print_r($url_check);
```

Example Output:
```
Array
(
    [status] => 0
    [url] => example.com
    [type] => domain
    [description] => Bankacılık - Oltalama
    [sourceFrom] => İHBAR
    [connectionType] => Oltalama
    [created_date] => 2022-09-23 00:00:00.569864
    [criticality_level] => 4
)
```

IP Checking Example
-----------------------
```php
//IP Check
$ip_check = \usom::check("1.1.1.1", 2);

// print return array
print_r($ip_check);
```

Output:
```
Array
(
    [status] => 1
)
```
