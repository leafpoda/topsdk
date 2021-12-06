<?php

/**
 * 任务列表
 * @author auto create
 */
class TaskTopVo
{
	
	/** 
	 * 任务结果，分为agree和refuse。当status为CANCELED时，不需要传result
	 **/
	public $result;
	
	/** 
	 * 任务状态，分为CANCELED和COMPLETED
	 **/
	public $status;
	
	/** 
	 * 任务id
	 **/
	public $task_id;	
}
?>