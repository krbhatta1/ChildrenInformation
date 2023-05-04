<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <main>
<div class="table-responsive m-3">
    <button type="button" name="add" id="add" class="btn btn-success">Add New</button>
        <form action="/post" method="POST">
            @csrf

            {{-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}

                <table class="table table-bordered" id="table">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Child First Name</th>
                        <th scope="col">Child Middle Name</th>
                        <th scope="col">Child Last Name</th>
                        <th scope="col">Child Age</th>
                        <th scope="col">Child Gender</th>
                        <th scope="col">Different Address</th>
                        <th scope="col">Child Address</th>
                        <th scope="col">Child City</th>
                        <th scope="col">Child State</th>
                        <th scope="col">Child Country</th>
                        <th scope="col">Child Zip Code</th>
                    </tr>
                    @foreach ($child as $ch)
                    <tr>
                        <td>
                             {{-- <a href="{{url('/delete')}}/{{$ch['childid']}}"> --}}
                            <button type="button" class="btn btn-danger row_del" id="row_del">Delete</button>
                            {{-- </a> --}}
                        </td>
                        <td>{{$ch['ChildFirstName']}}</td>
                        <td>{{$ch['ChildMiddleName']}}</td>
                        <td>{{$ch['ChildLastName']}}</td>
                        <td>{{$ch['ChildAge']}}</td>
                        <td>{{$ch['ChildGender']}}</td>
                        <td>{{$ch['ChildAddress']}}</td>
                        <td>{{$ch['ChildCity']}}</td>
                        <td>{{$ch['ChildState']}}</td>
                        <td>{{$ch['ChildCountry']}}</td>
                        <td>{{$ch['ChildZipCode']}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td><button type="button" class="btn btn-danger row_del" id="row_del">Delete</button></td>
                        <td>
                            <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" aria-describedby="first" placeholder="first name">
                            <small id="first" class="text-danger">
                                @error('first_name')
                                {{$message}}
                                @enderror</small>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="middle_name" id="middle_name" value="{{ old('middle_name') }}" aria-describedby="middle" placeholder="middle name">
                            <small id="middle" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('middle_name')
                                {{$message}}
                                @enderror</small>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}" aria-describedby="last" placeholder="last name">
                            <small id="last" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('last_name')
                                {{$message}}
                                @enderror</small>
                        </td>
                        <td>
                            <input type="number" class="form-control" name="age" id="age" value="{{ old('age') }}" aria-describedby="agemsg" placeholder="Child Age">
                            <small id="agemsg" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('age')
                                {{$message}}
                                @enderror</small>
                        </td>
                        <td>
                            <select class="form-control" name="gender" id="gender">
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            <small id="gendermsg" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('gender')
                                {{$message}}
                                @enderror</small>
                        </td>
                        <td>
                            <input type="checkbox" name="different_address" id="different_address" {{ old('different_address') ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="text"  class="form-control" name="address" id="address" value="{{ old('address') }}" aria-describedby="addressmsg" placeholder="Child Address" disabled>
                            <small id="addressmsg" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('address')
                                {{$message}}
                                @enderror</small>
                        </td>
                        <td>
                            <input type="text"  class="form-control" name="city" id="city" value="{{ old('city') }}" aria-describedby="citymsg" placeholder="Child City" disabled>
                            <small id="citymsg" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('city')
                                {{$message}}
                                @enderror</small>
                        <td>
                            <input type="text"  class="form-control" name="state" id="state" value="{{ old('state') }}" aria-describedby="statemsg" placeholder="Child State" disabled>
                            <small id="statemsg" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('state')
                                {{$message}}
                                @enderror</small>
                        </td>
                        <td>
                            <select class="form-control" name="country" id="country" disabled>
                                <option value="">Select Country</option>
                                <option value="Nepal" {{ old('country') == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                                <option value="China" {{ old('country') == 'China' ? 'selected' : '' }}>China</option>
                                <option value="America" {{ old('country') == 'America' ? 'selected' : '' }}>America</option>
                                <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                            </select>
                            <small id="countrymsg" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('country')
                                {{$message}}
                                @enderror</small>
                        </td>

                        <td>
                            <input type="number" class="form-control" name="zip" id="zip" value="{{ old('zip') }}" aria-describedby="msg" placeholder="Child Zip" disabled>
                            <small id="zipmsg" class="form-text text-muted">
                                <small id="first" class="text-danger">
                                @error('zip')
                                {{$message}}
                                @enderror</small>
                        </td>
                    </tr>
                </table>

                <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>


<script>
var i = 0;
    $(document).ready(function() {

        //  For different address checkd and unchecked
        $("#different_address").change(function() {
				if($(this).is(":checked")) {
					$("#address, #city, #state, #country, #zip").prop("disabled", false);
				} else {
					$("#address, #city, #state, #country, #zip").prop("disabled", true);
				}
			});
        //  add new row display when clic on add button
      $("#add").click(function() {
        i++;
        $("#table").append(
            `<tr>
                <td><button type="button" class="btn btn-danger row_del" id="row_del">Delete</button></td>
                <td>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" aria-describedby="first" placeholder="first name">
                    <small id="first" class="form-text text-muted">
                    </small>
                </td>
                <td>
                    <input type="text" class="form-control" name="middle_name" id="middle_name" value="{{ old('middle_name') }}" aria-describedby="middle" placeholder="middle name">
                    <small id="middle" class="form-text text-muted"></small>
                </td>
                <td>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}" aria-describedby="last" placeholder="last name">
                    <small id="last" class="form-text text-muted"></small>
                </td>
                <td>
                    <input type="number" class="form-control" name="age" id="age" value="{{ old('age') }}" aria-describedby="agemsg" placeholder="Child Age">
                    <small id="agemsg" class="form-text text-muted"></small>
                </td>
                <td>
                    <select class="form-control" name="gender" id="gender">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    <small id="gendermsg" class="form-text text-muted"></small>
                </td>
                <td>
                    <input type="checkbox" name="different_address" id="different_address" {{ old('different_address') ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="text"  class="form-control" name="address" id="address" value="{{ old('address') }}" aria-describedby="addressmsg" placeholder="Child Address" disabled>
                    <small id="addressmsg" class="form-text text-muted"></small>
                </td>
                <td>
                    <input type="text"  class="form-control" name="city" id="city" value="{{ old('city') }}" aria-describedby="citymsg" placeholder="Child City" disabled>
                    <small id="citymsg" class="form-text text-muted"></small>
                </td>
                <td>
                    <input type="text"  class="form-control" name="state" id="state" value="{{ old('state') }}" aria-describedby="statemsg" placeholder="Child State" disabled>
                    <small id="statemsg" class="form-text text-muted"></small>
                </td>
                <td>
                    <select class="form-control" name="country" id="country" disabled>
                        <option value="">Select Country</option>
                        <option value="Nepal" {{ old('country') == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                        <option value="China" {{ old('country') == 'China' ? 'selected' : '' }}>China</option>
                        <option value="America" {{ old('country') == 'America' ? 'selected' : '' }}>America</option>
                        <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                    </select>
                    <small id="countrymsg" class="form-text text-muted"></small>
                </td>

                <td>
                    <input type="number" class="form-control" name="zip" id="zip" value="{{ old('zip') }}" aria-describedby="msg" placeholder="Child Zip" disabled>
                    <small id="zipmsg" class="form-text text-muted"></small>
                </td>
                </tr>`);
            });

        //  delete row after delete button click
            $(document).on('click','.row_del', function(){
                $(this).parents('tr').remove();
            });
        });

        </script>

{{-- <script>
    var i = 0;
    $(document).ready(function() {
        $('#add').click(function(){
            console.log(i);
            i++;
            $('#table').append(
                `<tr><td>
                    <input type="text" name="input[`+1+`][name]" placeholder="enter name" class="form-control"/>
                </td>
                <td><button type="button" class="btn btn-danger remove-table-row">Remove</button></td>
            </tr>
            `;
            )
        });
    });
</script> --}}








{{-- <td><input type="text" name="input[`+1+`][name]" placeholder="enter name" class="form-control"/></td> --}}




</main>
<footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>
