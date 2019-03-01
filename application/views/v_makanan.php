<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Makanan</title>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Data <small>Makanan </small></h1>
    <table class="table table-bordered table-striped" id="mydata">
        <thead>
            <tr>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Harga</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($data->result_array() as $i):
                    $id_makanan=$i['id_makanan'];
                    $nama_makanan=$i['nama_makanan'];
                    $harga_makanan=$i['harga_makanan'];
            ?>
            <tr>
                <td><?php echo $id_makanan;?> </td>
                <td><?php echo $nama_makanan;?> </td>
                <td><?php echo $harga_makanan;?> </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"> </script>
<script>
    $(document).ready(function(){
        $('#mydata').DataTable();
    });
</script>
</body>
</html>