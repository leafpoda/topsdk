<?php
/**
 * dingtalk API: dingtalk.oapi.fugong.health_data.list request
 * 
 * @author auto create
 * @since 1.0, 2020.03.02
 */
class OapiFugongHealthDataListRequest
{
	/** 
	 * 时间，必须是YYYY-MM-DD的格式
	 **/
	private $actionDate;
	
	/** 
	 * 分页起始
	 **/
	private $offset;
	
	/** 
	 * 复工审批实例id
	 **/
	private $processInstanceId;
	
	/** 
	 * 分页大小，最大100
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setActionDate($actionDate)
	{
		$this->actionDate = $actionDate;
		$this->apiParas["action_date"] = $actionDate;
	}

	public function getActionDate()
	{
		return $this->actionDate;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
	}

	public function setProcessInstanceId($processInstanceId)
	{
		$this->processInstanceId = $processInstanceId;
		$this->apiParas["process_instance_id"] = $processInstanceId;
	}

	public function getProcessInstanceId()
	{
		return $this->processInstanceId;
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
		return "dingtalk.oapi.fugong.health_data.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actionDate,"actionDate");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkNotNull($this->processInstanceId,"processInstanceId");
		RequestCheckUtil::checkNotNull($this->size,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
