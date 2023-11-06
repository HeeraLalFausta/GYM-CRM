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
                                <h4>Membership Plans</h4>
                                <a class="drop-down-meta2" href="campaigns_new.php" ><button class="btn btn-success">Add membership plan</button></a>
                            </div>
                            <div class="container-fluid">
                                <div class="row memlink">
                                    <div class="col-md-1">
                                        <a href="membership_plan.php">PLANS</a>
                                    </div>
                                    <div class="col-md-1">
                                      <a href="">PACKAGES</a>  
                                    </div>
                                    <div class="col-md-1">
                                       <a href="">CAMPAIGNS</a> 
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
                                </div>
                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Package ID</th>
                                                <th>Package Name</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr>
                                                
                                                <th>1</th>
                                                <td>2</td>
                                                <td>23-09-2023</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                                
                                            </tr>
                                            <tr>
                                                
                                                <th>2</th>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                               
                                                
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
include("./footer.php");
?>