window.onload = function () {

var a = document.getElementById('A').value.trim().split(' ');
var dataA = [];

var first = true;
var last = false;
for (var i = 0; i < a.length; i++)
{
  if(i == a.length - 1)
    last = true;
  var temp = a[i];
  var str = temp.slice(1,-1);
  var temp = str.split(",");
  var x = parseFloat(temp[0]);
  var y = parseFloat(temp[1]);
  var z = parseFloat(0);
  if(first)
  {
    dataA.push({x:z,y:y});
    first=false;
  }
  dataA.push({x:x,y:y});
  if(last && a.length > 1)
  {
    dataA.push({x:z,y:y});
  }
}


var b = document.getElementById('B').value.trim().split(' ');
var dataB = [];

first = true;
last = false;
for (var i = 0; i < b.length; i++)
{
  if(i == b.length - 1)
    last = true;
  var temp = b[i];
  var str = temp.slice(1,-1);
  var temp = str.split(",");
  var x = parseFloat(temp[0]);
  var y = parseFloat(temp[1]);
  var z = parseFloat(0);

  if(first)
  {
    dataB.push({x:z,y:y});
    first=false;
  }
  dataB.push({x:x,y:y});
  if(last && b.length > 1)
  {
    dataB.push({x:z,y:y});
  }
}

var c = document.getElementById('C').value.trim().split(' ');
var dataC = [];

first = true;
last = false;
for (var i = 0; i < c.length; i++)
{
  if(i == c.length - 1)
    last = true;
  var temp = c[i];
  var str = temp.slice(1,-1);
  var temp = str.split(",");
  var x = parseFloat(temp[0]);
  var y = parseFloat(temp[1]);
  var z = parseFloat(0);

  if(first)
  {
    dataC.push({x:z,y:y});
    first=false;
  }
  dataC.push({x:x,y:y});
  if(last && c.length > 1)
  {
    dataC.push({x:z,y:y});
  }
}

var d = document.getElementById('D').value.trim().split(' ');
var dataD = [];

first = true;
last = false;
for (var i = 0; i < d.length; i++)
{
  if(i == d.length - 1)
    last = true;
  var temp = d[i];
  var str = temp.slice(1,-1);
  var temp = str.split(",");
  var x = parseFloat(temp[0]);
  var y = parseFloat(temp[1]);
  var z = parseFloat(0);

  if(first)
  {
    dataD.push({x:z,y:y});
    first=false;
  }
  dataD.push({x:x,y:y});
  if(last && d.length > 1)
  {
    dataD.push({x:z,y:y});
  }
}

var e = document.getElementById('E').value.trim().split(' ');
var dataE = [];
first = true;
last = false;
for (var i = 0; i < e.length; i++)
{
  if(i == e.length - 1)
    last = true;
  var temp = e[i];
  var str = temp.slice(1,-1);
  var temp = str.split(",");
  var x = parseFloat(temp[0]);
  var y = parseFloat(temp[1]);
  var z = parseFloat(0);

  if(first)
  {
    dataE.push({x:z,y:y});
    first=false;
  }
  dataE.push({x:x,y:y});
  if(last && e.length > 1)
  {
    dataE.push({x:z,y:y});
  }

}

var o = document.getElementById('O').value.trim().split(' ');
var dataO = [];
for(var i = 0 ; i < 25 ; i=i+5)
{
  var x = parseFloat(i);
  var y = parseFloat(o[0]);

  dataO.push({x:x,y:y});
}

for(var i = 25 ; i < 45 ; i=i+5)
{
  var x = parseFloat(i);
  var y = parseFloat(o[1]);

  dataO.push({x:x,y:y});
}

for(var i = 45 ; i < 75 ; i=i+5)
{
  var x = parseFloat(i);
  var y = parseFloat(o[2]);

  dataO.push({x:x,y:y});
}
for(var i = 75 ; i < 85 ; i=i+5)
{
  var x = parseFloat(i);
  var y = parseFloat(o[3]);

  dataO.push({x:x,y:y});
}
for(var i = 85 ; i < 100 ; i=i+5)
{
  var x = parseFloat(i);
  var y = parseFloat(o[4]);

  dataO.push({x:x,y:y});
}

var cog = document.getElementById('COG').value.trim().split(' ');
dataCOG = [];
var x = parseFloat(cog);
var y = 0;

dataCOG.push({x:x,y:y})


var chart1 = new CanvasJS.Chart("chart1",
{
  title:{
    text: "Fuzzy Graph for Dissolved Oxygen Saturation (%)"
  },
  axisY:{
    title: "Degree of Membership",
    maximum: 1,
  },
  axisX:{
    title: "Dissolved Oxygen Saturation (%)",
    minimum: 0,
  },
  data: [
  {
    type: "area",
    name: "Optimum",
    color: "teal",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 0, y: 1 },
    { x: 40, y: 1 },
    { x: 60, y: 1 },
    { x: 80, y: 1 },
    { x: 100, y: 0}
    ]
  },
    {
    type: "area",
    name: "Dangerous",
    color: "orange",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 80, y: 0},
    { x: 100, y: 0.5 },
    { x: 120, y: 1},
    { x: 140, y: 1 },
    { x: 160, y: 0 }
    ]
  },
    {
    type: "area",
    name: "Deadly",
    color: "red",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 140, y: 0 },
    { x: 160, y: 1 },
    { x: 180, y: 1 },
    { x: 200, y: 1 }
    ]
  },

  {
  type: "line",
  color: "black",
  lineDashType: "dash",
  lineThickness: 1,
  markerType: "cross",
  dataPoints: dataA
}

  ]
});

