<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
      <?php
          foreach ($this->var as $key => $value) {
      
            echo '<a href="holiday/'.strtolower($key).'/">'.$value.'</a>';

          }
      ?>
    <a href="#about">About</a>
  </div>
</div>
<div>

<!-- <?php

// var_dump($this->var);

?> -->
</div>