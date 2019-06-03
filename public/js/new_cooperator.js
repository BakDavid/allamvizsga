var counter = 1;

$('#add_cooperator').on('click', function () {
    addCooperator();
    counter++;
});

$('#remove_cooperator').on('click', function () {
    if (counter >= 1)
    {
        removeCooperator();
    }
});

function addCooperator() {
    var new_cooperator = '<div class=card id=added_coop' + counter + '><div class="card-header">Cooperator#' + counter + ' Data</div> <div class=card-body> <div class="form-group row"> <label for=first_name' + counter + ' class="col-md-4 col-form-label text-md-right">First Name</label> <div class="col-md-6"> <input id=first_name' + counter + ' type="text" class="form-control" name="first_name[]" required autofocus> </div> </div> <div class="form-group row"> <label for=last_name' + counter + ' class="col-md-4 col-form-label text-md-right">Last Name</label> <div class="col-md-6"> <input id=last_name' + counter + ' type="text" class="form-control" name="last_name[]" required autofocus> </div> </div> <div class="form-group row"> <label for=birth_date' + counter + ' class="col-md-4 col-form-label text-md-right">Birth Date</label> <div class="col-md-6"> <input id=birth_date' + counter + ' type="date" class="form-control" name="birth_date[]" required autofocus> </div> </div> <div class="form-group row"> <label for=address' + counter + ' class="col-md-4 col-form-label text-md-right">Address</label> <div class="col-md-6"> <input id=address' + counter + ' type="text" class="form-control" name="address[]" required autofocus> </div> </div> <div class="form-group row"> <label for=city' + counter + ' class="col-md-4 col-form-label text-md-right">City</label> <div class="col-md-6"> <input id=city' + counter + ' type="text" class="form-control" name="city[]" required autofocus> </div> </div> <div class="form-group row"> <label for=country' + counter + ' class="col-md-4 col-form-label text-md-right">Country</label> <div class="col-md-6"> <input id=country' + counter + ' type="text" class="form-control" name="country[]" required autofocus> </div> </div> <div class="form-group row"> <label for=zipcode' + counter + ' class="col-md-4 col-form-label text-md-right">Zipcode</label> <div class="col-md-6"> <input id=zipcode' + counter + ' type="number" class="form-control" name="zipcode[]" required autofocus> </div> </div> <div class="form-group row"> <label for=email' + counter + ' class="col-md-4 col-form-label text-md-right">E-Mail Address</label> <div class="col-md-6"> <input id=email' + counter + ' type="email" class="form-control" name="email[]" required> </div> </div> <div class="form-group row"> <label for=telephone' + counter + ' class="col-md-4 col-form-label text-md-right">Telephone</label> <div class="col-md-6"> <input id=telephone' + counter + ' type="number" class="form-control" name="telephone[]" required autofocus> </div> </div> <div class="form-group row"> <label for=university' + counter + ' class="col-md-4 col-form-label text-md-right">University</label> <div class="col-md-6"> <input id=university' + counter + ' type="text" class="form-control" name="university[]" required autofocus> </div> </div> <div class="form-group row"> <label for=department' + counter + ' class="col-md-4 col-form-label text-md-right">Department</label> <div class="col-md-6"> <input id=department' + counter + ' type="text" class="form-control" name="department[]" required autofocus></div></div> </div> </div>';

    //var new_cooperator = '<a id="add_cooperator" class="btn btn-primary">Buzi</a>';

    $('#cooperator_data').append(new_cooperator);
}

function removeCooperator() {
    counter--;
    $('#added_coop' + counter).remove();
}
