<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>


<div style="width:90%; margin: 1em auto;color:slategrey">
<center>
    <legend>Kalkulator Kredytowy</legend>
</br>
    <legend>Wpisz wszystkie potrzebne parametry żeby obliczyć swój kredyt</legend>
    <br></br>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
<!--<form action="--><?php //print(_APP_URL);?><!--/index.php" method="post" class="pure-form pure-form-stacked">-->
	<label for="id_x">Kwota </label>
	<input id="id_x" type="text" name="x" value="<?php out($x) ?>" /><br />
	<label for="id_y">Na ile kredyt(w latach) </label>
	<input id="id_y" type="text" name="y" value="<?php out($y) ?>" /><br />
    <label for="id_z">Oprocentowanie("prosze podać procenty (5%=5)) </label>
    <input id="id_z" type="text" name="z" value="<?php out($z) ?>" /><br />
    <input type="submit" value="Oblicz" />
</form>
    <br><form action="<?php print(_APP_URL);?>/index.php" method="post" class="pure-form pure-form-stacked">
        <input type="submit" value="Strona Główna" />
    </form>
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #93f600; width:300px;">
<?php echo 'Miesięczna rata kredytu: '.$result." zł"; ?>
</div>
<?php } ?>
</center>
</div>
</body>
</html>