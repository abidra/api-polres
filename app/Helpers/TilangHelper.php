<?php

namespace App\Helpers;

class TilangHelper{

    public function __construct(){
        //
    }

    public static function statusSekarang($val){
        $sub_aktivitas = [
            '0' => 'Sudah di Polres',
            '1' => 'Sudah di Pengadilan',
			'2' => 'Sudah di Kejaksaan',
            '3' => 'Sudah Diambil',
        ];

        return $sub_aktivitas[$val];
    }
}
?>