<?php

/**
 * 数据结果
 * @author auto create
 */
class Creative
{
	
	/** 
	 * 待审核：-4,-1,0，审核通过：1，审核拒绝：-2,-5,-9
	 **/
	public $audit_status;
	
	/** 
	 * 审核时间
	 **/
	public $audit_time;
	
	/** 
	 * 审核拒绝原因
	 **/
	public $block_reasons;
	
	/** 
	 * 类目id
	 **/
	public $cat_id;
	
	/** 
	 * 类目名称
	 **/
	public $cat_name;
	
	/** 
	 * 点击链接
	 **/
	public $click_url;
	
	/** 
	 * gmtCreate
	 **/
	public $create_time;
	
	/** 
	 * 创意等级
	 **/
	public $creative_level;
	
	/** 
	 * 创意尺寸
	 **/
	public $creative_size;
	
	/** 
	 * expireTime
	 **/
	public $expire_time;
	
	/** 
	 * 创意格式
	 **/
	public $format;
	
	/** 
	 * 创意ID
	 **/
	public $id;
	
	/** 
	 * 图片地址
	 **/
	public $image_path;
	
	/** 
	 * 创意对应的素材
	 **/
	public $materials;
	
	/** 
	 * gmtModified
	 **/
	public $modified_time;
	
	/** 
	 * 是否支持多个素材 1：支持 0：不支持
	 **/
	public $multi_material;
	
	/** 
	 * 创意名称
	 **/
	public $name;
	
	/** 
	 * 0：非标尺创意，1：标尺创意，2：创意包
	 **/
	public $package_type;
	
	/** 
	 * 标尺创意裂变后的创意
	 **/
	public $sub_creatives;
	
	/** 
	 * 文字链创意内容
	 **/
	public $txt_value;	
}
?>