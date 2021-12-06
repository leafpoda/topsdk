<?php

/**
 * 调用结果
 * @author auto create
 */
class SingleResultDto
{
	
	/** 
	 * 错误编码
	 **/
	public $error_code;
	
	/** 
	 * 错误描述
	 **/
	public $error_desc;
	
	/** 
	 * 是否幂等
	 **/
	public $is_idempotent;
	
	/** 
	 * 是否需要重试
	 **/
	public $is_retry;
	
	/** 
	 * 业务返回结果
	 **/
	public $result;
	
	/** 
	 * 是否调用成功
	 **/
	public $success;
	
	/** 
	 * 调用码
	 **/
	public $trace_id;	
}
?>