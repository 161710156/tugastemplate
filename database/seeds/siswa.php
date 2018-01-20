<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sis = [['nis'=>'1','nama'=>'Siti aminah','tempat_lahir'=>'Bandung ','tanggal_lahir'=>'2001-04-09','alamat'=>'Jl Kebahagiaan','cita_cita'=>'Sukses','hobi'=>'Apa we kepo','photo'=>'1.jpg'],
        ['nis'=>'2','nama'=>'Pawit allamiah','tempat_lahir'=>'Kolong jembatan','tanggal_lahir'=>'2001-01-18','alamat'=>'Batu seungit','cita_cita'=>'Jualan cijang','hobi'=>'Ngasuh','photo'=>'4.jpg']
    ];
        DB::table('siswas')->insert($sis);
        
    }
}
