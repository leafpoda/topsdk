<?php
/**
 * dingtalk API: dingtalk.oapi.edu.homework.comment.tips.delete request
 * 
 * @author auto create
 * @since 1.0, 2020.11.03
 */
class OapiEduHomeworkCommentTipsDeleteRequest
{
	/** 
	 * 业务编码
	 **/
	private $bizCode;
	
	/** 
	 * 评语ID列表
	 **/
	private $tipIds;
	
	/** 
	 * 老师userid
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setTipIds($tipIds)
	{
		$this->tipIds = $tipIds;
		$this->apiParas["tip_ids"] = $tipIds;
	}

	public function getTipIds()
	{
		return $this->tipIds;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.homework.comment.tips.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->tipIds,999,"tipIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
