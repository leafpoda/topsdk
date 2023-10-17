<?php

/**
 * 用户
 * @author auto create
 */
class User
{
	
	/** 
	 * 有无绑定。可选值:bind(绑定),notbind(未绑定)
	 **/
	public $alipay_bind;
	
	/** 
	 * 是否受限制。可选值:limited(受限制),unlimited(不受限)
	 **/
	public $auto_repost;
	
	/** 
	 * 用户头像地址
	 **/
	public $avatar;
	
	/** 
	 * 是否参加消保
	 **/
	public $consumer_protection;
	
	/** 
	 * 是否购买多图服务。可选值:true(是),false(否)
	 **/
	public $has_more_pic;
	
	/** 
	 * 用户作为卖家是否开过店
	 **/
	public $has_shop;
	
	/** 
	 * 表示用户是否具备修改商品减库存逻辑的权限（一共有拍下减库存和付款减库存两种逻辑） 值含义： 1）true：是 2）false：否。
	 **/
	public $has_sub_stock;
	
	/** 
	 * 用户是否是金牌卖家
	 **/
	public $is_golden_seller;
	
	/** 
	 * 是否24小时闪电发货(实物类)
	 **/
	public $is_lightning_consignment;
	
	/** 
	 * 是否是特价版商家，需要field查询
	 **/
	public $is_tjb_seller;
	
	/** 
	 * 可上传商品图片数量
	 **/
	public $item_img_num;
	
	/** 
	 * 单张商品图片最大容量(商品主图大小)。单位:k
	 **/
	public $item_img_size;
	
	/** 
	 * 是否是无名良品用户，true or false
	 **/
	public $liangpin;
	
	/** 
	 * 是否订阅了淘宝天下杂志
	 **/
	public $magazine_subscribe;
	
	/** 
	 * 用户昵称
	 **/
	public $nick;
	
	/** 
	 * 用户是否为网游用户，属于隐私信息，需要登陆才能查看自己的。 目前仅供taobao.user.get使用
	 **/
	public $online_gaming;
	
	/** 
	 * 有无实名认证。可选值:authentication(实名认证),not authentication(没有认证)
	 **/
	public $promoted_type;
	
	/** 
	 * 可上传属性图片数量
	 **/
	public $prop_img_num;
	
	/** 
	 * 单张销售属性图片最大容量（非主图的商品图片和商品属性图片）。单位:k
	 **/
	public $prop_img_size;
	
	/** 
	 * 卖家信用
	 **/
	public $seller_credit;
	
	/** 
	 * 性别。可选值:m(男),f(女)
	 **/
	public $sex;
	
	/** 
	 * 卖家是否签署食品卖家承诺协议
	 **/
	public $sign_food_seller_promise;
	
	/** 
	 * 状态。可选值:normal(正常),inactive(未激活),delete(删除),reeze(冻结),supervise(监管)
	 **/
	public $status;
	
	/** 
	 * 用户类型。可选值:B(B商家),C(C商家)
	 **/
	public $type;
	
	/** 
	 * 用户数字ID
	 **/
	public $user_id;
	
	/** 
	 * 用户参与垂直市场类型。shoes表示鞋城垂直市场用户，3C表示3C垂直市场用户。多个类型之间用&quot;,&quot;分隔。如：一个用户既是3C用户又是鞋城用户，那么这个字段返回就是&quot;3C,shoes&quot;。如果用户不是垂直市场用户，此字段返回为&quot;&quot;。
	 **/
	public $vertical_market;
	
	/** 
	 * 用户的全站vip信息，可取值如下：c(普通会员),asso_vip(荣誉会员)，vip1,vip2,vip3,vip4,vip5,vip6(六个等级的正式vip会员)，共8种取值，其中asso_vip是由vip会员衰退而成，与主站上的vip0对应。
	 **/
	public $vip_info;	
}
?>