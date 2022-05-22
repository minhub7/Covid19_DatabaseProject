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
            height:2000px;
            margin: 0 auto;
            background-color: white;
        }
        .hospital_info-table{
            text-align: center;
            padding-left: 100px;
            padding-right: 100px;

        }
        
        .hospital_info-table :nth-child(7){
            text-align: center;
            background-color: #4c8ac0;
        
        }

         .hospital_info-table .hospital_info-th td{
            width:  300px;
            height: 40px;
            color: white;
            background-color:#0272BF;
        } 
        
        .hospital_info-table .hospital_info-th td :nth-child(9){
            width:  300px;
            height: 40px;
            color: yellow;
            background-color:yellow;

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
        .testers-table td{
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

    <?php
    $username=$_POST['uid'];
    $con=mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");

    $Cssn=$_POST["Cssn"];
    $Testdate=$_POST["Testdate"];
    $Testnum=$_POST["Testnum"];
    $Testhospital='영대병원';

    // $sql="UPDATE Testers SET Cssn='".$Cssn."' , Testdate='".$Testdate."' , Testnum='".$Testnum."', Testhospital='".$Testhospital."' WHERE Cssn='".$Cssn."'";

    $sql="UPDATE testers SET Cssn='".$Cssn."' WHERE Cssn='".$Cssn."'";
    if($Testdate==NULL){
        $sql1="UPDATE testers SET Testdate=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql1="UPDATE testers SET Testdate='".$Testdate."' WHERE Cssn='".$Cssn."'";
    }

    if($Testnum==NULL){
        $sql2="UPDATE testers SET Testnum=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql2="UPDATE testers SET Testnum='".$Testnum."' WHERE Cssn='".$Cssn."'";
    }

    if($Testhospital==NULL){
        $sql3="UPDATE testers SET Testhospital=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql3="UPDATE testers SET Testhospital='".$Testhospital."' WHERE Cssn='".$Cssn."'";
    }

    $ret=mysqli_query($con, $sql);
    $ret1=mysqli_query($con, $sql1);
    $ret2=mysqli_query($con, $sql2);
    $ret3=mysqli_query($con, $sql3);

    echo "<h1>회원 정보 수정 결과</h1>";
    if($ret1)
    {
        echo "데이터가 성공적으로 수정됨.";
    }
    if($ret2)
    {
        echo "데이터가 성공적으로 수정됨.";
    }
    if($ret3)
    {
        echo "데이터가 성공적으로 수정됨.";
    }
    else{
    
        echo "데이터 수정 실패" ."<br>" ;
        echo "실패원인 :" .mysqli_error($con) ;       
    }   
   
    mysqli_close($con);
    echo "<br><form action='new_yu_hospital_testers_list.php' method='POST'>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit'>메인페이지</button>
                        </form>";
    ?>