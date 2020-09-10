<?php
class C_Page extends C_Base {
    protected function before(){
        $this->title = '';
        $this->content = '';
    }
    
    public function action_index(){
        $this->title= 'Главная';
        if(!isset($_SESSION['login'])) {
		$this->content = $this->Template('views/v_main.php', array('content' => '<a href="index.php?c=User&act=log">Войти</a>|<a href="index.php?c=User&act=auth">Регистрация</a>'));
        } else {
            $this->content = $this->Template('views/v_main.php', array('content' => '<a href="index.php?c=User&act=profile">Личный кабинет</a>|<a href="index.php?c=User&act=logout">Выход</a>'));	
	}
    
}}