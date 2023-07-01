<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Semua film</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/film/add" class="btn btn-primary">Tambahkan Data Film</a>
                    </div>
                </div>
            </div>
            
            <body class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Cover</th>
                        <th>Nama Film</th>
                        <th>Genre</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>

                    <?php $i = 1; 
                    foreach ($films as $film): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><img src="/assets/cover/<?= $film["cover"] ?>" alt="Image" height="80" width="80"</td>
                            <td><?= $film["nama_film"] ?></td>
                            <td><?= $film["nama_genre"] ?></td>
                            <td><?= $film["duration"] ?></td> 
                            <td>
                            <a href="/film/update/<?= encryptUrl($film["id"]); ?>" class="btn btn-success">Update</a>
                            <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>

        </div>
</div>
<!-- tambahkan dari sini  -->
<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/film/destroy/<?= encryptUrl($film['id']) ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
  <!-- sampai sini -->
<?= $this->endSection() ?>