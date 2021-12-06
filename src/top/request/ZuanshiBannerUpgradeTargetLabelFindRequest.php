<?php
/**
 * TOP API: taobao.zuanshi.banner.upgrade.target.label.find request
 * 
 * @author auto create
 * @since 1.0, 2019.04.08
 */
class ZuanshiBannerUpgradeTargetLabelFindRequest
{
	/** 
	 * 计划类型(cpm/cpc)
	 **/
	private $campaignType;
	
	/** 
	 * 选项名称，用于搜索
	 **/
	private $optionName;
	
	/** 
	 * 当前页要显示数据的起始位置
	 **/
	private $optionOffset;
	
	/** 
	 * 选项分页每页数量
	 **/
	private $optionPageSize;
	
	/** 
	 * 定向类型
	 **/
	private $targetType;
	
	private $apiParas = array();
	
	public function setCampaignType($campaignType)
	{
		$this->campaignType = $campaignType;
		$this->apiParas["campaign_type"] = $campaignType;
	}

	public function getCampaignType()
	{
		return $this->campaignType;
	}

	public function setOptionName($optionName)
	{
		$this->optionName = $optionName;
		$this->apiParas["option_name"] = $optionName;
	}

	public function getOptionName()
	{
		return $this->optionName;
	}

	public function setOptionOffset($optionOffset)
	{
		$this->optionOffset = $optionOffset;
		$this->apiParas["option_offset"] = $optionOffset;
	}

	public function getOptionOffset()
	{
		return $this->optionOffset;
	}

	public function setOptionPageSize($optionPageSize)
	{
		$this->optionPageSize = $optionPageSize;
		$this->apiParas["option_page_size"] = $optionPageSize;
	}

	public function getOptionPageSize()
	{
		return $this->optionPageSize;
	}

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
		$this->apiParas["target_type"] = $targetType;
	}

	public function getTargetType()
	{
		return $this->targetType;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.upgrade.target.label.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignType,"campaignType");
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
