<?php
class Postalcode_model extends CI_model
{
    public function get_postalcodes()
    {
        $this->db->select('*');
        $this->db->from('postalcodeview');
        return $this->db->get()->result_array();
    }

    public function get_chosen_postalcode($PostalCode)
    {
        $this->db->select('*');
        $this->db->from('postalcodeview');
        $this->db->where('PostalCode', $PostalCode);
        return $this->db->get()->result_array();
    }

    public function get_by_name($postPlace)
    {
        $where = "postPlace like '%" . $postPlace . "%'";
        $this->db->select('*');
        $this->db->from('postalcodeview');
        $this->db->where($where);
        return $this->db->get()->result_array();
    }

    public function delete_postalcode($PostalCode)
    {
        $this->db->db_debug = false;
        $this->db->where('PostalCode', $PostalCode);
        $test = $this->db->delete('postalcode');
        return $test;
    }

    public function save_edited($update_id, $data_update)
    {
        $this->db->db_debug = false;
        $this->db->where('PostalCode', $update_id);
        $upd_result = $this->db->update('postalcode', $data_update);
        return $upd_result;
    }
    public function insert_new_postalcode($insert_data)
    {
        $this->db->db_debug = false;
        $test = $this->db->insert('postalcode', $insert_data);
        return $test;
    }
}
