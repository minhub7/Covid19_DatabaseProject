<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>모더나수정</title>
    <style>
        body { 
            background-color:#F8F8F8; 
        }
        .title-box{
            background-color: white;
            width: 900px;
            margin: 0 auto;
            text-align: center;
            font-size: 25px;
            font-weight: 700;
        }
        .box{
            background-color: white;
            width: 900px;
            margin-top: 20px;
            margin: 0 auto;
            text-align: center;
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
        table{
            margin: 0 auto;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table tr{
            height: 40px;
            border-bottom: 1px solid grey;
        }
        .first{
            width: 100px;
            text-align: left;
            font-weight: 600;
            background-color: #E7E7E7;
        }
        span{
            margin-left: 20px;
        }
    </style>
  </head>
  <body>
    <div class="main-box" style="padding-top: 20px;">
        <span class="sub-title">Current Status of COVID-19</span><br>
        <span class="main-title"><span class="korea">대한민국</span> 코로나-19 현황</span>
    </div>
    <div class="main-box">
        <div class="box">
            <div class="title-box">백신 정보 수정</div>
            <?php
                $username = $_POST[ 'uid' ];
                $SerialNo = $_POST[ 'SerialNo' ];
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'newcovid19db' );
                $jb_sql_edit = "SELECT * FROM vaccines WHERE SerialNo = '$SerialNo';";
                $jb_result = mysqli_query( $jb_conn, $jb_sql_edit );
                $jb_row = mysqli_fetch_array( $jb_result );
                $MfgCo = $_POST[ 'MfgCo' ];
                $MfgDate = $_POST[ 'MfgDate' ];
                $Exp = $_POST[ 'Exp' ];
                $Owned = $_POST[ 'Owned' ];
            ?> 
            <form action="Moderna_edit_update2.php" method="POST">
                <table> 
                    <tr>
                        <td class="first"><span>SerialNo:</span></td> 
                        <td><input type="text" name="SerialNo" value="<?php echo $SerialNo; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>MfgCo:</span></td> 
                        <td>
                            <select name="MfgCo" required>
                                <option value="moderna">Moderna</option>
                                <option value="pfizer">Pfizer</option>
                        </td>
                    </tr>
                    <tr>
                        <td class="first"><span>MfgDate:</span></td> 
                        <td><input type="date" name="MfgDate" value="<?php echo $MfgDate; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>Exp:</span></td> 
                        <td><input type="date" name="Exp" value="<?php echo $Exp; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>Owned:</span></td> 
                        <td>
                            <select name="Owned" required>
                                <option value="경대병원">경대병원</option>
                                <option value="영대병원">영대병원</option>
                                <option value="대구병원">대구병원</option>
                        </td>
                    </tr>
                    <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                </table>

                <button>Edit</button>
            </form>
        </div>
    </div>


  </body>
</html>
