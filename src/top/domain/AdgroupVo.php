<?php

/**
 * 单元计划
 * @author auto create
 */
class AdgroupVo
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 单元名称
	 **/
	public $adgroup_name;
	
	/** 
	 * 单元智能出价信息
	 **/
	public $adgroup_ocpc;
	
	/** 
	 * 视频组件id,0:宝贝链接,3:订阅店铺,5:直播,6:加购,7:收藏加购,8:入会有礼,12:关注有礼,11:直播联动,10:自定义模板,13:同店搜
	 **/
	public $alive_group_id;
	
	/** 
	 * 视频组件名称
	 **/
	public $alive_group_name;
	
	/** 
	 * 审核拒绝原因
	 **/
	public $audit_reason;
	
	/** 
	 * 风控审核状态,-1:待审核,0:后台下线状态,1:后台上线状态
	 **/
	public $audit_status;
	
	/** 
	 * 智能创意生成状态,success:合成成功,fail:合成失败
	 **/
	public $black_creative_status;
	
	/** 
	 * 计划id,计划已经存在场景必填,eg:添加主体、编辑计划状态等场景
	 **/
	public $campaign_id;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 前端展示状态,pause:暂停推广,start:正在推广,terminate:结束推广,wait:等待推广,pending:准备推广,wait_pay:计划未付款
	 **/
	public $display_status;
	
	/** 
	 * 主体类型对应的物料信息
	 **/
	public $material;
	
	/** 
	 * 投放状态,-1:未进入投放状态,0:用户设置状态-下线,1:用户设置状态-上线,2:合同未生效,9:投放结束,105:待支付
	 **/
	public $online_status;
	
	/** 
	 * 推广主体类型,item:商品,item_private_mini:独享橱窗,shop:店铺,content:内容,short_video:短视频,user_define:自定义;
	 **/
	public $promotion_type;
	
	/** 
	 * 推广子主体类型,item:商品，item_private_mini:独享橱窗，shop:店铺，you_hao_huo:有好货，picture:图文，short_video:短视频，live_room:直播间，live_spot:看点，tao_blocks:淘积木，user_define_url:自定义url
	 **/
	public $sub_promotion_type;	
}
?>