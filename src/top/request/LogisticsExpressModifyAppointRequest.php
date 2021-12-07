<?php
/**
 * TOP API: taobao.logistics.express.modify.appoint request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class LogisticsExpressModifyAppointRequest
{
	/** 
	 * 改约请求对象
	 **/
	private $expressModifyAppointTopRequest;
	
	private $apiParas = array();
	
	public function setExpressModifyAppointTopRequest($expressModifyAppointTopRequest)
	{
		$this->expressModifyAppointTopRequest = $expressModifyAppointTopRequest;
		$this->apiParas["express_modify_appoint_top_request"] = $expressModifyAppointTopRequest;
	}

	public function getExpressModifyAppointTopRequest()
	{
		return $this->expressModifyAppointTopRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.express.modify.appoint";
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
