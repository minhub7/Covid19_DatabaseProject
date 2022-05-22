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
        $Cssn = $_POST[ 'Cssn' ];
        $Testdate = $_POST[ 'Testdate' ];
        $Testnum = $_POST[ 'Testnum' ];
        $jb_sql = "SELECT COUNT(*) FROM citizens WHERE Ssn='$Cssn'";
        $jb_result = mysqli_query( $jb_conn, $jb_sql ); // 쿼리 실행
        $ret = mysqli_fetch_array($jb_result);

        $jb_sql = "SELECT COUNT(*) FROM testers WHERE Cssn='$Cssn'";
        $jb_result = mysqli_query( $jb_conn, $jb_sql ); // 쿼리 실행
        $same_Hcode = mysqli_fetch_array($jb_result);

        if ($ret[0] ==1){
            if($same_Hcode[0] ==1 ){
                echo "<script>alert('이미 검진자 테이블에 존재하는 시민 입니다.');</script>";
                echo "<form action='new_knu_testers_new.php' method='POST'>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit' id='tmpBtn' onclidk='tmpConsole()'></button>
                        </form>";
                echo "<script type='text/javascript'>
                            document.getElementById('tmpBtn').click();
                        </script>";
            }
            $jb_sql = "INSERT INTO testers VALUES('$Cssn', '$Testdate', '$Testnum', '경대병원')";
            $ret =  mysqli_query( $jb_conn, $jb_sql );
        }
        else{
            echo "<script>alert('존재하지 않는 국민입니다.');</script>";
            echo "<form action='new_knu_testers_new.php' method='POST'>
                        <input type='hidden' name='uid' value='$username'/>
                        <button type='submit' id='tmpBtn' onclidk='tmpConsole()'></button>
                    </form>";
            echo "<script type='text/javascript'>
                        document.getElementById('tmpBtn').click();
                    </script>";
        }
    ?>
      <div class="box" style="padding-top: 20px;">
      <table class="main-table">
        <tr>
          <td><img src="./check.png" style="width: 50px; height: auto;"></td>
          <td><p class="text-box">시민 정보 수정에 성공하셨습니다</p></td>
        </tr>
      </table>
      <form action="new_knu_hospital_testers_list.php" method="POST">
      <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
        <button>Go</button>
      </form>
    </div>
  </body>
</html>