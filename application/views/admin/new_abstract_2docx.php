<section class="wrapper" id="wrapper">
    <div>
        <div><b>[Information]</b></div>
        <span><?php echo $base['SERIAL'];?></span>
        <span>
            <?php
                if ("1"==$base['PRESENT_TYPE']) {
                    echo '포스터 발표';
                } else {
                    echo '포스터 전시';
                }
            ?>
        </span>
        
        <div>
            <span><?php echo $base['NAME'];?></span>
            <span><?php echo $base['PHONE'];?></span>
            <span><?php echo $base['EMAIL'];?></span><br />
        </div>

        <div><b>[Author Information]</b></div>
        <p style="text-align:center">
            <b><?php echo $base['TITLE'];?></b>
        </p>
        <div style="text-align:center;">
            <?php echo $base['AUTHOR_NAME'];?><br />
        </div>
        <div style="text-align:center;">
            <?php echo $base['AUTHOR_AFFILIATIONS'];?><br />
        </div>

        <h1 style="text-align:center"><b>Abstract</b></h1>
        <div><b>[Background]</b></div>
        <div>
            <?php echo $base['BACKGROUND'];?><br />
        </div>

        <div><b>[Method]</b></div>
        <div>
            <?php echo $base['METHOD'];?><br />
        </div>

        <div><b>[Result]</b></div>
        <div>
            <?php echo $base['RESULT'];?><br />
        </div>

        <div><b>[Conclusions]</b></div>
        <div>
            <?php echo $base['CONCLUSIONS'];?><br />
        </div>
        <div><b>[Image]</b></div>
        <div>
            
            <?php
                if($file && $file[0]){
                    foreach($file as $image) {
                        echo "<a href='/assets/abstract/" . $image['file_name'] . "' download='" . $image['orig_name'] . "'> <img src='https://kscp-conf.com/assets/abstract/" . $image['file_name'] . "' style='width:25%;'></a>";
                    }
                }
            ?>
        </div>
    </div>
</section>    


        

