<?php
/**
 * TOP API: taobao.jds.trade.traces.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class JdsTradeTracesGetRequest
{
	/** 
	 * 是否返回用户的状态(是否存在)
	 **/
	private $returnUserStatus;
	
	/** 
	 * 淘宝的订单tid
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setReturnUserStatus($returnUserStatus)
	{
		$this->returnUserStatus = $returnUserStatus;
		$this->apiParas["return_user_status"] = $returnUserStatus;
	}

	public function getReturnUserStatus()
	{
		return $this->returnUserStatus;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.jds.trade.traces.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
