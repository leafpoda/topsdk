<?php
/**
 * TOP API: taobao.fastlive.duration.target.validlist request
 * 
 * @author auto create
 * @since 1.0, 2021.03.17
 */
class FastliveDurationTargetValidlistRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.target.validlist";
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
