<?php
	/// *** SECURITE DE LA PAGE *** ///////////////////////////
	if(!isset($_SESSION['authentifie']))
	{
		header('Location: ../index.php');
	}
	///////////////////////////////////////////////////////////
?>

<!-- FIN DE LA SOUMISSION D'UNE OEUVRE, BOUTON SOUMISSION ------------------------------------------->

<?php    
    if($_GET['requete'] == "soumission" && !isset($_GET['idSoumissionUsager']))
    {
        ?>
        <input type="hidden" name="idSoumissionUsager" value=""/>
        <input type="button" class="bouton" id="boutonAjout" value="SOUMETTRE" name="boutonAjout"/>
        <?php
    }
    
    if($_GET['requete'] == "soumission" && isset($_GET['idSoumissionUsager']))
    {
        ?>
        <input type="hidden" name="idSoumissionUsager" value="<?php echo $_GET['idSoumissionUsager']?>"/>
        <input type="button" class="bouton" id="boutonSoumission" value="SOUMETTRE" name="boutonSoumission"/>
        <?php
    }
?>
</div>


