<?php

  $file = fopen("Rules.txt", "r") or die("Unable to open file!");
  //$all_rules= fread($myfile,filesize("rules_latest.txt"));

  while(!feof($file))
  {
  $rules[]= fgets($file)."<br>";
  }

  for($i = 1 ; $i <= 40 ; $i ++)
  echo getRule($i,$rules);

  function getRule($num,$arr)
  {
    $temp=" ";
    $num=trim($num);
    for($i=sizeof($arr)-1;$i>=0;$i--)
    {
      if((int)$num >=37 && (int)$num <=40)
      {
        if(strpos($arr[$i],$num)!== false)
        {
          $temp="<strong>".$arr[$i]."</strong>".$arr[$i+1].$arr[$i+2].$arr[$i+3];
        }

      }else if((int)$num <37)
      {
        if(strpos($arr[$i],$num)!== false)
        {
          $temp="<strong>".$arr[$i]."</strong>".$arr[$i+1].$arr[$i+2].$arr[$i+3].$arr[$i+4].$arr[$i+5].$arr[$i+6];
        }
      }
    }
    return $temp;
  }


  fclose($file);
?>
