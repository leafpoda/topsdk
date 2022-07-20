<?php

/**
 * 图片信息列表
 * @author auto create
 */
class Picture
{
	
	/** 
	 * 图片上传的来源，有电脑版本宝贝发布，手机版本宝贝发布
	 **/
	public $client_type;
	
	/** 
	 * 图片的创建时间
	 **/
	public $created;
	
	/** 
	 * 图片是否删除的标记
	 **/
	public $deleted;
	
	/** 
	 * 图片在后台处理之后的md5值当md5值为32位长度的字符串时为图片搬家后的文件md5验证码md5值为长整数时为图片替换后的时间戳
	 **/
	public $md5;
	
	/** 
	 * 图片的修改时间
	 **/
	public $modified;
	
	/** 
	 * 图片分类ID
	 **/
	public $picture_category_id;
	
	/** 
	 * 图片ID
	 **/
	public $picture_id;
	
	/** 
	 * 返回的是绝对路径如：http://img07.taobaocdn.com/imgextra/i7/22670458/T2dD0kXb4cXXXXXXXX_!!22670458.jpg
	 **/
	public $picture_path;
	
	/** 
	 * 图片相素,格式:长x宽，如450x150
	 **/
	public $pixel;
	
	/** 
	 * 图片是否被引用
	 **/
	public $referenced;
	
	/** 
	 * 图片大小,bite单位
	 **/
	public $sizes;
	
	/** 
	 * 图片状态,0 未审核没冻结 1  冻结 2 审核通过
	 **/
	public $status;
	
	/** 
	 * 图片标题
	 **/
	public $title;	
}
?>