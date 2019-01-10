<?php
/**
 * TOP API: taobao.zuanshi.banner.adzone.findpage request
 * 
 * @author auto create
 * @since 1.0, 2018.08.03
 */
class ZuanshiBannerAdzoneFindpageRequest
{
	/** 
	 * 广告位id列表
	 **/
	private $adzoneIdList;
	
	/** 
	 * 广告位名称
	 **/
	private $adzoneName;
	
	/** 
	 * 广告位尺寸列表
	 **/
	private $adzoneSizeList;
	
	/** 
	 * 广告位类型，1表示广告位，2表示广告位包
	 **/
	private $adzoneType;
	
	/** 
	 * 允许的创意类型
	 **/
	private $allowAdFormatList;
	
	/** 
	 * 0站外 1站内
	 **/
	private $isInside;
	
	/** 
	 * 媒体类型列表
	 **/
	private $mediaTypeList;
	
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 分页每页条数，最大限制50条
	 **/
	private $pageSize;
	
	/** 
	 * 日均访问量筛选条件，可以多段组合
	 **/
	private $pvParamList;
	
	/** 
	 * 结算类型，1表示CPM 2表示CPC
	 **/
	private $settleTypeList;
	
	private $apiParas = array();
	
	public function setAdzoneIdList($adzoneIdList)
	{
		$this->adzoneIdList = $adzoneIdList;
		$this->apiParas["adzone_id_list"] = $adzoneIdList;
	}

	public function getAdzoneIdList()
	{
		return $this->adzoneIdList;
	}

	public function setAdzoneName($adzoneName)
	{
		$this->adzoneName = $adzoneName;
		$this->apiParas["adzone_name"] = $adzoneName;
	}

	public function getAdzoneName()
	{
		return $this->adzoneName;
	}

	public function setAdzoneSizeList($adzoneSizeList)
	{
		$this->adzoneSizeList = $adzoneSizeList;
		$this->apiParas["adzone_size_list"] = $adzoneSizeList;
	}

	public function getAdzoneSizeList()
	{
		return $this->adzoneSizeList;
	}

	public function setAdzoneType($adzoneType)
	{
		$this->adzoneType = $adzoneType;
		$this->apiParas["adzone_type"] = $adzoneType;
	}

	public function getAdzoneType()
	{
		return $this->adzoneType;
	}

	public function setAllowAdFormatList($allowAdFormatList)
	{
		$this->allowAdFormatList = $allowAdFormatList;
		$this->apiParas["allow_ad_format_list"] = $allowAdFormatList;
	}

	public function getAllowAdFormatList()
	{
		return $this->allowAdFormatList;
	}

	public function setIsInside($isInside)
	{
		$this->isInside = $isInside;
		$this->apiParas["is_inside"] = $isInside;
	}

	public function getIsInside()
	{
		return $this->isInside;
	}

	public function setMediaTypeList($mediaTypeList)
	{
		$this->mediaTypeList = $mediaTypeList;
		$this->apiParas["media_type_list"] = $mediaTypeList;
	}

	public function getMediaTypeList()
	{
		return $this->mediaTypeList;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPvParamList($pvParamList)
	{
		$this->pvParamList = $pvParamList;
		$this->apiParas["pv_param_list"] = $pvParamList;
	}

	public function getPvParamList()
	{
		return $this->pvParamList;
	}

	public function setSettleTypeList($settleTypeList)
	{
		$this->settleTypeList = $settleTypeList;
		$this->apiParas["settle_type_list"] = $settleTypeList;
	}

	public function getSettleTypeList()
	{
		return $this->settleTypeList;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.adzone.findpage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->adzoneIdList,20,"adzoneIdList");
		RequestCheckUtil::checkMaxListSize($this->adzoneSizeList,20,"adzoneSizeList");
		RequestCheckUtil::checkMaxListSize($this->allowAdFormatList,20,"allowAdFormatList");
		RequestCheckUtil::checkMaxListSize($this->mediaTypeList,20,"mediaTypeList");
		RequestCheckUtil::checkMaxListSize($this->settleTypeList,20,"settleTypeList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
