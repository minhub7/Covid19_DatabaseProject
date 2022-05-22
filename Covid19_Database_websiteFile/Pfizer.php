<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>Pfizer_Web</title>
        <style>
            .citizen{ border: 1px solid yellow; }
            body { background-color:#F8F8F8;}
            .main-box{
                background-color: none;
                width: 900px;
                margin: 0 auto;
            }
            .vaccine-box{
                width: 900px;
                height: 175px;
                margin: 0 auto;
                background-color: white;
            }
            .empty{
                width: 900px;
                height: 20px;
                margin: 0 auto;
            }
            .title{
                color: red;
                font-weight: 800;
                font-size: 16px;
                padding-left: 150px;
                padding-top: 20px;
                padding-bottom: 10px;
            }
            table{
                margin: 0 auto;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <?php
            $username=$_POST['uid'];
            $conn= mysqli_connect('localhost', 'root', '1234', 'newcovid19db');
            $sql="SELECT Dept FROM manager where MgrID='$username' ";
            $result=mysqli_fetch_array(mysqli_query($conn,$sql));
            if ($result['Dept'] == "government"||$result['Dept'] == "Pfizer"){

            }
            else{
                echo "<script>alert('권한이 없습니다');</script>";
                echo "<form action='main.php' method='POST'>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit' id='tmpBtn' onclidk='tmpConsole()'></button>
                        </form>";
                echo "<script type='text/javascript'>
                            document.getElementById('tmpBtn').click();
                        </script>";
            }
    ?>
    <h1>Pfizer Web Page</h1>

    <div class="main-box" style="padding-top: 20px;">
        <span class="sub-title">Current Status of COVID-19</span><br>
        <span class="main-title"></span>
    </div>
    </div>
        <form action='Pfizer_add.php' method='POST'>
            <input type='hidden' name='uid' value='<?php echo $username; ?>'/>
            <button type='submit' class="register-btn">등록</button>
        </form>
        <form action='M_Pre-order_add.php' method='POST'>
            <input type='hidden' name='uid' value='<?php echo $username; ?>'/>
            <button type='submit' class="register-btn">생산예정등록</button>
        </form>
    </div>

    </div>
    <!-- <div class="vaccine-box" style="height: 200px;">
        <div class="title">사용가능한 백신 재고량</div> -->
        <table border=1>
        <thead>
            <tr>
                <th>사용가능한 백신 재고량</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $jb_conn = mysqli_connect("localhost", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!"); // 호스트명, 계정명, 비밀번호, 데이터베이스명
                $cnt_vac = "SELECT count(*) FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno)
                            WHERE MfgCo = 'Pfizer' AND MfgDate <= CURDATE() AND Exp >= CURDATE() AND (1st_date IS NULL AND 2nd_date IS NULL)"; // 접속 연결자, sql문
                $jb_result = mysqli_query( $jb_conn, $cnt_vac );
                $vac0 = mysqli_fetch_array($jb_result);
                
                // Pfizer table 출력
                echo "<TR>";
                echo "<td>", $vac0[0], "</td>";
                echo "</TR>";

                mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>
    <table border=1>
        <thead>
            <tr>
                <th>No.</th>
                <th>생산번호</th>
                <th>제조사</th>
                <th>제조일</th>
                <th>유통기한</th>
                <th>보유기관</th>
                <th>수정</th>
                <th>삭제</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $jb_conn = mysqli_connect("localhost", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_sql = "SELECT * FROM newcovid19db.vaccines 
                LEFT OUTER JOIN newcovid19db.vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno)
                WHERE vaccines.MfgCo = 'Pfizer' AND vaccines.MfgDate <= CURDATE() AND vaccines.Exp >= CURDATE() AND (1st_date IS NULL AND 2nd_date IS NULL)";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );

                $num = 1;
                while($row = mysqli_fetch_array($jb_result)){
                    echo "<TR>";
                    echo "<td>", $num ,"</td>";
                    echo "<TD>", $row['SerialNo'], "</TD>";
                    echo "<TD>", $row['MfgCo'], "</TD>";
                    echo "<TD>", $row['MfgDate'], "</TD>";
                    echo "<TD>", $row['Exp'], "</TD>";
                    echo "<TD>", $row['Owned'], "</TD>";
                    echo "<TD>
                        <form action='Pfizer_edit2.php' method='POST'>
                            <input type='hidden' name='SerialNo' value='$row[SerialNo]'/>
                            <input type='hidden' name='MfgCo' value='$row[MfgCo]'/>
                            <input type='hidden' name='MfgDate' value='$row[MfgDate]'/>
                            <input type='hidden' name='Exp' value='$row[Exp]'/>
                            <input type='hidden' name='Owned' value='$row[Owned]'/>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit'>수정</button>
                        </form>
                    </TD>";
                    echo "<TD>
                        <form action='Pfizer_delete.php' method='POST'>
                            <input type='hidden' name='SerialNo' value='$row[SerialNo]'/>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit'>삭제</button>
                        </form>
                    </TD>";
                    echo "</TR>";
                    $num++;
                }
                
                mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>
    </div>
    <div class="empty"></div>



    <br>

    <table border=1>
        <thead>
            <tr>
                <th>사용한 백신 수</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $jb_conn = mysqli_connect("localhost", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                //$cnt_vac = "SELECT count(*) FROM VACCINES WHERE MfgCo = 'Pfizer' AND MfgDate <= CURDATE()
                //            AND EXISTS (SELECT * FROM VACCINES, VACCINATE WHERE VACCINES.SerialNo = VACCINATE.1st_Vno OR VACCINES.SerialNo = VACCINATE.2nd_Vno)";
                $cnt_vac = "SELECT count(*) FROM VACCINES, VACCINATE
                            WHERE MfgCo = 'Pfizer' AND MfgDate <= CURDATE() AND (VACCINES.SerialNo = VACCINATE.1st_Vno OR VACCINES.SerialNo = VACCINATE.2nd_Vno)";
                $jb_result = mysqli_query( $jb_conn, $cnt_vac );
                $vac0 = mysqli_fetch_array($jb_result);
                
                echo "<TR>";
                echo "<td>", $vac0[0], "</td>";
                echo "</TR>";

                mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>
    <table border=1>
        <thead>
            <tr>
                <th>No.</th>
                <th>생산번호</th>
                <th>제조사</th>
                <th>제조일</th>
                <th>유통기한</th>
                <th>보유기관</th>
                <th>사용날짜</th>
                <th>수정</th>
                <th>삭제</th>
            </tr>
        </thead>
        <tbody>
            <?php
                 $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_sql = "SELECT * 
                FROM newcovid19db.vaccines, newcovid19db.vaccinate
                WHERE vaccines.MfgCo = 'Pfizer' AND MfgDate <= CURDATE() AND (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno)";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );

                $num = 1;
                while($row = mysqli_fetch_array($jb_result)){
                    echo "<TR>";
                    echo "<td>", $num ,"</td>";
                    echo "<TD>", $row['SerialNo'], "</TD>";
                    echo "<TD>", $row['MfgCo'], "</TD>";
                    echo "<TD>", $row['MfgDate'], "</TD>";
                    echo "<TD>", $row['Exp'], "</TD>";
                    echo "<TD>", $row['Owned'], "</TD>";
                    if($row['SerialNo'] == $row['1st_Vno']){
                        $date = $row['1st_date'];
                    }
                    else{
                        $date = $row['2nd_date'];
                    }
                    echo "<TD>", $date, "</TD>";
                    echo "<TD>
                        <form action='Pfizer_edit.php' method='POST'>
                            <input type='hidden' name='SerialNo' value='$row[SerialNo]'/>
                            <input type='hidden' name='MfgCo' value='$row[MfgCo]'/>
                            <input type='hidden' name='MfgDate' value='$row[MfgDate]'/>
                            <input type='hidden' name='Exp' value='$row[Exp]'/>
                            <input type='hidden' name='Owned' value='$row[Owned]'/>
                            <input type='hidden' name='date' value='$date'/>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit'>수정</button>
                        </form>
                    </TD>";
                    echo "<TD>
                        <form action='Pfizer_delete.php' method='POST'>
                            <input type='hidden' name='SerialNo' value='$row[SerialNo]'/>
                            <input type='hidden' name='uid' value='$username'/>
                            <button type='submit'>삭제</button>
                        </form>
                    </TD>";
                    echo "</TR>";
                    $num++;
                }
                
                mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>

    <br>

    <table border=1>
        <thead>
            <tr>
                <th>사용불가 백신 수</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $cnt_vac = "SELECT count(*) FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno)
                            WHERE MfgCo = 'Pfizer' AND MfgDate <= CURDATE() AND Exp <= CURDATE() AND (1st_date IS NULL AND 2nd_date IS NULL)";
                $jb_result = mysqli_query( $jb_conn, $cnt_vac );
                $vac0 = mysqli_fetch_array($jb_result);
                
                echo "<TR>";
                echo "<td>", $vac0[0], "</td>";
                echo "</TR>";

                mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>
    <table border=1>
        <thead>
            <tr>
                <th>No.</th>
                <th>생산번호</th>
                <th>제조사</th>
                <th>제조일</th>
                <th>유통기한</th>
                <th>보유기관</th>
                <th>수정</th>
                <th>삭제</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_sql = "SELECT * FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno)
                            WHERE MfgCo = 'Pfizer' AND MfgDate <= CURDATE() AND Exp <= CURDATE() AND (1st_date IS NULL AND 2nd_date IS NULL)";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );

                $num = 1;
                while($row = mysqli_fetch_array($jb_result)){
                    echo "<TR>";
                    echo "<td>", $num ,"</td>";
                    echo "<TD>", $row['SerialNo'], "</TD>";
                    echo "<TD>", $row['MfgCo'], "</TD>";
                    echo "<TD>", $row['MfgDate'], "</TD>";
                    echo "<TD>", $row['Exp'], "</TD>";
                    echo "<TD>", $row['Owned'], "</TD>";
                    echo "<TD>
                    <form action='Pfizer_edit.php' method='POST'>
                        <input type='hidden' name='SerialNo' value='$row[SerialNo]'/>
                        <input type='hidden' name='MfgCo' value='$row[MfgCo]'/>
                        <input type='hidden' name='MfgDate' value='$row[MfgDate]'/>
                        <input type='hidden' name='Exp' value='$row[Exp]'/>
                        <input type='hidden' name='Owned' value='$row[Owned]'/>
                        <input type='hidden' name='uid' value='$username'/>
                        <button type='submit'>수정</button>
                    </form>
                </TD>";
                echo "<TD>
                    <form action='Pfizer_delete.php' method='POST'>
                        <input type='hidden' name='SerialNo' value='$row[SerialNo]'/>
                        <input type='hidden' name='uid' value='$username'/>
                        <button type='submit'>삭제</button>
                    </form>
                </TD>";
                echo "</TR>";
                $num++;
                }
                
                mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>

    <br>

    <table border=1>
        <thead>
            <tr>
                <th>생산예정 백신 수</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $cnt_vac = "SELECT count(*) FROM PRE_ORDERS WHERE MfgCo = 'Pfizer' AND MfgDate > CURDATE()";
                $jb_result = mysqli_query( $jb_conn, $cnt_vac );
                $vac0 = mysqli_fetch_array($jb_result);
                
                echo "<TR>";
                echo "<td>", $vac0[0], "</td>";
                echo "</TR>";

                mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>
    <table border=1>
        <thead>
            <tr>
                <th>No.</th>
                <th>생산번호</th>
                <th>제조사</th>
                <th>제조일</th>
                <th>유통기한</th>
                <th>구매자ID</th>
                <th>배송일</th>
                <th>수정</th>
                <th>삭제</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $jb_conn = mysqli_connect("localhost:3306", "root", "1234", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_sql = "SELECT * FROM newcovid19db.pre_orders 
                WHERE pre_orders.MfgCo = 'Pfizer' AND pre_orders.MfgDate > CURDATE()";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );

                $num = 1;
                while($row = mysqli_fetch_array($jb_result)){
                    echo "<TR>";
                    echo "<td>", $num ,"</td>";
                    echo "<TD>", $row['SerialNo'], "</TD>";
                    echo "<TD>", $row['MfgCo'], "</TD>";
                    echo "<TD>", $row['MfgDate'], "</TD>";
                    echo "<TD>", $row['Exp'], "</TD>";
                    echo "<TD>", $row['CustomerID'], "</TD>";
                    echo "<TD>", $row['Deliverydate'], "</TD>";
                    echo "<TD>
                    <form action='P_Pre-order_edit.php' method='POST'>
                        <input type='hidden' name='SerialNo' value='$row[SerialNo]'/>
                        <input type='hidden' name='MfgCo' value='$row[MfgCo]'/>
                        <input type='hidden' name='MfgDate' value='$row[MfgDate]'/>
                        <input type='hidden' name='Exp' value='$row[Exp]'/>
                        <input type='hidden' name='CustomerID' value='$row[CustomerID]'/>
                        <input type='hidden' name='Deliverydate' value='$row[Deliverydate]'/>
                        <input type='hidden' name='uid' value='$username'/>
                        <button type='submit'>수정</button>
                    </form>
                </TD>";
                echo "<TD>
                    <form action='P_Pre-order_delete.php' method='POST'>
                        <input type='hidden' name='SerialNo' value='$row[SerialNo]'/>
                        <input type='hidden' name='uid' value='$username'/>
                        <button type='submit'>삭제</button>
                    </form>
                </TD>";
                    echo "</TR>";
                    $num++;
                }
                
                mysqli_close($jb_conn);
            ?>
        </tbody>
    </table>

    <br>

    <!-- <table border=1>
        <thead>
            <tr>
                <th>총 백신 수</th>
            </tr>
        </thead>
        <tbody>
            <?php
                /*$jb_conn = mysqli_connect("localhost", "root", "21720953", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $cnt_vac = "SELECT count(*) FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) WHERE MfgCo = 'Pfizer'";
                $jb_result = mysqli_query( $jb_conn, $cnt_vac );
                $vac0 = mysqli_fetch_array($jb_result);
                
                echo "<TR>";
                echo "<td>", $vac0[0], "</td>";
                echo "</TR>";

                mysqli_close($jb_conn);*/
            ?>
        </tbody>
    </table>
    <table border=1>
        <thead>
            <tr>
                <th>No.</th>
                <th>생산번호</th>
                <th>제조사</th>
                <th>제조일</th>
                <th>유통기한</th>
                <th>보유기관</th>
            </tr>
        </thead>
        <tbody>
            <?php
                /*$jb_conn = mysqli_connect("localhost", "root", "21720953", "newcovid19db") or die("Error!!:: Covid-19 DataBase 접속 실패!!");
                $jb_sql = "SELECT * FROM vaccines LEFT OUTER JOIN vaccinate ON (vaccines.SerialNo = vaccinate.1st_Vno OR vaccines.SerialNo = vaccinate.2nd_Vno) WHERE MfgCo = 'Pfizer' ORDER BY MfgDate ASC";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );

                $num = 1;
                while($row = mysqli_fetch_array($jb_result)){
                    echo "<TR>";
                    echo "<td>", $num ,"</td>";
                    echo "<TD>", $row['SerialNo'], "</TD>";
                    echo "<TD>", $row['MfgCo'], "</TD>";
                    echo "<TD>", $row['MfgDate'], "</TD>";
                    echo "<TD>", $row['Exp'], "</TD>";
                    echo "<TD>", $row['Owned'], "</TD>";
                    echo "</TR>";
                    $num++;
                }
                
                mysqli_close($jb_conn);*/
            ?>
      </tbody>
    </table>

    <br> -->
    
    <a href='Newmain.php'> <--Government화면으로... </a>
    
  </body>
</html>