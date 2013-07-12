$(document).ready(function(){
  $("pre.php").snippet("php",{style:"vim-dark"});
  $("pre.javascript").snippet("javascript",{style:"vim-dark"});
  $("pre.sh").snippet("sh",{style:"vim-dark"});
  $("pre.sql").snippet("sql",{style:"vim-dark"});

  $("pre.php-nonumber").snippet("php",{style:"vim-dark", showNum:false});
  $("pre.javascript-nonumber").snippet("javascript",{style:"vim-dark", showNum:false});
  $("pre.sh-nonumber").snippet("sh",{style:"vim-dark", showNum:false});
  $("pre.sql-nonumber").snippet("sql",{style:"vim-dark", showNum:false});
});