<?php
class ContactsController extends Controller {
    
    public $view = 'contact';
    public $title;
    
    public function __construct() {
        parent::__construct();
        $this->title.='| Котнакты';
    }
    
    function index($data) {
        return 'Contacts';
    }
}