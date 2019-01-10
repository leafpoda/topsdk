<?php
/**
 * TOP API: taobao.item.qualification.display.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ItemQualificationDisplayGetRequest
{
	/** 
	 * 类目id
	 **/
	private $categoryId;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 参数列表，为key和value都是string的map的转化的json格式
	 **/
	private $param;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "taobao.item.qualification.display.get";
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
