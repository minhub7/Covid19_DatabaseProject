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
            <div class="title-box">국민 등록</div>
            <?php
                $username = $_POST[ 'uid' ];
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'newcovid19db' );
            ?>
            <form action="government_add_update.php" method="POST">
                <table> 
                    <tr>
                        <td class="first"><span>ssn:</span></td> 
                        <td><input type="text" name="ssn"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>name:</span></td> 
                        <td><input type="text" name="name"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>sex:</span></td> 
                        <td>
                            <select name="sex" required>
                                <option value="M" >M</option>
                                <option value="F" >F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="first"><span>age:</span></td> 
                        <td><input type="text" name="age"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>addr1:</span></td> 
                        <td><input type="text" name="addr1" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>addr2:</span></td> 
                        <td><input type="text" name="addr2" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>addr3:</span></td> 
                        <td><input type="text" name="addr3" required></td>
                    </tr>
                    <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                </table>

                <button>Edit</button>
            </form>
        </div>
    </div>


  </body>
</html>