<?php

class Database extends PDO{
    function __Construct($DB_TYPE,$DB_HOST,$DB_USER,$DB_NAME,$DB_PASSWORD){
        parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER,$DB_PASSWORD);
    }
}