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


    <title>Department Add</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js" rel="stylesheet">

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
                        <a href="../ViewResult/ViewResult.php"><i class="fa fa-fw fa-table"></i> View Results </a>
                    </li>
                    <li>
                        <a href="../UnassignCourse/UnassignCourse.php"><i class="fa fa-fw fa-table"></i> Unassign All Course </a>
                    </li>
                    <li>
                        <a href="UnallocateClass.php"><i class="fa fa-fw fa-table"></i> Unallocate All Class </a>
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
                                <i class="fa fa-edit"></i> Unallocate All Class
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <div class="container mainTable">
                    <div class="row table">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="code" class="col-sm-12 title">Unallocate All Classrooms</label>
                            </div>
                            <div class="msg">
                                <?php
                                @session_start();
                                if(isset($_SESSION['Msg'])){
                                    echo $_SESSION['Msg'];
                                    unset($_SESSION['Msg']);
                                }
                                ?>
                            </div>
                            <form method="post" action="#">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="bnnt">
                                            <a href="delete.php" class="btn btn-default saveBtn">Unallocate Rooms</a>
                                        </div>
                                    </div>
                                </div><br><br>
                            </form>
                        </div>
                    </div>
                </div>














                <!-- Style Css For Table-->
                <style>
                    .mainTable{
                        width: 50%;
                        box-shadow: 1px 3px 8px #000;
                        border: 1px solid #ddd;
                        background-color: #f4f4f4;
                    }
                    .table{
                        margin: auto;
                        width: 95%;
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
                    .bnnt{
                        margin: auto;
                        width: 250px;
                        line-height: 100px;
                    }
                    .saveBtn{
                        text-align: center;
                        height: 45px;
                        width: 250px;
                        margin: auto;
                        font-size: 18px;
                        font-weight: bold;
                        color: #ee2758;
                        background-color: #eec1c7;
                        border: 1px solid #ee2758;
                        margin-top: 20px;
                    }
                    .saveBtn:hover{
                        background-color:#ee2758 ;
                        color: #f4f4f4;
                    }
                    .msg{
                        height: auto;
                        line-height: 50px;
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    label.error{
                        color: red;
                        font-weight:  bold;
                        font-size: 12px;

                    }
                </style>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/validation/jquery.validate.min.js"></script>
    <script src="../../js/validation/form_validation_Dept.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>


</body>

</html>