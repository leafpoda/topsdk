<?php
/**
 * TOP API: taobao.crm.service.channel.shortlink.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CrmServiceChannelShortlinkCreateRequest
{
	/** 
	 * 淘短链类型：LT_ITEM（商品淘短链）,LT_SHOP（店铺首页淘短链）,LT_ACTIVITY（活动页淘短链）,LT_TRADE（订单详情页淘短链）。
	 **/
	private $linkType;
	
	/** 
	 * 类型为LT_ITEM时必须传入商品ID，类型为LT_SHOP时必须传入空值，类型为LT_ACTIVITY时传入活动页URL（URL必须是taobao.com,tmall.com,jaeapp.com这三个域名下的URL），类型为LT_TRADE时传入订单ID。
	 **/
	private $shortLinkData;
	
	/** 
	 * 淘短链名称（最多只能16个中文字符，类型为订单链接时传入订单ID）。
	 **/
	private $shortLinkName;
	
	private $apiParas = array();
	
	public function setLinkType($linkType)
	{
		$this->linkType = $linkType;
		$this->apiParas["link_type"] = $linkType;
	}

	public function getLinkType()
	{
		return $this->linkType;
	}

	public function setShortLinkData($shortLinkData)
	{
		$this->shortLinkData = $shortLinkData;
		$this->apiParas["short_link_data"] = $shortLinkData;
	}

	public function getShortLinkData()
	{
		return $this->shortLinkData;
	}

	public function setShortLinkName($shortLinkName)
	{
		$this->shortLinkName = $shortLinkName;
		$this->apiParas["short_link_name"] = $shortLinkName;
	}

	public function getShortLinkName()
	{
		return $this->shortLinkName;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.service.channel.shortlink.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->linkType,"linkType");
		RequestCheckUtil::checkNotNull($this->shortLinkName,"shortLinkName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
