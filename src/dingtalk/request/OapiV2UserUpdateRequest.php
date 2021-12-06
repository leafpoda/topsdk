<?php
/**
 * dingtalk API: dingtalk.oapi.v2.user.update request
 * 
 * @author auto create
 * @since 1.0, 2020.10.19
 */
class OapiV2UserUpdateRequest
{
	/** 
	 * 所属部门id列表
	 **/
	private $deptIdList;
	
	/** 
	 * 员工在对应的部门中的排序。
	 **/
	private $deptOrderList;
	
	/** 
	 * 员工在对应的部门中的职位。
	 **/
	private $deptTitleList;
	
	/** 
	 * 员工邮箱，长度最大64个字符。企业内必须唯一，不可重复。
	 **/
	private $email;
	
	/** 
	 * 扩展属性，长度最大2000个字符。可以设置多种属性（手机上最多显示10个扩展属性，具体显示哪些属性，请到OA管理后台->设置->通讯录信息设置和OA管理后台->设置->手机端显示信息设置）。 该字段的值支持链接类型填写，同时链接支持变量通配符自动替换，目前支持通配符有：userid，corpid。示例： [工位地址](http://www.dingtalk.com?userid=#userid#&corpid=#corpid#)
	 **/
	private $extension;
	
	/** 
	 * 是否号码隐藏。隐藏手机号后，手机号在个人资料页隐藏，但仍可对其发DING、发起钉钉免费商务电话。
	 **/
	private $hideMobile;
	
	/** 
	 * 入职时间，Unix时间戳，单位ms。
	 **/
	private $hiredDate;
	
	/** 
	 * 员工工号，长度最大64个字符。
	 **/
	private $jobNumber;
	
	/** 
	 * 语言
	 **/
	private $language;
	
	/** 
	 * 手机号码，企业内必须唯一，不可重复。如果是国际号码，请使用+xx-xxxxxx的格式
	 **/
	private $mobile;
	
	/** 
	 * 员工名称，长度最大64个字符。
	 **/
	private $name;
	
	/** 
	 * 员工的企业邮箱，员工的企业邮箱已开通，才能增加此字段。
	 **/
	private $orgEmail;
	
	/** 
	 * 备注，长度最大1024个字符。
	 **/
	private $remark;
	
	/** 
	 * 是否高管模式。开启后，手机号码对所有员工隐藏。普通员工无法对其发DING、发起钉钉免费商务电话。高管之间不受影响。
	 **/
	private $seniorMode;
	
	/** 
	 * 分机号，长度最大50个字符。企业内必须唯一，不可重复
	 **/
	private $telephone;
	
	/** 
	 * 职位，长度最大300个字符。
	 **/
	private $title;
	
	/** 
	 * 员工id，长度最大64个字符。员工在当前企业内的唯一标识。如果不传，服务器将自动生成一个userid。创建后不可修改，企业内必须唯一。
	 **/
	private $userid;
	
	/** 
	 * 办公地点，长度最大50个字符。
	 **/
	private $workPlace;
	
	private $apiParas = array();
	
	public function setDeptIdList($deptIdList)
	{
		$this->deptIdList = $deptIdList;
		$this->apiParas["dept_id_list"] = $deptIdList;
	}

	public function getDeptIdList()
	{
		return $this->deptIdList;
	}

	public function setDeptOrderList($deptOrderList)
	{
		$this->deptOrderList = $deptOrderList;
		$this->apiParas["dept_order_list"] = $deptOrderList;
	}

	public function getDeptOrderList()
	{
		return $this->deptOrderList;
	}

	public function setDeptTitleList($deptTitleList)
	{
		$this->deptTitleList = $deptTitleList;
		$this->apiParas["dept_title_list"] = $deptTitleList;
	}

	public function getDeptTitleList()
	{
		return $this->deptTitleList;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setExtension($extension)
	{
		$this->extension = $extension;
		$this->apiParas["extension"] = $extension;
	}

	public function getExtension()
	{
		return $this->extension;
	}

	public function setHideMobile($hideMobile)
	{
		$this->hideMobile = $hideMobile;
		$this->apiParas["hide_mobile"] = $hideMobile;
	}

	public function getHideMobile()
	{
		return $this->hideMobile;
	}

	public function setHiredDate($hiredDate)
	{
		$this->hiredDate = $hiredDate;
		$this->apiParas["hired_date"] = $hiredDate;
	}

	public function getHiredDate()
	{
		return $this->hiredDate;
	}

	public function setJobNumber($jobNumber)
	{
		$this->jobNumber = $jobNumber;
		$this->apiParas["job_number"] = $jobNumber;
	}

	public function getJobNumber()
	{
		return $this->jobNumber;
	}

	public function setLanguage($language)
	{
		$this->language = $language;
		$this->apiParas["language"] = $language;
	}

	public function getLanguage()
	{
		return $this->language;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOrgEmail($orgEmail)
	{
		$this->orgEmail = $orgEmail;
		$this->apiParas["org_email"] = $orgEmail;
	}

	public function getOrgEmail()
	{
		return $this->orgEmail;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setSeniorMode($seniorMode)
	{
		$this->seniorMode = $seniorMode;
		$this->apiParas["senior_mode"] = $seniorMode;
	}

	public function getSeniorMode()
	{
		return $this->seniorMode;
	}

	public function setTelephone($telephone)
	{
		$this->telephone = $telephone;
		$this->apiParas["telephone"] = $telephone;
	}

	public function getTelephone()
	{
		return $this->telephone;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function setWorkPlace($workPlace)
	{
		$this->workPlace = $workPlace;
		$this->apiParas["work_place"] = $workPlace;
	}

	public function getWorkPlace()
	{
		return $this->workPlace;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.v2.user.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->deptIdList,100,"deptIdList");
		RequestCheckUtil::checkMaxLength($this->email,64,"email");
		RequestCheckUtil::checkMinValue($this->hiredDate,1,"hiredDate");
		RequestCheckUtil::checkMaxLength($this->jobNumber,64,"jobNumber");
		RequestCheckUtil::checkMaxLength($this->language,6,"language");
		RequestCheckUtil::checkMaxLength($this->name,64,"name");
		RequestCheckUtil::checkMaxLength($this->remark,1024,"remark");
		RequestCheckUtil::checkMaxLength($this->telephone,50,"telephone");
		RequestCheckUtil::checkMaxLength($this->title,300,"title");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
		RequestCheckUtil::checkMaxLength($this->userid,64,"userid");
		RequestCheckUtil::checkMaxLength($this->workPlace,50,"workPlace");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
