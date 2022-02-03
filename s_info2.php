<div class="p_form">
                    <span class=" h3 text-start text-success text-uppercase p-2" >Personal information</span><br><br>

                    <div class="form2">
                        <form action="d_info.php" method="POST">
                            <div class="row">
                                <div class="col-sm p-2"> <label for="name"  class="form-label" >Full Name: </label><input type="text" id="name" name="name" class="form-control" value="<?php echo $row1['name']; ?>" required></div>
                                <div class="col-sm p-2"> <label for="contact" class="form-label">Contact: </label><input type="text" name="whats_no" id="whats_no" class="form-control" value="<?php echo $row1['contact']; ?>" readonly></div>
                                <div class="col-sm p-2"><label for="cnic" class="form-label">CNIC:(with dashes) </label><input type="text" maxlength="15" name="cnic" id="cnic" class="form-control" required></div>
                            </div>

                            <div class="row">
                                <div class="col-sm p-2"> <label for="email" class="form-label">Email: </label><input type="text" name="email" id="email" class="form-control" value="<?php echo $row1['email']; ?>" readonly ></div>
                                <div class="col-sm p-2">
                                    
                                    <label for="prov"  class="form-label" > Province: </label>
                                        <select name="prov" id="prov" class="form-control" required> 
                                        <option> </option>
                                        <option value="sindh"> Sindh</option>
                                        <option value="punjab"> Punjab </option>
                                        <option value="balochistan"> Balochistan</option>
                                        
                                        <option value="kpk"> Khyber Pakhtunkhwa</option>
                                        <option value="MBBS&BDS"> Islamabad Capital Territory</option>
                                        </select>
                                    </div>
                                <div class="col-sm p-2"><label for="city" class="form-label">City </label><input type="text"  name="city" id="city" class="form-control" required></div>
                            </div>

                            <div class="row">
                            
                                <div class="col-sm p-2"> <label for="pres_add" class="form-label">Present Address: </label><input type="text" name="pres_add" id="pres_add" class="form-control" required></div>
                            
                            </div>

                            <div class="row">
                            
                                <div class="col-sm p-2"> 
                                    <!-- <label for="pres_add" class="form-label">Present Address: </label><input type="text" name="pres_add" id="pres_add" class="form-control" required> -->
                                    <label for="dateofbirth" class="form-label">Date of Birth: </label><input type="date" name="dateofbirth" id="dateofbirth" class="form-control" required>
                                </div>

                                <div class="col-sm p-2"> 
                                    <!-- <label for="profile_img" class="form-label">Profile Image:</label>
                                    <input type="file" name="ufile" id="profile_img" class="form-control" required> -->
                                </div>

                                
                            
                            </div>

                            <div class="row">
                                <div class="col-sm p-2"> 
                                <br>
                                    <!-- <input type="submit" value="Next" class="btn btn-primary"><br><br> -->
                                </div>
                                <div class="col-sm text-end">
                                    <br>
                                    <input type="submit" value="Save Changes" class="btn btn-primary"><br><br>
                                </div>
                            </div>



                        </form>

                    </div>
                </div>