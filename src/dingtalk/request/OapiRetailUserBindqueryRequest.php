<?php
/**
 * dingtalk API: dingtalk.oapi.retail.user.bindquery request
 * 
 * @author auto create
 * @since 1.0, 2020.03.09
 */
class OapiRetailUserBindqueryRequest
{
	/** 
	 * 虚拟组织下的唯一ID
	 **/
	private $associateUnionId;
	
	/** 
	 * 业务身份
	 **/
	private $channel;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.retail.user.bindquery";
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
