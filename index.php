
<?php
$name = "Ameer Rishmawi";
$student_id = "21910124";
$mm = 90;
$animation = 89;
$math = 68;
$avg = ($mm + $animation + $math) / 3;
$current_date = date('m/d/Y');
$current_time = date('h:i:sa');



?>

<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr .td-content {
  background-color: #dddddd;
}
</style>
</head>
<body>

<span style="float:left">Current Date: <?=$current_date?></span>
<span style="float:right">Current Time: <?=$current_time?></span>
<br><br>
<h2>Student account</h2>

<table>
  <tr>
    <th class="td-content">Name</th>
    <th class="td-content">Student id</th>
  </tr>
  <tr>
    <td><?=$name?></td>
    <td><?=$student_id?></td>
  </tr>
  
  <tr>
    <th class="td-content">Your marks</th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <td class="td-content2">Multimedia</td>
    <td class="td-content2"><?=$mm?></td>
  </tr>
  <tr>
    <td class="td-content2">Animation</td>
    <td class="td-content2"><?=$animation?></td>
  </tr>
  <tr>
    <td class="td-content2">Math</td>
    <td class="td-content2"><?=$math?></td>
  </tr>
  <tr>
    <th class="td-content">Average</th>
    <th class="td-content"><?=$avg?></th>
  </tr>
</table>
<br>

<?php

if ($avg >= 60) {
    echo  "<span style=\"color: green\">You Passed</span>";
}
else {
    echo "<span style=\"color: red\">You Failed</span>";
}


?>

</body>
</html>
