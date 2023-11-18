<div class="container">

    <?php
        $iphone = strpos($_SERVER['HTTP_USER_AGENT'], 'iphone');
        $android = strpos($_SERVER['HTTP_USER_AGENT'], 'Android');
        $palmpre = strpos($_SERVER['HTTP_USER_AGENT'], 'webOS');
        $berry = strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry');
        $ipod = strpos($_SERVER['HTTP_USER_AGENT'], 'ipod');
        if($iphone || $android || $palmpre || $berry || $ipod){
            echo 'estamos en un Movil';
        }else{
            echo 'estamos en un PC';
        }
    ?>
    <div class="container h-100d-md-none">
        <img src="img/movil.jpg" alt="">
    </div>
    <div class="d-none d-sm-none d-md-block">
        <img src="img/pc.jpg" alt="">
    </div>
</div>