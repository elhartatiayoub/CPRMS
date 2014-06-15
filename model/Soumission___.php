<?php
require_once(realpath(dirname(__FILE__)) . '/Article.php');
require_once(realpath(dirname(__FILE__)) . '/AuteurPrincipal.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class Soumission___ {
	
	private $_article;
	
	private $_etat;
	
	private $_formatFichier;
	
	private $_typeParticipation;
	
	private $_languePresentation;
	
	public $_unnamed_AuteurPrincipal_;
	
	public $_unnamed_Article_;

	public function getArticle() {
		return $this->_article;
	}

	
	public function setArticle($aArticle) {
		$this->_article=$aArticle;
	}

	public function getEtat() {
		return $this->_etat;
	}

	public function setEtat($aEtat) {
		$this->_etat=$aEtat;
	}

	public function getFormatFichier() {
		return $this->_formatFichier;
	}

	public function setFormatFichier($aFormatFichier) {
		$this->_formatFichier=$aFormatFichier;
	}

	public function getTypeParticipation() {
		return $this->_typeParticipation;
	}

	public function setTypeParticipation($aTypeParticipation) {
		$this->_typeParticipation=$aTypeParticipation;
	}

	public function getLanguePresentation() {
		return $this->_languePresentation;
	}

	public function setLanguePresentation($aLanguePresentation) {
		$this->_languePresentation=$aLanguePresentation;
	}

	public function setUnnamed_AuteurPrincipal_($aUnnamed_AuteurPrincipal_) {
		$this->_unnamed_AuteurPrincipal_ = $aUnnamed_AuteurPrincipal_;
	}

	public function getUnnamed_AuteurPrincipal_() {
		return $this->_unnamed_AuteurPrincipal_;
	}

	public function setUnnamed_Article_($aUnnamed_Article_) {
		$this->_unnamed_Article_ = $aUnnamed_Article_;
	}

	public function getUnnamed_Article_() {
		return $this->_unnamed_Article_;
	}
}
?>