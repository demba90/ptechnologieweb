<?Php
	session_start();
    include("connexion.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">
    <meta http-equiv="refresh" content="15">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    <title>ESP | pré-inscription</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/prettify/run_prettify.js"></script>
    <script src="js/ga.js"></script>
<!--    <script type="text/javascript" src="../js/jquery.min.js"></script>-->
    <style type="text/css">
        ${demo.css}
    </style>
    <style>
        @media screen and (max-width: 640px) {
            .countdown {
                font-size: 1rem !important;
            }
        }
    </style>
</head>

<body onLoad="init()">
<?Php
if(isset($_SESSION['login']))
{
?>
    <div class="page-content">
    </br></br></br></br>

    <div id="mo"></div>
    	        </br></br></br></br></br>
            <h1 align="center">LES STATISTIQUES EN TEMPS REEL</h1>
         <div class="page-content">

<?Php
//Les requetes pour les stats


///LES TRANCHES D'AGE
$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-10)."-01-01", date("Y-m-d") ));
$btwnOand10=$req->rowCount();


$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-20)."-01-01", (date("Y")-10)."-01-01" ));
$btwn10and20=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-30)."-01-01", (date("Y")-20)."-01-01" ));
$btwn20and30=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-40)."-01-01", (date("Y")-30)."-01-01" ));
$btwn30and40=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-50)."-01-01", (date("Y")-40)."-01-01" ));
$btwn40and50=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-60)."-01-01", (date("Y")-50)."-01-01" ));
$btwn50and60=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-70)."-01-01", (date("Y")-60)."-01-01" ));
$btwn60and70=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-80)."-01-01", (date("Y")-70)."-01-01" ));
$btwn70and80=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-90)."-01-01", (date("Y")-80)."-01-01" ));
$btwn80and90=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-100)."-01-01", (date("Y")-90)."-01-01" ));
$btwn90and100=$req->rowCount();

$sumT=$btwn90and100+$btwn80and90+$btwn70and80+$btwn60and70+$btwn50and60+$btwn40and50+$btwn30and40+$btwn20and30+$btwn10and20+$btwnOand10;

if($sumT!=0){
$btwnOand10=($btwnOand10*100)/$sumT;
$btwn1Oand20=($btwn10and20*100)/$sumT;
$btwn2Oand30=($btwn20and30*100)/$sumT;
$btwn3Oand40=($btwn30and40*100)/$sumT;
$btwn4Oand50=($btwn40and50*100)/$sumT;
$btwn5Oand60=($btwn50and60*100)/$sumT;
$btwn6Oand70=($btwn60and70*100)/$sumT;
$btwn7Oand80=($btwn70and80*100)/$sumT;
$btwn8Oand90=($btwn80and90*100)/$sumT;
$btwn9Oand100=($btwn90and100*100)/$sumT;
}


///LE SEXE
$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M'" );
$req->execute();
$nbHommes=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F'" );
$req->execute();
$nbFemmes=$req->rowCount();
$sumP=$nbHommes+$nbFemmes;
$nbHommes=($nbHommes*100)/$sumP;
$nbFemmes=($nbFemmes*100)/$sumP;



///LE SEXE ET L'AGE


///LES HOMMES
$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-10)."-01-01", date("Y-m-d") ));
$HbtwnOand10=$req->rowCount();


$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-20)."-01-01", (date("Y")-10)."-01-01" ));
$Hbtwn10and20=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-30)."-01-01", (date("Y")-20)."-01-01" ));
$Hbtwn20and30=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where  sexe='M' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-40)."-01-01", (date("Y")-30)."-01-01" ));
$Hbtwn30and40=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-50)."-01-01", (date("Y")-40)."-01-01" ));
$Hbtwn40and50=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-60)."-01-01", (date("Y")-50)."-01-01" ));
$Hbtwn50and60=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-70)."-01-01", (date("Y")-60)."-01-01" ));
$Hbtwn60and70=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-80)."-01-01", (date("Y")-70)."-01-01" ));
$Hbtwn70and80=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-90)."-01-01", (date("Y")-80)."-01-01" ));
$Hbtwn80and90=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='M' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-100)."-01-01", (date("Y")-90)."-01-01" ));
$Hbtwn90and100=$req->rowCount();

$sumAH=$Hbtwn90and100+$Hbtwn80and90+$Hbtwn70and80+$Hbtwn60and70+$Hbtwn50and60+$Hbtwn40and50+$Hbtwn30and40+$Hbtwn20and30+$Hbtwn10and20+$HbtwnOand10;

if($sumAH!=0){
$HbtwnOand10=($HbtwnOand10*100)/$sumAH;
$Hbtwn1Oand20=($Hbtwn10and20*100)/$sumAH;
$Hbtwn2Oand30=($Hbtwn20and30*100)/$sumAH;
$Hbtwn3Oand40=($Hbtwn30and40*100)/$sumAH;
$Hbtwn4Oand50=($Hbtwn40and50*100)/$sumAH;
$Hbtwn5Oand60=($Hbtwn50and60*100)/$sumAH;
$Hbtwn6Oand70=($Hbtwn60and70*100)/$sumAH;
$Hbtwn7Oand80=($Hbtwn70and80*100)/$sumAH;
$Hbtwn8Oand90=($Hbtwn80and90*100)/$sumAH;
$Hbtwn9Oand100=($Hbtwn90and100*100)/$sumAH;
}



