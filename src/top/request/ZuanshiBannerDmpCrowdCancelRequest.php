<?php
/**
 * TOP API: taobao.zuanshi.banner.dmp.crowd.cancel request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerDmpCrowdCancelRequest
{
	/** 
	 * DMP人群ID
	 **/
	private $crowdId;
	
	private $apiParas = array();
	
	public function setCrowdId($crowdId)
	{
		$this->crowdId = $crowdId;
		$this->apiParas["crowd_id"] = $crowdId;
	}

	public function getCrowdId()
	{
		return $this->crowdId;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.dmp.crowd.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->crowdId,"crowdId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
