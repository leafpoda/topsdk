<?php
/**
 * TOP API: taobao.dmp.crowd.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class DmpCrowdCreateRequest
{
	/** 
	 * 人群名称，最多40个字符，只支持汉字、字母、数字、下划线
	 **/
	private $crowdName;
	
	/** 
	 * 放大倍数，最多30倍
	 **/
	private $lookalikeMultiple;
	
	/** 
	 * 标签组合条件
	 **/
	private $selectTagOptionSetDTO;
	
	/** 
	 * 过期时间,最长1年
	 **/
	private $validDate;
	
	private $apiParas = array();
	
	public function setCrowdName($crowdName)
	{
		$this->crowdName = $crowdName;
		$this->apiParas["crowd_name"] = $crowdName;
	}

	public function getCrowdName()
	{
		return $this->crowdName;
	}

	public function setLookalikeMultiple($lookalikeMultiple)
	{
		$this->lookalikeMultiple = $lookalikeMultiple;
		$this->apiParas["lookalike_multiple"] = $lookalikeMultiple;
	}

	public function getLookalikeMultiple()
	{
		return $this->lookalikeMultiple;
	}

	public function setSelectTagOptionSetDTO($selectTagOptionSetDTO)
	{
		$this->selectTagOptionSetDTO = $selectTagOptionSetDTO;
		$this->apiParas["select_tag_option_set_d_t_o"] = $selectTagOptionSetDTO;
	}

	public function getSelectTagOptionSetDTO()
	{
		return $this->selectTagOptionSetDTO;
	}

	public function setValidDate($validDate)
	{
		$this->validDate = $validDate;
		$this->apiParas["valid_date"] = $validDate;
	}

	public function getValidDate()
	{
		return $this->validDate;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.crowd.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->crowdName,"crowdName");
		RequestCheckUtil::checkMaxValue($this->lookalikeMultiple,30,"lookalikeMultiple");
		RequestCheckUtil::checkMinValue($this->lookalikeMultiple,1,"lookalikeMultiple");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
