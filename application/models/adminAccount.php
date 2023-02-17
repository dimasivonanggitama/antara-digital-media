<?php
	class adminAccount extends CI_Model {
		public function deleteStatus_log($id_admin) {
			$this->load->database();
			$this->db->update('admin', array('status_log' => null), array('id' => $id_admin));
		}
		public function getAdminColumnNameExceptPasswordAndStatus() {
			$this->load->database();
			$this->db->select('column_name');
			return $this->db->get_where('INFORMATION_SCHEMA.COLUMNS', array('TABLE_NAME' => 'admin', 'TABLE_SCHEMA' => 'antaradigitalmedia'));
		}
		public function getAdminExceptPasswordAndStatus() {
			$this->load->database();
			$this->db->select('id');
			$this->db->select('username');
			//$this->db->select('fotoProfil');
			$this->db->select('status_log');
			return $this->db->get('admin');
		}
		public function getAdminID($username) {
			$this->load->database();
			$this->db->select('id');
			echo $username;
			return $this->db->get_where('admin', array('username' => $username));
		}
		public function postAvatar($data_photo, $id_admin) {
			$this->load->database();
			$this->db->update('admin', array('fotoProfil' => $data_photo), array('id' => $id_admin));
		}
		public function postStatus_log($id_admin) {
			$this->load->database();
			$this->db->update('admin', array('status_log' => 'login'), array('id' => $id_admin));
		}
	}
