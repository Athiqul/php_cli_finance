# CLI Application for Managing Income and Expenses

## Overview

This CLI application allows users to manage their income and expenses efficiently. It provides options to add income, add expenses, view income transactions, view expense transactions, calculate savings, and view categories for both incomes and expenses. The data is stored persistently in JSON files.

## Usage

1. **Add income**
   - Displays a list of income categories.
   - Prompts the user to select a category and enter the income amount.
   - Saves the income transaction with the selected category and amount.

2. **Add expense**
   - Displays a list of expense categories.
   - Prompts the user to select a category and enter the expense amount.
   - Saves the expense transaction with the selected category and amount.

3. **View incomes**
   - Shows a list of all recorded income transactions.
   - Displays columns for serial number, type (income), category, amount, and date of transaction.

4. **View expenses**
   - Shows a list of all recorded expense transactions.
   - Displays columns for serial number, type (expense), category, amount, and date of transaction.

5. **View savings**
   - Calculates and displays the total savings (total income - total expenses) from recorded transactions.

6. **View categories**
   - Displays available categories for both incomes and expenses.

7. **Exit**
   - Terminates the application.

## Example Interactions

```plaintext
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 5
Yours total Savings is :7658
================================================================
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 3
================================================================
SL. Type  Category Amount  Date
1 - income others   89Tk.     2024-06-23
2 - income business   8989Tk.     2024-06-23
================================================================
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 4
================================================================
SL. Type  Category Amount  Date
1 - expense grocery   525Tk.     2024-06-23
2 - expense rent   895Tk.     2024-06-23
================================================================
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 5
Yours total Savings is :7658
================================================================
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 2
===================================================
Income Categories List:
1-rent
2-shopping
3-transports
4-utility
5-food
6-grocery
7-entertainments
8-others
===================================================
Please select a category: 2
Type your expense amount: 9000
Successfully saved expense transaction
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 4
================================================================
SL. Type  Category Amount  Date
1 - expense grocery   525Tk.     2024-06-23
2 - expense rent   895Tk.     2024-06-23
3 - expense shopping   9000Tk.     2024-06-24
================================================================
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 5
Yours total Savings is :-1342
================================================================
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 1
===================================================
Income Categories List:
1-business
2-job
3-others
===================================================
Please select a category: 3
Type your income amount: 897564
Successfully saved income transaction
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 5
Yours total Savings is :896222
================================================================
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 8
Invalid Option
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
Enter Options Number From Menu(in digits): 7
Thank you for using me. See you next time!
