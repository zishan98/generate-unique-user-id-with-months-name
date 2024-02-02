 <form action="data/application.php" method="POST" enctype="multipart/form-data">
            <div class="row jumbotron box8">
                <div class="col-sm-12 mx-t3 mb-4 logotop text-center">
                    <!-- <h2 class="text-center text-info">Register</h2> -->
                    <img src="assets/img/logo_color.png" alt="">
                </div>
                <div class="col-sm-12 mb-4">
                    <h5>
                    <?php if (isset($_SESSION['error'])) { ?>
								<div class="alert alert-danger bg-danger text-white" role="alert">
									<?php echo $_SESSION['error']; ?> &#128532;
								</div>
							<?php unset($_SESSION['error']); } ?>
                            
							<?php if (isset($_SESSION['message'])) { ?>
								<div class="alert alert-success bg-success text-white" role="alert">
									<?php echo $_SESSION['message']; ?> &#128522;
								</div>
							<?php unset($_SESSION['message']); } ?>
                    </h5>
                </div>
                <div class="col-sm-12 mb-4">
                    <h5><a href="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i> Application From </a></h5>
                </div>

                <div class="col-sm-4 form-group">
                    <label for="name-f">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name." >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="name-l">Father's name</label>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your father's name." >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="Date">Date Of Birth</label>
                    <input type="Date" name="dob" class="form-control" id="Date" placeholder="" >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="gender">Select Gender</label>
                    <select id="gender" name="gender" class="form-control browser-default custom-select" >
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Unspesified">Unspecified</option>
                    </select>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" name="category" id="category" placeholder="Category" >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="tel">Phone No</label>
                    <input type="tel" name="phone" class="form-control" id="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' max="10" min="10" placeholder="Enter Your Contact Number." >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="tel">Passport Size Photo</label>
                    <input type="file" name="photo" class="form-control" id="phone" accept="image/*" style="padding: 3px 0 0 5px;" >
                </div>

                <div class="col-lg-12 col-sm-12 ">
                    <strong>Address</strong>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="cod">Select State</label>
                    <select class="form-control browser-default custom-select" name="state" >
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>

                </div>
                <div class="col-sm-3 form-group">
                    <label for="District">District</label>
                    <input type="text" class="form-control" name="district" id="district" placeholder="District name" >
                </div>
                <div class="col-sm-3 form-group">
                    <label for="District">Block</label>
                    <input type="text" class="form-control" name="block" id="block" placeholder="Block name" >
                </div>
                <div class="col-sm-3 form-group">
                    <label for="zip">Postal-Code</label>
                    <input type="zip" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="zip" id="zip" placeholder="Postal-Code." >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="pass">Aadhar Number</label>
                    <input type="text" name="aadhar" class="form-control" id="aadhar" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter your aadhar number." >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="pass2">Bank Name</label>
                    <input type="text" name="bank_name" class="form-control" id="bank_name" placeholder="Enter Bank Name" >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="pass2">Branch Name</label>
                    <input type="text" name="branch_name" class="form-control" id="branch_name" placeholder="Enter Branch Name" >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="pass2">Account No</label>
                    <input type="text" name="account_no" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="account_no" placeholder="Enter Account No" >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="pass2">IFSC Code </label>
                    <input type="text" name="ifsc_code" class="form-control" id="ifsc_code" placeholder="Enter IFSC Code" >
                </div>
                <div class="col-sm-4 form-group">
                    <label for="pass2">Educational Qualification </label>
                    <input type="text" name="eq" class="form-control" id="eq" placeholder="Enter Your Qualification" >
                </div>
                <div class="col-sm-12">
                    <input type="checkbox" class="form-check d-inline" name="t_c" id="chb">
                    <label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                    </label>
                </div>
                <div class="col-sm-12 form-group mb-0 mt-2">
                    <button type="submit" name="submit" class="btn btn-primary float-left">Submit</button>
                </div>
            </div>
        </form>
