<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Update Manager</title>
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
        $MgrID = $_POST[ 'MgrID' ];
        $Password = $_POST[ 'Password' ];
        $Name = $_POST[ 'Name' ];
        $Ssn = $_POST[ 'Ssn' ];
        $Telephone = $_POST[ 'Telephone' ];
        $Email = $_POST[ 'Email' ];
        $Dept = $_POST[ 'Dept' ]; 
        $jb_sql = "UPDATE manager SET MgrID = '$MgrID', Password = '$Password', Name = '$Name', Ssn = '$Ssn', Telephone = '$Telephone', Email = '$Email', Dept = '$Dept' WHERE MgrID = '$MgrID';";
        $ret =  mysqli_query( $jb_conn, $jb_sql );

    ?>
      <div class="box" style="padding-top: 20px;">
      <table class="main-table">
        <tr>
          <td><img src="./check.png" style="width: 50px; height: auto;"></td>
          <td><p class="text-box">관리자 정보 수정에 성공하셨습니다</p></td>
        </tr>
      </table>
      <form action="Manager.php" method="POST">
      <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
        <button>Go</button>
      </form>
    </div>
  </body>
</html>