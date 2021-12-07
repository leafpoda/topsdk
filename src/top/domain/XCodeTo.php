<?php

/**
 * 二维码数据对像
 * @author auto create
 */
class XCodeTo
{
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 最后修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 记录ID
	 **/
	public $id;
	
	/** 
	 * 二维码图片地址
	 **/
	public $img_url;
	
	/** 
	 * 有效期结束时间，使用短链接跳转的，结束后不再可以访问
	 **/
	public $life_end;
	
	/** 
	 * 有效期开始时间
	 **/
	public $life_start;
	
	/** 
	 * 短连接关键字符
	 **/
	public $short_name;
	
	/** 
	 * 短连接
	 **/
	public $short_url;
	
	/** 
	 * 码的状态，1-生效，0-未生效，-1-逻辑删除。
	 **/
	public $status;
	
	/** 
	 * 所属用户ID，如果入参没有用户登录信息，则随机生成
	 **/
	public $user_id;	
}
?>