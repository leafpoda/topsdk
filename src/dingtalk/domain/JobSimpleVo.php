<?php

/**
 * 职位信息列表
 * @author auto create
 */
class JobSimpleVo
{
	
	/** 
	 * true :校招，false：社招
	 **/
	public $campus;
	
	/** 
	 * 职位分类
	 **/
	public $category;
	
	/** 
	 * 职位地址 市
	 **/
	public $city;
	
	/** 
	 * 企业id
	 **/
	public $corpid;
	
	/** 
	 * 职位地址 区/县
	 **/
	public $district;
	
	/** 
	 * 职位编码
	 **/
	public $job_code;
	
	/** 
	 * 职位id
	 **/
	public $job_id;
	
	/** 
	 * 职位类型：FULL-TIME:全职，PART-TIME:兼职，INTERNSHIP:实习，OTHER:其他
	 **/
	public $job_nature;
	
	/** 
	 * 最高薪水，单位元
	 **/
	public $max_salary;
	
	/** 
	 * 最低薪水，单位元
	 **/
	public $min_salary;
	
	/** 
	 * 职位名称
	 **/
	public $name;
	
	/** 
	 * 职位地址 省
	 **/
	public $province;
	
	/** 
	 * 薪资月数
	 **/
	public $salary_month;
	
	/** 
	 * 薪资类型，HOUR:小时，DAY:天，WEEK:周，MONTH:月，BY_TIME:次
	 **/
	public $salary_period;	
}
?>