<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>대구병원</title> 
    <td width="1920dp" align='center'>
          <img src="./banner_dg.png" >
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
            background-color: #04cf5c;
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

        .hospital_info-table td:nth-child(7){
            text-align: center;
            font-weight: 800;
            background-color:#04cf5c;

        } 
         .hospital_info-table .hospital_info-th td{
            width:  160px;
            height: 40px;
            color: white;
            background-color:#04cf5c;
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
  <div class="main-box">
  <table class="button-box">
            <tr>
                <td>
                    <form action="new_dg_hospital_mainpage.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">대구병원</button>
                    </form>
                </td>
                <td>
                    <form action="new_dg_hospital_vaccinate_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">백신접종리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_dg_hospital_vac_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">백신 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_dg_hospital_patients_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn" >환자 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_dg_hospital_testers_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn" style="background-color: #029341">검진자 리스트</button>
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
    $username=$_POST['uid'];
    $Cssn=$_POST['Cssn'];
        $con=mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
        $sql="SELECT * FROM newcovid19db.testers, newcovid19db.citizens WHERE Testhospital= '대구병원' AND  testers.Cssn=citizens.ssn AND Cssn='$Cssn'";

        $ret=mysqli_query($con,$sql);
        if($ret){
            $count=mysqli_num_rows($ret);
            if($count==0){
                echo $Cssn."주민번호의 검진자가 없음!"."<br>";
                echo "<br> <a href='new_dg_hospital_mainpage.php'> <--초기화면</a> ";
                exit();
            }
        }
        else{
            echo "데이터 조회 실패!"."<br>";
            echo "실패원인: ".mysqli_error($con);
            echo "<br><a href='new_dg_hospital_mainpage.php'> <--초기화면</a>";
            exit();
        }

        $row=mysqli_fetch_array($ret);
        $Cssn=$row["Cssn"];
        $Testdate=$row["Testdate"];
        $Testnum=$row["Testnum"];
        $Testhospital=$row["Testhospital"];
        
    ?>

<HTML>
    <HEAD>
    <META http-equiv="content-type" content="text/html; charset=utf-8">
    </HEAD>
    <BODY>
        <h1>검진자 정보 수정</h1>
        <FORM METHOD="post" ACTION="new_dg_hospital_testers_update_result.php">
            
            주민번호:<INPUT TYPE="text" NAME="Cssn" VALUE=<?php echo $Cssn ?>><br> 
            검진일:<INPUT TYPE="date" NAME="Testdate" VALUE=<?php echo $Testdate ?>><br>
            검진횟수:<INPUT TYPE="text" NAME="Testnum" VALUE=<?php echo $Testnum ?>><br>
            <BR><BR>
            <input type="hidden" name="uid" value="<?=$username?>"/>
            <INPUT TYPE="submit" VALUE="검진자 정보 수정" class = 'input_btn'>
    </FORM>
    </div>
    </body>
    </html>

