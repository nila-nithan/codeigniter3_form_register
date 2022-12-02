
<?php
class Nithan_model extends CI_Model
{
    function register_user($data)
    {
        if ($this->db->insert('srii', $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function authenticate($data)
    { print_r($data);
        $res = $this->db->get_where('srii', $data)->row();
        if ($res) {
            return $res;
            // print_r($res);
        } else {
            return false;
            // print_r('Invalid credentials');
        }
    }
}
?>