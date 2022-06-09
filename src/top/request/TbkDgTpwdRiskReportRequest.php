<?php
/**
 * TOP API: taobao.tbk.dg.tpwd.risk.report request
 * 
 * @author auto create
 * @since 1.0, 2021.12.29
 */
class TbkDgTpwdRiskReportRequest
{
	/** 
	 * 分页参数，一次最多不能超过1000
	 **/
	private $limit;
	
	/** 
	 * 分页参数
	 **/
	private $offset;
	
	/** 
	 * 如有pid，则查询pid下的relationid名单；如没有pid，则查询appkey关联userid下的pid名单
	 **/
	private $pid;
	
	private $apiParas = array();
	
	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.tpwd.risk.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->limit,"limit");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
