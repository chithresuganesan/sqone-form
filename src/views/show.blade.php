@extends('form::layouts.main')

@section('main-content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Usename</th>
                    <th scope="col">City</th>
                    <th scope="col">ZipCode</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($contacts as $key => $contact)

                    <tr>
                      <th scope="row">{{ $key + 1 }}</th>
                      <td>{{ $contact->first_name }}</td>
                      <td>{{ $contact->last_name }}</td>
                      <td>{{ $contact->user_name }}</td>
                      <td>{{ $contact->city }}</td>
                      <td>{{ $contact->zipcode }}</td>
                    </tr>
                  @empty

                  @endforelse

                </tbody>
              </table>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
    </div>
@endsection
