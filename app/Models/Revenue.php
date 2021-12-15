<?php
 /**
 * 
 */
class Revenue 
{
	public $Thang;
    public $DonHang ;
    public $DoanhThu ;
    public $TongSp ;
	
	public function __construct($Thang,$DonHang,$DoanhThu,$TongSp)
	{
		// code...
		$this->Thang=$Thang;
		$this->DoanhThu=$DoanhThu;
		$this->DonHang=$DonHang;
		$this->TongSp=$TongSp;
	}
	public function getThang()
	{
		// code...
		return $this->Thang;
	}
	public function getDonHang()
	{
		// code...
		return $this->DonHang;
	}
	public function getDoanhThu()
	{
		// code...
		return $this->DoanhThu;
	}
	public function getTongSp()
	{
		// code...
		return $this->TongSp;
	}

}
?>