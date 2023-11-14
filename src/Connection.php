<?php

namespace App;

use PDO;

class Connection {

    private static $dsn = 'mysql:host=localhost;dbname=pizzeria';
    private static $username = 'root';
    private static $password = '12PoisHaie74?';


/* Create method calling PDO
*  Return a new PDO instance containing database attributes and values
*  Adding Error mode and fetch mode in array options
*/

    public static function getPDO(): PDO
    {
        return new PDO(self::$dsn, self::$username, self::$password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

}

?>