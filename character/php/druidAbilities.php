<?php

function druidSpecial ($level)
{
    $message = "";
    
    if($level < 3)
    {
        $message = "+2 bonus to saving throws against all fire and electrical based attacks.";
    }
    else if($level == 3)
    {
        $message = "+2 bonus to saving throws against all fire and electrical based attacks.<br/> 1 additional language from the following list: centaur, dragon (green), dryad, dwarven,<br/> elven, gnome, lizardfolk, manticore, nixie, pixie, sprite or treant.<br/>Ability to identify plants and animals; ability to discern whether water and food is pure, safe<br/> or poisoned.";
    }
    else if($level >= 4 && $level < 7)
    {
        $message = "+2 bonus to saving throws against all fire and electrical based attacks.<br/>" . ($level - 2) . " additional languages from the following list: centaur, dragon (green), dryad, dwarven,<br/> elven, gnome, lizardfolk, manticore, nixie, pixie, sprite or treant.<br/>Ability to identify plants and animals; ability to discern whether water and food is pure, safe<br/> or poisoned.";
    }
    else if($level >= 7)
    {
        $message = "+2 bonus to saving throws against all fire and electrical based attacks.<br/>" . ($level - 2) . " additional languages from the following list: centaur, dragon (green), dryad, dwarven,<br/> elven, gnome, lizardfolk, manticore, nixie, pixie, sprite or treant.<br/>Ability to identify plants and animals; ability to discern whether water and food is pure, safe<br/> or poisoned.<br/>Can assume animal shapes up to 3 times per day.";
    }
    
    return $message;
}


?>