
@include('layouts.header')

    <!-- Form + Iframe -->
<div class="row">
  <div class="col-sm-4">
    <form action="/form/submit" method="post">

       @csrf

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Name</label>
          <input type="text" class="form-control" name="first_name" id="inputName" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Surname</label>
          <input type="text" class="form-control" name="last_name" id="inputSurname" placeholder="Surname">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">E-mail</label>
        <input type="email" class="form-control" name="email" id="inputAddress" placeholder="E-mail">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Phone number</label>
        <input type="number" class="form-control" name="phone_number" id="inputAddress2" placeholder="Phone number">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div class="col-sm-8">

        <iframe width="100%" height="296" src="https://www.youtube.com/embed/TInfxe7c7yA"
                  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>

</div>


</div>

  @include('layouts.footer')
