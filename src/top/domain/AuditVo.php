<?php

/**
 * 审核信息
 * @author auto create
 */
class AuditVo
{
	
	/** 
	 * 审核原因
	 **/
	public $audit_reason;
	
	/** 
	 * 创意审核状态,-10:to_promote,-4:tobeadd,-3:feed_handle,-2:reject,-1:handle,0:notchecked,1:passed,-9:qa_reject,-5:uneffect,-7:item_offshelf,-11:business_reject,-12:to_outer_audit,-13:handle_tanx,-14:part_reject,-15:to_rational_audit,-16:part_passed
	 **/
	public $audit_status;
	
	/** 
	 * 生效时间
	 **/
	public $effective_time;
	
	/** 
	 * 创意过期时间
	 **/
	public $expire_time;
	
	/** 
	 * 状态,PW:待送审,W:待审核,P:审核通过,R:审核拒绝,AW:合成中,AP:合成通过,AR:合成失败,T:排查中,PP:部分通过,E:创意过期,A:创意故障
	 **/
	public $status;	
}
?>