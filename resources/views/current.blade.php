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
                            class="btn-link btn-success btn-sm text-white">
                                More Info
                            </a>
                            <form method="post" action="{{ route('delete-employee') }}" class="pt-2">
                                @csrf
                                <input type="hidden" name="userid" value={{  $employee->id }}>
                                <button type="submit" class="btn btn-danger btn-sm text-white">Delete</button>
                            </form>
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
