<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Update Vaccines</title>
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
        $SerialNo = $_POST[ 'SerialNo' ];
        $MfgCo = $_POST[ 'MfgCo' ];
        $MfgDate = $_POST[ 'MfgDate' ];
        $Exp = $_POST[ 'Exp' ];
        $Owned = $_POST[ 'Owned' ];

        $select_SerialNo = "SELECT * FROM vaccines WHERE SerialNo = '$SerialNo'";
        $jb_1st_vac_sql = "SELECT * FROM vaccinate WHERE 1st_Vno = '$SerialNo';";
        $jb_2nd_vac_sql = "SELECT * FROM vaccinate WHERE 2nd_Vno = '$SerialNo';";

        $jb_result = mysqli_query( $jb_conn, $select_SerialNo );
        $jb_result2 = mysqli_query( $jb_conn, $jb_1st_vac_sql );
        $jb_result3 = mysqli_query( $jb_conn, $jb_2nd_vac_sql );

        $select_SerialNo = mysqli_fetch_array( $jb_result );
        $jb_1st_vac = mysqli_fetch_array( $jb_result2 );
        $jb_2nd_vac = mysqli_fetch_array( $jb_result3 );

        if ( is_null( $SerialNo ) ) {
          echo '<script>alert(일련번호 입력하세요)</script>';
        } else {
            $jb_sql = "UPDATE vaccines SET SerialNo = '$SerialNo', MfgCo = '$MfgCo', MfgDate = '$MfgDate', Exp = '$Exp', Owned = '$Owned' WHERE SerialNo = '$SerialNo';";
            $ret =  mysqli_query( $jb_conn, $jb_sql );
        }


    ?>
      <div class="box" style="padding-top: 20px;">
      <table class="main-table">
        <tr>
          <td><img src="./check.png" style="width: 50px; height: auto;"></td>
          <td><p class="text-box">백신 정보 수정에 성공하셨습니다</p></td>
        </tr>
      </table>
      <form action="Moderna.php" method="POST">
      <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
        <button>Go</button>
      </form>
    </div>
  </body>
</html>