/*Ability Score Prime Requisite XP Bonus/Penality*/


function primeReq(wisdom, charisma)
{
    let message = "";
    
    if((wisdom >= 13) && (charisma >= 13 && charisma <=15))
        {
            message = "+5% Experience Point Adjustment (Prime Requisite)";
        }
    else if((wisdom >= 13) && (charisma >= 16))
        {
            message = "+10% Experience Point Adjustment (Prime Requisite)";
        }
    
    return message;
}


function secondAttack(level)
{
    let message = "";
    
    if(level === 15)
        {
            message = "Fighter has 2 attacks per round.";
        }
    
    return message;
}