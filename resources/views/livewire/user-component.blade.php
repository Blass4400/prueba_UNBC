

<div>
    <table class="table">
        <button wire:click="openmodal()" class="btn btn-primary px-4 py-2 my-3">Crear</button>
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->apellido}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <button wire:click.prevent="editUser({{$user->id}})" class="btn btn-primary">Editar</button>
                        <button wire:click.prevent="deleteUser({{$user->id}})" wire:confirm="Deseas eliminar este usuario?" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if($modal)
        <div class="container">
            <div class="row fixed left-10 top-0 flex h-full w-full items-center  bg-black bg-opacity-50 py-8" style="padding-left: 260px">
                <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
                    <div class="w-full">
                        <div class="m-8 my-20 max-w-[400px] mx-auto">
                            <div class="mb-8 ">
                                <h1 style="font-size: 24px;" class="mb-4 text-3xl text-black font-extrabold">
                                    @if (!$editar)
                                        Crear
                                    @else
                                        Editar
                                    @endif
                                        usuario
                                </h1>
                                <form>
                                    <div class="mb-4">
                                        <label for="name" class="col-form-label text-sm  font-medium text-gray-900">Name</label>
                                        <input wire:model="name" type="text" class="form-control bg-gray-50 border border-gray-300" name="name" placeholder="Name" id="name" required>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="apellido" class="block mb-2 text-sm  font-medium text-gray-900">Apellido</label>
                                        <input wire:model="apellido" type="text" id="apellido" name="apellido" class="form-control bg-gray-50 border border-gray-300" placeholder="Apellido" required> 
                                        @error('apellido') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="telefono" class="block mb-2 text-sm  font-medium text-gray-900">Telefono</label>
                                        <input  wire:model="phone" type="phone" id="telefono" name="telefono" class="form-control bg-gray-50 border border-gray-300" placeholder="Telefono" required> 
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="block mb-2 text-sm  font-medium text-gray-900">Email</label>
                                        <input wire:model="email" type="email" id="email" name="email" class="form-control bg-gray-50 border border-gray-300" placeholder="Email" required> 
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    @if (!$editar)
                                        <div class="mb-4">
                                            <label for="contrasena" class="block mb-2 text-sm  font-medium text-gray-900">Contraseña</label>
                                            <input wire:model="contrasena" type="password" id="contrasena" name="contrasena" class="form-control bg-gray-50 border border-gray-300" placeholder="Contraseña" required> 
                                            @error('contrasena') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    @endif
                                    <div class="space-y-4 flex flex-row">
                                        <button wire:click.prevent="crear_user()" class="py-2 my-3 bg-black btn btn-primary border rounded-full  w-full font-semibold">Guardar</button>
                                        <button wire:click.prevent="closemodal()" class="py-2 my-3 bg-black btn btn-danger border rounded-full w-full font-semibold">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

