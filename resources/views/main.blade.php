<html>
<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container my-container">

    <div class="row text-center">
    <h3>Hello, <strong></strong>!</h3>
    </div>
    <div class="jumbotron my-jumbo">
    <img src="{{ asset('img/main-shiba.jpg') }}" class="img-thumbnail">
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
        This is panel
        </div>
        <div class="panel-body">
        There will be some nonsense content
        But bellow you can shake the doge my friend...
        </div>
    </div>
    <div class="row text-center">
    <img src="{{ asset('img/Doge.png')}}" class="shake shake-hard">
    </div>

    <div class="well">
    Living well... I mean literally living in DOM element with "well" class..
    </div>

    <div class="row vertical-align">
        <div class="col-md-4 notes-back">
            <div class="notes-inner shake">
                <div class="notes-text align-middle text-center">
                    There some text,<br/>
                    Attempt to rhyme,<br/>
                    Skip to next,</br>
                    It's waste of time<br/>
                </div>
            </div>
        </div>
    
        <div class="col-md-4 notes-back">
            <div class="notes-inner shake shake-hard">
                <div class="notes-text align-middle text-center">
                    There some text,<br/>
                    Attempt to rhyme,<br/>
                    Skip to next,</br>
                    It's waste of time<br/>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 notes-back">
            <div class="notes-inner shake shake-opacity">
                <div class="notes-text align-middle text-center">
                    There some text,<br/>
                    Attempt to rhyme,<br/>
                    Skip to next,</br>
                    It's waste of time<br/>
                </div>
            </div>
        </div>
    
    </div>
</div>
</body>

</html>

