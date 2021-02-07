@foreach($photos as $s)
            <li><a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a> par <a href='/utilisateur/{{$s->user->id}}'>{{$s->user->name}}</a> aimé par {{$s->votes}} personnes</li>
@endforeach
