<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Update Employee</title>
    <style>
        body { 
            background-color:#F8F8F8; 
        }
        .main-box{
            background-color: none;
            width: 900px;
            margin: 0 auto;
        }
        .box{
            background-color: white;
            width: 900px;
            margin-top: 20px;
            margin: 0 auto;
            text-align: center;
        }
        .main-table{
          text-align: center;
          margin: 0 auto;
        }
        .text-box{
          font-weight: 800;
        }
    </style>
  </head>
  <body>

    <?php
        $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'newcovid19db' );
        $username = $_POST[ 'uid' ];
        $serialno = $_POST[ 'SerialNo' ];
        $ssn = $_POST[ 'MfgCo' ];
        $name = $_POST[ 'MfgDate' ];
        $sex = $_POST[ 'Exp' ];
        $age = $_POST[ 'Owend' ];
        if ( is_null( $ssn ) ) {
          echo 'alert(시리얼번호를 입력하세요)';
        } else {
            $jb_sql = "INSERT INTO vaccines VALUES('$serialno', '$ssn', '$name', '$sex', '$age')";
            $ret =  mysqli_query( $jb_conn, $jb_sql );
        }
    ?>
      <div class="box" style="padding-top: 20px;">
      <table class="main-table">
        <tr>
          <td><img src="./check.png" style="width: 50px; height: auto;"></td>
          <td><p class="text-box">화이자 정보 등록에 성공하셨습니다</p></td>
        </tr>
      </table>
      <form action="Pfizer.php" method="POST">
      <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
        <button>Go</button>
      </form>
    </div>
  </body>
</html>