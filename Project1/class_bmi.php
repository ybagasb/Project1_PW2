<?php
require_once 'class_pasien.php';
class BMI extends Pasien {
    public $berat;
    public $tinggi;

    public function Cetak() {
        parent::Cetak();
        return "<b>
                Berat Badan : $this->berat <br><br>                  
                Tinggi Badan : $this->tinggi <br><br></b>";
    }
    public function statusBMI($BMI) {
        if ($BMI < 18.5) {
            return "<td>Kekurangan Berat Badan</td>";
        }
        else if ($BMI >= 18.5 && $BMI <= 24.9) {
            return "<td>Normal (ideal)</td>";
        }
        else if ($BMI >= 25.0 && $BMI <= 29.9) {
            return "<td>Kelebihan Berat Badan</td>";
        }
        else {
            return "<td>Kegemukan (Obesitas)</td>";
        }
    }
    
}