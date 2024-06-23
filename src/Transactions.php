<?php 
namespace App;
class Transactions{

    //Add Income amount
    public static function addIncome($category, $amount)
    {
      
    }
    //Add Expense Amount

    public static function addExpense($category, $amount)
    {

    }

    private static function saveTransaction($type, $category, $amount)
    {
       try {

        $data_path=$type=='income'?__DIR__."/data/incomes.json":__DIR__."/data/expenses.json";
        if(!file_exists($data_path))
        {
             //Add new entry to json file
             $entry=[
                 "type"=>"income",
                 "category"=>$category,
                 "amount"=>$amount,
                 "date"=>date("Y-m-d"),
             ];
 
             $json_data=json_encode($entry,JSON_PRETTY_PRINT);
             file_put_contents($data_path, $json_data);
 
             echo "Successfully saved ".$type=='income'?'income':'expense'." transaction";
 
             return true;
        }else{
           //Working with existing data;
           $exsting_entry=file_get_contents($data_path);
           $existing_data=json_decode($exsting_entry,true);
           $new_entry=[
             "type"=>"income",
             "category"=>$category,
             "amount"=>$amount,
             "date"=>date("Y-m-d"),
           ];
 
           array_push($existing_data,$new_entry);
           $json_data=json_encode($existing_data,JSON_PRETTY_PRINT);
           file_put_contents($data_path, $json_data);
           echo "Successfully saved ".$type=='income'?'income':'expense'." transaction";
           return true;
        }

       }catch(\Exception $e){
        echo $e->getMessage();
        return false;
       } 
      

    }
}

?>