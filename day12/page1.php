<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';?>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
    <h3>หน้าที่ 1</h3>
    <h4>สถานะผู้ใช้ : <?php echo $_SESSION['user'] ?></h4>
    <h4>ผู้ใช้งาน : <?php echo $_SESSION['name'] ?></h4>
    <h3>TEST2</h3>
  <!-- </div> -->
</div>

<?php include_once 'footer.php' ?>

</body>
</html>