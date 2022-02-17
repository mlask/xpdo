# xpdo
eXtended PDO

### example use:

```$db = new xPDO('mysql:host=localhost;dbname=test', 'user', 'pass');```

#### available methods:

- ```$db->get_col(string $sql, [...$args]): mixed```  
  returns indexed array with single column of data (`...$args` for prepared query) or empty array `[]` if none
- ```$db->get_row(string $sql, [...$args]): mixed```  
  returns array single row of data (`...$args` for prepared query) or `false` if none
- ```$db->get_array(string $sql, [...$args]): mixed```  
  returns associative array with data (`...$args` for prepared query) or `false` if none
- ```$db->get_field(string $sql, [...$args]): mixed```  
  returns single field of data (`...$args` for prepared query) or `false` if none
