<?php 
namespace tables;
require_once $_SERVER['DOCUMENT_ROOT'].'/app/db/connection.php';

abstract class Tables {
    protected $pdo;

    // protected $selectStmt;
    // protected $insertStmt;
    // protected $updatetStmt;
    // protected $deleteStmt;
    
    protected function __construct() {
        $reg = \connection\Registry::instance();
        $this->pdo = $reg->getPDO(); 

    }

    private function convertParams(array $params = []) : string {
        $str = "";
        $and = false;
        foreach ($params as $key => $value) {
            $str .= (!$and) ? "$key = :$key" : " AND $key = :$key";
            $and = true;
        }

        return $str;
    }

    protected function filterParams(array $params = []) : array {
        foreach ($params as $key => $value) {
            if (empty($value)) {
                unset($params[$key]);
            }
        }
        return $params;
    }

    protected function selectOne(string $table, array $params = []) {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE ".$this->convertParams($params));
        $stmt->execute($params);

        return $stmt->fetch();
    }

    protected function select(string $table, array $params = []) {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE ".$this->convertParams($params));
        $stmt->execute($params);

        return $stmt->fetchAll();

    }

    protected function delete(string $table, array $params = []) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM $table WHERE ".$this->convertParams($params));
            $stmt->execute($params);
        } catch (\PDOException $e) {
            echo "ОШИБКА: ".$e->getMessage();

        }
        

        return true;
    }

    protected function insert(string $table, array $params = []) {

        $arrColumns = [];
        $arrValues = [];

        foreach ($params as $key => $value) {
            array_push($arrColumns, $key);
            array_push($arrValues, $value);
        }

        $strColumns = implode(", ", $arrColumns);
        $strValues = ":".implode(",:", $arrColumns);

        $stmt = $this->pdo->prepare("INSERT INTO $table ($strColumns) VALUES ($strValues)");
        $stmt->execute($params);

        return true;
    }

    protected function update(string $table, array $params = []) {

        $str = "";
        $flag = false;

        foreach ($params as $key => $value) {
            if ($key === 'id') {
                continue;
            } else {
                $str .= (!$flag) ? "".$key." = :$key" : ", ".$key." = :$key"; 
                $flag = true;
            }
        }

        $stmt = $this->pdo->prepare("UPDATE $table SET $str WHERE id = :id");
        $stmt->execute($params);

        return true;
    }
}
?>