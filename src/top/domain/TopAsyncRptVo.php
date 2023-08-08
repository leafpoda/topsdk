<?php

/**
 * 批量结果集
 * @author auto create
 */
class TopAsyncRptVo
{
	
	/** 
	 * 场景id
	 **/
	public $biz_code;
	
	/** 
	 * 下载链接，仅获取下载链接接口返回
	 **/
	public $download_url;
	
	/** 
	 * 文件名称
	 **/
	public $file_name;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 任务状态
	 **/
	public $status;
	
	/** 
	 * 任务id
	 **/
	public $task_id;	
}
?>