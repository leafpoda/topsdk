<?php

/**
 * 入参，每个账户(adv)每天最多创建20个任务
 * @author auto create
 */
class MaterialTaskTopDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 强制生成新的任务，参数相同会复用之前的任务，1：是，0：否
	 **/
	public $force;
	
	/** 
	 * 任务名称
	 **/
	public $name;
	
	/** 
	 * 素材上传任务参数
	 **/
	public $params;	
}
?>