<?php
require_once(realpath(dirname(__FILE__)) . '/Administrateur.php');
require_once(realpath(dirname(__FILE__)) . '/User.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class President extends User {
	/**
	 * @AssociationType Administrateur
	 */
	public $_unnamed_Administrateur_;
	/**
	 * @AssociationType User
	 * @AssociationKind Aggregation
	 */
	public $_unnamed_User_;
}
?>