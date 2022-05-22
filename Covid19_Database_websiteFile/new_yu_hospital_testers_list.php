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
            width: 1500px;
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
        }

         .hospital_info-table .hospital_info-th td{
            height: 40px;
            color: white;
            background-color:#0272BF;
        } 
        .hospital_info-table .hospital_info-th td:nth-child(1){width: 60px;}
        .hospital_info-table .hospital_info-th td:nth-child(2){width: 160px;}
        .hospital_info-table .hospital_info-th td:nth-child(3){width: 120px;}
        .hospital_info-table .hospital_info-th td:nth-child(4){width: 130px;}
        .hospital_info-table .hospital_info-th td:nth-child(5){width: 80px;}

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
            background-color:#4c8ac0;
            border: none;
        }

        .add-btn{
            height: 40px;
            width: 200px;
            color: white;
            background-color:#4c8ac0;
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
                    <form action="new_yu_hospital_mainpage.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">영대병원</button>
                    </form>
                </td>
                <td>
                    <form action="new_yu_hospital_vaccinate_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn" >백신접종리스트</button>
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
                        <button class="btn" >환자 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_yu_hospital_testers_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn"  style="background-color: #0272BF">검진자 리스트</button>
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

   <!--  검진자리스트 -->

   <div class="hospital_info-box_list">
   <div align="center" class="title">검진자 리스트</div>
   <div style="margin: 0 auto; width:650px; max-height: 500px; overflow-y: scroll;">
   <table align="center"class="hospital_info-table">
        <thead class="hospital_info-th">
            <tr>
                <td>순서</td>
                <td>주민번호</td>
                <td>검진자이름</td>
                <td>검진일</td>
                <td>검진횟수</td>
                <td>수정</td>
            </tr>
         </thead>
         <tbody>
             <?php
                $username=$_POST['uid'];
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_confirmedcase_sql="SELECT * FROM newcovid19db.testers, newcovid19db.citizens WHERE Testhospital= '영대병원' AND  testers.Cssn=citizens.ssn ORDER BY Testdate DESC;";
                $jb_confirmedcase_result = mysqli_query( $jb_conn, $jb_confirmedcase_sql );
                $num=1;

                while($row_confirmedcase = mysqli_fetch_array($jb_confirmedcase_result)){
                    echo "<TR>";
                    echo "<TD>", "$num", "</TD>";
                    echo "<TD>", $row_confirmedcase['Cssn'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Name'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Testdate'], "</TD>";
                    echo "<TD>", $row_confirmedcase['Testnum'], "</TD>";
                    echo "<TD>", "
                    <form action='new_yu_hospital_testers_update.php' method='POST'>
                    <input type='hidden' name='Cssn' value='$row_confirmedcase[Cssn]'/>
                    <input type='hidden' name='uid' value='$username'/>
                    <button type='submit' class='edit'>수정</button>
                    </form>
                    </TD>";
                    $num++;
                }
            
                mysqli_close($jb_conn);
                ?>
        </tbody>
    </table>
    </div>
    <div class="empty"></div>
    <form action='new_yu_testers_new.php' method='POST'>
        <input type='hidden' name='uid' value="<?=$_POST['uid']?>"/>
        <button type='submit' class='add-btn'>검진자 추가</button>
    </form>
    <div class="empty"></div>


    </body>
    </html>