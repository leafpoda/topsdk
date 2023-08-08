<?php
/**
 * TOP API: taobao.onebp.display.creative.add request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class OnebpDisplayCreativeAddRequest
{
	/** 
	 * 创意添加实体
	 **/
	private $creativeAdd;
	
	private $apiParas = array();
	
	public function setCreativeAdd($creativeAdd)
	{
		$this->creativeAdd = $creativeAdd;
		$this->apiParas["creative_add"] = $creativeAdd;
	}

	public function getCreativeAdd()
	{
		return $this->creativeAdd;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.creative.add";
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
