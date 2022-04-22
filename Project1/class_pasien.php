<?php
class Pasien {
    public $tglperiksa;
    public $kdpasien;
    public $nama;
    public $umur;
    public $gender;

    public function Cetak() {
        return "<b>
                Tanggal Periksa : $this->tglperiksa   <br><br>
                Kode Pasien : $this->kdpasien   <br><br>
                Nama : $this->nama   <br><br>
                Umur : $this->umur <br><br>
                Jenis Kelamin : $this->gender</b>"; 
    }
}