<?php

/**
 * 查询定向人群的条件
 * @author auto create
 */
class CrowdQueryTopDto
{
	
	/** 
	 * 二级类目id
	 **/
	public $cat_id;
	
	/** 
	 * 推广物料id列表
	 **/
	public $material_list;
	
	/** 
	 * 当前页要显示数据的起始位置
	 **/
	public $offset;
	
	/** 
	 * 每页显示的记录条数
	 **/
	public $page_size;
	
	/** 
	 * 推广类型(1:商品;3:店铺;9:自定义)
	 **/
	public $promotion_type;
	
	/** 
	 * 查询时间段,查1/7/15/30天的类目数据
	 **/
	public $query_time;
	
	/** 
	 * 定向类型(131:关键词推荐 140:相似店铺人群 141:喜欢我的店铺 142:深度行为人群 143:领券未使用人群 144:粉丝人群 150:相似宝贝 151:喜欢我的宝贝 130:目标人群扩展 100:智能定向人群)
	 **/
	public $target_type;	
}
?>