<?php
/**
 * TOP API: taobao.universalbp.new.label.dmpconvert request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewLabelDmpconvertRequest
{
	/** 
	 * dmpLabelConvertListVO
	 **/
	private $dmpLabelConvertListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setDmpLabelConvertListVO($dmpLabelConvertListVO)
	{
		$this->dmpLabelConvertListVO = $dmpLabelConvertListVO;
		$this->apiParas["dmp_label_convert_list_v_o"] = $dmpLabelConvertListVO;
	}

	public function getDmpLabelConvertListVO()
	{
		return $this->dmpLabelConvertListVO;
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
		return "taobao.universalbp.new.label.dmpconvert";
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
