<?php
/**
 * TOP API: taobao.onebp.display.crowd.add request
 * 
 * @author auto create
 * @since 1.0, 2022.07.27
 */
class OnebpDisplayCrowdAddRequest
{
	/** 
	 * 批量定向信息
	 **/
	private $crowdRefBatch;
	
	private $apiParas = array();
	
	public function setCrowdRefBatch($crowdRefBatch)
	{
		$this->crowdRefBatch = $crowdRefBatch;
		$this->apiParas["crowd.ref.batch"] = $crowdRefBatch;
	}

	public function getCrowdRefBatch()
	{
		return $this->crowdRefBatch;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.crowd.add";
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
