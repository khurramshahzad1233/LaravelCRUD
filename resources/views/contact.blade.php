<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>userform</title>
</head>
<body>
   
    <div class="container mt-3">
        <form action="{{url('/')}}/contact" method="POST">
            @csrf
            <h2 class="text-center">CONTACT FORM</h2>
            <div class="row g-3  mb-4">
                <div class="col">
                  <input type="text" class="form-control" placeholder=" name" aria-label="name" name="name">
                  <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder=" email" aria-label="email" name="email">
                  <span class="text-danger">
                    @error('email')
                    {{$message}}                        
                    @enderror
                  </span>
                </div>
              </div>
              <div class="row g-3 mb-4">
                <div class="col">
                  <input type="password" class="form-control" placeholder="password" aria-label="password" name="password">
                  <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col">
                  <input type="password" class="form-control" placeholder="confirm password" aria-label="password_confirmation" name="password_confirmation">
                  <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                  </span>
                </div>
              </div>
              <div class="row g-3 mb-4">
                <div class="col">
                  <input type="text" class="form-control" placeholder="country" aria-label="country" name="country">
                  <span class="text-danger">
                    @error('country')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="state" aria-label="state" name="state">
                  <span class="text-danger">
                    @error('state')
                        {{$message}}
                    @enderror
                  </span>
                </div>
              </div>
              <div class="row g-3  mb-4">
                <div class="col">
                  <input type="text" class="form-control" placeholder="address" aria-label="address" name="address">
                  <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                
              </div>
              <div class="row g-3  mb-4">
                <div class="col">
                    <select class="form-select form-select-sm" aria-label="value" name="value">
                        <option value="">city</option>
                        <option value="1">lahore</option>
                        <option value="2">karachi</option>
                        <option value="3">islamabad</option>
                      </select>
                      <span class="text-danger">
                        @error('value')
                            {{$message}}
                        @enderror
                      </span>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
                            <label class="form-check-label" for="flexRadioDefault1">
                              male
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female">
                            <label class="form-check-label" for="flexRadioDefault2">
                              female
                            </label>
                          </div>
                          <span class="text-danger">
                            @error('gender')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                    
                </div>
                
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
</body>
</html>