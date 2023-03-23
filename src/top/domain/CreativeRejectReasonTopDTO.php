<?php

/**
 * 审核拒绝详情
 * @author auto create
 */
class CreativeRejectReasonTopDTO
{
	
	/** 
	 * 图片id列表， 素材类型为"图片"时填充
	 **/
	public $images;
	
	/** 
	 * 素材类型：创意、素材、图片、标题、视频、副标题、头图、摘要
	 **/
	public $material_type;
	
	/** 
	 * 审核拒绝项
	 **/
	public $reject_item;
	
	/** 
	 * 审核拒绝原因
	 **/
	public $reject_reason;
	
	/** 
	 * 标题，素材类型为"标题"时填充
	 **/
	public $title;
	
	/** 
	 * 视频id列表， 素材类型为"视频"时填充
	 **/
	public $videos;	
}
?>