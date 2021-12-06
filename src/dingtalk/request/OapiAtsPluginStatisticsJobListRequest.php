<?php
/**
 * dingtalk API: dingtalk.oapi.ats.plugin.statistics.job.list request
 * 
 * @author auto create
 * @since 1.0, 2020.07.23
 */
class OapiAtsPluginStatisticsJobListRequest
{
	/** 
	 * 招聘业务标识
	 **/
	private $bizCode;
	
	/** 
	 * 分页游标位置，不传默认第一页
	 **/
	private $cursor;
	
	/** 
	 * 分页大小
	 **/
	private $size;
	
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

	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ats.plugin.statistics.job.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->size,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
