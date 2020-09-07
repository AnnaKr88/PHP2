<?php
abstract class C_Base extends C_Controller {
    
    protected $title;
    protected $content;
    
    protected function befor(){
        $this->title='';
        $this->content='';
    }
    
    protected function render(){
        $vars = array('title'=>$this->title, 'content'=>$this->content);
        $page = $this->Template('views/v_main.php', $vars);
        echo $page;
    }
}