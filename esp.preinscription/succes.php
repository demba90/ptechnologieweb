<?php  

session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Demande</title>
		<meta charset="UTF-8" />
		
		<link rel="stylesheet" type="text/css" href="succes.css">
	</head>
	<body>
		<div id="toute_la_page_succes">
			

			<!-- pied de page -->
			
		</div>

		<div id="bloc_overlay_paiement">
				<div class="overlay_paiement">
					lkrengsdfnmkvnsudfhvhdfnvurvjfb

					<a href="#" id="lienOK">OK</a>
				</div>
			</div>
			<?php $_SESSION['mairieActuelle'] = NULL; ?>
	</body>
</html>

<script type="text/javascript">
	var lienOK = document.getElementById('lienOK'), bloc_overlay_paiement = document.getElementById('bloc_overlay_paiement'),
	toute_la_page_succes = document.getElementById('toute_la_page_succes');

	function addEvent(event,element,funct)
		{
			if(element.addEventListener)
				{
					element.addEventListener(event,funct,false);
				}
			else
				{		
					element.attachEvent('on'+ event,funct);
				}
		}

		addEvent('click',lienOK,function(e){
		e.returnValue = false;
		if (e.preventDefault) {
			e.preventDefault();
		}
		options = "Width=700,Height=200";
		lienOK.style.display = 'none';
		window.print();
		bloc_overlay_paiement.style.display = 'none';
		toute_la_page_succes.style.display = 'block';
		

		});


</script>

