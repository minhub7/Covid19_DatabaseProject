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
        .input_btn {
            background-color:#0272BF;
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
                        <button class="btn" style="background-color: #0272BF" >환자 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_yu_hospital_testers_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn" >검진자 리스트</button>
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
        $con=mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
    ?>

<HTML>
    <HEAD>
    <META http-equiv="content-type" content="text/html; charset=utf-8">
    </HEAD>
    <BODY>
        <h1>환자 정보</h1>
        <form method="POST" action="new_yu_patients_new_result.php">
            <table>
                <tr>
                    <td>주민번호: </td>
                    <td><input TYPE="text" NAME="Cssn" required></td>
                </tr>
                <tr>
                    <td>환자코드: </td>
                    <td><input TYPE="text" NAME="Hcode" required></td>
                </tr>
                <tr>
                    <td>건물동:</td>
                    <td><input TYPE="text" NAME="Building" required></td>
                </tr>
                <tr>
                    <td>호실:</td>
                    <td><input TYPE="number" NAME="Room" required></td>
                </tr>
                <tr>
                    <td>혈액형:</td>
                    <td><input TYPE="text" NAME="Blood_type" required></td>
                </tr>
                <tr>
                    <td>입원일:</td>
                    <td><input TYPE="date" NAME="Hdate" required></td>
                </tr>
                <tr>
                    <td>퇴원일:</td>
                    <td><input TYPE="date" NAME="Odate" required></td>
                </tr>
                <tr>
                    <td>보호자연락쳐:</td>
                    <td><input TYPE="text" NAME="Tel_nok" required ></td>
                </tr>


            </table>
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>

            <input TYPE="submit" VALUE="환자정보추가" class = 'input_btn'>
        </form>
    

    </body>
    </html>
