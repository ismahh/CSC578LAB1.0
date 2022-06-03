<?php

  $s = ["Johor","Kedah","Kelantan",
      "Malacca","Negeri Sembilan","Pahang",
      "Penang","Perak","Perlis","Sabah",
      "Sarawak","Selangor","Terengganu"];

  // get the q parameter from URL
  $q = $_REQUEST["q"];

  $hint = "";

  // lookup all hints from array if $q is different from ""
  if ($q !== "") 
  {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($s as $name) 
    {
      if (stristr($q, substr($name, 0, $len))) 
      {
        if ($hint === "") 
        {
          $hint = $name;
        } 
        else 
        {
          $hint .= ", $name";
        }
      }
    }
  }

  // Output "no suggestion" if no hint was found or output correct values
  echo $hint === "" ? "no suggestion" : $hint;



?>