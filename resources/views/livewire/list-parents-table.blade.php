<div class="card">
    <div class="card-header">
        <h2 class="card-title">Parents list</h2>
    </div>
    <div class="card-body">
        <livewire:datatable :model="App\Models\User::class" uniqueId="parents-list-table" :filters="[['name' => 'role', 'arguments' => ['parent']], ['name' => 'inSchool'], ['name' => 'orderBy' , 'arguments' => ['name']]]" :columns="[
            ['property' => 'name'] , 
            ['property' => 'email'] ,
            ['property' => 'gender'] ,
            ['type' => 'dropdown', 'name' => 'actions','links' => [
                ['href' => 'parents.edit', 'text' => 'Manage Profile', 'icon' => 'fas fa-pen',],
                ['href' => 'parents.show', 'text' => 'View', 'icon' => 'fas fa-eye',  ],
                ['href' => 'parents.assign-students', 'text' => 'Assign students', 'icon' => 'fas fa fa-users'],
            ]],
            ['type' => 'delete', 'name' => 'Delete', 'action' => 'parents.destroy',]
         ]
        "/>
    </div>
</div>
