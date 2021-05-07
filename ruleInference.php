<?php
$degreeOfMembership;
$wqi;
$rule;
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r1"]=1;
     $degreeOfMembership["O1"] = min($A["A1"],$B["B1"],$C["C2"],$D["D1"],$E["E1"]);
     $wqi["w1"]="Excellent" ;
}


// rule2
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r2"]=2;
     $degreeOfMembership["O2"] =min($A["A1"],$B["B1"],$C["C2"],$D["D2"],$E["E1"]);
     $wqi["w2"]="Safe" ;
}


// rule3
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r3"]=3;
     $degreeOfMembership["O3"] =min($A["A1"],$B["B1"],$C["C2"],$D["D3"],$E["E1"]);
     $wqi["w3"]="Safe" ;
}


// rule4
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r4"]=4;
     $degreeOfMembership["O4"] =min($A["A1"],$B["B1"],$C["C3"],$D["D1"],$E["E1"]);
     $wqi["w4"]="Excellent" ;
}


// rule5
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r5"]=5;
     $degreeOfMembership["O5"] =min($A["A1"],$B["B1"],$C["C3"],$D["D2"],$E["E1"]);
     $wqi["w5"]="Safe" ;
}


// rule6
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r6"]=6;
     $degreeOfMembership["O6"] =min($A["A1"],$B["B1"],$C["C3"],$D["D3"],$E["E1"]);
     $wqi["w6"]="Safe" ;
}


// rule7
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r7"]=7;
     $degreeOfMembership["O7"] =min($A["A2"],$B["B1"],$C["C2"],$D["D1"],$E["E1"]);
     $wqi["w7"]="Moderate" ;
}


// rule8
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r8"]=8;
     $degreeOfMembership["O8"] =min($A["A2"],$B["B1"],$C["C2"],$D["D2"],$E["E1"]);
     $wqi["w8"]="Moderate" ;
}


// rule9
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r9"]=9;
     $degreeOfMembership["O9"] =min($A["A2"],$B["B1"],$C["C2"],$D["D3"],$E["E1"]);
     $wqi["w9"]="Moderate" ;
}


// rule10
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r10"]=10;
     $degreeOfMembership["O10"] =min($A["A2"],$B["B1"],$C["C3"],$D["D1"],$E["E1"]);
     $wqi["w10"]="Safe" ;
}


// rule11
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r11"]=11;
     $degreeOfMembership["O11"] =min($A["A2"],$B["B1"],$C["C3"],$D["D2"],$E["E1"]);
     $wqi["w11"]="Moderate" ;
}


// rule12
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r12"]=12;
     $degreeOfMembership["O12"] =min($A["A2"],$B["B1"],$C["C3"],$D["D3"],$E["E1"]);
     $wqi["w12"]="Moderate" ;
}


// rule13
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r13"]=13;
     $degreeOfMembership["O13"] =min($A["A3"],$B["B1"],$C["C2"],$D["D1"],$E["E1"]);
     $wqi["w13"]="Moderate" ;
}


// rule14
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D2", $D)  && is_array($E) && array_key_exists("E1", $E))
{
     $rule["r14"]=14;
     $degreeOfMembership["O14"] =min($A["A3"],$B["B1"],$C["C2"],$D["D2"],$E["E1"]);
     $wqi["w14"]="Moderate" ;
}


// rule15
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) && array_key_exists("E1", $E))
{
     $rule["r15"]=15;
     $degreeOfMembership["O15"] =min($A["A3"],$B["B1"],$C["C2"],$D["D3"],$E["E1"]);
     $wqi["w15"]="Moderate" ;
}


// rule16
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r16"]=16;
     $degreeOfMembership["O16"] =min($A["A3"],$B["B1"],$C["C3"],$D["D1"],$E["E1"]);
     $wqi["w16"]="Safe" ;
}




// rule17
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r17"]=17;
     $degreeOfMembership["O17"] =min($A["A3"],$B["B1"],$C["C3"],$D["D2"],$E["E1"]);
     $wqi["w17"]="Moderate" ;
}


// rule18
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B1", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r18"]=18;
     $degreeOfMembership["O18"] =min($A["A3"],$B["B1"],$C["C3"],$D["D3"],$E["E1"]);
     $wqi["w18"]="Moderate" ;
}


// rule19
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r19"]=19;
     $degreeOfMembership["O19"] =min($A["A1"],$B["B2"],$C["C2"],$D["D1"],$E["E1"]);
     $wqi["w19"]="Dangerous" ;
}


// rule20
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r20"]=20;
     $degreeOfMembership["O20"] =min($A["A1"],$B["B2"],$C["C2"],$D["D2"],$E["E1"]);
     $wqi["w20"]="Dangerous" ;
}

// NEW RULES
// rule21
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r21"]=21;
     $degreeOfMembership["O21"] =min($A["A1"],$B["B2"],$C["C2"],$D["D3"],$E["E1"]);
     $wqi["w21"]="Dangerous";
}

// rule22
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r22"]=22;
     $degreeOfMembership["O22"] =min($A["A1"],$B["B2"],$C["C3"],$D["D1"],$E["E1"]);
     $wqi["w22"]="Dangerous";
}

