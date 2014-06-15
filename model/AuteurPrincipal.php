<?php
require_once(realpath(dirname(__FILE__)) . '/Soumission___.php');
require_once(realpath(dirname(__FILE__)) . '/Auteur.php');



class AuteurPrincipal extends Auteur {
	/**
	 * @AssociationType Soumission : 
	 * @AssociationMultiplicity 0..*
	 */
	public $soumission  = array();
}
?>