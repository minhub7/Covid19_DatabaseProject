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
        $ssn = $_POST[ 'ssn' ];
        $jb_result = mysqli_query( $jb_conn, $select_ssn );
        $select_ssn = mysqli_fetch_array( $jb_result );
        if ( is_null( $ssn ) ) {
          echo 'alert(삭제를 실패했습니다)';
        } else {
            $jb_sql = "DELETE FROM citizens WHERE Ssn = '$ssn';";
            $ret =  mysqli_query( $jb_conn, $jb_sql );
        }
    ?>
      <div class="box" style="padding-top: 20px;">
      <table class="main-table">
        <tr>
          <td><img src="./check.png" style="width: 50px; height: auto;"></td>
          <td><p class="text-box">삭제되었습니다</p></td>
        </tr>
      </table>
      <form action="government.php" method="POST">
      <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
        <button>Go</button>
      </form>
    </div>
  </body>
</html>