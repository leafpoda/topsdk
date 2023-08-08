<?php

/**
 * campaignGroupCommandVO
 * @author auto create
 */
class CampaignGroupCommandVo
{
	
	/** 
	 * 业务身份,枚举信息同'account.get.can.use.bizcode'服务返回结果
	 **/
	public $biz_code;
	
	/** 
	 * 计划组id,计划组已经存在场景必填
	 **/
	public $campaign_group_id;
	
	/** 
	 * 计划组名称
	 **/
	public $campaign_group_name;	
}
?>