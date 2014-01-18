<?php

/** 
 * @author Trackoen Suzanne
 * Script de contrôle et d'affichage du cas d'utilisation "Validation fiche de frais"
 * basé sur un formulaire préconçu
 * @package default
 * @todo  RAS
 */
 $repInclude = './include/';
  require($repInclude . "_init.inc.php");

  // page inaccessible si utilisateur non connecté
  if (!estUtilisateurConnecte()) {
      header("Location: cSeConnecter.php");  
  }
  require($repInclude . "_entete.inc.html");
  require($repInclude . "_sommaire.inc.php");
?>
<div id="contenu">
    <div name="droite" style="float:left;width:80%;">
	<div name="haut" style="margin: 2 2 2 2 ;height:10%;float:left;"><h1>Validation des Frais</h1></div>	
	<div name="bas" style="margin : 10 2 2 2;clear:left;background-color:EE8844;color:white;height:88%;">
	<form name="formValidFrais" method="post" action="enregValidFrais.php">
		<div style="clear:left;"><h2>Validation des frais par visiteur </h2></div>
                <p class="titre" />
                    Choisir le visiteur : <select name="lstVisiteur" class="zone"><option value="a131">Villechalane</option></select>			
                    <label class="titre">Mois :</label> <input class="zone" type="text" name="dateValid" size="12" />
                <p class="titre" />
		<div style="clear:left;"><h2>Frais au forfait </h2></div>
		<table style="color:white;" border="1">
			<tr><th>Repas midi</th><th>Nuitée </th><th>Etape</th><th>Km </th><th>Situation</th></tr>
			<tr align="center"><td width="80" ><input type="text" size="3" name="repas"/></td>
				<td width="80"><input type="text" size="3" name="nuitee"/></td> 
				<td width="80"> <input type="text" size="3" name="etape"/></td>
				<td width="80"> <input type="text" size="3" name="km" /></td>
				<td width="80"> 
					<select size="3" name="situ">
						<option value="E">Enregistré</option>
						<option value="V">Validé</option>
						<option value="R">Remboursé</option>
					</select></td>
				</tr>
		</table>
		
		<p class="titre" /><div style="clear:left;"><h2>Hors Forfait</h2></div>
		<table style="color:white;" border="1">
			<tr><th>Date</th><th>Libellé </th><th>Montant</th><th>Situation</th></tr>
			<tr align="center"><td width="100" ><input type="text" size="12" name="hfDate1"/></td>
				<td width="220"><input type="text" size="30" name="hfLib1"/></td> 
				<td width="90"> <input type="text" size="10" name="hfMont1"/></td>
				<td width="80"> 
					<select size="3" name="hfSitu1">
						<option value="E">Enregistré</option>
						<option value="V">Validé</option>
						<option value="R">Remboursé</option>
					</select></td>
				</tr>
		</table>		
		<p class="titre"></p>
		<div class="titre">Nb Justificatifs</div><input type="text" class="zone" size="4" name="hcMontant"/>		
		<p class="titre" /><label class="titre">&nbsp;</label><input class="zone"type="reset" /><input class="zone"type="submit" />
	</form>
	</div>
    </div>
</div>

<?php        
  require($repInclude . "_pied.inc.html");
  require($repInclude . "_fin.inc.php");
?>