<?php
require_once(realpath(dirname(__FILE__)) . '/MembreComite.php');
require_once(realpath(dirname(__FILE__)) . '/Article.php');
require_once(realpath(dirname(__FILE__)) . '/SousThemeDAO.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class Theme {
	/**
	 * @AssociationType MembreComite
	 */
	public $_préfère;
	/**
	 * @AssociationType Article
	 * @AssociationMultiplicity 0..*
	 */
	public $_unnamed_Article_ = array();
	/**
	 * @AssociationType SousThemeDAO
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Aggregation
	 */
	public $_unnamed_SousThemeDAO_ = array();
}
?>