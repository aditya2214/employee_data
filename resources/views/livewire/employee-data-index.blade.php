<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4>Personal Data</h4>
                    <hr>
                    @if(Auth::user()->role==1)
                    @if($statusUpdate)
                    <livewire:update-employee-data></livewire:update-employee-data>
                    @else
                    <livewire:store-employee-data></livewire:store-employee-data>
                    @endif
                    </div>
                    @endif
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <select wire:model="paginate" name="" id="" class="form-control form-control-sm w-auto">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col">
                                <input wire:model="search" type="text" class="form-control" placeholder="search">
                            </div>
                        </div>
                        <br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Employe_Id</th>
                                    <th>Employe_Name</th>
                                    <th>Departement</th>
                                    <th>Skills</th>
                                    @if(Auth::user()->role==1)
                                    <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->employee_id}}</td>
                                    <td>{{$employee->employee_name}}</td>
                                    <td>{{$employee->depart->departemen_name}}</td>
                                    <td>
                                        @foreach($employee->employee_skill as $skills)
                                            <ul>
                                                <li>{{$skills->skill_name}}</li>
                                            </ul>
                                        @endforeach
                                    </td>
                                    @if(Auth::user()->role==1)
                                    <td>
                                        <button wire:click="getdata({{$employee->id}})" class="btn btn-warning btn-sm">Edit</button>
                                        <button wire:click="destroy({{$employee->id}})" class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
