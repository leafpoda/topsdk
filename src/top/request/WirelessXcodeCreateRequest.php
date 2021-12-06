<?php
/**
 * TOP API: taobao.wireless.xcode.create request
 * 
 * @author auto create
 * @since 1.0, 2019.10.11
 */
class WirelessXcodeCreateRequest
{
	/** 
	 * 码平台开放的业务code
	 **/
	private $bizCode;
	
	/** 
	 * 原始内容/原始地址
	 **/
	private $content;
	
	/** 
	 * 普通二维码样式参数
	 **/
	private $style;
	
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

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setStyle($style)
	{
		$this->style = $style;
		$this->apiParas["style"] = $style;
	}

	public function getStyle()
	{
		return $this->style;
	}

	public function getApiMethodName()
	{
		return "taobao.wireless.xcode.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
