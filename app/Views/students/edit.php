<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Edit Student
                        <a href="/" class="btn btn-danger btn-sm float-end">BACK</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="/student/update/<?= $student['id']; ?>" method="POST">
                        
                    <input type="hidden" name="_method" value="PUT" />

                        <div class="form-group mb-2">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" value="<?= $student['name']; ?>" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" value="<?= $student['email']; ?>" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" name="phone"  value="<?= $student['phone']; ?>" class="form-control" placeholder="Enter Phone" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="" class="form-label">Course</label>
                            <input type="text" name="course" value="<?= $student['course']; ?>" class="form-control" placeholder="Enter Course" required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary mt-2">UPDATE</button>                           
                        </div>
                        

                        
                    </form>
                </div>
            
            </div>
        </div>
    </div>
   
<?= $this->endSection() ?>


