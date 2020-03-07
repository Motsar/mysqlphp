<?php
//Loome klassi opilased
class opilased{
    //klassile lisame objektid, mis on iseloomustavad suurused
    var $eesnimi;
    var $perenimi;
    var $vanus;
    var $sugu = 'm';
    function ytle_tere(){
        echo "Tere maailm!";
    }
    function ytle_taisnimi(){
        echo $this->eesnimi.' '.$this->perenimi;
    }
}
//isend ehk instance, neid võib luua lõpmatuseni.Väljastame.
$oppur1 = new opilased;
echo $oppur1->sugu.'<br>';
echo $oppur1->eesnimi='Mati'.'<br>';
echo $oppur1->perenimi='Maakas'.'<br>';
echo $oppur1->vanus='18'.'<br>';
echo $oppur1->ytle_tere();
echo '<br>';
$oppur2 = new opilased;
echo $oppur2->sugu='n'.'<br>';
echo $oppur2->eesnimi='Kati'.'<br>';
echo $oppur2->perenimi='Karu'.'<br>';
echo $oppur2->vanus='17'.'<br>';
echo $oppur2->ytle_taisnimi();
echo '<br>';


//Et näha milliseid objekte või meetodeid antud isend sisaldab
// kasuta näiteks funktsiooni var_dump($isendi_nimi).
$oppur3 = new opilased;
$oppur1->eesnimi='Mati';
$oppur1->perenimi='Maakas';
$oppur1->ytle_taisnimi();

var_dump($oppur3);


