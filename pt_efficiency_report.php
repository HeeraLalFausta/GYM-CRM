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
                                <h4>PT Efficiency Report</h4>
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
                                        <form action="" method="post">
                                            <label for="">To Date</label>
                                            <div class="">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle drpbtn drppt "data-toggle="dropdown"> Scrollable Menu &nbsp; <i class="fa fa-sort-desc" aria-hidden="true"></i></i><span class="caret"></span></button>
                                                        <ul class="dropdown-menu scrollable-menu" role="menu">
                                                             <li><a href="#"><input type="serch"></a></li>
                                                             <li class="chk" ><input type="checkbox" >&nbsp;&nbsp;&nbsp;&nbsp;[Select all]</li>
                                                             <li class="chk"><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GymWorkout</li>
                                                             <li class="chk"><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;PersonalTraining</li>
                                                             <li class="chk"><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;GroupEx</li>
                                                             <li class="chk"><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;LybertyMembership</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>    
                                        </form>
                                        <div class="col-md-4">
                                            <button class="btn btn-success btnpt ">Download csv</button> 
                                        </div>
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
