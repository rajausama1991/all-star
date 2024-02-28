<?php if (!defined('BASEPATH')) exit('No direct script  allow');

class Common_model extends CI_Model
{
	
    function insert_array($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

    function select_where_return_row($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();

        return $query->row();
	}
}
?>