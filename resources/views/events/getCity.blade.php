
    <option>Select State</option>
    @foreach($cities as $eachCity)
    <option value="{{$eachCity->id}}">{{$eachCity->name}}</option>
    @endforeach
