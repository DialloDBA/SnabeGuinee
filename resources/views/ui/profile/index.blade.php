@extends('inc.ui.app')
@section('content')
<div class="page-content-wrapper py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="affan-element-item">
            <div class="element-heading-wrapper">
              <i class="bi bi-list"></i>
              <div class="heading-text">
                <h6 class="mb-1">Navigation</h6>
                <span>Modern header, footer, and sidebar nav.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <!-- User Information-->
          <div class="affan-element-item">
            <div class="element-heading-wrapper">
              <i class="bi bi-list"></i>
              <div class="heading-text">
                <h6 class="mb-1">Mes Informations</h6>
                <span>Modern header, footer, and sidebar nav.</span>
              </div>
            </div>
          </div>
          <div class="card user-info-card mb-3">
            <div class="card-body d-flex align-items-center">
              <div class="user-profile me-3">
                <img src="{{asset('ui/img/bg-img/2.jpg')}}" alt="">
                <i class="bi bi-pencil"></i>
                <form action="#">
                  <input class="form-control" type="file">
                </form>
              </div>
              <div class="user-info">
                <div class="d-flex align-items-center">
                  <h5 class="mb-1">{{$user_data->nom_complet()}}</h5>
                  <span class="badge bg-warning ms-2 rounded-pill">Pro</span>
                </div>
                <p class="mb-0">N° de Dossier : {{ $user_data->unique}}</p>
                <p class="mb-0">CV : {{ $user_data->unique}}</p>
              </div>
            </div>
          </div>

          <div class="element-heading">
            <h6>Informations profile</h6>
          </div>
          <div class="card comparison-table-two mb-3">
            <div class="card-body">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th  class="fw-bold">Prénom</th>
                    <th>Basic</th>
                    <th>
                      <i class="bi bi-person-lines-fill text-white h1 mb-0"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="fw-bold">Nom</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Date de Naissance</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Lieu de Naissance</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Pays</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Ville</th>
                    <td>
                      {{$user_data->nom}}
                    </td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Etat Civil</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Copyright Removal</th>
                    <td><i class="text-danger bi bi-x-lg"></i></td>
                    <td><i class="bi bi-check-lg fz-16"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="element-heading">
            <h6>Mes Formations</h6>
          </div>
          <div class="card comparison-table-two">
            <div class="card-body">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th  class="fw-bold">Prénom</th>
                    <th>Basic</th>
                    <th>
                      <i class="bi bi-person-lines-fill text-white h1 mb-0"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="fw-bold">Nom</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Date de Naissance</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Lieu de Naissance</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Pays</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Ville</th>
                    <td>
                      {{$user_data->nom}}
                    </td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Etat Civil</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Copyright Removal</th>
                    <td><i class="text-danger bi bi-x-lg"></i></td>
                    <td><i class="bi bi-check-lg fz-16"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="element-heading my-3">
            <h6>Mes Expériences</h6>
          </div>
          <div class="card comparison-table-two">
            <div class="card-body">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th  class="fw-bold">Prénom</th>
                    <th>Basic</th>
                    <th>
                      <i class="bi bi-graduation-o text-white h1 mb-0"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="fw-bold">Nom</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Date de Naissance</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Lieu de Naissance</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Pays</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Ville</th>
                    <td>
                      {{$user_data->nom}}
                    </td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Etat Civil</th>
                    <td>{{$user_data->nom}}</td>
                    <td>{!! (!blank($user_data->nom)) ? '<i class="bi bi-check-lg fz-16"></i>' : '<i class="text-danger bi bi-x-lg"></i>' !!}</td>
                  </tr>
                  <tr>
                    <th class="fw-bold">Copyright Removal</th>
                    <td><i class="text-danger bi bi-x-lg"></i></td>
                    <td><i class="bi bi-check-lg fz-16"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card d-none">
            <div class="card-body">
              <form action="#">
                <div class="form-group mb-3">
                  <label class="form-label" for="Username">Username</label>
                  <input class="form-control" id="Username" type="text" value="@designing-world" placeholder="Username">
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="fullname">Full Name</label>
                  <input class="form-control" id="fullname" type="text" value="Affan Islam" placeholder="Full Name"
                    readonly>
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="email">Email Address</label>
                  <input class="form-control" id="email" type="text" value="care@example.com" placeholder="Email Address"
                    readonly>
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="job">Job Title</label>
                  <input class="form-control" id="job" type="text" value="UX/UI Designer" placeholder="Job Title">
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="portfolio">Portfolio URL</label>
                  <input class="form-control" id="portfolio" type="url" value="https://themeforest.net/user/designing-world"
                    placeholder="Portfolio URL">
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="address">Address</label>
                  <input class="form-control" id="address" type="text" value="28/C Green Road, BD" placeholder="Address">
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="bio">Bio</label>
                  <textarea class="form-control" id="bio" name="bio" cols="30" rows="10"
                    placeholder="Working as UX/UI Designer at Designing World since 2016."></textarea>
                </div>

                <button class="btn btn-success w-100" type="submit">Update Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection