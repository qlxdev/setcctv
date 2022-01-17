<?php

/**
 * Created by PhpStorm.
 * User: sankester
 * Date: 11/05/2017
 * Time: 15:51
 */

class MAlternatif extends CI_Model
{

    public $id_alternatif;
    public $nama_alternatif;

    public function __construct()
    {
        parent::__construct();
    }

    private function getTable()
    {
        return 'alternatif';
    }

    private function getData()
    {
        $data = array(
            'alternatif' => $this->nama_alternatif
        );

        return $data;
    }

    public function getAll()
    {
        $alternatif = array();
        $query = $this->db->get($this->getTable());
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $alternatif[] = $row;
            }
        }
        return $alternatif;
    }


    public function insert()
    {
        $this->db->insert($this->getTable(), $this->getData());
        return $this->db->insert_id();
    }

    public function update($where)
    {
        $status = $this->db->update($this->getTable(), $this->getData(), $where);
        return $status;
    }

    public function delete($id)
    {
        $this->db->where('id_alternatif', $id);
        return $this->db->delete($this->getTable());
    }

    public function getLastID()
    {
        $this->db->select('id_alternatif');
        $this->db->order_by('id_alternatif', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get($this->getTable());
        return $query->row();
    }
}