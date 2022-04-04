<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use Carbon\Carbon;
class Employees extends Component
{
    use WithPagination;
    public $search, $name, $employee_id, $employee_code, $department, $position, $hire_date, $status;
    public $isOpen = 0;
    public $updateEmp = false;
    public $deleteId = '';

    protected $queryString = ['search'];
    protected $rules = [
        'employee_code' => 'required',
        'name' => 'required|min:6',
        'department' => 'required',
        'position' => 'required',
        'hire_date' => 'required',
        'status' => 'required',
    ];

    public function render()
    {
        // $this->employees = Employee::search($this->search)->get();
        return view('livewire.employees', [
            'employees' => Employee::search($this->search)->paginate(10),
        ]);
    }
    public function mount()
    {
        $this->getEmployeeCode();
        // echo '<script>console.log('.$this->getEmployeeCode().')</script>';
    }
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->getEmployeeCode();
        $this->name = '';
        $this->department = '';
        $this->position = '';
        $this->hire_date = '';
        $this->status = '';
    }

    public function store() 
    {
        
        $this->validate();
        try{
            Employee::create([
                'employee_code' => $this->employee_code,
                'name' => $this->name,
                'department' => $this->department,
                'position' => $this->position,
                'hire_date' => $this->hire_date,
                'status' => $this->status,
                'created_at' => Carbon::today(),
                'updated_at' => Carbon::today(),

            ]);

            session()->flash('message', 'Employee Created Successfully.');
            $this->closeModal();
            $this->resetInputFields();
        }catch(\Exception $e){
            session()->flash('error', 'Something gone wrong in adding Employee');
        }

    }

    public function edit($id)
    {
        $this->updateEmp = true;
        $employees = Employee::findOrFail($id);
        $this->employee_id = $id;
        $this->employee_code = $employees->employee_code;
        $this->name = $employees->name;
        $this->department = $employees->department;
        $this->position = $employees->position;
        $this->hire_date = $employees->hire_date;
        $this->status = $employees->status;

        $this->openModal();
    }

    public function update(){
        $this->validate();
        try {
            // Update category
            Employee::find($this->employee_id)->fill([
                'employee_code' => $this->employee_code,
                'name' => $this->name,
                'department' => $this->department,
                'position' => $this->position,
                'hire_date' => $this->hire_date,
                'status' => $this->status,
                'updated_at' => Carbon::today(),
            ])->save();

            session()->flash('message', 'Employee Updated Successfully!!');
            $this->closeModal();
            $this->resetInputFields();
        } catch (\Exception $e) {
            session()->flash('error', 'Something goes wrong while updating Employee!!');
            $this->closeModal();
            $this->resetInputFields();
        }
    }

    public function deleteId($id)
    {
        $this->deletedId = $id;
    }
    public function delete()
    {
        Employee::find($this->deletedId)->delete();
        session()->flash('message', 'Employee Deleted Successfully.');
    }    
    /**
     * return getEmployeeCode for employee.
     *
     * @return void
     */
    public function getEmployeeCode()
    {
        $lastEmp = Employee::orderBy('id', 'DESC')->first();
        $empCode = explode('-', $lastEmp->employee_code);
        $number = $empCode[1]+1;
        $length = 5;
        $string = substr(str_repeat(0, $length) . $number, -$length);
        $newEmpCode = array($empCode[0], $string);
        $merge = implode('-', $newEmpCode);
        $this->employee_code = $merge;
        // return $merge;
    }
}
