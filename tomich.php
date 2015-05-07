<?php
// tomich.php for  in /home/nakach_t/Projet/nakach_t/nox
// 
// Made by Nakache thomas
// Login   <nakach_t@etna-alternance.net>
// 
// Started on  Thu Nov  6 16:52:13 2014 Nakache thomas
// Last update Thu Nov  6 16:54:49 2014 Nakache thomas
//
function recherche_dicho($tab, $find)
{
  $i = 0;
  $deb = 0;
  $fin = count($tab);
  $trouv = 0;

  $mil = 0;  
  while ((($fin - $deb) > 1) && !$trouv)
    {
      $mil = (($deb + $fin)/2);
      $trouv = ($tab[$mil] == $find);
      if ($tab[$mil] > $find) 
	$fin = $mil;
      else
	$deb = $mil;
      
    }  
  if (count($tab) > 0 && $tab[$mil] == $find)
    return (int) $deb;
  if(count($tab) < 0)
    return NULL;
}