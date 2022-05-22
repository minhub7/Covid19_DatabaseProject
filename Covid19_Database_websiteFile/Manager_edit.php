<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>관리자 수정</title>
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
        <span class="sub-title">manager table</span><br>
        <span class="main-title"><span class="korea">사용자</span> 관리 페이지</span>
    </div>
    <div class="main-box">
        <div class="box">
            <div class="title-box">관리자 정보 수정</div>
            <?php
                $username = $_POST[ 'uid' ];
                $MgrID = $_POST[ 'MgrID' ];
                $Password = $_POST[ 'Password' ];
                $Name = $_POST[ 'Name' ];
                $Ssn = $_POST[ 'Ssn' ];
                $Telephone = $_POST[ 'Telephone' ];
                $Email = $_POST[ 'Email' ];
                $Dept = $_POST[ 'Dept' ];     
            ?> 
            <form action="Manager_edit_update.php" method="POST">
                <table> 
                    <tr>
                        <td class="first"><span>ID:</span></td> 
                        <td><input type="text" name="MgrID" value="<?php echo $MgrID; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="first"><span>PW:</span></td> 
                        <td><input type="text" name="Password" value="<?php echo $Password; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>이름:</span></td> 
                        <td><input type="text" name="Name" value="<?php echo $Name; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>주민번호:</span></td> 
                        <td><input type="text" name="Ssn" value="<?php echo $Ssn; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>전화번호:</span></td> 
                        <td><input type="text" name="Telephone" value="<?php echo $Telephone; ?>" required></td>
                    </tr>
                    <tr>
                        <td class="first"><span>이메일:</span></td> 
                        <td><input type="text" name="Email" value="<?php echo $Email; ?>" required></td>
                    </tr>
                    <tr>
                    <td class="first"><span>부서:</span></td> 
                        <td>
                            <select name="Dept" required>
                                <option value="government">government</option>
                                <option value="Pfizer">Pfizer</option>
                                <option value="Moderna">Moderna</option>
                                <option value="YUhosp">YUhosp</option>
                                <option value="KNUhosp">KNUhosp</option>
                                <option value="DAEGUhosp">DAEGUhosp</option>
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
