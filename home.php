<?php 
    $user = $_REQUEST['user'];
?>
<html>
<head>
    <title>HOME</title>
</head>
<body>
    <h1>welcome <?php echo $user;?></h1>
    <button type="submit" onclick="logout()">Logout</button>
    <script>
        function logout() {
            document.location.href = 'login.php';
        }
    </script>    
</body>
</html>