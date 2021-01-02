# QueryRunner

Using the packages **[Query]()** and **[DatabaseConnection]()**, use the **QueryRunner**. A form to create and execute querys using PHP.

First step is set a database.
````php
ConnectionManagement::setDatabase([
'db' => [
    "driver" => "psql",
    "host" => "localhost",
    "port" => "8080",
    "dbname" => "clients_db",
    "user" => "root",
    "password" => "1234",
]
]);
````
Now, you can use normally QueryRunner.

QueryRunner use the same form of [Query]() from Hyper.
First, you build query 

````php
$query = new QueryRunner;
$query->select('TableName', 'name,age,created_by');
````

After that, you can use three methods to execute the query.

### fetch
Execute query and return **just the first result**.

### fetchAll
Execute query and return **all result inside of a array**.

### execute
Execute query and return **rows number affects**.
