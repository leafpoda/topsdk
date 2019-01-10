<?php

/**
 * 关键词新质量得分列表，包含PC和移动的质量分
 * @author auto create
 */
class Wordscorelist
{
	
	/** 
	 * 广告类型  单品： &quot;tbuad&quot;; 店铺： &quot;addp&quot;;
	 **/
	public $ad_type;
	
	/** 
	 * 推广组id
	 **/
	public $adgroup_id;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 类目质量得分
	 **/
	public $catscore;
	
	/** 
	 * 创意质量(创意效果)
	 **/
	public $creativescore;
	
	/** 
	 * 客户id
	 **/
	public $customer_id;
	
	/** 
	 * 店铺质量(账户表现)
	 **/
	public $custscore;
	
	/** 
	 * 点击转化率(买家体验)
	 **/
	public $cvrscore;
	
	/** 
	 * 词id
	 **/
	public $keyword_id;
	
	/** 
	 * 词相关性分数
	 **/
	public $kwscore;
	
	/** 
	 * 最低展现出价
	 **/
	public $min_price;
	
	/** 
	 * 昵称
	 **/
	public $nick;
	
	/** 
	 * 词在pc端是否能首页推左(0:不能推左、1:可以推左)，此标记仅代表首页推左标
	 **/
	public $pc_left_flag;
	
	/** 
	 * 词是否能推左
	 **/
	public $plflag;
	
	/** 
	 * 属性得分
	 **/
	public $pscore;
	
	/** 
	 * PC质量得分（另外值为-1:所属的campaign没有该投放设备，且所属的adgroup有该投放设备的投放中的创意、-2:所属的campaign有该投放设备，且所属的adgroup没有该投放设备的投放中的创意、-3:所属的campaign没有该投放设备，且所属的adgroup没有该投放设备的投放中的创意）
	 **/
	public $qscore;
	
	/** 
	 * 相关性，同kwscore
	 **/
	public $relescore;
	
	/** 
	 * 移动创意质量(创意效果)
	 **/
	public $wireless_creativescore;
	
	/** 
	 * 移动店铺质量(账户表现)
	 **/
	public $wireless_custscore;
	
	/** 
	 * 移动点击转化率(买家体验)
	 **/
	public $wireless_cvrscore;
	
	/** 
	 * 词是否有首屏展示机会。值含义(4: 有展现机会,且能上首屏 2: 有展示机会,上不了首屏、1: 无展现机会,更上不了首屏)
	 **/
	public $wireless_matchflag;
	
	/** 
	 * 移动质量得分（另外值为-1:所属的campaign没有该投放设备，且所属的adgroup有该投放设备的投放中的创意、-2:所属的campaign有该投放设备，且所属的adgroup没有该投放设备的投放中的创意、-3:所属的campaign没有该投放设备，且所属的adgroup没有该投放设备的投放中的创意）
	 **/
	public $wireless_qscore;
	
	/** 
	 * 移动相关性，同kwscore
	 **/
	public $wireless_relescore;
	
	/** 
	 * 关键词
	 **/
	public $word;	
}
?>