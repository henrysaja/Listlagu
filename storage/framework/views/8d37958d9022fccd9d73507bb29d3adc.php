<!-- filepath: /c:/Users/ACER/OneDrive/Dokumen/Code/Belajar-Laravel/lagu_suci/resources/views/layouts/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">List Lagu Suci</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/lagu')); ?>">List of Lagu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/lagu/create')); ?>">Create Lagu</a>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\Users\ACER\OneDrive\Dokumen\Code\Belajar-Laravel\lagu_suci\resources\views\Layouts\navbar.blade.php ENDPATH**/ ?>