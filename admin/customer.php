<?php 
    session_start();
    if($_SESSION['login']==false){
        header("Location: ../index.php?pesan=belum_login");  
    }
    
    include "../koneksi.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .no-decoration {
            text-decoration: none !important;
        }
    </style>
</head>
<body>
<?php include 'navbar1.php'; ?>
<div class="container mt-5">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="../admin/index1.php" class="no-decoration text-muted">
                        <i class="fa fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                <i class="fas fa-user-tag me-1"></i></i>Customer
                </li>
            </ol>
        </nav>
    <div class="panel">
        <div class="panel-heading">
            <h2>Data Customer</h2><br>
        </div>
        <div class="panel-body">

            <a href="customer_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
            <?php
            // Tampilkan pemberitahuan jika ada parameter 'pesan' dengan nilai 'hapus_sukses'
            if(isset($_GET['pesan']) && $_GET['pesan'] == 'hapus_sukses') {
            ?>
                <div class="alert alert-primary mt-3" role="alert">
                    Data Customer berhasil dihapus.
                </div>
                <meta http-equiv="refresh" content="1; url=customer.php" />
            <?php
            }
            ?>

            <br>
            <br>

            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Alamat</th>
                    <th width="15%">AKSI</th>
                </tr>
                <?php
            
            $query = mysqli_query($koneksi, "SELECT * FROM tabel_customer order by id_customer asc");
            $no = 1;
            while ($d = mysqli_fetch_array($query)) {
            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama_customer']; ?></td>
                        <td><?php echo $d['no_tlp']; ?></td>
                        <td><?php echo $d['alamat_customer']; ?></td>
                        <td>
                            <a href="customer_edit.php?id=<?php echo $d['id_customer']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-cogs me-1"></i>Edit</a>
                            <a href="customer_hapus.php?id=<?php echo $d['id_customer']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash me-1"></i>Hapus</a>
                        </td>
                    </tr>
                <?php 
            } 
            ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>