var chart2 = new CanvasJS.Chart("chart2",
{
  title:{
    text: "Fuzzy Graph for Fecal Coliform (/100mL)"
  },
  axisY:{
    title: "Degree of Membership",
    maximum: 1,
  },
  axisX:{
    title: "Fecal Coliform (/100mL)",
    minimum: 0,
  },
  data: [
  {
    type: "area",
    name: "Safe",
    color: "teal",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 0, y: 1 },
    { x: 1000, y: 1 },
    { x: 2000, y: 1 },
    { x: 3000, y:0.5},
    { x: 4000, y: 0}
    ]
  },
    {
    type: "area",
    name: "Dangerous",
    color: "red",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 2000, y: 0 },
    { x: 3000, y: 3/9 },
    { x: 4000, y: 2/3 },
    { x: 5000, y: 1 },
    { x: 6000, y: 1 },
    { x: 7000, y: 1 },
    { x: 8000, y: 1 },
    { x: 9000, y: 1 },
    { x: 10000, y: 1 }
    ]
  },

  {
  type: "line",
  color: "black",
  lineDashType: "dash",
  lineThickness: 1,
  markerType: "cross",
  dataPoints: dataB
}

  ]
});

var chart3 = new CanvasJS.Chart("chart3",
{
  title:{
    text: "Fuzzy Graph for pH Level"
  },
  axisY:{
    title: "Degree of Membership",
    maximum: 1,
  },
  axisX:{
    title: "pH Level",
    minimum: 0,
  },
  data: [
  {
    type: "area",
    name: "Acidic",
    color: "red",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 0, y: 1 },
    { x: 0.5, y: 1 },
    { x: 1, y: 1 },
    { x: 1.5, y: 1 },
    { x: 2, y: 1 },
    { x: 2.5, y: 1 },
    { x: 3, y: 1 },
    { x: 3.5, y: 1 },
    { x: 4, y: 1},
    { x: 4.5, y: 1 },
    { x: 5, y: 1 },
    { x: 5.5, y: 1 },
    { x: 6, y: 0.5 },
    { x: 6.5, y:0}
    ]
  },
    {
    type: "area",
    name: "Neutral",
    color: "teal",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 5.5, y:0},
    { x: 6, y: 0.25 },
    { x: 6.5, y: 0.5},
    { x: 7, y: 0.75 },
    { x: 7.5, y: 1 },
    { x: 8, y: 2/3},
    { x: 8.5, y: 3/9 },
    { x: 9, y: 0 }
    ]
  },
    {
    type: "area",
    name: "Alkaline",
    color: "green",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 8, y: 0 },
    { x: 8.5, y: 0.5 },
    { x: 9, y: 1 },
    { x: 9.5, y: 1 },
    { x: 10, y: 1 },
    ]
  },

  {
  type: "line",
  color: "black",
  lineDashType: "dash",
  lineThickness: 1,
  markerType: "cross",
  dataPoints: dataC
}

  ]
});

