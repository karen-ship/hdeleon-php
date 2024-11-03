<?php
declare(strict_types=1);

$sale = new Sale(10.5, date("Y-m-d"));
$onlineSale = new OnlineSale(20.5, date("Y-m-d"), "Tarjeta");
echo $onlineSale->createInvoice();
echo $onlineSale->showInfo();
// $concept = new Concept("cerveza", 10.2);
// $sale->addConcept($concept);

// print_r($sale);
// print_r($onlineSale);



class Sale{
    public float $total;
    public string $date;
    public array $concept;
    public static $acount;

    public function __construct(float $total, string $date){
        $this->total = $total;
        $this->date = $date;
        $this->concept = [];
        self::$acount++;
    }

    public function addConcept(Concept $concept){
        $this->concept[] = $concept;
    }

    public static function reset(){
        self::$count = 0;
    }

    public function __destruct(){
        // echo "Se ha eliminado este objeto";
    }

    public function createInvoice(): string{
        return "Se crea la factura";
    }

}


class OnlineSale extends Sale{

    public $paymentMethod;

    public function __construct(float $total, string $date, string $paymentMethod){
        parent::__construct($total, $date);
        $this->paymentMethod = $paymentMethod;
    }

    public function showInfo(): string{
        return "La venta tiene un monto de: $this->total";
    }

}

class Concept{
    public string $description;
    public float|int $amount;

    public function __construct(string $description, int|float $amount){
        $this->description = $description;
        $this->amount = $amount;
    }
}