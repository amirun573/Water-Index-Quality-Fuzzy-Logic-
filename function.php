<?php

//new functions
//y = 0.025x - 2 (DOS Dangerous)
//y = -x/2000 + 2 ( FC safe)
//y = -x + 6.5 (PH Acidic)
//y = x/2 - 2.75 (pH Optimum)

function DOS($x) #Dissolved Oxygen Saturation(%)
{
  $dos;
  if($x <= 79)
  {
    $dos['A1'] = 1;
  }
  else if($x <= 100)
  {
    $y1 = -$x/20 + 5;
    $y2 = 0.025*$x - 2;
    $dos['A1'] = $y1;
    $dos['A2'] = $y2;
  }
  else if($x < 120)
  {
    $y = 0.025*$x - 2;
    $dos['A2'] = $y;
  }
  else if($x < 140)
  {
    $dos['A2'] = 1.0;
  }
  else if($x == 140)
  {
    $dos['A2'] = 1.0;
    $dos['A3'] = 0.0;
  }
  else if($x < 160)
  {
    $y1 = -$x/20 + 8;
    $y2 = $x/20 - 7;

    $dos['A2'] = $y1;
    $dos['A3'] = $y2;
  }
  else if($x == 160)
  {
    $dos['A2'] = 0.0;
    $dos['A3'] = 1.0;
  }
  else
  {
    $dos['A3'] = 1.0;
  }

  return $dos;
}

//y = -x/2000 + 2 ( FC safe)
function Fecal($x)
{
  $feColi;

  if($x < 2000)
  {
    $feColi['B1'] = 1.00;
  }
  else if($x == 2000)
  {
    $feColi['B1'] = 1.00;
    $feColi['B2'] = 0.00;
  }
  else if($x < 4000)
  {
    $y1 = -$x/2000 + 2;
    $y2 = $x/3000 - 2/3;
    $feColi['B1'] = $y1;
    $feColi['B2'] = $y2;
  }
  else if($x < 5000)
  {
    $y = $x/3000 - 2/3;
    $feColi['B2'] = $y;
  }
  else
  {
    $feColi['B2'] = 1.00;
  }

  return $feColi;
}

//y = -x + 6.5 (PH Acidic)
//y = x/2 - 2.75 (pH Optimum)
function pHLevel($x)
{
  $ph;
  if($x < 5.5)
    $ph['C1'] = 1.0;
  else if($x == 5.5)
  {
    $ph['C1'] = 1.0;
    $ph['C2'] = 0.0;
  }
  else if($x <= 6.5)
  {
    $y1 = -$x + 6.5;
    $y2 = $x/2 - 2.75;
    $ph['C1'] = $y1;
    $ph['C2'] = $y2;
  }
  else if($x <= 7.5)
  {
    $y = $x/2 + 2.75 ;
    $ph['C2'] = $y;
  }
  else if($x < 8)
  {
    $y = -$x/1.5 +6;
    $ph['C2'] = $y;
  }
  else if($x <= 9)
  {
    $y1 = -$x/1.5 +6;
    $y2 = $x - 8;
    $ph['C2'] = $y1;
    $ph['C3'] = $y2;
  }
  else
  {
    $ph['C3'] = 1;
  }
  return $ph;
}

function BOD($x)
{
  $bod;
  if($x < 2)
  {
    $bod['D1'] = 1;
  }
  else if($x <= 3)
  {
    $y1 = -$x + 3;
    $y2 = $x/2 - 1;
    $bod['D1'] = $y1;
    $bod['D2'] = $y2;
  }
  else if ($x < 4)
  {
    $y = $x/2 - 1;
    $bod['D2'] = $y;
  }
  else if ($x < 5)
  {
    $y = -$x/2 + 3;
    $bod['D2'] = $y;
  }
  else if($x <= 6)
  {
    $y1 = -$x/2 + 3;
    $y2 = $x/2 - 5/2;
    $bod['D2'] = $y1;
    $bod['D3'] = $y2;
  }
  else if($x < 7)
  {
    $y = $x/2 - 5/2;
    $bod['D3'] = $y;
  }
  else
  {
    $bod['D3'] = 1;
  }

  return $bod;
}

function Nit($x)
{
  $nit;
  if($x < 9)
  {
    $nit['E1'] = 1;
  }
  else if($x < 9.5)
  {
    $y = -$x/1.5 + 7;
    $nit['E1'] = $y;
  }
  else if($x <= 10)
  {
    $y1 = -$x/1.5 + 7;
    $y2 = $x/0.5 - 19;
    $nit['E1'] = $y1;
    $nit['E2'] = $y2;
  }
  else if($x <10.5)
  {
    $y1 = -$x/1.5 + 7;
    $nit['E1'] = $y1;
    $nit['E2'] = 1;
  }
  else
  {
    $nit['E2'] = 1;
  }

  return $nit;
}

function interpret($var)
{
  if($var[0] == 'A')
  {
    switch ($var[1]) {
      case '1':
        return "Optimum";
      break;
      case '2':
        return "Dangerous";
      break;
      case '3':
        return "Deadly";
      break;
    }
  }
  else if($var[0] == 'B')
  {
    switch ($var[1]) {
      case '1':
        return "Safe";
      break;
      case '2':
        return "Dangerous";
      break;
    }
  }
  else if($var[0] == 'C')
  {
    switch ($var[1]) {
      case '1':
        return "Acidic";
      break;
      case '2':
        return "Optimum";
      break;
      case '3':
        return "Basic";
      break;
    }
  }
  else if($var[0] == 'D')
  {
    switch ($var[1]) {
      case '1':
        return "Good";
      break;
      case '2':
        return "Moderate";
      break;
      case '3':
        return "Polluted";
      break;
    }
  }
  else if($var[0] == 'E')
  {
    switch ($var[1]) {
      case '1':
        return "Safe";
      break;
      case '2':
        return "Dangerous";
      break;
    }
  }
}

function graph_plotting($A,$B,$C,$D,$E,$a,$b,$c,$d,$e)
{
  echo "<input id='A' style='display:none;' value='";
  foreach ($A as $key => $value) {
    echo "(".$a.",".$value.") ";
  }echo "'>";

  echo "<input id='B' style='display:none;' value='";
  foreach ($B as $key => $value) {
    echo "(".$b.",".$value.") ";
  }echo "'>";

  echo "<input id='C' style='display:none;' value='";
  foreach ($C as $key => $value) {
    echo "(".$c.",".$value.") ";
  }echo "'>";

  echo "<input id='D' style='display:none;' value='";
  foreach ($D as $key => $value) {
    echo "(".$d.",".$value.") ";
  }echo "'>";

  echo "<input id='E' style='display:none;' value='";
  foreach ($E as $key => $value) {
    echo "(".$e.",".$value.") ";
  }echo "'>";
}

function plot_aggregate($final_DoM)
{
  echo "<input id='O' style='display:none;' value='";
  for($i=4;$i>=0;$i--)
  {
    echo $final_DoM[$i] . " ";
  }
  echo "'>";
}

function plot_aggregate_2($cog)
{
  echo "<input id='COG' style='display:none;' value='";
  echo $cog;
  echo "'>";
}
