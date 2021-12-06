<?php
/**
 * TOP API: taobao.zuanshi.banner.upgrade.target.predict.uv request
 * 
 * @author auto create
 * @since 1.0, 2019.04.03
 */
class ZuanshiBannerUpgradeTargetPredictUvRequest
{
	/** 
	 * 预估定向标签信息
	 **/
	private $targetLabels;
	
	private $apiParas = array();
	
	public function setTargetLabels($targetLabels)
	{
		$this->targetLabels = $targetLabels;
		$this->apiParas["target_labels"] = $targetLabels;
	}

	public function getTargetLabels()
	{
		return $this->targetLabels;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.upgrade.target.predict.uv";
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
