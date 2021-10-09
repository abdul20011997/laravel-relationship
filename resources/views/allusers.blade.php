@for($i=0;$i<count($data);$i++)
    <h1>{{$data[$i]['name']}}</h1> 
    <h2>Phone - <span>{{$data[$i]->phone->phone}}</span></h2>
@endfor