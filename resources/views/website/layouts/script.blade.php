<script src="{{ asset('website/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('website/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('website/js/jquery-ui.js') }}"></script>
<script src="{{ asset('website/js/popper.min.js') }}"></script>
<script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('website/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('website/js/aos.js') }}"></script>
<script src="{{ asset('website/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('website/js/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ asset('website/js/main.js') }}"></script>



<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready( function () {
$('#myTable').DataTable();
} );

// for date
window.onload = function() {
      var gregorianDate = new Date();

      var gregorianDateString = gregorianDate.toLocaleDateString('ar', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });

      var hijriDate = gregorianDate.toLocaleDateString('ar-u-ca-islamic', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });

      document.getElementById('gregorianDate').textContent = gregorianDateString;
      document.getElementById('hijriDate').textContent = hijriDate;
    };

    // for location

  function initMap() {
    // Create a map object with the desired location coordinates
    var map = new google.maps.Map(document.getElementById('map'), {
      center: { lat: 37.7749, lng: -122.4194 }, // Example coordinates (San Francisco)
      zoom: 12 // Adjust the zoom level as desired
    });

    // Add a marker to the map
    var marker = new google.maps.Marker({
      position: { lat: 37.7749, lng: -122.4194 }, // Example coordinates (San Francisco)
      map: map,
      title: 'Marker Title' // Add a custom title for the marker
    });
  }
</script>





