<?php
/**
 * TOP API: taobao.simba.campaign.platform.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class SimbaCampaignPlatformUpdateRequest
{
	/** 
	 * 推广计划Id
	 **/
	private $campaignId;
	
	/** 
	 * 已经废弃
	 **/
	private $mobileDiscount;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 非搜索投放频道代码数组，频道代码必须是直通车非搜索类频道列表中的值。1、淘宝站内定向；2、站外定向；8、无线站内定向；16、无线站外定向
	 **/
	private $nonsearchChannels;
	
	/** 
	 * 已经废弃
	 **/
	private $outsideDiscount;
	
	/** 
	 * 搜索投放频道代码数组，频道代码必须是直通车搜索类频道列表中的值。1：淘宝站内搜索，8、无线站内搜索；16:无线站外搜索
	 **/
	private $searchChannels;
	
	private $apiParas = array();
	
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setMobileDiscount($mobileDiscount)
	{
		$this->mobileDiscount = $mobileDiscount;
		$this->apiParas["mobile_discount"] = $mobileDiscount;
	}

	public function getMobileDiscount()
	{
		return $this->mobileDiscount;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setNonsearchChannels($nonsearchChannels)
	{
		$this->nonsearchChannels = $nonsearchChannels;
		$this->apiParas["nonsearch_channels"] = $nonsearchChannels;
	}

	public function getNonsearchChannels()
	{
		return $this->nonsearchChannels;
	}

	public function setOutsideDiscount($outsideDiscount)
	{
		$this->outsideDiscount = $outsideDiscount;
		$this->apiParas["outside_discount"] = $outsideDiscount;
	}

	public function getOutsideDiscount()
	{
		return $this->outsideDiscount;
	}

	public function setSearchChannels($searchChannels)
	{
		$this->searchChannels = $searchChannels;
		$this->apiParas["search_channels"] = $searchChannels;
	}

	public function getSearchChannels()
	{
		return $this->searchChannels;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.campaign.platform.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkMaxListSize($this->nonsearchChannels,10,"nonsearchChannels");
		RequestCheckUtil::checkMaxValue($this->outsideDiscount,200,"outsideDiscount");
		RequestCheckUtil::checkMinValue($this->outsideDiscount,1,"outsideDiscount");
		RequestCheckUtil::checkNotNull($this->searchChannels,"searchChannels");
		RequestCheckUtil::checkMaxListSize($this->searchChannels,10,"searchChannels");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
