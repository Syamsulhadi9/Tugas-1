<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    { 
    echo "<center><p><B>BERIKUT ADALAH DATA DIRI SAYA  </B></p>";
        $index =[
        	"Nama"=>"SYAMSUL HADI",
            "Nim"=>" TI16190020 ",
        	"Alamat"=>" BUJAK "];
            echo "Nama :".$index["Nama"]."<br>";
            echo "Nim :".$index["Nim"]."<br>";
            echo "Alamat :".$index["Alamat"]."<br></center>";
        return view('Home_view', $index);
    }

    public function Hobi()
    {
    	echo "<center><p><B>BERIKUT ADALAH HOBI SAYA </B></p>";
        $hobi = [" MAKAN "," MINUM "," MANCING "," NONGKRONG "," NGEHALU "];
        	
            echo $hobi[0]."<br>"."<br>";
            echo $hobi[1]."<br>"."<br>";
            echo $hobi[2]."<br>"."<br>";
            echo $hobi[3]."<br>"."<br>";
            echo $hobi[4]."<br>"."<br></center>";

        return view('Hobi', $hobi);
    }
    public function riwayat_pendidikan()
    {
    	echo "<center><p><B>BERIKUT ADALAH DAFTAR RIWAYAT PENDIDIKAN SAYA</B></p></center>";
    	
    	$pendidikan= ["Nama Sekolah"=> "SDN GUNUNG AMUK",
    					"Tahun lulus"=>  2004,];
    				echo "<center> <p>1. SD <br></p>nama sekolah : ".$pendidikan["nama sekolah"]."<br>"; 
    				echo "Tahun lulus : ".$pendidikan["Tahun lulus"]."<br>"."<br>";
        //SMP
      
    	$pendidikan=["Nama Sekolah"=>"SMPN 4 BATUKLIANG",
    				"Tahun lulus"=>2007,];

    		echo "<center><p>2. SMP <br></p>Nama Sekolah : ".$pendidikan["nama sekolah"]."<br>"; 
    		echo "Tahun lulus : ".$pendidikan["Tahun lulus"]."<br>"."<br>";


    	//SMA
    		$pendidikan=["Nama Sekolah"=>"SMAI USWATUN HASANAH CEMPAKA PUTIH",
    				"Jurusan"=>"BAHASA",
    				"Tahun Lulus"=>2011,];
    		echo "<p>3. SMA <br></p>Nama Sekolah : ".$pendidikan["nama sekolah"]."<br>"; 
    		echo "Tahun lulus : ".$pendidikan["Tahun Lulus"]."<br>";
    		echo "Jurusan : ".$pendidikan["Jurusan"]."<br>"."<br>";

    	//KAMPUS
    		$pendidikan=["Nama Kampus"=>"STMIK LOMBOK",
    				"Prodi"=>"TEHNIK INFORMATIKA",
    				"Semester"=> 5,
    				];

    		echo "<p>4. KULIAH <br></p>Nama Kampus : ".$pendidikan["Nama Kampus"]."<br>"; 
    		echo "Semester : ".$pendidikan["Semester"]."<br>";
    		echo "Prodi : ".$pendidikan["Prodi"]."<br>"."<br>";
 
 
 
        return view('riwayat_pendidikan',$pendidikan);
    }
}
