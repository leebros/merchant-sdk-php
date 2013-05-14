<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class TransactionSearchReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\TransactionSearchRequestType	 
	 */ 
	public $TransactionSearchRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:TransactionSearchReq>';
			if($this->TransactionSearchRequest != NULL)
			{
		   		$str .= '<ns:TransactionSearchRequest>';
				$str .= $this->TransactionSearchRequest->toXMLString();
				$str .= '</ns:TransactionSearchRequest>';
			}
			$str .= '</ns:TransactionSearchReq>';
			return $str;
	}
   
}
