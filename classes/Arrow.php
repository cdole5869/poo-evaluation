<?php

class Arrow extends Character {

    public $weakness = false;

    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
        $this->stockArrow = $this->stockArrow * 2;  // x2 carquois //
    }

    public function action($target) {

        return $this->attack($target);
        return $status;
    }


    public function attack($target) {

        if ($this->stockArrow >= 5) {  //tant que le stock de flèche n'atteint pas 4 il lance sa flèche //
            $damage = $this->atk;
            $target->setHP($damage);
            $this->stockArrow -= 1;
            $status = "$this->pseudo lance une flèche à $target->pseudo qui a $target->lifePoint points de vie! Il lui reste $this->stockArrow flèches.";

        }   elseif ($this->stockArrow <= 4) {  // Ici si le stock de flèches est inférieur ou = 4 alors activat° point faible //
                $target->setHP($damage);
                $status = "$this->pseudo utilise son coup spécial. $this->pseudo lance 2 flèches à $target->pseudo qui a $target->lifePoint points de vie!.";
            }
            else {
                $damage = $this->knife;
                $target->setHP($damage);
                $status = "$this->pseudo n'a plus de flèche. $this->pseudo attaque avec sa dague $target->pseudo qui a $target->lifePoint points de vie!.";
            }

        return $status;


    }


    public function setHP($damages) {

        $this->lifePoint -= $damages;

        if ($this->weakness == false) {
            $this->damages = 0;

        }   elseif ($this->weakness == true) {
                $this->damages = $this->atk * rand(1.5 , 3);
                $this->lifePoint -= $damages;
                $this->stockArrow -= 2;

            }

        return ;
    }


}
