<?php

class Master extends CI_Model

{
    private $table;
    // membuat encapsulation untuk properties table
    public function __construct()
    {
        parent::__construct();
    }
        ///FUNGSi JOIN////
        function getAlljoin($query)
        {
            $table = $query ['table'];
            $select = $query ['select'];
            $join = $query ['join'];
    
            $sql = "SELECT $select from  $table $join ";
    
            $this->db->query($sql);
            if ($query ['where'] != '') {
                $sql .= 'where' .$query['where'];
            }
            return $this->db->query($sql);
        }
    function getAll($table)
    {
        $query = "SELECT * FROM $table ";
        return $this->db->query($query);
    }

    function input_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function update_data($table, $data, $id, $idfield)
    {
        $this->db->where($idfield, $id);
        $this->db->update($table, $data);
    }
    function delete($table, $id, $idfield)
    {
        $this->db->delete(
            $table,
            array($idfield => $id)
        );
    }
    function getby_id($table, $id, $idfield)
    {
        $query = "SELECT * FROM $table where $idfield= '$id'";
        return $this->db->query($query);
    }
    function kodebv2($tipe, $idfieldColumn, $table, $key1, $key2)
    {
        $query = "SELECT * FROM $table ORDER BY $idfieldColumn DESC LIMIT 1";
        $row = $this->db->query($query)->result();
        if ($row != null) :
            foreach ($row as $rowdata) :
                $ambil = (int)substr($rowdata->$idfieldColumn, $key1, $key2) + 1;
                if ($ambil > 9999) :
                    return strtoupper("kode melebihi batas, silahkan pergi dari sini..");
                endif;
                $ambil = sprintf("%0{$key2}s", $ambil);
                return $tipe . $ambil;
            endforeach;
        else :
            return $tipe . '0001';
        endif;
    }

}