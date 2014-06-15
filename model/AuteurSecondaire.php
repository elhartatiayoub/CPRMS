<?php
require_once(realpath(dirname(__FILE__)) . '/Article.php');
require_once(realpath(dirname(__FILE__)) . '/Auteur.php');



class AuteurSecondaire extends Auteur {
	/**
	 * @AssociationType Article
	 */
	public $_ecrit_par;
}
?>