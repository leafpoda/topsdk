<?php
/**
 * dingtalk API: dingtalk.oapi.dingmi.robot.update request
 * 
 * @author auto create
 * @since 1.0, 2020.09.29
 */
class OapiDingmiRobotUpdateRequest
{
	/** 
	 * 服务号(1) | 群(2)
	 **/
	private $type;
	
	/** 
	 * 系统自动生成
	 **/
	private $updateBotModel;
	
	private $apiParas = array();
	
	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUpdateBotModel($updateBotModel)
	{
		$this->updateBotModel = $updateBotModel;
		$this->apiParas["update_bot_model"] = $updateBotModel;
	}

	public function getUpdateBotModel()
	{
		return $this->updateBotModel;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingmi.robot.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