///LES FEMMES
$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-10)."-01-01", date("Y-m-d") ));
$FbtwnOand10=$req->rowCount();


$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-20)."-01-01", (date("Y")-10)."-01-01" ));
$Fbtwn10and20=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-30)."-01-01", (date("Y")-20)."-01-01" ));
$Fbtwn20and30=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where  sexe='F' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-40)."-01-01", (date("Y")-30)."-01-01" ));
$Fbtwn30and40=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-50)."-01-01", (date("Y")-40)."-01-01" ));
$Fbtwn40and50=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-60)."-01-01", (date("Y")-50)."-01-01" ));
$Fbtwn50and60=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-70)."-01-01", (date("Y")-60)."-01-01" ));
$Fbtwn60and70=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-80)."-01-01", (date("Y")-70)."-01-01" ));
$Fbtwn70and80=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-90)."-01-01", (date("Y")-80)."-01-01" ));
$Fbtwn80and90=$req->rowCount();

$req=$bdd->prepare(" SELECT * FROM pre_candidat where sexe='F' and  dateNaissance between ? and ?" );
$req->execute(array( (date("Y")-100)."-01-01", (date("Y")-90)."-01-01" ));
$Fbtwn90and100=$req->rowCount();

$sumAF=$Fbtwn90and100+$Fbtwn80and90+$Fbtwn70and80+$Fbtwn60and70+$Fbtwn50and60+$Fbtwn40and50+$Fbtwn30and40+$Fbtwn20and30+$Fbtwn10and20+$FbtwnOand10;

if($sumAF!=0){
$FbtwnOand10=($FbtwnOand10*100)/$sumAF;
$Fbtwn1Oand20=($Fbtwn10and20*100)/$sumAF;
$Fbtwn2Oand30=($Fbtwn20and30*100)/$sumAF;
$Fbtwn3Oand40=($Fbtwn30and40*100)/$sumAF;
$Fbtwn4Oand50=($Fbtwn40and50*100)/$sumAF;
$Fbtwn5Oand60=($Fbtwn50and60*100)/$sumAF;
$Fbtwn6Oand70=($Fbtwn60and70*100)/$sumAF;
$Fbtwn7Oand80=($Fbtwn70and80*100)/$sumAF;
$Fbtwn8Oand90=($Fbtwn80and90*100)/$sumAF;
$Fbtwn9Oand100=($Fbtwn90and100*100)/$sumAF;
}



$u="{chart:{type:'pie',options3d:{enabled: true,alpha: 45,beta: 0}},title:{text: 'La répartition par tranches d\' âge des pre_candidats sénégalais au Gondwana '},tooltip:{pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'},plotOptions:{pie:{allowPointSelect: true,cursor: 'pointer',depth: 35,dataLabels:{enabled: true,format: '{point.name}'}}},series: [{type: 'pie',name: 'tranche d\'âge',data:[['moins de 10 ans',   ".$btwnOand10."],['entre 10 et 20 ans ',   ".$btwn10and20." ],['entre 20 et 30 ans',  ".$btwn20and30."  ],['entre 30 et 40 ans',  ".$btwn30and40."  ],['entre 40 et 50 ans',  ".$btwn40and50."  ],['entre 50 et 60 ans',  ".$btwn50and60."    ],['entre 60 et 70 ans',    ".$btwn60and70."   ],['entre 70 et 80 ans',   ".$btwn70and80." ],  ['entre 80 et 90 ans',    ".$btwn80and90."   ], ['entre 90 et 100 ans',    ".$btwn90and100."   ] ]}]}";


$v="{chart:{type:'pie',options3d:{enabled: true,alpha: 45,beta: 0}},title:{text: 'La répartition par sexe des pre_candidats sénégalais au Gondwana '},tooltip:{pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'},plotOptions:{pie:{allowPointSelect: true,cursor: 'pointer',depth: 35,dataLabels:{enabled: true,format: '{point.name}'}}},series: [{type: 'pie',name: 'répartition par sexe',data:[['Hommes',   ".$nbHommes."],['Femmes ',   ".$nbFemmes." ] ]}]}";


