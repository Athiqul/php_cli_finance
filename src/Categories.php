<?php 
namespace App;

class Categories{
    
    public static function incomeCategories(){
       return  self::getInfo("income");

    }


    public static function expenseCategories(){
        return  self::getInfo("expenses");
    }


    private static function getInfo($type="income")
    {
        $data=file_get_contents( __DIR__ .'/data/categories.json');
        $data=json_decode($data,true);
        if(json_last_error()==JSON_ERROR_NONE)
        {
          return $data[$type];
        }else{
            return  "Invalid ".json_last_error();
        }
    }
}

?>