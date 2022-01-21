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
    <div class="container">
        <div class="col-md-12 search-table-col"><a href="{{ url('register') }}"><button class="btn btn-outline-primary text-truncate float-none float-sm-none add-another-btn" data-bss-hover-animate="pulse" type="button">Add Student<i class="fas fa-plus-circle edit-icon"></i></button></a>
            <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
            <div class="table-responsive table table-hover table-bordered results" style="margin-top: 5px;">
                <table class="table table-hover table-bordered">
                    <thead class="bill-header cs">
                        <tr>
                            <th id="trs-hd-1" class="col-lg-1">ID</th>
                            <th id="trs-hd-2" class="col-lg-2">NAME</th>
                            <th id="trs-hd-3" class="col-lg-3">AGE</th>
                            <th id="trs-hd-4" class="col-lg-2">COURSE</th>
                            <th id="trs-hd-6" class="col-lg-2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="warning no-result">
                            <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                        </tr>
                        @foreach($students as $std)
                        <tr>
                            <td>{{ $std->id }}</td>
                            <td>{{ $std->name }}</td>
                            <td>{{ $std->age }}</td>
                            <td>{{ $std->course }}</td>
                            <td><button class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check" style="font-size: 15px;"></i></button><button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>