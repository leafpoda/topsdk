<?php
/**
 * TOP API: taobao.unidesk.rta.tools.stickerstyle.get request
 * 
 * @author auto create
 * @since 1.0, 2023.06.05
 */
class UnideskRtaToolsStickerstyleGetRequest
{
	/** 
	 * 查询入参
	 **/
	private $stickerStyleTopQueryDto;
	
	private $apiParas = array();
	
	public function setStickerStyleTopQueryDto($stickerStyleTopQueryDto)
	{
		$this->stickerStyleTopQueryDto = $stickerStyleTopQueryDto;
		$this->apiParas["sticker_style_top_query_dto"] = $stickerStyleTopQueryDto;
	}

	public function getStickerStyleTopQueryDto()
	{
		return $this->stickerStyleTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.tools.stickerstyle.get";
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
