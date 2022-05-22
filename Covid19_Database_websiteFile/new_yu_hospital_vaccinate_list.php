<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>영대병원</title> 
    <td width="1920dp" align='center'>
          <img src="./banner_yu.png" >
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
            color:white;
            font-size: 16px;
            font-weight: 700;
            line-height: 40px;
        }

        b{
            text-decoration: none;
            color:black;
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
            background-color: #0272BF;
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
            margin: 0 auto;
            background-color: white;
        }
        .hospital_info-table{
            text-align: center;
            margin: 0 auto;
            border-collapse: collapse;
        }
        .hospital_info-table  td{
            border-left: 3px solid #F7FAFE;
            border-bottom: 3px solid #F7FAFE;
        } 
         .hospital_info-table .hospital_info-th td{
            color: white;
            background-color:#0272BF;
        } 
        .hospital_info-table td:nth-child(1){width: 40px;} 
        .hospital_info-table td:nth-child(2){width: 140px;} 
        .hospital_info-table td:nth-child(3){width: 70px;} 
        .hospital_info-table td:nth-child(4){width: 70px;} 
        .hospital_info-table td:nth-child(7){width: 70px;} 
        .hospital_info-table td:nth-child(8){width: 70px;} 
        .edit{
            height: 40px;
            width: 40px;
            color: white;
            background-color:#4c8ac0;
            border: none;
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
                    <form action="new_yu_hospital_mainpage.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">영대병원</button>
                    </form>
                </td>
                <td>
                    <form action="new_yu_hospital_vaccinate_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn"  style="background-color: #0272BF">백신접종리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_yu_hospital_vac_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">백신 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_yu_hospital_patients_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">환자 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_yu_hospital_testers_list.php" method="POST">
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



    <div class="hospital_info-box_list">
   <div align="center"class="title">백신 1차/2차 리스트 </div>
   <div style="margin: 0 auto; width: 870px; max-height: 500px; overflow-y: scroll;">
   <table align="center"class="hospital_info-table">
        <thead class="hospital_info-th">
            <tr>
                <TD>순서</TD>
                <TD>주민번호</TD>
                <TD>1차백신생산번호</TD>
                <TD>1차백신제조사</TD>
                <TD>1차접종일</TD>
                <TD>1차병원</TD>
                <TD>2차백신생산번호</TD>
                <TD>2차백신제조사</TD>
                <TD>2차접종일</TD>
                <TD>2차병원</TD>
                <TD>수정</TD> 
            </tr>
         </head>
         <tbody>
         <?php
            $username=$_POST['uid'];
            $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
            $jb_1st_sql="SELECT * FROM vaccines, vaccinate WHERE Owned = '영대병원' AND (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno)";                

            $jb_possible_result = mysqli_query( $jb_conn, $jb_1st_sql );                
            $num=1;
            
            while($row_possible = mysqli_fetch_array($jb_possible_result)){
                echo "<TR>";
                echo "<TD>", "$num", "</TD>";
                echo "<TD>", $row_possible['Cssn'], "</TD>";
                echo "<TD>", $row_possible['1st_Vno'], "</TD>";
                if($row_possible['1st_Vno'] == $row_possible['SerialNo']){
                    echo "<TD>", $row_possible['MfgCo'], "</TD>";
                }
                else{
                    $a = $row_possible['1st_Vno'];
                    $sql = "SELECT MfgCo FROM vaccines WHERE SerialNo = '$a'";
                    $sql_result = mysqli_query( $jb_conn, $sql );
                    $row = mysqli_fetch_array( $sql_result );
                    echo "<TD>", $row[0], "</TD>";
                }
                echo "<TD>", $row_possible['1st_date'], "</TD>";
                echo "<TD>", $row_possible['1st_hosp'], "</TD>";                   
                echo "<TD>", $row_possible['2nd_Vno'], "</TD>";
                if($row_possible['2nd_Vno'] == $row_possible['SerialNo']){
                    echo "<TD>", $row_possible['MfgCo'], "</TD>";
                }
                else if($row_possible['2nd_Vno'] == NULL){
                    echo "<TD>", NULL, "</TD>";
                }
                else{
                    $a = $row_possible['2nd_Vno'];
                    $sql = "SELECT MfgCo FROM vaccines WHERE SerialNo = '$a'";
                    $sql_result = mysqli_query( $jb_conn, $sql );
                    $row = mysqli_fetch_array( $sql_result );
                    echo "<TD>", $row[0], "</TD>";
                }
                if($row_possible['2nd_date'] == NULL){
                    $a = $row_possible['1st_date'];
                    $sql = "SELECT DATE_ADD('$a', INTERVAL 28 DAY) AS 2nd_plan_date FROM vaccines, vaccinate
                            WHERE Owned = '영대병원' AND (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno);";
                    $result = mysqli_query( $jb_conn, $sql );
                    $row = mysqli_fetch_array($result);
                    $sql = "SELECT CURDATE() AS D";
                    $result = mysqli_query( $jb_conn, $sql );
                    $D = mysqli_fetch_array($result);
                    if($row[0] > $D[0]){
                        echo "<TD>", $row[0], "</TD>";
                    }
                    else{
                        echo "<TD>", "예정일 재입력", "</TD>";
                    }
                }
                else{
                    echo "<TD>", $row_possible['2nd_date'], "</TD>";
                }
                echo "<TD>", $row_possible['2nd_hosp'], "</TD>";
                echo "<TD>
                <form action='new_yu_hospital_vaccinate_update.php' method='POST'>
                <input type='hidden' name='Cssn' value='$row_possible[Cssn]'/>
                <input type='hidden' name='uid' value='$username'/>
                <button type='submit' class='edit'>수정</button>
                </form>";
                echo "</TR>";
                $num++;
            }
        
            mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>
    </div>


                


  </body>
</html>