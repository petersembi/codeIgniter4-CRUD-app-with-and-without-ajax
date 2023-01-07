<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<!-- Add StudentModal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studen">Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="form-group mb-2">
             <label for="" class="form-label ">Name</label><span id="error_name" class="text-danger ms-3"></span>
            <input type="text" name="name" class="form-control name" placeholder="Enter Name" required>
        </div>

        <div class="form-group mb-2">
            <label for="" class="form-label">Email</label>
            <!-- <span id="error_email" class="text-danger ms-3"></span> -->
            <input type="text" name="email" class="form-control email" placeholder="Enter Email" required>
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Phone</label><span id="error_phone" class="text-danger ms-3"></span>
            <input type="text" name="phone" class="form-control phone" placeholder="Enter Phone" required>
        </div>

        <div class="form-group mb-2">
            <label for="" class="form-label">Course</label><span id="error_course" class="text-danger ms-3"></span>
            <input type="text" name="course" class="form-control course" placeholder="Enter Course" required>
        </div>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ajaxstudent-save">Save changes</button>
      </div>
    </div>
  </div>
</div>

                       
<!-- Edit Student Modal --> 
<div class="modal fade" id="StudentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studen">Student Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="stud_id">
        <div class="form-group mb-2">
            <label for="" class="form-label ">Name</label><span id="error_name" class="text-danger ms-3"></span>
            <input type="text" id="stud_name"  name="name" class="form-control name" placeholder="Enter Name" required>
        </div>

        <div class="form-group mb-2">
            <label for="" class="form-label">Email</label>
            <!-- <span id="error_email" class="text-danger ms-3"></span> -->
            <input type="text" id="stud_email" name="email" class="form-control email" placeholder="Enter Email" required>
        </div>
        <div class="form-group mb-2">
            <label for="" class="form-label">Phone</label><span id="error_phone" class="text-danger ms-3"></span>
            <input type="text" id="stud_phone" name="phone" class="form-control phone" placeholder="Enter Phone" required>
        </div>

        <div class="form-group mb-2">
            <label for="" class="form-label">Course</label><span id="error_course" class="text-danger ms-3"></span>
            <input type="text" id="stud_course" name="course" class="form-control course" placeholder="Enter Course" required>
        </div>      
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ajaxstudent-update">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- View Student Modal -->
<div class="modal fade" id="StudentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studen">Student View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <h4>ID: <span class="id_view"></span></h4>
            <h4>Name: <span class="id_name"></span></h4>
            <h4>Email: <span class="id_email"></span></h4>
            <h4>Phone: <span class="id_phone"></span></h4>
            <h4>Course: <span class="id_course"></span></h4>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ajaxstudent-save">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Delete Student Modal -->
<div class="modal fade" id="StudentDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studen">Student Delete Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="stud_delete_id">
            <h4>Are you sure you want to delete this data ?</h4>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger ajaxstudent-deletebtn">Yes. Delete</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-4">
            <h1 class="text-center">
                jQuery Ajax CRUD Application - in CodeIgniter 4.x
            </h1>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>jQuery Ajax CRUD - Student Data <a class="float-end btn btn-primary btn-sm" href="" data-bs-toggle="modal" data-bs-target="#studentModal">Add</a></h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>                              
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="studentdata">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>
 

