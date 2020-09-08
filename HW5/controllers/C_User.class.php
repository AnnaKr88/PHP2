<?php
include_once "models/M_User.php";

class C_User extends C_Base {
    protected function before(){
        $this->title = '';
        $this->content = '';
    }
    
    public function action_auth(){
        $this->title= 'Регистрация';
		$this->content = $this->Template('views/v_main.php', array('content' => include "views/v_auth.php"));	
	}
    
    public function action_log(){
        $this->title= 'Вход';
        $user = new M_User();
        if(isset($_POST['in'])){
            $login = trim(strip_tags($_POST['login']));
            $pass = trim(strip_tags($_POST['pass']));
            $info = $user->user($connect, $login);
		    $this->content = $this->Template('views/v_profile.php', array('content' => $info));
		}
		else{
		   $this->content = $this->Template('views/v_log.php');
		}
    }
    
}