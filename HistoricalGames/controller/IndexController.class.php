<?php
class IndexController extends Controller {
    
    public $view = 'index';
    public $title;
    
    public function __construct() {
        parent::__construct();
        $this->title .= '| Главная';
    }
    
    function index($data) {
        return 'Index';
    }
}