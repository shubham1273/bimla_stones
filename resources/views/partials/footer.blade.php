@php
    use App\Helper;
@endphp

<footer class="footer">
    <div class="container-fluid d-flex justify-content-between">

      <div class="copyright">
        Copyright © {{ Helper::getSetting('website_name') }}  {{date('Y')}}
      </div>
    </div>
  </footer>
