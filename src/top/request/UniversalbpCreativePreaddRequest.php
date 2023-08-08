<?php
/**
 * TOP API: taobao.universalbp.creative.preadd request
 * 
 * @author auto create
 * @since 1.0, 2023.08.04
 */
class UniversalbpCreativePreaddRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * long
	 **/
	private $tpLong;
	
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

	public function setTpLong($tpLong)
	{
		$this->tpLong = $tpLong;
		$this->apiParas["tp_long"] = $tpLong;
	}

	public function getTpLong()
	{
		return $this->tpLong;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.creative.preadd";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tpLong,"tpLong");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
