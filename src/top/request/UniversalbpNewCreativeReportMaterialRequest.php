<?php
/**
 * TOP API: taobao.universalbp.new.creative.report.material request
 * 
 * @author auto create
 * @since 1.0, 2024.07.16
 */
class UniversalbpNewCreativeReportMaterialRequest
{
	/** 
	 * materialReportQueryVO
	 **/
	private $materialReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setMaterialReportQueryVO($materialReportQueryVO)
	{
		$this->materialReportQueryVO = $materialReportQueryVO;
		$this->apiParas["material_report_query_v_o"] = $materialReportQueryVO;
	}

	public function getMaterialReportQueryVO()
	{
		return $this->materialReportQueryVO;
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
		return "taobao.universalbp.new.creative.report.material";
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
