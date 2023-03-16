<?php
/**
 * TOP API: taobao.unidesk.rta.assets.material.asynctask.result.get request
 * 
 * @author auto create
 * @since 1.0, 2022.12.28
 */
class UnideskRtaAssetsMaterialAsynctaskResultGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $asyncTaskTopQueryDto;
	
	private $apiParas = array();
	
	public function setAsyncTaskTopQueryDto($asyncTaskTopQueryDto)
	{
		$this->asyncTaskTopQueryDto = $asyncTaskTopQueryDto;
		$this->apiParas["async_task_top_query_dto"] = $asyncTaskTopQueryDto;
	}

	public function getAsyncTaskTopQueryDto()
	{
		return $this->asyncTaskTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.material.asynctask.result.get";
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
