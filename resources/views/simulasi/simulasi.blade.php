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
                                <div class=" example-1 scrollbar square scrollbar-lady-lips thin">
                                    <div class="card-body">
                                        <div class="card-deck">
                                            <div class="card">
                                              <img class="card-img-top" src="{{('/corak_motif/1.JPG')}}" width="40px" height="100px" alt="Card image cap">
                                        
                                              <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <img class="card-img-top" src="{{('/corak_motif/2.JPG')}}" width="40px" height="100px"  alt="Card image cap">
                                             
                                              <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <img class="card-img-top" src="{{('/corak_motif/3.JPG')}}" width="40px" height="100px" alt="Card image cap">
                                             
                                              <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card-deck">
                                            <div class="card">
                                              <img class="card-img-top" src="{{('/corak_motif/4.JPG')}}" width="40px" height="100px" alt="Card image cap">
                                        
                                              <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <img class="card-img-top" src="{{('/corak_motif/5.JPG')}}" width="40px" height="100px" alt="Card image cap">
                                             
                                              <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <img class="card-img-top" src="{{('/corak_motif/6.JPG')}}" width="40px" height="100px" alt="Card image cap">
                                             
                                              <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                            </div>
                                          </div>
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