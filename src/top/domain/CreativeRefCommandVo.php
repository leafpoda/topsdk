<?php

/**
 * list
 * @author auto create
 */
class CreativeRefCommandVo
{
	
	/** 
	 * 增加智能创意,true:是,false:否
	 **/
	public $add_auto_creative;
	
	/** 
	 * 主图视频,true:是,false:否
	 **/
	public $add_main_pic_video;
	
	/** 
	 * 单元id,单元已经存在场景必填
	 **/
	public $adgroup_id;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 创意id
	 **/
	public $creative_id;
	
	/** 
	 * 创意id列表
	 **/
	public $creative_id_list;
	
	/** 
	 * 主副图素材
	 **/
	public $material_image_info_list;	
}
?>