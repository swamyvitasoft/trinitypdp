<?php include 'header.php'; ?>
<div class="row">
<div  style="background-image: url('images/noticeboard.jpg'); background-repeat:no-repeat; height:250px; background-position: center; ">
    </div>
</div>
<div class="container-fluid" style="box-shadow:-3px 5px 15px #000;padding-top:40px">
  <ul class="nav nav-tabs navv" role="tablist" style="background-color: #f7f7f7" ;>
    <li class="nav-item" style="color: rgb(0, 0, 255);">
      <a class="nav-link active" data-toggle="tab" href="#home"><b style="font-size:16px;color:rgb(80, 80, 80)">Notifications</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1"><b style="font-size:16px;color:rgb(80, 80, 80)">Time Table</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" href="#menu2"><b style="font-size:16px;color:rgb(80, 80, 80)">Results</b></a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active" style="color:#082b2a;margin-top:-40px">
      <h2 class="text-center" style="font-family:calibri">Examination Notifications </h2><br>
      <table class="table table-responsive">
        <tr style="color:#000000;font-family:calibri;font-size:18px">
          <th>S.No.</th>
          <th class="text-center">Name of the Notifications</th>
          <th class="text-center">Notifications</th>
        </tr>
        <tr style="color:#000000;">
          <th>1.</th>
          <td style="font-family:calibri;font-size:17px;">B.Tech I Year I Sem (R22) Regular/Supply,I-I(R18,R16)Supply,I Year (R15,R13) Supply & I Year II Sem(R22,R18,R16) Supply Examinations.</td>
          <td class="text-center"><a href="files/notifications/de-231220-183253-Notification for BTech_I_I_reg_sup_ I _year_ I_II sup_Jan_2024 (1).doc" target="_new"><button class="btn btn-primary">View</button></a></td>
        </tr>
        <tr style="color:#000000;">
          <th>2.</th>
          <td style="font-family:calibri;font-size:17px"> B.Tech II Year I Sem Regular/Supply & II Year II Sem Supply Examinations FEB-2024</td>
          <td class="text-center"><a href="files/notifications/de-231220-183253-Notification for BTech_I_I_reg_sup_ I _year_ I_II sup_Jan_2024 (1).doc" target="_new"><button class="btn btn-primary">View</button></a></td>
        </tr>
      </table>
    </div>
    <div id="menu1" class="container tab-pane fade" style="color:#082b2a;"></div>
    <div id="menu2" class="container tab-pane fade"></div>
  </div>
</div>
<br><br>
<?php include 'footer.php'; ?>