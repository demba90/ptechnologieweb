<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 04/08/2015
 * Time: 10:57
 */
if(!isset($_SESSION["login"])){
    header("Location:../admin.php");
}
$femme = 0;
$homme = 0;

include "../ManageurDB.php";
$man = new ManageurDB();

$femme = $man->getFemme();
$homme = $man->getHomme();
?>
<div align="center" id="donut-example" style="margin-top: 100px;"></div>
<script type="text/javascript">
    Morris.Donut({
        element: 'donut-example',
        data: [
            {label: "Homme", value: <?php echo $homme ?>},
            {label: "Femme", value: <?php echo $femme ?>,
        ]
    });
</script>
