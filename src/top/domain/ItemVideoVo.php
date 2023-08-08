<?php

/**
 * 单品创意视频
 * @author auto create
 */
class ItemVideoVo
{
	
	/** 
	 * 审核描述
	 **/
	public $audit_desc;
	
	/** 
	 * 创意审核状态,-10:to_promote,-4:tobeadd,-3:feed_handle,-2:reject,-1:handle,0:notchecked,1:passed,-9:qa_reject,-5:uneffect,-7:item_offshelf,-11:business_reject,-12:to_outer_audit,-13:handle_tanx,-14:part_reject,-15:to_rational_audit,-16:part_passed
	 **/
	public $audit_state;
	
	/** 
	 * 封面url
	 **/
	public $cover_url;
	
	/** 
	 * 视频时长
	 **/
	public $duration;
	
	/** 
	 * 对应的海棠id
	 **/
	public $haitang_id;
	
	/** 
	 * 视频高度
	 **/
	public $height;
	
	/** 
	 * 商品
	 **/
	public $item_id;
	
	/** 
	 * 封面url(海棠）
	 **/
	public $poster;
	
	/** 
	 * 创意来源,1:本地上传,2:BannerMaker,3:CreativeCenter,4:LuBan,5:直播广场,6:活动招商,7:海棠,8:原生创意
	 **/
	public $source;
	
	/** 
	 * 格式类型,1:图片,2:抄底文案,3:产品词,4:属性词,5:链接,51:淘积木URL,6:文案,7:长图,8:短文本,9:长文本,10:LOGO,11:视频,12:底图,13:tag,14:智能文案,15:促销词,16:标签词,17:优惠券,18:原价,19:折扣价,20:智能标题候选词,21:宝贝图 包括主图 长图 副图,22:宝贝标题,23:智能图,24:美观图,32:短标题,33:算法产出，仅供审核用图,34:淘宝素材中心图片,35:店铺名称,36:商品SKU图,37:商品详情页图,38:创意图,39:算法加工后的直播间封面图,40:算法加工后的直播间宝贝图,41:算法加工后的直播间宝贝标题文案,42:长图3:4,44:创意样式,45:主搜商品卡片轮播图,46:主搜商品3比4图,47:图标图片,48:二跳短视频,101:用户主标题,102:用户副标题,103:用户标题3,25:长图微视频,26:方图微视频,27:审核通过后原图做成的ppt视频,28:账号头像,29:素材组下非审核素材内容，主要传递数据用,30:鹿班商品图,31:算法剪辑视频,60:创意中心打包的图(只有外审使用),50:视频ID素材,124:自动审核通过,125:仅合理性审核的图片,126:仅合理性审核的文案
	 **/
	public $type;
	
	/** 
	 * 视频id
	 **/
	public $video_id;
	
	/** 
	 * 视频url
	 **/
	public $video_url;
	
	/** 
	 * 视频宽度
	 **/
	public $width;	
}
?>