<?php

/**
 * 任务结果信息
 * @author auto create
 */
class MaterialTaskResultTopDTO
{
	
	/** 
	 * 结果数据大小byte
	 **/
	public $data_size;
	
	/** 
	 * 任务创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 任务id
	 **/
	public $id;
	
	/** 
	 * 任务名称
	 **/
	public $name;
	
	/** 
	 * 素材结果数据
	 **/
	public $results;
	
	/** 
	 * 任务状态，1：待运行，2：运行中，3：运行成功，4：运行失败
	 **/
	public $status;	
}
?>