<div class="top-right links">

        <a href="{{ url(Session::get('language').'/') }}">Home</a>
        <a href="{{ url(Session::get('language').'/tours') }}">Tours</a>
        <a href="{{ url(Session::get('language').'/travels') }}">Travels</a>


<span style="float:right">
    <form name='chgLangForm' method="post" action="{{route('changelanguage')}}">
      {{csrf_field()}}
      <select onchange="document.chgLangForm.submit()" name="language" id="language">
        <option value=""
              @if (Session::get('language') == '')
              selected
              @endif
           >English</option>
        <option value="ar"

              @if (Session::get('language') == 'ar')
              selected
              @endif

         >Arabic</option>
      </select>
    </form>
</span>
</div>
