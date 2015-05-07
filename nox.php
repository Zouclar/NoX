#!/usr/bin/env php
<?php
// nox.php for  in /home/nakach_t/Projet/nakach_t/nox
// 
// Made by Nakache thomas
// Login   <nakach_t@etna-alternance.net>
// 
// Started on  Thu Nov  6 16:27:57 2014 Nakache thomas
// Last update Mon Nov 10 17:35:39 2014 Nakache thomas
//
require_once('./tomich.php');

if (isset($argv[0]) && (!isset($argv[1]) || !isset($argv[2])))
  {  
    echo "Bonjour ! Il vous faut entrer"." \033[4;31;1mDEUX\033[0m"." arguments "."\033[4;31;1mVALIDES\033[0m"." pour demarrer le script !\n";
    return 0;
  }
if (is_readable($argv[1]) && is_readable($argv[2]) && isset($argv[1]) && isset($argv[2]))
  {
    /*    echo "bonjour";
    usleep(500000);
    echo ".";
    usleep(500000);
    echo ".";
    usleep(500000);
    echo ".";
    usleep(500000);*/
    system ('clear');
    echo "  __    _______          
 /  \  (  __   )       /\
 \/) ) | (  )  |  ()  / /
   | | | | /   |     / / 
   | | | (/ /) |    / /  
   | | |   / | |   / /   
 __) (_|  (__) |  / /  ()
 \____/(_______)  \/     
                         ";
    sleep(1);
    system('clear');
    echo " ______   _______          
/ ___  \ (  __   )       /\
\/   \  \| (  )  |  ()  / /
   ___) /| | /   |     / / 
  (___ ( | (/ /) |    / /  
      ) \|   / | |   / /   
/\___/  /|  (__) |  / /  ()
\______/ (_______)  \/     
                           ";

    sleep(1);
    system('clear');
    echo " _______  _______          
(  ____ \(  __   )       /\
| (    \/| (  )  |  ()  / /
| (____  | | /   |     / / 
(_____ \ | (/ /) |    / /  
      ) )|   / | |   / /   
/\____) )|  (__) |  / /  ()
\______/ (_______)  \/     
                           ";
    sleep(1);
    system('clear');
    echo " ______   _______          
/ ___  \ (  __   )       /\
\/   )  )| (  )  |  ()  / /
    /  / | | /   |     / / 
   /  /  | (/ /) |    / /  
  /  /   |   / | |   / /   
 /  /    |  (__) |  / /  ()
 \_/     (_______)  \/     
                           ";
    sleep(1);
    system('clear');
    echo "  __    _______  _______          
 /  \  (  __   )(  __   )       /\
 \/) ) | (  )  || (  )  |  ()  / /
   | | | | /   || | /   |     / / 
   | | | (/ /) || (/ /) |    / /  
   | | |   / | ||   / | |   / /   
 __) (_|  (__) ||  (__) |  / /  ()
 \____/(_______)(_______)  \/     
                                  ";
    usleep(80000);
    system('clear');
    echo "\n";
    echo "Vous avez demande de comparer $argv[1] et $argv[2] , voici les resultats !\n";
    $handle = fopen($argv[1],"r");
    $take = fgets($handle);
    fclose($handle);

    $handle2 = fopen($argv[2],"r");
    $take2 = fgets($handle2);
    fclose($handle2);

    $test = preg_split("/\s+/", $take);
    $test2 = preg_split("/\s+/",$take2);
    echo "\n";

    $time = microtime(true);
    sort($test2);
    $i = 0;
    $nbr=-1;
    while (isset($test[$i]))
      {
	$tst = recherche_dicho($test2, $test[$i]);
	if ($tst !== NULL)
	  {
	    echo "$test[$i]\n";
	    $nbr++;	  
	  }
	$i++;
      }
    echo "Vous avez $nbr mots correspondants !\n";
    $temp = microtime(true)- $time;
    $temp = number_format($temp,4);
    echo "J'ai mis "."$temp "."sec."." pour executer mon script !\n\n";
  }
else
  {
    echo "Je ne peux pas executer, je ne comprends pas un des deux arguments !\n";
  }  