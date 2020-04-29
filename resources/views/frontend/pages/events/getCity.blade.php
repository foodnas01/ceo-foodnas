
    <option>City</option>
    @foreach($cities as $eachCity)
    <option  @if(isset($cityid) && ($cityid == $eachCity->id)) selected @endif value="{{$eachCity->id}}">{{$eachCity->name}}</option>
    @endforeach
