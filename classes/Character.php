<?php

class Character {
    protected $lifePoint = 100;
    public $magicPoint = 15;
    public $pseudo;
    public $atk = 15;
    protected $alive = true;
    public $stockArrow = 3;  //rajout attribut pour Arrow //
    public $knife = 5;        //rajout attribut attaque dague si plus de flèches pour Arrow //

    public function __construct($pseudo) {  //rajout d'un _ au construct.//
        $this->pseudo = $pseudo;
    }

    public function isAlive() {
        if ($this->lifePoint <= 0) {
            $this->lifePoint = 0;
            $this->alive = false;
            return false; //rajout ; //
        } else {
            return true;
        }
    }
}