$w="{title:{text: 'Répartition par âge et par sexe des pre_candidats sénégalais au Gondwana'},xAxis:{categories: ['0 - 10 ans', '10 - 20 ans', '20 - 30 ans', '30 - 40 ans', '40 - 50 ans','50 - 60 ans','60 - 70 ans','70 - 80 ans','80 - 90 ans','90 - 100 ans' ]},labels:{   items: [{ html: 'Répartition par sexe',style: {left: '50px',top: '18px',color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'}}]},series: [{type: 'column',name: 'Femme',data: [".$FbtwnOand10.",".$Fbtwn1Oand20.",".$Fbtwn2Oand30.",".$Fbtwn3Oand40.",".$Fbtwn4Oand50.",".$Fbtwn5Oand60.",".$Fbtwn6Oand70.",".$Fbtwn7Oand80.",".$Fbtwn8Oand90.",".$Fbtwn9Oand100."]}, {type: 'column',name: 'Hommes',data: [".$HbtwnOand10.",".$Hbtwn1Oand20.",".$Hbtwn2Oand30.",".$Hbtwn3Oand40.",".$Hbtwn4Oand50.",".$Hbtwn5Oand60.",".$Hbtwn6Oand70.",".$Hbtwn7Oand80.",".$Hbtwn8Oand90.",".$Hbtwn9Oand100."]}, {type: 'spline',name: 'Average',data:[['moins de 10 ans',   ".(($HbtwnOand10+$FbtwnOand10)/2)."],['entre 10 et 20 ans ',   ".(($Hbtwn1Oand20+$Fbtwn1Oand20)/2)." ],['entre 20 et 30 ans',  ".(($Hbtwn2Oand30+$Fbtwn2Oand30)/2)."  ],['entre 30 et 40 ans',  ".(($Hbtwn3Oand40+$Fbtwn3Oand40)/2)."  ],['entre 40 et 50 ans',  ".(($Hbtwn4Oand50+$Fbtwn4Oand50)/2)."  ],['entre 50 et 60 ans',  ".(($Hbtwn5Oand60+$Fbtwn5Oand60)/2)."    ],['entre 60 et 70 ans',    ".(($Hbtwn6Oand70+$Fbtwn6Oand70)/2)."   ],['entre 70 et 80 ans',   ".(($Hbtwn7Oand80+$Fbtwn7Oand80)/2)." ],  ['entre 80 et 90 ans',    ".(($Hbtwn8Oand90+$Fbtwn8Oand90)/2)."   ], ['entre 90 et 100 ans',    ".(($Hbtwn9Oand100+$Fbtwn9Oand100)/2)."   ] ] , marker: {lineWidth: 2,lineColor: Highcharts.getOptions().colors[3],fillColor: 'white'}}, {type: 'pie',name: 'Total consumption',data: [{name: 'Femmes',y: ".$nbFemmes.",color: Highcharts.getOptions().colors[15] }, { name: 'Hommes',y:".$nbHommes.",color: Highcharts.getOptions().colors[21] }],center: [100, 80],size: 100,showInLegend: false, dataLabels: {enabled: false}}]}";

//$ar=json_decode($u);
//var_dump($ar);
echo "<script> 


$(function () {
     $('#age').highcharts(".$u.");
 });

$(function () {
     $('#sexe').highcharts(".$v.");
 });
 
$(function () {
     $('#SM').highcharts(".$w.");
 });
</script>";


?>
<?Php echo "<input type='hidden' value='kkkd'  id='f'>"; ?>

<script src="../js/highcharts.js"></script>
<script src="../js/highcharts-3d.js"></script>
<script src="../js/modules/exporting.js"></script>
<div id="age" style="height: 400px"></div>
<div id="sexe" style="height: 400px"></div>
<div id="SM" style="height: 400px"></div>




</br></br></br></br>

        <div class="bg-steel no-tablet-portrait no-phone">
            <div class="container padding20 fg-white">
                <div class="carousel bg-transparent" data-role="carousel" data-controls="false" data-markers="false" data-effect="fade" data-height="200">
                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="images/css-logo.png" style="height: 200px">
                        </div>
                        <h1>Nous sommes &agrave; la pointe des technologies de developpement web</h1>
                        <p>
                        Notre bootstrap est bas&eacute; sur le framework Metro UI CSS de Microsoft qui est bas&eacute; sur du {LESS}.</p> <p> Ce framework est "open source" et applique le mod&egrave;le de licence du MIT.</p>
                    </div>

                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="images/bizspark_b_2.png" style="height: 200px">
                        </div>
                        <h1>ESP</h1>
                        <p>
                        Le département génie informatique de l'ESP forme depuis 25 ans maintenant des ingénieurs en informatique. Cette solution a été mise en oeuvre par des étudiants de ce département dans le cadre d'un projet de d&eacute;veloppement web.ESP: meilleure structure de formation TIC 2015.
                        </p>
                        <p> Dagnuy sone wanté kénnou dé!!!</p>
                        <a class="button primary" href="http://bizspark.com">Visitez le site de l'esp</a>
                    </div>

                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="images/phpstorm_7_eap.png" style="height: 200px">
                        </div>
                        <h1>Un grand merci à l'ambassade du Gondawana au Senegal</h1>
                        <p>Merci pour votre sollicitude et votre disponibilité à nous fournir les informations ayant permis de mettre en place cette plateforme. </p>
                        <a class="button success" href="http://www.jetbrains.com/phpstorm/">Visitez le Gondawana en images</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
<?Php
}
else
{
echo "<meta http-equiv=\"refresh\" content=\"0;URL=../c/templates/index.php\">";
}
?>
</body>
</html>