<?php

/**
 * ocpc出价
 * @author auto create
 */
class AdgroupOcpcCommandVo
{
	
	/** 
	 * OCPC是否开启智能调价，true:是，false:否
	 **/
	public $enable_ocpc;
	
	/** 
	 * OCPC优化目标,关键词推广使用,conv:促进成交,coll_cart:促进加购,click:促进点击,new_item:新品冷启动,new_ad:新广告加速,deal_count:促进成交笔数,exposure_pv:促进曝光,mini_view:促进橱窗宝贝浏览个数,mini_interactive:促进橱窗宝贝互动,shop_potential:提升潜客人数,shop_interest_new:提升兴趣新客人数,shop_purchase_new:提升首购新客人数,shop_visit_new:提升访问新客人数,shop_repurchase:提升复购人数,high_cvr:提升高转换人群成交人数,deeplink_d:提升品牌发现人数-D,deeplink_e1:提升品牌种草人数-E,deeplink_e2:提升品牌互动人数-E,deeplink_p:提升品牌行动人数-P,deeplink_i:提升品牌首购人数-I,deeplink_n:提升品牌复购人数-N,deeplink_k:提升品牌挚爱人数-K,hf_grass_plant:预热种草,hf_impoundment:预售蓄水,hf_harvest:爆发收割,nd_click:提高互动量,nd_cart:提高加购量,nd_deal:提高成交量
	 **/
	public $ocpc_marketing_aim;
	
	/** 
	 * OCPC溢价比例
	 **/
	public $ocpc_ratio;	
}
?>