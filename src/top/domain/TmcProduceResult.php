<?php

/**
 * 发送结果，与发送时的参数顺序一致。如果is_all_success为true时，不用校验result是否成功
 * @author auto create
 */
class TmcProduceResult
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_message;
	
	/** 
	 * 是否成功
	 **/
	public $is_success;	
}
?>