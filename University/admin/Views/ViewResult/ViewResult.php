<?php
include_once ("../../vendor/autoload.php");
@session_start();
if(empty($_SESSION['userid'])){
    $_SESSION['Msg'] = "<div class='alert alert-border-left'> Successfully loged out </div>";
    header("location:../../../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Department Add</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top header" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../index.php">University Management System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        <?php @session_start(); echo $_SESSION['userid']['name']; ?>
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../Auth/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../../index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo00"><i class="fa fa-fw fa-arrows-v"></i> Needed Dropdowns <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo00" class="collapse">
                            <li>
                                <a href="../NeededDropdown/days/days.php">Days</a>
                            </li>
                            <li>
                                <a href="../NeededDropdown/designations/designations.php">Designation</a>
                            </li>
                            <li>
                                <a href="../NeededDropdown/rooms/rooms.php">Rooms</a>
                            </li>
                            <li>
                                <a href="../NeededDropdown/semesters/semesters.php">Semesters</a>
                            </li>
                            <li>
                                <a href="../NeededDropdown/grades/grades.php">Grades</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Departments <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="../Department/department.php">Add Departments</a>
                            </li>
                            <li>
                                <a href="../Department/showDept.php">Show Departments</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Courses <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="../Course/course.php">Add Courses</a>
                            </li>
                            <li>
                                <a href="../Course/showCourse.php">Show Courses</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Teachers <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="../Teachers/addTeachers.php">Add Teachers</a>
                            </li>
                            <li>
                                <a href="../Teachers/showTeachers.php">Show Teachers</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-arrows-v"></i> Assign to Teachers <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="../CourseAssignTeachers/addAssignTeachers.php">Add Assign Teachers</a>
                            </li>
                            <li>
                                <a href="../CourseAssignTeachers/showAssTeachers.php">Show Assign Teachers</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../CourseStatic/ViewCourseStatic.php"><i class="fa fa-fw fa-table"></i> Course Statics </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-fw fa-arrows-v"></i> Register Student <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo5" class="collapse">
                            <li>
                                <a href="../RegisterStudents/RegisterStds.php">Add Register Student</a>
                            </li>
                            <li>
                                <a href="../RegisterStudents/showRegStd.php">Show Register Student</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo6"><i class="fa fa-fw fa-arrows-v"></i> Allocate Classroom <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo6" class="collapse">
                            <li>
                                <a href="../AllocateClassrooms/AddAllocateRooms.php">Add Allocate Classroom</a>
                            </li>
                            <li>
                                <a href="../AllocateClassrooms/showAlloRooms.php">Show Allocate Classroom</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../ClassAndRoomsInfo/ClassAndRooms.php"><i class="fa fa-fw fa-table"></i> Class and Rooms Info </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo8"><i class="fa fa-fw fa-arrows-v"></i> Enroll In a Course <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo8" class="collapse">
                            <li>
                                <a href="../EnrollCourses/EnrollCourses.php">Add Enroll Course</a>
                            </li>
                            <li>
                                <a href="../EnrollCourses/showCourses.php">Show Enroll Course</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo9"><i class="fa fa-fw fa-arrows-v"></i> Student Result <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo9" class="collapse">
                            <li>
                                <a href="../StudentResults/StudentResults.php">Add Student Result</a>
                            </li>
                            <li>
                                <a href="../StudentResults/ViewResults.php">Show Student Result</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="ViewResult.php"><i class="fa fa-fw fa-table"></i> View Results </a>
                    </li>
                    <li>
                        <a href="../UnassignCourse/UnassignCourse.php"><i class="fa fa-fw fa-table"></i> Unassign All Course </a>
                    </li>
                    <li>
                        <a href="../UnallocateClass/UnallocateClass.php"><i class="fa fa-fw fa-table"></i> Unallocate All Class </a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../../index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> View Results
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php
                include_once ("../../vendor/autoload.php");
                use App\RegisterStudents\RegisterStudents;

                $data = new RegisterStudents();
                $allDept = $data->getAllData();

                ?>

                <div class="container mainTable">
                    <div class="row table">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="code" class="col-sm-12 title">View Result</label>
                            </div>
                            <form method="get">
                                <div class="form-group row">
                                    <label for="credit" class="col-sm-5 col-form-label txt">Student Reg. No.</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" id="stdReg">
                                            <option> Select Register no. </option>
                                            <?php
                                            foreach ($allDept as $data) {
                                                ?>
                                                <option value="<?php echo $data['id']; ?>"> <?php echo $data['regnum']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label txt">Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="creditTake" class="col-sm-5 col-form-label txt">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text"  class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Remaining" class="col-sm-5 col-form-label txt">Department</label>
                                    <div class="col-sm-7">
                                        <input type="text"  class="form-control" id="dept" placeholder="Department">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="pdf.php?id=<?php echo $data['id']; ?>" class="btn btn-success saveBtn"> Make PDF</a>
                                    </div>
                                </div><br><br>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="container mainBody">
                    <div class="row tabless">
                        <div class="col-md-12">
                            <form action="delete.php" method="post">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="txtD">Course Name</th>
                                        <th class="txtD" style="width: 110px;">Grade</th>
                                    </tr>
                                    </thead>
                                        <tbody id="opt" class="style">

                                        </tbody>
                                </table>
                            </form >
                            <br>
                        </div>
                    </div>
                </div><br><br><br>





            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>



    <script>
        $(document).ready(function(){

            $("#stdReg").change(function(){
                var teacid = $(this).val();
                $.ajax({
                    url: 'action.php',
                    type: 'post',
                    data: {reg_id:teacid},
                    dataType: 'json',
                    success:function(response) {
                    console.log(response['regs_id']);
                        var name = response['reg_id']['name'];
                        $("#name").val(name);

                        var email = response['reg_id']['email'];
                        $("#email").val(email);

                        var dept = response['reg_id']['department'];
                        $("#dept").val(dept);


                        var depts = response['reg_id']['id'];
                        $("#idd").val(depts);

                        var len = response['reg'].length;
                        $("#opt").empty();

                        for( var i = 0; i<len; i++) {
                            var id = response['reg'][i]['id'];
                            var cn = response['reg'][i]['course'];
                            var gl = response['reg'][i]['grade_letter'];

                            $("#opt").append("<tr>");
                            $("#opt").append("<td  class='style'>" + cn + "</td>");
                            $("#opt").append("<td  class='style'>" + gl + "</td>");
                            $("#opt").append("</tr>");
                        }
                    }
                });
            });
        });
    </script>
</body>






<!-- Style Css For Table-->
<style>
    .mainTable{
        width: 55%;
        box-shadow: 1px 3px 8px #000;
        border: 1px solid #ddd;
        background-color: #f4f4f4;
    }
    .table{
        margin: auto;
        width: 100%;
        height: 250px;
        border-radius:4px;
    }
    .title{
        font-size: 20px;
        text-align: center;
        height: 50px;
        line-height: 50px;
        background-color: #386b86;
        color: #fff;
        text-shadow: 0px 1px 0px #eee;
        border-bottom: 1px solid #ccc;
    }
    .style{
        height: 50px;
        border: 1px solid #ccc;
        text-align: center;
    }
    .bnnt{
        margin: auto;
        width: 250px;
        line-height: 100px;
    }
    .saveBtn{
        float: right;
    }
    .saveBtn:hover{
        background-color:#51cb63 ;
        color: #fff;
    }

    .mainBody{
        margin: auto;
        width: 55%;
        box-shadow: 1px 3px 8px #000;
        border: 1px solid #ddd;
        background-color:#f4f4f4 ;
    }
    .table{
        height: auto;
    }
    .tabless{
        width: 100%;
        height:auto;
        margin: auto;
    }
    .txtD {
        font-size: 16px;
        font-weight: 600;
        color: #000;
        text-align: center;
        background-color: #ddd;
    }
</style>
<!-- /.row -->

</html>
