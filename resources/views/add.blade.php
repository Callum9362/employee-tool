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
                    <input type="text" class="form-control @error('first') border-danger @enderror" name="first" placeholder="Enter First Name" required>
                    @error('first')
                        <span class="text-danger">{{ $message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control @error('last') border-danger @enderror" name="last" placeholder="Enter Last Name" required>
                    @error('last')
                        <span class="text-danger">{{ $message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Position</label>
                    <input type="text" class="form-control @error('position') border-danger @enderror" name="position" placeholder="Enter Posistion" required>
                    @error('position')
                        <span class="text-danger">{{ $message}}</span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>

@include('components.footer')
