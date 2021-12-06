<?php
/**
 * TOP API: taobao.fuwu.sp.billreord.add request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class FuwuSpBillreordAddRequest
{
	/** 
	 * 确认单的账单明细
	 **/
	private $paramBillRecordDTO;
	
	private $apiParas = array();
	
	public function setParamBillRecordDTO($paramBillRecordDTO)
	{
		$this->paramBillRecordDTO = $paramBillRecordDTO;
		$this->apiParas["param_bill_record_d_t_o"] = $paramBillRecordDTO;
	}

	public function getParamBillRecordDTO()
	{
		return $this->paramBillRecordDTO;
	}

	public function getApiMethodName()
	{
		return "taobao.fuwu.sp.billreord.add";
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
