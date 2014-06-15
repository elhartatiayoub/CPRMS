<?php
require_once(realpath(dirname(__FILE__)) . '/Revision.php');
require_once(realpath(dirname(__FILE__)) . '/Soumission___.php');
require_once(realpath(dirname(__FILE__)) . '/AuteurSecondaire.php');
require_once(realpath(dirname(__FILE__)) . '/Theme.php');
require_once(realpath(dirname(__FILE__)) . '/MotCle.php');


class Article {
	
	private $_langue;
	
	private $_titre;
	
	private $_resume;
	
	public $_unnamed_Revision_ = array();
	
	public $_unnamed_Soumission____;
	
	public $_ecrit_par = array();
	
	public $_unnamed_Theme_;
	
	public $_unnamed_MotCle_;

	public function getLangue() {
		return $this->_langue;
	}

	
	public function setLangue(String $aLangue) {
		$this->_langue=$aLangue;
	}

	
	public function getTitre() {
		return $this->_titre;
	}

	
	public function setTitre(String $aTitre) {
		$this->_titre=$aTitre;
	}

	
	public function getResume() {
		$this->_resume;
	}

	
	public function setResume(String $aResume) {
		$this->_resume=$aResume;
	}
}
?>