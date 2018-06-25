@if($fileinfo === false)
    <h4>文件不存在</h4>
@else
    <span><?php echo $fileinfo;?></span>
@endif;