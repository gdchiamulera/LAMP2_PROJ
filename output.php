<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PROJECT LAMP 02</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">		
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <style>
        .border-style {
            border: 1px solid black;
        }
        .mt-10 {
            margin-top: 10px;
        }
    </style>
   
</head>
<body>
    <?php
        // navigation menu
        require_once('./components/navbar.php');
        
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mt-10">
                <div class="row ">
                    <div class="col-6">
                        <h2 >Employees</h2>
                    </div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-success btn-create">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg> 
                            <span>Add</span>
                        </button>
                    </div>               
                </div>

                <!-- hide and show when needed -->
                <div class="alert alert-success" role="alert">
                    Success message
                </div>
                <div class="alert alert-danger" role="alert">
                    Error Message
                </div>
                <div>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="border-style">Actions</th>
                                <th class="border-style">Number</th>
                                <th class="border-style">Surname</th>
                                <th class="border-style">Given Name</th>
                                <th class="border-style">Birth Date</th>
                                <th class="border-style">Gender</th>
                                <th class="border-style">Hire Date</th>
                                <th class="border-style">Initial Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $conn = mysqli_connect("localhost", "root", "!Lamp2!", "hr_db");

                                // Display uploaded data
                                $sqlSelect = "SELECT * from hr_employees ORDER BY hr_id DESC";
                                
                                $result = mysqli_query($conn, $sqlSelect);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                            ?>
                            
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-edit" data-id-table="<?php echo $row['hr_id'];?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                    <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                                </svg>
                                                Edit
                                            </button>
                                        </td>
                                        <td><?php echo $row['hr_id'];?> </td>
                                        <td><?php echo $row['surname'];?> </td>
                                        <td><?php echo $row['givenName'];?> </td>
                                        <td><?php echo $row['birthDate'];?> </td>
                                        <td><?php echo $row['gender'];?> </td>
                                        <td><?php echo $row['hireDate'];?> </td>
                                        <td><?php echo $row['initialLevel'];?> </td>
                                    </tr>

                            <?php
                                    }
                                } else {
                            ?>

                                <tr class="text-center">
                                    <td colspan="8">No data to display</td>
                                </tr>

                            <?php
                                }
                            ?>   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="employee-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" id="modalForm">
                    <div class="modal-body">
                
                        <div class="form-group">
                            <label for="txt-surname">Surname</label>
                            <input type="text" class="form-control" id="txt-surname" name="txt-surname" aria-describedby="surname">                        
                        </div>
                        <div class="form-group">
                            <label for="txt-given-name">Given Name</label>
                            <input type="text" class="form-control" id="txt-given-name" name="txt-given-name" aria-describedby="given-name">                        
                        </div>
                        <div class="form-group">
                            <label for="txt-date-of-birth">Date of Birth</label>
                            <input type="date" class="form-control" id="txt-date-of-birth" name="txt-date-of-birth" aria-describedby="date-of-birth">                        
                        </div>
                        <div class="form-group">
                            <label for="drop-gender">Gender</label>
                            <select id="drop-gender" name="drop-gender" class="form-control">
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>                        
                        </div>
                        <div class="form-group">
                            <label for="txt-hire-data">Hire Date</label>
                            <input type="date" class="form-control" id="txt-hire-date" name="txt-hire-date" aria-describedby="hire-date">                        
                        </div>
                        <div class="form-group">
                            <label for="txt-initial-level">Initial Level</label>
                            <input type="number" class="form-control" id="txt-initial-level" name="txt-initial-level"  aria-describedby="initial-level">                        
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <script>        
        $('.btn-edit, .btn-create').on('click', function (e) {  
            
            
            if ($(this).hasClass('btn-create')) {
                alert('create new employee');
                 // populate or get value of the fields
                $('#txt-surname').val('Dummy surname');
                $('#txt-given-name').val('Dummy givem name');
                // data must be yyyy-mm-dd
                $('#txt-date-of-birth').val('1985-07-07');
                $('#drop-gender').val('M');
                // data must be yyyy-mm-dd
                $('#txt-hire-date').val('1985-07-07');
                $('#txt-initial-level').val(5);
                $('#employee-data').modal('show');
                e.preventDefault(); 

            } else {
                alert('edit employee');
                // id of the table
                console.log($(this).attr('data-id-table'));

                
    
            }
           
        });

       
        $("#modalForm").submit( function(event){
		$.post("ajax.php", $(this).serialize(), onNewPost); 
		$('#employee-data').modal('hide');
		event.preventDefault();	 
	    });

        var onNewPost = function (response){
            
            if (response.status == "None") {
                console.log(response);
            } else {
                if (response.status == "OK"){
                    console.log(response);
                }
            }
            
        };

        $.get("ajax.php", onNewPost);

     
        

              
    </script>
</body>
</html>
