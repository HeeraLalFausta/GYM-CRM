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
                                <h4>Enquiries</h4>
                                <a class=" drop-down-meta1" href="enquirt_new.php" ><button class="btn btn-success">Genrate Report</button></a>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="p-3 mb-2 bgen text-white"><div class="box"><strong>0</strong><p>Open</p></div></div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-3 mb-2 bgen text-white"><div class="box"><strong>0</strong><p>Closed</p></div></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="p-3 mb-2 bgen text-white"><div class="box"><strong>0</strong><p>Not Intrested</p></div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- search box -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 brd1 srh">
                                        <form action="" method="post">
                                            <input type="search" class="form-contro ctr"
                                                placeholder="Name , Mobile No.">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- dropdown -->
                            <div class="container-fluid">
                                <div class="row">
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
                                    <div class="col-md-2 Enqdrp1  ">
                                    <input id="week" type="date" name="week" value="2023-W01" />
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                    <button type="button" class=" btn1 btn btn-lg btn-primary bg1" disabled>send
                                        bulk sms</button>
                                    </div>
                                    <div class="col-md-2">
                                    <button type="button" class=" btn1 btn btn-lg btn-primary bg1" disabled>send
                                        bulk sms</button>
                                    </div>
                                    <div class="col-md-2">
                                    <button type="button" class=" btn1 btn btn-lg btn-primary bg1" disabled>send
                                        bulk sms</button>
                                    </div>
                                    <div class="col-md-2">
                                    <button type="button" class=" btn1 btn btn-lg btn-primary bg1" disabled>send
                                        bulk sms</button>
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
                                                <th>Enquiry No.</th>
                                                <th>Date of Enquiry</th>
                                                <th>Name & Mob. No.</th>
                                                <th>Trial Booked</th>
                                                <th>Handled By</th>
                                                <th>Lead Type</th>
                                                <th>Remarks/Summary</th>
                                                <th>Action</th>
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

  