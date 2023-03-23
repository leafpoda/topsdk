<?php

/**
 * 出参
 * @author auto create
 */
class MediaLandingPageTopDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 落地页id
	 **/
	public $id;
	
	/** 
	 * 动图落地页特有参数
	 **/
	public $kinetograph_landing_page;
	
	/** 
	 * 落地页
	 **/
	public $landing_page;
	
	/** 
	 * 落地页名称
	 **/
	public $name;
	
	/** 
	 * 非竖版原生页特有参数
	 **/
	public $non_vertical_landing_page;
	
	/** 
	 * 落地页审核被拒理由
	 **/
	public $reject_reason;
	
	/** 
	 * 分享描述
	 **/
	public $share_description;
	
	/** 
	 * 分享标题
	 **/
	public $share_title;
	
	/** 
	 * 落地页状态：1：正常状态，2：已删除，3：编辑中，4：待审核，5：审核通过，6：审核不过
	 **/
	public $status;
	
	/** 
	 * 落地页类型：1：竖版原生页,2：非竖版原生页,3：微信视频号,4：动图落地页
	 **/
	public $type;
	
	/** 
	 * 竖版原生页特有参数
	 **/
	public $vertical_landing_page;
	
	/** 
	 * 微信视频号落地页特有参数
	 **/
	public $wechat_channel_landing_page;	
}
?>