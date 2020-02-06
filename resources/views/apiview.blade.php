<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API View</title>
        <style>
            a,span,h1{display:block;margin-top:1em;}
        </style>
    </head>
    <body>
        <div class="flex-center">
            
            <ul>
                <h1>PHP array Contents</h1>    
                @foreach($contents as $result)
                    <li><a href="/api/content/{{ $result->id }}">{{ $result->title }}</a><span>{{ $result->description }}</span></li>
                @endforeach
             </ul>

            <ul> 
                <h1>JSON contents response</h1>
                <li>{{ $response }}</li>
            </ul>

            <form action="" method="POST">
                @csrf_token //so protection middleware can validate request
            </form>

        </div>
    </body>
</html>
