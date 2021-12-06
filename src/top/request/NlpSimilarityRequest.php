<?php
/**
 * TOP API: taobao.nlp.similarity request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class NlpSimilarityRequest
{
	/** 
	 * 多文本内容
	 **/
	private $texts;
	
	private $apiParas = array();
	
	public function setTexts($texts)
	{
		$this->texts = $texts;
		$this->apiParas["texts"] = $texts;
	}

	public function getTexts()
	{
		return $this->texts;
	}

	public function getApiMethodName()
	{
		return "taobao.nlp.similarity";
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
