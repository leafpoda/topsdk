<?php
/**
 * dingtalk API: dingtalk.oapi.ai.mt.translate request
 * 
 * @author auto create
 * @since 1.0, 2020.08.05
 */
class OapiAiMtTranslateRequest
{
	/** 
	 * 翻译源文字符串
	 **/
	private $query;
	
	/** 
	 * 翻译源语言类型
	 **/
	private $sourceLanguage;
	
	/** 
	 * 翻译目标语言类型
	 **/
	private $targetLanguage;
	
	private $apiParas = array();
	
	public function setQuery($query)
	{
		$this->query = $query;
		$this->apiParas["query"] = $query;
	}

	public function getQuery()
	{
		return $this->query;
	}

	public function setSourceLanguage($sourceLanguage)
	{
		$this->sourceLanguage = $sourceLanguage;
		$this->apiParas["source_language"] = $sourceLanguage;
	}

	public function getSourceLanguage()
	{
		return $this->sourceLanguage;
	}

	public function setTargetLanguage($targetLanguage)
	{
		$this->targetLanguage = $targetLanguage;
		$this->apiParas["target_language"] = $targetLanguage;
	}

	public function getTargetLanguage()
	{
		return $this->targetLanguage;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ai.mt.translate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->query,"query");
		RequestCheckUtil::checkNotNull($this->sourceLanguage,"sourceLanguage");
		RequestCheckUtil::checkNotNull($this->targetLanguage,"targetLanguage");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
