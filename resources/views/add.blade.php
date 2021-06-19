@include('components.header')

<div class="container">
    <div class="row pt-2">
        <div class="col-1"></div>
        <div class="col-10">
            <h3 class="text-center">Add New Employee</h3>
            <form action="{{ route('add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first" placeholder="Enter First Name" required>
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last" placeholder="Enter Last Name" required>
                  </div>
                  <div class="form-group">
                    <label>Position</label>
                    <input type="text" class="form-control" name="position" placeholder="Enter Posistion" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>

@include('components.footer')
