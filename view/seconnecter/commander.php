<!-- Commander -->
  <section class="page-section" id="commander">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
			<h1>Recapitulatif de votre commande</h1>
			<br> <br>
<?php 
$count = 0;
foreach($cmde['mescommandes'] as $ligne => $prop){
	$aff = $prop->id_blague;
	$aff2 = $prop ->px_blague;
	$count  = $count + $aff2;
	echo "Blague n° ${aff} - ${aff2}€";
	echo '<br>';
}
echo "<br>"; echo "Total : ${count}€"; echo "<br>";
if(!isset($commande['resultat']))
{
?>
	
	<div class="row">
		<div class="form-group col-md-12 col-xs-12"> 
			<a href="<?=WEBROOT."seconnecter/commanderfinaliser"?>">
				<button type="button" style="margin:20px" >
						PAYER 
				</button>
			</a>
		</div>
	</div>
</form>

<?php 
}else{
    echo $commande['resultat'];
}
?>
</div>
</div>
</div>
</section>