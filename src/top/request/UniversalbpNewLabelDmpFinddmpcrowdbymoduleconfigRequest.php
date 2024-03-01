<?php
/**
 * TOP API: taobao.universalbp.new.label.dmp.finddmpcrowdbymoduleconfig request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewLabelDmpFinddmpcrowdbymoduleconfigRequest
{
	/** 
	 * dmpCrowdModuleConfigQueryVO
	 **/
	private $dmpCrowdModuleConfigQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setDmpCrowdModuleConfigQueryVO($dmpCrowdModuleConfigQueryVO)
	{
		$this->dmpCrowdModuleConfigQueryVO = $dmpCrowdModuleConfigQueryVO;
		$this->apiParas["dmp_crowd_module_config_query_v_o"] = $dmpCrowdModuleConfigQueryVO;
	}

	public function getDmpCrowdModuleConfigQueryVO()
	{
		return $this->dmpCrowdModuleConfigQueryVO;
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
		return "taobao.universalbp.new.label.dmp.finddmpcrowdbymoduleconfig";
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
