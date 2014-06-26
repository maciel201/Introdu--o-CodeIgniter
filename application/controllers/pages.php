<?php

/**
 * Tutorial de CodeIgniter
 * Páginas Estáticas
 * 
 * @link http://127.0.0.1/aulaci/user_guide/tutorial/static_pages.html Tutorial
 * @author Tarcnux
 */
class Pages extends CI_Controller{
    public function view($page = 'home') {
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
	{
		// Mostra a mensagem de página inexistente!
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize a primeira letra

	$this->load->view('templates/header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);
    }
}
