<?php
/**
 * TOP API: taobao.jds.refund.traces.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class JdsRefundTracesGetRequest
{
	/** 
	 * 淘宝的退款编号
	 **/
	private $refundId;
	
	/** 
	 * 是否返回用户状态(是否存在)
	 **/
	private $returnUserStatus;
	
	private $apiParas = array();
	
	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setReturnUserStatus($returnUserStatus)
	{
		$this->returnUserStatus = $returnUserStatus;
		$this->apiParas["return_user_status"] = $returnUserStatus;
	}

	public function getReturnUserStatus()
	{
		return $this->returnUserStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.jds.refund.traces.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkMinValue($this->refundId,1,"refundId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
