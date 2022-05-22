<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>main</title>
    <style>
      .logo{
        width: 67px;
        height: auto;
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
            color: black;
        }
        .btn-box{
            background-color: white;
            border: 3px solid #0272BF;
            border-radius: 7px;
            width: 700px;
            height: 80px;
            margin: 0 auto;
            margin-top: 20px;
        }
        .btn-box:hover{
          border: 3px solid #131C69;

        }
        .box{
            width: 700px;
            margin: 0 auto;
        }
        span{
          color: #0272BF;
          font-size: 20px;
          font-weight: 800;
        }
        .btn{
          width: 696px;
          height: 76px;
          color: #0272BF;
          color: #0272BF;
          font-size: 20px;
          font-weight: 800;
        }
        .vaccine-btn{
          width: 100%;
          height: 50px;
          margin-top: 15px;
          border: none;
          background-color: #003764;
          border-radius: 7px;
          color: white;
        }
        .hospital-btn{
          width: 100%;
          height: 50px;
          margin-top: 15px;
          border: none;
          background-color: #003764;
          border-radius: 7px;
          color: white;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="box" style="padding-top: 20px;">
      <div style="width:76px; float: left;">
        <!-- <img class="logo" src="https://w.namu.la/s/66ddcaa4fd4bd8f08c4c6cdbaeb623369a65e4280ba3aac5395cbf8507d5fc64892f63b6426348a375123d8a74912b57a27e9e62bf05b7e00e3d6173dbe08ac46dd2604428bde0c2f32885c6502e52988c591317b49667c116c7252af0590f8e" alt="My Image"> -->
        <img class="logo" src="http://ojsfile.ohmynews.com/STD_IMG_FILE/2016/1103/IE002045362_STD.jpg" alt="My Image">
      </div>
      <div style="width:80%">
        <span class="sub-title">Current Status of COVID-19</span><br>
        <span class="main-title">종합관리시스템</span>
      </div>
    </div>
    <form action="government.php" method="POST">
        <div class="btn-box">
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
            <button class="btn" type="submit"><span>정부</span></button>
        </div>
    </form>
    <div class="btn-box">
        <button class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" type="submit">
            <span>제약사</span>
        </button>
    </div>
    <div class="box">
      <div class="collapse" id="collapseExample">
        <form action="Pfizer.php" method="POST">
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
            <button class="vaccine-btn">화이자</button>
        </form>
        <form action="moderna.php" method="POST">
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
            <button class="vaccine-btn">모더나</button>
        </form>
      </div>
    </div>
    <div class="btn-box">
        <button class="btn" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample" type="submit">
            <span>병원</span>
        </button>
    </div>
    <div class="box">
      <div class="collapse" id="collapseExample2">
        <form action="new_knu_hospital_mainpage.php" method="POST">
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
            <button class="hospital-btn">경대병원</button>
        </form>
        <form action="new_yu_hospital_mainpage.php" method="POST">
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
            <button class="hospital-btn">영대병원</button>
        </form>
        <form action="new_dg_hospital_mainpage.php" method="POST">
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
            <button class="hospital-btn">대구병원</button>
        </form>
      </div>
    </div>
    <div class="btn-box">
    <form action="Manager.php" method="POST">
    <button class="btn" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" type="submit">
            <span>사용자관리</span>
        </button>
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>"/>
        </form>
        
    </div>

  </body>
  <?php
        $username=$_POST['uid'];
      //<!--php부분 form에 입력한 내용을 데이터베이스와 비교해서 로그인 여부를 알려준다.-->
      if(isset($_POST['uid'])&&isset($_POST['pwd'])){//post방식으로 데이터가 보내졌는지?
        $username=$_POST['uid'];//post방식으로 보낸 데이터를 username이라는 변수에 넣는다.
        $userpw=$_POST['pwd'];//post방식으로 보낸 데이터를 userpw라는 변수에 넣는다.
        //mysql root계정으로 접속.
        //비밀번호는 123456이다.
        //study라는 데이터베이스에 접근.
        $conn= mysqli_connect('localhost', 'root', '1234', 'newcovid19db');
        //sql문을 sql변수에 저장해놓는다.
        $sql="SELECT * FROM manager where mgrID='$username' && password='$userpw'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공

        }
        else {//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
          echo "<script>alert('로그인실패');</script>";
          echo "<script>location.href='login.html';</script>";
        }
      }
    ?>
</html>