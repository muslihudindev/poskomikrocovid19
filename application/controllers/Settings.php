<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{ 
		if ($this->Admin_model->verifyUser()) {
			redirect(base_url(), 'auto');
		} 
	}

	public function kasus($page = null, $kasusid = 0)
	{
		if ($this->Admin_model->verifyUser()) {
			if ($this->input->post()) {
				$postData = $this->input->post();
				$this->Kasus_model->updateKasus($postData, $postData["action"]);
			}
			if ($page == "add") {
				$this->load->view('header');
				$this->load->view('settings/kasus_add');
				$this->load->view('footer');
			} elseif ($page == "edit") {
				if ($kasusid == null) {
					redirect(base_url(), 'auto');
				}
				$data["result"] = $this->Kasus_model->getKasus($kasusid);
				$this->load->view('header');
				$this->load->view('settings/kasus_edit', $data);
				$this->load->view('footer');
			} else {
				$data["kasus"] = $this->Kasus_model->getKasus();
				$this->load->view('header');
				$this->load->view('settings/kasus', $data);
				$this->load->view('footer');
			}
		}
	}

	public function keterangan($page = null, $adminid = 0)
	{
		if ($this->Admin_model->verifyUser()) {
			if ($this->input->post()) {
				$postData = $this->input->post();
				$this->Kasus_model->updateKeterangan($postData, $postData["action"]);
			}
			if ($page == "add") {
				$this->load->view('header');
				$this->load->view('settings/keterangan_add');
				$this->load->view('footer');
			} elseif ($page == "edit") {
				if ($adminid == null) {
					redirect(base_url(), 'auto');
				}
				$data["result"] = $this->Kasus_model->getKeterangan($adminid);
				$this->load->view('header');
				$this->load->view('settings/keterangan_edit', $data);
				$this->load->view('footer');
			} else {
				$data["keterangan"] = $this->Kasus_model->getKeterangan();
				$this->load->view('header');
				$this->load->view('settings/keterangan', $data);
				$this->load->view('footer');
			}
		}
	}

	public function keterangan_detail($page = null, $adminid = 0)
	{
		if ($this->Admin_model->verifyUser()) {
			if ($this->input->post()) {
				$postData = $this->input->post();
				$this->Kasus_model->updateKeterangan_detail($postData, $postData["action"]);
			}
			if ($page == "add") {
				if ($adminid == null) {
					redirect(base_url(), 'auto');
				}
				$data["id_keterangan"] = $adminid;
				$this->load->view('header');
				$this->load->view('settings/keterangan_detail_add', $data);
				$this->load->view('footer');
			} elseif ($page == "edit") {
				if ($adminid == null) {
					redirect(base_url(), 'auto');
				}
				$data["result"] = $this->Kasus_model->getKeterangan_detail($adminid);
				$this->load->view('header');
				$this->load->view('settings/keterangan_detail_edit', $data);
				$this->load->view('footer');
			} else {
				redirect('/settings/keterangan', 'refresh');
			}
		}
	}	

	public function admins($page=null, $adminid=0) {
		if ($this->Admin_model->verifyUser()) {
			if ($this->input->post()){
				$postData = $this->input->post();
				$this->Admin_model->updateAdmins($postData, $postData["action"]);
			}
			if ($page == "add") {
				$data["admin_groups"] = $this->Admin_model->getAdminGroups();
				$this->load->view('header');
				$this->load->view('settings/admins_add', $data);
				$this->load->view('footer');
			} elseif ($page == "edit") {
				if ($adminid == null) { redirect(base_url(), 'auto'); }
				$data["admin_groups"] = $this->Admin_model->getAdminGroups();
				$data["result"] = $this->Admin_model->getAdminInfo($adminid);
				$this->load->view('header');
				$this->load->view('settings/admins_edit', $data);
				$this->load->view('footer');
			} else {
				$data["admins"] = $this->Admin_model->getAdmins();
				$this->load->view('header');
				$this->load->view('settings/admins', $data);
				$this->load->view('footer');
			} 	
		}
	}

	public function groups($page=null, $groupid=0) {
		if ($this->Admin_model->verifyUser()) {
			if ($this->input->post()){
				$postData = $this->input->post();
				$this->Admin_model->updateGroups($postData, $postData["action"]);
			}
			if ($page == "add") {
				$this->load->view('header');
				$this->load->view('settings/admingroups_add');
				$this->load->view('footer');
			} elseif ($page == "edit") {
				$data["result"] = $this->Admin_model->getAdminGroups($groupid);
				$this->load->view('header');
				$this->load->view('settings/admingroups_edit', $data);
				$this->load->view('footer');
			} else {
				$data["groups"] = $this->Admin_model->getAdminGroups();
				$this->load->view('header');
				$this->load->view('settings/groups', $data);
				$this->load->view('footer');
			} 
		}
	}
}
