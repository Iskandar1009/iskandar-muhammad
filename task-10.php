<?php
function sendHuman ($ship) 
{
   $message =[];
   $people = [
    "торговец", 
    "атакующий", 
    "представитель"
   ];
   if($ship == "Пират"){
      array_push($message, $people[1]);
   }
   if($ship == "Патруль"){
      array_push($message, $people[2]);
   }
   
   else{ array_push($message, $people[0]);}
     
   implode(", ", $message);
   return $message;
}
echo sendHuman("Пират");