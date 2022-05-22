<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>국민수정</title>
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
            width: 150px;
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
        <span class="main-title"><span class="korea">모더나</span> 를 추가해 주세요</span>
    </div>
    <div class="main-box">
        <div class="box">
            <div class="title-box">백신 등록</div>
            <?php
                $username = $_POST[ 'uid' ];
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'newcovid19db' );
            ?>
            <form action="Moderna_add_update.php" method="POST">
                <table> 
                    <tr>
                        <td class="first"><span>시리얼번호:</span></td> 
                        <td><input type="text" name="SerialNo"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>제조사:</span></td> 
                        <td><input type="text" name="MfgCo" value="moderna" readonly></td>
                    </tr>
                    <tr>
                        <td class="first"><span>제조일:</span></td> 
                        <td><input type="date" name="MfgDate"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>유통기한:</span></td> 
                        <td><input type="date" name="Exp" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>소유 병원:</span></td>
                        <td>
                            <select name="Owend" required>
                                <option value="경대병원" >경대병원</option>
                                <option value="영대병원" >영대병원</option>
                                <option value="대구병원" >대구병원</option>
                            </select>
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