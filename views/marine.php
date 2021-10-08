<div class="pt-4">
    <i>
    А тут о морском дозоре!
    </i>
</div>

<?php
    $this_img = $url == "/marine/img"; 
    $this_info = $url == "/marine/info";     
?>

<div class="pt-4">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link <?php echo $this_img ? "active" : '' ?>" href="/marine/img">Картинка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $this_info ? "active" : '' ?>" href="/marine/info">Описание</a>
      </li>
    </ul>
</div>

<?php
    $url = $_SERVER["REQUEST_URI"];

    if ($url == "/") {
        require "../views/main.php";
    } elseif ($url == "/marine/img") {
        require "../views/marine/img.php";
    } elseif (preg_match("#^/marine/info#", $url)) {
        require "../views/marine/info.php";
    } 
?>