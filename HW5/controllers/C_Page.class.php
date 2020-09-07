<?php
class C_Page extends C_Base {
    protected function before(){
        $this->title = '';
        $this->content = '';
    }
    
    public function action_index(){
        $this->title= 'Главная';
		$this->content = $this->Template('views/v_main.php', array('content' => '<a href="index.php?c=User&act=log">Войти</a>|<a href="index.php?c=User&act=auth">Регистрация</a>'));	
	}
    
//    public function action_auth(){
//        $this->title= 'Регистрация';
//		$this->content = $this->Template('views/v_main.php', array('content' => '<a href="index.php">Главная</a>'));	
//	}
//    
//    public function action_log(){
//        $this->title= 'Вход';
//		$this->content = $this->Template('views/v_main.php', array('content' => '<a href="index.php">Главная</a>'));	
//	}
//    
//    public function action_profile(){
//        $this->title= 'Личный кабинет';
//		$this->content = $this->Template('views/v_main.php', array('content' => '<a href="index.php">Главная</a>'));	
//	}
}