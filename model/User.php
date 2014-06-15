<?php
require_once(realpath(dirname(__FILE__)) . '/President.php');


 
abstract class User {
	
	private $_ID;
	
	private $_nom;
	
	private $_prenom;
	
	private $_email;
	
	private $_adresse;
	
	private $_tel;
	
	private $_pays;
	
	private $_nationalite;
	
	private $_institution;
	
	private $_laboratoire;
	
	private $_equipeTravail;
	
	private $_pass;
	
	public $_unnamed_President_;

	public function getNom() {
		return $this->_nom;
	}

	
	public function setNom( $aNom) {
		$this->_nom=$aNom;
	}
	
	public function getID() {
		return $this->_ID;
	}

	
	public function setID( $aID) {
		$this->_ID=$aID;
	}

	public function getPrenom() {
		return $this->_prenom;		
	}

	
	public function setPrenom($aPrenom) {
		$this->_prenom=$aPrenom;
	}

	
	public function getEmail() {
		return $this->_email;
	}

	
	public function setEmail($aEmail) {
		$this->_email=$aEmail;
	}

	
	public function getAdresse() {
		return $this->_adresse;
	}

	public function setAdresse( $aAdresse) {
		$this->_adresse=$aAdresse;
	}

	
	public function getTel() {
		return $this->_tel;
	}

	
	public function setTel( $aTel) {
		$this->_tel=$aTel;
	}

	
	public function getPays() {
		return $this->_pays;
	}

	
	public function setPays( $aPays) {
		$this->_pays=$aPays;
	}

	public function getNationalite() {
		return $this->_nationalite;
	}

	public function setNationalite( $aNationalite) {
		$this->_nationalite=$aNationalite;
	}

	
	public function getInstitution() {
		return $this>_institution;
	}

	
	public function setInstitution( $aInstitution) {
		$this->_institution=$aInstitution;
	}

	
	public function getLaboratoire() {
		return $this->_laboratoire;
	}

	
	public function setLaboratoire( $aLaboratoire) {
		$this->_laboratoire=$aLaboratoire;
	}

	
	public function getEquipeTravail() {
		return $this->_equipeTravail;
	}

	
	public function setEquipeTravail( $aEquipeTravail) {
		$this->_equipeTravail=$aEquipeTravail;
	}

	
	public function getPass() {
		return $this->_pass;
	}

	
	public function setPass( $aPass) {
		$this->_pass=$aPass;
	}
}
?>