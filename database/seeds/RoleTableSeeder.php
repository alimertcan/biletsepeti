<?php
use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal User';
        $role_user->save();
		
        $role_staff = new Role();
        $role_staff->name = 'Staff';
        $role_staff->description = 'A Staff';
        $role_staff->save();
		
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'A Admin';
        $role_admin->save();
    }
}

?>