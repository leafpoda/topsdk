<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.advanced.service.unbind request
 * 
 * @author auto create
 * @since 1.0, 2020.11.03
 */
class OapiAttendanceAdvancedServiceUnbindRequest
{
	/** 
	 * 实体id
	 **/
	private $entityId;
	
	/** 
	 * 实体类型，目前支持user,group,corp
	 **/
	private $entityType;
	
	/** 
	 * 操作者userid
	 **/
	private $opUserid;
	
	/** 
	 * 服务id
	 **/
	private $serviceId;
	
	private $apiParas = array();
	
	public function setEntityId($entityId)
	{
		$this->entityId = $entityId;
		$this->apiParas["entity_id"] = $entityId;
	}

	public function getEntityId()
	{
		return $this->entityId;
	}

	public function setEntityType($entityType)
	{
		$this->entityType = $entityType;
		$this->apiParas["entity_type"] = $entityType;
	}

	public function getEntityType()
	{
		return $this->entityType;
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

	public function setServiceId($serviceId)
	{
		$this->serviceId = $serviceId;
		$this->apiParas["service_id"] = $serviceId;
	}

	public function getServiceId()
	{
		return $this->serviceId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.advanced.service.unbind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->entityId,"entityId");
		RequestCheckUtil::checkNotNull($this->entityType,"entityType");
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
		RequestCheckUtil::checkNotNull($this->serviceId,"serviceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
