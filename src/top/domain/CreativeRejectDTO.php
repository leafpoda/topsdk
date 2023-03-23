<?php

/**
 * 审核详细信息
 * @author auto create
 */
class CreativeRejectDTO
{
	
	/** 
	 * 图片
	 **/
	public $images;
	
	/** 
	 * 素材类型：创意、素材、图片、标题、视频、副标题、头图、摘要
	 **/
	public $material_type;
	
	/** 
	 * 拒绝项
	 **/
	public $reject_item;
	
	/** 
	 * 拒绝原因
	 **/
	public $reject_reason;
	
	/** 
	 * 标题
	 **/
	public $title;
	
	/** 
	 * 视频
	 **/
	public $videos;	
}
?>