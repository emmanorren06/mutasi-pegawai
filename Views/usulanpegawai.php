<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<!-- jquery -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<?php
    $conn = mysqli_connect("localhost", "root", "", "simpeg");

    $result = mysqli_query($conn, "SELECT * FROM v_data_pegawai");

    //ambil data dari objec result
    //    while($pgw = mysqli_fetch_assoc($result)){
    //      var_dump($pgw);
    //    }
    // $('#example').dataTable( {
    //     "pageLength": 50
    //   } );
?>

      
       <h1>DAFTAR PEGAWAI</h1>
   
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <tr>
                <th>jenis_jabatan_id_nya</th>
	            <th>nip_nya</th>
	            <th>nama_lengkap_nya</th>
	            <th>tanggal_lahir_nya</th>
	            <th>umur_saat_ini</th>
	            <th>kode_jenis_kelaminnya</th>
	            <th>jenis_kelamin_nya</th>
                <th>agama_nya</th>
                <th>pendidikan_terakhir_nya</th>
                <th>alamat_rumah_nya</th>
                <th>status_rumah_nya</th>
                <th>npwp_nya</th>
                <th>bpjs_nya</th>
                <th>ktp_nya</th>
                <th>goldarah_nya</th>
                <th>tmt_cpns_nya</th>
                <th>gol_ruang_nya</th>
                <th>kode_gol</th>
                <th>pangkat_nya</th>
                <th>tmt_golongan_nya</th>
                <th>eselonnya</th>
                <th>kode_jab</th>
                <th>jabatan_nya</th>
                <th>tmt_jabatan_nya</th>
                <th>kode_unor_id_nya</th>
                <th>unor_nya</th>
                <th>kode_unit_id_nya</th>
                <th>unit_nya</th>
                <th>kode_subunit_id_nya</th>
                <th>kode_asli</th>
                <th>subunit_nya</th>
                <th>mk_keseluruhan_nya</th>
                <th>unor_induk</th>
                <th>is_upth</th>
                <th>diklat_struktural_terakhir</th>
                <th>diklat_struktural_id</th>
                <th>diklat_selesai</th>
                <th>mk_keseluruhan_nya_2</th>
                <th>ket_jabatan_nya</th>
                <th>mkj</th>
                <th>mkj_2</th>
                <th>kode_asli_nama</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_assoc($result)) :
            ?>
            <tr>
                <td><?= $row["jenis_jabatan_id_nya"];?></td>   
                <td><?= $row["nip_nya"];?></td>   
                <td><?= $row["nama_lengkap_nya"];?></td>
	            <td><?= $row["tanggal_lahir_nya"];?></td>
	            <td><?= $row["umur_saat_ini"];?></td>
	            <td><?= $row["kode_jenis_kelaminnya"];?></td>
	            <td><?= $row["jenis_kelamin_nya"];?></td>
                <td><?= $row["agama_nya"];?></td>
                <td><?= $row["pendidikan_terakhir_nya"];?></td>
                <td><?= $row["alamat_rumah_nya"];?></td>
                <td><?= $row["status_rumah_nya"];?></td>
                <td><?= $row["npwp_nya"];?></td>
                <td><?= $row["bpjs_nya"];?></td>
                <td><?= $row["ktp_nya"];?></td>
                <td><?= $row["goldarah_nya"];?></td>
                <td><?= $row["tmt_cpns_nya"];?></td>
                <td><?= $row["gol_ruang_nya"];?></td>
                <td><?= $row["kode_gol"];?></td>
                <td><?= $row["pangkat_nya"];?></td>
                <td><?= $row["tmt_golongan_nya"];?></td>
                <td><?= $row["eselonnya"];?></td>
                <td><?= $row["kode_jab"];?></td>
                <td><?= $row["jabatan_nya"];?></td>
                <td><?= $row["tmt_jabatan_nya"];?></td>
                <td><?= $row["kode_unor_id_nya"];?></td>
                <td><?= $row["unor_nya"];?></td>
                <td><?= $row["kode_unit_id_nya"];?></td>
                <td><?= $row["unit_nya"];?></td>
                <td><?= $row["kode_subunit_id_nya"];?></td>
                <td><?= $row["kode_asli"];?></td>
                <td><?= $row["subunit_nya"];?></td>
                <td><?= $row["mk_keseluruhan_nya"];?></td>
                <td><?= $row["unor_induk"];?></td>
                <td><?= $row["is_uptd"];?></td>
                <td><?= $row["diklat_struktural_terakhir"];?></td>
                <td><?= $row["diklat_struktural_id"];?></td>
                <td><?= $row["diklat_selesai"];?></td>
                <td><?= $row["mk_keseluruhan_nya_2"];?></td>
                <td><?= $row["ket_jabatan_nya"];?></td>
                <td><?= $row["mkj"];?></td>
                <td><?= $row["mkj_2"];?></td>
                <td><?= $row["kode_asli_nama"];?></td>
            </tr>
            <?php
            endwhile;
            ?>
        </table>
        <tfoot>
        <tr>
            <th colspan="6" style="text-align:right"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
            <th style="text-align:right; padding: 8px 10px;"></th>
        </tr>
    </tfoot>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

        

