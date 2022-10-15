<?php
    class Pendaftaran extends Database
    {
        //menampilkan data dosen ke index.php
        public function index()
        {
            $datapendaftaran= mysqli_query($this->koneksi,"select 
            pendaftaran.id,
            pendaftaran.kode_pendaftaran,
            pendaftaran.nama,
            pendaftaran.tanggal_lahir,
            pendaftaran.tempat_lahir,
            pendaftaran.jenis_kelamin,
            pendaftaran.agama,
            jurusan.jurusan as nama_jurusan
            from jurusan
            join pendaftaran
            on jurusan.id = pendaftaran.id_jurusan");

            return $datapendaftaran;
        }

        public function create($kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$nama_jurusan)
        {
            mysqli_query($this->koneksi,
                "INSERT INTO pendaftaran VALUES (NULL,'$kode_pendaftaran','$nama','$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$agama','$nama_jurusan')"
            );
        }
        //memilih data dosen yang akan diubah
        public function edit($id)
        {
            $datapendaftaran= mysqli_query($this->koneksi,
                "SELECT * FROM pendaftaran WHERE id='$id'"
            
            );

                return $datapendaftaran;
        }

        //merubah data dosen
        public function update($id,$kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$nama_jurusan)
        {
            return mysqli_query(
                $this->koneksi,
                "UPDATE pendaftaran SET kode_pendaftaran ='$kode_pendaftaran', nama='$nama', tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama', id_jurusan='$nama_jurusan' WHERE id='$id'"
            );
        }
        //menampilkan data dosen berdasarkan id
        public function show($id)
        {
            $datapendaftaran = mysqli_query($this->koneksi,
                "select 
                pendaftaran.id,
                pendaftaran.kode_pendaftaran,
                pendaftaran.nama,
                pendaftaran.tanggal_lahir,
                pendaftaran.tempat_lahir,
                pendaftaran.jenis_kelamin,
                pendaftaran.agama,
                jurusan.jurusan as nama_jurusan
                from jurusan
                join pendaftaran
                on jurusan.id = pendaftaran.id_jurusan 
                where pendaftaran.id='$id'"
            );

            return $datapendaftaran;
        }

        //menghapus data dosen
        public function delete($id)
        {
            mysqli_query($this->koneksi, "DELETE FROM pendaftaran WHERE id='$id'"

            );
        }
    }