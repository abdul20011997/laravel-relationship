@for($i=0;$i<count($data);$i++)
<h1>Post Title - {{$data[$i]['title']}} - Created By - {{$data[$i]->user->name}}</h1>
@for ($j=0;$j<count($data[$i]->comment);$j++)
<h2>Comment - {{$data[$i]->comment[$j]->comment}}</h2>
@endfor
<hr>
@endfor