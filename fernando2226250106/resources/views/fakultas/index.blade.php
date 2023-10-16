<h3>fakultas</h2>
    {{-- $ilkom --}}



    <ul>
        @if(count($fakultas)> 0)
        @foreach ($fakultas as $item)
        <li> {{$item}} </li>
        @endforeach
        @else
        <l1> belum ada data</l1>
        @endif
    </ul>
    @include('layout.footer')