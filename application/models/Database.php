<?php

defined('BASEPATH') or exit('No direct script access allowed');




class Database extends CI_Model
{
	public function getNews()
	{

		$query = $this->db->query('SELECT * FROM News ORDER BY Time_Created DESC');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}


	public function saverecords($name, $email, $password, $mobile)
	{
		$query = "INSERT INTO Users VALUES('','$name','$email','$password','$mobile')";
		$this->db->query($query);
	}

	public function displayrecords()
	{
		$query = $this->db->query('SELECT * FROM Users');
		return $query->result();
	}

	/* public function updateRecords($id, $name, $email, $password, $mobile)
	{
		$data = array(
			'name' => $name,
			'email' => $email,
			'passwords' => $password,
			'mobile' => $mobile
		);

		$this->db->where('id', $id);
		$this->db->update('Users', $data);
	} */

	public function deleteRecords($id)

	{
		$this->db->query("delete  from Users where id='" . $id . "'");
	}

	public function displayRecordsById($id)
	{
		$query = $this->db->query("SELECT * FROM Users WHERE id='" . $id . "'");
		return $query->result();
	}

	function updateRecords($name, $email, $password, $mobile, $id)
	{
		$data = array(
			'name' => $name,
			'email' => $email,
			'passwords' => $password,
			'mobile' => $mobile
		);

		$this->db->update('Users', $data, array('id' => $id));
		//$this->db->where('id', $id);
		//$this->db->last_query();
		//$this->db->query("update Users SET  name='$name',email='$email',passwords='$password',mobile='$mobile' where id='" . $id . "'");
	}
}

/* End of file Database.php */
