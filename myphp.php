<?php
$begin = microtime(true);
if (isset($_POST['X']))
    $X = $_POST['X'];
else
    $X = "(He введено)";

if (isset($_POST['Y']))
    $Y = $_POST['Y'];
else
    $Y = "(He введено)";

if (isset($_POST['R']))
    $R = $_POST['R'];
else
    $R = "(He введено)";

if (! (isset($X) && isset($Y) && isset($R))) {
    echo "<td>Как минимум одна из переменных не введена.</td>";
    exit();
}

if (! (is_numeric($X) && is_numeric($Y) && is_numeric($R))) {
    echo "<td>Как минимум одна из переменных не является числом.</td>";
    exit();
}

if (checkRound($X, $Y, $R) || checkTriangle($X, $Y, $R) || checkSquare($X, $Y, $R))
    $answer = "Принадлежит";
else
    $answer = "Не принадлежит";
    $duration = 1000*round((microtime(true) - $begin),5);
    

function checkRound($arg1, $arg2, $arg3)
{
    if (($arg1 * $arg1 + $arg2 * $arg2 <= $arg3 * $arg3) && ($arg1 >= 0) && ($arg2 >= 0))
        $rez = true;
    else
        $rez = false;
    return $rez;
}

function checkTriangle($arg1, $arg2, $arg3)
{
    if ($arg1 <= 0 && $arg2 >= 0) {
        $x0 = $arg1;
        $y0 = $arg2;
        $x1 = - 1 * $arg3;
        $y1 = 0;
        $x2 = 0;
        $y2 = $arg3 / 2;
        $x3 = 0;
        $y3 = 0;
        $r1 = ($x1 - $x0) * ($y2 - $y1) - ($x2 - $x1) * ($y1 - $y0);
        $r2 = ($x2 - $x0) * ($y3 - $y2) - ($x3 - $x2) * ($y2 - $y0);
        $r3 = ($x3 - $x0) * ($y1 - $y3) - ($x1 - $x3) * ($y3 - $y0);
        if (($r1 > 0 && $r2 > 0 && $r3 > 0) || ($r1 < 0 && $r2 < 0 && $r3 < 0) || $r1 = 0 || $r2 = 0 || $r3 = 0)
            return true;
        else
            return false;
    } else
        return false;
}

function checkSquare($arg1, $arg2, $arg3)
{
    if (($arg1 <= $arg3) && (abs($arg2) <= $arg3) && ($arg1 >= 0) && ($arg2 <= 0))
        return true;
    else
        return false;
}

?>


<html>
<head>
<title>Results</title>
<script type="text/javascript">
  function digitalWatch() {
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    if (hours < 10) hours = "0" + hours;
    if (minutes < 10) minutes = "0" + minutes;
    if (seconds < 10) seconds = "0" + seconds;
    document.getElementById("digital_watch").innerHTML = hours + ":" + minutes + ":" + seconds;
    setTimeout("digitalWatch()", 1000);
  }
</script>
<style>
@import url( 'mystyle.css');
</style>
</head>
<body onload="digitalWatch()">
	<div class="tbl-header" id="resulthead">
		<table border="0"  width="100%">
			<thead>
				<tr>
					<th><p>X:</p></th>
					<th><p>Y:</p></th>
					<th><p>R:</p></th>
					<th><p>Results</p></th>
					<th><p>Completion time</p></th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="tbl-content" id="resultbody">
		<table border="0" >
			<tbody>
				<tr>
					<td><p style= "text-align:center; word-wrap: break-word;"><?php echo $X; ?></p></td>
					<td><p style= "text-align:center; word-wrap: break-word;"><?php echo $Y; ?></p></td>
					<td><p style= "text-align:center; word-wrap: break-word;"><?php echo $R; ?></p></td>
					<td><p style= "text-align:center; word-wrap: break-word;"><?php echo $answer; ?></p></td>
					<td><p style= "text-align:center; word-wrap: break-word;"><?php echo $duration; ?></p></td>
				</tr>
			</tbody>
		</table>
	</div>
	<p id="digital_watch" style="color: #FCA5D3; font-size: 120%; font-weight: bold; text-align: center;"></p>
</body>
</html>


