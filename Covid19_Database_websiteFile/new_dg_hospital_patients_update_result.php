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

       /*  수정 색칠 */
        .hospital_info-table td:nth-child(12){
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
                        <button class="btn" style="background-color: #029341">환자 리스트</button>
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
    <?php
        $username=$_POST['uid'];
    $con=mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");

    $Cssn=$_POST["Cssn"];
    $Building=$_POST["Building"];
    $Hospname='대구병원';
    $Room=$_POST["Room"];
    $Hdate=$_POST["Hdate"];
    $Odate=$_POST["Odate"];
    $Tel_nok=$_POST["Tel_nok"];
    $Hcode=$_POST["Hcode"];
    
    if($Cssn==NULL){
        $sql="UPDATE patients SET Cssn=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql="UPDATE patients SET Cssn='".$Cssn."' WHERE Cssn='".$Cssn."'";
    }

    if($Building==NULL){
        $sql1="UPDATE patients SET Building=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql1="UPDATE patients SET Building='".$Building."' WHERE Cssn='".$Cssn."'";
    }

    $sql2="UPDATE patients SET Hospname='".$Hospname."' WHERE Cssn='".$Cssn."'";

    if($Hdate==NULL){
        $sql3="UPDATE patients SET Hdate=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql3="UPDATE patients SET Hdate='".$Hdate."' WHERE Cssn='".$Cssn."'";
    }

    if($Odate == NULL){
        $sql4="UPDATE patients SET Odate=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql4="UPDATE patients SET Odate='".$Odate."' WHERE Cssn='".$Cssn."'";
    }

    if($Room == NULL){
        $sql5="UPDATE patients SET Room=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql5="UPDATE patients SET Room='".$Room."' WHERE Cssn='".$Cssn."'";
    }

    if($Tel_nok==NULL){
        $sql6="UPDATE patients SET Tel_nok=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql6="UPDATE patients SET Tel_nok='".$Tel_nok."' WHERE Cssn='".$Cssn."'";
    }
    if($Hcode==NULL){
        $sql7="UPDATE patients SET Hcode=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql7="UPDATE   patients    SET Hcode='".$Hcode."' WHERE Cssn='".$Cssn."'";
    }
    
    


    $ret=mysqli_query($con, $sql);
    $ret1=mysqli_query($con, $sql1);
    $ret2=mysqli_query($con, $sql2);
    $ret3=mysqli_query($con, $sql3);
    $ret4=mysqli_query($con, $sql4);
    $ret5=mysqli_query($con, $sql5);
    $ret6=mysqli_query($con, $sql6);
    $ret7=mysqli_query($con, $sql7);

    echo "<h1>회원 정보 수정 결과</h1>";
    if($ret)
    {
        echo "ret데이터가 성공적으로 수정됨.<br>";
    }
    if($ret1)
    {
        echo "ret1데이터가 성공적으로 수정됨.";
    }
    if($ret2)
    {
        echo "ret2데이터가 성공적으로 수정됨.";
    }
    if($ret3)
    {
        echo "ret3데이터가 성공적으로 수정됨.";
    }
    if($ret4)
    {
        echo "ret4데이터가 성공적으로 수정됨.";
    }
    if($ret5)
    {
        echo "ret5데이터가 성공적으로 수정됨.";
    }
    if($ret6)
    {
        echo "ret6데이터가 성공적으로 수정됨.";
    }
    if($ret7)
    {
        echo "ret6데이터가 성공적으로 수정됨.";
    }
    else{
        echo "데이터 수정 실패!!"."<br>";
        echo "실패 원인:".mysqli_error($con);
    }
    mysqli_close($con);

    echo "<br><form action='new_dg_hospital_patients_list.php' method='POST'>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit'>메인페이지</button>
                        </form>";
    ?>

    
    </BODY>
</HTML>