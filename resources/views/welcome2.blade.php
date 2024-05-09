<hr>
        
            <a href="{{url('/testlink/morepath/somemorepath/'.rand(1, 100).'/'.rand(1, 100).'/'.rand(1, 100))}}">test1</a>
            <a href="{{url('/testlink/morepath/somemorepath/'.rand(1, 100).'/'.rand(1, 100).'/'.rand(1, 100))}}" class="hover:underline">test2</a>
            <a href="{{url('/testlink/morepath/somemorepath/'.rand(1, 100).'/'.rand(1, 100).'/'.rand(1, 100))}}" class="hover:underline">test3 </a> 

            <a href="{{route('test.threepath', [2,3,4])}}">with route1</a>
            <h1>{{url('/testlink/morepath/somemorepath/'.rand(1, 100).'/'.rand(1, 100).'/'.rand(1, 100))}}</h1>
        <hr>