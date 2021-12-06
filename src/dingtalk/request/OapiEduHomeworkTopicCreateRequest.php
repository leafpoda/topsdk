<?php
/**
 * dingtalk API: dingtalk.oapi.edu.homework.topic.create request
 * 
 * @author auto create
 * @since 1.0, 2020.04.29
 */
class OapiEduHomeworkTopicCreateRequest
{
	/** 
	 * 题目列表
	 **/
	private $topicItems;
	
	private $apiParas = array();
	
	public function setTopicItems($topicItems)
	{
		$this->topicItems = $topicItems;
		$this->apiParas["topic_items"] = $topicItems;
	}

	public function getTopicItems()
	{
		return $this->topicItems;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.homework.topic.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
