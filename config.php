<?php 
  $host = "localhost"; 
  $user = "root"; 
  $password = ""; 
  $db = "nilaiMahasiswa"; 

  $conn = mysqli_connect($host,$user,$password,$db); 
 
  if (mysqli_connect_errno()){ 
    echo "koneksi gagal". mysqli_connect_error(); 
}
} 

function tampil_data() 
{ 
    $data = mysqli_query($this->koneksi, "select * from mhs"); 
    while ($row = mysqli_fetch_assoc ($data)) { 
        $hasil[] = $row; 
    } 
    return $hasil; 
}

function tambah_data($nim, $nama, $angkatan, $kode_prodi) 
{ 
    mysqli_query($this->koneksi, "INSERT INTO mhs (NIM, namaMhs, angkatan, kode_prodi) VALUES('$nim','$nama','$angkatan','$kode_prodi')"); 
}
function get_by_id($id) 
{ 
    $query = mysqli_query($this->koneksi, "select * from mhs where id='$id'"); 
    return $query->fetch_assoc(); 
} 
function update_data($id, $nim, $nama, $angkatan, $kode_prodi) 
{ 
    $query = mysqli_query($this->koneksi, "update mhs set NIM='$nim', namaMhs='$nama', angkatan='$angkatan', kode_prodi='$kode_prodi' where id='$id'"); 
} 
function delete_data($id) 
{ 
    $query = mysqli_query($this->koneksi, "delete from mhs where id='$id'"); 
} 
}
