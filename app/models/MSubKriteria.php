<?php

/**
 * Created by PhpStorm.
 * User: sankester
 * Date: 11/05/2017
 * Time: 15:54
 */
class MSubKriteria extends CI_Model
{

    public $id_subkriteria;
    public $id_kriteria;
    public $nama_subkriteria;
    public $nilai_bobot;


    public function __construct()
    {
        parent::__construct();
    }

    private function getTable()
    {
        return 'subkriteria';
    }

    private function getData()
    {
        $data = array(
            'id_kriteria' => $this->id_kriteria,
            'nama_subkriteria' => $this->nama_subkriteria,
            'nilai_bobot' => $this->nilai_bobot
        );
        return $data;
    }

    public function getAll()
    {
        $query = $this->db->get($this->getTable());
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $subkriterias[] = $row;
            }

            return $subkriterias;
        }
    }

    public function getById()
    {
        $this->db->where('id_kriteria', $this->id_kriteria);
        $query = $this->db->get($this->getTable());

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $subkriteria[] = $row;
            }

            return $subkriteria;
        }
    }

    public function insert()
    {
        $data = $this->getData();
        $this->db->insert($this->getTable(), $data);
        return $this->db->insert_id();
    }

    public function update()
    {
        $data = $this->getData();
        $this->db->where('id_subkriteria', $this->id_subkriteria);
        $this->db->where('id_kriteria', $this->id_kriteria);
        $this->db->update($this->getTable(), $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where('id_kriteria', $id);
        return $this->db->delete($this->getTable());
    }
}