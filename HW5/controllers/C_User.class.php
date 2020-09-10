<?php
include_once "models/M_User.php";
class C_User extends C_Base {
    protected function before(){
        $this->title = '';
        $this->content = '';
    }
    
    public function action_auth(){
        $this->title= 'Регистрация';
		$this->content = $this->Template('templates/t_reg.tmpl');	       
        if(isset($_POST['addNewUser'])){
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $name = $_POST['name'];  
            $userR = new M_User;
            $result = $userR -> newUser($login, $name, $email, $pass);
            if($result) {
                echo "Успешно!";
            }
        }
	}
    
    public function action_log(){
        if(isset($_POST['in'])){ 
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $userL = new M_User;            
            $result = $userL -> getUser($login);
            foreach ($result as $item) {
                if ($login == $item['login'] and ($pass) == $item['pass']) {
                $_SESSION['login'] = $item['login'];
                $_SESSION['pass'] = $item['pass'];
                $this->title= 'Личный кабинет';
                $this->content = $this->Template('views/v_profile.php', array('content' => $item['login']));
                } 
                else {
                    echo "Не правильно ввели данные!";
                    $this->content = $this->Template('templates/t_log.tmpl');
                    }
            }
        } else {
        $this->title= 'Вход';
		$this->content = $this->Template('templates/t_log.tmpl');
        }
    }
    public function action_profile(){
        $this->title= 'Личный кабинет';
		$user = new M_User;            
        $result = $user -> getUser($_SESSION['login']);
        foreach ($result as $item) {                
                $this->title= 'Личный кабинет';
                $this->content = $this->Template('views/v_profile.php', array('content' => $item['login']));
                } 
                	
	}
    
    public function action_logout(){        
            unset($_SESSION['login']);
            unset($_SESSION['pass']);
            session_destroy();	
            header('Location: index.php');
}}