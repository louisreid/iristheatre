<?php
foreach ($photos as $key => $photo) {
    $res = Fppg::str_lreplace('/', '/' . $code . '/', $photo->picture);
    $picture = preg_replace('/_[aso].([^_a.]*)$/', '_n.$1', $res);

    $rel = $settings['fppg_gallery'] == 'PrettyPhoto' ? 'fpgallery[' . $albumid . ']' : $albumid . 'fpgallery';
    ?>
    <div class="fb-PhotoThumbWrap">
        <a id="" target="_blank" class="fb-PhotoThumbLink fb-PhotoThumbnail fb-Photo<?php echo $classtext ?>Thumb" data-cancomment="" data-viewonfb="<?php echo $showfblink ?>" data-fburl="<?php echo $photo->link ?>" data-from="<?php echo $photo->from->id ?>" data-id="<?php echo $photo->id ?>" href="<?php echo $photo->source ?>" rel="<?php echo $rel ?>" title="<?php echo $photo->name ?>">
            <i style="background-image:url(<?php echo $picture ?>)"></i>
        </a>
    </div>
    <?php
}
?>

<?php if ($next != "") { ?>
    <div class="fb-BottomBar" data-page="1"  data-size="<?php echo strtolower($classtext); ?>" data-cancomment="<?php echo $cancomment ?>" data-next="<?php echo $next ?>" data-id="<?php echo $id ?>" ><span class="fb-Loadmore" style="margin: 0 5px"><img src="<?php echo FPPG_URL ?>images/down-pointer.png" /><span id="fb-LoadMoreWall"><?php echo __('Show more', 'fppg') ?></span></span></div>
<?php
}