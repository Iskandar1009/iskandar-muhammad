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
   
   if($ship == "Торговое судно") { 
      array_push($message, $people[0]);
   } 

        return $message
     ? implode(',\n', $message)
     :'No validation messages';
}

echo sendHuman("Пират");
