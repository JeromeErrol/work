<div class="container" id="content_container" style="margin-top: -20px;">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container" style="width:100%;height: 100%">
                <?php
                $content = "home.php";
                if (isset($_GET["content"])) {

                    $content = $_GET["content"];
                }
                include $content;
                ?>
            </div>
        </div>
    </div>
</div>