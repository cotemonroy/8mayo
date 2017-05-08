<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+JSON:</h3>

<h5>En esta página vemos el detalle de los indicadores del <?php echo('Smart Citizen Kit '.$datos['id'].' instalado en '.$datos['data']['location']['city'].', '.$datos['data']['location']['country']);?>:</h5>

<pre><?php print_r($datos)?></pre>
<p> este Kit está instalado en:
   <strong><?php echo ($datos["data"]["location"]["city"]);?>, <?php echo "
  x

<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los indicadores generados por los sensores del <?php echo('Smart Citizen Kit '.$datos['id']);?>.</p>
</div>

</section>
<?php include('footer.php');?>
