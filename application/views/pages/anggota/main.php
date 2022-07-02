<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active"><a href="<?= base_url('users/form')?>" class="btn btn-block btn-default"> Create</a> </li> -->
              <!-- <button type="button" class="btn btn-block btn-primary">Primary</button> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th width="5px">No</th>
                  <th>Nama</th>
                  <th width="5px">Asal Sekolah</th>
                  <th width="5px">Alamat</th>
                  <th width="5px">No Hp</th>
                  <th width="5px">Jurusan</th>
                  <th width="5px">Status</th>
                  <th width="150px">Edit</th>
                    <th width="100px">Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 0; foreach($data as $d){?>
                    <tr>
                    <td><?= ++$no?></td>
                    <td><?= $d->nama?></td>
                    <td><?= $d->asal_sekolah?></td>
                    <td><?=  $d->alamat?></td>
                    <td><?=  $d->no_hp?></td>
                    <td><?=  $d->jurusan?></td>
                    <td><?php if($d->status == 1){ echo "Pending";}else{echo "Verified";}  ?></td>
                    <td>
                        <a href="<?= base_url('anggota/form_update/'.$d->id)?>"  data-toggle="tooltip" data-placement="top" title="" data-original-title="update"> <button class="btn btn-default btn-icon"><i class="fa fa-edit"></i></button></a>
                    </td>
                    <td>
                        <a href="<?= base_url('anggota/delete/'.$d->id)?>"  data-toggle="tooltip" data-placement="top" title="" data-original-title="update"> <button class="btn btn-default btn-icon"><i class="fa fa-trash"></i></button></a>
                    </td>
                    </tr>
                    <?php } ?>
                 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
          
             
          
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
     
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>