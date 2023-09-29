<?php
$penjarian = $this->db->get('chord')->row();

?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Chord Gitar
                </div>
                <div class="card-body table-responsive">
                    <form action="main/setachord" id="save" method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class='table'>
                                <tr>
                                    <td>Deskripsi Chord gitar</td>
                                    <td>
										<textarea rows="10" name="desc"  class="" cols="10" style=" min-width:500px; max-width:100%;min-height:50px;height:100%;width:100%;"><?php echo $penjarian->desc ?></textarea>
                                    </td>
                                </tr>
								<tr>
									<td></td>
									<td></td>
								</tr>
                                <tr>
									<td>Foto Chord gitar</td>
                                    <td>
                                        <center> <img id="blah" class='img img-fluid mb-3' width='280'
                                                src="image/<?php echo $penjarian->gambar ?>" alt="your image" />
                                        </center>
                                        <input type="file" name="gambar" class="form-control mb-3"
                                            onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                                        <span class="badge badge-warning"><strong>Informasi</strong>
                                            Input Gambar Hanya Bisa Bertype JPG,JPEG,PNG Dan Maksimal
                                            2mb !</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
									<td>
										<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</button>
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

