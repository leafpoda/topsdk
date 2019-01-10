<?php

/**
 * 分销API返回数据结构
 * @author auto create
 */
class Distributor
{
	
	/** 
	 * 分销商的支付宝帐户
	 **/
	public $alipay_account;
	
	/** 
	 * 分销商的淘宝卖家评价
	 **/
	public $appraise;
	
	/** 
	 * 分销商店铺主营类目
	 **/
	public $category_id;
	
	/** 
	 * 联系人
	 **/
	public $contact_person;
	
	/** 
	 * 分销商创建时间 时间格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 分销商Id
	 **/
	public $distributor_id;
	
	/** 
	 * 分销商姓名
	 **/
	public $distributor_name;
	
	/** 
	 * 分销商的email
	 **/
	public $email;
	
	/** 
	 * 分销商的真实姓名，认证姓名
	 **/
	public $full_name;
	
	/** 
	 * 店铺等级
	 **/
	public $level;
	
	/** 
	 * 分销商的手机号
	 **/
	public $mobile_phone;
	
	/** 
	 * 分销商的电话
	 **/
	public $phone;
	
	/** 
	 * 分销商的网店链接
	 **/
	public $shop_web_link;
	
	/** 
	 * 分销商卖家的开店时间
	 **/
	public $starts;
	
	/** 
	 * 分销商ID
	 **/
	public $user_id;	
}
?>