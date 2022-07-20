<?php

/**
 * 词的相关类目列表
 * @author auto create
 */
class InsightCategoryForcastDTO
{
	
	/** 
	 * 查询词
	 **/
	public $bidword;
	
	/** 
	 * 表示该类目的所有父级类目，按层级顺序排列，层级越高的在前面，不同的层级之间用空格分隔
	 **/
	public $cat_path_id;
	
	/** 
	 * 表示类目的所有父级类目的名称，不同层级之间用（ascii码为2的字符）分隔开
	 **/
	public $cat_path_name;
	
	/** 
	 * 表示词与该类目的相关度，值越大表示越相关
	 **/
	public $score;	
}
?>