// rule23
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r23"]=23;
     $degreeOfMembership["O23"] =min($A["A1"],$B["B2"],$C["C3"],$D["D2"],$E["E1"]);
     $wqi["w23"]="Dangerous";
}

// rule24
if ( is_array($A) && array_key_exists("A1", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r24"]=24;
     $degreeOfMembership["O24"] =min($A["A1"],$B["B2"],$C["C3"],$D["D3"],$E["E1"]);
     $wqi["w24"]="Dangerous";
}

// rule25
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r25"]=25;
     $degreeOfMembership["O25"] =min($A["A2"],$B["B2"],$C["C2"],$D["D1"],$E["E1"]);
     $wqi["w25"]="Dangerous";
}

// rule26
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r26"]=26;
     $degreeOfMembership["O26"] =min($A["A2"],$B["B2"],$C["C2"],$D["D2"],$E["E1"]);
     $wqi["w26"]="Dangerous";
}

// rule27
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r27"]=27;
     $degreeOfMembership["O27"] =min($A["A2"],$B["B2"],$C["C2"],$D["D3"],$E["E1"]);
     $wqi["w27"]="Dangerous";
}

// rule28
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r28"]=28;
     $degreeOfMembership["O28"] =min($A["A2"],$B["B2"],$C["C3"],$D["D1"],$E["E1"]);
     $wqi["w28"]="Dangerous";
}

// rule29
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r29"]=29;
     $degreeOfMembership["O29"] =min($A["A2"],$B["B2"],$C["C3"],$D["D2"],$E["E1"]);
     $wqi["w29"]="Dangerous";
}

// rule30
if ( is_array($A) && array_key_exists("A2", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r30"]=30;
     $degreeOfMembership["O30"] =min($A["A2"],$B["B2"],$C["C3"],$D["D3"],$E["E1"]);
     $wqi["w30"]="Dangerous";
}

// rule31
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r31"]=31;
     $degreeOfMembership["O31"] =min($A["A3"],$B["B2"],$C["C2"],$D["D1"],$E["E1"]);
     $wqi["w31"]="Dangerous";
}

// rule32
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r32"]=32;
     $degreeOfMembership["O32"] =min($A["A3"],$B["B2"],$C["C2"],$D["D2"],$E["E1"]);
     $wqi["w32"]="Dangerous";
}

// rule33
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C2", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r33"]=33;
     $degreeOfMembership["O33"] =min($A["A3"],$B["B2"],$C["C2"],$D["D3"],$E["E1"]);
     $wqi["w33"]="Dangerous";
}

// rule34
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D1", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r34"]=34;
     $degreeOfMembership["O34"] =min($A["A3"],$B["B2"],$C["C3"],$D["D1"],$E["E1"]);
     $wqi["w34"]="Dangerous";
}

// rule35
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D2", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r35"]=35;
     $degreeOfMembership["O35"] =min($A["A3"],$B["B2"],$C["C3"],$D["D2"],$E["E1"]);
     $wqi["w35"]="Dangerous";
}

//rule36
if ( is_array($A) && array_key_exists("A3", $A) && is_array($B) && array_key_exists("B2", $B) && is_array($C) && array_key_exists("C3", $C) && is_array($D) && array_key_exists("D3", $D) && is_array($E) &&array_key_exists("E1", $E))
{
     $rule["r36"]=36;
     $degreeOfMembership["O36"] =min($A["A3"],$B["B2"],$C["C3"],$D["D3"],$E["E1"]);
     $wqi["w36"]="Dangerous";
}

//rule37
if ( is_array($C) && array_key_exists("C1", $C) && is_array($D) && array_key_exists("D3", $D))
{
    $rule["r37"]=37;
    $degreeOfMembership["O37"] =min($C["C1"],$D["D3"]);
    $wqi["w37"]="Dangerous";
}

//rule38
if ( is_array($C) && array_key_exists("C1", $C) && is_array($B) && array_key_exists("B2", $B))
{
    $rule["r38"]=38;
    $degreeOfMembership["O38"] =min($C["C1"],$B["B2"]);
    $wqi["w38"]="Dangerous";
}

//rule39
if ( is_array($C) && array_key_exists("C1", $C) && is_array($A) && array_key_exists("A3", $A))
{
    $rule["r39"]=39;
    $degreeOfMembership["O39"] =min($C["C1"],$A["A3"]);
    $wqi["w39"]="Dangerous";
}

//rule40
if ( is_array($C) && array_key_exists("C1", $C) ||  is_array($E) && array_key_exists("E2", $E))
{
    $rule["r40"]=40;
    if(array_key_exists("C1",$C) && !(array_key_exists("E2",$E)))
      $degreeOfMembership["O40"] = $C["C1"];
    else if(array_key_exists("E2",$E) && !(array_key_exists("C1",$C)))
      $degreeOfMembership["O40"] =$E["E2"] ;
    else if(array_key_exists("C1",$C) && array_key_exists("E2",$E))
      $degreeOfMembership["O40"] =max($C["C1"],$E["E2"]);

    $wqi["w40"]="Deadly";
}
?>
