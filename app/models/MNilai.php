<?php

/**
 * Created by PhpStorm.
 * User: sankester
 * Date: 11/05/2017
 * Time: 15:53
 */
class MNilai extends CI_Model
{

    public $id_alternatif;
    public $id_kriteria;
    public $nilai;

    public function __construct()
    {
        parent::__construct();
    }

    private function getTable()
    {
        return 'data_uji';
    }

    private function getData()
    {
        $data = array(
            'id_alternatif' => $this->id_alternatif,
            'id_kriteria' => $this->id_kriteria,
            'nilai' => $this->nilai
        );

        return $data;
    }

    public function insert()
    {
        $status = $this->db->insert($this->getTable(), $this->getData());
        return $status;
    }

    public function getNilaiByUniveristas($id)
    {
        $query = $this->db->query(
            'select a.id_alternatif, a.nama_alternatif, k.id_kriteria, du.nilai from alternatif a, data_uji du, kriteria k, subkriteria sk where a.id_alternatif = du.id_alternatif AND k.id_kriteria = du.id_kriteria and k.id_kriteria = sk.id_kriteria and a.id_alternatif = ' . $id . ' GROUP by du.nilai'
        );
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $nilai[] = $row;
            }

            return $nilai;
        }
    }

    public function getNilaiDataUji()
    {
        $query = $this->db->query(
            'select a.id_alternatif, a.nama_alternatif, a.device, k.id_kriteria, k.nama_kriteria ,du.nilai from alternatif a, data_uji du, kriteria k where a.id_alternatif = du.id_alternatif AND k.id_kriteria = du.id_kriteria '
        );
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $nilai[] = $row;
            }

            return $nilai;
        }
    }

    public function getNilaiDataUjiDashboard()
    {
        $query = $this->db->query(
            'select a.id_alternatif, a.nama_alternatif, a.device, k.id_kriteria, k.nama_kriteria ,du.nilai from alternatif a, data_uji du, kriteria k where a.id_alternatif = du.id_alternatif AND k.id_kriteria = du.id_kriteria limit 4 '
        );
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $nilai[] = $row;
            }

            return $nilai;
        }
    }

    public function update()
    {
        $data = array('nilai' => $this->nilai);
        $this->db->where('id_alternatif', $this->id_alternatif);
        $this->db->where('id_kriteria', $this->id_kriteria);
        $this->db->update($this->getTable(), $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where('id_alternatif', $id);
        return $this->db->delete($this->getTable());
    }
}