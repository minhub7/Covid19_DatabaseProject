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
            <div class="title-box">국민 정보 수정</div>
            <?php
                $username = $_POST[ 'uid' ];
                $ssn = $_POST[ 'ssn' ];
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'newcovid19db' );
                $jb_sql_edit = "SELECT * FROM citizens WHERE 'Ssn = $ssn';";
                $jb_result = mysqli_query( $jb_conn, $jb_sql_edit );
                $jb_row = mysqli_fetch_array( $jb_result );
                $name = $_POST[ 'name' ];
                $sex = $_POST[ 'sex' ];
                $age = $_POST[ 'age' ];
                $addr1 = $_POST[ 'addr1' ];
                $addr2 = $_POST[ 'addr2' ];
                $addr3 = $_POST[ 'addr3' ];

            ?>
            <form action="government_citizen_update.php" method="POST">
                <table> 
                    <tr>
                        <td class="first"><span>ssn:</span></td> 
                        <td><input type="text" name="ssn" value="<?php echo $ssn; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>name:</span></td> 
                        <td><input type="text" name="name" value="<?php echo  $name; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>sex:</span></td> 
                        <td>
                            <select name="sex" required>
                                <option value="M" <?php if ( $sex == 'M' ) { echo 'selected'; } ?>>M</option>
                                <option value="F" <?php if ( $sex == 'F' ) { echo 'selected'; } ?>>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="first"><span>age:</span></td> 
                        <td><input type="text" name="age" value="<?php echo $age; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>addr1:</span></td> 
                        <td><input type="text" name="addr1" value="<?php echo $addr1; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>addr2:</span></td> 
                        <td><input type="text" name="addr2" value="<?php echo $addr2; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>addr3:</span></td> 
                        <td><input type="text" name="addr3" value="<?php echo $addr3; ?>" required></td>
                    </tr>
                    <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                </table>

                <button>Edit</button>
            </form>
        </div>
    </div>


  </body>
</html>