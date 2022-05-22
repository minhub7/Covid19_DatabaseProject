<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>관리자 등록</title>
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
            <div class="title-box">관리자 등록</div>
            <?php
                $username = $_POST[ 'uid' ];
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'newcovid19db' );
            ?>
            <form action="manager_add_update.php" method="POST">
                <table> 
                    <tr>
                        <td class="first"><span>MgrID:</span></td> 
                        <td><input type="text" name="MgrID"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>Password:</span></td> 
                        <td><input type="text" name="Password"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>Name:</span></td> 
                        <td><input type="text" name="Name"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>Ssn:</span></td> 
                        <td><input type="text" name="Ssn"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>Telephone:</span></td> 
                        <td><input type="text" name="Telephone"  required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>Email:</span></td> 
                        <td><input type="text" name="Email" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>Dept:</span></td> 
                        <td><input type="text" name="Dept" required></td>
                    </tr>
                    <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
                </table>

                <button>Edit</button>
            </form>
        </div>
    </div>


  </body>
</html>