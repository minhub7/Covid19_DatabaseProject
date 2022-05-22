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
            text-align: center;
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
            padding-left: 50px;
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
    <table style="height: 100px;">
        <tr>
            <td><span class="sub-title">manager table</span><br>
        <span class="main-title"><span class="korea">사용자</span> 관리 페이지</span></td>
        </tr>
    </table>
    <form action='main.php' method='POST'>
            <input type='hidden' name='uid' value='<?php echo $username; ?>'/>
            <button type='submit'>main page</button>
        </form>
        
    </div>
    <div class="empty"></div>
    <div class="box" style="height: 560px;">
        <div class="title">관리자</div>
        <div style="margin: 0 auto; width: 810px; max-height: 400px; overflow-y: scroll;">
        <table class="citizen-table" >
            <thead>
                <tr>
                    <td>Num</td>
                    <td>Manager ID</td>
                    <td>name</td>
                    <td>Ssn</td>
                    <td>Telephone</td>
                    <td>Email</td>
                    <td>Department</td>
                    <td>수정</td>
                    <td>삭제</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                    // 호스트명, 계정명, 비밀번호, 데이터베이스명
                    $jb_sql = "SELECT * FROM manager;";
                    $sql = 
                    $jb_result = mysqli_query( $jb_conn, $jb_sql );
                    // 접속 연결자, sql문

                    $num = 1;

                    // citizen table 출력
                    while($row = mysqli_fetch_array($jb_result)){
                        echo "<TR>";
                        echo "<td style='width: 36px;'>", $num ,"</td>";
                        echo "<TD style='width: 100px;'>", $row['MgrID'], "</TD>";
                        echo "<TD style='width: 50px;'>", $row['Name'], "</TD>";
                        echo "<TD style='width: 100px;'>", $row['Ssn'], "</TD>";
                        echo "<TD  style='width: 140px;'>", $row['Telephone'], "</TD>";
                        echo "<TD>", $row['Email'], "</TD>";
                        echo "<TD>", $row['Dept'], "</TD>";
                        echo "<TD>
                                <form action='manager_edit.php' method='POST'>
                                <input type='hidden' name='MgrID' value='$row[MgrID]'/>
                                <input type='hidden' name='Name' value='$row[Name]'/>
                                <input type='hidden' name='Password' value='$row[Password]'/>
                                <input type='hidden' name='Ssn' value='$row[Ssn]'/>
                                <input type='hidden' name='Telephone' value='$row[Telephone]'/>
                                <input type='hidden' name='Email' value='$row[Email]'/>
                                <input type='hidden' name='Dept' value='$row[Dept]'/>
                                <input type='hidden' name='uid' value='$username'/>
                                <button type='submit'>수정</button>
                                    </form>
                                </TD>";
                        echo "<TD>
                                <form action='manager_delete.php' method='POST'>
                                <input type='hidden' name='MgrID' value='$row[MgrID]'/>
                                <input type='hidden' name='uid' value='$username'/>
                                <button type='submit'>삭제</button>
                                </form>
                            </TD>";
                        $num++;
                    }

                    mysqli_close($jb_conn);
                ?>
        </tbody>
        </table>

    </div>
        <form action='manager_add.php' method='POST'>
            <input type='hidden' name='uid' value='<?php echo $username; ?>'/>
            <button type='submit' class="register-btn">등록</button>
        </form>
    </div>

  </body>
</html>
