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

        .list_black{
            text-decoration: none;
            color: black;
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
        .hospital_info-box_list{
            width: 900px;
            margin: 0 auto;
            background-color: white;
        }
        .hospital_info-table{
            text-align: center;
            margin: 0 auto;

        }
         .hospital_info-table .hospital_info-th td{
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
        .edit{
            height: 40px;
            width: 50px;
            color: white;
            background-color:#CEA87D;
            border: none;
        }
        .add-btn{
            height: 40px;
            width: 200px;
            color: white;
            background-color:#CEA87D;
            border: none;
            margin: 0 auto;
            text-align: center;
            margin-left: 360px;
        }


    </style>
  </head>
  <body>
    <div class="main-box">
    <table class="button-box">
            <tr>
                <td>
                    <form action="new_knu_hospital_mainpage.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">경대병원</button>
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
                        <button class="btn" style="background-color: #da2128">환자 리스트</button>
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

<!-- 사용가능 백신 리스트 -->
<div class="hospital_info-box_list">
   <div align="center"class="title">환자 리스트</div>
   <table align="center"class="hospital_info-table">
        <thead class="hospital_info-th">
            <tr>
                <td>순서</td>
                <td>주민번호</td>
                <td>환자코드</td>
                <td>환자이름</td>
                <td>건물동</td>
                <td>호실</td>
                <td>혈액형</td>
                <td>입원일</td>
                <td>퇴원일</td>
                <td>보호자연락처</td>
                <td>수정</td>
            </tr>
         </head>
         <tbody>
             <?php
                $username=$_POST['uid'];
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_confirmedcase_sql="SELECT * FROM newcovid19db.patients,newcovid19db.citizens,newcovid19db.patients_details where Hospname='경대병원'AND patients.Cssn=citizens.ssn AND patients_details.Hcode=patients.Hcode";
                $jb_confirmedcase_result = mysqli_query( $jb_conn, $jb_confirmedcase_sql );
                $num=1;

                while($row_confirmedcase = mysqli_fetch_array($jb_confirmedcase_result)){
                    echo "<TR>";
                    echo "<TD>", "$num", "</TD>";
                    echo "<TD>", $row_confirmedcase['Cssn'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Hcode'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Name'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Building'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Room'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Blood_type'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Hdate'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Odate'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Tel_nok'], "</TD>";
                    echo "<TD>", "
                    <form action='new_knu_hospital_patients_update.php' method='POST'>
                    <input type='hidden' name='Cssn' value='$row_confirmedcase[Cssn]'/>
                    <input type='hidden' name='uid' value='$username'/>
                    <button type='submit' class='edit'>수정</button>
                    </form>
                    </TD>";
                    echo "</TR>";
                    $num++;
                }
            
                mysqli_close($jb_conn);
                ?>
        </tbody>
    </table>
    <form action='new_knu_patients_new.php' method='POST'>
    <input type='hidden' name='uid' value="<?=$_POST['uid']?>"/>
        <button type='submit' class='add-btn'>환자 추가</button>
    </form>
    <div class="empty"></div>
  </body>
</html>