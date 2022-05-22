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

        .input_btn {
            background-color:red;
            width: 145px;
            height: 38px;
            border-radius: 3px;
            color:white;
            font-size: 16px;
            font-weight: 700;
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
 
<div align = 'center'>
<?php
        $con=mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
        $sql="SELECT * FROM newcovid19db.patients,newcovid19db.citizens,newcovid19db.patients_details where Hospname='경대병원'AND patients.Cssn=citizens.ssn AND patients_details.Hcode=patients.Hcode AND Cssn='".$_POST['Cssn']."'";

        $ret=mysqli_query($con,$sql);
        if($ret){
            $count=mysqli_num_rows($ret);
            if($count==0){
                echo $_GET['Cssn']."주민번호의 환자가 없음!"."<br>";
                echo "<br> <a href='new_knu_hospital_mainpage.php'> <--초기화면</a> ";
                exit();
            }
        }
        else{
            echo "데이터 조회 실패!"."<br>";
            echo "실패원인: ".mysqli_error($con);
            echo "<br><a href='new_knu_hospital_mainpage.php'> <--초기화면</a>";
            exit();
        }

        $row=mysqli_fetch_array($ret);
        $Cssn=$row["Cssn"];
        $Hospname=$row["Hospname"];
        $Building=$row["Building"];
        $Hcode=$row["Hcode"];
        $Room=$row["Room"];
        $Hdate=$row["Hdate"];
        $Odate=$row["Odate"];
        $Tel_nok=$row["Tel_nok"];
    ?>

    <HTML>
    <HEAD>
    <META http-equiv="content-type" content="text/html; charset=utf-8">
    </HEAD>
    <BODY>
        <h1>환자 정보 수정</h1>
        <FORM METHOD="post" ACTION="new_knu_hospital_patients_update_result.php">
            <!-- <h3>*주의* 값이 공백이여야 할 경우에는 삭제 후 재생성 하세요</h3> -->
            주민번호:<INPUT TYPE="text" NAME="Cssn" VALUE=<?php echo $Cssn ?>><br> 
            환자코드:<INPUT TYPE="text" NAME="Hcode" VALUE=<?php echo $Hcode ?>><br> 
            건물동:<INPUT TYPE="text" NAME="Building" VALUE=<?php echo $Building ?>><br>
            입원호실:<INPUT TYPE="text" NAME="Room" VALUE=<?php echo $Room ?>><br>
            입원일:<INPUT TYPE="date" NAME="Hdate" VALUE=<?php echo $Hdate ?>><br>
            퇴원일:<INPUT TYPE="date" NAME="Odate" VALUE=<?php echo $Odate ?>><br>
            보호자연락처:<INPUT TYPE="text" NAME="Tel_nok" VALUE=<?php echo $Tel_nok ?>><br>

            <BR><BR>
            <form action="new_knu_hospital_vaccinate_list.php" method="POST">
                <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                <button class="btn">환자정보 수정</button>
            </form>
    </FORM>
    </div>
    <body>
    </html>