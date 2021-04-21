
<?php 
    session_start();
    session_unset();
    session_destroy();
?>
<html>
    <head>
        <meta name="google-signin-client_id" content="478138733320-akab5qmsgi9jjic6ps4vsei4vtb988th.apps.googleusercontent.com">
    </head>
    <body>
        <script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>
        <script>
            window.onLoadCallback = function(){
                gapi.load('auth2', function() {
                    gapi.auth2.init().then(function(){
                        var auth2 = gapi.auth2.getAuthInstance();
                        auth2.signOut().then(function () {
                            document.location.href = '/index.php';
                        });
                    });
                });
            };
        </script>
    </body>
</html>

<?php 


?>