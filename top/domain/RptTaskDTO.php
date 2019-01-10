<?php

/**
 * 报表下载任务信息对象
 * @author auto create
 */
class RptTaskDTO
{
	
	/** 
	 * 报表下载地址，空代表没有（当状态为任务创建或任务开始时，表示还未生成下载文件；当状态为下载完成时，表示没有查询到相关数据，因而未生成文件）
	 **/
	public $file_path;
	
	/** 
	 * 任务状态，0：任务创建，1：任务开始，2：任务完成，3：任务失败
	 **/
	public $status;
	
	/** 
	 * 下载任务id标识
	 **/
	public $task_id;	
}
?>