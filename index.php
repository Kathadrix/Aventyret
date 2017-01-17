<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<h1>Den perfecta Csgo rundan!</h1>


<?php
if ($_GET['player_name'] == NULL):
?>
<form action="index.php">
	<label>Tjoo, vad är ditt alias?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>
<?php
elseif ($_GET['page'] == 1):
?>
<h2>Tjena <? echo $_GET['player_name'] ?></h2>
<p>Du står i spawn på de_dust2, terroristsidan. Försök vinna rundan utan att bli likviderad!</p>
<form action="index.php">
	<label> Vilket håll går du för att attackera?</label><br>
	<input type="radio" name="page" value="2" id="long">
	<label for="west">Nerför slope in vidare till lång för att överta A-site.</label><br>
	<input type="radio" name="page" value="3" id="short">
	<label for="north">Peaka mid för att gå short till A-site.</label><br>
	<input type="radio" name="page" value="4" id="tunnel">
	<label for="east">Du går åt vänster för att söka dig genom B-tunnel.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 2):
?>
<p>Du närmar dig Bombsite.</p>
<form action="index.php">
	<label>Vad är din nästa move??</label><br>
	<input type="radio" name="page" value="5" id="rush">
	<label for="west">Överraska dina motståndare genom att Rusha!</label><br>
	<input type="radio" name="page" value="6" id="peaka">
	<label for="north">Ta det lugnt och förlita dig på dina chanser att döda dina motståndare genom att peaka.</label><br>
	<input type="radio" name="page" value="7" id="support">
	<label for="east">Spelar passivt med smokes och flashes för att hjälpa dina medspelare att angripa bombsite.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 7):
?>
<p>Du har plantat bomben på bomsite, och dina motståndare har reroutat och är påväg mot dig.</p>
<form action="index.php">
	<label>Hur positionerar du dig för att försvara bomben?</label><br>
	<input type="radio" name="page" value="8" id="defrush">
	<label for="west">Återigen spela aggresivt och rusha dem före de tar sig fram till bombsite.</label><br>
	<input type="radio" name="page" value="9" id="strategic">
	<label for="north">Göm dig bakom föremål för att strategiskt placera dig så att du hinner skjuta dem före de ser dig.</label><br>
	<input type="radio" name="page" value="10" id="snipe">
	<label for="east">Springer iväg och peakar. Då motståndarna kommer kastar du en eldbomb och tar fram ditt dundergevär och skjuter dem en och en från ett långt avstånd.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 10):
?>

<h1>Bra jobbat! Bomben exploderade och du vann rundan!<h1>

<?php
elseif ($_GET['page'] == 3):
?>
<img src="de_dust.jpg">
<form action="index.php">
	<label>Påbörja på nytt?</label>
	<input type="radio" name="page" value="1" id="starta_om">
	<label for="starta_om">Starta om!</label>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 4):
?>
<img src="de_dust.jpg">
<form action="index.php">
	<label>Påbörja på nytt?</label>
	<input type="radio" name="page" value="1" id="starta_om">
	<label for="starta_om">Starta om!</label>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 5):
?>
<img src="de_dust.jpg">
<form action="index.php">
	<label>Påbörja på nytt?</label>
	<input type="radio" name="page" value="1" id="starta_om">
	<label for="starta_om">Starta om!</label>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 6):
?>
<img src="de_dust.jpg">
<form action="index.php">
	<label>Påbörja på nytt?</label>
	<input type="radio" name="page" value="1" id="starta_om">
	<label for="starta_om">Starta om!</label>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 8):
?>
<img src="de_dust.jpg">
<form action="index.php">
	<label>Påbörja på nytt?</label>
	<input type="radio" name="page" value="1" id="starta_om">
	<label for="starta_om">Starta om!</label>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 9):
?>
<img src="de_dust.jpg">
<form action="index.php">
	<label>Påbörja på nytt?</label>
	<input type="radio" name="page" value="1" id="starta_om">
	<label for="starta_om">Starta om!</label>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>


<?php
endif
?>