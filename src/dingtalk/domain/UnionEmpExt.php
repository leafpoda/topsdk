<?php

/**
 * 关联信息
 * @author auto create
 */
class UnionEmpExt
{
	
	/** 
	 * 关联企业orgId与StaffId的映射关系，如果发起方A企业内也有该员工，里面也会有A企业的orgId与staffId映射
	 **/
	public $mapping;
	
	/** 
	 * 组织id
	 **/
	public $org_id;
	
	/** 
	 * 员工id
	 **/
	public $staff_id;	
}
?>