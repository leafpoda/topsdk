<?php

/**
 * 返回结果
 * @author auto create
 */
class CreativeResTopDto
{
	
	/** 
	 * 创意审核状态, 审核通过：1，-16 待审核：-12，0，-1，-3，-4 审核拒绝：-2，-5 审核中：-999161
	 **/
	public $audit_status;
	
	/** 
	 * 创意落地页地址
	 **/
	public $click_url;
	
	/** 
	 * 创意创建时间
	 **/
	public $create_time;
	
	/** 
	 * 创意格式，2表示图片 10表示模板 12表示视频
	 **/
	public $creative_format;
	
	/** 
	 * 创意id
	 **/
	public $creative_id;
	
	/** 
	 * 创意等级
	 **/
	public $creative_level;
	
	/** 
	 * 创意名称
	 **/
	public $creative_name;
	
	/** 
	 * 创意尺寸
	 **/
	public $creative_size_list;
	
	/** 
	 * 创意类型，1静态创意，5智能创意
	 **/
	public $creative_type;
	
	/** 
	 * 创意结束时间
	 **/
	public $end_time;
	
	/** 
	 * 图片地址
	 **/
	public $image_path;
	
	/** 
	 * 创意状态, 1表示在线，0表示下线即回收状态
	 **/
	public $online_status;
	
	/** 
	 * 主体id
	 **/
	public $promotion_id;
	
	/** 
	 * 主体类型，1商品 2橱窗 3店铺 9自定义url
	 **/
	public $promotion_type;
	
	/** 
	 * 创意来源，1表示本地上传 3表示模板创意 8表示原生创意
	 **/
	public $source;
	
	/** 
	 * 创意开始时间
	 **/
	public $start_time;
	
	/** 
	 * 子主体类型，11商品 21橱窗 31店铺 92自定义url
	 **/
	public $sub_promotion_type;
	
	/** 
	 * 创意模板id
	 **/
	public $template_id;
	
	/** 
	 * 创意标题
	 **/
	public $title;	
}
?>