<?php
/**
 * TOP API: taobao.dmp.crowds.find request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class DmpCrowdsFindRequest
{
	/** 
	 * 人群查询条件
	 **/
	private $crowdQueryDTO;
	
	private $apiParas = array();
	
	public function setCrowdQueryDTO($crowdQueryDTO)
	{
		$this->crowdQueryDTO = $crowdQueryDTO;
		$this->apiParas["crowd_query_d_t_o"] = $crowdQueryDTO;
	}

	public function getCrowdQueryDTO()
	{
		return $this->crowdQueryDTO;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.crowds.find";
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
