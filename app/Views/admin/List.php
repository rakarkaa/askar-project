<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="" method="post">
                <?php foreach ($media as $item) { ?>

                    <?php if ($item->media_filetype == 'image/png' || $item->media_filetype == 'image/jpeg' || $item->media_filetype == 'image/jpg') { ?>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <img src="<?= base_url('/' . $item->media_filepath) ?>" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                Diupload Oleh :
                                <?= $item->nama ?> <br>
                                Pada :
                                <?php $odate = $item->media_uploaddate;
                                $ndate = date('d-F-Y H:i:s', strtotime($item->media_uploaddate));
                                echo  $ndate; ?>
                            </div>
                            <div class="modal fade" id="confirmDeleteModal <?= $index; ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmDeleteLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus file ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <a href="<?= base_url('Admin/delete/' . $item->media_filename) ?>" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } elseif ($item->media_filetype == 'video/mp4') { ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <video controls>
                                    <source src="<?= base_url('/' . $item->media_filepath) ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                Diupload Oleh :
                                <?= $item->nama ?> <br>
                                Pada :
                                <?php $odate = $item->media_uploaddate;
                                $ndate = date('d-F-Y H:i:s', strtotime($item->media_uploaddate));
                                echo  $ndate; ?>
                            </div>
                            <div class="modal fade" id="confirmDeleteModal <?= $index; ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmDeleteLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus file ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <a href="<?= base_url('Admin/delete/' . $item->media_filename) ?>" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php } ?>
                    <a href="#" data-toggle="modal" data-target="#confirmDeleteModal<?= $index; ?>">Hapus File</a>
                <?php  } ?>
            </form>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>