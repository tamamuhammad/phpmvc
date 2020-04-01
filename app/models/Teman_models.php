<?php 

class Teman_models {
    private $db, $table = 'teman';

    public function __construct(){
        $this->db = new Database;
    }

    public function getTeman(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->fetch();
    }

    public function getTemanbyId($id){
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE id = $id");
        return $this->db->single();
    }

    public function getTemanBaru($data){
        $nama = $data['nama'];
        $kelas = $data['kelas'];
        $alamat = $data['alamat'];
        $sql = "INSERT INTO teman VALUES ('','$nama','$alamat','$kelas')";
        $this->db->query($sql);
        return $this->db->rowCount();
    }

    public function hapusTeman($id){
        $this->db->query('DELETE FROM ' . $this->table . " WHERE id = $id");
        return $this->db->rowCount();  
    }

    public function ubahTeman($data){
        $id = $data['id'];
        $nama = $data['nama'];
        $kelas = $data['kelas'];
        $alamat = $data['alamat'];
        $sql = "UPDATE teman SET nama = '$nama', alamat = '$alamat', kelas = '$kelas' WHERE id = '$id'";
        $this->db->query($sql);
        return $this->db->rowCount();
    }

    public function cariTeman($data){
        $keyword = $data['keyword'];
        $this->db->query("SELECT * FROM teman WHERE nama LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR kelas LIKE '%$keyword%'");
        return $this->db->fetch();
    }
}