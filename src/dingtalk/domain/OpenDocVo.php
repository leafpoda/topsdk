<?php

/**
 * 知识页详情
 * @author auto create
 */
class OpenDocVo
{
	
	/** 
	 * 知识页所在知识库id（加密后的值）
	 **/
	public $group_id;
	
	/** 
	 * 知识页ID（加密后的值）
	 **/
	public $id;
	
	/** 
	 * 文档最近一次cp的url
	 **/
	public $latest_cp_url;
	
	/** 
	 * 知识页的名字
	 **/
	public $name;
	
	/** 
	 * 知识页所在知识本id（加密后的值）
	 **/
	public $repo_id;
	
	/** 
	 * 文档分享链接的url
	 **/
	public $share_url;	
}
?>