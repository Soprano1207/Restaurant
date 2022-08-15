<?php 
namespace connection;
require_once $_SERVER['DOCUMENT_ROOT'].'/app/config/config.php';

class Registry {

    private static $instance = null;
    private $config = null;
    private $pdo = null;

    //получаем данные для подключения к БД
    public function __construct() {
        $this->config = (new \config\DBConfig())->getConfig();
    }
    
    public static function instance() : self {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }

    //возращаем экземпляр класса PDO
    public function getPDO() {
        if (is_null($this->pdo)) {
            try {
             $this->pdo = new \PDO(
                "mysql:
                host=".$this->config['DB_HOST'].";
                dbname=".$this->config['DB_NAME'].";
                charset=".$this->config['DB_CHARSET'], 
                $this->config['DB_USERNAME'], 
                $this->config['DB_PASSWORD'],

                [
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]

                
             );
             
            //  echo "Подключение к БД установлено";
             
            } catch (\PDOException $e) {
                echo 'Подключение к БД не удалось: '.$e->getMessage();
                die();
            }
        }

        return $this->pdo;
    }
}


?>