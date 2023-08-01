@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="form-horizontal" method="POST" action="{{ route('AddUser') }}">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Tambah User</h4>
                        @if ($errors->customErrors->any())
                            @foreach ($errors->customErrors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $error }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 text-end control-label col-form-label ">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" class="form-control " id="username"
                                    placeholder="Username...">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 text-end control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control " name="name" id="name"
                                    placeholder="Name...">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 text-end control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password Here">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select name="role" id="role" class="form-control ">
                                    <option value="">Pilih Role</option>
                                    <option value="0">Super Admin</option>
                                    <option value="1">Admin Pengajuan & Proposal</option>
                                    <option value="2">Admin Digitasi</option>
                                    <option value="3">Admin Kornologis</option>
                                    <option value="4">Admin Monitoring</option>
                                </select>

                            </div>
                        </div>

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <div class="d-flex">

                                                <button type="button" class="btn btn-warning badge ms-1"
                                                    data-bs-toggle="modal" data-bs-target="#UpdateUser{{ $user->id }}">
                                                    <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"></i>

                                                </button>
                                                <div>
                                                    <button type="button" class="btn btn-danger badge ms-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#DataUserDelete{{ $user->id }}">
                                                        <i class="fas fa-trash" data-toggle="tooltip" data-placement="top"
                                                            title="Delete"></i>

                                                    </button>
                                                </div>

                                                <!-- Modal -->
                                                <div class="modal fade" id="DataUserDelete{{ $user->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header border-0">

                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body border-0">
                                                                Anda Yakin Ingin Menghapus <span
                                                                    style="color: red">{{ $user->username }}</span> ?
                                                            </div>
                                                            <div class="modal-footer border-0">
                                                                <button type="button" class="btn btn-success text-light"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <form action="/master/users/{{ $user->id }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit"
                                                                        class="btn btn-danger text-light">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- modal Update --}}

                                                <div class="modal fade" id="UpdateUser{{ $user->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <form class="form-horizontal" method="POST"
                                                                action="/master/users/{{ $user->id }}">
                                                                <div class="modal-header border-0">

                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body border-0">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Update User</h4>
                                                                        <div class="form-group row">
                                                                            <label for="username"
                                                                                class="col-sm-3 text-end control-label col-form-label">Username</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" name="username"
                                                                                    class="form-control @error('username') is-invalid @enderror"
                                                                                    id="username"
                                                                                    placeholder="Username..." value="{{ $user->username }}">
                                                                                @error('username')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="name"
                                                                                class="col-sm-3 text-end control-label col-form-label">Name</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text"
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    name="name" id="name"
                                                                                    placeholder="Name..."
                                                                                    value="{{ $user->name }}">
                                                                                @error('name')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="password"
                                                                                class="col-sm-3 text-end control-label col-form-label">Password</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="password" name="password"
                                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                                    id="password"
                                                                                    placeholder="( Masukan Password Bila ingin merubah )">
                                                                                @error('password')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="cono1"
                                                                                class="col-sm-3 text-end control-label col-form-label">Role</label>
                                                                            <div class="col-sm-9">
                                                                                <select name="role" id="role"
                                                                                    class="form-control @error('role') is-invalid @enderror">

                                                                                    <option value="0"
                                                                                        @if ($user->role == '0') selected @endif>
                                                                                        Super Admin</option>
                                                                                    <option value="1"
                                                                                        @if ($user->role == '1') selected @endif>
                                                                                        Admin Pengajuan & Proposal</option>
                                                                                    <option value="2"
                                                                                        @if ($user->role == '2') selected @endif>
                                                                                        Admin Digitasi</option>
                                                                                    <option value="3"
                                                                                        @if ($user->role == '3') selected @endif>
                                                                                        Admin Kornologis</option>
                                                                                    <option value="4"
                                                                                        @if ($user->role == '4') selected @endif>
                                                                                        Admin Monitoring</option>

                                                                                </select>
                                                                                @error('role')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>



                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer border-0">
                                                                    <button type="button"
                                                                        class="btn btn-success text-light"
                                                                        data-bs-dismiss="modal">Cancel</button>

                                                                    <button type="submit"
                                                                        class="btn btn-warning text-light">Update</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @include('layouts.alert')

    <script>
        function showModalEditUser(id) {
            $(`#UpdateUser${id}`).modal('show');
        }
    </script>

    @if (session()->has('updateError'))
        <script>
            $(function() {
                showModalEditUser('{{ session('updateError') }}')
            });
        </script>
    @endif
@endsection

@section('breadcrumb')
    <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Dashboard</h4>
        <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Master</li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
