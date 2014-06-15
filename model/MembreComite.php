<?php
require_once(realpath(dirname(__FILE__)) . '/Revision.php');
require_once(realpath(dirname(__FILE__)) . '/Theme.php');
require_once(realpath(dirname(__FILE__)) . '/SousThemeDAO.php');
require_once(realpath(dirname(__FILE__)) . '/User.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class MembreComite extends User {
	/**
	 * @AssociationType Revision
	 * @AssociationMultiplicity 0..*
	 */
	public $_unnamed_Revision_ = array();
	/**
	 * @AssociationType Theme
	 * @AssociationKind Aggregation
	 */
	public $_préfère;
	/**
	 * @AssociationType SousThemeDAO
	 * @AssociationKind Aggregation
	 */
	public $_unnamed_SousThemeDAO_;
}
?>