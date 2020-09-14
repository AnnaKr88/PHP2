<?php
class CatalogController extends Controller {
    
    public $view = 'catalog';
    public $title;
    
    public function __construct() {
        parent::__construct();
        $this->title.='| Каталог';
    }
    
    function index($data) {
        $good = Model::getAll('goods');
        return $good;
    }
}