<!-- 
DEVELOPED BY: ANDYONE | Department of E-Government
VERSION: 1.0.0
POSITION: ICT Officer
-->
<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>ZOMBA | Central Hospital</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Medical HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Medical HTML Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="medic" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{ asset('plugins/animation/animate.min.css') }}">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}">
  <!-- timePicker -->
  <link rel="stylesheet" href="{{ asset('plugins/timePicker/timePicker.css') }}">
  
  <!-- Stylesheets -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

</head>

<body>
  <div class="page-wrapper">

@include('partials.frontendheader') 
@if (request()->routeIs('home'))
      @include('partials.frontendslider')
@endif
@yield('content')
@include('partials.frontendfooter')



    <!-- jquery -->
<script src="{{ asset('plugins/jquery.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>
<!-- FancyBox -->
<script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}" defer></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{ asset('plugins/google-map/gmap.js') }}" defer></script>

<!-- jquery-ui -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}" defer></script>
<!-- timePicker -->
<script src="{{ asset('plugins/timePicker/timePicker.js') }}" defer></script>

<!-- script js -->
<script src="{{ asset('js/script.js') }}"></script>
<script>
  (function () {
    var allTimeNode = document.getElementById("visitorAllTime");
    var todayNode = document.getElementById("visitorToday");
    var yesterdayNode = document.getElementById("visitorYesterday");
    var onlineNode = document.getElementById("visitorOnline");
    if (!allTimeNode || !todayNode || !yesterdayNode || !onlineNode) return;

    var todayKey = "zch_visitor_today_date";
    var todayCountKey = "zch_visitor_today_count";
    var yesterdayCountKey = "zch_visitor_yesterday_count";
    var allTimeKey = "zch_visitor_all_time";
    var currentDate = new Date().toISOString().slice(0, 10);

    var storedDate = localStorage.getItem(todayKey);
    var todayCount = parseInt(localStorage.getItem(todayCountKey) || "0", 10);
    var yesterdayCount = parseInt(localStorage.getItem(yesterdayCountKey) || "0", 10);
    var allTimeCount = parseInt(localStorage.getItem(allTimeKey) || "0", 10);

    if (storedDate !== currentDate) {
      if (storedDate) {
        localStorage.setItem(yesterdayCountKey, String(todayCount));
      }
      localStorage.setItem(todayKey, currentDate);
      localStorage.setItem(todayCountKey, "0");
      todayCount = 0;
      yesterdayCount = parseInt(localStorage.getItem(yesterdayCountKey) || "0", 10);
    }

    todayCount += 1;
    allTimeCount += 1;

    localStorage.setItem(todayCountKey, String(todayCount));
    localStorage.setItem(allTimeKey, String(allTimeCount));
    localStorage.setItem(todayKey, currentDate);

    allTimeNode.textContent = String(allTimeCount).padStart(4, "0");
    todayNode.textContent = String(todayCount).padStart(4, "0");
    yesterdayNode.textContent = String(yesterdayCount).padStart(4, "0");
    onlineNode.textContent = "001";
  })();
</script>
<script>
  (function () {
    var firstCard = document.querySelector(".cta .cta-block .emmergency");
    var otherCards = document.querySelectorAll(".cta .cta-block .top-doctor, .cta .cta-block .working-time");
    if (!firstCard || !otherCards.length) return;

    function activate() {
      firstCard.classList.add("is-dynamic");
    }

    function deactivate() {
      firstCard.classList.remove("is-dynamic");
    }

    otherCards.forEach(function (card) {
      card.addEventListener("mouseenter", activate);
      card.addEventListener("mouseleave", deactivate);
      card.addEventListener("focusin", activate);
      card.addEventListener("focusout", deactivate);
    });
  })();
</script>
<script>
  (function () {
    var statNodes = document.querySelectorAll(".history-stat h3");
    if (!statNodes.length) return;

    function parseTarget(raw) {
      var text = (raw || "").trim();
      var hasK = /k\+/i.test(text);
      var numeric = parseInt(text.replace(/[^0-9]/g, ""), 10) || 0;
      return {
        value: hasK ? numeric * 1000 : numeric,
        suffix: hasK ? "K+" : "+"
      };
    }

    function formatValue(value, suffix) {
      if (suffix === "K+") return Math.round(value / 1000) + "K+";
      return Math.round(value) + "+";
    }

    statNodes.forEach(function (node) {
      var target = parseTarget(node.textContent);
      var duration = 1200;
      var startTime = null;

      function step(ts) {
        if (!startTime) startTime = ts;
        var progress = Math.min((ts - startTime) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        var current = target.value * eased;
        node.textContent = formatValue(current, target.suffix);
        if (progress < 1) requestAnimationFrame(step);
      }

      node.textContent = "0+";
      requestAnimationFrame(step);
    });
  })();
</script>
</body>

</html>
