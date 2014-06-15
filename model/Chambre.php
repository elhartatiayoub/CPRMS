<?php
require_once(realpath(dirname(__FILE__)) . '/Reservation.php');
require_once(realpath(dirname(__FILE__)) . '/Hotel.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class Chambre {
	/**
	 * @AttributeType String
	 */
	private $_type;
	/**
	 * @AssociationType Reservation
	 * @AssociationMultiplicity 0..1
	 */
	public $_unnamed_Reservation_;
	/**
	 * @AssociationType Hotel
	 * @AssociationMultiplicity 1
	 */
	public $_unnamed_Hotel_;

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getType() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param String aType
	 * @return void
	 * @ParamType aType String
	 * @ReturnType void
	 */
	public function setType(String $aType) {
		// Not yet implemented
	}
}
?>