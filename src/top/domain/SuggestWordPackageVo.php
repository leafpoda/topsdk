<?php

/**
 * 推荐的词包列表
 * @author auto create
 */
class SuggestWordPackageVo
{
	
	/** 
	 * 建议出价
	 **/
	public $bid_price;
	
	/** 
	 * 预估展现
	 **/
	public $impression;
	
	/** 
	 * 流量放大系数
	 **/
	public $multi_factor;
	
	/** 
	 * 1:在线,0:下线
	 **/
	public $online_status;
	
	/** 
	 * 相关性,1:差,2:中,3:好
	 **/
	public $relevance_type;
	
	/** 
	 * 关键词举例
	 **/
	public $simple_word_list;
	
	/** 
	 * 词包策略信息
	 **/
	public $strategy_list;
	
	/** 
	 * 主题词
	 **/
	public $theme_word_list;
	
	/** 
	 * 词包id
	 **/
	public $word_package_id;
	
	/** 
	 * 词包名称
	 **/
	public $word_package_name;
	
	/** 
	 * 词包类型,0:流量智选,20:卖点词包
	 **/
	public $word_package_type;	
}
?>