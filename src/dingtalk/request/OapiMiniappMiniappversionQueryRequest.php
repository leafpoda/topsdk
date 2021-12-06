<?php
/**
 * dingtalk API: dingtalk.oapi.miniapp.miniappversion.query request
 * 
 * @author auto create
 * @since 1.0, 2020.07.28
 */
class OapiMiniappMiniappversionQueryRequest
{
	/** 
	 * 查询参数
	 **/
	private $modelKey;
	
	private $apiParas = array();
	
	public function setModelKey($modelKey)
	{
		$this->modelKey = $modelKey;
		$this->apiParas["model_key"] = $modelKey;
	}

	public function getModelKey()
	{
		return $this->modelKey;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.miniapp.miniappversion.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->modelKey,"modelKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
