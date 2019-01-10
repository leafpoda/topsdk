<?php
/**
 * TOP API: taobao.dmp.analysis.coverage request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class DmpAnalysisCoverageRequest
{
	/** 
	 * 标签组合规则
	 **/
	private $selectTagOptionSetDTO;
	
	private $apiParas = array();
	
	public function setSelectTagOptionSetDTO($selectTagOptionSetDTO)
	{
		$this->selectTagOptionSetDTO = $selectTagOptionSetDTO;
		$this->apiParas["select_tag_option_set_d_t_o"] = $selectTagOptionSetDTO;
	}

	public function getSelectTagOptionSetDTO()
	{
		return $this->selectTagOptionSetDTO;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.analysis.coverage";
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
