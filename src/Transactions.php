<?php 
namespace App;
use App\Categories;
class Transactions{

    //Add Income or expense transactions
    public static function addTransaction($type="income")
    {
        echo "===================================================".PHP_EOL;
                echo "Income Categories List:".PHP_EOL;
                $categories=$type=="income"?Categories::incomeCategories():Categories::expenseCategories();
                foreach($categories as $key=>$income)
                {
                    echo ++$key."-".$income."\n";
                }
                echo "===================================================".PHP_EOL;
                $selectCategory=readline("Please select a category:\n");
                //Validate selected category 
                while(!array_key_exists($selectCategory-1,$categories))
                {
                    $selectCategory=readline("Please select a category:\n");
                }
                //Get Select category information
                $selectCategory=$categories[$selectCategory-1];
                //Get Income from user
                $amount=readline("Type your $type amount: \n");
                return self::saveTransaction($type, $selectCategory, $amount);
    }

   //Store transaction into files
    private static function saveTransaction($type, $category, $amount)
    {
       try {

        $data_path=$type=='income'?__DIR__."/data/incomes.json":__DIR__."/data/expenses.json";
        if(!file_exists($data_path))
        {
             //Add new entry to json file
             $entry=[
                 "type"=>$type,
                 "category"=>$category,
                 "amount"=>$amount,
                 "date"=>date("Y-m-d"),
             ];
             //print_r($entry);
             $json_data=json_encode([$entry],JSON_PRETTY_PRINT);
             file_put_contents($data_path, $json_data);
 
             echo "Successfully saved $type transaction".PHP_EOL;
 
             return true;
        }else{
           //Working with existing data;
           $exsting_entry=file_get_contents($data_path);
           $existing_data=json_decode($exsting_entry,true);
           $new_entry=[
             "type"=>$type,
             "category"=>$category,
             "amount"=>$amount,
             "date"=>date("Y-m-d"),
           ];

           if(!empty($existing_data)){
            array_push($existing_data,$new_entry);
            $json_data=json_encode($existing_data,JSON_PRETTY_PRINT);
           }else{
            $json_data=json_encode([$new_entry],JSON_PRETTY_PRINT);
           }
 
          
          
           file_put_contents($data_path, $json_data);
           echo "Successfully saved $type transaction".PHP_EOL;
           return true;
        }

       }catch(\Exception $e){
        echo $e->getMessage();
        return false;
       } 
      

    }
}

?>