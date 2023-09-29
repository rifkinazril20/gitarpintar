<?php
$sejarah = $this->db->query("select * from sejarah")->row();
?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <!-- add content here -->
            <div class="alert alert-info" role="alert">
                Selamat Datang <strong><?php echo $this->session->userdata("nama") ?></strong> di Gitar Pintar
            </div>
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Sejarah Gitar
                </div>
                <div class="card-body table-responsive">
                    <form action="main/setachord" id="save" method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class='table'>
                                <tr>
                                    <td>
                                        <?php echo $sejarah->sejarah ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <center> <img id="blah" class='img img-fluid mb-3' width='480' src="image/<?php echo $sejarah->gambar ?>" alt="your image" />
                                        </center>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>