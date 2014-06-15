<?php
require_once(realpath(dirname(__FILE__)) . '/Reservation.php');
require_once(realpath(dirname(__FILE__)) . '/User.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class Participant extends User {
	/**
	 * @AttributeType String
	 */
	private $_modePaiement;
	/**
	 * @AttributeType String
	 */
	private $_typePersonne;
	/**
	 * @AssociationType Reservation
	 * @AssociationMultiplicity 0..1
	 */
	public $_unnamed_Reservation_;

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getModePaiement() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param String aModePaiement
	 * @return void
	 * @ParamType aModePaiement String
	 * @ReturnType void
	 */
	public function setModePaiement(String $aModePaiement) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getTypePersonne() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param String aTypePersonne
	 * @return void
	 * @ParamType aTypePersonne String
	 * @ReturnType void
	 */
	public function setTypePersonne(String $aTypePersonne) {
		// Not yet implemented
	}
}
?>