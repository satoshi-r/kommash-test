<?php $path = "local/templates/main/"; ?>
<?php include_once 'local/templates/main/header.php'; ?>

<picture>
    <source type="image/webp" srcset="<?php echo $path; ?>img/preview.webp">
    <source type="image/jpeg" srcset="<?php echo $path; ?>img/preview.jpg">
    <img src="<?php echo $path; ?>img/preview.jpg" alt="preview">
</picture>
<img src="" alt="test">

<?php include_once 'local/templates/main/footer.php'; ?>