<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>정부</title>
    <style>
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
        }
        .btn{
            background-color: #9D9D9D;
            width: 145px;
            height: 38px;
            border-radius: 3px;
            border: none;
            font-size: 16px;
            font-weight: 700;
            line-height: 40px;
            color: white;
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
        .sub-title{
            font-size: 16px;
            color: grey;
        }
        .korea{
            color: #0050A2;
        }
        .main-title{
            font-size: 30px;
            font-weight: 800;
        }
        .vaccine-box{
            width: 900px;
            height: 175px;
            margin: 0 auto;
            background-color: white;
        }
        .empty{
            width: 900px;
            height: 20px;
            margin: 0 auto;
        }
        .title{
            color: #131C69;
            font-weight: 800;
            font-size: 16px;
            padding-left: 150px;
            padding-top: 20px;
            padding-bottom: 10px;
        }
        .vaccine-table{
            text-align: center;
            padding-left: 100px;
            padding-right: 100px;
        }
        .vaccine-table .vaccine-th td:nth-child(1){
            width: 170px;
            background-color: #0272BF;
            color: yellow;
        }
        .vaccine-table .vaccine-th td{
            width: 125px;
            height: 40px;
            background-color:#0050A2;
            color: white;
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
        .num1{
            font-size: 20px;
            float: left;
            margin-left: 50px;
            font-weight: 800;
        }
        .danwi1{
            font-size: 10px;
            float: left;
            margin-top: 11px;
            color: grey;
        }
        .box{
            background-color: white;
            width: 900px;
            margin-top: 20px;
            margin: 0 auto;
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
            border-collapse: collapse;
        }
        .citizen-table td{
            height: 30px;
            border-left: 2px solid #E7E7E7;
            border-bottom: 2px solid #E7E7E7;
            font-weight: 600;
        }
        .citizen-table thead tr td{
            background-color: #EEEEEE;
            border-top: 3px solid #535353;
            font-weight: 500;
        }
        .vaccine_remain_table_first_tr td{
            width: 140px;
            height: 40px;
            color: white;
            border-radius: 5px;
            font-weight: 500;
            font-size: 14px;
        }
        .vaccine_remain_table_first_tr td:nth-child(1){
            background-color: #DAD7E0;
            color: #88878A;
        }
        .vaccine_remain_table_first_tr td:nth-child(2){background-color: #438EAF;}
        .vaccine_remain_table_first_tr td:nth-child(3){background-color: #2D7CA9;}
        .vaccine_remain_table_first_tr td:nth-child(4){background-color: #166AA2;}
        .vaccine_remain_table_second_tr{
            height: 40px;
            font-size: 14px;
            border: 1px solid grey;
        }
        .vaccine_remain_table_second_tr td{
            border: 2px solid #EAEAEA;
            border-radius: 5px;
            font-weight: 700;
        }
        .vaccine_remain_table_second_tr td:nth-child(1){ border: 1px solid #EAEAEA; background-color: #F4F3FA;}
        .gender_confirm_table{ border-collapse: collapse;}
        .gender_confirm_table tr td{ border-left: 1px solid #E6E6E6 ;}
        .gender_confirm_table tr td:nth-child(4){ border-right: 1px solid #E6E6E6;}
        .gender_confirm_table_second_tr td:nth-child(1){color: #324774}
        .gender_confirm_table_second_tr td:nth-child(4){color: #4F6AC4}
        .gender_confirm_table_tr td{
            width: 140px;
            height: 30px;
            font-weight: 900;
            font-size: 14px;
            background-color: #F7FAFE;
            color: #324774;
            border-top: 3px solid #6C82B0;
            border-bottom: 2px solid #6C82B0;
            border-left: 2px solid #F7FAFE;
        }
        .gender_confirm_table_second_tr{
            height: 30px;
            font-weight: 900;
            font-size: 14px;
            border-bottom: 1px solid #E6E6E6;
        }
       .register-btn{
            height: 40px;
            width: 150px;
            color: white;
            background-color:#9d9d9d;
            border-radius: 5px;
            border: none;
            margin: 0 auto;
            text-align: center;
            margin-left: 360px;
            margin-top: 30px;
       }
       .register-btn:hover{
            background-color: #0272BF;
       }
    </style>
  </head>
  <body>
    <?php
            $username=$_POST['uid'];
            $conn= mysqli_connect('localhost', 'root', '1234', 'newcovid19db');
            $sql="SELECT Dept FROM manager where MgrID='$username' ";
            $result=mysqli_fetch_array(mysqli_query($conn,$sql));
            if ($result['Dept'] == "government"){

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
    <div class="main-box" style="padding-top: 20px;">
        <span class="sub-title">Current Status of COVID-19</span><br>
        <span class="main-title"><span class="korea">대한민국</span> 코로나-19 현황</span>
    </div>
    <div class="main-box">
        <table class="button-box">
            <tr>
                <td>
                    <div class="btn" >
                        <form action="government.php" method="POST">
                            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                            <button class="btn" style="background-color: #0272BF;">정부</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="btn">
                        <form action="Pfizer.php" method="POST">
                            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                            <button class="btn">화이자</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="btn">
                        <form action="moderna.php" method="POST">
                            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                            <button class="btn">모더나</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="btn">
                        <form action="new_knu_hospital_mainpage.php" method="POST">
                            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                            <button class="btn">경대병원</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="btn">
                        <form action="new_yu_hospital_mainpage.php" method="POST">
                            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                            <button class="btn">영대병원</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="btn">
                        <form action="new_dg_hospital_mainpage.php" method="POST">
                            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                            <button class="btn">대구병원</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="vaccine-box">
        <div class="title">백신접종현황</div>
        <table class="vaccine-table">
            <thead class="vaccine-th">
                <tr>
                    <td>1차 접종자</td>
                    <td>2차 접종자</td>
                    <td>1차 접종률</td>
                    <td>2차 접종률</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                    
                    $all_citizen_num = "SELECT COUNT(*) FROM citizens, dead_isolaters, dead_patients, patients WHERE Ssn != Dssn AND (dead_patients.Hcode = patients.Hcode AND patients.Cssn != citizens.Ssn);";
                    $jb_result = mysqli_query( $jb_conn, $all_citizen_num ); // 쿼리 실행
                    $all_num = mysqli_fetch_array($jb_result);

                    $cnt_first_vaccinate = "SELECT COUNT(1st_date) FROM vaccinate";
                    $jb_result = mysqli_query( $jb_conn, $cnt_first_vaccinate ); // 쿼리 실행
                    $first_vaccinate_num = mysqli_fetch_array($jb_result);

                    $cnt_second_vaccinate = "SELECT COUNT(2nd_date) FROM vaccinate";
                    $jb_result = mysqli_query( $jb_conn, $cnt_second_vaccinate ); // 쿼리 실행
                    $second_vaccinate_num = mysqli_fetch_array($jb_result);

                    $per_first_vaccinate = $first_vaccinate_num[0] / $all_num[0] * 100;
                    $per_first_vaccinate = round($per_first_vaccinate, 1);

                    $per_second_vaccinate = $second_vaccinate_num[0] / $all_num[0] * 100;
                    $per_second_vaccinate = round($per_second_vaccinate, 1);
                    
                    echo "<TR>";
                    echo "<td><div class=num1>", $first_vaccinate_num[0],"</div><div class=danwi1>명</div></td>";
                    echo "<td><div class=num1>", $second_vaccinate_num[0],"</div><div class=danwi1>명</div></td>";
                    echo "<td><div class=num1>", $per_first_vaccinate,"</div><div class=danwi1>%</div></td>";
                    echo "<td><div class=num1>", $per_second_vaccinate,"</div><div class=danwi1>%</div></td>";
                    echo "</TR>";
                ?>
            </tbody>
        </table>
    </div>
    <div class="empty"></div>
    <div class="vaccine-box" style="height: 730px;">
        <div class="title">코로나 현황</div>
        <table class="vaccine-table">
            <thead class="vaccine-th">
                <tr>
                    <td>확진자</td>
                    <td>사망자</td>
                    <td>격리중</td>
                    <td>격리해제</td>
                    <td>치명률</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");

                    // 확진자 수
                    $num_confirmedcase = "SELECT COUNT(*) FROM confirmedcase;";
                    $jb_result = mysqli_query( $jb_conn, $num_confirmedcase ); // 쿼리 실행
                    $confirmedcase = mysqli_fetch_array($jb_result);

                    // 사망자 수
                    $num_dead_isolation = "SELECT COUNT(*) FROM dead_isolaters";
                    $jb_result = mysqli_query( $jb_conn, $num_dead_isolation);
                    $dead_isolation = mysqli_fetch_array($jb_result);
                    
                    
                    $num_dead_patients = "SELECT COUNT(*) FROM dead_patients";
                    $jb_result = mysqli_query( $jb_conn, $num_dead_patients );
                    $dead_patients = mysqli_fetch_array($jb_result);

                    //격리중
                    $ing_isolaters = "SELECT COUNT(*) FROM newcovid19db.self_isolaters where Enddate is null;";
                    $jb_result = mysqli_query( $jb_conn, $ing_isolaters );
                    $ing_isolaters = mysqli_fetch_array($jb_result);

                    // 격리해제
                    $num_end_isolaters = "SELECT COUNT(Enddate) FROM self_isolaters;";
                    $jb_result = mysqli_query( $jb_conn, $num_end_isolaters );
                    $end_isolaters = mysqli_fetch_array($jb_result);

                    $confirmedcase_people = $confirmedcase[0] -  $dead_isolation[0] - $dead_patients[0]; 
                    $dead_people = $dead_isolation[0] + $dead_patients[0];

                    $per = $dead_people / $confirmedcase_people * 100;
                    $per = round($per, 1);
                    
                    echo "<TR>";
                    echo "<td><div class=num>", $confirmedcase_people,"</div><div class=danwi>명</div></td>";
                    echo "<td><div class=num1>", $dead_people,"</div><div class=danwi1>명</div></td>";
                    echo "<td><div class=num1>", $ing_isolaters[0],"</div><div class=danwi1>명</div></td>";
                    echo "<td><div class=num1>", $end_isolaters[0],"</div><div class=danwi1>명</div></td>";
                    echo "<td><div class=num1>", $per,"</div><div class=danwi1>%</div></td>";
                    echo "</TR>";
                ?>
            </tbody>
        </table>
        <div class="title">확진자 성별 현황</div>
        <table class="gender_confirm_table">
            <tr class="gender_confirm_table_tr">
                <td>구분</td>
                <td>확진자</td>
                <td>사망자</td>
                <td>치명률(%)</td>
            </tr>
            <?php
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                // 남성 확진자
                $num_confirmedcase = "SELECT COUNT(*) 
                FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F
                    WHERE C.Sex = 'M' AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $num_confirmedcase ); // 쿼리 실행
                $Mconfirmedcase = mysqli_fetch_array($jb_result);

                // 남성 자가격리 사망자
                $dead_man_isolate = "SELECT COUNT(*) 
                FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F,
                newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Sex = 'M' AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $dead_man_isolate ); // 쿼리 실행
                $dead_man_isolate = mysqli_fetch_array($jb_result);

                // 남성 병원 사망자
                $dead_man_hos = "SELECT COUNT(*) 
                FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F,
                newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Sex = 'M' AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $dead_man_hos ); // 쿼리 실행
                $dead_man_hos = mysqli_fetch_array($jb_result);

                $Mdead = $dead_man_isolate[0] + $dead_man_hos[0];
                $Mper_dead = ($dead_man_isolate[0] + $dead_man_hos[0]) / $Mconfirmedcase[0] * 100;
                $Mper_dead = round($Mper_dead, 1);

                // 여성 확진자
                $num_confirmedcase = "SELECT COUNT(*) 
                FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F
                    WHERE C.Sex = 'F' AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $num_confirmedcase ); // 쿼리 실행
                $Fconfirmedcase = mysqli_fetch_array($jb_result);

                // 여성 자가격리 사망자
                $Fdead_isolate = "SELECT COUNT(*) 
                FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F,
                newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Sex = 'F' AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $Fdead_isolate ); // 쿼리 실행
                $Fdead_isolate = mysqli_fetch_array($jb_result);

                // 여성 병원 사망자
                $Fdead_hos = "SELECT COUNT(*) 
                FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F,
                newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Sex = 'F' AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $Fdead_hos ); // 쿼리 실행
                $Fdead_hos = mysqli_fetch_array($jb_result);

                $Fdead = $Fdead_isolate[0] + $Fdead_hos[0];
                $Fper_dead = ($Fdead_isolate[0] + $Fdead_hos[0]) / $Fconfirmedcase[0] * 100;
                $Fper_dead = round($Fper_dead, 1);

                echo "<TR class='gender_confirm_table_second_tr'>";
                echo "<td>남자</td>";
                echo "<td>", $Mconfirmedcase[0],"</td>";
                echo "<td>",$Mdead,"</td>";
                echo "<td>", $Mper_dead,"</td>";
                echo "</TR>";
                echo "<TR class='gender_confirm_table_second_tr'>";
                echo "<td>여자</td>";
                echo "<td>", $Fconfirmedcase[0],"</td>";
                echo "<td>",$Fdead,"</td>";
                echo "<td>", $Fper_dead,"</td>";
                echo "</TR>";
            ?>
        </table>
        <div class="title">확진자 연령별 현황</div>
        <table class="gender_confirm_table">
            <tr class="gender_confirm_table_tr">
                <td>구분</td>
                <td>확진자</td>
                <td>사망자</td>
                <td>치명률(%)</td>
            </tr>
            <?php
                $one = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F WHERE C.Age >= 80 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $one ); // 쿼리 실행
                $one = mysqli_fetch_array($jb_result);

                $one_iso = "SELECT COUNT(*) 
                FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F,
                newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age >= 80 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $one_iso ); // 쿼리 실행
                $one_iso = mysqli_fetch_array($jb_result);

                $one_hos = "SELECT COUNT(*) 
                FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F,
                newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age >= 80 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $one_hos ); // 쿼리 실행
                $one_hos = mysqli_fetch_array($jb_result);

                $one_dead = $one_iso[0] + $one_hos[0];
                if( $one[0] == 0) $one_per = 0;
                else $one_per = $one_dead / $one[0] * 100;
                $one_per= round($one_per, 1);
               
                $two = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F WHERE C.Age < 79 AND C.Age >= 70 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $two ); 
                $two = mysqli_fetch_array($jb_result);

                $two_iso = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age < 79 AND C.Age >= 70 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $two_iso ); 
                $two_iso = mysqli_fetch_array($jb_result);

                $two_hos = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age < 79 AND C.Age >= 70 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $two_hos ); 
                $two_hos = mysqli_fetch_array($jb_result);

                $two_dead = $two_iso[0] + $two_hos[0];
                if( $two[0] == 0) $two_per = 0;
                else $two_per = $two_dead / $two[0] * 100;
                $two_per= round($two_per, 1);
                
                $three = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F WHERE C.Age < 69 AND C.Age >= 60 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $three ); // 쿼리 실행
                $three = mysqli_fetch_array($jb_result);

                $three_iso = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age < 69 AND C.Age >= 60 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $three_iso ); 
                $three_iso = mysqli_fetch_array($jb_result);

                $three_hos = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age < 69 AND C.Age >= 60 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $three_hos ); 
                $three_hos = mysqli_fetch_array($jb_result);

                $three_dead = $three_iso[0] + $three_hos[0];
                if( $three[0] == 0) $three_per = 0;
                else $three_per = $three_dead / $three[0] * 100;
                $three_per= round($three_per, 1);

                $four = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F
                WHERE C.Age < 59 AND C.Age >= 50 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $four ); // 쿼리 실행
                $four = mysqli_fetch_array($jb_result);

                $four_iso = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age < 59 AND C.Age >= 50 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $four_iso ); 
                $four_iso = mysqli_fetch_array($jb_result);

                $four_hos = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age < 59 AND C.Age >= 50 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $four_hos ); 
                $four_hos = mysqli_fetch_array($jb_result);

                $four_dead = $four_iso[0] + $four_hos[0];
                if( $four[0] == 0) $four_per = 0;
                else $four_per = $four_dead / $four[0] * 100;
                $four_per= round($four_per, 1);

                $five = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F
                WHERE C.Age < 49 AND C.Age >= 40 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $five ); // 쿼리 실행
                $five = mysqli_fetch_array($jb_result);

                $five_iso = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age < 49 AND C.Age >= 40 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $five_iso ); 
                $five_iso = mysqli_fetch_array($jb_result);

                $five_hos = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age < 49 AND C.Age >= 40 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $five_hos ); 
                $five_hos = mysqli_fetch_array($jb_result);

                $five_dead = $five_iso[0] + $five_hos[0];
                if( $five[0] == 0) $five_per = 0;
                else $five_per = $five_dead / $five[0] * 100;
                $five_per= round($five_per, 1);

                $six = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F
                WHERE C.Age < 39 AND C.Age >= 30 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $six ); // 쿼리 실행
                $six = mysqli_fetch_array($jb_result);

                $six_iso = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age < 39 AND C.Age >= 30 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $six_iso ); 
                $six_iso = mysqli_fetch_array($jb_result);

                $six_hos = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age < 39 AND C.Age >= 30 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $six_hos ); 
                $six_hos = mysqli_fetch_array($jb_result);

                $six_dead = $six_iso[0] + $six_hos[0];
                if( $six[0] == 0) $six_per = 0;
                else $six_per = $six_dead / $six[0] * 100;
                $six_per= round($six_per, 1);

                $seven = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F
                WHERE C.Age < 29 AND C.Age >= 20 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $seven ); // 쿼리 실행
                $seven = mysqli_fetch_array($jb_result);

                $seven_iso = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age < 29 AND C.Age >= 20 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $seven_iso ); 
                $seven_iso = mysqli_fetch_array($jb_result);

                $seven_hos = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age < 29 AND C.Age >= 20 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $seven_hos ); 
                $seven_hos = mysqli_fetch_array($jb_result);

                $seven_dead = $seven_iso[0] + $seven_hos[0];
                if( $seven[0] == 0) $seven_per = 0;
                else $seven_per = $seven_dead / $seven[0] * 100;
                $seven_per= round($seven_per, 1);

                $eight = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F
                WHERE C.Age < 19 AND C.Age >= 10 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $eight ); // 쿼리 실행
                $eight = mysqli_fetch_array($jb_result);

                $eight_iso = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age < 19 AND C.Age >= 10 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $eight_iso ); 
                $eight_iso = mysqli_fetch_array($jb_result);

                $eight_hos = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age < 19 AND C.Age >= 10 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $eight_hos ); 
                $eight_hos = mysqli_fetch_array($jb_result);

                $eight_dead = $eight_iso[0] + $eight_hos[0];
                if( $eight[0] == 0) $eight_per = 0;
                else $eight_per = $eight_dead / $eight[0] * 100;
                $eight_per= round($eight_per, 1);

                $nine = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F
                WHERE C.Age < 9 AND C.Age >= 0 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn;";
                $jb_result = mysqli_query( $jb_conn, $nine ); // 쿼리 실행
                $nine = mysqli_fetch_array($jb_result);

                $nine_iso = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.self_isolaters AS S, newcovid19db.dead_isolaters AS D
                WHERE C.Age < 19 AND C.Age >= 10 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Cssn = D.Dssn;";
                $jb_result = mysqli_query( $jb_conn, $nine_iso ); 
                $nine_iso = mysqli_fetch_array($jb_result);

                $nine_hos = "SELECT COUNT(*) FROM newcovid19db.citizens AS C, newcovid19db.testers AS T, newcovid19db.confirmedcase AS F, newcovid19db.patients AS S, newcovid19db.dead_patients AS D
                WHERE C.Age < 19 AND C.Age >= 10 AND C.Ssn = T.Cssn AND T.Cssn = F.Tssn AND F.Tssn = S.Cssn AND S.Hcode = D.Hcode;";
                $jb_result = mysqli_query( $jb_conn, $nine_hos ); 
                $nine_hos = mysqli_fetch_array($jb_result);

                $nine_dead = $nine_iso[0] + $nine_hos[0];
                if( $nine[0] == 0) $nine_per = 0;
                else $nine_per = $nine_dead / $nine[0] * 100;
                $nine_per= round($nine_per, 1);

                echo "<TR class='gender_confirm_table_second_tr'><td>80이상</td><td>", $one[0],"</td><td>", $one_dead,"</td><td>", $one_per,"</td></TR>";
                echo "<TR class='gender_confirm_table_second_tr'><td>70-79</td><td>", $two[0],"</td><td>",$two_dead,"</td><td>", $two_per,"</td></TR>";
                echo "<TR class='gender_confirm_table_second_tr'><td>60-69</td><td>", $three[0],"</td><td>",$three_dead,"</td><td>", $three_per,"</td></TR>";
                echo "<TR class='gender_confirm_table_second_tr'><td>50-59</td><td>",$four[0],"</td><td>",$four_dead,"</td><td>", $four_per,"</td></TR>";
                echo "<TR class='gender_confirm_table_second_tr'><td>40-49</td><td>", $five[0],"</td><td>",$five_dead,"</td><td>", $five_per,"</td></TR>";
                echo "<TR class='gender_confirm_table_second_tr'><td>30-39</td><td>", $six[0],"</td><td>",$six_dead,"</td><td>", $six_per,"</td></TR>";
                echo "<TR class='gender_confirm_table_second_tr'><td>20-29</td><td>", $seven[0],"</td><td>",$seven_dead,"</td><td>", $seven_per,"</td></TR>";
                echo "<TR class='gender_confirm_table_second_tr'><td>10-19</td><td>", $eight[0],"</td><td>",$eight_dead,"</td><td>", $eight_per,"</td></TR>";
                echo "<TR class='gender_confirm_table_second_tr'><td>0-9</td><td>", $nine[0],"</td><td>",$nine_dead,"</td><td>", $nine_per,"</td></TR>";
            ?>
        </table>
    </div>
    <div class="empty"></div>
    <div class="vaccine-box" style="height: 200px;">
        <div class="title">백신보유현황</div>
        <table class="vaccine_remain_table">
            <thead>
                <tr class="vaccine_remain_table_first_tr">
                    <td>구분</td>
                    <td>경대병원</td>
                    <td>영대병원</td>
                    <td>대구병원</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                    
                    $knu_p = "SELECT count(*) 
                                FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) 
                                WHERE Owned = '경대병원' AND Exp >= CURDATE() AND MfgCo = 'pfizer' AND 1st_Vno IS NULL AND 2nd_Vno IS NULL;";
                    $jb_result = mysqli_query( $jb_conn, $knu_p ); // 쿼리 실행
                    $knu_p = mysqli_fetch_array($jb_result);

                    $yu_p = "SELECT count(*) 
                    FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) 
                    WHERE Owned = '영대병원' AND Exp >= CURDATE() AND MfgCo = 'pfizer' AND 1st_Vno IS NULL AND 2nd_Vno IS NULL;";
                    $jb_result = mysqli_query( $jb_conn, $yu_p ); // 쿼리 실행
                    $yu_p = mysqli_fetch_array($jb_result);

                    $daegu_p = "SELECT count(*) 
                    FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) 
                    WHERE Owned = '대구병원' AND Exp >= CURDATE() AND MfgCo = 'pfizer' AND 1st_Vno IS NULL AND 2nd_Vno IS NULL;";
                    $jb_result = mysqli_query( $jb_conn, $daegu_p ); // 쿼리 실행
                    $daegu_p = mysqli_fetch_array($jb_result);

                    $knu_m = "SELECT count(*) 
                    FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) 
                    WHERE Owned = '경대병원' AND Exp >= CURDATE() AND MfgCo = 'moderna' AND 1st_Vno IS NULL AND 2nd_Vno IS NULL;";
                    $jb_result = mysqli_query( $jb_conn, $knu_m ); // 쿼리 실행
                    $knu_m = mysqli_fetch_array($jb_result);

                    $yu_m = "SELECT count(*) 
                    FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) 
                    WHERE Owned = '영대병원' AND Exp >= CURDATE() AND MfgCo = 'moderna' AND 1st_Vno IS NULL AND 2nd_Vno IS NULL;";
                    $jb_result = mysqli_query( $jb_conn, $yu_m ); // 쿼리 실행
                    $yu_m = mysqli_fetch_array($jb_result);

                    $daegu_m = "SELECT count(*) 
                    FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) 
                    WHERE Owned = '대구병원' AND Exp >= CURDATE() AND MfgCo = 'moderna' AND 1st_Vno IS NULL AND 2nd_Vno IS NULL;";
                    $jb_result = mysqli_query( $jb_conn, $daegu_m ); // 쿼리 실행
                    $daegu_m = mysqli_fetch_array($jb_result);
                                    
                    echo "<TR class='vaccine_remain_table_second_tr'>";
                    echo "<td>화이자</td>";
                    echo "<td>", $knu_p[0],"</td>";
                    echo "<td>", $yu_p[0],"</td>";
                    echo "<td>", $daegu_p[0],"</td>";
                    echo "</TR>";
                    echo "<TR class='vaccine_remain_table_second_tr'>";
                    echo "<td>모더나</td>";
                    echo "<td>", $knu_m[0],"</td>";
                    echo "<td>", $knu_m[0],"</td>";
                    echo "<td>", $knu_m[0],"</td>";
                    echo "</TR>";
                ?>
            </tbody>
        </table>
    </div>
    <div class="vaccine-box" style="height: 500px;">
        <div class="title">백신도입예정</div>
        <div style="margin: 0 auto; margin-left: 60px; width: 800px; max-height: 400px; overflow-y: scroll;">
        <table class="gender_confirm_table">
                <tr class="gender_confirm_table_tr">
                    <td  style='width: 40px;'>번호</td>
                    <td>백신번호</td>
                    <td>제조사</td>
                    <td>제조일자</td>
                    <td>만료일</td>
                    <td>주민회원ID</td>
                    <td>수입일</td>
                </tr>
                <?php
                    $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                   
                    $jb_sql = "SELECT * FROM pre_orders;";
                    $jb_result = mysqli_query( $jb_conn, $jb_sql );
                    $num = 1;
                    while($row = mysqli_fetch_array($jb_result)){
                        echo "<tr class='gender_confirm_table_second_tr'>";
                        echo "<td>", $num, "</td>";
                        echo "<td>", $row['SerialNo'], "</td>";
                        echo "<td >", $row['MfgCo'], "</td>";
                        echo "<td>", $row['MfgDate'], "</td>";
                        echo "<td>", $row['Exp'], "</td>";
                        echo "<td>", $row['CustomerID'], "</td>";
                        echo "<td >", $row['Deliverydate'], "</td>";
                        echo "</tr>";
                        $num++;
                    }

                    mysqli_close($jb_conn);

                ?>
        </table>
        </div>
    </div>
    
    <div class="empty"></div>
    <div class="box">
        <div class="title">확진자</div>
        <div style="margin: 0 auto; margin-left: 70px; width: 746px; max-height: 400px; overflow-y: scroll;">
        <table class="citizen-table" >
            <thead>
                <tr>
                    <td>번호</td>
                    <td>주민번호</td>
                    <td>확진일</td>
                    <td>치료유형</td>
                    <td>입원병동</td>
                    <!-- <td>verifiedDate</td>
                    <td>hospital</td>
                    <td>입원일</td>
                    <td>퇴원일</td>
                    <td>사망일</td>
                    <td>보호자번호</td> -->
                </tr>
            </thead>
            <tbody>
                <?php
                    $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                    // 호스트명, 계정명, 비밀번호, 데이터베이스명
                    $jb_sql = "SELECT Tssn, Confirmeddate, Caretype, Hospname 
                    FROM newcovid19db.confirmedcase AS c LEFT OUTER JOIN newcovid19db.patients AS p ON c.Tssn = p.Cssn ORDER BY Confirmeddate DESC;";
                    $jb_result = mysqli_query( $jb_conn, $jb_sql );
                    // 접속 연결자, sql문

                    $num = 1;

                    // citizen table 출력
                    while($row = mysqli_fetch_array($jb_result)){
                        echo "<TR>";
                        echo "<td>", $num ,"</td>";
                        echo "<TD style='width: 180px;'>", $row['Tssn'], "</TD>";
                        echo "<TD style='width: 170px;'>", $row['Confirmeddate'], "</TD>";
                        echo "<TD style='width: 160px;'>", $row['Caretype'], "</TD>";
                        echo "<TD style='width: 160px;'>", $row['Hospname'], "</TD>";
                        echo "</TR>";
                        $num++;
                    }

                    mysqli_close($jb_conn);
                ?>
            </tbody>
        </table> 
        </div>   
        <div class="empty"></div>
        <div class="empty"></div>
    </div>
    <div class="empty"></div>
    <div class="box" style="height: 500px;">
        <div class="title">검진자</div>
        <div style="margin: 0 auto; width: 645px; max-height: 400px; overflow-y: scroll;">
        <table class="citizen-table">
            <thead>
                <tr>
                    <td>num</td>
                    <td>Citizen_ssn</td>
                    <td>TestDate</td>
                    <td>TestNum</td>
                    <td>TestHospital</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                    // 호스트명, 계정명, 비밀번호, 데이터베이스명
                    $jb_sql = "SELECT * FROM testers";
                    $jb_result = mysqli_query( $jb_conn, $jb_sql );
                    // 접속 연결자, sql문

                    $num = 1;

                    // citizen table 출력
                    while($row = mysqli_fetch_array($jb_result)){
                        echo "<TR><td style='width: 40px;'>", $num ,"</td><TD style='width: 180px;'>", $row['Cssn'], "</TD><TD style='width: 100px;'>", $row['Testdate'], "</TD>";
                        echo "<TD  style='width: 140px;'>", $row['Testnum'], "</TD>";
                        echo "<TD  style='width: 140px;'>", $row['Testhospital'], "</TD>";
                        echo "</TR>";
                        $num++;
                    }

                    mysqli_close($jb_conn);
                ?>
            </tbody>
        </table>   
        </div> 
    </div>
    <div class="empty"></div>
    <div class="box" style="height: 540px;">
        <div class="title">대한민국 시민</div>
        <div style="margin: 0 auto; width: 810px; max-height: 400px; overflow-y: scroll;">
        <table class="citizen-table" >
            <thead>
                <tr>
                    <td>num</td>
                    <td>ssn</td>
                    <td>name</td>
                    <td>sex</td>
                    <td>age</td>
                    <td>addr1</td>
                    <td>addr2</td>
                    <td>addr3</td>
                    <td>사망일</td>
                    <td>수정</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                    // 호스트명, 계정명, 비밀번호, 데이터베이스명
                    $jb_sql = "SELECT * FROM citizens;";
                    $sql = "SELECT Ssn, Name, Sex, Age, Addr1, Addr2, Addr3, dead_isolaters.Deaddate AS did, dead_patients.Deaddate AS dpd
                    FROM (newcovid19db.citizens LEFT OUTER JOIN newcovid19db.patients ON Ssn = Cssn)
                    LEFT OUTER JOIN newcovid19db.dead_isolaters ON Ssn = Dssn
                    LEFT OUTEr JOIN newcovid19db.dead_patients ON patients.Hcode = dead_patients.Hcode";
                    $jb_result = mysqli_query( $jb_conn, $sql );
                    // 접속 연결자, sql문

                    $num = 1;

                    // citizen table 출력
                    while($row = mysqli_fetch_array($jb_result)){
                        echo "<TR>";
                        echo "<td style='width: 36px;'>", $num ,"</td>";
                        echo "<TD style='width: 160px;'>", $row['Ssn'], "</TD>";
                        echo "<TD>", $row['Name'], "</TD>";
                        echo "<TD style='width: 36px;'>", $row['Sex'], "</TD>";
                        echo "<TD  style='width: 36px;'>", $row['Age'], "</TD>";
                        echo "<TD>", $row['Addr1'], "</TD>";
                        echo "<TD>", $row['Addr2'], "</TD>";
                        echo "<TD>", $row['Addr3'], "</TD>";
                        if($row['did'] != NULL){
                            echo "<TD>", $row['did'], "</TD>";
                        }elseif($row['dpd'] != NULL){
                            echo "<TD>", $row['dpd'], "</TD>";
                        }
                        else{
                            echo "<TD></TD>";
                        }
                        echo "<TD>
                                    <form action='government_edit.php' method='POST'>
                                    <input type='hidden' name='ssn' value='$row[Ssn]'/>
                                    <input type='hidden' name='name' value='$row[Name]'/>
                                    <input type='hidden' name='sex' value='$row[Sex]'/>
                                    <input type='hidden' name='age' value='$row[Age]'/>
                                    <input type='hidden' name='addr1' value='$row[Addr1]'/>
                                    <input type='hidden' name='addr2' value='$row[Addr2]'/>
                                    <input type='hidden' name='addr3' value='$row[Addr3]'/>
                                    <input type='hidden' name='uid' value='$username'/>
                                    <button type='submit'>수정</button>
                                    </form>
                                </TD>";
                        $num++;
                    }

                    mysqli_close($jb_conn);
                ?>
        </tbody>
        </table>
    
    </div>
        <form action='government_add.php' method='POST'>
            <input type='hidden' name='uid' value='<?php echo $username; ?>'/>
            <button type='submit' class="register-btn">등록</button>
        </form>
    </div>

  </body>
</html>
