<?php

  session_start();

  if(isset($_POST["btnOK"])){
    if($_POST["txtUserName"]!=null && $_POST["txtPassword"] !=null){
      $_SESSION["uid"] = $_POST["txtUserName"];
      if(isset($_SESSION["lastpage"])){              // 如果有設置就跳轉到會員頁
        header("Location: secret.php");
        exit();
      }     
      else{
        header("Location: index.php");
        exit();
      }
    }
  }
  if(isset($_GET["login"])){
    unset($_SESSION["uid"]);
    unset($_SESSION["lastpage"]);
    header("Location: index.php");
    exit();
  }
  

?>


<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="200" align="center" valign="baseline">Email帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" placeholder="請輸入Email" pattern="\w+([.-]\w+)*@\w+([.-]\w+)+" require /></td>
    </tr>
    <tr>
      <td width="200" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" placeholder="請輸入密碼" require /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><input type="submit" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>;
