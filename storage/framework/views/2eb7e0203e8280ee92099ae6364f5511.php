<!-- filepath: /c:/Users/ACER/OneDrive/Dokumen/Code/Belajar-Laravel/lagu_suci/resources/views/lagu/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>List of Lagu</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container mt-5">
        <h1>List of Lagu</h1>
        <form action="<?php echo e(route('lagu.index')); ?>" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by Nomor Lagu or Nama Lagu" value="<?php echo e(request('search')); ?>">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nomor Lagu</th>
                    <th>Nama Lagu</th>
                    <th>Link Lagu</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $lagus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lagu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($lagu->id); ?></td>
                        <td><?php echo e($lagu->nomor_lagu); ?></td>
                        <td><?php echo e($lagu->nama_lagu); ?></td>
                        <td><?php echo e($lagu->link_lagu); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\ACER\OneDrive\Dokumen\Code\Belajar-Laravel\lagu_suci\resources\views\lagu\index.blade.php ENDPATH**/ ?>