<?php

/**
 * 计划时间
 * @author auto create
 */
class LaunchTimeTopDto
{
	
	/** 
	 * 计划开始时间,需要为0点的时间，大于今天
	 **/
	public $begin_time;
	
	/** 
	 * 计划结束时间,需要为0点的时间
	 **/
	public $end_time;
	
	/** 
	 * 是否永远持续，持续推广为true
	 **/
	public $launch_forever;	
}
?>