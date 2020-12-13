<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://d2v52k3cl9vedd.cloudfront.net/vhs/0.1.0/vhs.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family:'Times New Roman', Times, serif;
  font-weight: bold;
}

.hero-image {
  background-image: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)),url("../Kratigence-website/images/intern.jpg");
  background-color: #cccccc;
  background-position:center;
  background-repeat: no-repeat;
  background-size:cover;
  position: relative;
  text-align: center;

}
.purp{
    color:darkorchid;
    text-emphasis:initial;
    text-align: center;
}
.button {
  background-color:blueviolet; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
<title>Task3</title>
</head>
<body>

<div class="hero-image">
  <div class="h2 bold center p2">
    <div class="vhs-fade vhs-duration-6 vhs-infinite vhs-alternate js-demo" id="purp"><h1>Apply for Internship</h1></div>
  </div>
    <form method="post">
        <label for="FullName">Enter your full name:</label>
        <input type="text" id="FullName" name="inputFullName" placeholder="Enter your full name">
        <br /><br />
        <label>enter email address:</label>
        <input type="email" id="email" name="inputEmail" placeholder="Enter your email address">
        <br /><br />
        <label>Enter Gender:</label>
        <select name="inputGender" id="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
        <br /><br />
        <label>Enter Highest Academic Qualifcation:</label>
        <input type="text" name="inputDegree" placeholder="Enter your Highest Academic Qualifcation">
        <br /><br />
        <label>Enter Year of Graduation:</label>
        <input type="text" name="inputYOP" placeholder="Enter your Graduation Year">
        <br /><br />
        <label>Enter College/University:</label>
        <input type="text" name="inputCollegeName" placeholder="Enter your University">
        <br /><br />
        <label>Enter Contact Number:</label>
        <input type="text" name="inputContactNumber" placeholder="Enter your number">
        <br /><br /> 
        <label>Enter Domain:(Web Devlopment/Android App Devlopment/Data Science)</label>
        <select name="selectDomain" id="domains">
            <option value="WD">Web Development</option>
            <option value="CA">Campus Ambassador</option>
            <option value="MAD">Mobile Application Development</option>
            <option value="ML">Machine Learning</option>
          </select>
        <br /><br />
        <label>Enter Duration:</label>
        <input type="text" name="selectDuration" placeholder="Enter your number">
        <br /><br />
        <label>Upload your resume:</label>
        <input type="file" name="resume">
        <br /><br />
        <p><label>Why Should you be hired for this role?</label></p>
        <textarea rows="10" cols="70" id="why" name="inputWhy"></textarea>
        <br /><br />
        <button class="button button2" name="btnSubmit">SUBMIT</button>
       </form>
       
       <?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="applicant";
        $conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    if(isset($_POST['btnSubmit'])){
      $fullname = $_POST['inputFullName'];
      $email = $_POST['inputEmail'];
      $gender = $_POST['inputGender'];
      $degree = $_POST['inputDegree'];
      $yop = $_POST['inputYOP'];
      $college = $_POST['inputCollegeName'];
      $contact = $_POST['inputContactNumber'];
      $domain = $_POST['selectDomain'];
      $duration = $_POST['selectDuration'];
      $why = $_POST['inputWhy'];
      #$allow=array('pdf');
      #$temp=explode(".",$_FILES['fileToUpload']['name']);
      #$extension=end($temp);
      #$upload_file=$_FILES['fileToUpload']['name'];
      #move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"uploads/pdf/".$_FILES['fileToUpload']['name']);
      #$pname = rand(1000,10000)."-".$_FILES['fileToUpload']['name'];
      #$tname = $_FILES['fileToUpload']['tmp_name'];
      #$uploads_dir = '/uploads/pdf';
      #move_uploaded_file($tname,$uploads_dir.'/'.$pname);
      if($fullname == '' || $email == '' || $gender =='' || $yop == '' || $college == '' || $contact == '' || $why == ''){
        echo '<div class="text-center alert alert-warning alert-dismissable fade show"role="alert" style="margin-top:3vh;">
            <strong>Please enter all the details!!!</strong></div>';
      }
      else{
        $sql = "INSERT INTO applications (`id`, `fullname`, `email`, `gender`, `degree`, `yearofgraduation`, `college`, `contact`, `domain`, `duration`, `why`) VALUES (NULL, '$fullname', '$email', '$gender', '$degree', '$yop', '$college','$contact', '$domain', '$duration', '$why')";
        $result = mysqli_query($conn,$sql);
        if($result){
          echo '<div class="text-center alert alert-success alert-dismissable fade show"role="alert" style="margin-top:3vh;">
            <strong>Success! Your details has been submitted successfully!</strong></div>';
        }
        else{
          echo "The record was not inserted succesfully: ". mysqli_error($conn);
        }
    }
    } 
}
?>
</div>
</body>
</html>