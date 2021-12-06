<?php
/**
 * dingtalk API: dingtalk.oapi.retail.user.unbind request
 * 
 * @author auto create
 * @since 1.0, 2020.03.09
 */
class OapiRetailUserUnbindRequest
{
	/** 
	 * 中心组织下唯一Id
	 **/
	private $associateUnionId;
	
	/** 
	 * 业务身份
	 **/
	private $channel;
	
	/** 
	 * 主帐号ID
	 **/
	private $outerId;
	
	/** 
	 * 子帐号ID
	 **/
	private $subOuterId;
	
	private $apiParas = array();
	
	public function setAssociateUnionId($associateUnionId)
	{
		$this->associateUnionId = $associateUnionId;
		$this->apiParas["associate_union_id"] = $associateUnionId;
	}

	public function getAssociateUnionId()
	{
		return $this->associateUnionId;
	}

	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setSubOuterId($subOuterId)
	{
		$this->subOuterId = $subOuterId;
		$this->apiParas["sub_outer_id"] = $subOuterId;
	}

	public function getSubOuterId()
	{
		return $this->subOuterId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.retail.user.unbind";
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
