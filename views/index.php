<?php
/* @var $this \yii\web\View */
/* @var $id string */
/* @var $center string */
/* @var $item string */
?>
<div class="socialCircle-container">
    <?php
    if(!empty($items)){
        foreach ($items as $item){
            if(!empty($item)){
            ?>
            <div class="socialCircle-item"><?=$item?></div>
            <?php
        }
        }
    }else{
        ?>
        <div class="socialCircle-item">Item</div>
        <div class="socialCircle-item">NO</div>
        <?php
    }

    ?>
    <div id="<?=$id?>" class="socialCircle-center closed"><?=$center?></div>
</div>
