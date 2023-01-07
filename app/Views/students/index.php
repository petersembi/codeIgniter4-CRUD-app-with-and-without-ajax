
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">

                <?php
                        if (session()->getFlashdata('status'))
                        {
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Hey!</strong> <?= session()->getFlashdata('status'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                        }

                ?>
                    
                        <div class="card">
                    <div class="card-header">
                        <h5 class="d-inline-block">Student Data</h5>
                        <a href="/students/create" class="d-inline-block btn btn-info btn-sm float-end">ADD</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered" id="mydataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                    <th>Confirm Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($students): ?>
                                    <?php foreach($students as $student) : ?>
                                        <tr>
                                            <td><?= $student['id']; ?></td>
                                            <td><?= $student['name']; ?></td>
                                            <td><?= $student['email']; ?></td>
                                            <td><?= $student['phone']; ?></td>
                                            <td><?= $student['course']; ?></td>
                                            <td>
                                                <a href="students/edit/<?= $student['id'];?>" class="btn btn-primary btn-sm">EDIT</a>
                                                <a href="student/delete/<?= $student['id']; ?>" class="btn btn-danger btn-sm">DELETE</a>
                                            </td>
                                            <td>
                                                <button type="button" value="<?= $student['id']; ?>" class="confirm_del_btn btn btn-sm btn-danger">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<?= $this->endSection() ?>

<?= $this->section('scripts'); ?>
<script>
//    $(document).ready(function () {
//         $('.confirm_del_btn').click(function (e) { 
//             e.preventDefault();
//             var id = $(this).val();
//             if (confirm("Do you want to delete this data ?"))
//             {
//                 $.ajax({
                    
//                     url: "/student/confirm-delete/"+id,                   
//                     success: function (response) {
//                         window.location.reload();
//                         alert("Data Deleted");
//                     }
//                 });
//             }
            
//         });
//    });

$(document).ready(function () {
    $('.confirm_del_btn').click(function (e) { 
        e.preventDefault();
        var id = $(this).val();
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({                    
                        url: "/student/confirm-delete/"+id,                   
                        success: function (response) {
                            swal({
                                title: response.status,
                                text: response.status_text,
                                icon: response.status_icon,
                                button: "OK",
                                }). then((confirmed)=>{
                                    window.location.reload();
                                });
                        }
                    });
                    } else {
                        swal("You have cancelled on deleting the data");
                    }
                });
    });
});

</script>
<?= $this->endSection() ?>



