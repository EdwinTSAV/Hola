<a href="index.php?page=imprimir_ce&id={$fsc->servicio->idservicio}" target="_blank">
    Imprimir
</a>
<?php
$date = new DateTime();
echo '<br>';
echo json_encode($date);
$date->modify('-2 hours');
echo '<br>';
echo json_encode($date);
$date->modify('-2 days');
echo '<br>';
echo json_encode($date);
?>