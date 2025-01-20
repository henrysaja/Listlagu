<!-- filepath: /c:/Users/ACER/OneDrive/Dokumen/Code/Belajar-Laravel/lagu_suci/resources/views/lagu/create_lagu.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Lagu</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container mt-5">
        <h1>Create Lagu</h1>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createLaguModal">
            Open Form
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="createLaguModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Create Lagu</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="<?php echo e(route('lagu.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="nomor_lagu">Nomor Lagu:</label>
                                <input type="number" class="form-control" id="nomor_lagu" name="nomor_lagu" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lagu">Nama Lagu:</label>
                                <input type="text" class="form-control" id="nama_lagu" name="nama_lagu" required>
                            </div>
                            <div class="form-group">
                                <label for="link_lagu">Link Lagu:</label>
                                <input type="text" class="form-control" id="link_lagu" name="link_lagu" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\ACER\OneDrive\Dokumen\Code\Belajar-Laravel\lagu_suci\resources\views\lagu\create_lagu.blade.php ENDPATH**/ ?>