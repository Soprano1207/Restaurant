<?php
namespace config;

class DBConfig {
    private const CONFIG = array(
        'DB_HOST' => 'localhost',
        'DB_NAME' => 'restaurant',
        'DB_CHARSET' => 'utf8',
        'DB_USERNAME' => 'root',
        'DB_PASSWORD' => ''
    );

    public function getConfig() {
        if (!empty(self::CONFIG)) {
            return self::CONFIG;
        } else {
            echo "Не указаны данные для подключения к БД!!!";
            die();
        }
    }
}
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'restaurant_test');
// define('DB_CHARSET', 'utf8');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'root');

?>