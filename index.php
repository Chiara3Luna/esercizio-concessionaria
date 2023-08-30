







<?php
// class Automobile {
//     protected static $count = 0; // Conteggio degli oggetti creati
    
//     public $marchio;
//     public $modello;
//     public $numero_porte;
//     public $prezzo;
    
//     public function __construct($marchio, $modello, $numero_porte, $prezzo) {
//         $this->marchio = $marchio;
//         $this->modello = $modello;
//         $this->numero_porte = $numero_porte;
//         $this->prezzo = $prezzo;
//         self::$count++;
//     }
    
//     public function dettagli() {
//         return "Marchio: " . $this->marchio . "\n"
//         . "Modello: " . $this->modello . "\n"
//         . "Numero porte: " . $this->numero_porte . "\n"
//         . "Prezzo: " . $this->prezzo . "\n";
//     }
    
//     public static function getCount() {
//         return self::$count;
//     }
// }

// class SUV extends Automobile {
//     protected static $count = 0; // Conteggio degli oggetti creati
    
//     public $trazione_integrale;
    
//     public function __construct($marchio, $modello, $numero_porte, $prezzo, $trazione_integrale) {
//         parent::__construct($marchio, $modello, $numero_porte, $prezzo);
//         $this->trazione_integrale = $trazione_integrale;
//         self::$count++;
//     }
    
//     public function dettagli() {
//         return "SUV:\n" . parent::dettagli()
//         . "Trazione integrale: " . $this->trazione_integrale . "\n";
//     }
// }

// class Utilitaria extends Automobile {
//     protected static $count = 0; // Conteggio degli oggetti creati
    
//     public $consumo_carburante;
    
//     public function __construct($marchio, $modello, $numero_porte, $prezzo, $consumo_carburante) {
//         parent::__construct($marchio, $modello, $numero_porte, $prezzo);
//         $this->consumo_carburante = $consumo_carburante;
//         self::$count++;
//     }
    
//     public function dettagli() {
//         return "Utilitaria:\n" . parent::dettagli()
//         . "Consumo carburante: " . $this->consumo_carburante . "\n";
//     }
// }

// class Sportiva extends Automobile {
//     protected static $count = 0; // Conteggio degli oggetti creati
    
//     public $velocita_max;
    
//     public function __construct($marchio, $modello, $numero_porte, $prezzo, $velocita_max) {
//         parent::__construct($marchio, $modello, $numero_porte, $prezzo);
//         $this->velocita_max = $velocita_max;
//         self::$count++;
//     }
    
//     public function dettagli() {
//         return "Sportiva:\n" . parent::dettagli()
//         . "Velocità massima: " . $this->velocita_max . "\n";
//     }
// }

// // Esempio di utilizzo
// $concessionaria = [
//     new SUV("BMW", "X5", 5, 80000, true),
//     new Utilitaria("Fiat", "500", 3, 20000, 5.2),
//     new Sportiva("Ferrari", "488 GTB", 2, 250000, 330),
//     new SUV("Audi", "Q7", 5, 90000, true),
//     new Sportiva("Porsche", "911", 2, 280000, 350)
// ];

// // Stampa il conteggio degli oggetti creati per ogni classe
// echo "Numero di SUV: " . SUV::getCount() . "\n";
// echo "Numero di Utilitarie: " . Utilitaria::getCount() . "\n";
// echo "Numero di Sportive: " . Sportiva::getCount() . "\n";
// echo "Numero totale di Automobili: " . Automobile::getCount() . "\n";

// // Stampa i dettagli di tutte le automobili nella concessionaria
// foreach ($concessionaria as $automobile) {
//     echo $automobile->dettagli() . "\n";
// }

//? Cabriolet

//! Z4 M40i
//Cabriolet
//Va a Benzina
//Ha due porte 
//Ha due sedili
//Il suo prezzo 94.340 CHF

//! M440i
//Cabriolet
//Ibrido leggero benzina/elettrico
//Ha due porte
//Ha quattro sedili
//Il suo prezzo è di 114.140 CHF


//? Suv

//! X3 xdrive
//Suv
//Ibrido leggero diesel/elettrico
//Ha cinque porte
//Ha cinque sedili
//Il suo prezzo è di 98.320 CHF

//! XM xdrive
//Suv
//Ibrido benzina/elettrico
//Ha cinque porte
//Ha cinque sedili
//Il suo prezzo è di 198.850 CHF


//? Lussuose

//! i7 xdrive 60M
//Lussuosa
//Elettrica
//Ha quattro porte
//Ha cinque sedili
//Il suo prezzo è di 224.220 CHF


//! M760e xdrive
//Lussuosa
//Ibrido benzina/elettrico
//Ha quattro porte
//Ha cinque sedili
//Il suo prezzo è di 236.100 CHF

//? Sportive

