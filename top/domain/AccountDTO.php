<?php

/**
 * 账户信息
 * @author auto create
 */
class AccountDTO
{
	
	/** 
	 * 可用余额，单位:元
	 **/
	public $available_balance;
	
	/** 
	 * 余额，单位:元
	 **/
	public $banlance;
	
	/** 
	 * 现金余额，单位:元
	 **/
	public $cash_balance;
	
	/** 
	 * 授信额度，单位:元
	 **/
	public $credit_balance;
	
	/** 
	 * 赠款余额，单位:元
	 **/
	public $grant_balance;
	
	/** 
	 * 红包，单位:元
	 **/
	public $red_packet;	
}
?>