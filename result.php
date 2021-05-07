<?php

include 'function.php';
include 'read_test.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$disOxy = test_input($_POST['disOxy']); #input
  $A = DOS($disOxy);
  $feColi = test_input($_POST['feColi']);
  $B = Fecal($feColi);
  $ph = test_input($_POST['ph']);
  $C = pHLevel($ph);
  $bod = test_input($_POST['bod']);
  $D = BOD($bod);
  $nit = test_input($_POST['nit']);
  $E = Nit($nit);

  ## process to send to javascript
  graph_plotting($A,$B,$C,$D,$E,$disOxy,$feColi,$ph,$bod,$nit);
  /*
  arr.push({
            y: lowerLimit + Math.round(Math.random() * (upperLimit - lowerLimit)),
            label: seasons[Math.floor(Math.random() * seasons.length)]
        });*/
  include "ruleInference.php";
  $degreeOfMembership;
  $wqi;
  $rule;

  $array_a = array();
  $array_rule = array();
  $array_DoM = array();

  foreach($wqi as $a => $b)
  {
    array_push($array_a,$b);
    array_push($array_rule,$a);
  }
  foreach($degreeOfMembership as $a => $b)
  {
    array_push($array_DoM,$b);
  }


  $final_DoM = array(0,0,0,0,0);
  $final_Rules = [0,0,0,0,0];

  for($i = 0; $i < sizeof($array_a) ; $i ++)
  {
    $temp = $array_a[$i];
    if($temp == "Excellent")
    {
      if($array_DoM[$i]>$final_DoM[0])
      {
        $final_DoM[0] = $array_DoM[$i];
        $final_Rules[0] = $array_rule[$i];
      }
    }
    if($temp == "Safe")
    {
      if($array_DoM[$i]>$final_DoM[1])
      {
        $final_DoM[1] = $array_DoM[$i];
        $final_Rules[1] = $array_rule[$i];
      }
    }
    if($temp == "Moderate")
    {
      if($array_DoM[$i]>$final_DoM[2])
      {
        $final_DoM[2] = $array_DoM[$i];
        $final_Rules[2] = $array_rule[$i];
      }
    }
    if($temp == "Dangerous")
    {
      if($array_DoM[$i]>$final_DoM[3])
      {
        $final_DoM[3] = $array_DoM[$i];
        $final_Rules[3] = $array_rule[$i];
      }
    }
    if($temp == "Deadly")
    {
      if($array_DoM[$i]>$final_DoM[4])
      {
        $final_DoM[4] = $array_DoM[$i];
        $final_Rules[4] = $array_rule[$i];
      }
    }
  }

  plot_aggregate($final_DoM);

  $deadly=75;//(0+5+10+15+20+25)
  $dangerous=105;//(30+35+40)
  $moderate=420;//(45+50+55+60+65+70+75)
  $good=240;//(75+80+85)
  $excellent=285;//(90+95+100)
  $kira=0;
  $cog=0;

  for($w=0;$w<sizeof($final_DoM);$w++ )
    $kira=$kira + $final_DoM[$w];

    if($kira!=0)
    {
      $diviser=($final_DoM[4]* 6)+($final_DoM[3]*3)+($final_DoM[2]*7)+($final_DoM[1]*3)+($final_DoM[0]*3);

      $cog=(($deadly* $final_DoM[4])+($dangerous*$final_DoM[3])+($moderate*$final_DoM[2])+($good*$final_DoM[1])+($excellent*$final_DoM[0]))/$diviser;
    }

    else
    {
      $diviser=0;
      $cog=0;
    }

  plot_aggregate_2($cog);

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WQI Fuzzy</title>
    <script type="text/javascript" src="graph.js"></script>
    <script type="text/javascript" src="canvasjs.min.js"></script>
    <style>
    .section{
      padding:10px;
      padding-bottom: 30px;
      margin:10px;
      margin-bottom: 0px;
      margin-top:0px;
      border-top: 5px solid orange;
    }



    .chart{
      padding:10px;
      margin:5px;
      padding-left:0px;
      margin-left:0px;
    }
    body{

      background-color: LightBlue;
    }

    .main-wrapper{
      background:white;
      margin-top:10px;
      margin-left:20px;
      margin-right: 20px;
    }
    </style>
  </head>
  <body>

    <div class="main-wrapper" id="main-wrapper" style="border:1px solid black;"> <!-- Everything is inside this div -->
      <h2 style='margin-left:20px;' >WQI Index Fuzzy</h2>
      <div class="section" id="section" >
        <div class="top" id="top">
          <strong>Input : Dissolved Oxygen Saturation (<?= $disOxy .'%';?>)</strong> </br>
          Fuzzified Values : <br/>
          <table id="fuzzy-table" class="fuzzy-table" border="1">
            <tr>
              <th>Fuzzy Variables</th>
              <th>Degree of Membership</th>
            </tr>
          <?php
          foreach($A as $i => $value)
          {
            echo "<tr>";
            echo "<td><strong>".interpret($i) . "</strong></td><td>" . number_format((float)$value, 2, '.', '') . "</td>";
            echo "</tr>";
          }
           ?>
          </table>
        </div>
        <div class="chart" id="chart1" style="height: 300px; width: 40%;">
        </div>
      </div>

      <div class="section" id="section" >
        <div class="top" id="top">
          <strong>Input : Fecal Coliform (<?= $feColi .'/100mL';?>)</strong> </br>
          Fuzzified Values : <br/>
          <table id="fuzzy-table" class="fuzzy-table" border="1">
            <tr>
              <th>Fuzzy Variables</th>
              <th>Degree of Membership</th>
            </tr>
          <?php
          foreach($B as $i => $value)
          {
            echo "<tr>";
            echo "<td><strong>".interpret($i) . "</strong></td><td>" . number_format((float)$value, 2, '.', '') . "</td>";
            echo "</tr>";
          }
           ?>
          </table>
        </div>
        <div class="chart" id="chart2" style="height: 300px; width: 40%;">
        </div>
      </div>

      <div class="section" id="section" >
        <div class="top" id="top">
          <strong>Input : pH (<?= $ph;?>)</strong> </br>
          Fuzzified Values : <br/>
          <table id="fuzzy-table" class="fuzzy-table" border="1">
            <tr>
              <th>Fuzzy Variables</th>
              <th>Degree of Membership</th>
            </tr>
          <?php
          foreach($C as $i => $value)
          {
            echo "<tr>";
            echo "<td><strong>".interpret($i) . "</strong></td><td>" . number_format((float)$value, 2, '.', '') . "</td>";
            echo "</tr>";
          }
           ?>
          </table>
        </div>
        <div class="chart" id="chart3" style="height: 300px; width: 40%;">
        </div>
      </div>

      <div class="section" id="section" >
        <div class="top" id="top">
          <strong>Input : BOD (<?= $bod . "mg/L";?>)</strong> </br>
          Fuzzified Values : <br/>
          <table id="fuzzy-table" class="fuzzy-table" border="1">
            <tr>
              <th>Fuzzy Variables</th>
              <th>Degree of Membership</th>
            </tr>
          <?php
          foreach($D as $i => $value)
          {
            echo "<tr>";
            echo "<td><strong>".interpret($i) . "</strong></td><td>" . number_format((float)$value, 2, '.', '') . "</td>";
            echo "</tr>";
          }
           ?>
          </table>
        </div>
        <div class="chart" id="chart4" style="height: 300px; width: 40%;">
        </div>
      </div>

      <div class="section" id="section" >
        <div class="top" id="top">
          <strong>Input : Nitrate  (<?= $nit . "mg/L";?>)</strong> </br>
          Fuzzified Values : <br/>
          <table id="fuzzy-table" class="fuzzy-table" border="1">
            <tr>
              <th>Fuzzy Variables</th>
              <th>Degree of Membership</th>
            </tr>
          <?php
          foreach($E as $i => $value)
          {
            echo "<tr>";
            echo "<td><strong>".interpret($i) . "</strong></td><td>" . number_format((float)$value, 2, '.', '') . "</td>";
            echo "</tr>";
          }
           ?>
          </table>
        </div>
        <div class="chart" id="chart5" style="height: 300px; width: 40%;">
        </div>
      </div>

      <div class="section" id="section" >
        <div class="top" id="top">
          <strong>Rules Fired</strong> </br>
        </div>
        <div class="rules" id="rules" style="padding-top:20px;">
        <?php
          $xx=[];
          /*foreach($wqi as $a => $b)
          {
            $t=substr($a,1);
            //echo "<strong>". $t . "</strong>" . $b . "<br/>";
            $xx[]=$t;
          }
          */
          for($i=0; $i < sizeof($final_Rules); $i++)
          {
            if($final_Rules[$i] != "0")
            {
              $t=substr($final_Rules[$i],1);
              $xx[]=$t;
            }
          }

          $count = 0;
          for($i=0;$i<sizeof($xx);$i++)
          {
            echo getRule($xx[$i],$rules)."<br>";
            $count++;
          }

          echo "<strong>".$count."/40</strong><br/>";
          ?>
        </div>
      </div>
      <?php
        function intr($cog)
        {
          $b=" ";
          if($cog>=90&&$cog<=100)
          {$b="Excellent";}
          else if($cog>=70&&$cog<90)
          {$b="Safe";}
          else if($cog>=50&&$cog<70)
          {$b="Moderate";}
          else if($cog>=25&&$cog<50)
          {$b="Dangerous";}
          else if($cog>=0&&$cog<25)
          {$b="Deadly";}
          return $b;
          //return (string)number_format((float)$cog, 2, '.', '');
        }
      ?>

      <div class="section" id="section" style="text-align:center;">
        <div class="top" id="top">
          <strong>Aggregated Graph for WQI</strong>
        </div>
        <div class="chart" id="chart6" style="height: 350px; width: 50%;margin-left:auto;margin-right:auto;">
        </div>
        <div class="bottom" style="">
          <?php echo "<p>The value of Center of Gravity (COG) is <span style='color:red;'>". (string)number_format((float)$cog, 2, '.', '')."</span></p>" ;?>
          <?php echo "<h3>The WQI Score is <span style='color:red;'>". (string)number_format((float)$cog, 2, '.', '')."% (". intr($cog) .")</span></h3><br/>" ;?>
        </div>
      </div>

    </div>

  </body>
</html>
