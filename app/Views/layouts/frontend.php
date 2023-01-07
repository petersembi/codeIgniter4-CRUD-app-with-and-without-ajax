<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter 4</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>
<body>

    <?= $this->include('layouts/inc/navbar.php') ?> 

    <div class="app">
        <?= $this->renderSection('content') ?>
    </div>

<script src="<?= base_url('assets/js/jquery-3.6.3.min.js'); ?>" ></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?> "></script>

<!-- Data tables -->
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    $(document).ready(function () {
        <?php if(session()->getFlashdata('status')) { ?>
        alertify.set('notifier','position', 'top-right');
        alertify.success('<?= session()->getFlashdata('status'); ?>');
        <?php } ?>
  
    });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        
        <?php if(session()->getFlashdata('status')) { ?>
            swal({
            title: "<?= session()->getFlashdata('status'); ?>",
            text: "<?= session()->getFlashdata('status_text'); ?>",
            icon: "<?= session()->getFlashdata('status_icon'); ?>",
            button: "OK!",
            });
        <?php } ?>

    });
</script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#mydataTable').DataTable();
} );
</script>



<?= $this->renderSection('scripts'); ?>

</body>
</html>