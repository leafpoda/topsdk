<?php
/**
 * TOP API: taobao.unidesk.rta.assets.creativecomponent.add request
 * 
 * @author auto create
 * @since 1.0, 2023.02.14
 */
class UnideskRtaAssetsCreativecomponentAddRequest
{
	/** 
	 * 组件详细信息
	 **/
	private $creativeComponentTopDto;
	
	private $apiParas = array();
	
	public function setCreativeComponentTopDto($creativeComponentTopDto)
	{
		$this->creativeComponentTopDto = $creativeComponentTopDto;
		$this->apiParas["creative_component_top_dto"] = $creativeComponentTopDto;
	}

	public function getCreativeComponentTopDto()
	{
		return $this->creativeComponentTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.creativecomponent.add";
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
