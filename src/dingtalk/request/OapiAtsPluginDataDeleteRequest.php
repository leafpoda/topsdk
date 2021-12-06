<?php
/**
 * dingtalk API: dingtalk.oapi.ats.plugin.data.delete request
 * 
 * @author auto create
 * @since 1.0, 2020.11.02
 */
class OapiAtsPluginDataDeleteRequest
{
	/** 
	 * 业务唯一标识，接入前请提前沟通
	 **/
	private $bizCode;
	
	/** 
	 * 推送头信息
	 **/
	private $header;
	
	/** 
	 * 外部业务唯一ID
	 **/
	private $outId;
	
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

	public function setHeader($header)
	{
		$this->header = $header;
		$this->apiParas["header"] = $header;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ats.plugin.data.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->outId,"outId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
