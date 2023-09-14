<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Diyan-Student Login</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="homepage.htm" class="navbar-brand text-center text-light"><img src="DLOGO.jpeg" alt="" height="50px">
            DIYAN UNIVERSAL SCHOOL</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="homepage.htm" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
                <a href="homepage.htm" class="nav-link">RESULT</a>
            </li>
            <li class="nav-item">
                <a href="homepage.htm" class="nav-link">CONTACT</a>
            </li>
            <li class="nav-item">
                <a href="homepage.htm" class="nav-link">ABOUT</a>
            </li>
        </ul>
    </div>

    <div class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="" class="navbar-brand">ADMISSION</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div href="" class="nav-link text-light"><a href="homepage.htm" class="text-light"><strong>Home
                                &#xbb;</strong></a><a href="admission.htm"
                            class="text-light"><strong>Admission</strong></a> &#xbb;<a href="Admission_form.htm"
                            class="text-light"> Admission Form</a> </div>
                </li>
            </ul>
        </div>
    </div>
    <!--break-->
    <div class="container">
        <table class="a1">
            <tr>
                <th class="b1"><img src="DLOGO.jpeg" alt="" height="80px"></th>
                <th class="b2" colspan="3">
                    <h1>DIYAN UNIVERSAL SCHOOL</h1>
                    <h5>OJHAR,NASHIK-422206</h5>
                </th>
            </tr>
            <tr>
                <th class="c1" colspan="4">ADMISSION FORM</th>
            </tr>
            <form name="f1" action="" method="post">
                <tr>
                    <th class="d1" colspan="4">
                        <h3><span class="badge badge-pill badge-success"><img src="insidelogo.gif" height="22px" alt="">
                                Personal Details</span></h3>
                    </th>
                </tr>
                <tr>
                    <th>Name </th>
                    <td><input type="text" required class="e1" placeholder="First Name" name="firstname"></td>
                    <td><input type="text" required class="e1" placeholder="Middle Name" name="middlename"></td>
                    <td><input type="text" required class="e1" placeholder="Last Name" name="lastname"></td>
                </tr>
                <tr>
                    <th>Father's Name </th>
                    <td><input type="text" class="e1" placeholder="First Name" name="fatherfirstname"></td>
                    <td><input type="text" class="e1" placeholder="Middle Name" name="fathermiddlename"></td>
                    <td><input type="text" class="e1" placeholder="Last Name" name="fatherlastname"></td>
                </tr>
                <tr>
                    <th>Mother's Name </th>
                    <td><input type="text" class="e1" placeholder="First Name" name="motherfirstname"></td>
                    <td><input type="text" class="e1" placeholder="Middle Name" name="mothermiddlename"></td>
                    <td><input type="text" class="e1" placeholder="Last Name" name="motherlastname"></td>
                </tr>
                <tr>
                    <th>Gender </th>
                    <td class="f1"><input type="radio" name="gender" value="Male">Male </td>
                    <td class="f1"><input type="radio" name="gender"value="Female">Female </td>
                    <td class="f1"><input type="radio" name="gender" value="Other">Other's </td>
                </tr>
                <tr>
                    <th>Physically Challenged? </th>
                    <td class="f1"><input type="radio" name="physicallychallenged"value="Yes">Yes </td>
                    <td class="f1"><input type="radio" name="physicallychallenged"value="No">No </td>

                </tr>
                <tr>
                    <th>Date of Birth </th>
                    <td><input class="g1" type="date" name="dob"></td>
                    <th>Category</th>
                    <td>

                        <select class="g2" name=category>
                            <option>General</option>
                            <option>OBC</option>
                            <option>ST</option>
                            <option>SC</option>
                            <option>SBC</option>
                            <option>VJ</option>
                            <option>NT-B</option>
                            <option>NT-C</option>
                            <option>NT-D</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Phone </th>
                    <td><input class="e1" type="tel" placeholder="Enter mobile no." maxlength="10" name="phone"></td>
                    <th>Telephone </th>
                    <td><input class="e1" type="tel" placeholder="Enter telephone no." maxlength="10" name="telephone">
                    </td>
                </tr>
                <tr>
                    <th>Email </th>
                    <td><input class="e1" type="email" placeholder="Enter Student's email" name="email"></td>
                    <th>Guardian's Email </th>
                    <td><input class="e1" type="email" placeholder="Enter Guardian's email" name="guardianemail"></td>
                </tr>
                <tr>
                    <th>Address</th>

                    <td colspan="3"><input class="i1" type="text" placeholder="Enter Address" name="address"></td>
                </tr>
                
                <tr>
                    <th>City</th>
                    <td><input class="e1" type="text" placeholder="Enter your city" name="city"></td>
                    <th>State</th>
                    <td><input class="e1" type="text" placeholder="Enter your state" name="state"></td>
                </tr>
                <tr>
                    <th>PIN</th>
                    <td><input class="e1" type="pin" placeholder="Enter PIN Code" maxlength="6" name="pin"></td>

                    <th>Nationality</th>
                    <td>
                        <select class="g2" name="nationality">
                            <option>INDIAN</option>
                            <option>NRI</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Aadhar Card </th>

                    <td><input class="e1" type="uid" placeholder="Enter Student's Aadhar Card Number" maxlength="12"
                            name="adharcard"></td>
               <!--     <td> <a href="Admission_form.htm" class="btn btn-lg btn-primary eee"><input type="submit"
                                name="insert" value="Submit" /></a></td>
               </tr>
                    <tr>
                    <th class="d1" colspan="4"><h3><span class="badge badge-pill badge-success"><img src="insidelogo.gif" height="22px" alt=""> Previous School Details</span></h3></th>
                    </tr>
                    <tr>
                        <th>School Name</th>
                        <td colspan="3"><input class="j1" type="text" placeholder="Enter Previous School Name"></td>
                    </tr>
                    <tr>
                        <th>School Address</th>
                        <td colspan="3"><input class="i1" type="text" placeholder="Enter Previous School Address"></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><input type="text" class="e1" placeholder="Previous School city"></td>
                        <th>State</th>
                        <td><input type="text" class="e1" placeholder="Previous School state"></td>
                    </tr>
                    <tr>
                        <th>PIN</th>
                        <td><input type="number" class="e1" placeholder="Enter PIN Code"></td>
                        <th>School Board</th>
                        <td><input type="text" class="e1" placeholder="Previous School Board"></td>
                    </tr>
                    <tr>
                    <th class="d1" colspan="4"><h3><span class="badge badge-pill badge-success"><img src="insidelogo.gif" height="22px" alt=""> Previous School Result</span></h3></th>
                    </tr>
                    
                    
                    <tr>
                        <th class="k1">Percentage</th>
                        <td><input class="e1" type="number" placeholder="Percentage %"></td>
                        <th class="k1">Passing year</th>
                        <td >
                            <select class="e1">
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <th class="d1" colspan="4"><h3><span class="badge badge-pill badge-success"><img src="insidelogo.gif" height="22px" alt=""> Applying For</span></h3></th>
                    </tr>
                    <tr>
                        <th>Applying For Class</th>
                        <td>
                            <select class="e1">
                                <option>I</option>
                                <option>II</option>
                                <option>III</option>
                                <option>IV</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <th class="d1" colspan="4"><h3><span class="badge badge-pill badge-success"><img src="insidelogo.gif" height="22px" alt=""> Student Photo & Documents</span></h3></th>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td colspan="3"><input class="k2" type="file"></td>
                    </tr>
                    <tr>
                        <th>Transfer Certificate/Birth certificate</th>
                        <td colspan="3"><input class="k2" type="file"></td>
                    </tr>
                    <tr>
                        <th>Student Aadhar Card</th>
                        <td colspan="3"><input class="k2" type="file"></td>
                    </tr>
                    <tr>
                        
                        <th class="k1">Password</th>
                        <td><input class="e1" type="password"></td>
                    </tr>
                    <tr>
                        <th><input type="checkbox"><lable>I Agree,Information that I have filled Is correct and I will be Responsible For any Issues</lable></th>
                        
                    </tr> -->
            </form>

        </table>
    </div>
