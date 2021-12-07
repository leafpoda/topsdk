<?php
/**
 * TOP API: taobao.subway.video.state.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class SubwayVideoStateGetRequest
{
	/** 
	 * 账号昵称
	 **/
	private $nick;
	
	/** 
	 * videoId
	 **/
	private $videoId;
	
	private $apiParas = array();
	
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
		return "taobao.subway.video.state.get";
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
