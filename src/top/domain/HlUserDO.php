<?php

/**
 * 订单全链路用户信息
 * @author auto create
 */
class HlUserDO
{
	
	/** 
	 * 回流信息是否开通买家端展示
	 **/
	public $open_for_buyer;
	
	/** 
	 * 如果为空，则默认是X_TO_SYSTEM,X_WAIT_ALLOCATION,X_OUT_WAREHOUSE
	 **/
	public $open_nodes;	
}
?>