<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
            background-image: url('img/background.jpg'); /* Specify the path to your background image */
            background-size: cover; /* Scale the image to cover the entire body */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-attachment: fixed; /* Fix the image in place */
        } 
    </style>
</head>
<body>
    <form action="/" method="get">
        <div class="">
            <section class="mulai_regist vh-100" >
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong">
                                <div class="card_form card-body text-center">
                                    <h3 class="mb-0">Regist</h3>
                                    <h5 class="mb-3">Printershop customer account</h5>
                                    <div class="regist">
                                        <div class="form-outline mb-4">
                                            <input type="username" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Your Username" required/>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Email" required/> 
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" required/>
                                        </div>
                                        <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Regist</button> <br>
                                        <div class="btn_link blockquote-footer">
                                            <a href="login"> Kembali ke halaman login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
</body>

</html>