<?php
/**
 * TOP API: taobao.taojimu.page.publish request
 * 
 * @author auto create
 * @since 1.0, 2019.01.10
 */
class TaojimuPagePublishRequest
{
	/** 
	 * 落地页配置
	 **/
	private $pageConf;
	
	private $apiParas = array();
	
	public function setPageConf($pageConf)
	{
		$this->pageConf = $pageConf;
		$this->apiParas["page_conf"] = $pageConf;
	}

	public function getPageConf()
	{
		return $this->pageConf;
	}

	public function getApiMethodName()
	{
		return "taobao.taojimu.page.publish";
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
