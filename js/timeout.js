function timeout() {
  setTimeout(function() {
    $.post("sesaj.php",
    {
      get: "active"
    },
    function(data, status) {
      $("#time").append(data);
      timeout();
    });
  },
  3000);
}
timeout();
