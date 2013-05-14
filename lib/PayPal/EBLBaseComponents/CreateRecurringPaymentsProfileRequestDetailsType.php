<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * Billing Agreement token (required if Express Checkout) 
 */
class CreateRecurringPaymentsProfileRequestDetailsType  
   extends PPXmlMessage{

	/**
	 * Billing Agreement token (required if Express Checkout) 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Token;

	/**
	 * Information about the credit card to be charged (required if
	 * Direct Payment) 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\CreditCardDetailsType	 
	 */ 
	public $CreditCard;

	/**
	 * Customer Information for this Recurring Payments 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\RecurringPaymentsProfileDetailsType	 
	 */ 
	public $RecurringPaymentsProfileDetails;

	/**
	 * Schedule Information for this Recurring Payments 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ScheduleDetailsType	 
	 */ 
	public $ScheduleDetails;

	/**
	 * Information about the Item Details. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\PaymentDetailsItemType	 
	 */ 
	public $PaymentDetailsItem;

	/**
	 * Constructor with arguments
	 */
	public function __construct($RecurringPaymentsProfileDetails = NULL, $ScheduleDetails = NULL) {
		$this->RecurringPaymentsProfileDetails = $RecurringPaymentsProfileDetails;
		$this->ScheduleDetails = $ScheduleDetails;
	}


   
}
