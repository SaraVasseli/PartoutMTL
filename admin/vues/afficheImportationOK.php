<?php
	/// *** SECURITE DE LA PAGE *** ///////////////////////////
	if(!isset($_SESSION['authentifie']))
	{
		header('Location: ../index.php');
	}
	///////////////////////////////////////////////////////////
?>

<br>
<div>
	Les donnés ont eté importé correctement<br>
	<a href="index.php?requete=importation">Allez ver l'importation de donnés</a>
</div>
<br>