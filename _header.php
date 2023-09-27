<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">𝐵𝑒𝒶𝓃 & 𝐵𝓇𝑒𝓌 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/forum">𝙷𝚘𝚖𝚎 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about.php">𝙿𝚛𝚎-𝙾𝚛𝚍𝚎𝚛</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        𝙳𝚛𝚘𝚙𝚍𝚘𝚠𝚗
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">𝙾𝚞𝚛 𝙻𝚘𝚌𝚊𝚝𝚒𝚘𝚗𝚜</a>
          <a class="dropdown-item" href="#">𝙰𝚋𝚘𝚞𝚝 𝚄𝚜</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">𝚂𝚞𝚙𝚙𝚘𝚛𝚝 𝙱𝚎𝚊𝚗 & 𝙱𝚛𝚎𝚠</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" tabindex"-1">𝙲𝚘𝚗𝚝𝚊𝚌𝚝 𝚄𝚜
      </li>
    </ul>
    <div class="row mx-2">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">𝚂𝚎𝚊𝚛𝚌𝚑</button>
    </form>
    <button class="btn btn-outline-warning ml-2" data-toggle-"modal" data-target-"#loginModal">𝚂𝚒𝚐𝚗-𝚄𝚙</button>
    <button class="btn btn-outline-warning mx-2"data-toggle-"modal" data-target-"#loginModal>𝙻𝚘𝚐-𝙸𝚗</button>
    </div>


</div>
</nav>';

// include 'partials/_loginModal.php'; 
// include 'partials/_signupModal.php'; 
?>