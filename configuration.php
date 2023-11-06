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
                               <h4>Configuration</h4>
                                <p class="mt">T&C</p>
                                <div class="brd">
                                    <p>1. Composition Taxable Person not eligible to collect tax on supplies.</p>
                                    <p>2. Outside shoes not allowed</p>
                                    <p>3.0 Please carry your bottle</p>
                                    <p>4- FEES ONCE PAIID SHALL NOT BE RETUNED </p>
                                </div>
                                <table>
                                    <tr>
                                      <td>Allow Back Dated Invoice</td>
                                      <td><input type="checkbox" class="Check1"></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td>Approve Back Dated Invoice By Admin</td>
                                      <td><input type="checkbox" class="Check1"></td>
                                      <td></td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Date And Time</td>
                                      <td><input type="datetime-local"></td>
                                      <td></td>
                                      <td></td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Allow Membership Freeze</td>
                                      <td><input type="checkbox" class="Check1"></td>
                                      <td></td>
                                      <td></td>
                                      
                                    </tr>
                                    <tr>
                                        <td>Minimum Freeze Duration</td>
                                        <td>Days<input type="Number" placeholder="Enter Days in Number"></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Minimum Freeze Duration</td>
                                        <td>Days<input type="Number" placeholder="Enter days in Number"></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Minimum Membership plan duration</td>
                                        <td>Days<input type="Number" placeholder="Enter Days in Number"></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Freeze Frequency</td>
                                        <td>Time<input type="time" placeholder="Enter Time"></td>
                                        <td></td>
                                        <td></td>    
                                    </tr>
                                    <tr>
                                        <td>Freeze Policy</td>
                                        <td><input type="radio" class="">&nbsp;30 days for 1 freeze</td>
                                        <td><input type="radio" class="">&nbsp;30 days per freeze</td>
                                        <td></td>   
                                    </tr>
                                  </table>  
                                  <button>Save</button>
                                  <button>Cancel</button>  
                           
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
