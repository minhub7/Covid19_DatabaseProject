<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>경대병원</title> 
    <td width="1920dp" align='center'>
          <img src="./banner.png" >
        </td>
    <style>
        .citizen{
            border: 1px solid yellow;
        }
        body { 
            background-color:#F8F8F8; 
        }
        a{
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: 700;
            line-height: 40px;
        }
        .btn{
            background-color: #9D9D9D;
            width: 145px;
            height: 38px;
            border-radius: 3px;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 700;
            line-height: 40px;
            cursor: pointer;
        }
        .btn:hover{
            background-color: #da2128;
        }
        .button-box{
            width: 903px;
            margin-top: 13px;
            margin-bottom: -20px;
        }
        .main-box{
            background-color: none;
            width: 900px;
            margin: 0 auto;
        }
        .title{
            color: #717171;
            font-weight: 800;
            font-size: 19px;
            /*padding-left: 100px;*/
            padding-top: 30px;
            padding-bottom: 10px;
        }
        .hospital_info-box{
            width: 900px;
            height:250px;
            margin: 0 auto;
            background-color: white;
        }
        .hospital_info-box_list{
            width: 900px;
            height:800px;
            margin: 0 auto;
            background-color: white;
        }
        .hospital_info-table{
            text-align: center;
            padding-left: 100px;
            padding-right: 100px;
            font-weight: 800;

        }

         .hospital_info-table .hospital_info-th td{
            width:  160px;
            height: 40px;
            color: white;
            background-color:#b48b59;
        } 
        .empty{
            width: 900px;
            height: 20px;
            margin: 0 auto;
        }

        .num{
            font-size: 25px;
            float: left;
            margin-left: 65px;
            font-weight: 800;
        }
        .danwi{
            font-size: 15px;
            float: left;
            margin-top: 11px;
            color: grey;
        }
        table{
            margin: 0 auto;
            padding-bottom: 30px;
            text-align: center;
        }
        .tester-table td{
            border: 1px solid black;
        }
        .confirmed-table td{
            border: 1px solid black;
        }
        .citizen-table{
            text-align: center;
            padding-left: 67px;
            padding-right: 67px;
        }
        .citizen-table td{
            border: 1px solid black;
        }



    </style>
  </head>

  <body>
  <?php
            $username=$_POST['uid'];
            $conn= mysqli_connect('localhost', 'root', '1234', 'newcovid19db');
            $sql="SELECT Dept FROM manager where MgrID='$username' ";
            $result=mysqli_fetch_array(mysqli_query($conn,$sql));
            if ($result['Dept'] == "government"||$result['Dept'] == "KNUhosp"){

            }
            else{
                echo "<script>alert('권한이 없습니다');</script>";
                echo "<form action='main.php' method='POST'>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit' id='tmpBtn' onclidk='tmpConsole()'></button>
                        </form>";
                echo "<script type='text/javascript'>
                            document.getElementById('tmpBtn').click();
                        </script>";
            }
    ?>
  <div class="main-box">
        <table class="button-box">
            <tr>
                <td>
                    <form action="new_knu_hospital_mainpage.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn"  style="background-color: #da2128">경대병원</button>
                    </form>
                </td>
                <td>
                    <form action="new_knu_hospital_vaccinate_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">백신접종리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_knu_hospital_vac_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">백신 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_knu_hospital_patients_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">환자 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_knu_hospital_testers_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">검진자 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="login.html" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">로그인 페이지</button>
                    </form>
                </td>
            
            </tr>
        </table>
    </div>



  

<!-- 확진사망격리해제 현황 테이블 -->
<div class="hospital_info-box">
    <div align="center"class="title">경대병원 시민 확진/사망/격리해제 현황</div>
    <table align="center"class="hospital_info-table">
        <thead class="hospital_info-th">
            <tr>
              <td>확진자 수</td>
                <td>사망자 수</td>
                <td>격리해제 수</td>
            </tr>
        </head>
        <tbody>
        <?php
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_confirmed_sql = "SELECT count(patients.Cssn) FROM newcovid19db.confirmedcase, newcovid19db.patients WHERE patients.Cssn=confirmedcase.Tssn AND patients.Hospname='경대병원';"; 
                $jb_confirmed_result = mysqli_query( $jb_conn, $jb_confirmed_sql );

                $jb_death_sql = "SELECT count(dead_patients.Hcode) FROM newcovid19db.dead_patients,newcovid19db.patients WHERE dead_patients.Hcode=patients.Hcode AND patients.Hospname='경대병원'";         
                 $jb_death_result = mysqli_query( $jb_conn, $jb_death_sql );

                 $jb_leave_sql = "SELECT count(patients.Cssn) FROM newcovid19db.patients WHERE oDate IS NOT NULL AND patients.Hospname='경대병원'";
                 $jb_leave_result = mysqli_query( $jb_conn, $jb_leave_sql );
                
    
                while($row_confirmed = mysqli_fetch_array($jb_confirmed_result)){
                  while($row_death = mysqli_fetch_array($jb_death_result)){
                     while($row_leave = mysqli_fetch_array($jb_leave_result)){
                        echo "<TR>";
                        echo "<TD><div class=num>", $row_confirmed['count(patients.Cssn)'], "</div><div class=danwi>명</div></TD>";
                        echo "<TD><div class=num>", $row_death['count(dead_patients.Hcode)'], "</div><div class=danwi>명</div></TD>";
                        echo "<TD><div class=num>", $row_leave['count(patients.Cssn)'], "</div><div class=danwi>명</div></TD>";
                            echo "</TR>";
                        }
                    }      
                }
                mysqli_close($jb_conn); 
            ?>
        </tbody>
      </table>
   </div>





