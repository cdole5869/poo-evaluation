<?php

// rajout de _name au $class, require au lieu include, et classe(s) et ; après le .php. //
spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$player1 = new Warrior('Guerrier');
$player2 = new Mage('Magicien');
//$player2 = new Arrow('Archer');

// Characters attacking while both alive
while ($player1->isAlive() && $player2->isAlive() ) {   //rajout du 2 au player et d'une parenthèse.//
    // First Character attacking the 2nd
    echo $player1->action($player2);
    // Check if target is alive
    if (!$player2->isAlive()) {
        echo '<br>';
        echo "$player2->pseudo est KO!";  //rajout $player2-> et du ;//
        break;
    };
    echo '<br>';

    // Second Character attaking the first
    echo $player2->action($player1);
    // Check if target is alive
    if (!$player1->isAlive()) {
        echo '<br>';
        echo "$player1->pseudo est KO!";
        break;
    };
    echo '<br>';
    echo '<br>';
}
