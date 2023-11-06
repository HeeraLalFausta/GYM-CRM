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
                                <h4>Feedbacks</h4>
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

                                <!-- Dropdown Structure -->

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
                                    <div class="col-md-2">
                                    <div>
                                    <button type="button" class="btn btn-primary">Apply Filter</button>
                                    </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th> Name & Mobile No.</th>
                                                <th>Feedback</th>
                                                <th>Feedback Response</th>
                                                <th>Status</th>
                                                <th>Replied By</th>
                                                <th>Reply Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td>2</td>
                                                <td>23-09-2023</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                                <td>+01 3214 6522</td>
                                                <td>chadengle@dummy.com</td>
                                                <td>Australia</td>
                                            </tr>
                                            <tr>
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
include("./footer.php");

?>