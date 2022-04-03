<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class Employees extends Component
{
    use WithPagination;
    public $search, $employees, $employee_code, $name, $department, $position, $hire_date, $status;
    public $isOpen = 0;
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
        $this->employees = Employee::all();
        // $this->employees = Employee::where('name', 'like', '%'.$this->search.'%')->paginate(10);

        return view('livewire.employees');
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
        $this->employee_code = '';
        $this->name = '';
        $this->department = '';
        $this->position = '';
        $this->hire_date = '';
        $this->status = '';
    }

    public function store() 
    {
        $validated = $this->validate();

        Employee::updateOrCreate(
            ['id'=> $this->employee_id],
            $validated
        );

        session()->flash('message', $this->employee_id ? 'Employee Updated Successfully.' : 'Employee Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
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
    public function deleteId($id)
    {
        $this->deletedId = $id;
    }
    public function delete()
    {
        Employee::find($this->deletedId)->delete();
        session()->flash('message', 'Employee Deleted Successfully.');
    }
}
