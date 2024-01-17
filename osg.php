<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <style>
        .class{
            display: block;
            justify-content: center;
            border: 2px green;
        }
        table {
     border-collapse: separate;
     text-indent: initial;
     border-spacing:2px;
     margin-top: 50px;
     align-items: center;
    
       }
       .same{
    padding-left: 30%;
          }
          .select
          {
            width: 170px;
          }
          .button{
            margin-top: 50px;
            margin-left: 100px;
          }
          /* .row{
            padding-left: 10%;
          } */
    </style>
</head>
 <body>
    <div class="class">
    
    

  <center>
    <blink><h1><b>Online Student Grievance Form</b></h1></blink>
  <table cellspacing="10px">
    
  <form>
    <tr>
    <td class="row"> Hall Ticket Number: </td>
    <td class="same"><input type="text" required></td></tr>
    <tr>
   <td  class="row"> Branch:</td>
   <td class="same"><select name="" id="" class="select">
        <option value="">Select</option>
        <option value="">CSE</option>
        <option value="">EEE</option>
        <option value="">ECE</option>
        <option value="">AIML</option>
        <option value="">MBA</option>
    </select></td></tr>
   <tr> <td  class="row">Year:</td>
    <td class="same"><select name="" id="" class="select">
        <option value="">Select</option>
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
    </select></td></tr>
   <tr><td  class="row"> Student Name:</td>
    <td class="same"><input type="text" required></td></tr>
   <tr><td  class="row"> Father's Name:</td>
    <td class="same"> <input type="text" required></td></tr>
    <tr><td  class="row">Gender :</td>
   <td class="same"> Male <input type="radio" required>
        Female <input type="radio" required></td></tr>
    <tr><td  class="row"> Date Of Birth:</td>
        <td class="same"> <input type="date" required></td></tr>
    <tr><td  class="row"> Email:</td>
        <td class="same"> <input type="email" required></td></tr>
    <tr><td  class="row"> Mobile No:</td>
        <td class="same"><input type="tel" required></td></tr>
    <tr><td  class="row">Full Address:</td><td  class="same"><textarea name="" id="" cols="20" rows="5"></textarea></td></tr>
     <tr><td  class="row"> Grievance Type: </td>
        <td class="same">
        <select name="" id="">
        <option value="">Select</option>
        <option value="">Non-Conduct Of Classwork</option>
        <option value="">Fake Certificates</option>
        <option value="">Collecting Extra Fees Against Govt./University Names</option>
        <option value="">Demanding Tution Fees if discontinued in the middle</option>
        <option value="">Non availability faculty members</option>
        <option value="">Collecting amount under any other head not duly prescribed by govt./University</option>
        <option value="">Admissions related issue</option>
        <option value="">Gender Discrimination/Harrasment/Abbusing/Misbehaviour</option>
        <option value="">Lack of facilities in college</option>
        <option value="">With holding of certificates</option>
        <option value="">Others</option>
     </select></td></tr>
    <tr> <td  class="row">Grievance Date:</td><td class="same"> <input type="date" required></td></tr>
   <tr><td  class="row">Grievance Supporting Document:</td><td class="same"> <input type="file" required></td></tr>
   <tr><td  class="row"> Grievance Description:</td><td class="same"><textarea name="" id="" cols="20" rows="5"></textarea></td></tr>
    <tr><td></td>
   <td> <button class="button">Submit</button></td></tr>


</form>
  </table></center>
    </div>
  
</body>
</html>