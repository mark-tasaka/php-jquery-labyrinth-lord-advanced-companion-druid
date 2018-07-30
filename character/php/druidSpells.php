<?php

function level1Spells ($level)
{
    $spells = 0;
    
    if($level >= 1 && $level <= 2)
    {
        $spells = 2;
    }
    else if($level >= 3 && $level <= 4)
    {
        $spells = 3;
    }
    else if($level >= 5 && $level <= 9)
    {
        $spells = 4;
    }
    else if($level >= 10 && $level <= 12)
    {
        $spells = 5;
    }
    else if($level <= 13)
    {
        $spells = 6;
    }
    
    return $spells;
    
}

function level2Spells ($level)
{
    $spells = 0;
    
    if($level == 2)
    {
        $spells = 1;
    }
    else if($level >= 3 && $level <= 4)
    {
        $spells = 2;
    }
    else if($level >= 5 && $level <= 7)
    {
        $spells = 3;
    }
    else if($level >= 8 && $level <= 10)
    {
        $spells = 4;
    }
    else if($level >= 11 && $level <= 13)
    {
        $spells = 5;
    }
    else if($level == 14)
    {
        $spells = 6;
    }
    
    return $spells;
    
}


function level3Spells ($level)
{
    $spells = 0;
    
    if($level == 3)
    {
        $spells = 1;
    }
    else if($level >= 4 && $level <= 6)
    {
        $spells = 2;
    }
    else if($level >= 7 && $level <= 10)
    {
        $spells = 3;
    }
    else if($level >= 11 && $level <= 12)
    {
        $spells = 4;
    }
    else if($level == 13)
    {
        $spells = 5;
    }
    else if($level == 14)
    {
        $spells = 6;
    }
    
    return $spells;
    
}


function level4Spells ($level)
{
    $spells = 0;
    
    if($level >= 6 && $level <= 7)
    {
        $spells = 1;
    }
    else if($level >= 8 && $level <= 9)
    {
        $spells = 2;
    }
    else if($level >= 10 && $level <= 11)
    {
        $spells = 3;
    }
    else if($level == 12)
    {
        $spells = 4;
    }
    else if($level == 13)
    {
        $spells = 5;
    }
    else if($level == 14)
    {
        $spells = 6;
    }
    
    return $spells;
    
}

function level5Spells ($level)
{
    $spells = 0;
    
    if($level == 9)
    {
        $spells = 1;
    }
    else if($level >= 10 && $level <= 11)
    {
        $spells = 2;
    }
    else if($level == 12)
    {
        $spells = 3;
    }
    else if($level == 13)
    {
        $spells = 4;
    }
    else if($level == 14)
    {
        $spells = 5;
    }
    
    return $spells;
    
}


function level6Spells ($level)
{
    $spells = 0;
    
    if($level == 11)
    {
        $spells = 1;
    }
    else if($level == 12)
    {
        $spells = 2;
    }
    else if($level == 13)
    {
        $spells = 3;
    }
    else if($level == 14)
    {
        $spells = 4;
    }
    
    return $spells;
    
}


function level7Spells ($level)
{
    $spells = 0;
    
    if($level == 12)
    {
        $spells = 1;
    }
    else if($level == 13)
    {
        $spells = 2;
    }
    else if($level == 14)
    {
        $spells = 3;
    }
    
    return $spells;
    
}




?>