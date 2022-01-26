<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網站聯繫表單</title>
    <!--=== CSS Link And CDN ===-->
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/Work.css">

</head>

<body>
    <div id="container">
        <form id="validationForm" method="POST">
            <label for="email-name">姓名</label>
            <input id="email-name" class="input-style input-width" type="text" name="name" placeholder="請輸入姓名">

            <label for="email-address">email帳號</label>
            <input id="email-address" class="input-style input-width" name="email" type="text" placeholder="請輸入電子郵件" autocomplete="off">

            <label for="mail-gender">性別</label>
            <select id="mail-gender" class="input-style input-width" name="gender">
                <option value="">請選擇你的性別</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
            </select>

            <label for="pass1">密碼</label>
            <input id="pass1" class="input-style input-width" name="pass1" type="password" placeholder="請輸入密碼">

            <label for="pass2">確認密碼</label>
            <input id="pass2" class="input-style input-width" name="pass2" type="password" placeholder="確認密碼">

            <textarea name="message" id="mail-message" cols="80" rows="8" placeholder="描述狀況"></textarea>

            <button id="submitButton" type="submit" name="submit">發送郵件</button>
        </form>
        <div id="error"></div>
    </div>
    
</body>
<!--===== Javascript Link And CDN =====-->
<!-- Bootstrap5製作的JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Google Jquery 3.5.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/Work.js"></script>
<!-- <script src="/CSSWork.js"></script> -->
</html>