<?= $this->section('scripts') ?>

    <script>
        $(document).ready(function () {
            loadstudent();
            // alert('me');

            $(document).on('click', '.view_btn', function () {
                var stud_id = $(this).closest('tr').find('.stud_id').text();
                // alert(stud_id);
                $.ajax({
                    type: "POST",
                    url: "ajax-student/viewstudent",
                    data: {
                        'stud_id' : stud_id,
                    },                  
                 
                    
                    success: function (response) {
                        $.each(response, function (key, studview) { 
                             $('.id_view').text(studview['id']);
                             $('.name_view').text(studview['name']);
                             $('.email_view').text(studview['email']);
                             $('.phone_view').text(studview['phone']);
                             $('.course_view').text(studview['course']);
                            $('#StudentViewModal').modal('show');
                          });
                    }
                });
                
        });
            
        $(document).on('click','.edit_btn', function () {
             var stud_id =  $(this).closest('tr').find('.stud_id').text();
             $.ajax({
                type: "POST",
                url: "ajax-student/edit",                
                data: {
                    'stud_id': stud_id 
                },
                success: function (response) {
                    // console.log(response.students);
                    $.each(response, function (key, studvalue) { 
                         $('#stud_id').val(studvalue['id']);
                         $('#stud_name').val(studvalue['name']);
                         $('#stud_email').val(studvalue['email']);
                         $('#stud_phone').val(studvalue['phone']);
                         $('#stud_course').val(studvalue['course']);                         
                        $('#StudentEditModal').modal('show');
                    });

                }
             });
        });

        $(document).on('click', '.ajaxstudent-update', function () {
            
            var data = {
                'stud_id': $('#stud_id').val(),
                'name': $('#stud_name').val(),
                'email': $('#stud_email').val(),
                'phone': $('#stud_phone').val(),
                'course': $('#stud_course').val(),
            }

            $.ajax({
                method: "POST",
                url: "ajax-student/update",
                data: data,
                
                success: function (response) {
                    $('#StudentEditModal').modal('hide');
                    $('.studentdata').html("");//make the table empty before you load the data once again
                    loadstudent();
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(response.status);
                }
            });
        });

        $(document).on('click','.delete_btn', function () {
            
            var stud_id = $(this).closest('tr').find('.stud_id').text();
                       
            // alert(stud_id);
            $('#stud_delete_id').val(stud_id);
            $('#StudentDeleteModal').modal('show');

        });
            
        $(document).on('click','.ajaxstudent-deletebtn', function () {
            var stud_id = $('#stud_delete_id').val();
            $.ajax({
                method: "POST",
                url: "ajax-student/delete",
                data: {
                   'stud_id': stud_id 
                },
                
                success: function (response) {
                    $('#StudentDeleteModal').modal('hide');
                    $('.studentdata').html("");
                    loadstudent();

                    alertify.set('notifier','position', 'top-right');
                    alertify.success(response.status); 
                }
            });

        });
            
             
            
            
            
            
            /** LOAD STUDENT FUNCTION */
            function loadstudent () {
                var myArray = []
	

                $.ajax({
                    method:'GET',
                    url: '/ajax-students/getdata',
                    // url:'https://reqres.in/api/users',
                    success:function(response){
                        myArray = response.students
                        buildTable(myArray)
                        console.log(myArray)
                    }
                })
             }   

            /** BUILD TABALE FUNCTION - called by loadstudent function */

            function buildTable(data){
                var table = document.querySelector(".studentdata");

                for (var i = 0; i < data.length; i++){
                    var row = `<tr>
                                    <td class="stud_id">${data[i].id}</td>
                                    <td>${data[i].name}</td>
                                    <td>${data[i].email}</td>
                                    <td>${data[i].phone}</td>
                                    <td>${data[i].course}</td>
                                    <td>${data[i].created_at}</td>
                                    <td>
                                    <a href="#" class='btn btn-sm btn-info view_btn'>VIEW</a>
                                    <a href="#" class='btn btn-sm btn-primary edit_btn'>EDIT</a>
                                    <a href="#" class='btn btn-sm btn-danger delete_btn'>DELETE</a>

                                    </td>
                            </tr>`
                    table.innerHTML += row


                }
            }

            $('.ajaxstudent-save').click(function (e) { 
                e.preventDefault();
                // validation for name field
                //The trim() method removes whitespace from both sides of a string. The trim() method does not change the original string
                if ($.trim($('.name').val()).length==0) 
                {
                    error_name='Please enter full name';
                    $('#error_name').text(error_name);
                } else 
                {
                    error_name='';
                    $('#error_name').text(error_name);
                    
                }

                // //validation for email field
                // if ($.trim($('.email').val()).length==0) 
                // {
                //     error_email='Please enter email';
                //     $('#error_email').text(error_email);
                // } else 
                // {
                //     error_name='';
                //     $('#error_email').text(error_email);
                    
                // }

                // validation for phone field
                if ($.trim($('.phone').val()).length==0) 
                {
                    error_phone='Please enter Phone';
                    $('#error_phone').text(error_phone);
                } else 
                {
                    error_phone='';
                    $('#error_phone').text(error_phone);
                    
                }

                // validation for course field
                if ($.trim($('.course').val()).length==0) 
                {
                    error_course='Please enter Course';
                    $('#error_course').text(error_course);
                } else 
                {
                    error_course='';
                    $('#error_course').text(error_course);
                    
                }


                // if all fields have been filled
                if(error_name != '' || error_phone != '' || error_course != '')
                {
                    return false;
                } 
                else 
                {
                    var data = {
                        'name': $('.name').val(),
                        'email': $('.email').val(),
                        'phone' : $('.phone').val(),
                        'course' : $('.course').val()
                    };

                    $.ajax({
                        type: "POST",
                        // /students/add
                        url: "/ajaxstudent/store",
                        data: data,                        
                        success: function (response) {
                            $('#studentModal').modal('hide');
                            $('#studentModal').find('input').val('');
                            loadstudent();
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(response.status);
                        }
                    });
                }

                
                
            });
        });
    </script>
<?= $this->endSection() ?>