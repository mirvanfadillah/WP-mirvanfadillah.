<?php class Contoh1 extends CI_Controller
 { 
	public function index()
	 { 
		echo "<h1>M IRVAN FADILLAH</h1>"; 
		echo"Nama saya M IRVAN FADILLAH 
		Dari kelas 12.3C.30 hobi yang saya sukai motorcross"; 
		//$this->load->view('view-latihan1');
		
	} public function penjumlahan($n1, $n2) 
	
	{ 
		$this->load->model('Model_latihan1'); 
		
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2); 
		  
		  $this->load->view('view-latihan1', $data);  
 
	} 
}