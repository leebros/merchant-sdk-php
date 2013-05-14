<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class GetBoardingDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\GetBoardingDetailsRequestType	 
	 */ 
	public $GetBoardingDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetBoardingDetailsReq>';
			if($this->GetBoardingDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetBoardingDetailsRequest>';
				$str .= $this->GetBoardingDetailsRequest->toXMLString();
				$str .= '</ns:GetBoardingDetailsRequest>';
			}
			$str .= '</ns:GetBoardingDetailsReq>';
			return $str;
	}
   
}
