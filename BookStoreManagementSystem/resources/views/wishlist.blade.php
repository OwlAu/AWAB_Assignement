<div class='form-group'>
    <label>Price(RM):</label>
    <div>
        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<a href='/delete_book_record/{{$book->id}}' type="button" class="btn btn-danger" >Delete</a>

<img style='width:300%' src='{{asset('uploads/societyLogo/'.$societyInfo->logo)}}' alt='image'>

$withProfilePic = <img style='width:30%' src='{{asset('uploads/profilePic/defaultProfilepic.png')}}' alt='image'>;
$withoutProfilePic = <img style='width:30%' src='{{asset('uploads/profilePic/'.$userinfo->profilePic)}}' alt='image'>;

