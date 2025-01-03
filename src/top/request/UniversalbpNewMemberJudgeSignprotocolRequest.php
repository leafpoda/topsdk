<?php
/**
 * TOP API: taobao.universalbp.new.member.judge.signprotocol request
 * 
 * @author auto create
 * @since 1.0, 2024.12.12
 */
class UniversalbpNewMemberJudgeSignprotocolRequest
{
	/** 
	 * protocolVO
	 **/
	private $protocolVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setProtocolVO($protocolVO)
	{
		$this->protocolVO = $protocolVO;
		$this->apiParas["protocol_v_o"] = $protocolVO;
	}

	public function getProtocolVO()
	{
		return $this->protocolVO;
	}

	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.new.member.judge.signprotocol";
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
