<?PHP
	class Beranda extends CI_Controller
	{
		//Constructor
		
		public function __construct()
		{
			parent::__construct();
			
			//model
			$this->load->model('konten_m');
		}
		
		//Index
		
		public function index()
		{
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->load->view('template/content');
			$this->load->view('template/footer');
		}
		
		public function update()
		{
			$this->konten_m->set_konten($this->input->post('konten'));
			
			$this->konten_m->update();
			
			redirect(site_url());	
		}
	}
?>