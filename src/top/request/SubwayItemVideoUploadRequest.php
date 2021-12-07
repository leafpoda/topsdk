<?php
/**
 * TOP API: taobao.subway.item.video.upload request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class SubwayItemVideoUploadRequest
{
	/** 
	 * itemId
	 **/
	private $itemId;
	
	/** 
	 * 账号昵称
	 **/
	private $nick;
	
	/** 
	 * 视频类型，1是方视频
	 **/
	private $type;
	
	/** 
	 * video的url
	 **/
	private $videoUrl;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setVideoUrl($videoUrl)
	{
		$this->videoUrl = $videoUrl;
		$this->apiParas["video_url"] = $videoUrl;
	}

	public function getVideoUrl()
	{
		return $this->videoUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.subway.item.video.upload";
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
