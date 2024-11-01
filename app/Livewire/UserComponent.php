<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public $data = [];
    public $modal = false;
    public $editar = false;
    public $id = '';
    public $name = '';
    public $apellido = '';
    public $email = '';
    public $contrasena = '';
    public $phone = '';

    public function mount(){
        $this->data = $this->getmount();
    }

    public function getmount(){
        return  User::all();
    }

    public function render()
    {
        return view('livewire.user-component');
    }

    private function clearfields()
    {
        $this->id = '';
        $this->name = '';
        $this->apellido = '';
        $this->email = '';
        $this->phone = '';
        $this->contrasena = '';
        $this->editar = false;
    }

    public function openmodal(){
        $this->clearfields();
        $this->modal = true;
    }

    public function closemodal(){
        $this->modal = false;
    }

    public function crear_user(){

        if($this->id){
            $obj = User::find($this->id);
            $obj->password = $obj->password;
            $this->validate([
                'name' => ['required', 'string', 'min:3', 'max:50'],
                'apellido' => ['required', 'string', 'min:3', 'max:50'],
                'phone' => ['required', 'integer'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            ]);
        }else{
            $obj = new User();

            $this->validate([
                'name' => ['required', 'string', 'min:3', 'max:50'],
                'apellido' => ['required', 'string', 'min:3', 'max:50'],
                'phone' => ['required', 'integer'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'contrasena' => ['required', 'string'],
            ]);
            $obj->password = bcrypt($this->contrasena);
        }
        $obj->name = $this->name;
        $obj->apellido = $this->apellido;
        $obj->email = $this->email;
        $obj->phone = $this->phone;
        $obj->save();
        $this->clearfields();
        $this->modal = false;
        $this->data = $this->getmount();
    }

    public function editUser($id){
        $obj = User::find($id);
        $this->id = $obj->id;
        $this->name = $obj->name;
        $this->apellido = $obj->apellido;
        $this->email = $obj->email;
        $this->phone = $obj->phone;
        $this->modal = true;
        $this->editar = true;
    }

    public function deleteUser($id){
        $obj = User::find($id);
        $obj->delete();
        $this->data = $this->getmount();
    }
}
