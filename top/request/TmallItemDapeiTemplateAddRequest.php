<?php
/**
 * TOP API: tmall.item.dapei.template.add request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallItemDapeiTemplateAddRequest
{
	/** 
	 * 搭配推荐描述
	 **/
	private $desc;
	
	/** 
	 * 2-4个商品
	 **/
	private $items;
	
	/** 
	 * 搭配名称
	 **/
	private $title;
	
	/** 
	 * 模特图片
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "tmall.item.dapei.template.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->url,"url");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
