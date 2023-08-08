<?php

/**
 * 人群
 * @author auto create
 */
class CrowdVo
{
	
	/** 
	 * 人群主键id
	 **/
	public $crowd_id;
	
	/** 
	 * 人群名称
	 **/
	public $crowd_name;
	
	/** 
	 * 人群值
	 **/
	public $crowd_value;
	
	/** 
	 * 种子人群关联信息
	 **/
	public $extend_seed_crowd_list;
	
	/** 
	 * 定向标签
	 **/
	public $label;
	
	/** 
	 * 扩展倍数。低中高对应不同的倍数，由产品定义具体值，未来业务可支持滑动条。注意：倍数是指最终人数/种子人数，比如种子人群100万，扩展比种子多了50万，也就是总共150万，这时候扩展倍数是1.5而不是0.5
	 **/
	public $lookalike_multiple;
	
	/** 
	 * 子人群信息
	 **/
	public $sub_crowd_list;
	
	/** 
	 * 定向类型
	 **/
	public $target_type;	
}
?>