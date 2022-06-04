<h1>Cars</h1>
<ul>
    @foreach($cars as $car)
    <li><a href="/cars/{{$car->id}}">{{$car->producer}}: {{$car->title}}</a></li>
    @endforeach
</ul>