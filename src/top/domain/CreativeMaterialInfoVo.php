<?php

/**
 * 创意物料信息
 * @author auto create
 */
class CreativeMaterialInfoVo
{
	
	/** 
	 * 是否有智能创意,true:是,false:否
	 **/
	public $has_auto_creative;
	
	/** 
	 * 是否有主副图素材,true:是,false:否
	 **/
	public $has_item_picture;
	
	/** 
	 * 是否有主图视频,true:是,false:否
	 **/
	public $has_mini_detail_video;
	
	/** 
	 * 是不是大促商品,true:是,false:否
	 **/
	public $is_active_item;
	
	/** 
	 * 是否特殊类目,true:是,false:否
	 **/
	public $is_special_category;
	
	/** 
	 * 物料id
	 **/
	public $material_id;
	
	/** 
	 * 物料图片信息
	 **/
	public $material_image_info_list;
	
	/** 
	 * 主图视频id
	 **/
	public $mini_detail_video_id;	
}
?>