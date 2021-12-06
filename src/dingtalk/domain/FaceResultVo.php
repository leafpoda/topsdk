<?php

/**
 * 父对象
 * @author auto create
 */
class FaceResultVo
{
	
	/** 
	 * 实人认证结果
	 **/
	public $certify_type;
	
	/** 
	 * 有人脸
	 **/
	public $has_face;
	
	/** 
	 * 人脸最后更新时间
	 **/
	public $last_modified;
	
	/** 
	 * 当前操作人的userid
	 **/
	public $operator_userid;
	
	/** 
	 * 当前操作人的姓名
	 **/
	public $operator_username;
	
	/** 
	 * 用户staffid
	 **/
	public $userid;	
}
?>