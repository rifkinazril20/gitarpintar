<?php

defined('BASEPATH') or exit('No direct script access allowed');

class main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('welcome');
        }
    }

    public function index()
    {
        $this->load->view('assets/atas', false);
        $this->load->view('assets/index', false);
        $this->load->view('assets/bawah', false);
    }
    public function sejarah()
    {
        $this->load->view('assets/atas', false);
        $this->load->view('assets/sejarah', false);
        $this->load->view('assets/bawah', false);
    }

    public function setsejarah()
    {
		$config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']  = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('msg', 'error');
				redirect('main/sejarah');
            } else {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']    = 'gd2';
                $config['source_image']     = './image/' . $gbr['file_name'];
                $config['create_thumb']     = false;
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '80%';
                $config['width']            = 1024;
                $config['height']           = 768;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $q = $this->db->query("select * from sejarah");
                $row = $q->row();
                unlink('./image/' . $row->gambar);
                $sejarah = $_POST['sejarah'];
                $this->db->query("update sejarah set sejarah='$sejarah',gambar='$gambar'");
                $this->session->set_flashdata('msg', 'edit');
                redirect('main/sejarah');
            }
        } else {
            $sejarah = $_POST['sejarah'];
            $this->db->query("update sejarah set sejarah='$sejarah'");
            $this->session->set_flashdata('msg', 'edit');
            redirect('main/sejarah');
        }
    }


	public function bagian()
    {
        $this->load->view('assets/atas', false);
        $this->load->view('assets/bagian', false);
        $this->load->view('assets/bawah', false);
    }


	public function savebagian()
	{
		$bagian = $_POST['bagian'];
		$this->db->query("insert into bagian_gitar  values('','$bagian')");
		$this->session->set_flashdata('msg', 'success');
		redirect('main/bagian');
	}

	public function hapusbagian($id='')
	{
		$this->db->query("delete from bagian_gitar where id='$id'");
		$this->session->set_flashdata('msg', 'hapus');
		redirect('main/bagian');
	}


	public function tuning()
    {
        $this->load->view('assets/atas', false);
        $this->load->view('assets/tuning', false);
        $this->load->view('assets/bawah', false);
    }

    public function settuning()
    {
		$config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']  = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->upload->do_upload('gambar')) {
                echo false;
            } else {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']    = 'gd2';
                $config['source_image']     = './image/' . $gbr['file_name'];
                $config['create_thumb']     = false;
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '80%';
                $config['width']            = 1024;
                $config['height']           = 768;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $q = $this->db->query("select * from tuning");
                $row = $q->row();
                unlink('./image/' . $row->gambar);
                $tuning = $_POST['tuning'];
                $this->db->query("update tuning set tuning='$tuning',gambar='$gambar'");
                $this->session->set_flashdata('msg', 'edit');
                redirect('main/tuning');
            }
        } else {
            $tuning = $_POST['tuning'];
            $this->db->query("update tuning set tuning='$tuning'");
            $this->session->set_flashdata('msg', 'edit');
            redirect('main/tuning');
        }
    }
	public function penjarian()
    {
        $this->load->view('assets/atas', false);
        $this->load->view('assets/penjarian', false);
        $this->load->view('assets/bawah', false);
    }

    public function setpenjarian()
    {
		$config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']  = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->upload->do_upload('gambar')) {
                echo false;
            } else {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']    = 'gd2';
                $config['source_image']     = './image/' . $gbr['file_name'];
                $config['create_thumb']     = false;
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '80%';
                $config['width']            = 1024;
                $config['height']           = 768;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $q = $this->db->query("select * from penjarian");
                $row = $q->row();
                unlink('./image/' . $row->gambar);
                $penjarian = $_POST['penjarian'];
				$this->db->update('penjarian', array('desc' => $penjarian,'gambar' => $gambar));
                $this->session->set_flashdata('msg', 'edit');
                redirect('main/penjarian');
            }
        } else {
            $penjarian = $_POST['penjarian'];
			$this->db->update('penjarian', array('desc' => $penjarian));
            // $this->db->query("update penjarian set desc='$penjarian'");
            $this->session->set_flashdata('msg', 'edit');
            redirect('main/penjarian');
        }
    }
	public function tangganada()
    {
        $this->load->view('assets/atas', false);
        $this->load->view('assets/tangganada', false);
        $this->load->view('assets/bawah', false);
    }

    public function settangganada()
    {
		$config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']  = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->upload->do_upload('gambar')) {
                echo false;
            } else {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']    = 'gd2';
                $config['source_image']     = './image/' . $gbr['file_name'];
                $config['create_thumb']     = false;
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '80%';
                $config['width']            = 1024;
                $config['height']           = 768;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $q = $this->db->query("select * from tangga_nada");
                $row = $q->row();
                unlink('./image/' . $row->gambar);
                $desc = $_POST['desc'];
				$this->db->update('tangga_nada', array('desc' => $desc,'gambar' => $gambar));
                $this->session->set_flashdata('msg', 'edit');
                redirect('main/tangganada');
            }
        } else {
            $desc = $_POST['desc'];
			$this->db->update('tangga_nada', array('desc' => $desc));
            // $this->db->query("update penjarian set desc='$penjarian'");
            $this->session->set_flashdata('msg', 'edit');
            redirect('main/tangganada');
        }
    }
	public function achord()
    {
        $this->load->view('assets/atas', false);
        $this->load->view('assets/achord', false);
        $this->load->view('assets/bawah', false);
    }

    public function setachord()
    {
		$config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']  = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->upload->do_upload('gambar')) {
                echo false;
            } else {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']    = 'gd2';
                $config['source_image']     = './image/' . $gbr['file_name'];
                $config['create_thumb']     = false;
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '80%';
                $config['width']            = 1024;
                $config['height']           = 768;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $q = $this->db->query("select * from chord");
                $row = $q->row();
                unlink('./image/' . $row->gambar);
                $desc = $_POST['desc'];
				$this->db->update('chord', array('desc' => $desc,'gambar' => $gambar));
                $this->session->set_flashdata('msg', 'edit');
                redirect('main/achord');
            }
        } else {
            $desc = $_POST['desc'];
			$this->db->update('chord', array('desc' => $desc));
            // $this->db->query("update penjarian set desc='$penjarian'");
            $this->session->set_flashdata('msg', 'edit');
            redirect('main/achord');
        }
    }

}

/* End of file main.php */
