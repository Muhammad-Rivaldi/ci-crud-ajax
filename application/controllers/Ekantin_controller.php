<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekantin_controller extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_system');
        $this->load->helper(array('url', 'form'));
    }

    // membuka halaman default
    public function index()
    {
        // $data['menu'] = $this->model_system->tampil_menu();
        $this->load->view('admin/index');
    }

    // membuka halaman login
    public function login()
    {
        $this->load->view('auth/login');
    }

    // untuk proses login
    public function aksi_login()
    {
        $usernames = $this->input->post('usernama');
        $passwords = md5($this->input->post('katasandi'));
        $where = array(
            'username' => $usernames,
            'password' => $passwords
        );
        $cek = $this->model_system->cek_login($where)->num_rows();

        if ($cek > 0) {
            $role = $this->model_system->cek_login($where)->row(0)->id_level;
            if ($role == '1') {
                $namauser = $this->model_system->cek_login($where)->row(0)->nama_user;
                $data_session = array(
                    'nama_user' => $namauser,
                    'username' => $usernames,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                if ($this->session->userdata('status') == 'login') {
                    header("Location:" . site_url() . "/ekantin_controller/owner_dash");
                } else {
                    header("Location:" . site_url() . "ekantin_controller/index");
                }
            } elseif ($role == '2') {
                $namauser = $this->model_system->cek_login($where)->row(0)->nama_user;
                $data_session = array(
                    'nama_user' => $namauser,
                    'username' => $usernames,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                if ($this->session->userdata('status') == 'login') {
                    header("Location:" . site_url() . "/ekantin_controller/admin_dash");
                } else {
                    header("Location:" . site_url() . "ekantin_controller/index");
                }
            } elseif ($role == '3') {
                $namauser = $this->model_system->cek_login($where)->row(0)->nama_user;
                $data_session = array(
                    'nama_user' => $namauser,
                    'username' => $usernames,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                if ($this->session->userdata('status') == 'login') {
                    header("Location:" . site_url() . "/ekantin_kasir/kasir_dash");
                } else {
                    header("Location:" . site_url() . "ekantin_controller/index");
                }
            } elseif ($role == '4') {
                $namauser = $this->model_system->cek_login($where)->row(0)->nama_user;
                $role = $this->model_system->cek_login($where)->row(0)->id_level;
                $data_session = array(
                    'nama_user' => $namauser,
                    'username' => $usernames,
                    'id_waiter' => $role,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                if ($this->session->userdata('status') == 'login') {
                    header("Location:" . site_url() . "/ekantin_waiter/waiter_dash");
                } else {
                    header("Location:" . site_url() . "ekantin_controller/index");
                }
            }
        } else {
            header("Location:" . base_url() . "");
        }
    }

    // untuk proses logout
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	// 

    // membuka halaman dashboard admin
    public function admin_dash()
    {
        $data['menu'] = $this->model_system->tampil_menu();
        $this->load->view('admin/index', $data);
        
    }

    // membuka halaman menu admin
    public function admin_menu()
    {
        $data['menu'] = $this->model_system->tampil_menu();
        $this->load->view('admin/menu',$data);
    }

    // membuka halaman menu user
    public function admin_users()
    {
        $data['user'] = $this->model_system->tampil_user();
        $this->load->view('admin/user',$data);
    }

    // membuka halaman menu level
    public function admin_levels()
    {
        $data['level'] = $this->model_system->tampil_level();
        $this->load->view('admin/level',$data);
    }

    // membuka halaman menu pemesanan
    public function admin_order()
    {
        $data['order'] = $this->model_system->tampil_order();
        $this->load->view('admin/pemesanan',$data);
    }

    // membuka halaman menu transaksi
    public function admin_tran()
    {
        $data['transaksi'] = $this->model_system->tampil_tran();
        $this->load->view('admin/transaksi',$data);
    }

    // insert data menu ke db
    public function admin_insertmenu()
    {
        $this->model_system->insert_menu();
    }

    // update data menu ke db
    public function admin_updatemenu()
    {
        $this->model_system->update_menu();
    }

    // delete data menu ke db
    public function admin_deletemenu($id)
    {
        $this->model_system->delete_menu($id);
    }

    // insert data user ke db
    public function admin_insertuser()
    {
        $this->model_system->insert_user();
    }

    // update data user ke db
    
    function admin_updateuser()
    {
        $this->model_system->update_user();
    }

    // AJAX
    // ajax show data
    public function dataMakanan()
    {
        $datamakanan = $this->model_system->get_barang();
        foreach ($datamakanan as $value) {
			$tbody = array();
			$tbody[] = $value['id_masakan'];
            $tbody[] = $value['nama_menu'];
            $img = "<img style='width: 20%;' src='http://localhost/ci-ajax-crud/asset/foto-menu/" . $value['foto_menu'] . "' ?>";
			$tbody[] = $img;
            $tbody[] = $value['jenis_menu'];
            $tbody[] = $value['harga'];
			$tbody[] = $value['status_menu'];
			$btn = "<button type='button' class='btn btn-primary btn-icon-split editbtn' name='editbtn' data-toggle='modal' id=" . $value['id_masakan'] . " 	style='padding-right: 6%;'>
						<span class='icon text-white'>
							<i class='fas fa-edit'></i>
						</span>
						<span class='text'>Edit Data</span>
						</button>
						<button type='button' data-toggle='modal' name='deletebtn' id=" . $value['id_masakan'] . " class='btn btn-danger btn-icon-split mt-2 deletebtn'>
							<span class='icon text-white'>
								<i class='fas fa-trash'></i>
							</span>
							<span class='text'>Delete Data</span>
						</button>";
			$tbody[] = $btn;
			$data[] = $tbody;
		}
		if ($datamakanan) {
			echo json_encode(array('data' => $data));
		} else {
			echo json_encode(array('data' => 0));
		}
    }

    // ajax add data
    // add goods
	public function addData()
	{
		if ($_POST["action"] == "Add") {
			$data = array(
				'id_masakan' => "",
				'nama_menu' => $this->input->post('namabarang'),
				'harga' => $this->input->post('hargabarang'),
				'jenis_menu' => $this->input->post('kategoriitem'),
				'status_menu' => $this->input->post('status'),
				'foto_menu' => $this->upload_image()
			);
			$this->db->set('created_at', 'NOW()', FALSE);
			$this->db->insert('menus', $data);
			echo 'Data Inserted';
		}
    }
    
    // funct untuk upload gambar
    // function upload image
	public function upload_image()
	{
		if (isset($_FILES['user_image'])) {
			$extension = explode('.', $_FILES['user_image']['name']);
			$new_name = rand() . '.' . $extension[1];
			$destination = './asset/foto-menu/' . $new_name;
			move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
			return $new_name;
		}
	}

}
