<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasus_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }


        public function updateKasus($postData=null, $action=null) {
                if ($action == "add") {
                    $error = 0;
                    if (!isset($postData["rw"]) || empty($postData["rw"])) { $error = 2;} else { $rw = $this->db->escape(strip_tags($postData["rw"]));}
                    if (!isset($postData["rt"]) || empty($postData["rt"])) { $error = 2;} else { $rt = $this->db->escape(strip_tags($postData["rt"]));}
                    if (!isset($postData["kasus"])) { $error = 2;} else { $kasus = $postData["kasus"];}
                    if ($error == 2) { return $error; }
                    $sql = "SELECT * FROM datasebarancovid WHERE rt = ". $rt;
                    $query = $this->db->query($sql);
                    if ($query->num_rows() > 0) {
                        return 3;
                    } else {
                        if ($kasus >= 1 && $kasus <= 5) {
                            $warna = 'yellow';
                        } else if ($kasus >= 6 && $kasus <= 10) {
                            $warna = 'orange';
                        } else if ($kasus > 10) {
                            $warna = 'red';
                        } else {
                            $warna = 'green';
                        }
                        $sql2 = "INSERT INTO datasebarancovid (rw,rt,kasus,warna) VALUES (".$rw. "," . $rt . "," . $kasus . ",'" . $warna . "')";
                        $this->db->query($sql2);
                        return TRUE;
                    }
                }
                if ($action == "edit") {
                    $error = 0;
                    if (!isset($postData["kasus"])) { $error = 2;} else { $kasus = $postData["kasus"];}
                    if (!isset($postData["id"]) || empty($postData["id"])) { $error = 3;} else { $id = $this->db->escape(strip_tags($postData["id"]));}
                    if ($error == 2) { return $error; }
                    if ($kasus>=1 && $kasus<=5) {
                        $warna = 'yellow';
                    } else if ($kasus >= 6 && $kasus <= 10) {
                        $warna = 'orange';
                    } else if ($kasus > 10) {
                        $warna = 'red';
                    } else {
                        $warna = 'green';
                    }
                    $sql2 = "UPDATE datasebarancovid SET kasus = ".$kasus.", warna = '".$warna."' WHERE id = ".$id;
                    $this->db->query($sql2);
                    return TRUE;
                }
                if ($action == "delete") {
                    $admin_group = $this->db->escape(strip_tags((int)$postData["id"]));
                    $sql2 = "DELETE FROM datasebarancovid WHERE id = ".$admin_group;
                    $this->db->query($sql2);
                    return TRUE;
                }
        }
        
        public function getKasus($additional="") {
            if ($additional !== "") { $additional = "WHERE id = ".$this->db->escape($additional); }
            $sql = "SELECT * FROM datasebarancovid ".$additional;
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return array();
            }
        }


    public function updateKeterangan($postData = null, $action = null)
    {
        if ($action == "add") {
            $error = 0;
            if (!isset($postData["ket"]) || empty($postData["ket"])) {
                $error = 2;
            } else {
                $ket = $this->db->escape(strip_tags($postData["ket"]));
            }
            if (!isset($postData["jml"])) {
                $error = 2;
            } else {
                $jml = $postData["jml"];
            }
            if ($error == 2) {
                return $error;
            }
            $sql = "SELECT * FROM keterangan WHERE ket = " . $ket;
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                return 3;
            } else {
                $sql2 = "INSERT INTO keterangan (ket,jml) VALUES (" . $ket . "," . $jml . ")";
                $this->db->query($sql2);
                return TRUE;
            }
        }
        if ($action == "edit") {
            $error = 0;
            if (!isset($postData["ket"]) || empty($postData["ket"])) {
                $error = 2;
            } else {
                $ket = $this->db->escape(strip_tags($postData["ket"]));
            }
            if (!isset($postData["jml"])) {
                $error = 2;
            } else {
                $jml = $postData["jml"];
            }
            if (!isset($postData["id"]) || empty($postData["id"])) {
                $error = 3;
            } else {
                $id = $this->db->escape(strip_tags($postData["id"]));
            }
            if ($error == 2) {
                return $error;
            }
            $sql2 = "UPDATE keterangan SET ket = " . $ket . ", jml = '" . $jml . "' WHERE id = " . $id;
            $this->db->query($sql2);
            return TRUE;
        }
        if ($action == "delete") {
            $admin_group = $this->db->escape(strip_tags((int)$postData["id"]));
            $sql2 = "DELETE FROM keterangan WHERE id = " . $admin_group;
            $this->db->query($sql2);
            return TRUE;
        }
    }

    public function getKeterangan($additional = "")
    {
        if ($additional !== "") {
            $additional = "WHERE id = " . $this->db->escape($additional);
        }
        $sql = "SELECT * FROM keterangan " . $additional;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function getDetailKeterangan($id)
    {
        $sql = "SELECT * FROM keterangan_detail WHERE id_keterangan = " . $this->db->escape($id);
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }        



}