var chart4 = new CanvasJS.Chart("chart4",
{
  title:{
    text: "Fuzzy Graph for BOD (mg/L)"
  },
  axisY:{
    title: "Degree of Membership",
    maximum: 1,
  },
  axisX:{
    title: "BOD (mg/L)",
    minimum: 0,
  },
  data: [
  {
    type: "area",
    name: "Good",
    color: "teal",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 0, y: 1 },
    { x: 1, y: 1 },
    { x: 2, y: 1 },
    { x: 3, y: 0 }
    ]
  },
    {
    type: "area",
    name: "Moderate",
    color: "green",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 2, y: 0 },
    { x: 3, y: 0.5},
    { x: 4, y: 1 },
    { x: 5, y: 0.5 },
    { x: 6, y: 0}
    ]
  },
    {
    type: "area",
    name: "Polluted",
    color: "red",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
    { x: 5, y: 0 },
    { x: 6, y: 0.5 },
    { x: 7, y: 1 },
    { x: 8, y: 1 },
    { x: 9, y: 1 },
    { x: 10, y: 1 }
    ]
  },

  {
  type: "line",
  color: "black",
  lineDashType: "dash",
  lineThickness: 1,
  markerType: "cross",
  dataPoints: dataD
}

  ]
});

var chart5 = new CanvasJS.Chart("chart5",
{
  title:{
    text: "Fuzzy Graph for Nitrate (mg/L)"
  },
  axisY:{
    title: "Degree of Membership",
    maximum: 1,
  },
  axisX:{
    title: "Nitrate (mg/L)",
    minimum: 0,
  },
  data: [
  {
    type: "area",
    name: "Safe",
    color: "teal",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
      { x: 0, y: 1 },
      { x: 0.5, y: 1 },
      { x: 1, y: 1 },
      { x: 1.5, y: 1 },
      { x: 2, y: 1 },
      { x: 2.5, y: 1 },
      { x: 3, y: 1 },
      { x: 3.5, y: 1 },
      { x: 4, y: 1},
      { x: 4.5, y: 1 },
      { x: 5, y: 1 },
      { x: 5.5, y: 1 },
      { x: 6, y: 1 },
      { x: 6.5, y: 1 },
      { x: 7, y: 1},
      { x: 7.5, y: 1 },
      { x: 8, y: 1 },
      { x: 8.5, y: 1 },
      { x: 9, y: 1 },
      { x: 9.5, y: 2/3 },
      { x: 10, y: 3/9},
      { x:10.5, y:0}
    ]
  },
    {
    type: "area",
    name: "Dangerous",
    color: "red",
    showInLegend: true,
    markerType: "none",
    dataPoints: [
      { x: 9.5, y: 0 },
      { x: 10, y: 1},
      { x:10.5, y:1},
      { x: 11, y: 1 },
      { x: 11.5, y: 1},
      { x: 12, y: 1 }
    ]
  },

  {
  type: "line",
  color: "black",
  lineDashType: "dash",
  lineThickness: 1,
  markerType: "cross",
  dataPoints: dataE
}

  ]
});

var chart6 = new CanvasJS.Chart("chart6",
{
  title:{
    text: "Aggregation Graph (WQI)"
  },
  axisY:{
    title: "Degree of Membership",
    maximum: 1,
  },
  axisX:{
    title: "WQI Score",
    minimum: 0,
  },
  data: [
  {
    type: "area",
    name: "Aggregated Score",
    color: "grey",
    showInLegend: true,
    markerType: "none",
    dataPoints: dataO
  },

  {
  type: "line",
  color: "black",
  lineThickness: 1,
  markerType: "triangle",
  dataPoints: dataCOG
}

  ]
});

chart1.render();
chart2.render();
chart3.render();
chart4.render();
chart5.render();
chart6.render();
}
