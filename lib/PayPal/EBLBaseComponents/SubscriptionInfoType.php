<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * @hasAttribute
 * SubscriptionInfoType Information about a PayPal
 * Subscription. 
 */
class SubscriptionInfoType  
   extends PPXmlMessage{

	/**
	 * ID generated by PayPal for the subscriber. Character length
	 * and limitations: no limit
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\string	 
	 */ 
	public $SubscriptionID;

	/**
	 * Subscription start date 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $SubscriptionDate;

	/**
	 * Date when the subscription modification will be effective 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $EffectiveDate;

	/**
	 * Date PayPal will retry a failed subscription payment 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $RetryTime;

	/**
	 * Username generated by PayPal and given to subscriber to
	 * access the subscription. Character length and limitations:
	 * 64 alphanumeric single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Username;

	/**
	 * Password generated by PayPal and given to subscriber to
	 * access the subscription. For security, the value of the
	 * password is hashed. Character length and limitations: 128
	 * alphanumeric single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Password;

	/**
	 * The number of payment installments that will occur at the
	 * regular rate. Character length and limitations: no limit
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Recurrences;

	/**
	 * Subscription duration and charges
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\SubscriptionTermsType	 
	 */ 
	public $Terms;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string	 
	 */ 
	public $reattempt;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string	 
	 */ 
	public $recurring;


}
