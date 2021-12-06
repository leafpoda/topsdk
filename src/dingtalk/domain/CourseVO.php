<?php

/**
 * list
 * @author auto create
 */
class CourseVO
{
	
	/** 
	 * 业务唯一键
	 **/
	public $biz_key;
	
	/** 
	 * 课程编码
	 **/
	public $code;
	
	/** 
	 * 结束时间，Unix毫秒时间戳
	 **/
	public $end_time;
	
	/** 
	 * 课程介绍
	 **/
	public $introduce;
	
	/** 
	 * 课程名称
	 **/
	public $name;
	
	/** 
	 * 开始时间，Unix毫秒时间戳
	 **/
	public $start_time;
	
	/** 
	 * 老的的组织CorpId
	 **/
	public $teacher_corpid;
	
	/** 
	 * 老师的用户ID
	 **/
	public $teacher_userid;	
}
?>