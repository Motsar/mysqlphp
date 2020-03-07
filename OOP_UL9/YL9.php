<?php

class auto{
    var $varv;
    var $tootja;
    var $kiirus;
    function misauto(){
        echo 'Minu uus '.$this->tootja.' on '.$this->varv.'.'.'<br>'.'Vaata kuidas Kiirendab!'.'<br>';
    }
    function kiirendus(){
        if($this->kiirus>=100){
            for($i=10;$i<=$this->kiirus;$i+=10){
                echo 'Kiirus: '.$i.' km/h'.'<br>';
            }
        }else{
            echo 'Su autol ei ole mingit kiirendust!!!';
        }
    }
}

$auto1 = new auto;
    $auto1->varv='must';
    $auto1->tootja='Mercedes';
    $auto1->kiirus=150;

$auto2 = new auto;
    $auto2->varv='valge';
    $auto2->tootja='Fiat';
    $auto2->kiirus=90;

$auto1->misauto();
$auto1->kiirendus();
$auto2->misauto();
$auto2->kiirendus();

