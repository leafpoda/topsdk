<?php

/**
 * 不可以使用的原因
 * @author auto create
 */
class AccessAllowedDto
{
	
	/** 
	 * 是否可以使用，false不可以进行广告投放
	 **/
	public $is_access_allowed;
	
	/** 
	 * 不可以使用的原因
	 **/
	public $reason;	
}
?>