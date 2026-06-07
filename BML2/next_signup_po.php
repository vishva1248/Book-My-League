<?php
include('connecttion\connect.php');
if(isset($_GET['uid'])){
    $uid=$_GET['uid'];
    if($selcet_query_fetch_po_data="SELECT * FROM `po_register` WHERE uid=$uid")
    $run_query_fetch_po_data=mysqli_query($con,$selcet_query_fetch_po_data);
    $fetch_data_po_data=mysqli_fetch_array($run_query_fetch_po_data);
    $po_username=$fetch_data_po_data['username'];
    $po_password=$fetch_data_po_data['password'];
    $po_email=$fetch_data_po_data['email'];
    $po_phone_no=$fetch_data_po_data['phone_no'];
    $po_address=$fetch_data_po_data['address'];
    $po_user_ip=$fetch_data_po_data['user_ip'];
    $po_uid= $fetch_data_po_data['uid'];
    $po_id=$fetch_data_po_data['id'];
      if(isset($_POST['submit_btn'])){
        $place_name = $_POST['place_name'];
        $place_contact_no = $_POST['place_contact_no'];
        $po_city=$_POST['city'];
        $image1=$_FILES['image1']['name'];
        $image2=$_FILES['image2']['name'];
        $image3=$_FILES['image3']['name'];
        $po_certificate=$_FILES['po_certificate']['name'];
        //accessing image temp name
        $temp_image1=$_FILES['image1']['tmp_name'];
        $temp_image2=$_FILES['image2']['tmp_name'];
        $temp_image3=$_FILES['image3']['tmp_name'];
        $temp_image4=$_FILES['po_certificate']['tmp_name'];
        $city = $_POST['city'];
        move_uploaded_file($temp_image1,"./tempfolder/$image1");
        move_uploaded_file($temp_image2,"./tempfolder/$image2");
        move_uploaded_file($temp_image3,"./tempfolder/$image3");
        move_uploaded_file($temp_image4,"./tempfolder/$po_certificate");
        //update 
        $update_query_po_update="UPDATE `po_register` SET `id`='$po_id',`username`='$po_username',`password`='$po_password',`email`='$po_email',`phone_no`='$po_phone_no',`address`='$po_address',`user_ip`='$po_user_ip',`img1`='$image1',`img2`='$image2',`img3`='$image3',`uid`='$po_uid',`place_name`='$place_name',`place_city`='$po_city',`place_phone_no`='$place_contact_no',`p_approval_img`='$po_certificate' WHERE uid='$po_uid'";
        if($result_query_po_update=mysqli_query($con,$update_query_po_update)){
          echo "<script>alert('Login Succesfull')</script>";
          header("Location:home.php");
        }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\po_signup_next.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="title">Place-Details</div>
    <div class="content">
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="user-details">
            <div class="input-box">
                <span class="details">place-name</span>
                <input type="text" name="place_name" placeholder="Enter your place name" required>
            </div>
            <div class="input-box">
                <span class="details">place contact-no</span>
                <input type="text" name="place_contact_no" placeholder="Enter your place contact-no" required>
          </div>
          <div class="input-box">
                <span class="details">place image-1</span>
                <input type="file" name="image1" id="image1" placeholder="Enter your place image" required>
          </div>
          <div class="input-box">
                <span class="details">place image-2</span>
                <input type="file" name="image2" placeholder="Enter your place image" required>
          </div>
          <div class="input-box">
                <span class="details">place image-3</span>
                <input type="file" name="image3" placeholder="Enter your place image" required>
          </div>
          <div class="input-box">
                <span class="details">place certificate</span>
                <input type="file" name="po_certificate" placeholder="Enter your place certificate" required>
          </div>
          <div class="input-box">
              <span class="details">city(only gujarat)</span>
              <select id="city" name="city" class="form-select">
    <option value="">Select City</option>
    <option value="Abrama">Abrama</option>
    <option value="Adalaj">Adalaj</option>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Ahwa">Ahwa</option>
    <option value="Amod">Amod</option>
    <option value="Amreli">Amreli</option>
    <option value="Amroli">Amroli</option>
    <option value="Anand">Anand</option>
    <option value="Anjar">Anjar</option>
    <option value="Ankleshwar">Ankleshwar</option>
    <option value="Babra">Babra</option>
    <option value="Bagasara">Bagasara</option>
    <option value="Bagasra">Bagasra</option>
    <option value="Banas Kantha">Banas Kantha</option>
    <option value="Bantva">Bantva</option>
    <option value="Bardoli">Bardoli</option>
    <option value="Bedi">Bedi</option>
    <option value="Bhachau">Bhachau</option>
    <option value="Bhanvad">Bhanvad</option>
    <option value="Bharuch">Bharuch</option>
    <option value="Bhavnagar">Bhavnagar</option>
    <option value="Bhayavadar">Bhayavadar</option>
    <option value="Bhuj">Bhuj</option>
    <option value="Bilimora">Bilimora</option>
    <option value="Bilkha">Bilkha</option>
    <option value="Borsad">Borsad</option>
    <option value="Botad">Botad</option>
    <option value="Chaklasi">Chaklasi</option>
    <option value="Chalala">Chalala</option>
    <option value="Chanasma">Chanasma</option>
    <option value="Chhala">Chhala</option>
    <option value="Chhota Udepur">Chhota Udepur</option>
    <option value="Chikhli">Chikhli</option>
    <option value="Chotila">Chotila</option>
    <option value="Dabhoi">Dabhoi</option>
    <option value="Dahegam">Dahegam</option>
    <option value="Dahod">Dahod</option>
    <option value="Dakor">Dakor</option>
    <option value="Damnagar">Damnagar</option>
    <option value="Dangs (India)">Dangs (India)</option>
    <option value="Dayapar">Dayapar</option>
    <option value="Delvada">Delvada</option>
    <option value="Delwada">Delwada</option>
    <option value="Devbhumi Dwarka">Devbhumi Dwarka</option>
    <option value="Devgadh Bariya">Devgadh Bariya</option>
    <option value="Dhandhuka">Dhandhuka</option>
    <option value="Dhanera">Dhanera</option>
    <option value="Dharampur">Dharampur</option>
    <option value="Dhari">Dhari</option>
    <option value="Dhola">Dhola</option>
    <option value="Dholka">Dholka</option>
    <option value="Dhoraji">Dhoraji</option>
    <option value="Dhrangadhra">Dhrangadhra</option>
    <option value="Dhrol">Dhrol</option>
    <option value="Dhuwaran">Dhuwaran</option>
    <option value="Disa">Disa</option>
    <option value="Dohad">Dohad</option>
    <option value="Dungarpur">Dungarpur</option>
    <option value="Dwarka">Dwarka</option>
    <option value="Gadhada">Gadhada</option>
    <option value="Gandevi">Gandevi</option>
    <option value="Gandhidham">Gandhidham</option>
    <option value="Gandhinagar">Gandhinagar</option>
    <option value="Gariadhar">Gariadhar</option>
    <option value="Ghogha">Ghogha</option>
    <option value="Gir Somnath">Gir Somnath</option>
    <option value="Godhra">Godhra</option>
    <option value="Gondal">Gondal</option>
    <option value="Halol">Halol</option>
    <option value="Halvad">Halvad</option>
    <option value="Hansot">Hansot</option>
    <option value="Harij">Harij</option>
    <option value="Himatnagar">Himatnagar</option>
    <option value="Jalalpore">Jalalpore</option>
    <option value="Jalalpur">Jalalpur</option>
    <option value="Jambusar">Jambusar</option>
    <option value="Jamnagar">Jamnagar</option>
    <option value="Jasdan">Jasdan</option>
    <option value="Jetalsar">Jetalsar</option>
    <option value="Jetpur">Jetpur</option>
    <option value="Jhulasan">Jhulasan</option>
    <option value="Jodhpur">Jodhpur</option>
    <option value="Jodia">Jodia</option>
    <option value="Jodiya Bandar">Jodiya Bandar</option>
    <option value="Junagadh">Junagadh</option>
    <option value="Kachchh">Kachchh</option>
    <option value="Kadi">Kadi</option>
    <option value="Kadod">Kadod</option>
    <option value="Kalavad">Kalavad</option>
    <option value="Kalol">Kalol</option>
    <option value="Kandla">Kandla</option>
    <option value="Kanodar">Kanodar</option>
    <option value="Kapadvanj">Kapadvanj</option>
    <option value="Karamsad">Karamsad</option>
    <option value="Kathor">Kathor</option>
    <option value="Katpur">Katpur</option>
    <option value="Kavant">Kavant</option>
    <option value="Kawant">Kawant</option>
    <option value="Keshod">Keshod</option>
    <option value="Khambhalia">Khambhalia</option>
    <option value="Khambhat">Khambhat</option>
    <option value="Kheda">Kheda</option>
    <option value="Khedbrahma">Khedbrahma</option>
    <option value="Kheralu">Kheralu</option>
    <option value="Kodinar">Kodinar</option>
    <option value="Kosamba">Kosamba</option>
    <option value="Kundla">Kundla</option>
    <option value="Kutch district">Kutch district</option>
    <option value="Kutiyana">Kutiyana</option>
    <option value="Lakhtar">Lakhtar</option>
    <option value="Lalpur">Lalpur</option>
    <option value="Lathi">Lathi</option>
    <option value="Limbdi">Limbdi</option>
    <option value="Lunavada">Lunavada</option>
    <option value="Mahemdavad">Mahemdavad</option>
    <option value="Mahesana">Mahesana</option>
    <option value="Mahudha">Mahudha</option>
    <option value="Malpur">Malpur</option>
    <option value="Manavadar">Manavadar</option>
    <option value="Mandal">Mandal</option>
    <option value="Mandvi">Mandvi</option>
    <option value="Mandvi (Surat)">Mandvi (Surat)</option>
    <option value="Mangrol">Mangrol</option>
    <option value="Mansa">Mansa</option>
    <option value="Meghraj">Meghraj</option>
    <option value="Mehsana">Mehsana</option>
    <option value="Mendarda">Mendarda</option>
    <option value="Modasa">Modasa</option>
    <option value="Morbi">Morbi</option>
    <option value="Morva (Hadaf)">Morva (Hadaf)</option>
    <option value="Morwa">Morwa</option>
    <option value="Mundra">Mundra</option>
    <option value="Nadiad">Nadiad</option>
    <option value="Naliya">Naliya</option>
    <option value="Narmada">Narmada</option>
    <option value="Naroda">Naroda</option>
    <option value="Navsari">Navsari</option>
    <option value="Okha">Okha</option>
    <option value="Olpad">Olpad</option>
    <option value="Paddhari">Paddhari</option>
    <option value="Padra">Padra</option>
    <option value="Palanpur">Palanpur</option>
    <option value="Palitana">Palitana</option>
    <option value="Paliyad">Paliyad</option>
    <option value="Panch Mahals">Panch Mahals</option>
    <option value="Panchmahal district">Panchmahal district</option>
    <option value="Pardi">Pardi</option>
    <option value="Parnera">Parnera</option>
    <option value="Patan">Patan</option>
    <option value="Pavi Jetpur">Pavi Jetpur</option>
    <option value="Petlad">Petlad</option>
    <option value="Porbandar">Porbandar</option>
    <option value="Radhanpur">Radhanpur</option>
    <option value="Rajkot">Rajkot</option>
    <option value="Rajpipla">Rajpipla</option>
    <option value="Rajula">Rajula</option>
    <option value="Ranavav">Ranavav</option>
    <option value="Rapar">Rapar</option>
    <option value="Roha">Roha</option>
    <option value="Sabar Kantha">Sabar Kantha</option>
    <option value="Sachin">Sachin</option>
    <option value="Salaya">Salaya</option>
    <option value="Sanand">Sanand</option>
    <option value="Sankheda">Sankheda</option>
    <option value="Sarkhej">Sarkhej</option>
    <option value="Savarkundla">Savarkundla</option>
    <option value="Sayla">Sayla</option>
    <option value="Shahpur">Shahpur</option>
    <option value="Shivrajpur">Shivrajpur</option>
    <option value="Siddhpur">Siddhpur</option>
    <option value="Sihor">Sihor</option>
    <option value="Sikka">Sikka</option>
    <option value="Sinor">Sinor</option>
    <option value="Sojitra">Sojitra</option>
    <option value="Songadh">Songadh</option>
    <option value="Surat">Surat</option>
    <option value="Surendranagar">Surendranagar</option>
    <option value="Talaja">Talaja</option>
    <option value="Tankara">Tankara</option>
    <option value="Tapi">Tapi</option>
    <option value="Than">Than</option>
    <option value="Thangadh">Thangadh</option>
    <option value="Tharad">Tharad</option>
    <option value="Thasra">Thasra</option>
    <option value="The Dangs">The Dangs</option>
    <option value="Umrala">Umrala</option>
    <option value="Umreth">Umreth</option>
    <option value="Un">Un</option>
    <option value="Una">Una</option>
    <option value="Unjha">Unjha</option>
    <option value="Upleta">Upleta</option>
    <option value="Utran">Utran</option>
    <option value="Vadnagar">Vadnagar</option>
    <option value="Vadodara">Vadodara</option>
    <option value="Vaghodia">Vaghodia</option>
    <option value="Vallabh Vidyanagar">Vallabh Vidyanagar</option>
    <option value="Vallabhipur">Vallabhipur</option>
    <option value="Valsad">Valsad</option>
    <option value="Vansda">Vansda</option>
    <option value="Vapi">Vapi</option>
    <option value="Vartej">Vartej</option>
    <option value="Vasa">Vasa</option>
    <option value="Vaso">Vaso</option>
    <option value="Vejalpur">Vejalpur</option>
    <option value="Veraval">Veraval</option>
    <option value="Vijapur">Vijapur</option>
    <option value="Vinchhiya">Vinchhiya</option>
    <option value="Vinchia">Vinchia</option>
    <option value="Virpur">Virpur</option>
    <option value="Visavadar">Visavadar</option>
    <option value="Visnagar">Visnagar</option>
    <option value="Vyara">Vyara</option>
    <option value="Wadhai">Wadhai</option>
    <option value="Wadhwan">Wadhwan</option>
    <option value="Waghai">Waghai</option>
    <option value="Wankaner">Wankaner</option>
</select>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit_btn" value="submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>