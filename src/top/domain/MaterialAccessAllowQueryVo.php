<?php

/**
 * materialAccessAllowQueryVO
 * @author auto create
 */
class MaterialAccessAllowQueryVo
{
	
	/** 
	 * 宝贝id集合
	 **/
	public $material_id_list;
	
	/** 
	 * 物料类型,1:淘宝宝贝,2:淘宝店铺,3:cms LandingPage页面,4:cms 分流总页面,5:自定义,201:PC店铺LandingPage页面,202:无线店铺LandingPage页面,203:内容LandingPage页面,204:淘宝直播,210:淘宝直播用户ID,205:有好货,209:无线店铺Tab3页面,212:超级品牌日LandingPage页面,211:超级发布会LandingPage页面,301:ICBU商品,302:ICBU PC店铺LandingPage页面,303:ICBU PC店铺,8:用户ID,9:信息流淘积木用户ID,10:口碑用户ID,206:店铺优惠券,207:商品优惠券,208:直播单品,309:直播间商品半屏卡,304:1688商品,305:内容平台-短视频,306:附近门店-用户ID,307:饿了么-菜品,401:LAZADA商品,501:飞猪酒店,502:飞猪商品,503:飞猪短信,601:淘积木页面,1001:AE宝贝,1101:淘宝宝贝SKU,310:内容平台-订阅内容
	 **/
	public $material_type;
	
	/** 
	 * 是否需要校验资质,true:校验,false:不校验
	 **/
	public $need_qualification;
	
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