<?php

/**
 * reportQueryVO
 * @author auto create
 */
class ReportQueryVo
{
	
	/** 
	 * 场景筛选code
	 **/
	public $biz_code_in_list;
	
	/** 
	 * 是否分页
	 **/
	public $by_page;
	
	/** 
	 * 归因周期，1、3、7、15、30
	 **/
	public $effect_equal;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 偏移量
	 **/
	public $offset;
	
	/** 
	 * 页面大小
	 **/
	public $page_size;
	
	/** 
	 * 聚合维度，可用值和选择对应报表类型一致
	 **/
	public $query_domains;
	
	/** 
	 * 需要下载的指标数据
	 **/
	public $query_field_in_list;
	
	/** 
	 * 报表类型
	 **/
	public $rpt_type;
	
	/** 
	 * 汇总类型 sum-汇总,hour-分时,day-分天,week-分周,month-分月
	 **/
	public $split_type;
	
	/** 
	 * 开始时间
	 **/
	public $start_time;
	
	/** 
	 * 归因口径，zhai-末次点击归因， mta-mta归因
	 **/
	public $unify_type;	
}
?>