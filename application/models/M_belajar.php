<?php

/**
 * 
 */
class M_belajar extends CI_Model
{

	function save($datasensor)
	{
		$this->db->insert('sensor', $datasensor);
		return TRUE;
	}

	function ambildata($row = 50)
	{
		$this->db->select('*');
		$this->db->from('sensor')->order_by("id_sensor", "desc")->limit($row, 0);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
	function delete($id)
	{
		$this->db->where('id_sensor', $id);
		$this->db->delete('sensor');
	}
}
