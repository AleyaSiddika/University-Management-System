<?php
include_once ("../../vendor/autoload.php");
@session_start();
if(empty($_SESSION['userid'])){
    $_SESSION['Msg'] = "<div class='alert alert-border-left'> You must be login first </div>";
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

    <title>Class And Rooms Info</title>

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
                    <a href="ClassAndRooms.php"><i class="fa fa-fw fa-table"></i> Class and Rooms Info </a>
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
                            <i class="fa fa-edit"></i> Class and Rooms Info
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <?php
            include_once ("../../vendor/autoload.php");
            use App\Department\Department;

            $data = new Department();
            $allDept = $data->getAllData();

            ?>


            <div class="container">
                <div class="row mainBody">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <p class="titleD">View Class Schedule and Room Allocation Information</p>
                            <div class="form-group row DptTitle">
                                <label for="credit" class="col-sm-4 col-form-label DeptNAme">Department</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="dept">
                                        <option value="0">Select Department</option>
                                        <?php
                                        foreach ($allDept as $data) {
                                            ?>
                                            <option value="<?php echo $data['id']; ?>"> <?php echo $data['name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                <thead>
                                <tr>
                                    <th class="txt" style="width: 200px;">Course Code</th>
                                    <th class="txt" style="width: 350px;">Course Name</th>
                                    <th class="txt">Course Schedule Info</th>
                                </tr>
                                </thead>

                                <tbody id="opt" class="data">

                                </tbody>
                        </table> <br>
                    </div>
                </div>
            </div> <br><br><br><br>

            <!-- /.row -->

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

        $("#dept").change(function(){
            var c_id = $(this).val();
            $.ajax({
                url: 'action.php',
                type: 'post',
                data: {ca_id:c_id},
                dataType: 'json',
                success:function(response) {
                    console.log(response);
                    var len = response['course'].length;

                    $("#opt").empty();

                    for( var i = 0; i<len; i++){
                        var code = response['codes'][i]['code'];
                        var cn = response['course'][i]['c_name'];
                        var rm = response['course'][i]['room'];
                        var dy = response['course'][i]['days'];
                        var st = response['course'][i]['start_time'];
                        var et = response['course'][i]['end_time'];

                        $("#opt").append("<tr>");
                        $("#opt").append("<td  class='style'>"+code+"</td>");
                        $("#opt").append("<td  class='style'>"+cn+"</td>");
                        $("#opt").append("<td  class='style'>"+rm+ ", "+dy+ ",  " +st+ " - "  +et+"</td>");
                        $("#opt").append("</tr>");
                    }

                }
            });
        });
    });
</script>
</body>

</html>

















<!-- Style Css For Table-->
<style>
    .mainBody{
        margin: auto;
        width: 95%;
        margin-left: -13px;
        box-shadow: 1px 3px 8px #000;
        border: 1px solid #ddd;
        background-color:#f4f4f4 ;
    }
    .table{
        width: 100%;
        height:auto;
        margin: auto;
        border: 1px solid #ccc;
    }
    .titleD{
        font-size: 20px;
        text-align: center;
        height: 50px;
        line-height: 50px;
        background-color: #336380;
        color: #fff;
        text-shadow: 0px 1px 0px #eee;
        border-bottom: 1px solid #ccc;
    }
    .txt {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        text-align: center;
        background-color: #2754ab;
    }
    .style{
        height: 50px;
        border: 1px solid #ccc;
    }
    .data{
        text-align: center;
        background-color: #fff;
    }

    .DptTitle{
        width: 35%;
        margin: auto;
        color: #261d6f;
        height: 50px;
        margin-top: 30px;
    }
    .DeptNAme{
        font-size: 18px;
    }
    .courseInfo{
        font-size: 18px;
        width: 40%;
        height: 50px;
        line-height: 50px;
        font-weight: bold;
        margin-left:35px;
    }
</style>
