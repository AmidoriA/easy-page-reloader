<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  .main-frame {
    width: 100%;
    height: 800px;
  }
  </style>
  <!-- Latest compiled and minified JS -->
  <script src="//code.jquery.com/jquery.js"></script>
</head>
<body>
<div class="">
  <input type="text" id="url-text" value="http://www.w3schools.com">
  <button type="button" class="btn btn-primary" id="submit-button">Set url</button>
  <br>
  This page will refresh every 5 secound  
</div>
<iframe src="http://www.w3schools.com" class="main-frame" name="myFrame"></iframe>

<script type="text/javascript">
var Refresh = {
  init: function() {
    window.setInterval(function() {
      $('.main-frame').attr('src', $('.main-frame').attr('src'));
    }, 5000);
    this.binds();
  },

  binds: function() {
    var that = this;
    $('#submit-button').click(function() {
      that.setURL();
    });
  },

  setURL: function() {
    $('.main-frame').attr('src', $('#url-text').val());
  }
};

Refresh.init();
</script>
</body>
</html>