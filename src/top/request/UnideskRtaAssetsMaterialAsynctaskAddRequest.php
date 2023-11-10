<?php
/**
 * TOP API: taobao.unidesk.rta.assets.material.asynctask.add request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class UnideskRtaAssetsMaterialAsynctaskAddRequest
{
	/** 
	 * 入参，每个账户(adv)每天最多创建20个任务
	 **/
	private $materialTaskTopDto;
	
	private $apiParas = array();
	
	public function setMaterialTaskTopDto($materialTaskTopDto)
	{
		$this->materialTaskTopDto = $materialTaskTopDto;
		$this->apiParas["material_task_top_dto"] = $materialTaskTopDto;
	}

	public function getMaterialTaskTopDto()
	{
		return $this->materialTaskTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.material.asynctask.add";
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
