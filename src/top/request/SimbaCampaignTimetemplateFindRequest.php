<?php
/**
 * TOP API: taobao.simba.campaign.timetemplate.find request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class SimbaCampaignTimetemplateFindRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.simba.campaign.timetemplate.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
