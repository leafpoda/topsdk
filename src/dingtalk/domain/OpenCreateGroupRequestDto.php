<?php

/**
 * 入参
 * @author auto create
 */
class OpenCreateGroupRequestDto
{
	
	/** 
	 * 群名称，长度[3,20]字符
	 **/
	public $name;
	
	/** 
	 * 创建人，在圈子内的userid，这个人会成为群主。当圈子群超过100个时会禁止新建
	 **/
	public $userid;	
}
?>