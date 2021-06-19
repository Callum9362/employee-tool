@include('components.header')

<div class="container">
    <div class="row pt-2">
        <div class="col-1"></div>
        <div class="col-10">
            <h3 class="text-center">List of Current Employees</h3>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
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
                            <button class="btn btn-danger btn-sm">Delete</button>
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
</div>

@include('components.footer')
