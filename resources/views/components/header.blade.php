<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('current-employee') }}">Employee Tool</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a
            class="nav-link @if (Request::routeIs('current-employee')) active @endif"
            href="{{ route('current-employee') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a
            class="nav-link @if (Request::routeIs('add-employee')) active @endif"
            href="{{ route('add-employee') }}">Add Employee</a>
        </li>
      </ul>
    </div>
  </nav>
