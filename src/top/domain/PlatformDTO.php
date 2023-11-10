<?php

/**
 * 平台
 * @author auto create
 */
class PlatformDTO
{
	
	/** 
	 * 安卓版本，-1:不限,4:4.x+,5:5.x+,6:6.x+,7:7.x+,8:8.x+,9:9.x+,10:10.x+
	 **/
	public $android_version;
	
	/** 
	 * iOS版本，-1：不限，7：7.x+，8：8.x+，9：9.x+，10：10.x+，11：11.x+，12：12.x+，13：13.x+
	 **/
	public $ios_version;
	
	/** 
	 * 操作系统类型，-1：不限，1：安卓，3：iOS
	 **/
	public $type;	
}
?>