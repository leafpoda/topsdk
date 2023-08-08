<?php

/**
 * dmpCrowdModuleConfigQueryVO
 * @author auto create
 */
class DmpCrowdModuleConfigQueryVo
{
	
	/** 
	 * 数据来源app
	 **/
	public $app_id_list;
	
	/** 
	 * 投放渠道id，筛在达摩盘平台上创建且同步到业务线的人群
	 **/
	public $deliver_app_id;
	
	/** 
	 * 当前页
	 **/
	public $int_current_page;
	
	/** 
	 * 当前页size
	 **/
	public $int_page_size;	
}
?>