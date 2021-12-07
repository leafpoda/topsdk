<?php

/**
 * 创意数据
 * @author auto create
 */
class MaterialQueryTopDto
{
	
	/** 
	 * 场景和bizCode的对应关系为：拉新快adStrategyDkx，上新快adStrategyShangXin ，货品加速adStrategyProductSpeed，入会快adStrategyRuHui，预热蓄水adStrategyYuRe，爆发收割adStrategyBaoFa
	 **/
	public $biz_code;
	
	/** 
	 * 页码
	 **/
	public $offset;
	
	/** 
	 * 各个场景的对应值为：各个场景对应的值为：拉新快--拉新快204，首单直降205，派样拉新216，入会快--入会拉新213，老会员激活213，货品加速--货品加速211，上新快--行业新品207，新品首降214，预热蓄水--预热蓄水219
	 **/
	public $tag_id;	
}
?>