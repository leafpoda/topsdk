<?php

/**
 * 批量结果集
 * @author auto create
 */
class MaterialAccessAllowVo
{
	
	/** 
	 * 是否通过准入,true:是,false:否
	 **/
	public $access_allowed;
	
	/** 
	 * 物料id
	 **/
	public $material_id;
	
	/** 
	 * 准入不通过原因
	 **/
	public $reason;	
}
?>