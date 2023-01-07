<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Add Student
                        <a href="/" class="btn btn-danger btn-sm float-end">BACK</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="/students/add" method="POST">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="" class="form-label">Course</label>
                            <input type="text" name="course" class="form-control" placeholder="Enter Course" required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary mt-2">SAVE</button>                           
                        </div>
                        

                        
                    </form>
                </div>
            
            </div>
        </div>
    </div>
   
<?= $this->endSection() ?>


