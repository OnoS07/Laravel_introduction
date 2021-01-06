<html>
    <head>
        <title>Hello/Index</title>
        <style>
            body {font-size: 16pt; color: #999;}
            h1 {font-size: 120pt; text-align: right; color: #f6f6f6; margin: -50px 0px -100px 0px;letter-spacing: -4pt;}
        </style>
    </head>
    <body>
        <h1>Index</h1>
        <p>ディレクティブ紹介</p>
        <ol>
            @foreach($items as $item)
                @if($loop->first)
                    <p>繰り返しデータ一覧</p>
                    <ul> 
                @endif
                    <li>繰り返し：{{$loop->iteration}}回目  No.{{$item}}
                @if($loop->last)
                    </ul>
                    <p>繰り返し終了</p>
                @endif
            @endforeach
        </ol>

    </body>
</html>