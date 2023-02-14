<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Laracasts</h1>
  <p>PHP For Beginners</p>
  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link<?= urlIs('/') ? ' text-primary' : ''?>" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link<?= urlIs('/notes') ? ' text-primary' : ''?>" href="/notes">Notes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link<?= urlIs('/about') ? ' text-primary' : ''?>" href="about">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link<?= urlIs('/notes') ? ' text-primary' : ''?>" href="#">Another Link</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<nav aria-label="breadcrumb" class="bg-light text-dark mt-2 mb-2">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <?php echo $uri ?> Page
    </li>
  </ol>
</nav>