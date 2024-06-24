<?php
namespace App;
use App\Categories;
use App\Transactions;
use App\History;
class Menu {
   private const ADD_INCOME=1,ADD_EXPENSE=2,VIEW_INCOMES=3,VIEW_EXPENSE=4,VIEW_SAVINGS=5,VIEW_CATEGORIES=6,EXIT=7;
   private const OPTIONS=[
      self::ADD_INCOME=>"Add income",
      self::ADD_EXPENSE=>"Add expense",
      self::VIEW_INCOMES=>"View incomes",
      self::VIEW_EXPENSE=>"View expenses",
      self::VIEW_SAVINGS=>"View savings",
      self::VIEW_CATEGORIES=>"View categories",
      self::EXIT=>"Exit"
   ];

   public static function run()
   {
      while(true)
      {
        foreach(self::OPTIONS as $key=>$value)
        {
            echo $key." - ".$value."\n";
        }

        $selectOption=readline("Enter Options Number From Menu(in digits): \n");

        switch($selectOption)
        {
            case self::ADD_INCOME:
                Transactions::addTransaction('income');
               break;
            case self::ADD_EXPENSE:
              Transactions::addTransaction('expense');
               break;
            case self::VIEW_INCOMES:
              History::incomesExpenses('income');
               break;
            case self::VIEW_EXPENSE:
              History::incomesExpenses('expense');
               break;
            case self::VIEW_SAVINGS:
               History::savings();
               break;
            case self::VIEW_CATEGORIES:
                echo "===================================================".PHP_EOL;
               echo "Income Categories:".PHP_EOL;
               foreach(Categories::incomeCategories() as $key=>$income)
               {
                  echo ++$key."-".$income."\n";  
               }
               echo "===================================================".PHP_EOL;
               echo "Expense Categories:".PHP_EOL;
               foreach(Categories::expenseCategories() as $key=>$expense)
               {
                 echo ++$key."-".$expense."\n";
               }
               echo "===================================================".PHP_EOL;
               break;
            case self::EXIT:
               exit("Thank you for using me. See you next time!");
               break;
            default:
               echo "Invalid Option\n";
               break;
         
        }
      }

      
   }
}
?>