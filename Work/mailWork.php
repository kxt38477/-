<?php
if (isset($_POST["submit"])) {  //isset函數用來檢測變量是否設置，並非Null

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $message = $_POST["message"];

    $errorEmpty = false;
    $errorEmail = false;
    $errorPass = false;

    if (empty($name) || empty($email) || empty($pass1) || empty($pass2) || empty($message)) {

        echo "<span class='form-error'>請輸入完整訊息!</span>";
        $errorEmpty = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "<span class='form-error'>請輸入正確的電子郵件!</span>";
        $errorEmail = true;
    } elseif ($pass1 != $pass2) {

        echo "<span class='form-error'>請確認輸入的是相同的密碼</span>";
        $errorPass = true;
    } else {

        $mailToname = "sam123.com";
        $mailTo = "sam867162006@gmail.com";
        $mailFromname = $name;
        $mailFrom =  'MIME-Version: 1.0' . "\r\n";
        $mailFrom .= "From: Your name $email" . "\r\n";
        $mailFrom .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $mailSubject = "網站聯繫表單";
        $mailContent = "
            姓名:'.$name'
            訊息內容:
            " . $message;

        if (mail($mailTo, $mailSubject, $mailContent, $mailFrom)) {

            echo "<span class='form-success'>郵件發送成功</span>";
        } else {

            echo "<span class='form-error'>郵件發送失敗</span>";
        }
    }
} else {

    echo "<span class='form-error'>網路錯誤請稍後再試</span>";
}

?>

<script>
    $("#email-name, #email-address, #pass1, #pass2, #mail-message").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";
    var errorPass = "<?php echo $errorPass; ?>";

    if (errorEmpty == true) {

        $("#email-name, #email-address, #pass1, #pass2, #mail-message").addClass("input-error");

    }

    if (errorEmail == true) {

        $("#email-address").addClass("input-error");

    }

    if (errorPass == true) {

        $("#pass1,#pass2").addClass("input-error");

    }
</script>