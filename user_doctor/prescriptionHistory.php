<html>

<head><title>Home</title></head>

<body>
	<table align="center" width="100%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table align="center" width="100%">
                        <td width="20%">
                            <a href="dashboard.php"><img src="images/pageicon.png"/></a>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.php">Bob<img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.html">Logout<img src="images/logout.png"></a></td>
                            </table> 
                        </td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Body section -->
                 <div>
                    <table width="100%" border="1">
                        <!-- User Menu Section -->
                        <td width="20%">
                            <fieldset>
                                <legend>
                            <strong>Personal Information</strong></legend>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewprofile.php">View Profile</a></li>
                                <li><a href="editprofile.php">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                                <li><a href="managechamber.html">Manage Chambers</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="newpescriptions.html">Create new Prescriptions</a></li>
                                <li><a href="pescriptions.php">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="appointmentstatus.php">Appointment Status</a></li>
                                <li><a href="appointmenthistory.php">Appointment History</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="patienthistory.php">Patient History</a></li>
                                <li><a href="medianalysis.php">Medicine Analysis</a></li>
                                <li><a href="disanalysis.php">Disease Analysis</a></li>
                            </ul>
                        </fieldset>
						
						
						<fieldset>
                            <legend>
                            <strong>E-consultation</strong></legend>
                           
                            <ul>
								<li><a href="eConsultation/message.php">New Message</a></li>
                                <li><a href="eConsultation/inbox.php">Inbox</a></li>
                                <li><a href="eConsultation/sentitems.php">Sent Items</a></li>
								
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Account</strong></legend>
                           
                            <ul>
                                <li><a href="changepassword.html">Change Password</a></li>
                                <li><a href="../index.html">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>

                     <td width="70%" valign="top">
                            <!------------------------ DESIGN PORTAL PAGE HERE ---------------------------------->
                            
                            <table align="center" width="80%">
                                <tr>
                                    <td>
                                        <h1 align="center">Patient Prescription</h1>
                           
                                
                            
                        </table>

                                <table width="100%" border="0">
                                    <tr>
                                        <td align="center" colspan="4">
                                            <b> <label>Patient Name:Bob Marley</label> </b>
                                         </td>
                                    </tr>

                                    <tr align="center">
                                        <td width="50%" colspan="3" align="left">
                                            <label><b>Age:24</b></label>
                                        </td>

                                        <td width="50%" colspan="3">
                                            <label><b>Appointment Date:21/02/2016</b></label>
                                        </td>

                                    </tr>

                                    <tr>
                                        
                                        <td align="left" width="10%">

                                                <label><b>Disease:</b></label></td>
                                                
                                                <td width="10%" align="left">High Fever</td>

                                                <td align="right" width="50%">
                                                
                                                <label><b>Symptoms</b>:</label></td>
                                                <td>
                                                1.Sweating</br>
                                                 2.Chills and shivering</br>
                                                3.Headache</br>
                                                4.Muscle aches</br>
                                                5.Loss of appetite</br>
                                                6.Irritability</br>
                                                7.Dehydration</br>
                                                8.General weakness
                                                
                                                </td>

                                            </tr>

                                            <tr>

                                            <td colspan="4" align="center">
                                           
                                                <h2>Prescribed Medicine</h2>
                                                <table border="1">
                                                    
                                                    <tr>
                                                        <td width="15%">Medicine Name</td>
                                                        <td width="15%">No Of time in a day</td>
                                                        <td width="15%">No of Days</td>
                                                    </tr>

                                                    <tr>
                                                    <td>Napa</td>
                                                    <td>3 times</td>
                                                    <td>Mon, wed, thursday</td>
                                                    </tr>

                                                    <tr>
                                                    <td>Zantac 150</td>
                                                    <td>2 times</td>
                                                    <td>Mon, wed, thursday</td>
                                                    </tr>
                                                </table>
                                       
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="center" colspan="4">
                                            <label><b>New Appointment</b>:17/12/2016</label>
                                            
                                        </td>
                                    </tr>

                                        </table>
                                          


                                        
                                        
                                   

                                <p align="center"><a href="editprescribtion.php">Edit Prescription</a> | <a href="appointmenthistory.php">Appointment History</a></p>
                            </fieldset>
                      </table>
                                    </td>
                                </tr>
                            </table>

                            <!------------------------ FINISH DESIGNING HERE --------------------------------->
                        </td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <!-- Footer section -->
                <div>
                    <table align="center">
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>