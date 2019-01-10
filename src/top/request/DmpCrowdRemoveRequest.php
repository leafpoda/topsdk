<?php
/**
 * TOP API: taobao.dmp.crowd.remove request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class DmpCrowdRemoveRequest
{
	/** 
	 * 人群ID,必须为自己的人群
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
		return "taobao.dmp.crowd.remove";
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
