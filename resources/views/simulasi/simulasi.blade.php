<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shunda Plafon</title>
    <link rel="stylesheet" href="{{('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{('/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{('/assets/image/logo.png')}}">
</head>
<body>
    <div class="header">
        @include('homepage.header')
    </div>
   

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <nav>
                        <div class="corakmotif-text">
                            <p>Corak & Motif</p>
                        </div>
                        <div class="corakmotif-garis">
                        </div>
                        <br>
                        <div class="corakmotif">
                           <div class="corakmotif-content">
                                <div class=" example-1 scrollbar-ripe-malinka thin">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit repellendus et sapiente. Ducimus perspiciatis excepturi repellat vero totam minima perferendis, sapiente laboriosam impedit quaerat cupiditate quam est illum? Magni, quidem?</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit repellendus et sapiente. Ducimus perspiciatis excepturi repellat vero totam minima perferendis, sapiente laboriosam impedit quaerat cupiditate quam est illum? Magni, quidem?</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit repellendus et sapiente. Ducimus perspiciatis excepturi repellat vero totam minima perferendis, sapiente laboriosam impedit quaerat cupiditate quam est illum? Magni, quidem?</p>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </nav>
                </div>
                <div class="col-7">
                    <nav>
                        <div class="canvas-text">
                            <p>Canvas Simulasi</p>
                        </div>
                        <div class="canvas-garis">
                        </div>
                        <br>
                        <div class="canvas">
                            <div class="canvas-content">
                                
                            </div>
                         </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        @include('homepage.footer')
    </div>


</body>
</html>