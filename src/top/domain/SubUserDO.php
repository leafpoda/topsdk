<?php

/**
 * 子账号对象，如果为空，说明没查到该子账号
 * @author auto create
 */
class SubUserDO
{
	
	/** 
	 * 子账号用户名
	 **/
	public $nick;
	
	/** 
	 * 子账号所属的主账号的唯一标识
	 **/
	public $seller_id;
	
	/** 
	 * 主账号昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 子账号当前状态 1正常 -1删除  2冻结
	 **/
	public $status;
	
	/** 
	 * 子账号Id
	 **/
	public $sub_id;	
}
?>