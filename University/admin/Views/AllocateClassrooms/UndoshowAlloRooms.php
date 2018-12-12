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

    <title>Show Allocate Rooms</title>

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
                            <a href="../NeededDropdown/days/days.php">Day's</a>
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
                            <a href="AddAllocateRooms.php">Add Allocate Classroom</a>
                        </li>
                        <li>
                            <a href="showAlloRooms.php">Show Allocate Classroom</a>
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
                            <i class="fa fa-edit"></i> <a href="AddAllocateRooms.php">Add Allocate Classrooms</a> || <a href="showAlloRooms.php">View Allocate Classrooms</a> || View Deleted Allocate Classrooms
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <?php
            include_once ("../../vendor/autoload.php");
            use App\AllocateClassrooms\AllocateClassrooms;

            $data = new AllocateClassrooms();
            $allAlloRooms = $data->getAllDeleteData();

            ?>

            <div class="container">
                <div class="row mainBody">
                    <div class="col-md-12">
                        <form action="UndoDelete.php" method="post"  onsubmit="return confirm('Do you really want to delete data ?');">
                        <table class="table table-bordered">
                            <div class="msg" style="text-align: center;">
                                <?php
                                @session_start();
                                if(isset($_SESSION['Msg'])){
                                    echo $_SESSION['Msg'];
                                    unset($_SESSION['Msg']);
                                }
                                ?>
                            </div><br>
                            <thead>
                            <tr>
                                <th class="txt" style="width: 160px;">Department</th>
                                <th class="txt"  style="width: 160px;">Course Name</th>
                                <th class="txt"  style="width: 160px;">Room</th>
                                <th class="txt" style="width: 160px;">Day</th>
                                <th class="txt" style="width: 160px;">Form</th>
                                <th class="txt" style="width: 160px;">To</th>
                                <th class="txt" style="width: 100px;">
                                    <button type="submit" name="delete" class="btnnnnn btn-xs">Undo</button> ||
                                    <input type="checkbox" id="checkAll"/>
                                </th>
                            </tr>
                            </thead>

                            <?php
                            foreach ($allAlloRooms as $data)
                            {
                                ?>
                                <tbody>
                                <tr>
                                    <td class="data"><?php echo $data['name']; ?></td>
                                    <td class="data"><?php echo $data['c_name']; ?></td>
                                    <td class="data"><?php echo $data['room']; ?></td>
                                    <td class="data"><?php echo $data['days']; ?></td>
                                    <td class="data"><?php echo $data['start_time']; ?></td>
                                    <td class="data"><?php echo $data['end_time']; ?></td>
                                    <td class="data">
                                        <input type="checkbox" name="chkbox[]"  value="<?php echo $data['id']; ?>"/>  &nbsp; &nbsp; &nbsp;
                                        <a href="delete.php?id=<?php echo $data['id']; ?>"><li class="glyphicon glyphicon-trash"></li></a>
                                    </td>
                                </tr>
                                </tbody>
                                <?php
                            }
                            ?>
                        </table>
                        </form>
                        <br>
                    </div>
                </div>
            </div><br><br><br>



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
                .txt {
                    font-size: 16px;
                    font-weight: 600;
                    color: #fff;
                    text-align: center;
                    background-color: #2754ab;
                }
                .data{
                    text-align: center;
                    background-color: #fff;
                }
                .btnnnnn{
                    background-color: #f8fff7;
                    color: #00b008;
                    border: 1px solid #46dc11;
                    border-radius: 5px;
                    font-size: 13px;
                }
                .btnnnnn:hover{
                    background-color: #00b008;
                    color: #fff;
                }
                .msg{
                    height: auto;
                    line-height: 50px;
                    text-align: center;
                }
                label.error{
                    color: red;
                    font-weight:  bold;
                    font-size: 12px;

                }
                .form-control.error{
                    border: 1px solid #ff6356;
                    background-color: #fff0fe;
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

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../../js/bootstrap.min.js"></script>

<script>
    function validate(form) {

        // validation code here ...

        if(!valid) {
            alert('Please correct the errors in the form!');
            return false;
        }
        else {
            return confirm('Do you really want to delete data?');
        }
    }


    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });

</script>
</body>

</html>














