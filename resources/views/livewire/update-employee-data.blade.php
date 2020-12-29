<div>
    <form wire:submit.prevent="Updatedata">
        <input wire:model="personal_id" type="hidden" name="">
        <div  class="form-group">
            <input wire:model="employeename" type="text" placeholder="Employe Name" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Departement</label>
            <select wire:model="departement" name="departement"class="form-control">
            @foreach($departements as $departement)
                <option value="{{$departement->id}}">{{$departement->departemen_name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <div class="col-sm-4">Employee Skills</div>
            <div class="col-sm-8">
                <div class="form-check">
                @foreach($employeeskils as $employeeskill)
                    <input wire:model="employeeskill.{{$employeeskill->id}}" class="form-check-input" value="{{$employeeskill->id}}" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">{{$employeeskill->skill_name}}</label>
                    <br>
                @endforeach
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-sm">Simpan</button>
        </div>
    </form>
</div>
