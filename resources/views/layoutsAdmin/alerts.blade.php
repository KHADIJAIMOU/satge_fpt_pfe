{{-- @if ($errors->any())
    @php
        $var = "<ul>
             <li>mehdi</li>
            <li>younes</li>
        </ul>";
        echo '<script>
            toastr.success('.$var.')
        </script>';
    @endphp
@endif --}}

{{-- @if ($errors->any())
    <script>
        toastr.success('var')
    </script>
@endif --}}

{{-- @if (Session::has('message')) --}}

{{-- var type = "{{ Session::get('alert-type', 'info') }}";
switch(type)
{
case 'info':
toastr.info("{{ Session::get('message') }}");
break;

case 'warning':
toastr.warning("{{ Session::get('message') }}");
break;

case 'success':
toastr.success("{{ Session::get('message') }}");
break;

case 'error':
toastr.error("{{ Session::get('message') }}");
break;
} --}}

{{-- @endif --}}