//! M3 
//Sportiva
//Benzina
//Ha quattro porte
//Ha cinque sedili
//Il suo prezzo è di 146.480 CHF

//! M8 xdrive
//Sportiva
//Benzina
//Ha due porte
//Ha quattro sedili
//Il suo prezzo è di 246.740 CHF

class Automobile {
    protected $marchio;
    protected $modello;
    protected $tipo;
    protected $carburante;
    protected $numeroPorte;
    protected $numeroSedili;
    protected $prezzo;

    protected static $conteggioAutomobili = 0;

    public function __construct($data) {
        $this->marchio = $data['marchio'];
        $this->modello = $data['modello'];
        $this->tipo = $data['tipo'];
        $this->carburante = $data['carburante'];
        $this->numeroPorte = $data['numeroPorte'];
        $this->numeroSedili = $data['numeroSedili'];
        $this->prezzo = $data['prezzo'];

        self::$conteggioAutomobili++;
    }

    public function getMarchio() {
        return $this->marchio;
    }

    public function getModello() {
        return $this->modello;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getCarburante() {
        return $this->carburante;
    }

    public function getNumeroPorte() {
        return $this->numeroPorte;
    }

    public function getNumeroSedili() {
        return $this->numeroSedili;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public static function getConteggioAutomobili() {
        return self::$conteggioAutomobili;
    }
}
$data1 = [
    'marchio' => 'BMW',
    'modello' => 'Z4 M40i',
    'tipo' => 'Cabriolet',
    'carburante' => 'Benzina',
    'numeroPorte' => 2,
    'numeroSedili' => 2,
    'prezzo' => 94340
];
$data2 = [
    'marchio' => 'BMW',
    'modello' => 'M440i',
    'tipo' => 'Cabriolet',
    'carburante' => 'Ibrido leggero benzina/elettrico',
    'numeroPorte' => 2,
    'numeroSedili' => 4,
    'prezzo' => 114140
];
$data3 = [
    'marchio' => 'BMW',
    'modello' => 'X3 xdrive',
    'tipo' => 'Suv',
    'carburante' => 'Ibrido leggero diesel/elettrico',
    'numeroPorte' => 5,
    'numeroSedili' => 5,
    'prezzo' => 98320
];
$data4 = [
    'marchio' => 'BMW',
    'modello' => 'XM xdrive',
    'tipo' => 'Suv',
    'carburante' => 'Ibrido benzina/elettrico',
    'numeroPorte' => 5,
    'numeroSedili' => 5,
    'prezzo' => 198850
];
$data5 = [
    'marchio' => 'BMW',
    'modello' => 'i7 xdrive 60M',
    'tipo' => 'Lussuosa',
    'carburante' => 'Elettrica',
    'numeroPorte' => 4,
    'numeroSedili' => 5,
    'prezzo' => 224220
];
$data6 = [
    'marchio' => 'BMW',
    'modello' => 'M760e xdrive',
    'tipo' => 'Lussuosa',
    'carburante' => 'Ibrido benzina/elettrico',
    'numeroPorte' => 4,
    'numeroSedili' => 5,
    'prezzo' => 236100
];
$data7 = [
    'marchio' => 'BMW',
    'modello' => 'M3',
    'tipo' => 'Sportiva',
    'carburante' => 'Benzina',
    'numeroPorte' => 4,
    'numeroSedili' => 5,
    'prezzo' => 146480
];
$data8 = [
    'marchio' => 'BMW',
    'modello' => 'M8 xdrive',
    'tipo' => 'Sportiva',
    'carburante' => 'Benzina',
    'numeroPorte' => 2,
    'numeroSedili' => 4,
    'prezzo' => 246740
];

$auto1 = new Automobile($data1);
$auto2 = new Automobile($data2);
$auto3 = new Automobile($data3);
$auto4 = new Automobile($data4);
$auto5 = new Automobile($data5);
$auto6 = new Automobile($data6);
$auto7 = new Automobile($data7);
$auto8 = new Automobile($data8);

echo "Marchio: " . $auto1->getMarchio() . ", Modello: " . $auto1->getModello() . ", Tipo: " . $auto1->getTipo() . "\n";
echo "Marchio: " . $auto2->getMarchio() . ", Modello: " . $auto2->getModello() . ", Tipo: " . $auto2->getTipo() . "\n";
echo "Marchio: " . $auto3->getMarchio() . ", Modello: " . $auto3->getModello() . ", Tipo: " . $auto3->getTipo() . "\n";
echo "Marchio: " . $auto4->getMarchio() . ", Modello: " . $auto4->getModello() . ", Tipo: " . $auto4->getTipo() . "\n";
echo "Marchio: " . $auto5->getMarchio() . ", Modello: " . $auto5->getModello() . ", Tipo: " . $auto5->getTipo() . "\n";


?>