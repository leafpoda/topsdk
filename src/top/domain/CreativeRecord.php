<?php

/**
 * 创意修改记录对象
 * @author auto create
 */
class CreativeRecord
{
	
	/** 
	 * 审核拒绝原因描述
	 **/
	public $audit_desc;
	
	/** 
	 * 审核状态： audit_wait-待审核；audit_pass-审核通过(上线)；audit_reject-审核拒绝；默认为audit_pass。
	 **/
	public $audit_status;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 关键词id
	 **/
	public $creative_id;
	
	/** 
	 * 创意图片地址，必须是推广组对应商品的图片之一
	 **/
	public $img_url;
	
	/** 
	 * 系统记录最后修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 创意被修改的时间
	 **/
	public $modify_time;
	
	/** 
	 * 主人昵称
	 **/
	public $nick;
	
	/** 
	 * 修改前创意图片地址
	 **/
	public $old_img_url;
	
	/** 
	 * 修改前创意标题
	 **/
	public $old_title;
	
	/** 
	 * 创意标题，最多30个汉字
	 **/
	public $title;	
}
?>