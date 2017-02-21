<style type="text/css">
	table{
		border:2px solid black;
		border-collapse: collapse;
	}
	td{
		border:2px solid black;
	}

	tr{
		border:2px solid black;
	}
</style>
<?php

$connect=mysqli_connect('localhost','root','','mydatabase');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

// create variables
if(isset($_POST['submit'])){
	
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$category=$_POST['category'];
$email=$_POST['email'];
$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];
$aadhar_number=$_POST['aadhar_number'];
$street_number=$_POST['street_number'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$pin_code=$_POST['pin_code'];
$grade=$_POST['grade'];
$mother_name=$_POST['mother_name'];
$mother_contact=$_POST['mother_contact'];
$mother_aadhar_number=$_POST['mother_aadhar_number'];
$mother_email=$_POST['mother_email'];
$mother_occupation=$_POST['mother_occupation'];
$father_name=$_POST['father_name'];
$father_contact=$_POST['father_contact'];
$father_aadhar_number=$_POST['father_aadhar_number'];
$father_email=$_POST['father_email'];
$father_occupation=$_POST['father_occupation'];
$family_income=$_POST['family_income'];

//Execute the query

mysqli_query($connect,"INSERT INTO admission_data(first_name, middle_name,last_name, date_of_birth, gender, category, email, contact1, contact2, aadhar_number, street_number, city, state, country, pin_code, grade, mother_name, mother_contact,mother_aadhar_number, mother_email, mother_occupation, father_name, father_contact, father_aadhar_number, father_email, father_occupation, family_income) VALUES ('$first_name', '$middle_name','$last_name', '$date_of_birth', '$gender', '$category', '$email', '$contact1', '$contact2', '$aadhar_number', '$street_number', '$city', '$state', '$country', '$pin_code', '$grade', '$mother_name', '$mother_contact','$mother_aadhar_number', '$mother_email', '$mother_occupation', '$father_name', '$father_contact', '$father_aadhar_number', '$father_email', '$father_occupation', '$family_income')");

echo "Form submitted";
if(mysqli_affected_rows($connect) > 0){
	echo "<p>Student Info Added</p>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error($connect);
}
}
$sql = "SELECT first_name, middle_name,last_name, date_of_birth, gender, category, email, contact1, contact2, aadhar_number, street_number, city, state, country, pin_code, grade, mother_name, mother_contact,mother_aadhar_number, mother_email, mother_occupation, father_name, father_contact, father_aadhar_number, father_email, father_occupation, family_income FROM admission_data";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    		<tr>
    <th>First Name</th>    <th>Middle Name</th>    <th>Last Name</th>    <th>Date of Birth</th>    <th>Gender</th>    <th>Category</th>    <th>Email</th>    <th>Mobile no.</th>    <th>Telephone</th>    <th>Aadhar number</th>
    <th>Street no.</th>    <th>City</th>    <th>State</th>    <th>Country</th>    <th>Pin Code</th>    <th>Grade</th>    <th>Mother's name</th>    <th>Mother's contact no.</th>    <th>Mother's aadhar no.</th>    <th>Mother's email</th>
    <th>Mother's occupation</th>    <th>Father's name</th>    <th>Father's mobile no.</th>    <th>Father's aadhar no.</th>
    <th>Father's email</th>    <th>Father's Occupation</th>    <th>Family Income</th>
       </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["first_name"]."</td><td> ".$row["middle_name"]." </td><td>".$row["last_name"]."</td>
        <td>".$row["date_of_birth"]."</td><td>".$row["gender"]."</td><td>".$row["category"]."</td>
        <td>".$row["email"]."</td><td>".$row["contact1"]."</td><td>".$row["contact2"]."</td>
        <td>".$row["aadhar_number"]."</td><td>".$row["street_number"]."</td><td>".$row["city"]."</td>
        <td>".$row["state"]."</td><td>".$row["country"]."</td><td>".$row["pin_code"]."</td>
        <td>".$row["grade"]."</td><td>".$row["mother_name"]."</td><td>".$row["mother_contact"]."</td>
        <td>".$row["mother_aadhar_number"]."</td><td>".$row["mother_email"]."</td><td>".$row["mother_occupation"]."</td>
        <td>".$row["father_name"]."</td><td>".$row["father_contact"]."</td><td>".$row["father_aadhar_number"]."</td>
        <td>".$row["father_email"]."</td><td>".$row["father_occupation"]."</td><td>".$row["family_income"]."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$connect->close();
				?>