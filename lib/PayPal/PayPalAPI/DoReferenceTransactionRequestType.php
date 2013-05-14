<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * This flag indicates that the response should include
 * FMFDetails 
 */
class DoReferenceTransactionRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\DoReferenceTransactionRequestDetailsType	 
	 */ 
	public $DoReferenceTransactionRequestDetails;

	/**
	 * This flag indicates that the response should include
	 * FMFDetails
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $ReturnFMFDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($DoReferenceTransactionRequestDetails = NULL) {
		$this->DoReferenceTransactionRequestDetails = $DoReferenceTransactionRequestDetails;
	}


   
}
