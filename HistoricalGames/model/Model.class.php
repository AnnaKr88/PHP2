<?php
class Model {
    
    protected $table;
    
    public static function getAll($table)
    {
        return db::getInstance()->Select("SELECT * FROM $table order by :orderby",
                                         ['orderby'=>'id']);
    }
    
    public static function getOne($table, $id)
    {
        return db::getInstance()->Select("SELECT * FROM $table WHERE id = :id",
                                         ['id'=>$id]);
    }
    
}