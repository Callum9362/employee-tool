@include('components.header')

<div class="container">
    <div class="row pt-2">
        <div class="col-1"></div>
        <div class="col-10">
            <h3 class="text-center">List of Current Employees</h3>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Posistion</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->first}}</td>
                        <td>{{$employee->last}}</td>
                        <td>{{$employee->position}}</td>
                        <td>
                            <a
                            href="{{ route('details-employee', ['userID' => $employee->id]) }}"
                            class="btn-link btn-success btn-sm text-white mr-2">
                                More Info
                            </a>
                            <a class="btn-link btn-danger btn-sm text-white" data-toggle="modal" data-target="#confirmDelete">Delete</a>
                        </td>
                    </tr>
                    @empty
                        <tr><td>There are no employees</td></tr>
                    @endforelse
                </tbody>
              </table>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="modal" id="confirmDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center">Warning !</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="text-center">Are you sure you want to delete this user?</p>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn-link btn btn-primary text-white" href="">Continue</a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
</div>

@include('components.footer')
