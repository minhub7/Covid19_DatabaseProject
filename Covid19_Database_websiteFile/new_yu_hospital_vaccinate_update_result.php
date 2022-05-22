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
        .btn{
            background-color: #9D9D9D;
            width: 145px;
            height: 38px;
            border-radius: 3px;
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
            background-color:#0272BF;
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
            <td><div class="btn"><a href="new_yu_hospital_mainpage.php">영대병원</a></div></td>
                <td><div class="btn"style="background-color: #0272BF" ><a href="new_yu_hospital_vaccinate_list.php">백신접종리스트</a></div></td>
                <td><div class="btn"><a href="new_yu_hospital_vac_list.php">백신 리스트</a></div></td>
                <td><div class="btn" ><a href="new_yu_hospital_patients_list.php">환자 리스트</a></div></td>
                <td><div class="btn"><a href="new_yu_hospital_testers_list.php">검진자 리스트</a></div></td>
                <td><div class="btn"><a href="government.php">정부 페이지</a></div></td>
            
            </tr>
        </table>
    </div>
<?php
$username=$_POST['uid'];
    $con=mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");

    $Cssn=$_POST["Cssn"];
    $first_Vno=$_POST["1st_Vno"];
    $first_date=$_POST["1st_date"];
    $first_hosp=$_POST["1st_hosp"];
    $second_Vno=$_POST["2nd_Vno"];
    $second_date=$_POST["2nd_date"];
    $second_hosp=$_POST["2nd_hosp"];
    $MfgCo=$_POST["MfgCo"];

    if($Cssn==NULL){
        $sql="UPDATE vaccinate SET Cssn=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql="UPDATE vaccinate SET Cssn='".$Cssn."' WHERE Cssn='".$Cssn."'";
    }
    
    if($first_Vno==NULL){
        $sql1="UPDATE vaccinate SET 1st_Vno=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql1="UPDATE vaccinate SET 1st_Vno='".$first_Vno."' WHERE Cssn='".$Cssn."'";
    }
    if($first_date==NULL){
        $sql2="UPDATE vaccinate SET 1st_date=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql2="UPDATE vaccinate SET 1st_date='".$first_date."' WHERE Cssn='".$Cssn."'";
    }

    if($first_hosp==NULL){
        $sql3="UPDATE vaccinate SET 1st_hosp=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql3="UPDATE vaccinate SET 1st_hosp='".$first_hosp."' WHERE Cssn='".$Cssn."'";
    }

    if($second_Vno == NULL){
        $sql4="UPDATE vaccinate SET 2nd_Vno=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql4="UPDATE vaccinate SET 2nd_Vno='".$second_Vno."' WHERE Cssn='".$Cssn."'";
    }

    if($second_date == NULL){
        $sql5="UPDATE vaccinate SET 2nd_date=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql5="UPDATE vaccinate SET 2nd_date='".$second_date."' WHERE Cssn='".$Cssn."'";
    }

    if($second_hosp==NULL){
        $sql6="UPDATE vaccinate SET 2nd_hosp=NULL WHERE Cssn='".$Cssn."'";
    }
    else{
        $sql6="UPDATE vaccinate SET 2nd_hosp='".$second_hosp."' WHERE Cssn='".$Cssn."'";
    }


    $ret=mysqli_query($con, $sql);
    $ret1=mysqli_query($con, $sql1);
    $ret2=mysqli_query($con, $sql2);
    $ret3=mysqli_query($con, $sql3);
    $ret4=mysqli_query($con, $sql4);
    $ret5=mysqli_query($con, $sql5);
    $ret6=mysqli_query($con, $sql6);


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
    else{
        echo "<br>데이터 수정 실패!!"."<br>";
        echo "실패 원인:".mysqli_error($con);
    }
    mysqli_close($con);

    echo "<br><form action='new_yu_hospital_vaccinate_list.php' method='POST'>
    <input type='hidden' name='uid' value='$username'/>
    <button type='submit'>메인페이지</button>
    </form>";
    ?>
    
    </BODY>
</HTML>