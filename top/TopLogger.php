<?php
class TopLogger
{
	public $conf = array(
		"separator" => "\t",
		"log_file" => "/tmp/"
	);

	private $fileHandle;

	protected function getFileHandle()
	{
		if (null === $this->fileHandle)
		{
			if (empty($this->conf["log_file"]))
			{
				trigger_error("no log file spcified.");
			}
			$logDir = dirname($this->conf["log_file"]);
			if (!is_dir($logDir))
			{
				try {
					mkdir($logDir, 0777, true);
				} catch (Exception $e) {
					
				}
			}
			$this->fileHandle = fopen($this->conf["log_file"], "a");
		}
		return $this->fileHandle;
	}

	public function log($logData)
	{
		if ("" == $logData || array() == $logData)
		{
			return false;
		}
		if (is_array($logData))
		{
			$logData = implode($this->conf["separator"], $logData);
		}
		$logData = $logData. "\n";
		try {
			fwrite($this->getFileHandle(), $logData);
		} catch (Exception $e) {
			
		}
	}
}
?>