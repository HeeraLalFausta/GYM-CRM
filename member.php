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
                                <h4>Listing All</h4>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2 text-center ">
                                        <div class="p-3 mb-2 bgen text-white"><div class="membox"><strong>0</strong><p>All Member</p></div></div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <div class="p-3 mb-2 bgen text-white"><div class="membox"><strong>0</strong><p>Active Member</p></div></div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <div class="p-3 mb-2 bgen text-white"><div class="membox"><strong>0</strong><p>Upcoming Member</p></div></div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <div class="p-3 mb-2 bgen text-white"><div class="membox"><strong>0</strong><p>Past member</p></div></div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <div class="p-3 mb-2 bgen text-white"><div class="membox"><strong>0</strong><p>Potaintial Lead</p></div></div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <div class="p-3 mb-2 bgen text-white"><div class="membox"><strong>0</strong><p>Today Attendance</p></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 brd1 srh">
                                        <form action="" method="post">
                                            <input type="search" class="form-contro ctr"
                                                placeholder="Name , Mobile No.">
                                        </form>
                                    </div>
                                    <div class="col-md-2">
                                    <form>
                                        <div class="mb-3">
                                        <select name="cars" id="cars" class="Enqdrp1">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>   
                            </div>
                            <div class="container-fluid">
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
                                        <p class="btn1">Sms Remaining</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" class="Check1"></th>
                                                <th>Name & Mob. No.</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Today's Attendance</th>
                                                <th>Customer Service Executive</th>
                                                <th>View</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
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

                                                <td>
                                                    <a href="listing-edit.html"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a href="listing-edit.html"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <th><input type="checkbox" class="Check1"></th>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                                

                                                <td>
                                                    <a href="listing-edit.html"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a href="listing-edit.html"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
    </div>

<?php
include("./footer.php");
?>