<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>crud</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---25-After-Register.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <section class="clean-block clean-form dark h-100">
        <div class="container">
            <div class="block-heading" style="padding-top: 0px;">
                <h1>REGISTER</h1>
            </div>
            <form action="{{ url('insert') }}" method="POST">
                @csrf

                <div class="form-group mb-3"><label class="form-label">Name</label><input class="form-control" type="text" placeholder="Name" name="name" required="" autocomplete="off"></div>
                <div class="form-group mb-3"><label class="form-label">Age</label><input class="form-control" type="tel" placeholder="Age" name="age" required="" autocomplete="off"></div>
                <div class="form-group mb-3"><label class="form-label">Course</label><input class="form-control" type="text" name="course" autocomplete="off" required="" placeholder="Course"></div>
                <hr style="margin-top: 30px;margin-bottom: 10px;">
                <div style="text-align: right;">
                    <div class="d-inline-block form-group mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-blue);border-color: var(--bs-blue);"><i class="fas fa-save"></i>&nbsp;Save</button></div>
                    <div class="d-inline-block form-group mb-3"><a href="{{ url('index') }}" style="text-decoration:none"><button class="btn btn-primary d-block w-100" type="button" style="background: var(--bs-red); border-color: var(--bs-red);"><i class="icon ion-android-cancel"></i>&nbsp;Back</button></a></div>
                </div>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>