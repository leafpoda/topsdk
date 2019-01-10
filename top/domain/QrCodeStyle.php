<?php

/**
 * 普通二维码样式参数
 * @author auto create
 */
class QrCodeStyle
{
	
	/** 
	 * 可选参数，二维背景色颜色值，接入业务点配置为准，未配置，默认为白
	 **/
	public $bg_color;
	
	/** 
	 * 可选参数，二维码深色点颜色值，接入业务点配置为准，未配置，默认为黑
	 **/
	public $color;
	
	/** 
	 * 可选参数，二维码纠错级别 0=~7%,1=~15%,2=~25%,3=~30%
	 **/
	public $level;
	
	/** 
	 * 可选参数，logo的淘宝tfs地址，默认无
	 **/
	public $logo;
	
	/** 
	 * 可选参数，二维码的边框，默认大小1个单位点，便于扫码
	 **/
	public $margin;
	
	/** 
	 * 可选参数，二维码大小，值60～600，默认185pix
	 **/
	public $size;	
}
?>