<?php 

	//include "lib/swift_required.php";
	include "C:\wamp\www\Technologie_Web\preinscript_demat\ptechnologieweb\swiftmailer/lib/swift_required.php";
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

		$ge = rand(100000, 99999999);
		$req = $this->getPDO()->prepare("INSERT INTO pre_candidat VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$req->execute(array($ge, $prenom, $nom, $dateNaissance, $lieuNaissance, $sexe, $nationalite, $adresse, $mail, $telephone, $niveauEtude));

		return $ge;
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
		$heure = rand(0, 20);
		$min = date('i');
		$sec = date('s');

		$genere = $jour.$mois.$annee.$heure.$min.$sec;

		return intval($genere);
	}

	//Fonction d'ajout de diplome 
	public function ajoutDiplome($intitule, $annee, $etablissement, $commentaires, $lien, $candidat){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("INSERT iNTO pre_diplome VALUES (?, ?, ?, ?, ?, ?, ?)");
		$req->execute(array($ge, $intitule, $annee, $etablissement, $commentaires, $lien, $candidat));

		return $req;
	}

	//Fonction d'ajout départment
	public function ajoutDepartement($nom, $specialite){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("INSERT INTO pre_departement VALUES (?, ?, ?)");
		$req->execute(array($ge, $nom, $specialite));

		return $req;

	}

	//Fonction d'ajout d'un dossier de candidature
	public function ajoutDossier($candidat, $statut){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("INSERT INTO pre_dossiercandidature(idDossierCandidature, statut, Candidat_idCandidat) VALUES (?, ?, ?)");
		$req->execute(array($ge, $statut, $candidat));

		return $ge;
	}

	//Fonction d'ajout d'une formation
	public function ajoutFormation($intitule, $nbAnneeEtude, $descriptif, $dateOuverture, $dateFermeture, $prixEnCharge, $departement){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("INSERT INTO pre_formation VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$req->execute(array($ge, $intitule, $nbAnneeEtude, $descriptif, $dateOuverture, $dateFermeture, $prixEnCharge, $departement));

		return $req;

	}

	//Fonction d'ajout d'une liste
	public function ajoutListe($intitule, $nbCandidats, $type, $formation){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("INSERT INTO pre_liste VALUES (?, ?, ?, ?, ?)");
		$req->execute(array($ge, $intitule, $nbCandidats, $type, $formation));

		return $req;

	}

	//Fonction d'ajout d'un quitus
	public function ajoutQuitus($montant, $dateQuitus){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("INSERT INTO pre_quitus VALUES (?, ?, ?)");
		$req->execute(array($ge, $montant, $dateQuitus));

		return $req;

	}

	//Fonction mise à jour dossier de candidature pour quitus
	public function majDossierQuitus($dossier, $quitus){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("UPDATE pre_dossiercandidature SET Quitus_idQuitus=? WHERE idDossierCandidature=?");
		$req->execute(array($quitus, $dossier));

		return $req;

	}

	//fonction de mise à jour dossier de candidature pour liste
	public function majDossierListe($dossier, $liste){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("UPDATE pre_dossiercandidature SET Liste_idListe=? WHERE idDossierCandidature=?");
		$req->execute(array($liste, $dossier));

		return $req;

	}

	//Fonction de recupération des dossiers 
	public function recupListeDossier(){

		$sta = "cours";
		$req1 = $this->getPDO()->prepare("SELECT * FROM pre_candidat as c, pre_dossiercandidature as d, pre_filiere as f, pre_departement as p, pre_formation as o WHERE statut=? AND c.idCandidat=d.Candidat_idCandidat AND d.filiere=f.id_Filiere AND f.departement=p.idDepartement AND p.idDepartement=o.Departement_idDepartement");
		$req1->execute(array($sta));
		
		if(!$req1){
			
			return false;
		}
		else{
			return $req1;
		}
		
	}

	//ajout utilisateur
	public function addUser($candidat){

		$ge = rand(100000, 99999999);
		$req1 = $this->getPDO()->prepare("SELECT * FROM pre_candidat WHERE idCandidat=?");
		$req1->execute(array($candidat));

		$r = $req1->fetch();

		$req2 = $this->getPDO()->prepare("INSERT INTO pre_user VALUES (?, ?, ?, ?)");
		$req2->execute(array($ge, $r['mail'], $r['telephone'], $candidat));

		return $req2;
	}

	//Fonction de mise à jour dossier de candidature pour statut
	public function majDossierStatut($dossier, $statut){

		$ge = rand(100000, 99999999);

		$req = $this->getPDO()->prepare("UPDATE pre_dossiercandidature SET statut=? WHERE idDossierCandidature=?");
		$req->execute(array($statut, $dossier));

		print_r($req);
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

	//public fonction pour verifier un quitus
	public function verifQuitus($numero){

		$req = $this->getPDO()->prepare("SELECT * FROM pre_quitus WHERE numero=?");
		$req->execute(array($numero));

		if(!$req){
			return false;
		}
		else{
			return $req;
		}
	}

	//Fonction d'envoi de mail
	public function notification($mailinscrip,$mdpinscrip,$matri, $user_cle){

		

		$to =$mailinscrip;
		$sujet = 'Confirmation inscription';
		$msg ='
		<html><body>Bonjour, <br> Confirmation de vos informations personnelles.<br>
		<b>Login</b>: '.$mailinscrip.'<br><b> Mot de passe</b>: '.$mdpinscrip.'<br> <b>Votre N0 de candidature</b>: '.$matri.' <br><br>
		Pour terminer l\'activation de votre compte, <a href=\'http://localhost/Technologie_Web/preinscript_demat/ptechnologieweb/esp.preinscription/validDossier.php?can='.$matri.'&cle='.$user_cle.'\'>cliquez ici!</a> <br><br> MERCI
		</body></html>';

		$msg = htmlentities($msg,ENT_NOQUOTES,'UTF-8',false);
		$msg = str_replace(array('&lt;','&gt;'),array('<','>'), $msg);
		$msg = str_replace(array('&amp;lt;','&amp;gt'),array('&lt;','&gt;'), $msg);
		$body=$msg;
		$entete = "MIME-Version: 1.0\r\n";
		$entete .= "Content-type: text/html; charset=UTF-8\r\n";
		$entete .= 'From: CreatiO.Fr ::' . "\r\n" .
				'Reply-To: contact@creatiq.fr' . "\r\n" .
				'x-Mailer : PHP/' . phpversion();

		$res = $this->smtpswiftmailer($to,$sujet,utf8_decode($body),$entete);
		return $res;

	}

	public function smtpswiftmailer($to,$sujet,$body,$entete){

		$transport = Swift_SmtpTransport::newInstance()
		->setHost('smtp.gmail.com')
		->setPort(587) //465 
		->setEncryption('tls')
		->setUsername('projettechweb@gmail.com')
		->setPassword('technologie')
		;

		// Create the Mailer using your created Transport
		$mailer = Swift_Mailer::newInstance($transport);

		// Create a message
		$message = Swift_Message::newInstance()
		->setSubject($sujet)
		->setFrom(array('projettechweb@gmail.com'=>'ESP'))
		->setTo($to)
		->setBody($body, 'text/html', 'utf-8')
		;
		//debug($message);die();
		// Send the message
		$numSent = $mailer->send($message);
		return $numSent;
	}

	public function connectAdmin($login, $password){

		$req = $this->getPDO()->prepare("SELECT * FROM pre_administrateur WHERE login=? AND password=?");
		$req->execute(array($login, $password));

		if(!$req){
			return false;
		}
		else{
			$r = $req->fetch();
			return $r;
		}
	}

	public function connectResponsable($login, $password){

		$req = $this->getPDO()->prepare("SELECT * FROM pre_responsable WHERE login=? AND password=?");
		$req->execute(array($login, $password));

		if(!$req){
			return false;
		}
		else{
			$r = $req->fetch();
			return $r;
		}
	}
    public function getHomme(){
        $req = $this->getPDO()->exec("SELECT *  FROM pre_candidat WHERE sexe= 'M'");
        return $req->rowCount();
    }

    public function getFemme(){
        $req = $this->getPDO()->exec("SELECT *  FROM pre_candidat WHERE sexe= 'F'");
        return $req->rowCount();
    }

}
?>
