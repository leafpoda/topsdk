<?php
/**
 * TOP API: taobao.fuwu.sp.confirm.apply request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class FuwuSpConfirmApplyRequest
{
	/** 
	 * 确认单申请
	 **/
	private $paramIncomeConfirmDTO;
	
	private $apiParas = array();
	
	public function setParamIncomeConfirmDTO($paramIncomeConfirmDTO)
	{
		$this->paramIncomeConfirmDTO = $paramIncomeConfirmDTO;
		$this->apiParas["param_income_confirm_d_t_o"] = $paramIncomeConfirmDTO;
	}

	public function getParamIncomeConfirmDTO()
	{
		return $this->paramIncomeConfirmDTO;
	}

	public function getApiMethodName()
	{
		return "taobao.fuwu.sp.confirm.apply";
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
