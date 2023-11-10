<?php
/**
 * TOP API: taobao.zuanshi.cjzz.creative.modifystatus request
 * 
 * @author auto create
 * @since 1.0, 2023.11.10
 */
class ZuanshiCjzzCreativeModifystatusRequest
{
	/** 
	 * 计划类型
	 **/
	private $bizCode;
	
	/** 
	 * 创意id列表
	 **/
	private $creativeIdList;
	
	/** 
	 * 创意的状态
	 **/
	private $onlineStatus;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setCreativeIdList($creativeIdList)
	{
		$this->creativeIdList = $creativeIdList;
		$this->apiParas["creative_id_list"] = $creativeIdList;
	}

	public function getCreativeIdList()
	{
		return $this->creativeIdList;
	}

	public function setOnlineStatus($onlineStatus)
	{
		$this->onlineStatus = $onlineStatus;
		$this->apiParas["online_status"] = $onlineStatus;
	}

	public function getOnlineStatus()
	{
		return $this->onlineStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.creative.modifystatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->creativeIdList,"creativeIdList");
		RequestCheckUtil::checkMaxListSize($this->creativeIdList,999,"creativeIdList");
		RequestCheckUtil::checkNotNull($this->onlineStatus,"onlineStatus");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
