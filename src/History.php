<?php

namespace App;

class History
{
    //View Incomes and expense total
    public static function incomesExpenses($type)
    {
        echo "================================================================".PHP_EOL;  

        $data_path = ($type == "income") ? __DIR__ . "/data/incomes.json" : __DIR__ . "/data/expenses.json";
        if (!file_exists($data_path)) {
            echo "No data found Please add your $type at first" . PHP_EOL;
        }
        $data = file_get_contents($data_path);
        $data = json_decode($data, true);
        if (empty($data)) {
            echo "No data found Please add your $type at first" . PHP_EOL;
        }
        echo "SL. Type  Category Amount  Date".PHP_EOL;  
        foreach ($data as $key => $item) {
            echo ++$key . " - " . $item["type"] . " " . $item["category"] . "   $item[amount]Tk.     $item[date]" . PHP_EOL;
        }
        echo "================================================================".PHP_EOL;  
        return;
    }
    //View savings

    public static function savings()
    {
        //First get total incomes first
        $data_path =  __DIR__ . "/data/incomes.json" ;
        if (!file_exists($data_path)) {
            echo "No data found Please add your income at first" . PHP_EOL;
            echo "================================================================".PHP_EOL;  
            return;
        }
        $income_data = file_get_contents($data_path);
        $income_data = json_decode($income_data, true);
        if (empty($income_data)) {
            echo "No data found Please add your income at first" . PHP_EOL;
            echo "================================================================".PHP_EOL;  
            return;
        }
        $income=0;
        foreach ($income_data as $key => $item) {
          $income+=$item['amount'];
        }

        //Then get total expenses
        $data_path =  __DIR__ . "/data/expenses.json" ;
        if (!file_exists($data_path)) {
            echo "Yours total Savings is :$income".PHP_EOL;
            echo "================================================================".PHP_EOL;  
            return;
        }
        $expense_data = file_get_contents($data_path);
        $expense_data = json_decode($expense_data, true);
        if (empty($expense_data)) {
           echo "Yours total Savings is :$income".PHP_EOL;
           echo "================================================================".PHP_EOL;  
           return;
        }
        $expense=0;
        foreach ($expense_data as $key => $item) {
          $expense+=$item['amount'];
        }

        $savings=($income-$expense)>0?($income-$expense):0;
        echo "Yours total Savings is :$savings".PHP_EOL;
        echo "================================================================".PHP_EOL;  
        return;
    }
}
