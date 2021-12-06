<?php

/**
 * 请求对象
 * @author auto create
 */
class GroupLiveViewerReq
{
	
	/** 
	 * 群标识id
	 **/
	public $cid;
	
	/** 
	 * 分页游标；首页请使用0，之后直接使用返回结果中的next_cursor
	 **/
	public $cursor;
	
	/** 
	 * 直播uuid
	 **/
	public $live_uuid;
	
	/** 
	 * 分页大小;不超过500
	 **/
	public $size;	
}
?>