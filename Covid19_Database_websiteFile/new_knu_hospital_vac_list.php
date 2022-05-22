<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>경대병원</title> 
    <td width="1920dp" align='center'>
          <img src="./banner.png" >
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
            background-color: #da2128;
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
            font-weight: 800;
        }

         .hospital_info-table .hospital_info-th td{
            width:  160px;
            height: 40px;
            color: white;
            background-color:#b48b59;
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
                    <form action="new_knu_hospital_mainpage.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">경대병원</button>
                    </form>
                </td>
                <td>
                    <form action="new_knu_hospital_vaccinate_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">백신접종리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_knu_hospital_vac_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn" style="background-color: #da2128;">백신 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_knu_hospital_patients_list.php" method="POST">
                        <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                        <button class="btn">환자 리스트</button>
                    </form>
                </td>
                <td>
                    <form action="new_knu_hospital_testers_list.php" method="POST">
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

    <!-- 백신보유현황 -->
   <div class="hospital_info-box">
    <div align="center"class="title">백신 모더나 리스트</div>
    <div style="margin: 0 auto; width: 674px; max-height: 200px; overflow-y: scroll;">
    <table align="center"class="hospital_info-table">
         <thead class="hospital_info-th">
            <tr>
                 <td>순서</td>
                 <td>백신생산번호</td>
                 <td>백신제조일</td>
                 <td>백신만료일</td>
            </tr>
         </head>
         <tbody>
        <?php
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_moderna_sql_all = "SELECT * FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) WHERE Owned = '경대병원' AND MfgCo = 'moderna' AND MfgDate <= CURDATE() AND Exp >= CURDATE() AND (1st_date IS NULL AND 2nd_date IS NULL)";
                $jb_moderna_result = mysqli_query( $jb_conn, $jb_moderna_sql_all );

                while($row_moderna = mysqli_fetch_array($jb_moderna_result))
                { 
                         echo "<TR>";
                         echo "<TD>", "모더나 백신", "</TD>";
                         echo "<TD>", $row_moderna['SerialNo'], "</TD>";
                         echo "<TD>", $row_moderna['MfgDate'], "</TD>";
                         echo "<TD>", $row_moderna['Exp'], "</TD>";
                        //  echo "<TD><div class=num>", $row_moderna['count(MfgCo)'], "</div><div class=danwi>개</div></TD>";
                         echo "</TR>";
                }
                 mysqli_close($jb_conn); 
        ?>
        </tbody>
 
     </table>
     </div>
</div>


<div class="hospital_info-box">
    <div align="center"class="title">백신 화이자 리스트</div>
    <div style="margin: 0 auto; width: 674px; max-height: 200px; overflow-y: scroll;">
    <table align="center"class="hospital_info-table">
         <thead class="hospital_info-th">
             <tr>
                 <td>순서</td>
                 <td>백신생산번호</td>
                 <td>백신제조일</td>
                 <td>백신만료일</td>
                 
             </tr>
         </head>
         <tbody>
        <?php
                 $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                 $jb_pfizer_sql = "SELECT * FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) WHERE Owned = '경대병원' AND MfgCo = 'pfizer' AND MfgDate <= CURDATE() AND Exp >= CURDATE() AND (1st_date IS NULL AND 2nd_date IS NULL)";
                 $jb_pfizer_result = mysqli_query( $jb_conn, $jb_pfizer_sql );
               
                 while($row_pfizer = mysqli_fetch_array($jb_pfizer_result)){ 
                   echo "<TR>";
                   echo "<TD>", "화이자 백신", "</TD>";
                   echo "<TD>", $row_pfizer['SerialNo'], "</TD>";
                    echo "<TD>", $row_pfizer['MfgDate'], "</TD>";
                    echo "<TD>", $row_pfizer['Exp'], "</TD>";
                //    echo "<TD><div class=num>", $row_pfizer['count(MfgCo)'], "</div><div class=danwi>개</div></TD>";
                   echo "</TR>";
                 
                }
                mysqli_close($jb_conn); 
        ?>
              
       </tbody>
 
     </table>
     </div>
            </div>
 
     
   </body>
 </html>