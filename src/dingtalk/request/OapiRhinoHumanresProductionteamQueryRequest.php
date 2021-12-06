<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.humanres.productionteam.query request
 * 
 * @author auto create
 * @since 1.0, 2020.03.06
 */
class OapiRhinoHumanresProductionteamQueryRequest
{
	/** 
	 * 查询生产组入参
	 **/
	private $queryProductionTeamParam;
	
	private $apiParas = array();
	
	public function setQueryProductionTeamParam($queryProductionTeamParam)
	{
		$this->queryProductionTeamParam = $queryProductionTeamParam;
		$this->apiParas["query_production_team_param"] = $queryProductionTeamParam;
	}

	public function getQueryProductionTeamParam()
	{
		return $this->queryProductionTeamParam;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.humanres.productionteam.query";
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
