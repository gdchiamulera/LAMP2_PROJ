<?php
    session_start();

    if (!empty($_SESSION['userid'])) {
        $userid=$_SESSION['userid'];
    } else {
        header("Location: index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PROJECT LAMP 02</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .border-style {
            border: 1px solid black;
        }
        .mt-10 {
            margin-top: 10px;
        }
        /* animation to display slide */
        .hide-element {
            display: none;
            transform: translateX(-3rem);
            opacity: 0;
            transition: all 0.5s ease-out;
        }

        .show-element {
            display: block!important;
            transform: translateX(0)!important;
            opacity: 1!important;
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
                <div id="msg-success" class="alert alert-success hide-element" role="alert">
                    Success message
                </div>
                <div id="msg-error" class="alert alert-danger hide-element" role="alert">
                    Something went wrong, please try again later!
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
                                <th class="border-style">Work Type</th>
                            </tr>
                        </thead>
                        <tbody id="data-table-user">
                            <?php                                
                                require_once('./dbFunctions.php');

                                // Display uploaded data
                                $sqlSelect = "SELECT * from hr_employees ORDER BY hr_id DESC";
                                
                                $result = getMultipleData($sqlSelect, array());
                                
                                if (count($result) > 0) {
                                    foreach ($result as &$row) {
                            ?>
                            
                                    <tr id="<?php echo $row['hr_id'];?>">
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-edit" data-id-table="<?php echo $row['hr_id'];?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                    <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                                </svg>
                                                <span class="spinner-border spinner-border-sm btn-edit-spiner hide-element" role="status" aria-hidden="true"></span>
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-earnings" data-id-table="<?php echo $row['hr_id'];?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-spreadsheet" viewBox="0 0 16 16">
                                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6h-3v2h3V7zm0 3h-3v2h3v-2zm0 3h-3v2h2a1 1 0 0 0 1-1v-1zm-4 2v-2H6v2h3zm-4 0v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2zm3-2v2h3V7H6zm3 3H6v2h3v-2z"/>
                                                </svg>
                                                <span class="spinner-border spinner-border-sm btn-earning-spiner hide-element" role="status" aria-hidden="true"></span>
                                                Earnings
                                            </button>
                                        </td>
                                        <td><?php echo $row['hr_id'];?> </td>
                                        <td><?php echo $row['surname'];?> </td>
                                        <td><?php echo $row['givenName'];?> </td>
                                        <td><?php echo $row['birthDate'];?> </td>
                                        <td><?php echo $row['gender'];?> </td>
                                        <td><?php echo $row['hireDate'];?> </td>
                                        <td><?php echo $row['initialLevel'];?> </td>
                                        <td><?php echo $row['isFullTime'] ? 'Full Time' : 'Part Time' ;?> </td>
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

    <!-- Employee Modal -->
    <div class="modal fade" id="employee-data" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="msg-success-modal" class="alert alert-success hide-element" role="alert">
                        Success message
                    </div>
                    <div id="msg-error-modal" class="alert alert-danger hide-element" role="alert">
                        Something went wrong, please try again later!
                    </div>
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
                        <label for="drop-work-type">Work Type</label>
                        <select id="drop-work-type" name="drop-work-type" class="form-control">
                            <option value="true">Full Time</option>
                            <option value="false">Part Time</option>
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
                    <button type="button" class="btn btn-primary" id="btn-submit">
                        <span class="spinner-border spinner-border-sm btn-submit-spiner hide-element" role="status" aria-hidden="true"></span>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings Modal -->
    <div class="modal fade" id="earnings-data" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="earnings-data-name">Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="earnings-data-schedule">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Start Period</th>
                                <th>End of Period</th>
                                <th class="text-right">Salary</th>
                            </tr>
                        </thead>
                        <tbody id="earnings-data-table">
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2"><strong>Total</strong></td>                                
                                <td id="earning-data-total" class="text-right"></td>
                            </tr>
                        </tfoot>
                    </table>                                     
                </div>                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                    
                </div>
            </div>
        </div>
    </div>    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    
    <script>
        function populateTableEarnings(data) {
            console.log(data);
            $.each(data.payHistory, (index, element) => {                
                const row = `
                <tr>
                    <td>${element.startDate}</td>
                    <td>${element.endDate}</td>
                    <td class="text-right">${element.salary}</td>
                </tr>
                `;
                // parse the row to html and prepend
                $('#earnings-data-table').append($.parseHTML( row ));
            });
            $('#earning-data-total').text(data.totalSalary);
        }

        function showElement(elementSelector) {
            const element = document.getElementById(elementSelector);

            element.style.display = 'block';
            setTimeout(function () {
                element.classList.add('show-element');
            }, 10);
        }

        function hideElement(elementSelector) {
            const element = document.getElementById(elementSelector);            
            element.style.display = 'none';

            setTimeout(function () {
                element.classList.remove('show-element');
            }, 10);
        }

        function clearFields () {
            $('#txt-surname').val('');
            $('#txt-given-name').val('');
            // data must be yyyy-mm-dd
            $('#txt-date-of-birth').val('');
            $('#drop-gender').val('F');
            $('#drop-work-type').val('true');
            // data must be yyyy-mm-dd
            $('#txt-hire-date').val('');
            $('#txt-initial-level').val('');
        }

        function createUpdateUser (e) {
            hideElement('msg-error-modal');
            // check if is a new user
            if ($(this).hasClass('btn-create')) {               
                clearFields();                
                $('#employee-data').modal('show');
            } else {
                // edit user 
                
                let idUser = $(this).attr('data-id-table');
                // json obj to send with id of the user 
                let obj = {
                    id: idUser
                };                
                const spinner = $(this).children().eq(1);
                spinner.removeClass('hide-element');
                
                $.ajax({
                    type: "POST",
                    url: "editUser.php",
                    // data: JSON.stringify(obj),
                    data: obj,
                    success: function(data){  
                        $('#txt-surname').val(data.surname);
                        $('#txt-given-name').val(data.givenName);
                        // data must be yyyy-mm-dd
                        $('#txt-date-of-birth').val(data.birthDate);
                        $('#drop-gender').val(data.gender.toUpperCase());                        
                        $('#drop-work-type').val(parseInt(data.isFullTime) ? 'true' : 'false');
                        // data must be yyyy-mm-dd
                        $('#txt-hire-date').val(data.hireDate);
                        $('#txt-initial-level').val(data.initialLevel);
                        spinner.addClass('hide-element');
                        $('#employee-data').modal('show');
                        $('#btn-submit').attr('data-id-table', idUser);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        showElement('msg-error');
                    }
                });
            
            }
            e.preventDefault();
        }

        $('.btn-edit, .btn-create').on('click', createUpdateUser);

        $('.btn-earnings').on('click', function () {
            let idUser = $(this).attr('data-id-table');
            
            // json obj to send with id of the user 
            let obj = {
                id: idUser
            };                
            const spinner = $(this).children().eq(1);
            spinner.removeClass('hide-element');
            $.ajax({
                type: "POST",
                url: "calculateEarnings.php",
                data: JSON.stringify(obj),
                data: obj,
                success: function(data){
                    $('#earnings-data-name').text(`Employee: ${data.givenName} ${data.surname}`);
                    populateTableEarnings(data);
                    spinner.addClass('hide-element');
                    $('#earnings-data').modal('show');                    
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    showElement('msg-error');
                    console.log(XMLHttpRequest, textStatus, errorThrown);
                }
            });
        });
       

        $('#btn-submit').on('click', function (e) {            
            hideElement('msg-error-modal');

            if (!$('#txt-surname').val() 
            || !$('#txt-given-name').val()
            || !$('#txt-date-of-birth').val()
            || !$('#drop-gender').val()
            || !$('#txt-hire-date').val()
            || !$('#txt-initial-level').val()
            || !$('#drop-work-type').val()
            ) {
                $('#msg-error-modal').text('Please fill all fields!');
                showElement('msg-error-modal');
                return;
            }

            // object to send by ajax            
            let userData = {
                surname:  $('#txt-surname').val(),
                givenName:  $('#txt-given-name').val(),
                birthDate:  $('#txt-date-of-birth').val(),
                gender:  $('#drop-gender').val(),
                hireDate:  $('#txt-hire-date').val(),
                initialLevel:  $('#txt-initial-level').val(),
                isFullTime: $('#drop-work-type').val() == 'true' ? 1 : 0,
                id: ''
            }
            
            // check if there is an user id set            
            let idUser = $(this).attr('data-id-table');
            if (idUser) {
                userData.id = idUser;                
                $.ajax({
                type: "POST",
                url: "saveOrUpdateUser.php",            
                data: userData,
                success: function(response){
                        clearFields();
                        const data = response.data;
                        
                        // update the values in the table row
                        $('#'+ userData.id + ' td:nth-child(3)').text(data.surname);
                        $('#'+ userData.id + ' td:nth-child(4)').text(data.givenName);
                        $('#'+ userData.id + ' td:nth-child(5)').text(data.birthDate);
                        $('#'+ userData.id + ' td:nth-child(6)').text(data.gender);
                        $('#'+ userData.id + ' td:nth-child(7)').text(data.hireDate);
                        $('#'+ userData.id + ' td:nth-child(8)').text(data.initialLevel);
                        $('#'+ userData.id + ' td:nth-child(9)').text(parseInt(data.isFullTime) ? 'Full Time' : 'Part Time');
                        
                        // hide modal
                        $('#employee-data').modal('hide');
                        // set the message
                        $('#msg-success').text(response.message);
                        showElement('msg-success');
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log(XMLHttpRequest, textStatus, errorThrown);
                        showElement('msg-error');
                    }
                });
            } else {
                $.ajax({
                type: "POST",
                url: "saveOrUpdateUser.php",            
                data: userData,
                success: function(response){                                           
                    const data = response.data;
                    // create row
                    let workType = parseInt(data.isFullTime) ? 'Full Time' : 'Part Time';
                    let row = `
                        <tr id="${data.hr_id}">                            
                            <td>
                                <button type="button" class="btn btn-secondary btn-edit" data-id-table="${data.hr_id}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                    <span class="spinner-border spinner-border-sm btn-edit-spiner hide-element" role="status" aria-hidden="true"></span>
                                    Edit
                                </button>
                                <button type="button" class="btn btn-secondary btn-earnings" data-id-table="${data.hr_id}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-spreadsheet" viewBox="0 0 16 16">
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6h-3v2h3V7zm0 3h-3v2h3v-2zm0 3h-3v2h2a1 1 0 0 0 1-1v-1zm-4 2v-2H6v2h3zm-4 0v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2zm3-2v2h3V7H6zm3 3H6v2h3v-2z"/>
                                    </svg>
                                    <span class="spinner-border spinner-border-sm btn-earning-spiner hide-element" role="status" aria-hidden="true"></span>
                                    Earnings
                                </button>
                            </td>
                            <td>${data.hr_id}</td>
                            <td>${data.surname}</td>
                            <td>${data.givenName}</td>
                            <td>${data.birthDate}</td>
                            <td>${data.gender}</td>
                            <td>${data.hireDate}</td>
                            <td>${data.initialLevel}</td>
                            <td>${workType}</td>
                        </tr>
                    `;
                    // parse the row to html and prepend
                    $('#data-table-user').prepend($.parseHTML( row ));
                    // remove previus click event
                    $('.btn-edit, .btn-create').unbind('click');
                    // add previus click event
                    $('.btn-edit, .btn-create').bind('click', createUpdateUser);
                    // hide modal
                    $('#employee-data').modal('hide');
                    $('#msg-success').text(response.message);
                    showElement('msg-success');
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    showElement('msg-error');
                }});
            }
            
            e.preventDefault();	 
        });
    </script>
</body>
</html>
