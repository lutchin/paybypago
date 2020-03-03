<?php
namespace Luchenok\Paybypago;


class PaybypagoSite implements PaybypagoInterface,PaybypagoPayInterface
{
    //parameters list
    protected  $merchantID;//			= "Your merchant id";
        //mandatory!
    protected  $url_redirect;//		= "Your site's result page";
        //optional
    protected  $url_notify;//			= "Your callback url";
        //depricated
    protected  $notification_url;//   = "Your new callback url format
     //optional
	protected  $trans_comment;//		= "";
	//optional
	protected  $trans_refNum;//		= getToken(12);
	//optional
	protected  $trans_installments;// = "1";
	//optional
	protected  $trans_amount;//		= "99.00";
	//mandatory!
	protected  $trans_currency;//		= "EUR";
	//mandatory!
	protected  $disp_paymentType;//	= "CC";
	//mandatory!
	protected  $disp_payFor;//		= "Purchase";
	//optional
	protected  $disp_recurring;//		= "0";
	//optional
	protected  $disp_lng;//			= "en-us";
	//optional
	protected  $disp_mobile;//		= "auto";
	//optional
	protected  $PersonalHashKey;//	= "Your hash key";

    public function __construct()
    {

    }

    public function settings($merchantID,$PersonalHashKey)
    {
        $this->merchantID = $merchantID;
        $this->PersonalHashKey = $PersonalHashKey;
    }

    public function setUrl($url_redirect = '',$url_notify = '', $notification_url = '')
    {
        $this->url_redirect = $url_redirect;
        $this->url_notify = $url_notify;
        $this->notification_url =$notification_url;
    }

    public function payment($options = [])
    {
        $data = '?';
        foreach ($options as $option =>$value)
        {
            $data .= $option.'='.$value.'&';
        }

        return $data.$this->signature();
    }

    public function signature()
    {
        // TODO: Implement signature() method.
    }
}