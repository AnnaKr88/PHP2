<?php
class FullController extends Controller {
    
    public $view = 'full';
    public $title;
    
    public function __construct() {
        parent::__construct();
        //$this->title.='| Каталог';
    }
    
    function index($data) {
        if(isset($_GET['id'])){
                $id = $_GET['id'];
                            }
        $good = Model::getOne('goods', $id);
        foreach($good as $prod) {
           $this->title.= '| '.$prod['title']; 
        }        
        return $good;
        //return $id;
    }
}