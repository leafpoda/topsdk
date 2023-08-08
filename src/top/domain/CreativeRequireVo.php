<?php

/**
 * 结果集
 * @author auto create
 */
class CreativeRequireVo
{
	
	/** 
	 * 创意添加途径,video:视频创意,creativeCool:创意库,local:图片,template:模板创意
	 **/
	public $creative_add_operators;
	
	/** 
	 * 创意形式信息
	 **/
	public $creative_form_infos;
	
	/** 
	 * 是否有主副图素材,true:是,false:否
	 **/
	public $has_item_picture;
	
	/** 
	 * 是否有主图视频,true:是,false:否
	 **/
	public $has_mini_detail_video;
	
	/** 
	 * 是否特殊类目,true:是,false:否
	 **/
	public $is_special_category;
	
	/** 
	 * 创意物料信息
	 **/
	public $material_info_list;	
}
?>