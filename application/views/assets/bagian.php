<?php
$sejarah = $this->db->get('sejarah')->row();

?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Bagian-bagian gitar
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post" action="main/savebagian">
                                <table class="table">
                                    <tr>
                                        <td>Bagian</td>
                                        <td><input type="text" name="bagian" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"
                                                    aria-hidden="true"></i> Simpan</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <table class="table table-striped" id="dt">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bagian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
								$no = 1;
								$q = $this->db->query("select * from bagian_gitar");
								foreach($q->result() as $row){
								?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->bagian ?></td>
                                        <td>
                                            <a href="main/hapusbagian/<?php echo $row->id; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++; }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
