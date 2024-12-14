<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{asset('/template/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    

    <!----------------------- Main Container -------------------------->

    <div class="container  d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

    <div class="border  rounded-5 p-3  shadow box-area " style="background: #f0f0f0">

    <!--------------------------- Left Box ----------------------------->

    <div class="gambar rounded-3 d-flex justify-content-center align-items-center flex-column left-box shadow bg-white " >
        <div class="featured-image mb-3">
           
        </div>
        <p class="min text-white fs-2" style="font-family:'Poppins', Courier, monospace; font-weight:600">SARPRAS</p>
       
        
    </div>

    <!-------------------- ------ Right Box ---------------------------->
    <div class="right-box">
        <div class="row align-items-center">
                <div class="header-text ">
                    
                    <h2>Inventaris Barang</h2>
                </div>
                <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6 text-center" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6 text-center" placeholder="Password">
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                </div>
                
        </div>
</div>
</div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>