<?php
if (isset($_POST['insert'])) {
    $con = mysqli_connect("localhost", "root", "", "admission");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to mysqli: " . mysqli_connect_error();
    }
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $fatherfirstname = $_POST["fatherfirstname"];
    $fathermiddlename = $_POST["fathermiddlename"];
    $fatherlastname = $_POST["fatherlastname"];
    $motherfirstname = $_POST["motherfirstname"];
    $mothermiddlename = $_POST["mothermiddlename"];
    $motherlastname = $_POST["motherlastname"];
    $gender = $_POST["gender"];
    $physicallychallenged = $_POST["physicallychallenged"];
    $dob = $_POST["dob"];
    $category = $_POST["category"];
    $phone = $_POST["phone"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $guardianemail = $_POST["guardianemail"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    $nationality = $_POST["nationality"];
    $adharcard = $_POST["adharcard"];
    $sql = "INSERT INTO admissiondata (firstname, middlename, lastname , fatherfirstname, fathermiddlename, fatherlastname, motherfirstname, mothermiddlename, motherlastname, gender, physicallychallenged, dob, category, phone, telephone, email, guardianemail, address, city, state, pin, nationality, adharcard)
VALUES ('$firstname', '$middlename', '$lastname' , '$fatherfirstname', '$fathermiddlename', '$fatherlastname', '$motherfirstname', '$mothermiddlename', '$motherlastname', '$gender', '$physicallychallenged', '$dob', '$category', '$phone', '$telephone', '$email', '$guardianemail', '$address', '$city', '$state', '$pin', '$nationality', '$adharcard')";

    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
    echo "Submitted Succesfully.....";

    mysqli_close($con);
}
?>

    <!--break-->

    <!--break-->
    <div class="navbar navbar-expand-lg navbar-dark dd">
        <div class="container">
            <div class="ff">
                <a href="">
                    <h1 class="ee">Address</h1>
                </a>
                <br>
                <br>
                <h1 class="ee">DIYAN UNIVERSAL SCHOOL</h1>
                <h2 class="gg">OJHAR ,NASHIK-422206</h2>
                <h2 class="gg">Tel: 089830 55535</h2>
                <h2 class="gg">Email: diyanuniversalschoolozar@gmail.com</h2>
            </div>

            <div class="hh"></div>

            <div class="ii">
                <a href="">
                    <h1 class="ee">Links</h1>
                </a><br><br>
                <table class="jj">
                <tr>
                <td><a href="index.htm" class="text-dark">Home</a></td>
                <td><a href="academics.htm" class="text-dark">Academics</a></td>
            </tr>
            <tr>
                <td><a href="about.htm" class="text-dark">About Us</a></td>
                <td><a href="about.htm" class="text-dark">Facilities</a></td>
            </tr>
            <tr>
                <!--<td><a href="" class="text-dark">Results</a></td>-->
                <td><a href="admission.php" class="text-dark">Admissions</a></td>
            </tr>
            <tr>
               <!-- <td><a href="" class="text-dark">Happenings</a></td>-->
                <td><a href="" class="text-dark">Awards</a></td>
            </tr>
            <tr>
                <td><a href="gallary.htm" class="text-dark">Campus</a></td>
                <!--<td><a href="" class="text-dark">Careers</a></td>-->
            </tr>
            <tr>
                <td><a href="about.htm" class="text-dark">Contact Us</a></td>
                <!--<td><a href="" class="text-dark">Sitemap</a></td>-->
            </tr>
                </table>
            </div>


            <div class="hh"></div>

            <div class="nn">
                <a href="">
                    <h1 class="ee">For admissions</h1>
                </a><br><br><br>
                <h1 class="gg">Please email your queries to</h1>
                <p><a href="">diyanuniversalschoolozar@gmail.com</a></p>
                <div class="yy"></div>

                <a href="">
                    <h1 class="ee">&#xa9; DIYAN UNIVERSAL SCHOOL OJHAR</h1>
                </a>
            </div>
        </div>
    </div>
</body>

</html>