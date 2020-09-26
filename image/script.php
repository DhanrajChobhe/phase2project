<?php header("Content-type: text/javascript"); ?>

$(document).ready(function(){
  $(".grid").click(function(){
    $(".results-grid").css("display", "flex");
    $(".result-list").css("display", "none");
  });
  $(".list").click(function(){
    $(".results-grid").css("display", "none");
    $(".result-list").css("display", "flex");
  });
});