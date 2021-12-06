<?php
/**
 * TOP API: taobao.jds.hluser.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class JdsHluserUpdateRequest
{
	/** 
	 * 回流信息是否开通买家端展示,可选值open,close
	 **/
	private $openForBuyer;
	
	/** 
	 * 为空,则默认是X_TO_SYSTEM,X_WAIT_ALLOCATION,X_OUT_WAREHOUSE 可选值是X_DOWNLOADED,X_TO_SYSTEM,X_SERVICE_AUDITED,X_FINANCE_AUDITED,X_ALLOCATION_NOTIFIED,X_WAIT_ALLOCATION,X_SORT_PRINTED,X_SEND_PRINTED,X_LOGISTICS_PRINTED,X_SORTED,X_EXAMINED,X_PACKAGED,X_WEIGHED,X_OUT_WAREHOUS
	 **/
	private $openNodes;
	
	private $apiParas = array();
	
	public function setOpenForBuyer($openForBuyer)
	{
		$this->openForBuyer = $openForBuyer;
		$this->apiParas["open_for_buyer"] = $openForBuyer;
	}

	public function getOpenForBuyer()
	{
		return $this->openForBuyer;
	}

	public function setOpenNodes($openNodes)
	{
		$this->openNodes = $openNodes;
		$this->apiParas["open_nodes"] = $openNodes;
	}

	public function getOpenNodes()
	{
		return $this->openNodes;
	}

	public function getApiMethodName()
	{
		return "taobao.jds.hluser.update";
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
