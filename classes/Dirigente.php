<?php
class Dirigente extends Dipendente
{
    private $azioni;
    private $bonus;
    public function setBonus($_bonus) {
        if(!is_numeric($_bonus)) {
            throw new Exception('Is not a number');
        } else {
            $this->bonus = $_bonus;
        }
    }
    public function getBonus(){
        return $this->bonus;
    }

    public function setAzioni($_azioni) {
        if(!is_numeric($_azioni)) {
            throw new Exception('Is not a number');
        } else {
            $this->azioni = $_azioni;
        }
    }
    public function getAzioni(){
        return $this->azioni;
    }
}
?>

