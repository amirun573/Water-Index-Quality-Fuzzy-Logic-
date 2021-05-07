<?php

  $file = fopen("Rules.txt", "r") or die("Unable to open file!");
  //$all_rules= fread($myfile,filesize("rules_latest.txt"));

  while(!feof($file))
  {
    $a = trim(fgets($file));
    if($a != '')
      $rules[] = $a."<br>";
  }

  function getRule($num,$arr)
  {
    $flag = true;
    $cont = false;

    for($i = 0;  $i < sizeof($arr); $i++)
    {
      $str = $arr[$i];

      if($cont)
      {
        if(strpos($str, 'Rule') !== false)
          break;
        else
        echo $str;
      }
      else if(strpos($str, 'Rule') !== false) //if start of a rule
      {
          $rule = (int)substr($str,5);

          if($rule == $num) //if it's the rule
          {
            echo "<strong>".$str."</strong>";
            $flag = true;
            $cont = true;
          }
      }
    }
  }


  fclose($file);
?>
