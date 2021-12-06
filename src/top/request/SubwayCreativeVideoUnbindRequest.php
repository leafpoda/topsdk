<?php
/**
 * TOP API: taobao.subway.creative.video.unbind request
 * 
 * @author auto create
 * @since 1.0, 2021.05.28
 */
class SubwayCreativeVideoUnbindRequest
{
	/** 
	 * 创意ID
	 **/
	private $creativeId;
	
	/** 
	 * 淘宝账号昵称
	 **/
	private $nick;
	
	/** 
	 * 视频ID
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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
		return "taobao.subway.creative.video.unbind";
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
