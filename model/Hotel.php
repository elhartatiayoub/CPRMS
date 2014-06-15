<?php
require_once(realpath(dirname(__FILE__)) . '/Chambre.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class Hotel {
	/**
	 * @AssociationType Chambre
	 * @AssociationMultiplicity 1..*
	 */
	public $_unnamed_Chambre_ = array();
}
?>