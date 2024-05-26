<?php

class Company{
    public $name;
    public $location;
    public $tot_employees;
    public $monthly_expense;
    public static $total_expense=0;

    public function __construct($name,$location,$tot_employees=0, $monthly_expense=0){
        $this->name=$name;
        $this->location=$location;
        $this->tot_employees=$tot_employees;
        $this->monthly_expense=$monthly_expense;
    }

    public function info(){
        if($this->tot_employees==0){
            echo "L'ufficio $this->name con sede a $this->location non ha dipendenti \n";
        }else{
            echo "L'ufficio $this->name con sede a $this->location ha ben $this->tot_employees dipendenti \n";
        }
    }
    public function annualExpenseReturn(){
        $annual_expense=$this->monthly_expense*12;
        self::$total_expense+=$annual_expense;
        return $annual_expense;
    }
    public function annualExpense(){
        echo "La spesa annuale di $this->name è di ".$this->annualExpenseReturn()." euro \n";
    }
    public static function totalExpense(){
        return self::$total_expense;
}
}

$pragotecna=new Company('Pragotecna', 'Monfalcone', 20, 25000);
$gsa=new Company('GSA srl', 'Monfalcone', 35, 30000);
$fratelliVisintin=new Company ('Fratelli Visintin Metalmeccanica', 'Trieste', 12, 18000);
$elettra= new Company ('Elettra Sincrotrone', 'Trieste', 370, 150000);
$nuovaImei= new Company ('Nuova Imei', 'Trieste', 15, 20000);

$pragotecna->info();
$pragotecna->annualExpense();
$gsa->annualExpense();
$fratelliVisintin->annualExpense();
$elettra->annualExpense();
$nuovaImei->annualExpense();

echo Company::totalExpense();


