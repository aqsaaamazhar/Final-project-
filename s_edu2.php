<div class="form2">
                            <form action="d_info.php" method="POST">
                                <div class="row">
                                    <div class="col-sm">

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name of examination</th>
                                                <th>Institute</th>
                                                <th>Starting Year</th>
                                                <th>Passing Year</th>
                                                <th>Remarks/Grades</th>
                                                <!-- <th>Percentage</th> -->
                                                <!-- <th>Degree Picture</th> -->
                                                <!-- <th>Name of Board/University</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 
                                                    <select name="degree1" id="degree" class="form-control" required> 
                                                        <option></option>
                                                        <option value="matric">Matric</option>
                                                        <option value="inter">Intermediate</option>
                                                        <option value="ugad">Undergraduate</option>
                                                   
                                                    </select>
                                                 </td>
                                                <td> <input type="text" class="form-control"  name="inst"></td>
                                                <td><input type="text" class="form-control" name="s_y"></td>
                                                <td><input type="text" class="form-control" name="p_y"></td>
                                                <td><input type="text" class="form-control"  name="remarks"></td>
                                                <!-- <td><input type="text" class="form-control" name="p1"></td> -->
                                                <!-- <td><input type="text" class="form-control" name="deg_pic"></td> -->
                                                <!-- <td><input type="text" class="form-control" name="board1"></td> -->
                                                <td><input type="submit" class="btn btn-primary btn-sm" name="submit"></td>
                                                

                                            </tr>
                                          
                                        </tbody>
                                    </table>


                                    </div>


                               

                                </div>
                             </form>
                        </div>
                                    




                </div>