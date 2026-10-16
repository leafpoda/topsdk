<?php
/**
 * TOP API: taobao.udonebp.uds.account.query request
 * 
 * @author auto create
 * @since 1.0, 2026.09.23
 */
class UdonebpUdsAccountQueryRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * UDS外投广告主账户查询入参
	 **/
	private $topUdsAccountQueryVO;
	
	private $apiParas = array();
	
	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function setTopUdsAccountQueryVO($topUdsAccountQueryVO)
	{
		$this->topUdsAccountQueryVO = $topUdsAccountQueryVO;
		$this->apiParas["top_uds_account_query_v_o"] = $topUdsAccountQueryVO;
	}

	public function getTopUdsAccountQueryVO()
	{
		return $this->topUdsAccountQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.udonebp.uds.account.query";
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
