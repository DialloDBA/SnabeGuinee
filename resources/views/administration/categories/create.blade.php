@extends('layouts.default')
@section('css')
<link rel="stylesheet" href="{{asset('snabe/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('snabe/css/select2.min.css')}}">
@endsection
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Users</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index')}}">Utilisateurs</a></li>
                    <li class="breadcrumb-item active">Création d'un utilisateur</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form action="{{ route("admin.users.store")}}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method("POST")
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nom <span class="text-danger">*</span></label>
                            <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" value="{{old('nom') ?? ""}}">
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Prénom <span class="text-danger">*</span></label>
                            <input class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" value="{{old('prenom') ?? ""}}">
                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email') ?? ""}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Telephone 1 (SMS) <span class="text-danger">*</span></label>
                            <input class="form-control @error('telephone_1') is-invalid @enderror" type="tel" name="telephone_1" placeholder="Exemple: 626 20 20 14" value="{{old('telephone_1') ?? ""}}" >
                            @error('telephone_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Telephone 2 <i class="text-muted">(Facultatif)</i></label>
                            <input class="form-control @error('telephone_2') is-invalid @enderror" type="tel" name="telephone_2" placeholder="Exemple: 626 20 20 14" value="{{old('telephone_2') ?? ""}}">
                            @error('telephone_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Mot de passe par default</label>
                            <input class="form-control @error('mot_de_passe') is-invalid @enderror" name="mot_de_passe" type="password" readonly value="<?= "S".rand(1000,1000000)."G" ?>">
                            @error('mot_de_passe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Role <span class="text-danger">*</span> </label>
                            <select class="select @error('role') is-invalid @enderror" name="role">
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Profession</label>
                            <input type="text" class="form-control @error('profession') is-invalid @enderror" placeholder="Profession" name="profession"  id="profession" value="{{old('profession') ?? ""}}">
                            @error('profession')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <div class="profile-img-wrap edit-img">
                                <img class="inline-block avatar" src="" alt="Photo" id="avatar"/>
                                <div class="fileupload btn">
                                  <span class="btn-text">Choisir une photo</span>
                                  <input class="upload" type="file" id="imagefile"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="table-responsive m-t-15 d-none">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>Module de Permission</th>
                                <th class="text-center">Lire</th>
                                <th class="text-center">Modifier</th>
                                <th class="text-center">Créer</th>
                                <th class="text-center">Supprimer</th>
                                <th class="text-center">Importer</th>
                                <th class="text-center">Exporter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Employee</td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Holidays</td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Leaves</td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Events</td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Ajouter l'utilisateur</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
    
<script src="{{asset('snabe/js/select2.min.js')}}"></script>
<script src="{{asset('snabe/js/moment.min.js')}}"></script>
<script src="{{asset('snabe/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('snabe/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('snabe/js/dataTables.bootstrap4.min.js')}}"></script>
{{-- <script type="text/javascript">
    const avatar = (event)=>{
        const imgfile = event.target.files;
        const imgfilelength = imgfile.length;
        if(imgfilelength>0){
            const imageSrc = URL.createObjectURL(imgfile[0]);
            const avatar = document.querySelector("#avatar");
            avatar.src = imageSrc;
            avatar.style.display = "block";
        }
    }
</script> --}}
@endsection