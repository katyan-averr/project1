<div class="pt-4">
    <i>
    Тут мы расскажем о пиратах!
    </i>
</div>

<?php
    $this_img = $url == "/pirates/img"; 
    $this_info = $url == "/pirates/info";     
?>

<div class="pt-4">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link <?php echo $this_img ? "active" : '' ?>" href="/pirates/img">Картинка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $this_info ? "active" : '' ?>" href="/pirates/info">Описание</a>
      </li>
    </ul>
</div>

<?php
    $url = $_SERVER["REQUEST_URI"];

    if ($url == "/") {
        require "../views/main.php";
    } elseif ($url == "/pirates/img") {
        require "../views/pirates/img.php";
    } elseif (preg_match("#^/pirates/info#", $url)) {
        require "../views/pirates/info.php";
    } 
?>