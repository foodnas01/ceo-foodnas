<?php
  
use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Traits\GuestRole;
  
class CreateGuestUserSeeder extends Seeder
{

    use GuestRole;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = $this->getPermissions();
        
        $role = Role::create(['name' => 'Guest']);
   
        //$permissions = Permission::pluck('id','id')->all();
  
        $role->syncPermissions($permissions);
   
    }
}