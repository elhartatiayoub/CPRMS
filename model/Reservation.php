<?php
require_once(realpath(dirname(__FILE__)) . '/Participant.php');
require_once(realpath(dirname(__FILE__)) . '/Chambre.php');

/**
 * @access public
 * @author Anis Nezhari & Meryem Farouq
 */
class Reservation {
	/**
	 * @AttributeType String
	 */
	private $_idReservation;
	/**
	 * @AttributeType String
	 */
	private $_idChambre;
	/**
	 * @AttributeType Date
	 */
	private $_dateArrivée;
	/**
	 * @AttributeType Date
	 */
	private $_dateDépart;
	/**
	 * @AssociationType Participant
	 * @AssociationMultiplicity 0..1
	 */
	public $_unnamed_Participant_;
	/**
	 * @AssociationType Chambre
	 * @AssociationMultiplicity 0..1
	 */
	public $_unnamed_Chambre_;

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getIdReservation() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param String aIdReservation
	 * @return void
	 * @ParamType aIdReservation String
	 * @ReturnType void
	 */
	public function setIdReservation(String $aIdReservation) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getIdChambre() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param String aIdChambre
	 * @return void
	 * @ParamType aIdChambre String
	 * @ReturnType void
	 */
	public function setIdChambre(String $aIdChambre) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Date
	 * @ReturnType Date
	 */
	public function getDateDépart() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Date aDateDépart
	 * @return void
	 * @ParamType aDateDépart Date
	 * @ReturnType void
	 */
	public function setDateDépart(Date_230 $aDateDépart) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Date
	 * @ReturnType Date
	 */
	public function getDateArrivée() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Date aDateArrivée
	 * @return void
	 * @ParamType aDateArrivée Date
	 * @ReturnType void
	 */
	public function setDateArrivée(Date_232 $aDateArrivée) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param Participant aUnnamed_Participant_
	 * @return void
	 * @ParamType aUnnamed_Participant_ Participant
	 * @ReturnType void
	 */
	public function setUnnamed_Participant_(Participant $aUnnamed_Participant_) {
		$this->_unnamed_Participant_ = $aUnnamed_Participant_;
	}

	/**
	 * @access public
	 * @return Participant
	 * @ReturnType Participant
	 */
	public function getUnnamed_Participant_() {
		return $this->_unnamed_Participant_;
	}

	/**
	 * @access public
	 * @param Chambre aUnnamed_Chambre_
	 * @return void
	 * @ParamType aUnnamed_Chambre_ Chambre
	 * @ReturnType void
	 */
	public function setUnnamed_Chambre_(Chambre $aUnnamed_Chambre_) {
		$this->_unnamed_Chambre_ = $aUnnamed_Chambre_;
	}

	/**
	 * @access public
	 * @return Chambre
	 * @ReturnType Chambre
	 */
	public function getUnnamed_Chambre_() {
		return $this->_unnamed_Chambre_;
	}
}
?>