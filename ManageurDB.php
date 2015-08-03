<?php 

	include "lib/swift_required.php";
	// Début de définition de la classe ManageurDB_Pret
	class ManageurDB {
	/**
	* Instance de la classe PDO
	*
	* @var PDO
	* @access private
	*
	*/
	private $PDOInstance = null;
	/**
	* Instance de la classe ManageurDB_Pret
	*
	* @var ManageurDB_Pret
	* @access private
	* @static
	*/
	private static $instance = null;
	/**
	* Constante: nom d'utilisateur de la bdd
	*
	* @var string
	*/
	const DEFAULT_SQL_USER = 'root';
	/**
	* Constante: hôte de la bdd
	*
	* @var string
	*/
	const DEFAULT_SQL_HOST = 'localhost';
	/**
	* Constante: hôte de la bdd
	*
	* @var string
	*/
	const DEFAULT_SQL_PASS = '';
	/**
	* Constante: nom de la bdd
	*
	* @var string
	*/
	const DEFAULT_SQL_DTB = 'preinscript_demat';

	/**
	* Constructeur
	* @param void
	* @return void
	* @see PDO::__construct()
	* @access public
	*/

	public function __construct(){
		
	$this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS,array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
	$this->PDOInstance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
	
	}
	/**
	* Crée et retourne l'objet ManageurDB_Pret
	* @return ManageurDB_Pret $instance
	*/
		public static function getInstance(){
		if(is_null(self::$instance)){
			self::$instance = new ManageurDB_Pret();
		}
		return self::$instance;
	}
	public function getPDO(){
		$this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS,array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
		return $this->PDOInstance;
	}

	//Fonction ajoutCandidat
	public function ajoutCandidat($prenom, $nom, $dateNaissance, $lieuNaissance, $sexe, $nationalite, $adresse, $mail, $telephone, $niveauEtude){

		$ge = $this->genId();
		$req = $this->getPDO()->prepare("INSERT INTO pre_candidat VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$req->execute(array($ge, $prenom, $nom, $dateNaissance, $lieuNaissance, $sexe, $nationalite, $adresse, $mail, $telephone, $niveauEtude));

		return $req;
	}

	//foction de connexion 
	public function connectFunction($login, $password){

		$req = $this->getPDO()->prepare("SELECT * FROM pre_user WHERE login=? AND password=?");
		$req->execute(array($login, $password));

		if(!$req){
			return false;
		}
		else{
			$r = $req->fetch();
			return $r;
		}
			
	}

	//Fonction de prise des informations du candidat
	public function getInfos($idcandidat){

		$req = $this->getPDO()->prepare("SELECT * FROM pre_candidat WHERE idcandidat=?");
		$req->execute(array($idcandidat));

		if(!$req){
			return false;
		}
		else{
			$r = $req->fetch();
			return $r;
		}
	}

	//fonction generation de id
	public function genId(){

		$jour = date('d');
		$mois = date('m');
		$annee = date('y');
		$heure = date('H');
		$min = date('i');
		$sec = date('s');

		$genere = $jour.$mois.$annee.$heure.$min.$sec;

		return intval($genere);
	}

	//Fonction d'ajout de diplome 
	public function ajoutDiplome($intitule, $annee, $etablissement, $commentaires, $lien, $candidat){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("INSERT iNTO pre_diplome VALUES (?, ?, ?, ?, ?, ?, ?)");
		$req->execute(array($ge, $intitule, $annee, $etablissement, $commentaires, $lien, $candidat));

		return $req;
	}

	//Fonction d'ajout départment
	public function ajoutDepartement($nom, $specialite){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("INSERT INTO pre_departement VALUES (?, ?, ?)");
		$req->execute(array($ge, $nom, $specialite));

		return $req;

	}

	//Fonction d'ajout d'un dossier de candidature
	public function ajoutDossier($candidat, $statut){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("INSERT INTO pre_dossiercandidature VALUES (?, ?, ?)");
		$req->execute(array($ge, $statut, $candidat));

		return $req;
	}

	//Fonction d'ajout d'une formation
	public function ajoutFormation($intitule, $nbAnneeEtude, $descriptif, $dateOuverture, $dateFermeture, $prixEnCharge, $departement){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("INSERT INTO pre_formation VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$req->execute(array($ge, $intitule, $nbAnneeEtude, $descriptif, $dateOuverture, $dateFermeture, $prixEnCharge, $departement));

		return $req;

	}

	//Fonction d'ajout d'une liste
	public function ajoutListe($intitule, $nbCandidats, $type, $formation){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("INSERT INTO pre_liste VALUES (?, ?, ?, ?, ?)");
		$req->execute(array($ge, $intitule, $nbCandidats, $type, $formation));

		return $req;

	}

	//Fonction d'ajout d'un quitus
	public function ajoutQuitus($montant, $dateQuitus){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("INSERT INTO pre_quitus VALUES (?, ?, ?)");
		$req->execute(array($ge, $montant, $dateQuitus));

		return $req;

	}

	//Fonction mise à jour dossier de candidature pour quitus
	public function majDossierQuitus($dossier, $quitus){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("UPDATE pre_dossiercandidature SET Quitus_idQuitus=? WHERE idDossierCandidature=?");
		$req->execute(array($quitus, $dossier));

		return $req;

	}

	//fonction de mise à jour dossier de candidature pour liste
	public function majDossierListe($dossier, $liste){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("UPDATE pre_dossiercandidature SET Liste_idListe=? WHERE idDossierCandidature=?");
		$req->execute(array($liste, $dossier));

		return $req;

	}

	//Fonction de recupération des dossiers 
	public function recupListeDossier(){

		$sta = "cours";
		$req1 = $this->getPDO()->prepare("SELECT * FROM pre_dossiercandidature, pre_candidat WHERE statut=?");
		$req1->execute(array($sta));
		
		if(!$req1){
			
			echo "ksdjfkk";
		}
		else{
			$r = $req1->fetch();
			print_r($r);
		}
		
	}

	//Fonction de mise à jour dossier de candidature pour statut
	public function majDossierStatut($dossier, $statut){

		$ge = $this->genId();

		$req = $this->getPDO()->prepare("UPDATE pre_dossiercandidature SET statut=? WHERE idDossierCandidature=?");
		$req->execute(array($statut, $dossier));

		return $req;

	}

	//Fonction de recuperation de tout les formations d'un département
	public function recupFormations($departement){

		$req = $this->getPDO()->prepare("SELECT * FROM pre_formation WHERE Departement_idDepartement=?");
		$req->execute(array($departement));




		if(!$req){
			return false;
		}
		else{
			return $req;
		}
	}

	//Fonction de recuperation de departement
	public function recupDepart($depart){

		$req = $this->getPDO()->prepare("SELECT * FROM pre_departement WHERE specialite=?");
		$req->execute(array($depart));

		if(!$req){
			return false;
		}
		else{
			$r = $req->fetch();
			return $r['idDepartement'];
		}
	}

	//Fonction  d'envoi de mail
	public function envoiMail(){

		// SMTP
		 $smtp_param = Swift_SmtpTransport::newInstance('smtp.yahoo.fr', 587)
		 ->setUsername('biglock91@yahoo.fr')
		 ->setPassword('mgathegame91');

		 // Instance Swiftmailer
		 $instance_swiftmailer = Swift_Mailer::newInstance($smtp_param);
		 
		 // Instance message
		 $message = Swift_Message::newInstance();

		$message->setSubject(
utf8_encode('Ceci est le sujet SWIFTMAILER'))
->setFrom(array('biglock91@yahoo.fr' => 'Adresse FROM'))
->setTo(array('gueyemouhamed.gueye@gmail.com' => 'Adresse TO'))
->setBody(
 '<html>
 <head></head>
 <body>
 <h1>Test de la librairie SWIFTMAILER</h1>
 Lorem ipsum <em>bla bla bla</em>
 </body>'
, 'text/html')
->setPriority(2);

		$type = $message->getHeaders()->get('Content-Type');
$type->setValue('text/html');
$type->setParameter('charset', 'iso-8859-1');

if ($instance_swiftmailer->send($message, $fail)) {
 echo 'Envoyé ';
}else{
 echo 'ERREUR : ';
 print_r($fail);
}
	}

}

 ?>
