<?php

/**
 * 返回结果对象
 * @author auto create
 */
class ResultDTO
{
	
	/** 
	 * 人群列表
	 **/
	public $crowd_list;
	
	/** 
	 * 成功
	 **/
	public $message;
	
	/** 
	 * 调用是否成功,true-成功，false-失败
	 **/
	public $success;
	
	/** 
	 * 定向总个数
	 **/
	public $total_count;	
}
?>