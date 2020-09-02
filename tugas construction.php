<?php 
class handphone
{
	public $android;
	public $ram;
	public $prosesor;

	public function __construct($android,$ram,$prosesor = "8gb")
	{
		$this->android = $android;
		$this->ram = $ram;
		$this->prosesor = $prosesor;
	}
}
$handphoneSaya = new handphone("Naugat","4gb","Snapdragon 855+");
echo $handphoneSaya->android;
echo "|";
echo $handphoneSaya->ram;
echo "|";
echo $handphoneSaya->prosesor;
?>