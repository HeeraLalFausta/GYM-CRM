<?php
include("./header.php");
include("./sidebar.php");
?>
        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Ui Form</a>
                    </li>
                </ul>
            </div>
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Balance Due Report</h4>
                                <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                        class="material-icons">more_vert</i></a>
                                <ul id="dr-users" class="dropdown-content">
                                    <li><a href="#!">Add New</a>
                                    </li>
                                    <li><a href="#!">Edit</a>
                                    </li>
                                    <li><a href="#!">Update</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                    </li>
                                    <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                    </li>
                                </ul>
                                <section class="fillter">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <label for="">From Date</label>
                                                <div class="brd1">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <label for="">To Date</label>
                                                <div class="brd1">
                                                    <input type="date" class="form-control">
                                                </div>

                                            </form>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <button class="btn btn-success btn1 b1">Genrate Report</button>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <button class="btn btn-success btn1 b2">Download CSV</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 brd1 srh">
                                            <form action="" method="post">
                                                <input type="search" class="form-contro ctr"
                                                    placeholder="Name , Mobile No.">
                                            </form>
                                        </div>

                                    </div>


                                    <div class="row mtr">
                                        <div class="col-md-2">
                                            <div class="container">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-default dropdown-toggle drpbtn drp3 "
                                                        data-toggle="dropdown"> Scrollable Menu &nbsp; <i
                                                            class="fa fa-sort-desc" aria-hidden="true"></i></i><span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu scrollable-menu" role="menu">
                                                        <li><a href="#"><input type="serch"></a></li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;[Select all]
                                                        </li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GymWorkout</li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;PersonalTraining
                                                        </li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GroupEx</li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;LybertyMembership
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="container">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle drp3"
                                                        data-toggle="dropdown">Scrollable Menu &nbsp; <i
                                                            class="fa fa-sort-desc" aria-hidden="true"></i> <span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu scrollable-menu" role="menu">
                                                        <li class="chk">[Select all]</li>
                                                        <li class="chk">GymWorkout</li>
                                                        <li class="chk">PersonalTraining</li>
                                                        <li class="chk">GroupEx</li>
                                                        <li class="chk">LybertyMembership</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="container">
                                                <div class="btn-group ">
                                                    <button type="button" class="btn btn-default dropdown-toggle drp3"
                                                        data-toggle="dropdown">Scrollable Menu &nbsp;<i
                                                            class="fa fa-sort-desc" aria-hidden="true"></i> <span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu scrollable-menu" role="menu">
                                                        <li><a href="#"><input type="serch"></a></li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;[Select all]
                                                        </li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GymWorkout</li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;PersonalTraining
                                                        </li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GroupEx</li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;LybertyMembership
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="container">
                                                <div class="btn-group ">
                                                    <button type="button" class="btn btn-default dropdown-toggle drp3"
                                                        data-toggle="dropdown">Scrollable Menu &nbsp;<i
                                                            class="fa fa-sort-desc" aria-hidden="true"></i> <span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu scrollable-menu" role="menu">
                                                        <li><a href="#"><input type="serch"></a></li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;[Select all]
                                                        </li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GymWorkout</li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;PersonalTraining
                                                        </li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GroupEx</li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;LybertyMembership
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="container">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle drp3"
                                                        data-toggle="dropdown">Scrollable Menu &nbsp;<i
                                                            class="fa fa-sort-desc" aria-hidden="true"></i> <span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu scrollable-menu" role="menu">
                                                        <li><a href="#"><input type="serch"></a></li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;[Select all]
                                                        </li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GymWorkout</li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;PersonalTraining
                                                        </li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GroupEx</li>
                                                        <li class="chk"><input
                                                                type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;LybertyMembership
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-2 cols">
                                            <button class="btn btn-success btn2">APPLY FILTER</button>
                                        </div>
                                        <div class="col-md-2 cols">
                                            <button class="btn btn-success btn2">CLEAR FILTER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <button type="button" class=" btn1 btn btn-lg btn-primary bg1" disabled>send
                                            bulk sms</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class=" btn1 btn btn-lg btn-primary" disabled>send bulk
                                            sms</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class=" btn1 btn btn-lg btn-primary" disabled>send bulk
                                            sms</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class=" btn1 btn btn-lg btn-primary" disabled>send bulk
                                            sms</button>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="btn1">Sms Remaining</p>
                                    </div>
                                </div>


                                <!-- Dropdown Structure -->

                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" class="Check1"></th>
                                                <th>Name & Number</th>
                                                <th>Membership Type</th>
                                                <th>Membership End Date </th>
                                                <th>Invoice No</th>
                                                <th>Balance Due</th>
                                                <th>Due Date</th>
                                                <th>Assigned Trainer</th>
                                                <th>Closed By</th>
                                                <th>Closed Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>

                                                <th><input type="checkbox" class="Check1"></th>
                                                <td>2</td>
                                                <td>23-09-2023</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                                <td>Australia</td>
                                                <td>Australia</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle drp4"
                                                            data-toggle="dropdown">Action</button>
                                                        <ul class="dropdown-menu scrollable-menu" role="menu">
                                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <th><input type="checkbox" class="Check1"></th>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                                <td>Australia</td>
                                                <td>Australia</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle drp4"
                                                            data-toggle="dropdown">Action</button>
                                                        <ul class="dropdown-menu scrollable-menu" role="menu">
                                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include("./footer.php")

?>

  