@include('components.header')

<div class="container">
    <div class="row pt-2">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card">
                <h5 class="card-header">Details For Employee: {{$employee->first . " " . $employee->last}}</h5>
                <div class="card-body">
                 <p>Position: {{ $employee->position}}</p>
                 <p>Start Date: {{ $employee->created_at}}</p>
                </div>
              </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>

@include('components.footer')
