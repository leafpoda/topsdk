<?php

/**
 * 一页推荐词列表
 * @author auto create
 */
class RecommendWordPage
{
	
	/** 
	 * 返回第几页的数据从1开始。
如果输入的值大于可取得的最大页码值时，将返回
最大的页码值并且recommend_word_list值将
为空
	 **/
	public $page_no;
	
	/** 
	 * 每页数据大小
	 **/
	public $page_size;
	
	/** 
	 * 推荐词分页对象列表
	 **/
	public $recommend_word_list;
	
	/** 
	 * 所查询的数据总数
	 **/
	public $total_item;	
}
?>