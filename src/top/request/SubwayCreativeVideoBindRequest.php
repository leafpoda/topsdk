<?php
/**
 * TOP API: taobao.subway.creative.video.bind request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class SubwayCreativeVideoBindRequest
{
	/** 
	 * 创意ID
	 **/
	private $creativeId;
	
	/** 
	 * ItemId
	 **/
	private $itemId;
	
	/** 
	 * 淘宝用户昵称
	 **/
	private $nick;
	
	/** 
	 * 视频类型
	 **/
	private $sizeType;
	
	/** 
	 * 审核通过的视频（状态6）
	 **/
	private $videoId;
	
	private $apiParas = array();
	
	public function setCreativeId($creativeId)
	{
		$this->creativeId = $creativeId;
		$this->apiParas["creative_id"] = $creativeId;
	}

	public function getCreativeId()
	{
		return $this->creativeId;
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setSizeType($sizeType)
	{
		$this->sizeType = $sizeType;
		$this->apiParas["size_type"] = $sizeType;
	}

	public function getSizeType()
	{
		return $this->sizeType;
	}

	public function setVideoId($videoId)
	{
		$this->videoId = $videoId;
		$this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId()
	{
		return $this->videoId;
	}

	public function getApiMethodName()
	{
		return "taobao.subway.creative.video.bind";
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
