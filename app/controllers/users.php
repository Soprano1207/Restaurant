<?php 

namespace users;
require_once $_SERVER['DOCUMENT_ROOT'].'/app/models/Tables.php';

class User extends \tables\Tables {
    private $params;

    public function __construct(array $params = []) {
        parent::__construct();
        $this->params = $this->filterParams($params);;
        
    }

    public function getSelectOne() {
        return $this->selectOne('users', $this->params);
    }

    public function getSelect() {
        return $this->select('users', $this->params);
    }

    public function getInsert() {
        return $this->insert('users', $this->params);
    }

    public function getDelete() {
        return $this->delete('users', $this->params);
    }

    public function getUpdate() {
        return $this->update('users', $this->params);

    }

}


if (isset($_POST)) {
    switch($_POST['action']) {
        case 'auth': {
            $user = new User(array(
                'login' => $_POST['login'],
                'pass' => $_POST['pass'],
            ));

            $json = (is_array($user->getSelectOne())) ? array("msg" => "Добро пожаловать") : array("msg" => "Неверный логин или пароль");
            
            echo json_encode($json);
        }
    }


}

?>