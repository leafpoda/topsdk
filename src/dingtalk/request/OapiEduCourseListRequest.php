<?php
/**
 * dingtalk API: dingtalk.oapi.edu.course.list request
 * 
 * @author auto create
 * @since 1.0, 2020.08.10
 */
class OapiEduCourseListRequest
{
	/** 
	 * 表示分页游标，从0开始
	 **/
	private $cursor;
	
	/** 
	 * 当前操作人的用户ID
	 **/
	private $opUserid;
	
	/** 
	 * 表示分页大小
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
	}

	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.course.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cursor,"cursor");
		RequestCheckUtil::checkMinValue($this->cursor,0,"cursor");
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
		RequestCheckUtil::checkNotNull($this->size,"size");
		RequestCheckUtil::checkMaxValue($this->size,100,"size");
		RequestCheckUtil::checkMinValue($this->size,1,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
