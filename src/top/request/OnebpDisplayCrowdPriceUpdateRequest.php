<?php
/**
 * TOP API: taobao.onebp.display.crowd.price.update request
 * 
 * @author auto create
 * @since 1.0, 2021.12.21
 */
class OnebpDisplayCrowdPriceUpdateRequest
{
	/** 
	 * 批量定向信息
	 **/
	private $crowdRefBatch;
	
	private $apiParas = array();
	
	public function setCrowdRefBatch($crowdRefBatch)
	{
		$this->crowdRefBatch = $crowdRefBatch;
		$this->apiParas["crowd_ref_batch"] = $crowdRefBatch;
	}

	public function getCrowdRefBatch()
	{
		return $this->crowdRefBatch;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.crowd.price.update";
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
