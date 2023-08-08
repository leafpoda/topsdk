<?php

/**
 * bidwordSuggestQueryVO
 * @author auto create
 */
class BidwordSuggestQueryVo
{
	
	/** 
	 * 单元id,单元已经存在场景必填
	 **/
	public $adgroup_id;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 人群id
	 **/
	public $crowd_id_list;
	
	/** 
	 * 宝贝id
	 **/
	public $material_id;
	
	/** 
	 * 类型,kr_overall:综合推荐,kr_flow:精准引流,kr_category:类目优质词,kr_industry:行业机会词,kr_mta:助攻词,kr_search:搜索词联想,kr_byword:以词推词,kr_bycrowd:以人群词,new_default:新建流程默认推词
	 **/
	public $type;	
}
?>