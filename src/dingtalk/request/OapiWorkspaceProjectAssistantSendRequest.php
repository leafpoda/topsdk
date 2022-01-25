<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.project.assistant.send request
 * 
 * @author auto create
 * @since 1.0, 2021.09.02
 */
class OapiWorkspaceProjectAssistantSendRequest
{
	/** 
	 * 跳转链接
	 **/
	private $actionUrl;
	
	/** 
	 * 文章内容，最大支持10个文章段落
	 **/
	private $content;
	
	/** 
	 * 链接图片
	 **/
	private $picUrl;
	
	/** 
	 * 消息接收人，最大支持 100人
	 **/
	private $recieverUserids;
	
	/** 
	 * 卡片样式，支持 动态卡片：ActionCardMessage，链接卡片：LinkMessage，markdown卡片：MarkdownMessage
	 **/
	private $style;
	
	/** 
	 * 标题模板KEY
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setActionUrl($actionUrl)
	{
		$this->actionUrl = $actionUrl;
		$this->apiParas["action_url"] = $actionUrl;
	}

	public function getActionUrl()
	{
		return $this->actionUrl;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setPicUrl($picUrl)
	{
		$this->picUrl = $picUrl;
		$this->apiParas["pic_url"] = $picUrl;
	}

	public function getPicUrl()
	{
		return $this->picUrl;
	}

	public function setRecieverUserids($recieverUserids)
	{
		$this->recieverUserids = $recieverUserids;
		$this->apiParas["reciever_userids"] = $recieverUserids;
	}

	public function getRecieverUserids()
	{
		return $this->recieverUserids;
	}

	public function setStyle($style)
	{
		$this->style = $style;
		$this->apiParas["style"] = $style;
	}

	public function getStyle()
	{
		return $this->style;
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.project.assistant.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actionUrl,"actionUrl");
		RequestCheckUtil::checkNotNull($this->recieverUserids,"recieverUserids");
		RequestCheckUtil::checkMaxListSize($this->recieverUserids,999,"recieverUserids");
		RequestCheckUtil::checkNotNull($this->style,"style");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
