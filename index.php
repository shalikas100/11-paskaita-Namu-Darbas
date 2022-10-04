<!-- Instructions

Sukurti klasę "FutboloRungtynes".

Klasės parametrai:  

$patirtaTrauma, 
$kuriKomandaLaimejo, 
$rungtyniuRezultatas

Metodai:
simuliuotiTraumas() - pasitelkiant rand() funkcija ir generuojant skaičius nuo 1 iki 1000,
grąžinti tokią informaciją - jei sugeneruotas skaičius dalinasi iš 3,5 ir 10 - 

$patirtaTrauma = 2,

kitais atvejais - 

$patirtaTrauma = 0.

simuliuotiRungtynes() - pasitelkian rand() funkciją, grąžinti masyvą su dvejais skaičiais 
pvz.: [0,2], kur pirmas skaičius yra pirmos komandos komandos įvarčių kiekis, 
o antras - antros komandos įvarčių kiekis.

laimetojai() - priskiria argumentui $kuriKomandaLaimejo reikšmes: 
jei pirma komanda laimėjo - 
$kuriKomandaLaimejo = 1, 
kitu atveju 
$kuriKomandaLaimejo = 2

Po klasės sukūrimo, sukurti objektą ir paleisti visus metodus. -->

<?php

class FutboloRungtynes{

    public $patirtaTrauma;
    public $kuriKomandaLaimejo;
    public $rungtyniuRezultatas;

    public $pirmaKomanda;
    public $antraKomanda;
    public $skaicius;

    public function simuliuotiTraumas(){

        $this->skaicius = rand(1, 1000);

        if($this->skaicius % 3 == 0 && $this->skaicius % 5 == 0 && $this->skaicius % 10 == 0){
            echo $this->patirtaTrauma = 2;
        } else{
            echo $this->patirtaTrauma = 0;
        }

    }

    public function simuliuotiRungtyves(){

        $this->pirmaKomanda = rand(0,2);
        $this->antraKonamda = rand(0,2);

       return $this->rungtyniuRezultatas = [$this->pirmaKomanda, $this->antraKonamda];

    }

    public function laimetojai(){

        if($this->pirmaKomanda > $this->antraKonamda){
            echo $this->kuriKomandaLaimejo = 1;
        } elseif ($this->pirmaKomanda < $this->antraKonamda){
            echo $this->kuriKomandaLaimejo = 2;
        } else{
            echo "Rungtynes baigesi lygiosiomis";
        }

    }
};

    $futboloRungtynes = new FutboloRungtynes();

    echo $futboloRungtynes->simuliuotiTraumas();
    echo "<br>";
    var_dump($futboloRungtynes->simuliuotiRungtyves());
    echo "<br>";
    echo $futboloRungtynes->laimetojai();

