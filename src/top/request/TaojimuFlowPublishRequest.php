<?php
/**
 * TOP API: taobao.taojimu.flow.publish request
 * 
 * @author auto create
 * @since 1.0, 2018.12.13
 */
class TaojimuFlowPublishRequest
{
	/** 
	 * 分流配置
	 **/
	private $conf;
	
	private $apiParas = array();
	
	public function setConf($conf)
	{
		$this->conf = $conf;
		$this->apiParas["conf"] = $conf;
	}

	public function getConf()
	{
		return $this->conf;
	}

	public function getApiMethodName()
	{
		return "taobao.taojimu.flow.publish";
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