<!-- 백신 접종 테이블구현 -->
<div class="hospital_info-box">
    <div align="center"class="title">경대병원 백신 1/2차 접종 현황</div>
    <table align="center"class="hospital_info-table">
        <thead class="hospital_info-th">
                <tr>
                <td>접종 백신명</td>
                    <td>1차 접종 수</td>
                    <td>2차 접종 수</td>
                </tr>
        </head>
    <tbody>
        <?php
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_pfizer1_sql = "SELECT count(vaccinate.Cssn) FROM newcovid19db.vaccinate,newcovid19db.vaccines WHERE vaccinate.1st_hosp='경대병원' AND vaccinate.1st_Vno=vaccines.serialNo AND MfgCo='pfizer'";
                $jb_pfizer1_result = mysqli_query( $jb_conn, $jb_pfizer1_sql );
                $jb_pfizer2_sql = "SELECT count(vaccinate.Cssn) FROM newcovid19db.vaccinate,newcovid19db.vaccines WHERE vaccinate.2nd_hosp='경대병원' AND vaccinate.2nd_Vno=vaccines.serialNo AND MfgCo='pfizer'";
                $jb_pfizer2_result = mysqli_query( $jb_conn, $jb_pfizer2_sql );

                while($row_pfizer1 = mysqli_fetch_array($jb_pfizer1_result)){
                  while($row_pfizer2 = mysqli_fetch_array($jb_pfizer2_result)){
                  echo "<TR>";
                  echo "<TD>", "화이자 백신", "</TD>";
                  echo "<TD><div class=num>", $row_pfizer1['count(vaccinate.Cssn)'],"</div><div class=danwi>명</div></TD>";
                  echo "<TD><div class=num>", $row_pfizer2['count(vaccinate.Cssn)'], "</div><div class=danwi>명</div></TD>";
                  echo "</TR>";
                  }
              }

              $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
              $jb_moderna1_sql = "SELECT count(vaccinate.Cssn) FROM newcovid19db.vaccinate,newcovid19db.vaccines WHERE vaccinate.1st_hosp='경대병원' AND vaccinate.1st_Vno=vaccines.serialNo AND MfgCo='moderna'";
              $jb_moderna1_result = mysqli_query( $jb_conn, $jb_moderna1_sql );
              $jb_moderna2_sql = "SELECT count(vaccinate.Cssn) FROM newcovid19db.vaccinate,newcovid19db.vaccines WHERE vaccinate.2nd_hosp='경대병원' AND vaccinate.2nd_Vno=vaccines.serialNo AND MfgCo='moderna'";
              $jb_moderna2_result = mysqli_query( $jb_conn, $jb_moderna2_sql );

              while($row_moderna1 = mysqli_fetch_array($jb_moderna1_result)){
                while($row_moderna2 = mysqli_fetch_array($jb_moderna2_result)){
                echo "<TR>";
                echo "<TD>", "모더나 백신", "</TD>";
                echo "<TD><div class=num>", $row_moderna1['count(vaccinate.Cssn)'], "</div><div class=danwi>명</div></TD>";
                echo "<TD><div class=num>", $row_moderna2['count(vaccinate.Cssn)'], "</div><div class=danwi>명</div></TD>";
                echo "</TR>";
                    }
                }
    mysqli_close($jb_conn); 
            ?>
      </tbody>
      
    </table>
    </div>





   <!-- 백신보유현황 -->
   <div class="hospital_info-box">
   <div align="center"class="title">백신보유현황</div>
   <table align="center"class="hospital_info-table">
        <thead class="hospital_info-th">
            <tr>
                <td>백신명</td>
                <td>백신보유</td>
                
            </tr>
        </head>
        <tbody>
        <?php
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_moderna_sql_all = "SELECT count(MfgCo) FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) WHERE Owned = '경대병원' AND MfgCo = 'moderna' AND MfgDate <= CURDATE() AND Exp >= CURDATE() AND (1st_date IS NULL AND 2nd_date IS NULL)";
                $jb_moderna_result = mysqli_query( $jb_conn, $jb_moderna_sql_all );

                while($row_moderna = mysqli_fetch_array($jb_moderna_result))
                { 
                        echo "<TR>";
                        echo "<TD>", "모더나 백신", "</TD>";
                        echo "<TD><div class=num>", $row_moderna['count(MfgCo)'], "</div><div class=danwi>개</div></TD>";
                        echo "</TR>";
                }

                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_pfizer_sql = "SELECT count(MfgCo) FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) WHERE Owned = '경대병원' AND MfgCo = 'pfizer' AND MfgDate <= CURDATE() AND Exp >= CURDATE() AND (1st_date IS NULL AND 2nd_date IS NULL)";
                $jb_pfizer_result = mysqli_query( $jb_conn, $jb_pfizer_sql );
              
                while($row_pfizer = mysqli_fetch_array($jb_pfizer_result)){ 
                  echo "<TR>";
                  echo "<TD>", "화이자 백신", "</TD>";
                  echo "<TD><div class=num>", $row_pfizer['count(MfgCo)'], "</div><div class=danwi>개</div></TD>";
                  echo "</TR>";
                }

                mysqli_close($jb_conn); 
            ?>
      </tbody>

    </table>
    </div>

    
  </body>
</html>