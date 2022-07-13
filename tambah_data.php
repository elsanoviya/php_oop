<form action="proses_mhs.php?action=add" method="POST"> 
    <fieldset> 
        <p> 
            <label for="nim">NIM : </label> 
            <input type="text" name="NIM" placeholder="NIM"> 
        </p> 
        <p> 
            <label for="nama">Nama : </label> 
            <input type="text" name="namaMhs" placeholder="Nama Mahasiswa"> 
        </p> 
        <p> 
            <label for="angkatan">Angkatan : </label> 
            <input type="text" name="angkatan" placeholder="Angkatan"> 
        </p> 
        <p> 
            <label for="kode_prodi">Kode Prodi : </label> 
            <input type="text" name="kode_prodi" placeholder="Kode Prodi"> 
        </p>  
        
        <p> 
            <input type="submit" value="Simpan Data" name="simpan">
        </p> 
    </fieldset> 
</form>
