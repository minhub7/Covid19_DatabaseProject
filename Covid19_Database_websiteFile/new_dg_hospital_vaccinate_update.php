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

        .hospital_info-table td:nth-child(11){
            text-align: center;
            font-weight: 800;
            background-color:#04cf5c;

        } 
         .hospital_info-table .hospital_info-th td{
            width:  160px;
            height: 100px;
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
        
        .input_btn {
            background-color:#04cf5c;
            width: 150px;
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
                    <form action="new_dg_hospital_mainpage.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">대구병원</button>
                    </form>
                </td>
                <td>
                    <form action="new_dg_hospital_vaccinate_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn" style="background-color: #029341">백신접종리스트</button>
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
        $username=$_POST['uid'];
        $Cssn=$_POST['Cssn'];
        $con=mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
        $sql="SELECT * FROM vaccines, vaccinate WHERE Owned = '대구병원' AND (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) AND Cssn='$Cssn'";

        $ret=mysqli_query($con,$sql);
        if($ret){
            $count=mysqli_num_rows($ret);
            if($count==0){
                echo $_GET['Cssn']."주민번호의 접종자가 없음!"."<br>";
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
        $first_Vno=$row["1st_Vno"];
        $first_date=$row["1st_date"];
        $first_hosp=$row["1st_hosp"];
        $second_Vno=$row["2nd_Vno"];
        $second_date=$row["2nd_date"];
        $second_hosp=$row["2nd_hosp"];
        $MfgCo=$row["MfgCo"];
    ?>

    <HTML>
    <HEAD>
    <META http-equiv="content-type" content="text/html; charset=utf-8">
    </HEAD>
    <BODY>
        <h1>접종 정보 수정</h1>
        <FORM METHOD="post" ACTION="new_dg_hospital_vaccinate_update_result.php">
            주민번호:<INPUT TYPE="text" NAME="Cssn" VALUE=<?php echo $Cssn ?>><br> 
            1차백신생산번호:<INPUT TYPE="text" NAME="1st_Vno" VALUE=<?php echo $first_Vno ?>><br> 
           1차접종일:<INPUT TYPE="date" NAME="1st_date" VALUE=<?php echo $first_date ?>><br>
            <!-- 1차접종병원:<INPUT TYPE="text" NAME="1st_hosp" VALUE=<?php echo $first_hosp ?>><br> -->
            <td class="first"><span>1차접종병원:</span></td>
                        <td>
                            <select name="1st_hosp" required>
                                <option value="경대병원" >경대병원</option>
                                <option value="영대병원" >영대병원</option>
                                <option value="대구병원" >대구병원</option>
                            </select>
                        </td><br>
            2차백신생산번호:<INPUT TYPE="text" NAME="2nd_Vno" VALUE=<?php echo $second_Vno ?>><br>
            2차접종일:<INPUT TYPE="date" NAME="2nd_date" VALUE=<?php echo $second_date ?>><br>
            <!-- 2차접종병원:<INPUT TYPE="text" NAME="2nd_hosp" VALUE=<?php echo $second_hosp ?>><br> -->
            <td class="first"><span>2차접종병원:</span></td>
                        <td>
                            <select name="2nd_hosp" required>
                                <option value="경대병원" >경대병원</option>
                                <option value="영대병원" >영대병원</option>
                                <option value="대구병원" >대구병원</option>
                            </select>
                        </td><br>
            <!-- 백신제조사:<INPUT TYPE="text" NAME="MfgCo" VALUE=<?php echo $MfgCo ?>><br> -->
            <td class="first"><span>제조사:</span></td>
                        <td>
                            <select name="MfgCo" required>
                                <option value="Moderna" >Moderna</option>
                                <option value="Pfizer" >Pfizer</option>
                            </select>
                        </td><br>
            <BR><BR>
            <input type="hidden" name="uid" value="<?=$username?>"/>
            <INPUT TYPE="submit" VALUE="백신접종 정보 수정" class = 'input_btn'>
    </FORM>
    </div>
    <body>
    </html>