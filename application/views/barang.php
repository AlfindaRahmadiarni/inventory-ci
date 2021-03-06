

<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Barang</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Barang</div>
    <div class="card-body">
      <div class="row">
      <table>
      <td>
        <a href="<?php echo site_url('Barang/addBarang/') ?>" class="btn btn-primary">Tambah Barang</a> 
      </td>
      <td>
        <a href="<?php echo site_url('LaporanStok/') ?>" target="_blank" class="btn btn-success">Cetak Data Stok Barang</a> 
      </td>
      </table>
        <div class="col-md-12"><br></div>
        <table id="table_id" class="table table-hover table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr> 
          <th>Kode</th>
          <th>Nama</th>
          <th>Jumlah</th>
          <th>Supplier</th>
          <th>Action
          </p></th>
        </tr>
      </thead>
      <tbody>
         <?php foreach($barang as $b){ ?>
         <tr>
          <td><?php echo $b->kd_brg; ?></td>
          <td><?php echo $b->nm_brg; ?></td>
          <td><?php echo $b->jumlah; ?></td>
          <td><?php echo $b->nama; ?></td>
          <td><a  class="btn btn-sm btn-outline-warning" href="<?php echo base_url()."barang/editBarang/".$b->kd_brg; ?>">Edit</a>
            <!-- <a class="btn btn-sm btn-outline-danger" href="<?php echo base_url()."barang/hapusBarang/".$b->kd_brg; ?>" >Hapus</a> -->
          </td>
         </tr>
      </tbody> <?php } ?>
      <tfoot>
        <tr>
          <th>Kode</th>
          <th>Nama</th>
          <th>Jumlah</th>
          <th>Supplier</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
    </div>
    </div>
  </div>
</div>
</div>


<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>