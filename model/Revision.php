<?php
require_once(realpath(dirname(__FILE__)) . '/Article.php');
require_once(realpath(dirname(__FILE__)) . '/MembreComite.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class Revision {
	/**
	 * @AttributeType MembreComite
	 */
	private $_membreComite;
	/**
	 * @AttributeType Article
	 */
	private $_article;
	/**
	 * @AttributeType int[15]
	 */
	private $_notes;
	/**
	 * @AssociationType MembreComite
	 * @AssociationMultiplicity 0..3
	 */
	public $_unnamed_MembreComite_;
	/**
	 * @AssociationType Article
	 * @AssociationMultiplicity 0..*
	 */
	public $_unnamed_Article_;

	/**
	 * @access public
	 * @return MembreComite
	 * @ReturnType MembreComite
	 */
	public function getMembreComite() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param MembreComite aMembreComite
	 * @return void
	 * @ParamType aMembreComite MembreComite
	 * @ReturnType void
	 */
	public function setMembreComite(MembreComite $aMembreComite) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Article
	 * @ReturnType Article
	 */
	public function getArticle() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Article aArticle
	 * @return void
	 * @ParamType aArticle Article
	 * @ReturnType void
	 */
	public function setArticle(Article $aArticle) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return int[15]
	 * @ReturnType int[15]
	 */
	public function getNotes() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param int[15] aNotes
	 * @return void
	 * @ParamType aNotes int[15]
	 * @ReturnType void
	 */
	public function setNotes(array $aNotes) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param MembreComite aUnnamed_MembreComite_
	 * @return void
	 * @ParamType aUnnamed_MembreComite_ MembreComite
	 * @ReturnType void
	 */
	public function setUnnamed_MembreComite_(MembreComite $aUnnamed_MembreComite_) {
		$this->_unnamed_MembreComite_ = $aUnnamed_MembreComite_;
	}

	/**
	 * @access public
	 * @return MembreComite
	 * @ReturnType MembreComite
	 */
	public function getUnnamed_MembreComite_() {
		return $this->_unnamed_MembreComite_;
	}

	/**
	 * @access public
	 * @param Article aUnnamed_Article_
	 * @return void
	 * @ParamType aUnnamed_Article_ Article
	 * @ReturnType void
	 */
	public function setUnnamed_Article_(Article $aUnnamed_Article_) {
		$this->_unnamed_Article_ = $aUnnamed_Article_;
	}

	/**
	 * @access public
	 * @return Article
	 * @ReturnType Article
	 */
	public function getUnnamed_Article_() {
		return $this->_unnamed_Article_;
	}
}
?>