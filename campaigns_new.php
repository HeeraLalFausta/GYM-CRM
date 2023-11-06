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
                                <h4>Add New Campaign</h4>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Campaign Name</label>
                                        <input type="text">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Start Date</label>
                                        <input type="date">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">End Date</label>
                                        <input type="date" placeholder="enter end date">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-5">
                                    <form>
                                        <div class="mb-3">
                                        <label  class="form-label">Membership Type</label>
                                        <select name="cars" id="cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                        </select>
                                        </div>
                                    </form>
                                        <!-- <label for="">Membership Type</label>
                                        <input type="text"> -->
                                    </div>
                                    <div class="col-md-5">
                                        <label for="">Plans</label>
                                        <div class="container-fluid">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle drpcam"
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
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Plan Id</label>
                                        <input type="text">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Plan Name</label>
                                        <input type="text">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">price</label>
                                        <input type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row campbtn">
                                    <div class="col-md-12">
                                    <a href=""><button type="button" class="btn btn-primary">CREATE CAMPIGAN</button></a>
                                    <a href=""><button type="button" class="btn btn-primary">RESTALL</button></a>
                                    <a href="campaigns.php"><button type="button" class="btn btn-primary">CANCEL</button>  </a>
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